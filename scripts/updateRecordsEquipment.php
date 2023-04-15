<?php


require __DIR__ . '/../bootstrap.php';

$app = new Espo\Core\Application();
$app->setupSystemUser();

$container = $app->getContainer();
/** @var Espo\Core\InjectableFactory  */
$entityManager = $container->get('entityManager');

$entityList = $entityManager->getRepository('EquipmentDefinitionsPropertiesFromClasses')->find();
foreach ($entityList as $entity) {
    
    $equipmentClassesPropertiesElementsId = $entity->get("equipmentClassesPropertiesElementsId");

    $property = $entityManager
    ->getRDBRepository('EquipmentProperties')
    ->where(['id' => $equipmentClassesPropertiesElementsId])
    ->findOne(); //Projdeme záznamy 

    $classLists = $property->get('equipmentClassLists');
    foreach ($classLists as $classList) {
    $GLOBALS['log']->debug('classLists');
    $equipmentClassesId = $classList->get("id");
    $equipmentClassesName = $classList->get("name");
    $description = $property->get("description");
    
    $entity->set("equipmentClassesId", $equipmentClassesId);
    $entity->set("equipmentClassesName", $equipmentClassesName);
    $entity->set("description", $description);
    $entityManager->saveEntity($entity);
    break;
    }

}
