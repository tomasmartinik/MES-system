<?php

namespace Espo\Custom\Hooks\PersonnelDefinitions;

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

        if ($entity->isAttributeChanged('personnelClassesIds')) {

            $tridy = $entity->get('personnelClasses');   //Vezmeme si tridy, ze kterych se budou generovat zaznamy vlastnosti
            
            if ($tridy){
            foreach ($tridy as $trida) {    // Kazdou tridu projdeme
                
                $classList = $this->entityManager 
                ->getRDBRepository('PersonnelClasses')
                ->where(['id' => $trida->get('id')])
                ->findOne();
                
                $classProps = $classList->get('personnelProperties');  // Vezmeme si vlastnosti z dane tridy
                if ($classProps){
                foreach ($classProps as $classProp){    //Pro kazdou vlastnost..
                    $valMap = $entity->getValueMap();   
                    unset($valMap->id);

                    $alreadyExisting = $this->entityManager
                    ->getRDBRepository('PersonnelDefinitionsPropertiesFromClasses')
                    ->where([
                        'personnelDefinitionsId' => $entity->get('id'),
                        'personnelPropertiesId' => $classProp->get('id')
                    ])
                    ->findOne(); //Projdeme záznamy 

                    if ($alreadyExisting == NULL){
                        $valMap->personnelPropertiesId = $classProp->get('id');
                        $valMap->personnelPropertiesName = $classProp->get('name');
                        $valMap->personnelDefinitionsId = $entity->get('id');
                        $valMap->personnelDefinitionsName = $entity->get('name');
                        $valMap->personnelClassesId = $trida->get('id');
                        $valMap->personnelClassesName = $trida->get('name');
                        $valMap->description = $classProp->get('description');
                        $valMap->name = $classProp->get('name');
                        $this->entityManager->createEntity('PersonnelDefinitionsPropertiesFromClasses', $valMap);
                    }

                    
                }
            }

               

            }
        }

            $pocetZaznamu = 0;
            $pocetProps = 0;
            $pocetTrid = 0;

            $alreadyExistingAll = $this->entityManager
            ->getRDBRepository('PersonnelDefinitionsPropertiesFromClasses')
            ->where([
                'personnelDefinitionsId' => $entity->get('id')
            ])
            ->find();
            // ulozim si vsechny zaznamy, ktere maji definici, ve ktere zrovna jsme
            if ($alreadyExistingAll){
            foreach ($alreadyExistingAll as $exists){
                $pocetZaznamu++;

                $tridy = $entity->get('personnelClasses');
         
                $keep = 0;
                
                if ($tridy){
                foreach ($tridy as $trida) {
                    $pocetTrid++;
                    
                    $classesList = $this->entityManager
                    ->getRDBRepository('PersonnelClasses')
                    ->where(['id' => $trida->get('id')])
                    ->findOne();
                    $classProps = $classesList->get('personnelProperties');
                    // ulozim si properties tridy

                    if ($classProps){
                    foreach ($classProps as $classProp){
                        $pocetProps++;
                        
                        if ($exists->get('personnelPropertiesId') == $classProp->get('id')) {
                            $keep = 1;
                        }
                        
                }

                }
            }
            }

            if ($keep != 1){
                $delete = $this->entityManager->getQueryBuilder()->delete()
                ->from('PersonnelDefinitionsPropertiesFromClasses')
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
