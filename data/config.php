<?php
return [
  'useCache' => true,
  'jobMaxPortion' => 15,
  'jobRunInParallel' => false,
  'jobPoolConcurrencyNumber' => 8,
  'daemonMaxProcessNumber' => 5,
  'daemonInterval' => 10,
  'daemonProcessTimeout' => 36000,
  'recordsPerPage' => 20,
  'recordsPerPageSmall' => 20,
  'recordsPerPageSelect' => 10,
  'applicationName' => 'MES Barman',
  'version' => '7.2.4',
  'timeZone' => 'Europe/Prague',
  'dateFormat' => 'DD.MM.YYYY',
  'timeFormat' => 'HH:mm',
  'weekStart' => 1,
  'thousandSeparator' => '',
  'decimalMark' => ',',
  'exportDelimiter' => ',',
  'currencyList' => [
    0 => 'CZK'
  ],
  'defaultCurrency' => 'CZK',
  'baseCurrency' => 'CZK',
  'currencyRates' => [],
  'outboundEmailIsShared' => true,
  'outboundEmailFromName' => 'EspoCRM',
  'outboundEmailFromAddress' => '',
  'smtpServer' => '',
  'smtpPort' => 587,
  'smtpAuth' => false,
  'smtpSecurity' => 'TLS',
  'smtpUsername' => '',
  'smtpPassword' => '',
  'language' => 'cs_CZ',
  'authenticationMethod' => 'Espo',
  'globalSearchEntityList' => [
    0 => 'Account',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Opportunity'
  ],
  'tabList' => [
    0 => 'Orders',
    1 => (object) [
      'type' => 'group',
      'text' => 'Vybavení',
      'iconClass' => 'fas fa-tools',
      'color' => NULL,
      'id' => '198732',
      'itemList' => [
        0 => 'EquipmentClasses',
        1 => 'EquipmentDefinitions',
        2 => 'EquipmentProperties'
      ]
    ],
    2 => (object) [
      'type' => 'group',
      'text' => 'Materiál',
      'iconClass' => 'fas fa-cubes',
      'color' => NULL,
      'id' => '789696',
      'itemList' => [
        0 => 'MaterialClasses',
        1 => 'MaterialDefinitions',
        2 => 'MaterialProperties',
        3 => 'MaterialLots'
      ]
    ],
    3 => (object) [
      'type' => 'group',
      'text' => 'Produkty',
      'iconClass' => 'fas fa-tags',
      'color' => NULL,
      'id' => '827905',
      'itemList' => [
        0 => 'ProductDefinitions',
        1 => 'ProductSegments'
      ]
    ],
    4 => (object) [
      'type' => 'group',
      'text' => 'Personál',
      'iconClass' => 'fas fa-users',
      'color' => NULL,
      'id' => '279160',
      'itemList' => [
        0 => 'PersonnelClasses',
        1 => 'PersonnelDefinitions',
        2 => 'PersonnelProperties'
      ]
    ],
    5 => (object) [
      'type' => 'group',
      'text' => 'Procesy',
      'iconClass' => 'fas fa-exchange-alt',
      'color' => NULL,
      'id' => '517024',
      'itemList' => [
        0 => 'ProcessSegment'
      ]
    ]
  ],
  'quickCreateList' => [
    0 => 'Account',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Opportunity',
    4 => 'Meeting',
    5 => 'Call',
    6 => 'Task',
    7 => 'Case',
    8 => 'Email'
  ],
  'exportDisabled' => false,
  'adminNotifications' => true,
  'adminNotificationsNewVersion' => true,
  'adminNotificationsCronIsNotConfigured' => true,
  'adminNotificationsNewExtensionVersion' => true,
  'assignmentEmailNotifications' => false,
  'assignmentEmailNotificationsEntityList' => [
    0 => 'Lead',
    1 => 'Opportunity',
    2 => 'Task',
    3 => 'Case'
  ],
  'assignmentNotificationsEntityList' => [
    0 => 'Meeting',
    1 => 'Call',
    2 => 'Task',
    3 => 'Email'
  ],
  'portalStreamEmailNotifications' => true,
  'streamEmailNotificationsEntityList' => [
    0 => 'Case'
  ],
  'streamEmailNotificationsTypeList' => [
    0 => 'Post',
    1 => 'Status',
    2 => 'EmailReceived'
  ],
  'emailNotificationsDelay' => 30,
  'emailMessageMaxSize' => 10,
  'notificationsCheckInterval' => 10,
  'maxEmailAccountCount' => 2,
  'followCreatedEntities' => false,
  'b2cMode' => false,
  'theme' => 'Espo',
  'themeParams' => (object) [
    'navbar' => 'side'
  ],
  'massEmailMaxPerHourCount' => 100,
  'massEmailVerp' => false,
  'personalEmailMaxPortionSize' => 50,
  'inboundEmailMaxPortionSize' => 50,
  'emailAddressLookupEntityTypeList' => [
    0 => 'User',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Account'
  ],
  'authTokenLifetime' => 0,
  'authTokenMaxIdleTime' => 48,
  'userNameRegularExpression' => '[^a-z0-9\\-@_\\.\\s]',
  'addressFormat' => 1,
  'displayListViewRecordCount' => true,
  'dashboardLayout' => [
    0 => (object) [
      'name' => 'My Espo',
      'layout' => [
        0 => (object) [
          'id' => 'default-activities',
          'name' => 'Activities',
          'x' => 2,
          'y' => 2,
          'width' => 2,
          'height' => 4
        ],
        1 => (object) [
          'id' => 'default-stream',
          'name' => 'Stream',
          'x' => 0,
          'y' => 0,
          'width' => 2,
          'height' => 4
        ]
      ]
    ]
  ],
  'calendarEntityList' => [
    0 => 'Meeting',
    1 => 'Call',
    2 => 'Task'
  ],
  'activitiesEntityList' => [
    0 => 'Meeting',
    1 => 'Call'
  ],
  'historyEntityList' => [
    0 => 'Meeting',
    1 => 'Call',
    2 => 'Email'
  ],
  'busyRangesEntityList' => [
    0 => 'Meeting',
    1 => 'Call'
  ],
  'emailAutoReplySuppressPeriod' => '2 hours',
  'emailAutoReplyLimit' => 5,
  'cleanupJobPeriod' => '1 month',
  'cleanupActionHistoryPeriod' => '15 days',
  'cleanupAuthTokenPeriod' => '1 month',
  'currencyFormat' => 2,
  'currencyDecimalPlaces' => 2,
  'aclAllowDeleteCreated' => false,
  'aclAllowDeleteCreatedThresholdPeriod' => '24 hours',
  'attachmentUploadMaxSize' => 256,
  'attachmentUploadChunkSize' => 4,
  'inlineAttachmentUploadMaxSize' => 20,
  'textFilterUseContainsForVarchar' => false,
  'tabColorsDisabled' => false,
  'massPrintPdfMaxCount' => 50,
  'emailKeepParentTeamsEntityList' => [
    0 => 'Case'
  ],
  'streamEmailWithContentEntityTypeList' => [
    0 => 'Case'
  ],
  'recordListMaxSizeLimit' => 200,
  'noteDeleteThresholdPeriod' => '1 month',
  'noteEditThresholdPeriod' => '7 days',
  'emailForceUseExternalClient' => false,
  'useWebSocket' => false,
  'auth2FAMethodList' => [
    0 => 'Totp'
  ],
  'personNameFormat' => 'firstLast',
  'newNotificationCountInTitle' => false,
  'pdfEngine' => 'Tcpdf',
  'smsProvider' => NULL,
  'defaultFileStorage' => 'EspoUploadDir',
  'ldapUserNameAttribute' => 'sAMAccountName',
  'ldapUserFirstNameAttribute' => 'givenName',
  'ldapUserLastNameAttribute' => 'sn',
  'ldapUserTitleAttribute' => 'title',
  'ldapUserEmailAddressAttribute' => 'mail',
  'ldapUserPhoneNumberAttribute' => 'telephoneNumber',
  'ldapUserObjectClass' => 'person',
  'ldapPortalUserLdapAuth' => false,
  'passwordGenerateLength' => 10,
  'massActionIdleCountThreshold' => 100,
  'exportIdleCountThreshold' => 1000,
  'cacheTimestamp' => 1681584309,
  'microtime' => 1681584309.840037,
  'siteUrl' => 'http://localhost/espocrm',
  'fullTextSearchMinLength' => 4,
  'appTimestamp' => 1666203778,
  'companyLogoId' => '63516013cb2550435',
  'companyLogoName' => 'vutfekt.png',
  'avatarsDisabled' => false,
  'scopeColorsDisabled' => false,
  'tabIconsDisabled' => false,
  'userThemesDisabled' => true,
  'dashletsOptions' => (object) [],
  'maintenanceMode' => false,
  'cronDisabled' => false,
  'emailAddressIsOptedOutByDefault' => false,
  'cleanupDeletedRecords' => false,
  'fiscalYearShift' => 0,
  'addressCityList' => [],
  'addressStateList' => [],
  'addressCountryList' => []
];
