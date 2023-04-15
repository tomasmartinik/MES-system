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

namespace Espo\Modules\Crm\Controllers;

use Espo\Core\Exceptions\{
    Error,
    Forbidden,
    BadRequest,
    NotFound,
};

use Espo\Core\{
    Api\Request,
    Acl,
    Record\SearchParamsFetcher,
};

use Espo\Modules\Crm\Services\Activities as Service;
use Espo\Entities\User;

use stdClass;

class Activities
{
    private const MAX_CALENDAR_RANGE = 123;

    private User $user;

    private Acl $acl;

    private SearchParamsFetcher $searchParamsFetcher;

    private Service $service;

    public function __construct(
        User $user,
        Acl $acl,
        SearchParamsFetcher $searchParamsFetcher,
        Service $service
    ) {
        $this->user = $user;
        $this->acl = $acl;
        $this->searchParamsFetcher = $searchParamsFetcher;
        $this->service = $service;
    }

    /**
     * @return array<int,array<string,mixed>>
     * @throws Forbidden
     * @throws BadRequest
     * @throws \Exception
     */
    public function getActionListCalendarEvents(Request $request): array
    {
        if (!$this->acl->check('Calendar')) {
            throw new Forbidden();
        }

        $from = $request->getQueryParam('from');
        $to = $request->getQueryParam('to');

        if (empty($from) || empty($to)) {
            throw new BadRequest();
        }

        if (strtotime($to) - strtotime($from) > self::MAX_CALENDAR_RANGE * 24 * 3600) {
            throw new Forbidden('Too long range.');
        }

        $scopeList = null;

        if ($request->getQueryParam('scopeList') !== null) {
            $scopeList = explode(',', $request->getQueryParam('scopeList'));
        }

        $userId = $request->getQueryParam('userId');
        $userIdList = $request->getQueryParam('userIdList');
        $teamIdList = $request->getQueryParam('teamIdList');

        if ($teamIdList) {
            $teamIdList = explode(',', $teamIdList);

            return $userResultList = $this->service->getTeamsEventList($teamIdList, $from, $to, $scopeList);
        }

        if ($userIdList) {
            $userIdList = explode(',', $userIdList);

            return $this->service->getUsersEventList($userIdList, $from, $to, $scopeList);
        }
        else {
            if (!$userId) {
                $userId = $this->user->getId();
            }
        }

        return $this->service->getEventList($userId, $from, $to, $scopeList);
    }

    /**
     * @throws BadRequest
     * @throws Forbidden
     */
    public function getActionGetTimeline(Request $request): stdClass
    {
        if (!$this->acl->check('Calendar')) {
            throw new Forbidden();
        }

        $from = $request->getQueryParam('from');
        $to = $request->getQueryParam('to');

        if (empty($from) || empty($to)) {
            throw new BadRequest();
        }

        if (strtotime($to) - strtotime($from) > self::MAX_CALENDAR_RANGE * 24 * 3600) {
            throw new Forbidden('Too long range.');
        }

        $scopeList = null;

        if ($request->getQueryParam('scopeList') !== null) {
            $scopeList = explode(',', $request->getQueryParam('scopeList'));
        }

        $userId = $request->getQueryParam('userId');
        $userIdList = $request->getQueryParam('userIdList');

        if ($userIdList) {
            $userIdList = explode(',', $userIdList);
        }
        else {
            $userIdList = [];
        }

        if ($userId) {
            $userIdList[] = $userId;
        }

        return $this->service->getUsersTimeline($userIdList, $from, $to, $scopeList);
    }

