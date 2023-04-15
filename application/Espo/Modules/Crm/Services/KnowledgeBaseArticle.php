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

namespace Espo\Modules\Crm\Services;

use Espo\Core\Exceptions\BadRequest;
use Espo\Core\Exceptions\Forbidden;
use Espo\Core\Exceptions\NotFound;
use Espo\Core\Exceptions\Error;

use Espo\Services\Record;

use Espo\Entities\Attachment;

use Espo\Modules\Crm\Entities\KnowledgeBaseArticle as KnowledgeBaseArticleEntity;

use Espo\Core\{
    Di,
    Select\SearchParams,
};

use stdClass;

/**
 * @extends Record<\Espo\Modules\Crm\Entities\KnowledgeBaseArticle>
 */
class KnowledgeBaseArticle extends Record implements

    Di\FileStorageManagerAware
{
    use Di\FileStorageManagerSetter;

    protected $readOnlyAttributeList = ['order'];

    public function getCopiedAttachments(string $id, ?string $parentType = null, ?string $parentId = null): stdClass
    {
        $ids = [];
        $names = (object) [];

        if (empty($id)) {
            throw new BadRequest();
        }

        $entity = $this->entityManager->getEntity('KnowledgeBaseArticle', $id);

        if (!$entity) {
            throw new NotFound();
        }

        if (!$this->acl->checkEntity($entity, 'read')) {
            throw new Forbidden();
        }

        $entity->loadLinkMultipleField('attachments');

        $attachmentsIds = $entity->get('attachmentsIds');

        foreach ($attachmentsIds as $attachmentId) {
            /** @var Attachment|null $source */
            $source = $this->entityManager->getEntity('Attachment', $attachmentId);

            if ($source) {
                $attachment = $this->entityManager->getNewEntity('Attachment');

                $attachment->set('role', 'Attachment');
                $attachment->set('type', $source->get('type'));
                $attachment->set('size', $source->get('size'));
                $attachment->set('global', $source->get('global'));
                $attachment->set('name', $source->get('name'));
                $attachment->set('sourceId', $source->getSourceId());
                $attachment->set('storage', $source->get('storage'));

                if (!empty($parentType) && !empty($parentId)) {
                    $attachment->set('parentType', $parentType);
                    $attachment->set('parentId', $parentId);
                }

                if ($this->fileStorageManager->exists($source)) {
                    $this->entityManager->saveEntity($attachment);

                    $contents = $this->fileStorageManager->getContents($source);

                    $this->fileStorageManager->putContents($attachment, $contents);

                    $ids[] = $attachment->getId();

                    $names->{$attachment->getId()} = $attachment->get('name');
                }
            }
        }

        return (object) [
            'ids' => $ids,
            'names' => $names,
        ];
    }

    /**
     * @param ?array<mixed,mixed> $where
     * @throws NotFound
     * @throws Forbidden
     * @throws Error
     */
    public function moveUp(string $id, ?array $where = null): void
    {
        assert($this->entityType !== null);

        $entity = $this->entityManager->getEntity('KnowledgeBaseArticle', $id);

        if (!$entity) {
            throw new NotFound();
        }

        if (!$this->acl->check($entity, 'edit')) {
            throw new Forbidden();
        }

        $currentIndex = $entity->get('order');

        if (!is_int($currentIndex)) {
            throw new Error();
        }

        if (!$where) {
            $where = [];
        }

        $params = [
            'where' => $where,
        ];

        $query = $this->selectBuilderFactory
            ->create()
            ->from($this->entityType)
            ->withStrictAccessControl()
            ->withSearchParams(SearchParams::fromRaw($params))
            ->buildQueryBuilder()
            ->where([
                'order<' => $currentIndex,
            ])
            ->order([
                ['order', 'DESC'],
            ])
            ->build();

        $previousEntity = $this->getRepository()
            ->clone($query)
            ->findOne();

        if (!$previousEntity) {
            return;
        }

        $entity->set('order', $previousEntity->get('order'));

        $previousEntity->set('order', $currentIndex);

        $this->entityManager->saveEntity($entity);
        $this->entityManager->saveEntity($previousEntity);
    }

    /**
     * @param ?array<mixed,mixed> $where
     * @throws NotFound
     * @throws Forbidden
     * @throws Error
     */
    public function moveDown(string $id, ?array $where = null): void
    {
        assert($this->entityType !== null);

        $entity = $this->entityManager->getEntity('KnowledgeBaseArticle', $id);

        if (!$entity) {
            throw new NotFound();
        }

        if (!$this->acl->check($entity, 'edit')) {
            throw new Forbidden();
        }

        $currentIndex = $entity->get('order');

        if (!is_int($currentIndex)) {
            throw new Error();
        }

        if (!$where) {
            $where = [];
        }

        $params = [
            'where' => $where,
        ];

        $query = $this->selectBuilderFactory
            ->create()
            ->from($this->entityType)
            ->withStrictAccessControl()
            ->withSearchParams(SearchParams::fromRaw($params))
            ->buildQueryBuilder()
            ->where([
                'order>' => $currentIndex,
            ])
            ->order([
                ['order', 'ASC'],
            ])
            ->build();

        $nextEntity = $this->getRepository()
            ->clone($query)
            ->findOne();

        if (!$nextEntity) {
            return;
        }

        $entity->set('order', $nextEntity->get('order'));

        $nextEntity->set('order', $currentIndex);

        $this->entityManager->saveEntity($entity);
        $this->entityManager->saveEntity($nextEntity);
    }

    /**
     * @param ?array<mixed,mixed> $where
     * @throws NotFound
     * @throws Forbidden
     * @throws Error
     */
    public function moveToTop(string $id, ?array $where = null): void
    {
        assert($this->entityType !== null);

        $entity = $this->entityManager->getEntity('KnowledgeBaseArticle', $id);

        if (!$entity) {
            throw new NotFound();
        }

        if (!$this->acl->check($entity, 'edit')) {
            throw new Forbidden();
        }

        $currentIndex = $entity->get('order');

        if (!is_int($currentIndex)) {
            throw new Error();
        }

        if (!$where) {
            $where = [];
        }

        $params = [
            'where' => $where,
        ];

        $query = $this->selectBuilderFactory
            ->create()
            ->from($this->entityType)
            ->withStrictAccessControl()
            ->withSearchParams(SearchParams::fromRaw($params))
            ->buildQueryBuilder()
            ->where([
                'order<' => $currentIndex,
            ])
            ->order([
                ['order', 'ASC'],
            ])
            ->build();

        $previousEntity = $this->getRepository()
            ->clone($query)
            ->findOne();

        if (!$previousEntity) {
            return;
        }

        $entity->set('order', $previousEntity->get('order') - 1);

        $this->entityManager->saveEntity($entity);
    }

    /**
     * @param ?array<mixed,mixed> $where
     * @throws NotFound
     * @throws Forbidden
     * @throws Error
     */
    public function moveToBottom(string $id, ?array $where = null): void
    {
        assert($this->entityType !== null);

        $entity = $this->entityManager->getEntity('KnowledgeBaseArticle', $id);

        if (!$entity) {
            throw new NotFound();
        }

        if (!$this->acl->check($entity, 'edit')) {
            throw new Forbidden();
        }

        $currentIndex = $entity->get('order');

        if (!is_int($currentIndex)) {
            throw new Error();
        }

        if (!$where) {
            $where = [];
        }

        $params = [
            'where' => $where,
        ];

        $query = $this->selectBuilderFactory
            ->create()
            ->from($this->entityType)
            ->withStrictAccessControl()
            ->withSearchParams(SearchParams::fromRaw($params))
            ->buildQueryBuilder()
            ->where([
                'order>' => $currentIndex,
            ])
            ->order([
                ['order', 'DESC'],
            ])
            ->build();

        $nextEntity = $this->getRepository()
            ->clone($query)
            ->findOne();

        if (!$nextEntity) {
            return;
        }

        $entity->set('order', $nextEntity->get('order') + 1);

        $this->entityManager->saveEntity($entity);
    }
}
