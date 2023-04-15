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

use Espo\Core\Exceptions\NotFound;

use Espo\Repositories\Attachment as AttachmentRepository;
use Espo\Entities\Attachment;

use Espo\Services\Record;

/**
 * @extends Record<\Espo\Modules\Crm\Entities\Document>
 */
class Document extends Record
{
    /**
     * @return \Espo\ORM\Collection<Attachment>
     * @throws NotFound
     * @throws \Espo\Core\Exceptions\Forbidden
     */
    public function getAttachmentList(string $id)
    {
        $entity = $this->getEntity($id);

        if (!$entity) {
            throw new NotFound();
        }

        $fileId = $entity->get('fileId');

        if (!$fileId) {
            throw new NotFound();
        }

        $file = $this->getEntityManager()->getEntity('Attachment', $fileId);

        if (!$file) {
            throw new NotFound();
        }


        $attachment = $this->getAttachmentRepository()->getCopiedAttachment($file, 'Attachment');

        /** @var \Espo\ORM\EntityCollection<Attachment> $attachmentList */
        $attachmentList = $this->entityManager
            ->getCollectionFactory()
            ->create('Attachment');

        $attachmentList[] = $attachment;

        return $attachmentList;
    }

    private function getAttachmentRepository(): AttachmentRepository
    {
        /** @var AttachmentRepository */
        return $this->entityManager->getRepository(Attachment::ENTITY_TYPE);
    }
}
