<?php

namespace Espo\Custom\Hooks\Orders;

use Espo\ORM\Entity;

use Espo\Core\Utils\Log;

use Espo\Core\ORM\EntityManager;

class NumberToName
{
    public function __construct(

        protected EntityManager   $entityManager,
        protected Log             $log,

    ) {}

    public function beforeSave(Entity $entity, array $options = []): void
    {

        if ($entity->isAttributeChanged('number') || $entity->isNew()) {
            $entity->set('name', $entity->get('number'));
       }
    }



}
