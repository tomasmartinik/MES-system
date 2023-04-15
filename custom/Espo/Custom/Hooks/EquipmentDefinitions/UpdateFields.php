<?php

namespace Espo\Custom\Hooks\EquipmentDefinitions;

use Espo\ORM\Entity;

use Espo\Core\Utils\Log;

use Espo\Core\ORM\EntityManager;

class UpdateFields
{
    public function __construct(

        protected EntityManager   $entityManager,
        protected Log             $log,

    ) {}

    public function afterSave(Entity $entity, array $options = []): void
    {

        if ($entity->isAttributeChanged('equipmentClassListsIds')) {

            $tridy = $entity->get('equipmentClassLists');
            
            if ($tridy){
            foreach ($tridy as $trida) {
                
                $classList = $this->entityManager
                ->getRDBRepository('EquipmentClasses')
                ->where(['id' => $trida->get('id')])
                ->findOne();
                
                $classProps = $classList->get('equipmentClassesPropertiesElementses');
                if ($classProps){
                foreach ($classProps as $classProp){
                    $valMap = $entity->getValueMap();
                    unset($valMap->id);

                    $alreadyExisting = $this->entityManager
                    ->getRDBRepository('EquipmentDefinitionsPropertiesFromClasses')
                    ->where([
                        'equipmentDefinitionListId' => $entity->get('id'),
                        'equipmentClassesPropertiesElementsId' => $classProp->get('id')
                    ])
                    ->findOne();

                    if ($alreadyExisting == NULL){
                        $valMap->equipmentClassesPropertiesElementsId = $classProp->get('id');
                        $valMap->equipmentClassesPropertiesElementsName = $classProp->get('name');
                        $valMap->equipmentDefinitionListId = $entity->get('id');
                        $valMap->equipmentDefinitionListName = $entity->get('id');
                        $valMap->equipmentClassesId = $trida->get('id');
                        $valMap->equipmentClassesName = $trida->get('name');
                        $valMap->description = $classProp->get('description');
                        $valMap->name = $classProp->get('name');
                        $this->entityManager->createEntity('EquipmentDefinitionsPropertiesFromClasses', $valMap);
                    }

                    
                }
            }

               

            }
        }

            $pocetZaznamu = 0;
            $pocetProps = 0;
            $pocetTrid = 0;

            $alreadyExistingAll = $this->entityManager
            ->getRDBRepository('EquipmentDefinitionsPropertiesFromClasses')
            ->where([
                'equipmentDefinitionListId' => $entity->get('id')
            ])
            ->find();
            // ulozim si vsechny zaznamy, ktere maji definici, ve ktere zrovna jsme
            if ($alreadyExistingAll){
            foreach ($alreadyExistingAll as $exists){
                $pocetZaznamu++;

                $tridy = $entity->get('equipmentClassLists');
         
                $keep = 0;
                
                if ($tridy){
                foreach ($tridy as $trida) {
                    $pocetTrid++;
                    
                    $classesList = $this->entityManager
                    ->getRDBRepository('EquipmentClasses')
                    ->where(['id' => $trida->get('id')])
                    ->findOne();
                    $classProps = $classesList->get('equipmentClassesPropertiesElementses');
                    // ulozim si properties tridy

                    if ($classProps){
                    foreach ($classProps as $classProp){
                        $pocetProps++;
                        
                        if ($exists->get('equipmentClassesPropertiesElementsId') == $classProp->get('id')) {
                            $keep = 1;
                        }
                        
                }

                }
            }
            }

            if ($keep != 1){
                $delete = $this->entityManager->getQueryBuilder()->delete()
                ->from('EquipmentDefinitionsPropertiesFromClasses')
                ->where([
                    'id' => $exists->get('id')
                    ])
                ->build();
               
                $this->entityManager->getQueryExecutor()->execute($delete);
            }
        
    }
}


       }
    }



}
