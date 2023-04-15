<?php

namespace Espo\Custom\Hooks\MaterialDefinitions;

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

        if ($entity->isAttributeChanged('materialClassesIds')) {

            $tridy = $entity->get('materialClasses');   //Vezmeme si tridy, ze kterych se budou generovat zaznamy vlastnosti
            
            if ($tridy){
            foreach ($tridy as $trida) {    // Kazdou tridu projdeme
                
                $classList = $this->entityManager 
                ->getRDBRepository('MaterialClasses')
                ->where(['id' => $trida->get('id')])
                ->findOne();
                
                $classProps = $classList->get('materialProperties');  // Vezmeme si vlastnosti z dane tridy
                if ($classProps){
                foreach ($classProps as $classProp){    //Pro kazdou vlastnost..
                    $valMap = $entity->getValueMap();   
                    unset($valMap->id);

                    $alreadyExisting = $this->entityManager
                    ->getRDBRepository('MaterialDefinitionsPropertiesFromClasses')
                    ->where([
                        'materialDefinitionsId' => $entity->get('id'),
                        'materialPropertiesId' => $classProp->get('id')
                    ])
                    ->findOne(); //Projdeme záznamy 

                    if ($alreadyExisting == NULL){
                        $valMap->materialPropertiesId = $classProp->get('id');
                        $valMap->materialPropertiesName = $classProp->get('name');
                        $valMap->materialDefinitionsId = $entity->get('id');
                        $valMap->materialDefinitionsName = $entity->get('name');
                        $valMap->materialClassesId = $trida->get('id');
                        $valMap->materialClassesName = $trida->get('name');
                        $valMap->description = $classProp->get('description');
                        $valMap->name = $classProp->get('name');
                        $this->entityManager->createEntity('MaterialDefinitionsPropertiesFromClasses', $valMap);
                    }

                    
                }
            }

               

            }
        }

            $pocetZaznamu = 0;
            $pocetProps = 0;
            $pocetTrid = 0;

            $alreadyExistingAll = $this->entityManager
            ->getRDBRepository('MaterialDefinitionsPropertiesFromClasses')
            ->where([
                'materialDefinitionsId' => $entity->get('id')
            ])
            ->find();
            // ulozim si vsechny zaznamy, ktere maji definici, ve ktere zrovna jsme
            if ($alreadyExistingAll){
            foreach ($alreadyExistingAll as $exists){
                $pocetZaznamu++;

                $tridy = $entity->get('materialClasses');
         
                $keep = 0;
                
                if ($tridy){
                foreach ($tridy as $trida) {
                    $pocetTrid++;
                    
                    $classesList = $this->entityManager
                    ->getRDBRepository('MaterialClasses')
                    ->where(['id' => $trida->get('id')])
                    ->findOne();
                    $classProps = $classesList->get('materialProperties');
                    // ulozim si properties tridy

                    if ($classProps){
                    foreach ($classProps as $classProp){
                        $pocetProps++;
                        
                        if ($exists->get('materialPropertiesId') == $classProp->get('id')) {
                            $keep = 1;
                        }
                        
                }

                }
            }
            }

            if ($keep != 1){
                $delete = $this->entityManager->getQueryBuilder()->delete()
                ->from('MaterialDefinitionsPropertiesFromClasses')
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
