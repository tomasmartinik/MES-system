<?php


require __DIR__ . '/../bootstrap.php';

$app = new Espo\Core\Application();
$app->setupSystemUser();

$container = $app->getContainer();
/** @var Espo\Core\InjectableFactory  */
$entityManager = $container->get('entityManager');

$entityList = $entityManager->getRepository('MaterialDefinitionsPropertiesFromClasses')->find();
foreach ($entityList as $entity) {
    
    $materialClassesPropertiesElementsId = $entity->get("materialPropertiesId");

    $property = $entityManager
    ->getRDBRepository('MaterialProperties')
    ->where(['id' => $materialClassesPropertiesElementsId])
    ->findOne(); //Projdeme záznamy 
    $GLOBALS['log']->debug($materialClassesPropertiesElementsId);

if($property != NULL){



    $classLists = $property->get('materialClasses');
    foreach ($classLists as $classList) {
    $equipmentClassesId = $classList->get("id");
    $equipmentClassesName = $classList->get("name");
    $description = $property->get("description");
    
    $entity->set("materialClassesId", $equipmentClassesId);
    $entity->set("materialClassesName", $equipmentClassesName);
    $entity->set("description", $description);
    $entityManager->saveEntity($entity);
    break;
    }
}
}