    /**
     * @throws Forbidden
     * @throws NotFound
     * @throws BadRequest
     */
    public function getActionListUpcoming(Request $request): stdClass
    {
        $userId = $request->getQueryParam('userId');

        if (!$userId) {
            $userId = $this->user->getId();
        }

        $searchParams = $this->searchParamsFetcher->fetch($request);

        $offset = $searchParams->getOffset();
        $maxSize = $searchParams->getMaxSize();

        $entityTypeList = (array) ($request->getQueryParams()['entityTypeList'] ?? null);

        $futureDays = intval($request->getQueryParam('futureDays'));

        return (object) $this->service->getUpcomingActivities(
            $userId,
            [
                'offset' => $offset,
                'maxSize' => $maxSize
            ],
            $entityTypeList,
            $futureDays
        );
    }

    /**
     * @return array<int,array<string,mixed>>
     * @throws \Exception
     */
    public function getActionPopupNotifications(): array
    {
        $userId = $this->user->getId();

        return $this->service->getPopupNotifications($userId);
    }

    /**
     * @throws BadRequest
     */
    public function postActionRemovePopupNotification(Request $request): bool
    {
        $data = $request->getParsedBody();

        if (empty($data->id)) {
            throw new BadRequest();
        }

        $id = $data->id;

        $this->service->removeReminder($id);

        return true;
    }

    /**
     * @throws BadRequest
     * @throws Error
     * @throws Forbidden
     * @throws NotFound
     */
    public function getActionList(Request $request): stdClass
    {
        $params = $request->getRouteParams();

        if (!$this->acl->check('Activities')) {
            throw new Forbidden();
        }

        $name = $params['name'] ?? null;

        if (!in_array($name, ['activities', 'history'])) {
            throw new BadRequest();
        }

        if (empty($params['scope'])) {
            throw new BadRequest();
        }

        if (empty($params['id'])) {
            throw new BadRequest();
        }

        $entityType = $params['scope'];
        $id = $params['id'];

        $searchParams = $this->searchParamsFetcher->fetch($request);

        $offset = $searchParams->getOffset();
        $maxSize = $searchParams->getMaxSize();
        $order = $searchParams->getOrder();
        $orderBy = $searchParams->getOrderBy();

        $scope = $request->getQueryParam('entityType') ?? null;

        $methodParams = [
            'scope' => $scope,
            'offset' => $offset,
            'maxSize' => $maxSize,
            'order' => $order,
            'orderBy' => $orderBy,
        ];

        if ($name === 'history') {
            return (object) $this->service->getHistory($entityType, $id, $methodParams);
        }

        return (object) $this->service->getActivities($entityType, $id, $methodParams);
    }

    public function getActionEntityTypeList(Request $request): stdClass
    {
        $params = $request->getRouteParams();

        if (empty($params['scope'])) {
            throw new BadRequest();
        }

        if (empty($params['id'])) {
            throw new BadRequest();
        }

        if (empty($params['name'])) {
            throw new BadRequest();
        }

        if (empty($params['entityType'])) {
            throw new BadRequest();
        }

        $scope = $params['scope'];
        $id = $params['id'];
        $name = $params['name'];
        $entityType = $params['entityType'];

        if ($name === 'activities') {
            $isHistory = false;
        }
        else  if ($name === 'history') {
            $isHistory = true;
        }
        else {
            throw new BadRequest();
        }

        $searchParams = $this->searchParamsFetcher->fetch($request);

        $result = $this->service->findActivitiesEntityType(
            $scope,
            $id,
            $entityType,
            $isHistory,
            $searchParams
        );

        return (object) [
            'total' => $result->getTotal(),
            'list' => $result->getValueMapList(),
        ];
    }

    public function getActionBusyRanges(Request $request): stdClass
    {
        $from = $request->getQueryParam('from');
        $to = $request->getQueryParam('to');
        $userIdListString = $request->getQueryParam('userIdList');

        if (!$from || !$to || !$userIdListString) {
            throw new BadRequest();
        }

        $userIdList = explode(',', $userIdListString);

        return $this->service->getBusyRanges(
            $userIdList,
            $from,
            $to,
            $request->getQueryParam('entityType'),
            $request->getQueryParam('entityId')
        );
    }
}
