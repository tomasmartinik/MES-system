<?php
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

namespace Espo\Core\FieldValidation;

use Espo\ORM\Entity;

use Espo\Core\{
    FieldValidation\Exceptions\ValidationError,
    Utils\Metadata,
    Utils\FieldUtil,
};

use LogicException;
use stdClass;

/**
 * A field validation manager.
 */
class FieldValidationManager
{
    /** @var array<string,?object> */
    private $checkerCache = [];

    private Metadata $metadata;
    private FieldUtil $fieldUtil;
    private ValidatorFactory $factory;

    public function __construct(Metadata $metadata, FieldUtil $fieldUtil, ValidatorFactory $factory)
    {
        $this->metadata = $metadata;
        $this->fieldUtil = $fieldUtil;
        $this->factory = $factory;
    }

    /**
     * Process validation.
     *
     * @param Entity $entity An entity.
     * @param ?stdClass $data Raw request payload data.
     * @param ?FieldValidationParams $params Validation additional parameters.
     *
     * @throws ValidationError On the first invalid check.
     */
    public function process(Entity $entity, ?stdClass $data = null, ?FieldValidationParams $params = null): void
    {
        $this->processInternal($entity, $data, $params, true);
    }

    /**
     * Process validation w/o exception throwing.
     *
     * @param Entity $entity An entity.
     * @param ?stdClass $data Raw request payload data.
     * @param ?FieldValidationParams $params Validation additional parameters.
     * @return Failure[] A list of validation failures.
     */
    public function processAll(Entity $entity, ?stdClass $data = null, ?FieldValidationParams $params = null): array
    {
        try {
            return $this->processInternal($entity, $data, $params, false);
        }
        catch (ValidationError $e) {
            throw new LogicException();
        }
    }

    /**
     * @return Failure[]
     * @throws ValidationError On the first invalid check.
     */
    private function processInternal(
        Entity $entity,
        ?stdClass $data,
        ?FieldValidationParams $params,
        bool $throw
    ): array {

        $dataIsSet = $data !== null;

        if (!$data) {
            $data = (object) [];
        }

        if (!$params) {
            $params = new FieldValidationParams();
        }

        $fieldList = $this->fieldUtil->getEntityTypeFieldList($entity->getEntityType());

        $skipFieldList = $params->getSkipFieldList();

        $failureList = [];

        foreach ($fieldList as $field) {
            if (in_array($field, $skipFieldList)) {
                continue;
            }

            if (
                !$entity->isNew() &&
                $dataIsSet &&
                !$this->isFieldSetInData($entity->getEntityType(), $field, $data)
            ) {
                continue;
            }

            $itemFailureList = $this->processField($entity, $field, $params, $data, $throw);

            $failureList = array_merge($failureList, $itemFailureList);
        }

        return $failureList;
    }

    /**
     * Check a specific field for a specific validation type.
     */
    public function check(Entity $entity, string $field, string $type, ?stdClass $data = null): bool
    {
        if (!$data) {
            $data = (object) [];
        }

        $entityType = $entity->getEntityType();

        $fieldType = $this->fieldUtil->getEntityTypeFieldParam($entityType, $field, 'type');
        $validationValue = $this->fieldUtil->getEntityTypeFieldParam($entityType, $field, $type);

        $mandatoryValidationList = $this->metadata->get(['fields', $fieldType, 'mandatoryValidationList'], []);

        if (!in_array($type, $mandatoryValidationList)) {
            if (is_null($validationValue) || $validationValue === false) {
                return true;
            }
        }

        $result = $this->processFieldCheck($entityType, $type, $entity, $field, $validationValue);

        if (!$result) {
            return false;
        }

        $resultRaw = $this->processFieldRawCheck($entityType, $type, $data, $field, $validationValue);

        if (!$resultRaw) {
            return false;
        }

        return true;
    }

    /**
     * @return Failure[]
     *@throws ValidationError
     */
    private function processField(
        Entity $entity,
        string $field,
        FieldValidationParams $params,
        stdClass $data,
        bool $throw
    ): array {

        $entityType = $entity->getEntityType();

        $fieldType = $this->fieldUtil->getEntityTypeFieldParam($entityType, $field, 'type');

        $validationList =
            $this->metadata->get(['entityDefs', $entityType, 'fields', $field, 'validationList']) ??
            $this->metadata->get(['fields', $fieldType, 'validationList']) ?? [];

        $mandatoryValidationList =
            $this->metadata->get(['entityDefs', $entityType, 'fields', $field, 'mandatoryValidationList']) ??
            $this->metadata->get(['fields', $fieldType, 'mandatoryValidationList']) ?? [];

        $failureList = [];

        foreach ($validationList as $type) {
            $value = $this->fieldUtil->getEntityTypeFieldParam($entityType, $field, $type);

            if (is_null($value) && !in_array($type, $mandatoryValidationList)) {
                continue;
            }

            if (in_array($field, $params->getTypeSkipFieldList($type))) {
                continue;
            }

            $result = $this->check($entity, $field, $type, $data);

            if ($result) {
                continue;
            }

            $failure = new Failure($entityType, $field, $type);

            $failureList[] = $failure;

            if ($throw) {
                throw ValidationError::create($failure);
            }
        }

        return $failureList;
    }

    /**
     * @param mixed $validationValue
     */
    private function processFieldCheck(
        string $entityType,
        string $type,
        Entity $entity,
        string $field,
        $validationValue
    ): bool {

        $checker = $this->getFieldTypeChecker($entityType, $field);

        if (!$checker) {
            return true;
        }

        $methodName = 'check' . ucfirst($type);

        if (!method_exists($checker, $methodName)) {
            return true;
        }

        return $checker->$methodName($entity, $field, $validationValue);
    }

    /**
     * @param mixed $validationValue
     */
    private function processFieldRawCheck(
        string $entityType,
        string $type,
        stdClass $data,
        string $field,
        $validationValue
    ): bool {

        $checker = $this->getFieldTypeChecker($entityType, $field);

        if (!$checker) {
            return true;
        }

        $methodName = 'rawCheck' . ucfirst($type);

        if (!method_exists($checker, $methodName)) {
            return true;
        }

        return $checker->$methodName($data, $field, $validationValue);
    }

    private function getFieldTypeChecker(string $entityType, string $field): ?object
    {
        $key = $entityType . '_' . $field;

        if (!array_key_exists($key, $this->checkerCache)) {
            $this->loadFieldTypeChecker($entityType, $field);
        }

        return $this->checkerCache[$key];
    }

    private function loadFieldTypeChecker(string $entityType, string $field): void
    {
        $key = $entityType . '_' . $field;

        if (!$this->factory->isCreatable($entityType, $field)) {
            $this->checkerCache[$key] = null;

            return;
        }

        $this->checkerCache[$key] = $this->factory->create($entityType, $field);
    }

    private function isFieldSetInData(string $entityType, string $field, stdClass $data): bool
    {
        $attributeList = $this->fieldUtil->getActualAttributeList($entityType, $field);

        $isSet = false;

        foreach ($attributeList as $attribute) {
            if (property_exists($data, $attribute)) {
                $isSet = true;

                break;
            }
        }

        return $isSet;
    }
}
