<?php
return [
  'aclDefs' => [
    'ActionHistoryRecord' => [
      'ownershipCheckerClassName' => 'Espo\\Classes\\Acl\\ActionHistoryRecord\\OwnershipChecker'
    ],
    'Attachment' => [
      'accessCheckerClassName' => 'Espo\\Classes\\Acl\\Attachment\\AccessChecker',
      'ownershipCheckerClassName' => 'Espo\\Classes\\Acl\\Attachment\\OwnershipChecker',
      'portalAccessCheckerClassName' => 'Espo\\Classes\\AclPortal\\Attachment\\AccessChecker',
      'portalOwnershipCheckerClassName' => 'Espo\\Classes\\AclPortal\\Attachment\\OwnershipChecker'
    ],
    'AuthToken' => [
      'accessCheckerClassName' => 'Espo\\Classes\\Acl\\AuthToken\\AccessChecker'
    ],
    'Email' => [
      'accessCheckerClassName' => 'Espo\\Classes\\Acl\\Email\\AccessChecker',
      'ownershipCheckerClassName' => 'Espo\\Classes\\Acl\\Email\\OwnershipChecker',
      'portalAccessCheckerClassName' => 'Espo\\Classes\\AclPortal\\Email\\AccessChecker',
      'portalOwnershipCheckerClassName' => 'Espo\\Classes\\AclPortal\\Email\\OwnershipChecker',
      'assignmentCheckerClassName' => 'Espo\\Classes\\Acl\\Email\\AssignmentChecker',
      'readOwnerUserField' => 'users'
    ],
    'EmailFilter' => [
      'ownershipCheckerClassName' => 'Espo\\Classes\\Acl\\EmailFilter\\OwnershipChecker'
    ],
    'Import' => [
      'accessCheckerClassName' => 'Espo\\Classes\\Acl\\Import\\AccessChecker'
    ],
    'ImportError' => [
      'accessCheckerClassName' => 'Espo\\Core\\Acl\\AccessChecker\\AccessCheckers\\Foreign',
      'link' => 'import'
    ],
    'Note' => [
      'accessCheckerClassName' => 'Espo\\Classes\\Acl\\Note\\AccessChecker',
      'ownershipCheckerClassName' => 'Espo\\Classes\\Acl\\Note\\OwnershipChecker',
      'portalAccessCheckerClassName' => 'Espo\\Classes\\AclPortal\\Note\\AccessChecker',
      'portalOwnershipCheckerClassName' => 'Espo\\Classes\\AclPortal\\Note\\OwnershipChecker'
    ],
    'Notification' => [
      'ownershipCheckerClassName' => 'Espo\\Classes\\Acl\\Notification\\OwnershipChecker',
      'portalOwnershipCheckerClassName' => 'Espo\\Classes\\AclPortal\\Notification\\OwnershipChecker'
    ],
    'Portal' => [
      'accessCheckerClassName' => 'Espo\\Classes\\Acl\\Portal\\AccessChecker'
    ],
    'ScheduledJob' => [
      'accessCheckerClassName' => 'Espo\\Classes\\Acl\\ScheduledJob\\AccessChecker'
    ],
    'Team' => [
      'ownershipCheckerClassName' => 'Espo\\Classes\\Acl\\Team\\OwnershipChecker'
    ],
    'User' => [
      'accessCheckerClassName' => 'Espo\\Classes\\Acl\\User\\AccessChecker',
      'ownershipCheckerClassName' => 'Espo\\Classes\\Acl\\User\\OwnershipChecker',
      'portalOwnershipCheckerClassName' => 'Espo\\Classes\\AclPortal\\User\\OwnershipChecker'
    ],
    'Webhook' => [
      'accessCheckerClassName' => 'Espo\\Classes\\Acl\\Webhook\\AccessChecker',
      'ownershipCheckerClassName' => 'Espo\\Classes\\Acl\\Webhook\\OwnershipChecker'
    ],
    'Account' => [
      'portalOwnershipCheckerClassName' => 'Espo\\Modules\\Crm\\Classes\\AclPortal\\Account\\OwnershipChecker'
    ],
    'Call' => [
      'accessCheckerClassName' => 'Espo\\Modules\\Crm\\Classes\\Acl\\Call\\AccessChecker',
      'readOwnerUserField' => 'users'
    ],
    'CampaignLogRecord' => [
      'ownershipCheckerClassName' => 'Espo\\Modules\\Crm\\Classes\\Acl\\CampaignLogRecord\\OwnershipChecker'
    ],
    'CampaignTrackingUrl' => [
      'ownershipCheckerClassName' => 'Espo\\Modules\\Crm\\Classes\\Acl\\CampaignTrackingUrl\\OwnershipChecker'
    ],
    'Contact' => [
      'portalOwnershipCheckerClassName' => 'Espo\\Modules\\Crm\\Classes\\AclPortal\\Contact\\OwnershipChecker'
    ],
    'KnowledgeBaseArticle' => [
      'portalAccessCheckerClassName' => 'Espo\\Modules\\Crm\\Classes\\AclPortal\\KnowledgeBaseArticle\\AccessChecker'
    ],
    'MassEmail' => [
      'ownershipCheckerClassName' => 'Espo\\Modules\\Crm\\Classes\\Acl\\MassEmail\\OwnershipChecker'
    ],
    'Meeting' => [
      'accessCheckerClassName' => 'Espo\\Modules\\Crm\\Classes\\Acl\\Meeting\\AccessChecker',
      'readOwnerUserField' => 'users'
    ]
  ],
  'app' => [
    'acl' => [
      'mandatory' => [
        'scopeLevel' => [
          'Note' => [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
          ],
          'Portal' => [
            'read' => 'all',
            'edit' => 'no',
            'delete' => 'no',
            'create' => 'no'
          ],
          'Attachment' => [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
          ],
          'EmailAccount' => [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
          ],
          'EmailFilter' => [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
          ],
          'EmailFolder' => [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
          ],
          'Preferences' => [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'no',
            'create' => 'no'
          ],
          'Notification' => [
            'read' => 'own',
            'edit' => 'no',
            'delete' => 'own',
            'create' => 'no'
          ],
          'ActionHistoryRecord' => [
            'read' => 'own'
          ],
          'Role' => false,
          'PortalRole' => false,
          'ImportError' => 'Import',
          'MassEmail' => 'Campaign',
          'CampaignLogRecord' => 'Campaign',
          'CampaignTrackingUrl' => 'Campaign',
          'EmailQueueItem' => 'Campaign'
        ],
        'fieldLevel' => [],
        'scopeFieldLevel' => [
          'EmailAccount' => [
            'assignedUser' => [
              'read' => 'yes',
              'edit' => 'no'
            ]
          ],
          'EmailFolder' => [
            'assignedUser' => [
              'read' => 'yes',
              'edit' => 'no'
            ]
          ],
          'Email' => [
            'inboundEmails' => false,
            'emailAccounts' => false
          ],
          'User' => [
            'dashboardTemplate' => false,
            'password' => false,
            'passwordConfirm' => false,
            'auth2FA' => false,
            'authMethod' => false,
            'apiKey' => false,
            'secretKey' => false,
            'token' => false
          ],
          'ActionHistoryRecord' => [
            'authToken' => false,
            'authLogRecord' => false
          ]
        ]
      ],
      'strictDefault' => [
        'scopeLevel' => [
          'User' => [
            'read' => 'own',
            'edit' => 'no'
          ],
          'Team' => [
            'read' => 'team'
          ],
          'Import' => false,
          'Webhook' => false
        ],
        'fieldLevel' => [],
        'scopeFieldLevel' => [
          'User' => [
            'gender' => false
          ]
        ]
      ],
      'adminMandatory' => [
        'scopeLevel' => [
          'User' => [
            'create' => 'yes',
            'read' => 'all',
            'edit' => 'all',
            'delete' => 'all'
          ],
          'Team' => [
            'create' => 'yes',
            'read' => 'all',
            'edit' => 'all',
            'delete' => 'all'
          ],
          'Job' => [
            'create' => 'no',
            'read' => 'all',
            'edit' => 'no',
            'delete' => 'all'
          ],
          'Extension' => [
            'create' => 'no',
            'read' => 'all',
            'edit' => 'no',
            'delete' => 'all'
          ]
        ]
      ],
      'valuePermissionList' => [
        0 => 'assignmentPermission',
        1 => 'userPermission',
        2 => 'portalPermission',
        3 => 'groupEmailAccountPermission',
        4 => 'exportPermission',
        5 => 'massUpdatePermission',
        6 => 'followerManagementPermission',
        7 => 'dataPrivacyPermission'
      ],
      'valuePermissionHighestLevels' => [
        'assignmentPermission' => 'all',
        'userPermission' => 'all',
        'portalPermission' => 'yes',
        'groupEmailAccountPermission' => 'all',
        'exportPermission' => 'yes',
        'massUpdatePermission' => 'yes',
        'followerManagementPermission' => 'all',
        'dataPrivacyPermission' => 'yes'
      ],
      'permissionsStrictDefaults' => [
        'assignmentPermission' => 'no',
        'userPermission' => 'no',
        'portalPermission' => 'no',
        'groupEmailAccountPermission' => 'no',
        'exportPermission' => 'no',
        'massUpdatePermission' => 'no',
        'followerManagementPermission' => 'no',
        'dataPrivacyPermission' => 'no'
      ],
      'scopeLevelTypesStrictDefaults' => [
        'boolean' => false,
        'record' => false
      ]
    ],
    'aclPortal' => [
      'mandatory' => [
        'scopeLevel' => [
          'User' => [
            'read' => 'own',
            'edit' => 'no',
            'delete' => 'no',
            'stream' => 'no',
            'create' => 'no'
          ],
          'Team' => false,
          'Note' => [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
          ],
          'Notification' => [
            'read' => 'own',
            'edit' => 'no',
            'delete' => 'own',
            'create' => 'no'
          ],
          'Portal' => false,
          'Attachment' => [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
          ],
          'ExternalAccount' => false,
          'Role' => false,
          'PortalRole' => false,
          'EmailFilter' => false,
          'EmailFolder' => false,
          'EmailAccount' => false,
          'EmailTemplate' => false,
          'ActionHistoryRecord' => [
            'read' => 'own'
          ],
          'Preferences' => [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'no',
            'create' => 'no'
          ],
          'MassEmail' => 'Campaign',
          'CampaignLogRecord' => 'Campaign',
          'CampaignTrackingUrl' => 'Campaign',
          'EmailQueueItem' => false
        ],
        'fieldLevel' => [],
        'scopeFieldLevel' => [
          'Preferences' => [
            'smtpServer' => false,
            'smtpPort' => false,
            'smtpSecurity' => false,
            'smtpUsername' => false,
            'smtpPassword' => false,
            'smtpAuth' => false,
            'receiveAssignmentEmailNotifications' => false,
            'receiveMentionEmailNotifications' => false,
            'defaultReminders' => false,
            'autoFollowEntityTypeList' => false,
            'emailReplyForceHtml' => false,
            'emailReplyToAllByDefault' => false,
            'signature' => false,
            'followCreatedEntities' => false,
            'followEntityOnStreamPost' => false,
            'doNotFillAssignedUserIfNotRequired' => false,
            'useCustomTabList' => false,
            'tabList' => false,
            'emailUseExternalClient' => false,
            'assignmentNotificationsIgnoreEntityTypeList' => false,
            'assignmentEmailNotificationsIgnoreEntityTypeList' => false,
            'dashletsOptions' => false,
            'dashboardLayout' => false
          ],
          'Call' => [
            'reminders' => false
          ],
          'Meeting' => [
            'reminders' => false
          ],
          'Note' => [
            'isInternal' => false,
            'isGlobal' => false
          ],
          'Email' => [
            'inboundEmails' => false,
            'emailAccounts' => false
          ],
          'User' => [
            'dashboardTemplate' => false,
            'password' => false,
            'authMethod' => false,
            'apiKey' => false,
            'secretKey' => false,
            'token' => false,
            'isAdmin' => false,
            'type' => false,
            'contact' => false,
            'accounts' => false,
            'account' => false,
            'portalRoles' => false,
            'portals' => false,
            'roles' => false,
            'defaultTeam' => false,
            'auth2FA' => false,
            'isActive' => false
          ],
          'ActionHistoryRecord' => [
            'authToken' => false,
            'authLogRecord' => false
          ]
        ]
      ],
      'strictDefault' => [
        'scopeLevel' => [],
        'fieldLevel' => [
          'assignedUser' => [
            'read' => 'yes',
            'edit' => 'no'
          ],
          'assignedUsers' => [
            'read' => 'yes',
            'edit' => 'no'
          ],
          'teams' => false
        ],
        'scopeFieldLevel' => [
          'User' => [
            'gender' => false
          ],
          'KnowledgeBaseArticle' => [
            'portals' => false,
            'order' => false,
            'status' => false,
            'assignedUser' => false
          ],
          'Call' => [
            'users' => [
              'read' => 'yes',
              'edit' => 'no'
            ],
            'leads' => false
          ],
          'Meeting' => [
            'users' => [
              'read' => 'yes',
              'edit' => 'no'
            ],
            'leads' => false
          ],
          'Case' => [
            'status' => [
              'read' => 'yes',
              'edit' => 'no'
            ]
          ]
        ]
      ],
      'valuePermissionList' => [
        0 => 'exportPermission',
        1 => 'massUpdatePermission'
      ],
      'permissionsStrictDefaults' => [
        'exportPermission' => 'no',
        'massUpdatePermission' => 'no'
      ],
      'scopeLevelTypesStrictDefaults' => [
        'boolean' => false,
        'record' => false
      ]
    ],
    'actions' => [
      'convertCurrency' => [
        'implementationClassName' => 'Espo\\Core\\Action\\Actions\\ConvertCurrency'
      ],
      'merge' => [
        'implementationClassName' => 'Espo\\Core\\Action\\Actions\\Merge'
      ]
    ],
    'addressFormats' => [
      1 => [
        'formatterClassName' => 'Espo\\Classes\\AddressFormatters\\Formatter1'
      ],
      2 => [
        'formatterClassName' => 'Espo\\Classes\\AddressFormatters\\Formatter2'
      ],
      3 => [
        'formatterClassName' => 'Espo\\Classes\\AddressFormatters\\Formatter3'
      ],
      4 => [
        'formatterClassName' => 'Espo\\Classes\\AddressFormatters\\Formatter4'
      ]
    ],
    'adminPanel' => [
      'system' => [
        'label' => 'System',
        'itemList' => [
          0 => [
            'url' => '#Admin/settings',
            'label' => 'Settings',
            'iconClass' => 'fas fa-cog',
            'description' => 'settings',
            'recordView' => 'views/admin/settings'
          ],
          1 => [
            'url' => '#Admin/userInterface',
            'label' => 'User Interface',
            'iconClass' => 'fas fa-desktop',
            'description' => 'userInterface',
            'recordView' => 'views/admin/user-interface'
          ],
          2 => [
            'url' => '#Admin/authentication',
            'label' => 'Authentication',
            'iconClass' => 'fas fa-sign-in-alt',
            'description' => 'authentication',
            'recordView' => 'views/admin/authentication'
          ],
          3 => [
            'url' => '#ScheduledJob',
            'label' => 'Scheduled Jobs',
            'iconClass' => 'fas fa-clock',
            'description' => 'scheduledJob'
          ],
          4 => [
            'url' => '#Admin/currency',
            'label' => 'Currency',
            'iconClass' => 'fas fa-euro-sign',
            'description' => 'currency',
            'recordView' => 'views/admin/currency'
          ],
          5 => [
            'url' => '#Admin/notifications',
            'label' => 'Notifications',
            'iconClass' => 'fas fa-bell',
            'description' => 'notifications',
            'recordView' => 'views/admin/notifications'
          ],
          6 => [
            'url' => '#Admin/integrations',
            'label' => 'Integrations',
            'iconClass' => 'fas fa-network-wired',
            'description' => 'integrations'
          ],
          7 => [
            'url' => '#Admin/extensions',
            'label' => 'Extensions',
            'iconClass' => 'fas fa-upload',
            'description' => 'extensions'
          ],
          8 => [
            'url' => '#Admin/systemRequirements',
            'label' => 'System Requirements',
            'iconClass' => 'fas fa-server',
            'description' => 'systemRequirements'
          ],
          9 => [
            'url' => '#Admin/jobsSettings',
            'label' => 'Job Settings',
            'iconClass' => 'fas fa-list-ul',
            'description' => 'jobsSettings',
            'recordView' => 'views/admin/jobs-settings'
          ],
          10 => [
            'url' => '#Admin/upgrade',
            'label' => 'Upgrade',
            'iconClass' => 'fas fa-arrow-alt-circle-up',
            'description' => 'upgrade',
            'view' => 'views/admin/upgrade/index'
          ],
          11 => [
            'action' => 'clearCache',
            'label' => 'Clear Cache',
            'iconClass' => 'fas fa-broom',
            'description' => 'clearCache'
          ],
          12 => [
            'action' => 'rebuild',
            'label' => 'Rebuild',
            'iconClass' => 'fas fa-database',
            'description' => 'rebuild'
          ]
        ],
        'order' => 0
      ],
      'users' => [
        'label' => 'Users',
        'itemList' => [
          0 => [
            'url' => '#Admin/users',
            'label' => 'Users',
            'iconClass' => 'fas fa-user',
            'description' => 'users'
          ],
          1 => [
            'url' => '#Admin/teams',
            'label' => 'Teams',
            'iconClass' => 'fas fa-users',
            'description' => 'teams'
          ],
          2 => [
            'url' => '#Admin/roles',
            'label' => 'Roles',
            'iconClass' => 'fas fa-key',
            'description' => 'roles'
          ],
          3 => [
            'url' => '#Admin/authLog',
            'label' => 'Auth Log',
            'iconClass' => 'fas fa-sign-in-alt',
            'description' => 'authLog'
          ],
          4 => [
            'url' => '#Admin/authTokens',
            'label' => 'Auth Tokens',
            'iconClass' => 'fas fa-shield-alt',
            'description' => 'authTokens'
          ],
          5 => [
            'url' => '#Admin/actionHistory',
            'label' => 'Action History',
            'iconClass' => 'fas fa-history',
            'description' => 'actionHistory'
          ],
          6 => [
            'url' => '#Admin/apiUsers',
            'label' => 'API Users',
            'iconClass' => 'fas fa-user-cog',
            'description' => 'apiUsers'
          ]
        ],
        'order' => 5
      ],
      'customization' => [
        'label' => 'Customization',
        'itemList' => [
          0 => [
            'url' => '#Admin/entityManager',
            'label' => 'Entity Manager',
            'iconClass' => 'fas fa-tools',
            'description' => 'entityManager'
          ],
          1 => [
            'url' => '#Admin/layouts',
            'label' => 'Layout Manager',
            'iconClass' => 'fas fa-table',
            'description' => 'layoutManager'
          ],
          2 => [
            'url' => '#Admin/labelManager',
            'label' => 'Label Manager',
            'iconClass' => 'fas fa-language',
            'description' => 'labelManager'
          ],
          3 => [
            'url' => '#Admin/templateManager',
            'label' => 'Template Manager',
            'iconClass' => 'fas fa-envelope-open-text',
            'description' => 'templateManager'
          ]
        ],
        'order' => 10
      ],
      'email' => [
        'label' => 'Messaging',
        'itemList' => [
          0 => [
            'url' => '#Admin/outboundEmails',
            'label' => 'Outbound Emails',
            'iconClass' => 'fas fa-paper-plane',
            'description' => 'outboundEmails',
            'recordView' => 'views/admin/outbound-emails'
          ],
          1 => [
            'url' => '#Admin/inboundEmails',
            'label' => 'Inbound Emails',
            'iconClass' => 'fas fa-envelope',
            'description' => 'inboundEmails',
            'recordView' => 'views/admin/inbound-emails'
          ],
          2 => [
            'url' => '#Admin/groupEmailAccounts',
            'label' => 'Group Email Accounts',
            'iconClass' => 'fas fa-inbox',
            'description' => 'groupEmailAccounts'
          ],
          3 => [
            'url' => '#Admin/personalEmailAccounts',
            'label' => 'Personal Email Accounts',
            'iconClass' => 'fas fa-inbox',
            'description' => 'personalEmailAccounts'
          ],
          4 => [
            'url' => '#Admin/emailFilters',
            'label' => 'Email Filters',
            'iconClass' => 'fas fa-filter',
            'description' => 'emailFilters'
          ],
          5 => [
            'url' => '#Admin/emailTemplates',
            'label' => 'Email Templates',
            'iconClass' => 'fas fa-envelope-square',
            'description' => 'emailTemplates'
          ],
          6 => [
            'url' => '#Admin/sms',
            'label' => 'SMS',
            'iconClass' => 'fas fa-paper-plane',
            'description' => 'sms',
            'recordView' => 'views/admin/sms'
          ]
        ],
        'order' => 15
      ],
      'portal' => [
        'label' => 'Portal',
        'itemList' => [
          0 => [
            'url' => '#Admin/portals',
            'label' => 'Portals',
            'iconClass' => 'fas fa-parking',
            'description' => 'portals'
          ],
          1 => [
            'url' => '#Admin/portalUsers',
            'label' => 'Portal Users',
            'iconClass' => 'fas fa-user',
            'description' => 'portalUsers'
          ],
          2 => [
            'url' => '#Admin/portalRoles',
            'label' => 'Portal Roles',
            'iconClass' => 'fas fa-key',
            'description' => 'portalRoles'
          ]
        ],
        'order' => 20
      ],
      'data' => [
        'label' => 'Data',
        'itemList' => [
          0 => [
            'url' => '#Admin/import',
            'label' => 'Import',
            'iconClass' => 'fas fa-file-import',
            'description' => 'import'
          ],
          1 => [
            'url' => '#Admin/leadCapture',
            'label' => 'Lead Capture',
            'iconClass' => 'fas fa-id-card',
            'description' => 'leadCapture'
          ],
          2 => [
            'url' => '#Admin/pdfTemplates',
            'label' => 'PDF Templates',
            'iconClass' => 'fas fa-file-pdf',
            'description' => 'pdfTemplates'
          ],
          3 => [
            'url' => '#Admin/webhooks',
            'label' => 'Webhooks',
            'iconClass' => 'fas fa-share-alt icon-rotate-90',
            'description' => 'webhooks'
          ],
          4 => [
            'url' => '#Admin/dashboardTemplates',
            'label' => 'Dashboard Templates',
            'iconClass' => 'fas fa-th-large',
            'description' => 'dashboardTemplates'
          ],
          5 => [
            'url' => '#Admin/layoutSets',
            'label' => 'Layout Sets',
            'iconClass' => 'fas fa-table',
            'description' => 'layoutSets'
          ],
          6 => [
            'url' => '#Admin/attachments',
            'label' => 'Attachments',
            'iconClass' => 'fas fa-paperclip',
            'description' => 'attachments'
          ],
          7 => [
            'url' => '#Admin/jobs',
            'label' => 'Jobs',
            'iconClass' => 'fas fa-list-ul',
            'description' => 'jobs'
          ],
          8 => [
            'url' => '#Admin/emailAddresses',
            'label' => 'Email Addresses',
            'iconClass' => 'fas fa-envelope',
            'description' => 'emailAddresses'
          ],
          9 => [
            'url' => '#Admin/phoneNumbers',
            'label' => 'Phone Numbers',
            'iconClass' => 'fas fa-phone',
            'description' => 'phoneNumbers'
          ]
        ],
        'order' => 25
      ],
      'misc' => [
        'label' => 'Misc',
        'itemList' => [
          0 => [
            'url' => '#Admin/formulaSandbox',
            'label' => 'Formula Sandbox',
            'iconClass' => 'fas fa-code',
            'description' => 'formulaSandbox',
            'view' => 'views/admin/formula-sandbox/index'
          ]
        ],
        'order' => 26
      ]
    ],
    'appParams' => [
      'templateEntityTypeList' => [
        'className' => 'Espo\\Classes\\AppParams\\TemplateEntityTypeList'
      ]
    ],
    'authentication' => [
      'beforeLoginHookClassNameList' => [
        0 => 'Espo\\Core\\Authentication\\Hook\\Hooks\\FailedAttemptsLimit'
      ],
      'onFailHookClassNameList' => [],
      'onSuccessHookClassNameList' => [],
      'onSuccessByTokenHookClassNameList' => [],
      'onSecondStepRequiredHookClassNameList' => []
    ],
    'authentication2FAMethods' => [
      'Totp' => [
        'settings' => [
          'isAvailable' => true
        ],
        'userApplyView' => 'views/user-security/modals/totp',
        'loginClassName' => 'Espo\\Core\\Authentication\\TwoFactor\\Totp\\TotpLogin',
        'userSetupClassName' => 'Espo\\Core\\Authentication\\TwoFactor\\Totp\\TotpUserSetup'
      ],
      'Email' => [
        'settings' => [
          'isAvailable' => true
        ],
        'userApplyView' => 'views/user-security/modals/two-factor-email',
        'loginClassName' => 'Espo\\Core\\Authentication\\TwoFactor\\Email\\EmailLogin',
        'userSetupClassName' => 'Espo\\Core\\Authentication\\TwoFactor\\Email\\EmailUserSetup'
      ],
      'Sms' => [
        'settings' => [
          'isAvailable' => true
        ],
        'userApplyView' => 'views/user-security/modals/two-factor-sms',
        'loginClassName' => 'Espo\\Core\\Authentication\\TwoFactor\\Sms\\SmsLogin',
        'userSetupClassName' => 'Espo\\Core\\Authentication\\TwoFactor\\Sms\\SmsUserSetup'
      ]
    ],
    'cleanup' => [
      'reminders' => [
        'className' => 'Espo\\Classes\\Cleanup\\Reminders',
        'order' => 10
      ],
      'webhookQueue' => [
        'className' => 'Espo\\Classes\\Cleanup\\WebhookQueue',
        'order' => 11
      ],
      'twoFactorCodes' => [
        'className' => 'Espo\\Classes\\Cleanup\\TwoFactorCodes'
      ],
      'massActions' => [
        'className' => 'Espo\\Classes\\Cleanup\\MassActions'
      ],
      'exports' => [
        'className' => 'Espo\\Classes\\Cleanup\\Exports'
      ],
      'passwordChangeRequests' => [
        'className' => 'Espo\\Classes\\Cleanup\\PasswordChangeRequests'
      ]
    ],
    'client' => [
      'scriptList' => [
        0 => 'client/lib/espo.min.js'
      ],
      'developerModeScriptList' => [
        0 => 'client/src/loader.js',
        1 => 'client/src/loader-init-libs.js'
      ],
      'linkList' => [
        0 => [
          'href' => 'client/fonts/open-sans/open-sans-v16-cyrillic_latin_cyrillic-ext_latin-ext-regular.woff2',
          'as' => 'font',
          'type' => 'font/woff2',
          'rel' => 'preload',
          'noTimestamp' => true,
          'crossorigin' => true
        ],
        1 => [
          'href' => 'client/fonts/open-sans/open-sans-v16-cyrillic_latin_cyrillic-ext_latin-ext-600.woff2',
          'as' => 'font',
          'type' => 'font/woff2',
          'rel' => 'preload',
          'noTimestamp' => true,
          'crossorigin' => true
        ]
      ],
      'cssList' => [
        0 => 'client/custom/css/fekt.css'
      ],
      'favicon' => 'client/custom/img/fekt.ico',
      'favicon196' => 'client/custom/img/fekt.ico'
    ],
    'clientRoutes' => [
      'AddressMap/view/:entityType/:id/:field' => [
        'params' => [
          'controller' => 'AddressMap',
          'action' => 'view'
        ]
      ],
      'Admin/:page' => [
        'params' => [
          'controller' => 'Admin',
          'action' => 'page'
        ],
        'order' => 1
      ],
      'Admin/:page/:options' => [
        'params' => [
          'controller' => 'Admin',
          'action' => 'page'
        ],
        'order' => 1
      ]
    ],
    'complexExpression' => [
      'functionList' => [
        0 => [
          'name' => 'EQUAL',
          'insertText' => 'EQUAL:(VALUE1, VALUE2)',
          'returnType' => 'bool'
        ],
        1 => [
          'name' => 'NOT_EQUAL',
          'insertText' => 'NOT_EQUAL:(VALUE1, VALUE2)',
          'returnType' => 'bool'
        ],
        2 => [
          'name' => 'OR',
          'insertText' => 'OR:(EXPR1, EXPR2)',
          'returnType' => 'bool'
        ],
        3 => [
          'name' => 'AND',
          'insertText' => 'AND:(EXPR1, EXPR2)',
          'returnType' => 'bool'
        ],
        4 => [
          'name' => 'NOT',
          'insertText' => 'NOT:(EXPR)',
          'returnType' => 'bool'
        ],
        5 => [
          'name' => 'LIKE',
          'insertText' => 'LIKE:(VALUE, \'pattern%\')',
          'returnType' => 'bool'
        ],
        6 => [
          'name' => 'NOT_LIKE',
          'insertText' => 'NOT_LIKE:(VALUE, \'pattern%\')',
          'returnType' => 'bool'
        ],
        7 => [
          'name' => 'GREATER_THAN',
          'insertText' => 'GREATER_THAN:(VALUE1, VALUE2)',
          'returnType' => 'bool'
        ],
        8 => [
          'name' => 'LESS_THAN',
          'insertText' => 'LESS_THAN:(VALUE1, VALUE2)',
          'returnType' => 'bool'
        ],
        9 => [
          'name' => 'GREATER_THAN_OR_EQUAL',
          'insertText' => 'GREATER_THAN_OR_EQUAL:(VALUE1, VALUE2)',
          'returnType' => 'bool'
        ],
        10 => [
          'name' => 'LESS_THAN_OR_EQUAL',
          'insertText' => 'LESS_THAN_OR_EQUAL:(VALUE1, VALUE2)',
          'returnType' => 'bool'
        ],
        11 => [
          'name' => 'IS_NULL',
          'insertText' => 'IS_NULL:(VALUE)',
          'returnType' => 'bool'
        ],
        12 => [
          'name' => 'IS_NOT_NULL',
          'insertText' => 'IS_NOT_NULL:(VALUE)',
          'returnType' => 'bool'
        ],
        13 => [
          'name' => 'IN',
          'insertText' => 'IN:(VALUE, VALUE1, VALUE2, VALUE3)',
          'returnType' => 'bool'
        ],
        14 => [
          'name' => 'NOT_IN',
          'insertText' => 'NOT_IN:(VALUE, VALUE1, VALUE2, VALUE3)',
          'returnType' => 'bool'
        ],
        15 => [
          'name' => 'IF',
          'insertText' => 'IF:(CONDITION, THEN_VALUE, ELSE_VALUE)'
        ],
        16 => [
          'name' => 'MONTH_NUMBER',
          'insertText' => 'MONTH_NUMBER:(DATE_VALUE)',
          'returnType' => 'int'
        ],
        17 => [
          'name' => 'WEEK_NUMBER_0',
          'insertText' => 'WEEK_NUMBER_0:(DATE_VALUE)',
          'returnType' => 'int'
        ],
        18 => [
          'name' => 'WEEK_NUMBER_1',
          'insertText' => 'WEEK_NUMBER_1:(DATE_VALUE)',
          'returnType' => 'int'
        ],
        19 => [
          'name' => 'DAYOFWEEK',
          'insertText' => 'DAYOFWEEK:(DATE_VALUE)',
          'returnType' => 'int'
        ],
        20 => [
          'name' => 'DAYOFMONTH',
          'insertText' => 'DAYOFMONTH:(DATE_VALUE)',
          'returnType' => 'int'
        ],
        21 => [
          'name' => 'YEAR',
          'insertText' => 'YEAR:(DATE_VALUE)',
          'returnType' => 'int'
        ],
        22 => [
          'name' => 'HOUR',
          'insertText' => 'HOUR:(DATE_VALUE)',
          'returnType' => 'int'
        ],
        23 => [
          'name' => 'MINUTE',
          'insertText' => 'MINUTE:(DATE_VALUE)',
          'returnType' => 'int'
        ],
        24 => [
          'name' => 'MONTH',
          'insertText' => 'MONTH:(DATE_VALUE)',
          'returnType' => 'int'
        ],
        25 => [
          'name' => 'QUARTER',
          'insertText' => 'QUARTER:(DATE_VALUE)',
          'returnType' => 'int'
        ],
        26 => [
          'name' => 'WEEK',
          'insertText' => 'WEEK:(DATE_VALUE)',
          'returnType' => 'int'
        ],
        27 => [
          'name' => 'NOW',
          'insertText' => 'NOW:()',
          'returnType' => 'string'
        ],
        28 => [
          'name' => 'TZ',
          'insertText' => 'TZ:(DATE_VALUE, OFFSET)',
          'returnType' => 'string'
        ],
        29 => [
          'name' => 'UNIX_TIMESTAMP',
          'insertText' => 'UNIX_TIMESTAMP:(DATE_VALUE)',
          'returnType' => 'int'
        ],
        30 => [
          'name' => 'CONCAT',
          'insertText' => 'CONCAT:(STRING1, STRING2)',
          'returnType' => 'string'
        ],
        31 => [
          'name' => 'LEFT',
          'insertText' => 'LEFT:(STRING, NUMBER_OF_CHARACTERS)',
          'returnType' => 'string'
        ],
        32 => [
          'name' => 'LOWER',
          'insertText' => 'LOWER:(STRING)',
          'returnType' => 'string'
        ],
        33 => [
          'name' => 'UPPER',
          'insertText' => 'UPPER:(STRING)',
          'returnType' => 'string'
        ],
        34 => [
          'name' => 'TRIM',
          'insertText' => 'TRIM:(STRING)',
          'returnType' => 'string'
        ],
        35 => [
          'name' => 'CHAR_LENGTH',
          'insertText' => 'CHAR_LENGTH:(STRING)',
          'returnType' => 'int'
        ],
        36 => [
          'name' => 'BINARY',
          'insertText' => 'BINARY:(STRING)',
          'returnType' => 'string'
        ],
        37 => [
          'name' => 'REPLACE',
          'insertText' => 'REPLACE:(HAYSTACK, NEEDLE, REPLACE_WITH)',
          'returnType' => 'string'
        ],
        38 => [
          'name' => 'ADD',
          'insertText' => 'ADD:(VALUE1, VALUE2)',
          'returnType' => 'float'
        ],
        39 => [
          'name' => 'SUB',
          'insertText' => 'SUB:(VALUE1, VALUE2)',
          'returnType' => 'float'
        ],
        40 => [
          'name' => 'MUL',
          'insertText' => 'MUL:(VALUE1, VALUE2)',
          'returnType' => 'float'
        ],
        41 => [
          'name' => 'DIV',
          'insertText' => 'DIV:(VALUE1, VALUE2)',
          'returnType' => 'float'
        ],
        42 => [
          'name' => 'MOD',
          'insertText' => 'MOD:(VALUE1, VALUE2)',
          'returnType' => 'float'
        ],
        43 => [
          'name' => 'FLOOR',
          'insertText' => 'FLOOR:(VALUE)',
          'returnType' => 'int'
        ],
        44 => [
          'name' => 'CEIL',
          'insertText' => 'CEIL:(VALUE)',
          'returnType' => 'int'
        ],
        45 => [
          'name' => 'ROUND',
          'insertText' => 'ROUND:(VALUE, PRECISION)',
          'returnType' => 'float'
        ]
      ]
    ],
    'config' => [
      'entityTypeListParamList' => [
        0 => 'tabList',
        1 => 'quickCreateList',
        2 => 'globalSearchEntityList',
        3 => 'assignmentEmailNotificationsEntityList',
        4 => 'assignmentNotificationsEntityList',
        5 => 'calendarEntityList',
        6 => 'streamEmailNotificationsEntityList',
        7 => 'activitiesEntityList',
        8 => 'historyEntityList',
        9 => 'streamEmailNotificationsTypeList',
        10 => 'emailKeepParentTeamsEntityList'
      ],
      'params' => [
        'awsS3Storage' => [
          'level' => 'system'
        ],
        'smsProvider' => [
          'level' => 'admin'
        ]
      ]
    ],
    'consoleCommands' => [
      'import' => [
        'className' => 'Espo\\Classes\\ConsoleCommands\\Import',
        'listed' => true
      ],
      'clearCache' => [
        'listed' => true
      ],
      'rebuild' => [
        'listed' => true
      ],
      'appInfo' => [
        'listed' => true
      ],
      'setPassword' => [
        'listed' => true
      ],
      'upgrade' => [
        'listed' => true
      ],
      'extension' => [
        'listed' => true
      ],
      'runJob' => [
        'listed' => true
      ],
      'version' => [
        'listed' => true
      ]
    ],
    'containerServices' => [
      'authTokenManager' => [
        'className' => 'Espo\\Core\\Authentication\\AuthToken\\EspoManager'
      ],
      'schema' => [
        'className' => 'Espo\\Core\\Utils\\Database\\Schema\\Schema'
      ],
      'ormMetadataData' => [
        'className' => 'Espo\\Core\\Utils\\Metadata\\OrmMetadataData'
      ],
      'classFinder' => [
        'className' => 'Espo\\Core\\Utils\\ClassFinder'
      ],
      'fileStorageManager' => [
        'className' => 'Espo\\Core\\FileStorage\\Manager'
      ],
      'jobManager' => [
        'className' => 'Espo\\Core\\Job\\JobManager'
      ],
      'webSocketSubmission' => [
        'className' => 'Espo\\Core\\WebSocket\\Submission'
      ],
      'crypt' => [
        'className' => 'Espo\\Core\\Utils\\Crypt'
      ],
      'passwordHash' => [
        'className' => 'Espo\\Core\\Utils\\PasswordHash'
      ],
      'number' => [
        'loaderClassName' => 'Espo\\Core\\Loaders\\NumberUtil'
      ],
      'selectBuilderFactory' => [
        'className' => 'Espo\\Core\\Select\\SelectBuilderFactory'
      ],
      'selectManagerFactory' => [
        'className' => 'Espo\\Core\\Select\\SelectManagerFactory'
      ],
      'serviceFactory' => [
        'className' => 'Espo\\Core\\ServiceFactory'
      ],
      'recordServiceContainer' => [
        'className' => 'Espo\\Core\\Record\\ServiceContainer'
      ],
      'recordHookManager' => [
        'className' => 'Espo\\Core\\Record\\HookManager'
      ],
      'templateFileManager' => [
        'className' => 'Espo\\Core\\Utils\\TemplateFileManager'
      ],
      'webhookManager' => [
        'className' => 'Espo\\Core\\Webhook\\Manager'
      ],
      'scheduledJob' => [
        'className' => 'Espo\\Core\\Utils\\ScheduledJob'
      ],
      'hookManager' => [
        'className' => 'Espo\\Core\\HookManager'
      ],
      'clientManager' => [
        'className' => 'Espo\\Core\\Utils\\ClientManager'
      ],
      'themeManager' => [
        'className' => 'Espo\\Core\\Utils\\ThemeManager'
      ],
      'fieldUtil' => [
        'className' => 'Espo\\Core\\Utils\\FieldUtil'
      ],
      'fieldManager' => [
        'className' => 'Espo\\Core\\Utils\\FieldManager'
      ],
      'fieldManagerUtil' => [
        'className' => 'Espo\\Core\\Utils\\FieldManagerUtil'
      ],
      'emailSender' => [
        'className' => 'Espo\\Core\\Mail\\EmailSender'
      ],
      'mailSender' => [
        'className' => 'Espo\\Core\\Mail\\Sender'
      ],
      'htmlizerFactory' => [
        'className' => 'Espo\\Core\\Htmlizer\\HtmlizerFactory'
      ],
      'fieldValidationManager' => [
        'className' => 'Espo\\Core\\FieldValidation\\FieldValidationManager'
      ],
      'assignmentCheckerManager' => [
        'className' => 'Espo\\Core\\Acl\\AssignmentChecker\\AssignmentCheckerManager'
      ],
      'hasher' => [
        'className' => 'Espo\\Core\\Utils\\Hasher'
      ],
      'emailFilterManager' => [
        'className' => 'Espo\\Core\\Utils\\EmailFilterManager'
      ],
      'externalAccountClientManager' => [
        'className' => 'Espo\\Core\\ExternalAccount\\ClientManager'
      ],
      'formulaManager' => [
        'className' => 'Espo\\Core\\Formula\\Manager'
      ],
      'user' => [
        'settable' => true
      ]
    ],
    'currency' => [
      'symbolMap' => [
        'AED' => 'د.إ',
        'AFN' => '؋',
        'ALL' => 'L',
        'ANG' => 'ƒ',
        'AOA' => 'Kz',
        'ARS' => '$',
        'AUD' => '$',
        'AWG' => 'ƒ',
        'AZN' => '₼',
        'BAM' => 'KM',
        'BBD' => '$',
        'BDT' => '৳',
        'BGN' => 'лв',
        'BHD' => '.د.ب',
        'BIF' => 'FBu',
        'BMD' => '$',
        'BND' => '$',
        'BOB' => 'Bs.',
        'BRL' => 'R$',
        'BSD' => '$',
        'BTN' => 'Nu.',
        'BWP' => 'P',
        'BYN' => 'Br',
        'BYR' => 'p.',
        'BZD' => 'BZ$',
        'CAD' => '$',
        'CDF' => 'FC',
        'CHF' => 'Fr.',
        'CLP' => '$',
        'CNY' => '¥',
        'COP' => '$',
        'CRC' => '₡',
        'CUC' => '$',
        'CUP' => '₱',
        'CVE' => '$',
        'CZK' => 'Kč',
        'DJF' => 'Fdj',
        'DKK' => 'kr',
        'DOP' => 'RD$',
        'DZD' => 'دج',
        'EEK' => 'kr',
        'EGP' => '£',
        'ERN' => 'Nfk',
        'ETB' => 'Br',
        'EUR' => '€',
        'FJD' => '$',
        'FKP' => '£',
        'GBP' => '£',
        'GEL' => '₾',
        'GGP' => '£',
        'GHC' => '₵',
        'GHS' => 'GH₵',
        'GIP' => '£',
        'GMD' => 'D',
        'GNF' => 'FG',
        'GTQ' => 'Q',
        'GYD' => '$',
        'HKD' => '$',
        'HNL' => 'L',
        'HRK' => 'kn',
        'HTG' => 'G',
        'HUF' => 'Ft',
        'IDR' => 'Rp',
        'ILS' => '₪',
        'IMP' => '£',
        'INR' => '₹',
        'IQD' => 'ع.د',
        'IRR' => '﷼',
        'ISK' => 'kr',
        'JEP' => '£',
        'JMD' => 'J$',
        'JPY' => '¥',
        'KES' => 'KSh',
        'KGS' => 'лв',
        'KHR' => '៛',
        'KMF' => 'CF',
        'KPW' => '₩',
        'KRW' => '₩',
        'KYD' => '$',
        'KZT' => '₸',
        'LAK' => '₭',
        'LBP' => '£',
        'LKR' => '₨',
        'LRD' => '$',
        'LSL' => 'M',
        'LTL' => 'Lt',
        'LVL' => 'Ls',
        'MAD' => 'MAD',
        'MDL' => 'lei',
        'MGA' => 'Ar',
        'MKD' => 'ден',
        'MMK' => 'K',
        'MNT' => '₮',
        'MOP' => 'MOP$',
        'MUR' => '₨',
        'MVR' => 'Rf',
        'MWK' => 'MK',
        'MXN' => '$',
        'MYR' => 'RM',
        'MZN' => 'MT',
        'NAD' => '$',
        'NGN' => '₦',
        'NIO' => 'C$',
        'NOK' => 'kr',
        'NPR' => '₨',
        'NZD' => '$',
        'OMR' => '﷼',
        'PAB' => 'B/.',
        'PEN' => 'S/.',
        'PGK' => 'K',
        'PHP' => '₱',
        'PKR' => '₨',
        'PLN' => 'zł',
        'PYG' => 'Gs',
        'QAR' => '﷼',
        'RMB' => '￥',
        'RON' => 'lei',
        'RSD' => 'Дин.',
        'RUB' => '₽',
        'RWF' => 'R₣',
        'SAR' => '﷼',
        'SBD' => '$',
        'SCR' => '₨',
        'SDG' => 'ج.س.',
        'SEK' => 'kr',
        'SGD' => '$',
        'SHP' => '£',
        'SLL' => 'Le',
        'SOS' => 'S',
        'SRD' => '$',
        'SSP' => '£',
        'STD' => 'Db',
        'SVC' => '$',
        'SYP' => '£',
        'SZL' => 'E',
        'THB' => '฿',
        'TJS' => 'SM',
        'TMT' => 'T',
        'TND' => 'د.ت',
        'TOP' => 'T$',
        'TRL' => '₤',
        'TRY' => '₺',
        'TTD' => 'TT$',
        'TVD' => '$',
        'TWD' => 'NT$',
        'TZS' => 'TSh',
        'UAH' => '₴',
        'UGX' => 'USh',
        'USD' => '$',
        'UYU' => '$U',
        'UZS' => 'лв',
        'VEF' => 'Bs',
        'VND' => '₫',
        'VUV' => 'VT',
        'WST' => 'WS$',
        'XAF' => 'FCFA',
        'XBT' => 'Ƀ',
        'XCD' => '$',
        'XOF' => 'CFA',
        'XPF' => '₣',
        'YER' => '﷼',
        'ZAR' => 'R',
        'ZWD' => 'Z$',
        'BTC' => '฿'
      ],
      'list' => [
        0 => 'AFN',
        1 => 'AED',
        2 => 'ALL',
        3 => 'ANG',
        4 => 'AOA',
        5 => 'ARS',
        6 => 'AUD',
        7 => 'BAM',
        8 => 'BGN',
        9 => 'BHD',
        10 => 'BND',
        11 => 'BOB',
        12 => 'BRL',
        13 => 'BWP',
        14 => 'BYN',
        15 => 'CAD',
        16 => 'CHF',
        17 => 'CLP',
        18 => 'CNY',
        19 => 'COP',
        20 => 'CRC',
        21 => 'CVE',
        22 => 'CZK',
        23 => 'DKK',
        24 => 'DOP',
        25 => 'DZD',
        26 => 'EGP',
        27 => 'EUR',
        28 => 'FJD',
        29 => 'GBP',
        30 => 'GNF',
        31 => 'GTQ',
        32 => 'HKD',
        33 => 'HNL',
        34 => 'HRK',
        35 => 'HUF',
        36 => 'IDR',
        37 => 'ILS',
        38 => 'INR',
        39 => 'IRR',
        40 => 'JMD',
        41 => 'JOD',
        42 => 'JPY',
        43 => 'KES',
        44 => 'KRW',
        45 => 'KWD',
        46 => 'KYD',
        47 => 'KZT',
        48 => 'LBP',
        49 => 'LKR',
        50 => 'MAD',
        51 => 'MDL',
        52 => 'MKD',
        53 => 'MMK',
        54 => 'MUR',
        55 => 'MXN',
        56 => 'MYR',
        57 => 'MZN',
        58 => 'NAD',
        59 => 'NGN',
        60 => 'NIO',
        61 => 'NOK',
        62 => 'NPR',
        63 => 'NZD',
        64 => 'OMR',
        65 => 'PEN',
        66 => 'PGK',
        67 => 'PHP',
        68 => 'PKR',
        69 => 'PLN',
        70 => 'PYG',
        71 => 'QAR',
        72 => 'RON',
        73 => 'RSD',
        74 => 'RUB',
        75 => 'SAR',
        76 => 'SCR',
        77 => 'SEK',
        78 => 'SGD',
        79 => 'SLL',
        80 => 'SVC',
        81 => 'THB',
        82 => 'TND',
        83 => 'TRY',
        84 => 'TTD',
        85 => 'TWD',
        86 => 'TZS',
        87 => 'UAH',
        88 => 'UGX',
        89 => 'USD',
        90 => 'UYU',
        91 => 'UZS',
        92 => 'VND',
        93 => 'XAF',
        94 => 'YER',
        95 => 'ZAR',
        96 => 'ZMW',
        97 => 'ZWL'
      ]
    ],
    'dateTime' => [
      'dateFormatList' => [
        0 => 'DD.MM.YYYY',
        1 => 'MM/DD/YYYY',
        2 => 'DD/MM/YYYY',
        3 => 'YYYY-MM-DD',
        4 => 'DD. MM. YYYY'
      ],
      'timeFormatList' => [
        0 => 'HH:mm',
        1 => 'hh:mma',
        2 => 'hh:mmA',
        3 => 'hh:mm A',
        4 => 'hh:mm a'
      ]
    ],
    'defaultDashboardLayouts' => [
      'Standard' => [
        0 => [
          'name' => 'My Espo',
          'layout' => [
            0 => [
              'id' => 'defaultActivities',
              'name' => 'Activities',
              'x' => 2,
              'y' => 2,
              'width' => 2,
              'height' => 2
            ],
            1 => [
              'id' => 'defaultStream',
              'name' => 'Stream',
              'x' => 0,
              'y' => 0,
              'width' => 2,
              'height' => 4
            ],
            2 => [
              'id' => 'defaultTasks',
              'name' => 'Tasks',
              'x' => 2,
              'y' => 4,
              'width' => 2,
              'height' => 2
            ]
          ]
        ]
      ]
    ],
    'defaultDashboardOptions' => [
      'Standard' => [
        'defaultStream' => [
          'displayRecords' => 10
        ]
      ]
    ],
    'entityTemplateList' => [
      0 => 'Base',
      1 => 'BasePlus',
      2 => 'Event',
      3 => 'Person',
      4 => 'Company'
    ],
    'export' => [
      'formatList' => [
        0 => 'xlsx',
        1 => 'csv'
      ],
      'formatDefs' => [
        'csv' => [
          'mimeType' => 'text/csv',
          'fileExtension' => 'csv'
        ],
        'xlsx' => [
          'mimeType' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
          'fileExtension' => 'xlsx'
        ]
      ],
      'processorClassNameMap' => [
        'csv' => 'Espo\\Tools\\Export\\Processors\\Csv',
        'xlsx' => 'Espo\\Tools\\Export\\Processors\\Xlsx'
      ]
    ],
    'fieldProcessing' => [
      'readLoaderClassNameList' => [
        0 => 'Espo\\Core\\FieldProcessing\\Link\\HasOneLoader',
        1 => 'Espo\\Core\\FieldProcessing\\Link\\NotJoinedLoader',
        2 => 'Espo\\Core\\FieldProcessing\\LinkMultiple\\Loader',
        3 => 'Espo\\Core\\FieldProcessing\\LinkParent\\Loader',
        4 => 'Espo\\Core\\FieldProcessing\\EmailAddress\\Loader',
        5 => 'Espo\\Core\\FieldProcessing\\PhoneNumber\\Loader',
        6 => 'Espo\\Core\\FieldProcessing\\Stream\\FollowersLoader'
      ],
      'listLoaderClassNameList' => [
        0 => 'Espo\\Core\\FieldProcessing\\LinkParent\\Loader',
        1 => 'Espo\\Core\\FieldProcessing\\LinkMultiple\\ListLoader'
      ],
      'saverClassNameList' => [
        0 => 'Espo\\Core\\FieldProcessing\\EmailAddress\\Saver',
        1 => 'Espo\\Core\\FieldProcessing\\PhoneNumber\\Saver',
        2 => 'Espo\\Core\\FieldProcessing\\Relation\\Saver',
        3 => 'Espo\\Core\\FieldProcessing\\MultiEnum\\Saver',
        4 => 'Espo\\Core\\FieldProcessing\\File\\Saver',
        5 => 'Espo\\Core\\FieldProcessing\\Wysiwyg\\Saver'
      ]
    ],
    'file' => [
      'extensionMimeTypeMap' => [
        'aac' => [
          0 => 'audio/aac'
        ],
        'abw' => [
          0 => 'application/x-abiword'
        ],
        'arc' => [
          0 => 'application/x-freearc'
        ],
        'avif' => [
          0 => 'image/avif'
        ],
        'avi' => [
          0 => 'video/x-msvideo'
        ],
        'azw' => [
          0 => 'application/vnd.amazon.ebook'
        ],
        'bin' => [
          0 => 'application/octet-stream'
        ],
        'bmp' => [
          0 => 'image/bmp'
        ],
        'bz' => [
          0 => 'application/x-bzip'
        ],
        'bz2' => [
          0 => 'application/x-bzip2'
        ],
        'cda' => [
          0 => 'application/x-cdf'
        ],
        'csh' => [
          0 => 'application/x-csh'
        ],
        'css' => [
          0 => 'text/css'
        ],
        'csv' => [
          0 => 'text/csv'
        ],
        'doc' => [
          0 => 'application/msword'
        ],
        'docx' => [
          0 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
        ],
        'eot' => [
          0 => 'application/vnd.ms-fontobject'
        ],
        'epub' => [
          0 => 'application/epub+zip'
        ],
        'gz' => [
          0 => 'application/gzip'
        ],
        'gif' => [
          0 => 'image/gif'
        ],
        'htm' => [
          0 => 'text/html'
        ],
        'html' => [
          0 => 'text/html'
        ],
        'ico' => [
          0 => 'image/vnd.microsoft.icon'
        ],
        'ics' => [
          0 => 'text/calendar'
        ],
        'jar' => [
          0 => 'application/java-archive'
        ],
        'jpeg ' => [
          0 => 'image/jpeg'
        ],
        'jpg' => [
          0 => 'image/jpeg'
        ],
        'js' => [
          0 => 'text/javascript'
        ],
        'json' => [
          0 => 'application/json'
        ],
        'jsonld' => [
          0 => 'application/ld+json'
        ],
        'mid' => [
          0 => 'audio/midi',
          1 => 'audio/x-midi'
        ],
        'midi' => [
          0 => 'audio/midi',
          1 => 'audio/x-midi'
        ],
        'mjs' => [
          0 => 'text/javascript'
        ],
        'mp3' => [
          0 => 'audio/mpeg'
        ],
        'mp4' => [
          0 => 'video/mp4'
        ],
        'mpeg' => [
          0 => 'video/mpeg'
        ],
        'mpkg' => [
          0 => 'application/vnd.apple.installer+xml'
        ],
        'odp' => [
          0 => 'application/vnd.oasis.opendocument.presentation'
        ],
        'ods' => [
          0 => 'application/vnd.oasis.opendocument.spreadsheet'
        ],
        'odt' => [
          0 => 'application/vnd.oasis.opendocument.text'
        ],
        'oga' => [
          0 => 'audio/ogg'
        ],
        'ogv' => [
          0 => 'video/ogg'
        ],
        'ogx' => [
          0 => 'application/ogg'
        ],
        'opus' => [
          0 => 'audio/opus'
        ],
        'otf' => [
          0 => 'font/otf'
        ],
        'png' => [
          0 => 'image/png'
        ],
        'pdf' => [
          0 => 'application/pdf'
        ],
        'php' => [
          0 => 'application/x-httpd-php'
        ],
        'ppt' => [
          0 => 'application/vnd.ms-powerpoint'
        ],
        'pptx' => [
          0 => 'application/vnd.openxmlformats-officedocument.presentationml.presentation'
        ],
        'rar' => [
          0 => 'application/vnd.rar'
        ],
        'rtf' => [
          0 => 'application/rtf'
        ],
        'sh' => [
          0 => 'application/x-sh'
        ],
        'svg' => [
          0 => 'image/svg+xml'
        ],
        'swf' => [
          0 => 'application/x-shockwave-flash'
        ],
        'tar' => [
          0 => 'application/x-tar'
        ],
        'tif' => [
          0 => 'image/tiff'
        ],
        'tiff' => [
          0 => 'image/tiff'
        ],
        'ts' => [
          0 => 'video/mp2t'
        ],
        'ttf' => [
          0 => 'font/ttf'
        ],
        'txt' => [
          0 => 'text/plain'
        ],
        'vsd' => [
          0 => 'application/vnd.visio'
        ],
        'wav' => [
          0 => 'audio/wav'
        ],
        'weba' => [
          0 => 'audio/webm'
        ],
        'webm' => [
          0 => 'video/webm'
        ],
        'webp' => [
          0 => 'image/webp'
        ],
        'woff' => [
          0 => 'font/woff'
        ],
        'woff2' => [
          0 => 'font/woff2'
        ],
        'xhtml' => [
          0 => 'application/xhtml+xml'
        ],
        'xls' => [
          0 => 'application/vnd.ms-excel'
        ],
        'xlsx' => [
          0 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        ],
        'xml' => [
          0 => 'application/xml'
        ],
        'xul' => [
          0 => 'application/vnd.mozilla.xul+xml'
        ],
        'zip' => [
          0 => 'application/zip'
        ],
        '3gp' => [
          0 => 'video/3gpp',
          1 => 'audio/3gpp'
        ],
        '3g2' => [
          0 => 'video/3gpp2',
          1 => 'audio/3gpp2'
        ],
        '7z' => [
          0 => 'application/x-7z-compressed'
        ],
        'md' => [
          0 => 'text/markdown'
        ]
      ],
      'inlineMimeTypeList' => [
        0 => 'application/pdf',
        1 => 'text/plain',
        2 => 'audio/wav',
        3 => 'audio/mpeg',
        4 => 'audio/ogg',
        5 => 'audio/webm',
        6 => 'video/mpeg',
        7 => 'video/mp4',
        8 => 'video/ogg',
        9 => 'video/webm',
        10 => 'image/jpeg',
        11 => 'image/png',
        12 => 'image/gif',
        13 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        14 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        15 => 'application/vnd.ms-word',
        16 => 'application/vnd.ms-excel',
        17 => 'application/vnd.oasis.opendocument.text',
        18 => 'application/vnd.oasis.opendocument.spreadsheet',
        19 => 'application/msword',
        20 => 'application/msexcel'
      ]
    ],
    'fileStorage' => [
      'implementationClassNameMap' => [
        'EspoUploadDir' => 'Espo\\Core\\FileStorage\\Storages\\EspoUploadDir',
        'AwsS3' => 'Espo\\Core\\FileStorage\\Storages\\AwsS3'
      ]
    ],
    'formula' => [
      'functionList' => [
        0 => [
          'name' => 'ifThenElse',
          'insertText' => 'ifThenElse(CONDITION, CONSEQUENT, ALTERNATIVE)'
        ],
        1 => [
          'name' => 'ifThen',
          'insertText' => 'ifThen(CONDITION, CONSEQUENT)'
        ],
        2 => [
          'name' => 'list',
          'insertText' => 'list(ITEM_1, ITEM_2)',
          'returnType' => 'array'
        ],
        3 => [
          'name' => 'while',
          'insertText' => 'while(CONDITION, STATEMENT)'
        ],
        4 => [
          'name' => 'string\\concatenate',
          'insertText' => 'string\\concatenate(STRING_1, STRING_2)',
          'returnType' => 'string'
        ],
        5 => [
          'name' => 'string\\substring',
          'insertText' => 'string\\substring(STRING, START, LENGTH)',
          'returnType' => 'string'
        ],
        6 => [
          'name' => 'string\\contains',
          'insertText' => 'string\\contains(STRING, NEEDLE)',
          'returnType' => 'bool'
        ],
        7 => [
          'name' => 'string\\pos',
          'insertText' => 'string\\pos(STRING, NEEDLE)',
          'returnType' => 'int'
        ],
        8 => [
          'name' => 'string\\pad',
          'insertText' => 'string\\pad(STRING, LENGTH, PAD_STRING)',
          'returnType' => 'string'
        ],
        9 => [
          'name' => 'string\\test',
          'insertText' => 'string\\test(STRING, REGULAR_EXPRESSION)',
          'returnType' => 'bool'
        ],
        10 => [
          'name' => 'string\\length',
          'insertText' => 'string\\length(STRING)',
          'returnType' => 'int'
        ],
        11 => [
          'name' => 'string\\trim',
          'insertText' => 'string\\trim(STRING)',
          'returnType' => 'string'
        ],
        12 => [
          'name' => 'string\\lowerCase',
          'insertText' => 'string\\lowerCase(STRING)',
          'returnType' => 'string'
        ],
        13 => [
          'name' => 'string\\upperCase',
          'insertText' => 'string\\upperCase(STRING)',
          'returnType' => 'string'
        ],
        14 => [
          'name' => 'string\\match',
          'insertText' => 'string\\match(STRING, REGULAR_EXPRESSION)',
          'returnType' => 'string|null'
        ],
        15 => [
          'name' => 'string\\matchAll',
          'insertText' => 'string\\matchAll(STRING, REGULAR_EXPRESSION)',
          'returnType' => 'string[]|null'
        ],
        16 => [
          'name' => 'string\\replace',
          'insertText' => 'string\\replace(STRING, SEARCH, REPLACE)',
          'returnType' => 'string'
        ],
        17 => [
          'name' => 'string\\split',
          'insertText' => 'string\\split(STRING, SEPARATOR)',
          'returnType' => 'string[]'
        ],
        18 => [
          'name' => 'datetime\\today',
          'insertText' => 'datetime\\today()',
          'returnType' => 'string'
        ],
        19 => [
          'name' => 'datetime\\now',
          'insertText' => 'datetime\\now()',
          'returnType' => 'string'
        ],
        20 => [
          'name' => 'datetime\\format',
          'insertText' => 'datetime\\format(VALUE)',
          'returnType' => 'string'
        ],
        21 => [
          'name' => 'datetime\\date',
          'insertText' => 'datetime\\date(VALUE)',
          'returnType' => 'int'
        ],
        22 => [
          'name' => 'datetime\\month',
          'insertText' => 'datetime\\month(VALUE)',
          'returnType' => 'int'
        ],
        23 => [
          'name' => 'datetime\\year',
          'insertText' => 'datetime\\year(VALUE)',
          'returnType' => 'int'
        ],
        24 => [
          'name' => 'datetime\\hour',
          'insertText' => 'datetime\\hour(VALUE)',
          'returnType' => 'int'
        ],
        25 => [
          'name' => 'datetime\\minute',
          'insertText' => 'datetime\\minute(VALUE)',
          'returnType' => 'int'
        ],
        26 => [
          'name' => 'datetime\\dayOfWeek',
          'insertText' => 'datetime\\dayOfWeek(VALUE)',
          'returnType' => 'int'
        ],
        27 => [
          'name' => 'datetime\\addMinutes',
          'insertText' => 'datetime\\addMinutes(VALUE, MINUTES)',
          'returnType' => 'string'
        ],
        28 => [
          'name' => 'datetime\\addHours',
          'insertText' => 'datetime\\addHours(VALUE, HOURS)',
          'returnType' => 'string'
        ],
        29 => [
          'name' => 'datetime\\addDays',
          'insertText' => 'datetime\\addDays(VALUE, DAYS)',
          'returnType' => 'string'
        ],
        30 => [
          'name' => 'datetime\\addWeeks',
          'insertText' => 'datetime\\addWeeks(VALUE, WEEKS)',
          'returnType' => 'string'
        ],
        31 => [
          'name' => 'datetime\\addMonths',
          'insertText' => 'datetime\\addMonths(VALUE, MONTHS)',
          'returnType' => 'string'
        ],
        32 => [
          'name' => 'datetime\\addYears',
          'insertText' => 'datetime\\addYears(VALUE, YEARS)',
          'returnType' => 'string'
        ],
        33 => [
          'name' => 'datetime\\diff',
          'insertText' => 'datetime\\diff(VALUE_1, VALUE_2, INTERVAL_TYPE)',
          'returnType' => 'int'
        ],
        34 => [
          'name' => 'datetime\\closest',
          'insertText' => 'datetime\\closest(VALUE, TYPE, TARGET, IS_PAST, TIMEZONE)',
          'returnType' => 'string'
        ],
        35 => [
          'name' => 'number\\format',
          'insertText' => 'number\\format(VALUE)',
          'returnType' => 'string'
        ],
        36 => [
          'name' => 'number\\abs',
          'insertText' => 'number\\abs(VALUE)'
        ],
        37 => [
          'name' => 'number\\round',
          'insertText' => 'number\\round(VALUE, PRECISION)',
          'returnType' => 'int|float'
        ],
        38 => [
          'name' => 'number\\floor',
          'insertText' => 'number\\floor(VALUE)',
          'returnType' => 'int'
        ],
        39 => [
          'name' => 'number\\ceil',
          'insertText' => 'number\\ceil(VALUE)',
          'returnType' => 'int'
        ],
        40 => [
          'name' => 'number\\randomInt',
          'insertText' => 'number\\randomInt(MIN, MAX)',
          'returnType' => 'int'
        ],
        41 => [
          'name' => 'number\\parseInt',
          'insertText' => 'number\\parseInt(STRING)',
          'returnType' => 'int'
        ],
        42 => [
          'name' => 'number\\parseFloat',
          'insertText' => 'number\\parseFloat(STRING)',
          'returnType' => 'float'
        ],
        43 => [
          'name' => 'entity\\isNew',
          'insertText' => 'entity\\isNew()',
          'returnType' => 'bool'
        ],
        44 => [
          'name' => 'entity\\isAttributeChanged',
          'insertText' => 'entity\\isAttributeChanged(ATTRIBUTE)',
          'returnType' => 'bool'
        ],
        45 => [
          'name' => 'entity\\isAttributeNotChanged',
          'insertText' => 'entity\\isAttributeNotChanged(ATTRIBUTE)',
          'returnType' => 'bool'
        ],
        46 => [
          'name' => 'entity\\attribute',
          'insertText' => 'entity\\attribute(ATTRIBUTE)',
          'returnType' => 'mixed'
        ],
        47 => [
          'name' => 'entity\\attributeFetched',
          'insertText' => 'entity\\attributeFetched(ATTRIBUTE)',
          'returnType' => 'mixed'
        ],
        48 => [
          'name' => 'entity\\setAttribute',
          'insertText' => 'entity\\setAttribute(ATTRIBUTE, VALUE)'
        ],
        49 => [
          'name' => 'entity\\addLinkMultipleId',
          'insertText' => 'entity\\addLinkMultipleId(LINK, ID)'
        ],
        50 => [
          'name' => 'entity\\hasLinkMultipleId',
          'insertText' => 'entity\\hasLinkMultipleId(LINK, ID)',
          'returnType' => 'bool'
        ],
        51 => [
          'name' => 'entity\\removeLinkMultipleId',
          'insertText' => 'entity\\removeLinkMultipleId(LINK, ID)'
        ],
        52 => [
          'name' => 'entity\\getLinkColumn',
          'insertText' => 'entity\\getLinkColumn(LINK, ID, COLUMN)',
          'returnType' => 'mixed'
        ],
        53 => [
          'name' => 'entity\\isRelated',
          'insertText' => 'entity\\isRelated(LINK, ID)',
          'returnType' => 'bool'
        ],
        54 => [
          'name' => 'entity\\sumRelated',
          'insertText' => 'entity\\sumRelated(LINK, FIELD, FILTER)',
          'returnType' => 'int|float'
        ],
        55 => [
          'name' => 'entity\\countRelated',
          'insertText' => 'entity\\countRelated(LINK, FILTER)',
          'returnType' => 'int'
        ],
        56 => [
          'name' => 'record\\exists',
          'insertText' => 'record\\exists(ENTITY_TYPE, KEY, VALUE)',
          'returnType' => 'bool'
        ],
        57 => [
          'name' => 'record\\count',
          'insertText' => 'record\\count(ENTITY_TYPE, KEY, VALUE)',
          'returnType' => 'int'
        ],
        58 => [
          'name' => 'record\\attribute',
          'insertText' => 'record\\attribute(ENTITY_TYPE, ID, ATTRIBUTE)',
          'returnType' => 'mixed'
        ],
        59 => [
          'name' => 'record\\findOne',
          'insertText' => 'record\\findOne(ENTITY_TYPE, ORDER_BY, ORDER, KEY1, VALUE1, KEY2, VALUE2)',
          'returnType' => 'string'
        ],
        60 => [
          'name' => 'record\\findRelatedOne',
          'insertText' => 'record\\findRelatedOne(ENTITY_TYPE, ID, LINK, ORDER_BY, ORDER, KEY1, VALUE1, KEY2, VALUE2)',
          'returnType' => 'string'
        ],
        61 => [
          'name' => 'record\\findRelatedMany',
          'insertText' => 'record\\findRelatedMany(ENTITY_TYPE, ID, LINK, LIMIT, ORDER_BY, ORDER, KEY1, VALUE1, KEY2, VALUE2)',
          'returnType' => 'string[]'
        ],
        62 => [
          'name' => 'record\\relate',
          'insertText' => 'record\\relate(ENTITY_TYPE, ID, LINK, FOREIGN_ID)'
        ],
        63 => [
          'name' => 'record\\unrelate',
          'insertText' => 'record\\unrelate(ENTITY_TYPE, ID, LINK, FOREIGN_ID)'
        ],
        64 => [
          'name' => 'record\\create',
          'insertText' => 'record\\create(ENTITY_TYPE, ATTRIBUTE1, VALUE1, ATTRIBUTE2, VALUE2)',
          'returnType' => 'string'
        ],
        65 => [
          'name' => 'record\\update',
          'insertText' => 'record\\update(ENTITY_TYPE, ID, ATTRIBUTE1, VALUE1, ATTRIBUTE2, VALUE2)'
        ],
        66 => [
          'name' => 'record\\relationColumn',
          'insertText' => 'record\\relationColumn(ENTITY_TYPE, ID, LINK, FOREIGN_ID, COLUMN)',
          'returnType' => 'mixed'
        ],
        67 => [
          'name' => 'record\\updateRelationColumn',
          'insertText' => 'record\\updateRelationColumn(ENTITY_TYPE, ID, LINK, FOREIGN_ID, COLUMN, VALUE)'
        ],
        68 => [
          'name' => 'env\\userAttribute',
          'insertText' => 'env\\userAttribute(ATTRIBUTE)',
          'returnType' => 'mixed'
        ],
        69 => [
          'name' => 'util\\generateId',
          'insertText' => 'util\\generateId()',
          'returnType' => 'string'
        ],
        70 => [
          'name' => 'object\\create',
          'insertText' => 'object\\create()',
          'returnType' => 'object'
        ],
        71 => [
          'name' => 'object\\get',
          'insertText' => 'object\\get(OBJECT, KEY)',
          'returnType' => 'mixed'
        ],
        72 => [
          'name' => 'object\\has',
          'insertText' => 'object\\has(OBJECT, KEY)',
          'returnType' => 'bool'
        ],
        73 => [
          'name' => 'object\\set',
          'insertText' => 'object\\set(OBJECT, KEY, VALUE)',
          'returnType' => 'object'
        ],
        74 => [
          'name' => 'object\\clear',
          'insertText' => 'object\\clear(OBJECT, KEY)',
          'returnType' => 'object'
        ],
        75 => [
          'name' => 'object\\cloneDeep',
          'insertText' => 'object\\cloneDeep(OBJECT)',
          'returnType' => 'object'
        ],
        76 => [
          'name' => 'password\\generate',
          'insertText' => 'password\\generate()',
          'returnType' => 'string'
        ],
        77 => [
          'name' => 'password\\hash',
          'insertText' => 'password\\hash(PASSWORD)',
          'returnType' => 'string'
        ],
        78 => [
          'name' => 'array\\includes',
          'insertText' => 'array\\includes(LIST, VALUE)',
          'returnType' => 'bool'
        ],
        79 => [
          'name' => 'array\\push',
          'insertText' => 'array\\push(LIST, VALUE)'
        ],
        80 => [
          'name' => 'array\\length',
          'insertText' => 'array\\length(LIST)',
          'returnType' => 'int'
        ],
        81 => [
          'name' => 'array\\at',
          'insertText' => 'array\\at(LIST, INDEX)',
          'returnType' => 'mixed'
        ],
        82 => [
          'name' => 'array\\join',
          'insertText' => 'array\\join(LIST, SEPARATOR)',
          'returnType' => 'string'
        ],
        83 => [
          'name' => 'array\\indexOf',
          'insertText' => 'array\\indexOf(LIST, ELEMENT)',
          'returnType' => '?int'
        ],
        84 => [
          'name' => 'array\\removeAt',
          'insertText' => 'array\\removeAt(LIST, INDEX)',
          'returnType' => 'array'
        ],
        85 => [
          'name' => 'array\\unique',
          'insertText' => 'array\\unique(LIST)',
          'returnType' => 'array'
        ],
        86 => [
          'name' => 'language\\translate',
          'insertText' => 'language\\translate(LABEL, CATEGORY, SCOPE)',
          'returnType' => 'string'
        ],
        87 => [
          'name' => 'language\\translateOption',
          'insertText' => 'language\\translateOption(OPTION, FIELD, SCOPE)',
          'returnType' => 'string'
        ],
        88 => [
          'name' => 'json\\retrieve',
          'insertText' => 'json\\retrieve(JSON, PATH)',
          'returnType' => 'mixed'
        ],
        89 => [
          'name' => 'json\\encode',
          'insertText' => 'json\\encode(VALUE)',
          'returnType' => 'string'
        ],
        90 => [
          'name' => 'ext\\email\\send',
          'insertText' => 'ext\\email\\send(EMAIL_ID)',
          'returnType' => 'bool'
        ],
        91 => [
          'name' => 'ext\\sms\\send',
          'insertText' => 'ext\\sms\\send(SMS_ID)',
          'returnType' => 'bool'
        ],
        92 => [
          'name' => 'ext\\email\\applyTemplate',
          'insertText' => 'ext\\email\\applyTemplate(EMAIL_ID, EMAIL_TEMPLATE_ID)'
        ],
        93 => [
          'name' => 'ext\\pdf\\generate',
          'insertText' => 'ext\\pdf\\generate(ENTITY_TYPE, ENTITY_ID, TEMPLATE_ID, FILENAME)',
          'returnType' => 'string'
        ],
        94 => [
          'name' => 'ext\\user\\sendAccessInfo',
          'insertText' => 'ext\\user\\sendAccessInfo(USER_ID)'
        ]
      ],
      'functionClassNameMap' => [
        'ext\\account\\findByEmailAddress' => 'Espo\\Modules\\Crm\\Classes\\FormulaFunctions\\ExtGroup\\AccountGroup\\FindByEmailAddressType'
      ]
    ],
    'image' => [
      'allowedFileTypeList' => [
        0 => 'image/jpeg',
        1 => 'image/png',
        2 => 'image/gif',
        3 => 'image/webp',
        4 => 'image/svg+xml'
      ],
      'resizableFileTypeList' => [
        0 => 'image/jpeg',
        1 => 'image/png',
        2 => 'image/gif',
        3 => 'image/webp'
      ],
      'fixOrientationFileTypeList' => [
        0 => 'image/jpeg'
      ],
      'previewFileTypeList' => [
        0 => 'image/jpeg',
        1 => 'image/png',
        2 => 'image/gif',
        3 => 'image/webp',
        4 => 'image/svg+xml'
      ],
      'sizes' => [
        'xxx-small' => [
          0 => 18,
          1 => 18
        ],
        'xx-small' => [
          0 => 32,
          1 => 32
        ],
        'x-small' => [
          0 => 64,
          1 => 64
        ],
        'small' => [
          0 => 128,
          1 => 128
        ],
        'medium' => [
          0 => 256,
          1 => 256
        ],
        'large' => [
          0 => 512,
          1 => 512
        ],
        'x-large' => [
          0 => 864,
          1 => 864
        ],
        'xx-large' => [
          0 => 1024,
          1 => 1024
        ],
        'small-logo' => [
          0 => 181,
          1 => 44
        ]
      ]
    ],
    'jsLibs' => [
      'Flotr' => [
        'path' => 'client/lib/flotr2.js',
        'devPath' => 'client/lib/original/flotr2.js',
        'exportsTo' => 'window',
        'exportsAs' => 'Flotr',
        'sourceMap' => true
      ],
      'Base64' => [
        'exportsTo' => 'window',
        'exportsAs' => 'Base64'
      ],
      'espo-funnel-chart' => [
        'path' => 'client/lib/espo-funnel-chart.js',
        'exportsTo' => 'window',
        'exportsAs' => 'EspoFunnel'
      ],
      'Summernote' => [
        'path' => 'client/lib/summernote.js',
        'devPath' => 'client/lib/original/summernote.js',
        'exportsTo' => '$.fn',
        'exportsAs' => 'summernote',
        'sourceMap' => true
      ],
      'Textcomplete' => [
        'exportsTo' => '$.fn',
        'exportsAs' => 'textcomplete'
      ],
      'Selectize' => [
        'path' => 'client/lib/selectize.js',
        'devPath' => 'client/lib/original/selectize.js',
        'exportsTo' => 'window',
        'exportsAs' => 'Selectize'
      ],
      'cronstrue' => [
        'path' => 'client/lib/cronstrue-i18n.js',
        'devPath' => 'client/lib/original/cronstrue-i18n.js',
        'exportsTo' => 'window',
        'exportsAs' => 'cronstrue',
        'sourceMap' => true
      ],
      'Cropper' => [
        'path' => 'client/lib/cropper.js',
        'exportsTo' => '$.fn',
        'exportsAs' => 'cropper',
        'sourceMap' => true
      ],
      'gridstack' => [
        'exportsTo' => 'window',
        'exportsAs' => 'GridStack'
      ],
      'Colorpicker' => [
        'path' => 'client/lib/bootstrap-colorpicker.js',
        'exportsTo' => '$.fn',
        'exportsAs' => 'colorpicker'
      ],
      'exif' => [
        'path' => 'client/lib/exif.js',
        'devPath' => 'client/lib/original/exif.js',
        'exportsTo' => 'window',
        'exportsAs' => 'EXIF',
        'sourceMap' => true
      ],
      'JsBarcode' => [
        'path' => 'client/lib/JsBarcode.all.js',
        'devPath' => 'client/lib/original/JsBarcode.all.js',
        'exportsTo' => 'window',
        'exportsAs' => 'JsBarcode',
        'sourceMap' => true
      ],
      'qrcode' => [
        'path' => 'client/lib/qrcode.js',
        'exportsTo' => 'window',
        'exportsAs' => 'QRCode',
        'exportVariable' => 'QRCode'
      ],
      'ace' => [
        'path' => 'client/lib/ace.js',
        'exportsTo' => 'window',
        'exportsAs' => 'ace'
      ],
      'ace-mode-javascript' => [
        'path' => 'client/lib/ace-mode-javascript.js',
        'exportsTo' => 'ace.require.define.modules',
        'exportsAs' => 'ace/mode/javascript'
      ],
      'ace-ext-language_tools' => [
        'path' => 'client/lib/ace-ext-language_tools.js',
        'exportsTo' => 'ace.require.define.modules',
        'exportsAs' => 'ace/ext/language_tools'
      ],
      'ace-theme-tomorrow_night' => [
        'path' => 'client/lib/ace-theme-tomorrow_night.js',
        'exportsTo' => 'ace.require.define.modules',
        'exportsAs' => 'ace/theme/tomorrow_night'
      ],
      'full-calendar' => [
        'path' => 'client/modules/crm/lib/fullcalendar.js',
        'devPath' => 'client/modules/crm/lib/original/fullcalendar.js',
        'exportsTo' => '$.fn',
        'exportsAs' => 'fullCalendar',
        'sourceMap' => true
      ],
      'vis' => [
        'path' => 'client/modules/crm/lib/vis.js',
        'devPath' => 'client/modules/crm/lib/original/vis.js',
        'exportsAs' => 'vis',
        'sourceMap' => true
      ]
    ],
    'language' => [
      'list' => [
        0 => 'en_US',
        1 => 'ar_AR',
        2 => 'bg_BG',
        3 => 'en_GB',
        4 => 'es_MX',
        5 => 'cs_CZ',
        6 => 'da_DK',
        7 => 'de_DE',
        8 => 'es_ES',
        9 => 'hr_HR',
        10 => 'hu_HU',
        11 => 'fa_IR',
        12 => 'fr_FR',
        13 => 'id_ID',
        14 => 'it_IT',
        15 => 'lt_LT',
        16 => 'lv_LV',
        17 => 'nb_NO',
        18 => 'nl_NL',
        19 => 'th_TH',
        20 => 'tr_TR',
        21 => 'sk_SK',
        22 => 'sl_SI',
        23 => 'sr_RS',
        24 => 'sv_SE',
        25 => 'ro_RO',
        26 => 'ru_RU',
        27 => 'pl_PL',
        28 => 'pt_BR',
        29 => 'uk_UA',
        30 => 'vi_VN',
        31 => 'zh_CN',
        32 => 'zh_TW'
      ],
      'aclDependencies' => [
        'Lead.options.source' => [
          'scope' => 'Opportunity',
          'field' => 'leadSource'
        ],
        'Account.options.industry' => [
          'scope' => 'Lead',
          'field' => 'industry'
        ],
        'Meeting' => [
          'scope' => 'Call'
        ]
      ]
    ],
    'linkManager' => [
      'createHookClassNameList' => [
        0 => 'Espo\\Tools\\EntityManager\\Link\\Hooks\\TargetListCreate',
        1 => 'Espo\\Tools\\EntityManager\\Link\\Hooks\\AssignedUsersCreate'
      ],
      'deleteHookClassNameList' => [
        0 => 'Espo\\Tools\\EntityManager\\Link\\Hooks\\TargetListDelete',
        1 => 'Espo\\Tools\\EntityManager\\Link\\Hooks\\ForeignFieldDelete'
      ]
    ],
    'massActions' => [
      'convertCurrency' => [
        'implementationClassName' => 'Espo\\Core\\MassAction\\Actions\\MassConvertCurrency'
      ],
      'follow' => [
        'implementationClassName' => 'Espo\\Core\\MassAction\\Actions\\MassFollow'
      ],
      'unfollow' => [
        'implementationClassName' => 'Espo\\Core\\MassAction\\Actions\\MassUnfollow'
      ],
      'recalculateFormula' => [
        'implementationClassName' => 'Espo\\Core\\MassAction\\Actions\\MassRecalculateFormula'
      ],
      'update' => [
        'implementationClassName' => 'Espo\\Core\\MassAction\\Actions\\MassUpdate'
      ],
      'delete' => [
        'implementationClassName' => 'Espo\\Core\\MassAction\\Actions\\MassDelete'
      ]
    ],
    'metadata' => [
      'frontendHiddenPathList' => [
        0 => [
          0 => 'app',
          1 => 'metadata'
        ],
        1 => [
          0 => 'app',
          1 => 'loaders'
        ],
        2 => [
          0 => 'app',
          1 => 'containerServices'
        ],
        3 => [
          0 => 'app',
          1 => 'portalContainerServices'
        ],
        4 => [
          0 => 'app',
          1 => 'consoleCommands'
        ],
        5 => [
          0 => 'app',
          1 => 'formula',
          2 => 'functionClassNameMap'
        ],
        6 => [
          0 => 'app',
          1 => 'fileStorage',
          2 => 'implementationClassNameMap'
        ],
        7 => [
          0 => 'app',
          1 => 'client'
        ],
        8 => [
          0 => 'app',
          1 => 'language',
          2 => 'aclDependencies'
        ],
        9 => [
          0 => 'app',
          1 => 'templateHelpers'
        ],
        10 => [
          0 => 'app',
          1 => 'appParams'
        ],
        11 => [
          0 => 'app',
          1 => 'cleanup'
        ],
        12 => [
          0 => 'app',
          1 => 'authentication'
        ],
        13 => [
          0 => 'app',
          1 => 'pdfEngines',
          2 => '__ANY__',
          3 => 'implementationClassNameMap'
        ],
        14 => [
          0 => 'app',
          1 => 'addressFormats',
          2 => '__ANY__',
          3 => 'formatterClassName'
        ],
        15 => [
          0 => 'app',
          1 => 'authentication2FAMethods',
          2 => '__ANY__',
          3 => 'loginClassName'
        ],
        16 => [
          0 => 'app',
          1 => 'authentication2FAMethods',
          2 => '__ANY__',
          3 => 'userSetupClassName'
        ],
        17 => [
          0 => 'app',
          1 => 'select'
        ],
        18 => [
          0 => 'app',
          1 => 'massActions',
          2 => '__ANY__',
          3 => 'implementationClassName'
        ],
        19 => [
          0 => 'app',
          1 => 'actions',
          2 => '__ANY__',
          3 => 'implementationClassName'
        ],
        20 => [
          0 => 'app',
          1 => 'fieldProcessing'
        ],
        21 => [
          0 => 'app',
          1 => 'scheduledJobs'
        ],
        22 => [
          0 => 'app',
          1 => 'webSocket',
          2 => 'messagers'
        ],
        23 => [
          0 => 'app',
          1 => 'config'
        ],
        24 => [
          0 => 'app',
          1 => 'rebuild'
        ],
        25 => [
          0 => 'app',
          1 => 'smsProviders',
          2 => '__ANY__',
          3 => 'senderClassName'
        ],
        26 => [
          0 => 'app',
          1 => 'orm'
        ],
        27 => [
          0 => 'app',
          1 => 'linkManager'
        ],
        28 => [
          0 => 'selectDefs'
        ],
        29 => [
          0 => 'recordDefs'
        ],
        30 => [
          0 => 'pdfDefs'
        ],
        31 => [
          0 => 'aclDefs'
        ],
        32 => [
          0 => 'notificationDefs'
        ],
        33 => [
          0 => 'authenticationMethods',
          1 => '__ANY__',
          2 => 'implementationClassName'
        ],
        34 => [
          0 => 'app',
          1 => 'calendar',
          2 => 'additionalAttributeList'
        ]
      ],
      'aclDependencies' => [
        'entityDefs.Lead.fields.source.options' => [
          'scope' => 'Opportunity',
          'field' => 'leadSource'
        ],
        'entityDefs.Account.fields.industry.options' => [
          'scope' => 'Lead',
          'field' => 'industry'
        ]
      ]
    ],
    'orm' => [
      'functionConverterClassNameMap_Mysql' => [
        'ABS' => 'Espo\\Core\\ORM\\QueryComposer\\Part\\FunctionConverters\\Abs'
      ],
      'queryComposerClassNameMap' => [
        'Mysql' => 'Espo\\ORM\\QueryComposer\\MysqlQueryComposer'
      ]
    ],
    'pdfEngines' => [
      'Tcpdf' => [
        'implementationClassNameMap' => [
          'entity' => 'Espo\\Tools\\Pdf\\Tcpdf\\TcpdfEntityPrinter',
          'collection' => 'Espo\\Tools\\Pdf\\Tcpdf\\TcpdfCollectionPrinter'
        ],
        'fontFaceList' => [
          0 => 'aealarabiya',
          1 => 'aefurat',
          2 => 'cid0cs',
          3 => 'cid0ct',
          4 => 'cid0jp',
          5 => 'cid0kr',
          6 => 'courier',
          7 => 'dejavusans',
          8 => 'dejavusanscondensed',
          9 => 'dejavusansextralight',
          10 => 'dejavusansmono',
          11 => 'dejavuserif',
          12 => 'dejavuserifcondensed',
          13 => 'freemono',
          14 => 'freesans',
          15 => 'freeserif',
          16 => 'helvetica',
          17 => 'hysmyeongjostdmedium',
          18 => 'kozgopromedium',
          19 => 'kozminproregular',
          20 => 'msungstdlight',
          21 => 'pdfacourier',
          22 => 'pdfahelvetica',
          23 => 'pdfasymbol',
          24 => 'pdfatimes',
          25 => 'stsongstdlight',
          26 => 'symbol',
          27 => 'times'
        ]
      ]
    ],
    'portalContainerServices' => [
      'layout' => [
        'className' => 'Espo\\Core\\Portal\\Utils\\Layout'
      ],
      'themeManager' => [
        'className' => 'Espo\\Core\\Portal\\Utils\\ThemeManager'
      ]
    ],
    'rebuild' => [
      'actionClassNameList' => [
        0 => 'Espo\\Core\\Rebuild\\Actions\\ScheduledJobs'
      ]
    ],
    'regExpPatterns' => [
      'noBadCharacters' => [
        'pattern' => '[^<>=]+'
      ],
      'noAsciiSpecialCharacters' => [
        'pattern' => '[^`~!@#$%^&*()_+={}\\[\\]|\\\\:;"\'<,>.?]+'
      ],
      'latinLetters' => [
        'pattern' => '[A-Za-z]+'
      ],
      'latinLettersDigits' => [
        'pattern' => '[A-Za-z0-9]+'
      ],
      'latinLettersDigitsWhitespace' => [
        'pattern' => '[A-Za-z0-9 ]+'
      ],
      'latinLettersWhitespace' => [
        'pattern' => '[A-Za-z ]+'
      ],
      'digits' => [
        'pattern' => '[0-9]+'
      ],
      'id' => [
        'pattern' => '[A-Za-z0-9_=\\-\\.]+',
        'isSystem' => true
      ],
      'phoneNumberLoose' => [
        'pattern' => '[0-9A-Za-z_@:#\\+\\(\\)\\-\\. ]+',
        'isSystem' => true
      ],
      'uriOptionalProtocol' => [
        'pattern' => '((a-zA-Z0-9)\\:\\/\\/)?[a-zA-Z0-9%\\.\\/\\?\\:@\\-_=#]+\\.([a-zA-Z0-9%\\&\\.\\/\\?\\:@\\-_=#])*',
        'isSystem' => true
      ]
    ],
    'scheduledJobs' => [
      'ProcessJobGroup' => [
        'name' => 'Process Job Group',
        'isSystem' => true,
        'scheduling' => '* * * * *',
        'jobClassName' => 'Espo\\Core\\Job\\Job\\Jobs\\ProcessJobGroup',
        'preparatorClassName' => 'Espo\\Core\\Job\\Preparator\\Preparators\\ProcessJobGroupPreparator'
      ],
      'ProcessJobQueueQ0' => [
        'name' => 'Process Job Queue q0',
        'isSystem' => true,
        'scheduling' => '* * * * *',
        'jobClassName' => 'Espo\\Core\\Job\\Job\\Jobs\\ProcessJobQueueQ0'
      ],
      'ProcessJobQueueQ1' => [
        'name' => 'Process Job Queue q1',
        'isSystem' => true,
        'scheduling' => '*/1 * * * *',
        'jobClassName' => 'Espo\\Core\\Job\\Job\\Jobs\\ProcessJobQueueQ1'
      ],
      'ProcessJobQueueE0' => [
        'name' => 'Process Job Queue e0',
        'isSystem' => true,
        'scheduling' => '* * * * *',
        'jobClassName' => 'Espo\\Core\\Job\\Job\\Jobs\\ProcessJobQueueE0'
      ],
      'Dummy' => [
        'isSystem' => true,
        'scheduling' => '1 */12 * * *',
        'jobClassName' => 'Espo\\Classes\\Jobs\\Dummy'
      ],
      'CheckNewVersion' => [
        'name' => 'Check for New Version',
        'isSystem' => true,
        'scheduling' => '15 5 * * *',
        'jobClassName' => 'Espo\\Classes\\Jobs\\CheckNewVersion'
      ],
      'CheckNewExtensionVersion' => [
        'name' => 'Check for New Versions of Installed Extensions',
        'isSystem' => true,
        'scheduling' => '25 5 * * *',
        'jobClassName' => 'Espo\\Classes\\Jobs\\CheckNewExtensionVersion'
      ],
      'Cleanup' => [
        'jobClassName' => 'Espo\\Classes\\Jobs\\Cleanup'
      ],
      'AuthTokenControl' => [
        'jobClassName' => 'Espo\\Classes\\Jobs\\AuthTokenControl'
      ],
      'SendEmailNotifications' => [
        'jobClassName' => 'Espo\\Classes\\Jobs\\SendEmailNotifications'
      ],
      'ProcessWebhookQueue' => [
        'jobClassName' => 'Espo\\Classes\\Jobs\\ProcessWebhookQueue'
      ],
      'CheckEmailAccounts' => [
        'preparatorClassName' => 'Espo\\Classes\\JobPreparators\\CheckEmailAccounts',
        'jobClassName' => 'Espo\\Classes\\Jobs\\CheckEmailAccounts'
      ],
      'CheckInboundEmails' => [
        'preparatorClassName' => 'Espo\\Classes\\JobPreparators\\CheckInboundEmails',
        'jobClassName' => 'Espo\\Classes\\Jobs\\CheckInboundEmails'
      ]
    ],
    'smsProviders' => [],
    'templateHelpers' => [
      'googleMapsImage' => 'Espo\\Classes\\TemplateHelpers\\GoogleMaps',
      'tableTag' => 'Espo\\Classes\\TemplateHelpers\\TableTag',
      'trTag' => 'Espo\\Classes\\TemplateHelpers\\TrTag',
      'tdTag' => 'Espo\\Classes\\TemplateHelpers\\TdTag'
    ],
    'templates' => [
      'accessInfo' => [
        'scope' => 'User'
      ],
      'accessInfoPortal' => [
        'scope' => 'User'
      ],
      'assignment' => [
        'scopeListConfigParam' => 'assignmentEmailNotificationsEntityList'
      ],
      'mention' => [
        'scope' => 'Note'
      ],
      'noteEmailReceived' => [
        'scope' => 'Note'
      ],
      'notePost' => [
        'scope' => 'Note'
      ],
      'notePostNoParent' => [
        'scope' => 'Note'
      ],
      'noteStatus' => [
        'scope' => 'Note'
      ],
      'passwordChangeLink' => [
        'scope' => 'User'
      ],
      'twoFactorCode' => [
        'scope' => 'User'
      ],
      'invitation' => [
        'scopeList' => [
          0 => 'Meeting',
          1 => 'Call'
        ],
        'module' => 'Crm'
      ],
      'reminder' => [
        'scopeList' => [
          0 => 'Meeting',
          1 => 'Call',
          2 => 'Task'
        ],
        'module' => 'Crm'
      ]
    ],
    'webSocket' => [
      'categories' => [
        'newNotification' => [],
        'recordUpdate' => [
          'paramList' => [
            0 => 'scope',
            1 => 'id'
          ],
          'accessCheckCommand' => 'AclCheck --userId=:userId --scope=:scope --id=:id --action=read'
        ],
        'streamUpdate' => [
          'paramList' => [
            0 => 'scope',
            1 => 'id'
          ],
          'accessCheckCommand' => 'AclCheck --userId=:userId --scope=:scope --id=:id --action=stream'
        ],
        'popupNotifications.event' => []
      ],
      'messagers' => [
        'ZeroMQ' => [
          'senderClassName' => 'Espo\\Core\\WebSocket\\ZeroMQSender',
          'subscriberClassName' => 'Espo\\Core\\WebSocket\\ZeroMQSubscriber'
        ]
      ]
    ],
    'calendar' => [
      'additionalAttributeList' => [
        0 => 'color'
      ],
      'canceledStatusList' => [
        0 => 'Not Held',
        1 => 'Canceled'
      ],
      'completedStatusList' => [
        0 => 'Held',
        1 => 'Completed'
      ]
    ],
    'popupNotifications' => [
      'event' => [
        'url' => 'Activities/action/popupNotifications',
        'grouped' => true,
        'serviceName' => 'Activities',
        'methodName' => 'getPopupNotifications',
        'interval' => 15,
        'useWebSocket' => true,
        'portalDisabled' => true,
        'view' => 'crm:views/meeting/popup-notification'
      ]
    ]
  ],
  'authenticationMethods' => [
    'ApiKey' => [
      'api' => true
    ],
    'Espo' => [
      'settings' => [
        'isAvailable' => true
      ]
    ],
    'Hmac' => [
      'api' => true
    ],
    'LDAP' => [
      'settings' => [
        'isAvailable' => true,
        'layout' => [
          'label' => 'LDAP',
          'rows' => [
            0 => [
              0 => [
                'name' => 'ldapHost'
              ],
              1 => [
                'name' => 'ldapPort'
              ]
            ],
            1 => [
              0 => [
                'name' => 'ldapAuth'
              ],
              1 => [
                'name' => 'ldapSecurity'
              ]
            ],
            2 => [
              0 => [
                'name' => 'ldapUsername',
                'fullWidth' => true
              ]
            ],
            3 => [
              0 => [
                'name' => 'ldapPassword'
              ],
              1 => [
                'name' => 'testConnection',
                'customLabel' => NULL,
                'view' => 'views/admin/authentication/fields/test-connection'
              ]
            ],
            4 => [
              0 => [
                'name' => 'ldapUserNameAttribute'
              ],
              1 => [
                'name' => 'ldapUserObjectClass'
              ]
            ],
            5 => [
              0 => [
                'name' => 'ldapAccountCanonicalForm'
              ],
              1 => [
                'name' => 'ldapBindRequiresDn'
              ]
            ],
            6 => [
              0 => [
                'name' => 'ldapBaseDn',
                'fullWidth' => true
              ]
            ],
            7 => [
              0 => [
                'name' => 'ldapUserLoginFilter',
                'fullWidth' => true
              ]
            ],
            8 => [
              0 => [
                'name' => 'ldapAccountDomainName'
              ],
              1 => [
                'name' => 'ldapAccountDomainNameShort'
              ]
            ],
            9 => [
              0 => [
                'name' => 'ldapTryUsernameSplit'
              ],
              1 => [
                'name' => 'ldapOptReferrals'
              ]
            ],
            10 => [
              0 => [
                'name' => 'ldapCreateEspoUser'
              ],
              1 => false
            ],
            11 => [
              0 => [
                'name' => 'ldapUserFirstNameAttribute'
              ],
              1 => [
                'name' => 'ldapUserLastNameAttribute'
              ]
            ],
            12 => [
              0 => [
                'name' => 'ldapUserTitleAttribute'
              ],
              1 => false
            ],
            13 => [
              0 => [
                'name' => 'ldapUserEmailAddressAttribute'
              ],
              1 => [
                'name' => 'ldapUserPhoneNumberAttribute'
              ]
            ],
            14 => [
              0 => [
                'name' => 'ldapUserTeams'
              ],
              1 => [
                'name' => 'ldapUserDefaultTeam'
              ]
            ],
            15 => [
              0 => [
                'name' => 'ldapPortalUserLdapAuth'
              ],
              1 => false
            ],
            16 => [
              0 => [
                'name' => 'ldapPortalUserPortals'
              ],
              1 => [
                'name' => 'ldapPortalUserRoles'
              ]
            ]
          ]
        ],
        'fieldList' => [
          0 => 'ldapHost',
          1 => 'ldapPort',
          2 => 'ldapAuth',
          3 => 'ldapSecurity',
          4 => 'ldapUsername',
          5 => 'ldapPassword',
          6 => 'ldapBindRequiresDn',
          7 => 'ldapUserLoginFilter',
          8 => 'ldapBaseDn',
          9 => 'ldapAccountCanonicalForm',
          10 => 'ldapAccountDomainName',
          11 => 'ldapAccountDomainNameShort',
          12 => 'ldapAccountDomainName',
          13 => 'ldapAccountDomainNameShort',
          14 => 'ldapTryUsernameSplit',
          15 => 'ldapOptReferrals',
          16 => 'ldapCreateEspoUser',
          17 => 'ldapPortalUserLdapAuth'
        ],
        'dynamicLogic' => [
          'fields' => [
            'ldapHost' => [
              'required' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'equals',
                    'attribute' => 'authenticationMethod',
                    'value' => 'LDAP'
                  ]
                ]
              ]
            ],
            'ldapUserNameAttribute' => [
              'required' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'equals',
                    'attribute' => 'authenticationMethod',
                    'value' => 'LDAP'
                  ]
                ]
              ]
            ],
            'ldapUserObjectClass' => [
              'required' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'equals',
                    'attribute' => 'authenticationMethod',
                    'value' => 'LDAP'
                  ]
                ]
              ]
            ],
            'ldapUsername' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapAuth'
                  ]
                ]
              ],
              'required' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapAuth'
                  ]
                ]
              ]
            ],
            'ldapPassword' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapAuth'
                  ]
                ]
              ]
            ],
            'testConnection' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapAuth'
                  ]
                ]
              ]
            ],
            'ldapAccountDomainName' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'in',
                    'attribute' => 'ldapAccountCanonicalForm',
                    'value' => [
                      0 => 'Backslash',
                      1 => 'Principal'
                    ]
                  ]
                ]
              ]
            ],
            'ldapAccountDomainNameShort' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'in',
                    'attribute' => 'ldapAccountCanonicalForm',
                    'value' => [
                      0 => 'Backslash',
                      1 => 'Principal'
                    ]
                  ]
                ]
              ]
            ],
            'ldapUserTitleAttribute' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ],
              'required' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ]
            ],
            'ldapUserFirstNameAttribute' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ],
              'required' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ]
            ],
            'ldapUserLastNameAttribute' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ],
              'required' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ]
            ],
            'ldapUserEmailAddressAttribute' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ],
              'required' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ]
            ],
            'ldapUserPhoneNumberAttribute' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ],
              'required' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ]
            ],
            'ldapUserTeams' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ]
            ],
            'ldapUserDefaultTeam' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ]
            ],
            'ldapPortalUserPortals' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapPortalUserLdapAuth'
                  ]
                ]
              ]
            ],
            'ldapPortalUserRoles' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapPortalUserLdapAuth'
                  ]
                ]
              ]
            ]
          ]
        ]
      ]
    ]
  ],
  'clientDefs' => [
    'ActionHistoryRecord' => [
      'controller' => 'controllers/record',
      'createDisabled' => true,
      'recordViews' => [
        'list' => 'views/action-history-record/record/list'
      ],
      'modalViews' => [
        'detail' => 'views/action-history-record/modals/detail'
      ]
    ],
    'AddressMap' => [
      'controller' => 'controllers/address-map'
    ],
    'ApiUser' => [
      'controller' => 'controllers/api-user',
      'views' => [
        'detail' => 'views/user/detail',
        'list' => 'views/api-user/list'
      ],
      'recordViews' => [
        'list' => 'views/user/record/list',
        'detail' => 'views/user/record/detail',
        'edit' => 'views/user/record/edit',
        'detailSmall' => 'views/user/record/detail-quick',
        'editSmall' => 'views/user/record/edit-quick'
      ],
      'defaultSidePanelFieldLists' => [
        'detail' => [
          0 => 'avatar',
          1 => 'createdAt',
          2 => 'lastAccess'
        ],
        'detailSmall' => [
          0 => 'avatar',
          1 => 'createdAt'
        ],
        'edit' => [
          0 => 'avatar'
        ],
        'editSmall' => [
          0 => 'avatar'
        ]
      ],
      'filterList' => [],
      'boolFilterList' => []
    ],
    'Attachment' => [
      'controller' => 'controllers/record',
      'createDisabled' => true,
      'recordViews' => [
        'list' => 'views/attachment/record/list',
        'detail' => 'views/attachment/record/detail'
      ],
      'modalViews' => [
        'detail' => 'views/attachment/modals/detail'
      ],
      'filterList' => [
        0 => 'orphan'
      ]
    ],
    'AuthLogRecord' => [
      'controller' => 'controllers/record',
      'recordViews' => [
        'list' => 'views/admin/auth-log-record/record/list',
        'detail' => 'views/admin/auth-log-record/record/detail',
        'detailSmall' => 'views/admin/auth-log-record/record/detail-small'
      ],
      'modalViews' => [
        'detail' => 'views/admin/auth-log-record/modals/detail'
      ],
      'filterList' => [
        0 => 'accepted',
        1 => 'denied'
      ],
      'createDisabled' => true,
      'relationshipPanels' => [
        'actionHistoryRecords' => [
          'createDisabled' => true,
          'selectDisabled' => true,
          'unlinkDisabled' => true,
          'rowActionsView' => 'views/record/row-actions/relationship-view-only'
        ]
      ]
    ],
    'AuthToken' => [
      'controller' => 'controllers/record',
      'recordViews' => [
        'list' => 'views/admin/auth-token/record/list',
        'detail' => 'views/admin/auth-token/record/detail',
        'detailSmall' => 'views/admin/auth-token/record/detail-small'
      ],
      'modalViews' => [
        'detail' => 'views/admin/auth-token/modals/detail'
      ],
      'filterList' => [
        0 => 'active',
        1 => 'inactive'
      ],
      'createDisabled' => true,
      'relationshipPanels' => [
        'actionHistoryRecords' => [
          'createDisabled' => true,
          'selectDisabled' => true,
          'unlinkDisabled' => true,
          'rowActionsView' => 'views/record/row-actions/relationship-view-only'
        ]
      ]
    ],
    'Dashboard' => [
      'controller' => 'controllers/dashboard',
      'iconClass' => 'fas fa-th-large'
    ],
    'DashboardTemplate' => [
      'controller' => 'controllers/record',
      'views' => [
        'detail' => 'views/dashboard-template/detail'
      ],
      'recordViews' => [
        'list' => 'views/dashboard-template/record/list'
      ],
      'menu' => [
        'detail' => [
          'buttons' => [
            0 => [
              'action' => 'deployToUsers',
              'label' => 'Deploy to Users'
            ],
            1 => [
              'action' => 'deployToTeam',
              'label' => 'Deploy to Team'
            ]
          ]
        ]
      ],
      'searchPanelDisabled' => true
    ],
    'DynamicLogic' => [
      'itemTypes' => [
        'and' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/group-base',
          'operator' => 'and'
        ],
        'or' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/group-base',
          'operator' => 'or'
        ],
        'not' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/group-not',
          'operator' => 'not'
        ],
        'equals' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-base',
          'operatorString' => '='
        ],
        'notEquals' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-base',
          'operatorString' => '&ne;'
        ],
        'greaterThan' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-base',
          'operatorString' => '&gt;'
        ],
        'lessThan' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-base',
          'operatorString' => '&lt;'
        ],
        'greaterThanOrEquals' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-base',
          'operatorString' => '&ge;'
        ],
        'lessThanOrEquals' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-base',
          'operatorString' => '&le;'
        ],
        'isEmpty' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-operator-only-base',
          'operatorString' => '= &empty;'
        ],
        'isNotEmpty' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-operator-only-base',
          'operatorString' => '&ne; &empty;'
        ],
        'isTrue' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-operator-only-base',
          'operatorString' => '= 1'
        ],
        'isFalse' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-operator-only-base',
          'operatorString' => '= 0'
        ],
        'in' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-multiple-values-base',
          'operatorString' => '&isin;'
        ],
        'notIn' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-multiple-values-base',
          'operatorString' => '&notin;'
        ],
        'isToday' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-is-today',
          'operatorString' => '='
        ],
        'inFuture' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-in-future',
          'operatorString' => '&isin;'
        ],
        'inPast' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-in-past',
          'operatorString' => '&isin;'
        ],
        'contains' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-value-link',
          'operatorString' => '&niv;'
        ],
        'notContains' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-value-link',
          'operatorString' => '&notni;'
        ],
        'has' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-value-enum',
          'operatorString' => '&niv;'
        ],
        'notHas' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-value-enum',
          'operatorString' => '&notni;'
        ],
        'startsWith' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-value-varchar'
        ],
        'endsWith' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-value-varchar'
        ],
        'matches' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-value-varchar'
        ]
      ],
      'fieldTypes' => [
        'bool' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'isTrue',
            1 => 'isFalse'
          ]
        ],
        'varchar' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'equals',
            1 => 'notEquals',
            2 => 'isEmpty',
            3 => 'isNotEmpty',
            4 => 'contains',
            5 => 'notContains',
            6 => 'startsWith',
            7 => 'endsWith',
            8 => 'matches'
          ],
          'conditionTypes' => [
            'contains' => [
              'valueType' => 'field',
              'itemView' => 'views/admin/dynamic-logic/conditions-string/item-base'
            ],
            'notContains' => [
              'valueType' => 'field',
              'itemView' => 'views/admin/dynamic-logic/conditions-string/item-base'
            ]
          ]
        ],
        'url' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'equals',
            1 => 'notEquals',
            2 => 'isEmpty',
            3 => 'isNotEmpty'
          ]
        ],
        'email' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty'
          ]
        ],
        'phone' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty'
          ]
        ],
        'text' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'contains',
            3 => 'notContains',
            4 => 'matches'
          ],
          'conditionTypes' => [
            'contains' => [
              'valueType' => 'varchar',
              'itemView' => 'views/admin/dynamic-logic/conditions-string/item-value-varchar'
            ],
            'notContains' => [
              'valueType' => 'varchar',
              'itemView' => 'views/admin/dynamic-logic/conditions-string/item-value-varchar'
            ]
          ]
        ],
        'int' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'equals',
            3 => 'notEquals',
            4 => 'greaterThan',
            5 => 'lessThan',
            6 => 'greaterThanOrEquals',
            7 => 'lessThanOrEquals'
          ]
        ],
        'float' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'equals',
            3 => 'notEquals',
            4 => 'greaterThan',
            5 => 'lessThan',
            6 => 'greaterThanOrEquals',
            7 => 'lessThanOrEquals'
          ]
        ],
        'currency' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'equals',
            3 => 'notEquals',
            4 => 'greaterThan',
            5 => 'lessThan',
            6 => 'greaterThanOrEquals',
            7 => 'lessThanOrEquals'
          ]
        ],
        'date' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/date',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'isToday',
            3 => 'inFuture',
            4 => 'inPast',
            5 => 'equals',
            6 => 'notEquals'
          ]
        ],
        'datetime' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/date',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'isToday',
            3 => 'inFuture',
            4 => 'inPast'
          ]
        ],
        'datetimeOptional' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/date',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'isToday',
            3 => 'inFuture',
            4 => 'inPast'
          ]
        ],
        'enum' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/enum',
          'typeList' => [
            0 => 'equals',
            1 => 'notEquals',
            2 => 'isEmpty',
            3 => 'isNotEmpty',
            4 => 'in',
            5 => 'notIn'
          ]
        ],
        'link' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/link',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'equals',
            3 => 'notEquals'
          ]
        ],
        'file' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/link',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty'
          ]
        ],
        'image' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/link',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty'
          ]
        ],
        'linkParent' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/link-parent',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'equals',
            3 => 'notEquals'
          ]
        ],
        'linkMultiple' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/link-multiple',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'contains',
            3 => 'notContains'
          ]
        ],
        'foreign' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'equals',
            1 => 'notEquals',
            2 => 'isEmpty',
            3 => 'isNotEmpty'
          ]
        ],
        'id' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/enum',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty'
          ]
        ],
        'multiEnum' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/multi-enum',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'has',
            3 => 'notHas'
          ]
        ],
        'array' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/multi-enum',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'has',
            3 => 'notHas'
          ]
        ],
        'checklist' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/multi-enum',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'has',
            3 => 'notHas'
          ]
        ]
      ],
      'conditionTypes' => [
        'isTrue' => [
          'valueType' => 'empty'
        ],
        'isFalse' => [
          'valueType' => 'empty'
        ],
        'isEmpty' => [
          'valueType' => 'empty'
        ],
        'isNotEmpty' => [
          'valueType' => 'empty'
        ],
        'equals' => [
          'valueType' => 'field'
        ],
        'notEquals' => [
          'valueType' => 'field'
        ],
        'greaterThan' => [
          'valueType' => 'field'
        ],
        'lessThan' => [
          'valueType' => 'field'
        ],
        'greaterThanOrEquals' => [
          'valueType' => 'field'
        ],
        'lessThanOrEquals' => [
          'valueType' => 'field'
        ],
        'in' => [
          'valueType' => 'field'
        ],
        'notIn' => [
          'valueType' => 'field'
        ],
        'contains' => [
          'valueType' => 'custom'
        ],
        'notContains' => [
          'valueType' => 'custom'
        ],
        'inPast' => [
          'valueType' => 'empty'
        ],
        'isFuture' => [
          'valueType' => 'empty'
        ],
        'isToday' => [
          'valueType' => 'empty'
        ],
        'has' => [
          'valueType' => 'field'
        ],
        'notHas' => [
          'valueType' => 'field'
        ],
        'startsWith' => [
          'valueType' => 'varchar'
        ],
        'endsWith' => [
          'valueType' => 'varchar'
        ],
        'matches' => [
          'valueType' => 'varchar'
        ]
      ]
    ],
    'Email' => [
      'controller' => 'controllers/email',
      'acl' => 'acl/email',
      'model' => 'models/email',
      'views' => [
        'list' => 'views/email/list',
        'detail' => 'views/email/detail'
      ],
      'recordViews' => [
        'list' => 'views/email/record/list',
        'detail' => 'views/email/record/detail',
        'edit' => 'views/email/record/edit',
        'editQuick' => 'views/email/record/edit-quick',
        'detailQuick' => 'views/email/record/detail-quick',
        'compose' => 'views/email/record/compose',
        'listRelated' => 'views/email/record/list-related'
      ],
      'modalViews' => [
        'detail' => 'views/email/modals/detail',
        'compose' => 'views/modals/compose-email'
      ],
      'quickCreateModalType' => 'compose',
      'defaultSidePanelView' => 'views/email/record/panels/default-side',
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'event',
            'label' => 'Event',
            'view' => 'views/email/record/panels/event',
            'isForm' => true,
            'hidden' => true
          ]
        ]
      ],
      'menu' => [
        'list' => [
          'buttons' => [
            0 => [
              'label' => 'Compose',
              'action' => 'composeEmail',
              'style' => 'danger',
              'acl' => 'create',
              'className' => 'btn-s-wide',
              'title' => 'Ctrl+Space'
            ]
          ],
          'dropdown' => [
            0 => [
              'label' => 'Archive Email',
              'link' => '#Email/create',
              'acl' => 'create'
            ],
            1 => false,
            2 => [
              'label' => 'Email Templates',
              'link' => '#EmailTemplate',
              'acl' => 'read',
              'aclScope' => 'EmailTemplate'
            ],
            3 => [
              'label' => 'Folders',
              'link' => '#EmailFolder',
              'configCheck' => '!emailFoldersDisabled',
              'accessDataList' => [
                0 => [
                  'inPortalDisabled' => true
                ]
              ]
            ],
            4 => [
              'label' => 'Filters',
              'link' => '#EmailFilter',
              'accessDataList' => [
                0 => [
                  'inPortalDisabled' => true
                ]
              ]
            ]
          ]
        ],
        'detail' => [
          'dropdown' => [
            0 => [
              'label' => 'Reply',
              'action' => 'reply',
              'acl' => 'read'
            ],
            1 => [
              'label' => 'Reply to All',
              'action' => 'replyToAll',
              'acl' => 'read'
            ],
            2 => [
              'label' => 'Forward',
              'action' => 'forward',
              'acl' => 'read'
            ]
          ]
        ]
      ],
      'dynamicLogic' => [
        'fields' => [
          'replied' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'repliedId',
                  'data' => [
                    'field' => 'replied'
                  ]
                ]
              ]
            ]
          ],
          'replies' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'repliesIds',
                  'data' => [
                    'field' => 'replies'
                  ]
                ]
              ]
            ]
          ]
        ],
        'panels' => [
          'event' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'icsEventDateStart'
                ]
              ]
            ]
          ]
        ]
      ],
      'filterList' => [],
      'defaultFilterData' => [],
      'boolFilterList' => [],
      'iconClass' => 'fas fa-envelope',
      'layoutBottomPanelsDetailDisabled' => true,
      'layoutDetailDisabled' => true,
      'layoutDetailSmallDisabled' => true,
      'layoutSidePanelsDetailSmallDisabled' => true,
      'layoutSidePanelsEditSmallDisabled' => true,
      'layoutMassUpdateDisabled' => true
    ],
    'EmailAccount' => [
      'controller' => 'controllers/email-account',
      'recordViews' => [
        'list' => 'views/email-account/record/list',
        'detail' => 'views/email-account/record/detail',
        'edit' => 'views/email-account/record/edit'
      ],
      'views' => [
        'list' => 'views/email-account/list'
      ],
      'inlineEditDisabled' => true,
      'searchPanelDisabled' => true,
      'formDependency' => [
        'storeSentEmails' => [
          'map' => [
            'true' => [
              0 => [
                'action' => 'show',
                'fields' => [
                  0 => 'sentFolder'
                ]
              ],
              1 => [
                'action' => 'setRequired',
                'fields' => [
                  0 => 'sentFolder'
                ]
              ]
            ]
          ],
          'default' => [
            0 => [
              'action' => 'hide',
              'fields' => [
                0 => 'sentFolder'
              ]
            ],
            1 => [
              'action' => 'setNotRequired',
              'fields' => [
                0 => 'sentFolder'
              ]
            ]
          ]
        ]
      ],
      'dynamicLogic' => [
        'fields' => [
          'smtpUsername' => [
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'and',
                  'value' => [
                    0 => [
                      'type' => 'isTrue',
                      'attribute' => 'useImap'
                    ],
                    1 => [
                      'type' => 'isTrue',
                      'attribute' => 'smtpAuth'
                    ]
                  ]
                ]
              ]
            ]
          ],
          'fetchSince' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'useImap'
                ]
              ]
            ],
            'readOnly' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'fetchData'
                ]
              ]
            ],
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'useImap'
                ]
              ]
            ]
          ]
        ]
      ],
      'relationshipPanels' => [
        'filters' => [
          'select' => false,
          'rowActionsView' => 'views/record/row-actions/relationship-edit-and-remove',
          'unlinkDisabled' => true
        ],
        'emails' => [
          'select' => false,
          'create' => false,
          'rowActionsView' => 'views/record/row-actions/remove-only',
          'unlinkDisabled' => true
        ]
      ]
    ],
    'EmailAddress' => [
      'controller' => 'controllers/record',
      'createDisabled' => true,
      'editDisabled' => true,
      'exportDisabled' => true,
      'mergeDisabled' => true,
      'filterList' => [
        0 => 'orphan'
      ]
    ],
    'EmailFilter' => [
      'controller' => 'controllers/record',
      'modalViews' => [
        'edit' => 'views/email-filter/modals/edit'
      ],
      'recordViews' => [
        'list' => 'views/email-filter/record/list',
        'detail' => 'views/email-filter/record/detail',
        'edit' => 'views/email-filter/record/edit',
        'editQuick' => 'views/email-filter/record/edit-small',
        'detailQuick' => 'views/email-filter/record/detail-small'
      ],
      'searchPanelDisabled' => false,
      'menu' => [
        'list' => [
          'buttons' => [
            0 => [
              'label' => 'Emails',
              'link' => '#Email',
              'style' => 'default',
              'aclScope' => 'Email'
            ]
          ]
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ]
    ],
    'EmailFolder' => [
      'controller' => 'controllers/record',
      'views' => [
        'list' => 'views/email-folder/list'
      ],
      'recordViews' => [
        'list' => 'views/email-folder/record/list'
      ],
      'menu' => [
        'list' => [
          'buttons' => [
            0 => [
              'label' => 'Emails',
              'link' => '#Email',
              'style' => 'default',
              'aclScope' => 'Email'
            ]
          ]
        ]
      ],
      'searchPanelDisabled' => true
    ],
    'EmailTemplate' => [
      'controller' => 'controllers/record',
      'views' => [
        'list' => 'views/email-template/list'
      ],
      'recordViews' => [
        'edit' => 'views/email-template/record/edit',
        'detail' => 'views/email-template/record/detail',
        'editQuick' => 'views/email-template/record/edit-quick'
      ],
      'modalViews' => [
        'select' => 'views/modals/select-records-with-categories'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'information',
            'label' => 'Info',
            'view' => 'views/email-template/record/panels/information'
          ]
        ],
        'edit' => [
          0 => [
            'name' => 'information',
            'label' => 'Info',
            'view' => 'views/email-template/record/panels/information'
          ]
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'filterList' => [
        0 => 'actual'
      ],
      'placeholderList' => [
        0 => 'today',
        1 => 'now',
        2 => 'currentYear',
        3 => 'optOutUrl',
        4 => 'optOutLink'
      ],
      'iconClass' => 'fas fa-envelope-square'
    ],
    'EmailTemplateCategory' => [
      'controller' => 'controllers/record-tree',
      'collection' => 'collections/tree',
      'menu' => [
        'listTree' => [
          'buttons' => [
            0 => [
              'label' => 'List View',
              'link' => '#EmailTemplateCategory/list',
              'acl' => 'read',
              'style' => 'default'
            ],
            1 => [
              'label' => 'Email Templates',
              'link' => '#EmailTemplate',
              'acl' => 'read',
              'aclScope' => 'EmailTemplate',
              'style' => 'default'
            ]
          ]
        ],
        'list' => [
          'buttons' => [
            0 => [
              'label' => 'Tree View',
              'link' => '#EmailTemplateCategory',
              'acl' => 'read',
              'style' => 'default'
            ],
            1 => [
              'label' => 'Email Templates',
              'link' => '#EmailTemplate',
              'acl' => 'read',
              'aclScope' => 'EmailTemplate',
              'style' => 'default'
            ]
          ]
        ]
      ],
      'relationshipPanels' => [
        'emailTemplates' => [
          'create' => false
        ],
        'children' => [
          'selectDisabled' => true,
          'unlinkDisabled' => true
        ]
      ]
    ],
    'ExternalAccount' => [
      'controller' => 'controllers/external-account'
    ],
    'Home' => [
      'iconClass' => 'fas fa-th-large'
    ],
    'Import' => [
      'controller' => 'controllers/import',
      'acl' => 'acl/import',
      'recordViews' => [
        'list' => 'views/import/record/list',
        'detail' => 'views/import/record/detail'
      ],
      'views' => [
        'list' => 'views/import/list',
        'detail' => 'views/import/detail'
      ],
      'bottomPanels' => [
        'detail' => [
          0 => [
            'name' => 'imported',
            'label' => 'Imported',
            'view' => 'views/import/record/panels/imported',
            'createDisabled' => true,
            'selectDisabled' => true,
            'unlinkDisabled' => true
          ],
          1 => [
            'name' => 'duplicates',
            'label' => 'Duplicates',
            'view' => 'views/import/record/panels/duplicates',
            'rowActionsView' => 'views/import/record/row-actions/duplicates',
            'createDisabled' => true,
            'selectDisabled' => true,
            'unlinkDisabled' => true
          ],
          2 => [
            'name' => 'updated',
            'label' => 'Updated',
            'view' => 'views/import/record/panels/updated',
            'createDisabled' => true,
            'selectDisabled' => true,
            'unlinkDisabled' => true
          ]
        ]
      ],
      'searchPanelDisabled' => true,
      'relationshipPanels' => [
        'errors' => [
          'unlinkDisabled' => true,
          'actionList' => [
            0 => [
              'name' => 'export',
              'action' => 'errorExport',
              'label' => 'Export',
              'data' => [
                'handler' => 'handlers/import'
              ]
            ]
          ]
        ]
      ],
      'iconClass' => 'fas fa-file-import',
      'dateFormatList' => [
        0 => 'YYYY-MM-DD',
        1 => 'DD-MM-YYYY',
        2 => 'MM-DD-YYYY',
        3 => 'MM/DD/YYYY',
        4 => 'DD/MM/YYYY',
        5 => 'DD.MM.YYYY',
        6 => 'MM.DD.YYYY',
        7 => 'YYYY.MM.DD',
        8 => 'DD. MM. YYYY'
      ],
      'timeFormatList' => [
        0 => 'HH:mm:ss',
        1 => 'HH:mm',
        2 => 'hh:mm a',
        3 => 'hh:mma',
        4 => 'hh:mm A',
        5 => 'hh:mmA',
        6 => 'hh:mm:ss a',
        7 => 'hh:mm:ssa',
        8 => 'hh:mm:ss A',
        9 => 'hh:mm:ssA'
      ]
    ],
    'ImportError' => [
      'controller' => 'controllers/record',
      'acl' => 'acl/foreign',
      'searchPanelDisabled' => true,
      'createDisabled' => true,
      'editDisabled' => true,
      'textFilterDisabled' => true
    ],
    'InboundEmail' => [
      'recordViews' => [
        'detail' => 'views/inbound-email/record/detail',
        'edit' => 'views/inbound-email/record/edit',
        'list' => 'views/inbound-email/record/list'
      ],
      'inlineEditDisabled' => true,
      'formDependency' => [
        'reply' => [
          'map' => [
            'true' => [
              0 => [
                'action' => 'show',
                'fields' => [
                  0 => 'replyEmailTemplate',
                  1 => 'replyFromAddress',
                  2 => 'replyFromName'
                ]
              ],
              1 => [
                'action' => 'setRequired',
                'fields' => [
                  0 => 'replyEmailTemplate'
                ]
              ]
            ]
          ],
          'default' => [
            0 => [
              'action' => 'hide',
              'fields' => [
                0 => 'replyEmailTemplate',
                1 => 'replyFromAddress',
                2 => 'replyFromName'
              ]
            ],
            1 => [
              'action' => 'setNotRequired',
              'fields' => [
                0 => 'replyEmailTemplate'
              ]
            ]
          ]
        ]
      ],
      'dynamicLogic' => [
        'fields' => [
          'smtpUsername' => [
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'and',
                  'value' => [
                    0 => [
                      'type' => 'isTrue',
                      'attribute' => 'useImap'
                    ],
                    1 => [
                      'type' => 'isTrue',
                      'attribute' => 'smtpAuth'
                    ]
                  ]
                ]
              ]
            ]
          ],
          'fetchSince' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'useImap'
                ]
              ]
            ],
            'readOnly' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'fetchData'
                ]
              ]
            ],
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'useImap'
                ]
              ]
            ]
          ]
        ]
      ],
      'searchPanelDisabled' => true,
      'relationshipPanels' => [
        'filters' => [
          'select' => false,
          'rowActionsView' => 'views/record/row-actions/relationship-edit-and-remove',
          'unlinkDisabled' => true
        ],
        'emails' => [
          'select' => false,
          'create' => false,
          'rowActionsView' => 'views/record/row-actions/remove-only',
          'unlinkDisabled' => true
        ]
      ],
      'defaultSidePanelFieldLists' => [
        'detail' => [],
        'detailSmall' => [],
        'edit' => [],
        'editSmall' => []
      ]
    ],
    'Job' => [
      'modalViews' => [
        'detail' => 'views/admin/job/modals/detail'
      ],
      'recordViews' => [
        'list' => 'views/admin/job/record/list',
        'detailQuick' => 'views/admin/job/record/detail-small'
      ]
    ],
    'LastViewed' => [
      'controller' => 'controllers/last-viewed',
      'views' => [
        'list' => 'views/last-viewed/list'
      ],
      'recordViews' => [
        'list' => 'views/last-viewed/record/list'
      ]
    ],
    'LayoutSet' => [
      'controller' => 'controllers/layout-set',
      'recordViews' => [
        'list' => 'views/layout-set/record/list'
      ],
      'searchPanelDisabled' => true,
      'duplicateDisabled' => true,
      'relationshipPanels' => [
        'teams' => [
          'createDisabled' => true,
          'viewDisabled' => true,
          'rowActionsView' => 'views/record/row-actions/relationship-unlink-only'
        ]
      ]
    ],
    'LeadCapture' => [
      'controller' => 'controllers/record',
      'searchPanelDisabled' => true,
      'recordViews' => [
        'detail' => 'views/lead-capture/record/detail',
        'list' => 'views/lead-capture/record/list'
      ],
      'dynamicLogic' => [
        'fields' => [
          'targetList' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'subscribeToTargetList'
                ]
              ]
            ],
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'subscribeToTargetList'
                ]
              ]
            ]
          ],
          'subscribeContactToTargetList' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'subscribeToTargetList'
                ]
              ]
            ]
          ],
          'optInConfirmationLifetime' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'optInConfirmation'
                ]
              ]
            ],
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'optInConfirmation'
                ]
              ]
            ]
          ],
          'optInConfirmationSuccessMessage' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'optInConfirmation'
                ]
              ]
            ]
          ],
          'createLeadBeforeOptInConfirmation' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'optInConfirmation'
                ]
              ]
            ]
          ],
          'smtpAccount' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'optInConfirmation'
                ]
              ]
            ]
          ],
          'skipOptInConfirmationIfSubscribed' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'and',
                  'value' => [
                    0 => [
                      'type' => 'isTrue',
                      'attribute' => 'optInConfirmation'
                    ],
                    1 => [
                      'type' => 'isNotEmpty',
                      'attribute' => 'targetListId',
                      'data' => [
                        'field' => 'targetList'
                      ]
                    ]
                  ]
                ]
              ]
            ]
          ],
          'optInConfirmationEmailTemplate' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'optInConfirmation'
                ]
              ]
            ],
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'optInConfirmation'
                ]
              ]
            ]
          ],
          'apiKey' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'id'
                ]
              ]
            ]
          ]
        ]
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'request',
            'label' => 'Request',
            'isForm' => true,
            'view' => 'views/lead-capture/record/panels/request'
          ]
        ]
      ],
      'relationshipPanels' => [
        'logRecords' => [
          'rowActionsView' => 'views/record/row-actions/view-and-remove',
          'layout' => 'listForLeadCapture',
          'select' => false,
          'create' => false
        ]
      ]
    ],
    'LeadCaptureLogRecord' => [
      'modalViews' => [
        'detail' => 'views/lead-capture-log-record/modals/detail'
      ]
    ],
    'Note' => [
      'controller' => 'controllers/note',
      'collection' => 'collections/note',
      'recordViews' => [
        'edit' => 'views/note/record/edit',
        'editQuick' => 'views/note/record/edit',
        'listRelated' => 'views/stream/record/list'
      ],
      'modalViews' => [
        'edit' => 'views/note/modals/edit'
      ],
      'itemViews' => [
        'Post' => 'views/stream/notes/post'
      ]
    ],
    'Notification' => [
      'controller' => 'controllers/notification',
      'acl' => 'acl/notification',
      'aclPortal' => 'acl-portal/notification',
      'collection' => 'collections/note',
      'itemViews' => [
        'System' => 'views/notification/items/system'
      ]
    ],
    'PasswordChangeRequest' => [
      'controller' => 'controllers/password-change-request'
    ],
    'PhoneNumber' => [
      'controller' => 'controllers/record',
      'createDisabled' => true,
      'editDisabled' => true,
      'exportDisabled' => true,
      'mergeDisabled' => true,
      'filterList' => [
        0 => 'orphan'
      ]
    ],
    'Portal' => [
      'controller' => 'controllers/record',
      'recordViews' => [
        'list' => 'views/portal/record/list'
      ],
      'relationshipPanels' => [
        'users' => [
          'create' => false,
          'rowActionsView' => 'views/record/row-actions/relationship-unlink-only',
          'layout' => 'listSmall',
          'selectPrimaryFilterName' => 'activePortal'
        ]
      ],
      'searchPanelDisabled' => true
    ],
    'PortalRole' => [
      'recordViews' => [
        'detail' => 'views/portal-role/record/detail',
        'edit' => 'views/portal-role/record/edit',
        'editQuick' => 'views/portal-role/record/edit',
        'list' => 'views/portal-role/record/list'
      ],
      'relationshipPanels' => [
        'users' => [
          'create' => false,
          'rowActionsView' => 'views/record/row-actions/relationship-unlink-only'
        ]
      ],
      'views' => [
        'list' => 'views/portal-role/list'
      ]
    ],
    'PortalUser' => [
      'controller' => 'controllers/portal-user',
      'views' => [
        'detail' => 'views/user/detail',
        'list' => 'views/portal-user/list'
      ],
      'recordViews' => [
        'list' => 'views/user/record/list',
        'detail' => 'views/user/record/detail',
        'edit' => 'views/user/record/edit',
        'detailSmall' => 'views/user/record/detail-quick',
        'editSmall' => 'views/user/record/edit-quick'
      ],
      'defaultSidePanelFieldLists' => [
        'detail' => [
          0 => 'avatar',
          1 => 'createdAt',
          2 => 'lastAccess'
        ],
        'detailSmall' => [
          0 => 'avatar',
          1 => 'createdAt'
        ],
        'edit' => [
          0 => 'avatar'
        ],
        'editSmall' => [
          0 => 'avatar'
        ]
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ]
        ],
        'detailSmall' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ]
        ]
      ],
      'filterList' => [
        0 => 'activePortal'
      ],
      'boolFilterList' => [],
      'selectDefaultFilters' => [
        'filter' => 'activePortal'
      ],
      'iconClass' => 'far fa-user-circle'
    ],
    'Preferences' => [
      'recordViews' => [
        'edit' => 'views/preferences/record/edit'
      ],
      'views' => [
        'edit' => 'views/preferences/edit'
      ],
      'acl' => 'acl/preferences',
      'aclPortal' => 'acl-portal/preferences',
      'dynamicLogic' => [
        'fields' => [
          'assignmentEmailNotificationsIgnoreEntityTypeList' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'receiveAssignmentEmailNotifications'
                ]
              ]
            ]
          ]
        ]
      ]
    ],
    'Role' => [
      'recordViews' => [
        'detail' => 'views/role/record/detail',
        'edit' => 'views/role/record/edit',
        'editQuick' => 'views/role/record/edit',
        'list' => 'views/role/record/list'
      ],
      'relationshipPanels' => [
        'users' => [
          'create' => false,
          'rowActionsView' => 'views/record/row-actions/relationship-unlink-only'
        ],
        'teams' => [
          'create' => false,
          'rowActionsView' => 'views/record/row-actions/relationship-unlink-only'
        ]
      ],
      'views' => [
        'list' => 'views/role/list'
      ]
    ],
    'ScheduledJob' => [
      'controller' => 'controllers/record',
      'relationshipPanels' => [
        'log' => [
          'readOnly' => true,
          'view' => 'views/scheduled-job/record/panels/log',
          'createDisabled' => true,
          'selectDisabled' => true,
          'viewDisabled' => true,
          'unlinkDisabled' => true
        ]
      ],
      'recordViews' => [
        'list' => 'views/scheduled-job/record/list',
        'detail' => 'views/scheduled-job/record/detail'
      ],
      'views' => [
        'list' => 'views/scheduled-job/list'
      ],
      'jobWithTargetList' => [
        0 => 'CheckEmailAccounts',
        1 => 'CheckInboundEmails'
      ],
      'dynamicLogic' => [
        'fields' => [
          'job' => [
            'readOnly' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'id'
                ]
              ]
            ]
          ]
        ]
      ]
    ],
    'ScheduledJobLogRecord' => [
      'controller' => 'controllers/record'
    ],
    'Stream' => [
      'controller' => 'controllers/stream',
      'iconClass' => 'fas fa-rss'
    ],
    'Team' => [
      'acl' => 'acl/team',
      'defaultSidePanel' => [
        'edit' => false,
        'editSmall' => false
      ],
      'defaultSidePanelFieldLists' => [
        'detail' => [
          0 => 'createdAt'
        ]
      ],
      'relationshipPanels' => [
        'users' => [
          'create' => false,
          'rowActionsView' => 'views/record/row-actions/relationship-unlink-only',
          'layout' => 'listForTeam',
          'selectPrimaryFilterName' => 'active'
        ]
      ],
      'recordViews' => [
        'detail' => 'views/team/record/detail',
        'edit' => 'views/team/record/edit',
        'list' => 'views/team/record/list'
      ],
      'modalViews' => [
        'detail' => 'views/team/modals/detail'
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-users'
    ],
    'Template' => [
      'controller' => 'controllers/record',
      'recordViews' => [
        'detail' => 'views/template/record/detail',
        'edit' => 'views/template/record/edit'
      ],
      'dynamicLogic' => [
        'fields' => [
          'entityType' => [
            'readOnly' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'id'
                ]
              ]
            ]
          ],
          'footer' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'printFooter'
                ]
              ]
            ]
          ],
          'footerPosition' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'printFooter'
                ]
              ]
            ]
          ],
          'header' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'printHeader'
                ]
              ]
            ]
          ],
          'headerPosition' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'printHeader'
                ]
              ]
            ]
          ],
          'body' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'entityType'
                ]
              ]
            ]
          ],
          'pageWidth' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'pageFormat',
                  'value' => 'Custom'
                ]
              ]
            ],
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'pageFormat',
                  'value' => 'Custom'
                ]
              ]
            ]
          ],
          'pageHeight' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'pageFormat',
                  'value' => 'Custom'
                ]
              ]
            ],
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'pageFormat',
                  'value' => 'Custom'
                ]
              ]
            ]
          ]
        ]
      ],
      'iconClass' => 'fas fa-file-pdf'
    ],
    'User' => [
      'controller' => 'controllers/user',
      'model' => 'models/user',
      'acl' => 'acl/user',
      'views' => [
        'detail' => 'views/user/detail',
        'list' => 'views/user/list'
      ],
      'recordViews' => [
        'detail' => 'views/user/record/detail',
        'detailSmall' => 'views/user/record/detail-quick',
        'edit' => 'views/user/record/edit',
        'editSmall' => 'views/user/record/edit-quick',
        'list' => 'views/user/record/list'
      ],
      'modalViews' => [
        'selectFollowers' => 'views/user/modals/select-followers',
        'detail' => 'views/user/modals/detail',
        'massUpdate' => 'views/user/modals/mass-update'
      ],
      'defaultSidePanel' => [
        'detail' => [
          'name' => 'default',
          'label' => false,
          'view' => 'views/user/record/panels/default-side',
          'isForm' => true
        ],
        'detailSmall' => [
          'name' => 'default',
          'label' => false,
          'view' => 'views/user/record/panels/default-side',
          'isForm' => true
        ],
        'edit' => [
          'name' => 'default',
          'label' => false,
          'view' => 'views/user/record/panels/default-side',
          'isForm' => true
        ],
        'editSmall' => [
          'name' => 'default',
          'label' => false,
          'view' => 'views/user/record/panels/default-side',
          'isForm' => true
        ]
      ],
      'defaultSidePanelFieldLists' => [
        'detail' => [
          0 => 'avatar',
          1 => 'createdAt',
          2 => 'lastAccess',
          3 => 'auth2FA'
        ],
        'detailSmall' => [
          0 => 'avatar',
          1 => 'lastAccess'
        ],
        'edit' => [
          0 => 'avatar'
        ],
        'editSmall' => [
          0 => 'avatar'
        ]
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/user/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ],
        'detailSmall' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/user/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ]
      ],
      'relationshipPanels' => [
        'targetLists' => [
          'create' => false,
          'rowActionsView' => 'crm:views/record/row-actions/relationship-target',
          'layout' => 'listForTarget',
          'view' => 'crm:views/record/panels/target-lists'
        ]
      ],
      'layoutDefaultSidePanelDisabled' => true,
      'filterList' => [
        0 => 'active'
      ],
      'boolFilterList' => [
        0 => 'onlyMyTeam'
      ],
      'selectDefaultFilters' => [
        'filter' => 'active'
      ],
      'selectRecords' => [
        'orderBy' => 'userNameOwnFirst'
      ],
      'iconClass' => 'fas fa-user-circle',
      'dynamicLogic' => [
        'options' => [
          'authMethod' => [
            0 => [
              'optionList' => [
                0 => 'ApiKey',
                1 => 'Hmac'
              ],
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'type',
                  'value' => 'api'
                ]
              ]
            ]
          ]
        ]
      ]
    ],
    'Webhook' => [
      'controller' => 'controllers/record',
      'recordViews' => [
        'list' => 'views/webhook/record/list'
      ],
      'dynamicLogic' => [
        'fields' => [
          'event' => [
            'readOnly' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'id'
                ]
              ]
            ]
          ],
          'secretKey' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'id'
                ]
              ]
            ]
          ]
        ]
      ]
    ],
    'Account' => [
      'controller' => 'controllers/record',
      'aclPortal' => 'crm:acl-portal/account',
      'views' => [
        'detail' => 'crm:views/account/detail'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ],
        'detailSmall' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ]
      ],
      'relationshipPanels' => [
        'contacts' => [
          'filterList' => [
            0 => 'all',
            1 => 'accountActive'
          ],
          'layout' => 'listForAccount',
          'orderBy' => 'name'
        ],
        'opportunities' => [
          'layout' => 'listForAccount'
        ],
        'campaignLogRecords' => [
          'rowActionsView' => 'views/record/row-actions/empty',
          'select' => false,
          'create' => false
        ],
        'targetLists' => [
          'rowActionsView' => 'crm:views/record/row-actions/relationship-target',
          'layout' => 'listForTarget',
          'view' => 'crm:views/record/panels/target-lists'
        ]
      ],
      'filterList' => [
        0 => [
          'name' => 'recentlyCreated'
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'additionalLayouts' => [
        'detailConvert' => [
          'type' => 'detail'
        ]
      ],
      'color' => '#ffffff',
      'iconClass' => 'fas fa-building',
      'kanbanViewMode' => false
    ],
    'Calendar' => [
      'colors' => [
        'Meeting' => '#558BBD',
        'Call' => '#CF605D',
        'Task' => '#76BA4E'
      ],
      'scopeList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Task'
      ],
      'allDayScopeList' => [
        0 => 'Task'
      ],
      'modeList' => [
        0 => 'month',
        1 => 'agendaWeek',
        2 => 'timeline',
        3 => 'agendaDay'
      ],
      'sharedViewModeList' => [
        0 => 'basicWeek',
        1 => 'month',
        2 => 'basicDay'
      ],
      'additionalColorList' => [
        0 => '#AB78AD',
        1 => '#CC9B45'
      ],
      'iconClass' => 'far fa-calendar-alt'
    ],
    'Call' => [
      'controller' => 'controllers/record',
      'acl' => 'crm:acl/call',
      'views' => [
        'detail' => 'crm:views/call/detail'
      ],
      'recordViews' => [
        'list' => 'crm:views/call/record/list',
        'detail' => 'crm:views/call/record/detail'
      ],
      'modalViews' => [
        'detail' => 'crm:views/meeting/modals/detail'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'crm:views/meeting/record/panels/attendees',
            'sticked' => true,
            'isForm' => true,
            'notRefreshable' => true
          ]
        ],
        'detailSmall' => [
          0 => [
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'crm:views/meeting/record/panels/attendees',
            'sticked' => true,
            'isForm' => true,
            'notRefreshable' => true
          ]
        ],
        'edit' => [
          0 => [
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'crm:views/meeting/record/panels/attendees',
            'sticked' => true,
            'isForm' => true,
            'notRefreshable' => true
          ]
        ],
        'editSmall' => [
          0 => [
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'crm:views/meeting/record/panels/attendees',
            'sticked' => true,
            'isForm' => true,
            'notRefreshable' => true
          ]
        ]
      ],
      'bottomPanels' => [
        'detail' => [
          0 => [
            'name' => 'scheduler',
            'label' => 'Scheduler',
            'view' => 'crm:views/meeting/record/panels/scheduler',
            'disabled' => true,
            'order' => 3
          ]
        ],
        'edit' => [
          0 => [
            'name' => 'scheduler',
            'label' => 'Scheduler',
            'view' => 'crm:views/meeting/record/panels/scheduler',
            'disabled' => true,
            'order' => 1
          ]
        ]
      ],
      'filterList' => [
        0 => [
          'name' => 'planned'
        ],
        1 => [
          'name' => 'held',
          'style' => 'success'
        ],
        2 => [
          'name' => 'todays'
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'activityDefs' => [
        'link' => 'calls',
        'activitiesCreate' => true,
        'historyCreate' => true
      ],
      'forcePatchAttributeDependencyMap' => [
        'dateEnd' => [
          0 => 'dateStart'
        ],
        'dateEndDate' => [
          0 => 'dateStartDate'
        ]
      ],
      'dynamicLogic' => [
        'fields' => [
          'reminders' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'and',
                  'value' => [
                    0 => [
                      'type' => 'notEquals',
                      'attribute' => 'status',
                      'value' => 'Held'
                    ],
                    1 => [
                      'type' => 'notEquals',
                      'attribute' => 'status',
                      'value' => 'Not Held'
                    ]
                  ]
                ]
              ]
            ]
          ]
        ]
      ],
      'iconClass' => 'fas fa-phone'
    ],
    'Campaign' => [
      'controller' => 'controllers/record',
      'menu' => [
        'list' => [
          'buttons' => [
            0 => [
              'label' => 'Target Lists',
              'link' => '#TargetList',
              'acl' => 'read',
              'style' => 'default',
              'aclScope' => 'TargetList'
            ]
          ],
          'dropdown' => [
            0 => [
              'label' => 'Mass Emails',
              'link' => '#MassEmail',
              'acl' => 'read',
              'aclScope' => 'MassEmail'
            ],
            1 => [
              'label' => 'Email Templates',
              'link' => '#EmailTemplate',
              'acl' => 'read',
              'aclScope' => 'EmailTemplate'
            ],
            2 => [
              'label' => 'Tracking URLs',
              'labelTranslation' => 'Campaign.links.trackingUrls',
              'link' => '#CampaignTrackingUrl',
              'acl' => 'read',
              'aclScope' => 'CampaignTrackingUrl'
            ]
          ]
        ]
      ],
      'recordViews' => [
        'detail' => 'crm:views/campaign/record/detail'
      ],
      'views' => [
        'detail' => 'crm:views/campaign/detail'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'statistics',
            'label' => 'Statistics',
            'view' => 'crm:views/campaign/record/panels/campaign-stats',
            'hidden' => false,
            'isForm' => true
          ]
        ]
      ],
      'relationshipPanels' => [
        'campaignLogRecords' => [
          'view' => 'crm:views/campaign/record/panels/campaign-log-records',
          'layout' => 'listForCampaign',
          'rowActionsView' => 'views/record/row-actions/remove-only',
          'select' => false,
          'create' => false
        ]
      ],
      'filterList' => [
        0 => 'active'
      ],
      'dynamicLogic' => [
        'fields' => [
          'targetLists' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'or',
                  'value' => [
                    0 => [
                      'type' => 'equals',
                      'attribute' => 'type',
                      'value' => 'Email'
                    ],
                    1 => [
                      'type' => 'equals',
                      'attribute' => 'type',
                      'value' => 'Newsletter'
                    ],
                    2 => [
                      'type' => 'equals',
                      'attribute' => 'type',
                      'value' => 'Mail'
                    ]
                  ]
                ]
              ]
            ]
          ],
          'excludingTargetLists' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'or',
                  'value' => [
                    0 => [
                      'type' => 'equals',
                      'attribute' => 'type',
                      'value' => 'Email'
                    ],
                    1 => [
                      'type' => 'equals',
                      'attribute' => 'type',
                      'value' => 'Newsletter'
                    ],
                    2 => [
                      'type' => 'equals',
                      'attribute' => 'type',
                      'value' => 'Mail'
                    ]
                  ]
                ]
              ]
            ]
          ],
          'contactsTemplate' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'type',
                  'value' => 'Mail'
                ]
              ]
            ]
          ],
          'leadsTemplate' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'type',
                  'value' => 'Mail'
                ]
              ]
            ]
          ],
          'accountsTemplate' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'type',
                  'value' => 'Mail'
                ]
              ]
            ]
          ],
          'usersTemplate' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'type',
                  'value' => 'Mail'
                ]
              ]
            ]
          ],
          'mailMergeOnlyWithAddress' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'type',
                  'value' => 'Mail'
                ]
              ]
            ]
          ]
        ],
        'panels' => [
          'mailMerge' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'type',
                  'value' => 'Mail'
                ]
              ]
            ]
          ]
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-chart-line'
    ],
    'CampaignLogRecord' => [
      'acl' => 'crm:acl/campaign-tracking-url'
    ],
    'CampaignTrackingUrl' => [
      'controller' => 'controllers/record',
      'acl' => 'crm:acl/campaign-tracking-url',
      'recordViews' => [
        'edit' => 'crm:views/campaign-tracking-url/record/edit',
        'editQuick' => 'crm:views/campaign-tracking-url/record/edit-small'
      ],
      'defaultSidePanel' => [
        'edit' => false,
        'editSmall' => false
      ],
      'dynamicLogic' => [
        'fields' => [
          'url' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'action',
                  'value' => 'Redirect'
                ]
              ]
            ],
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'action',
                  'value' => 'Redirect'
                ]
              ]
            ]
          ],
          'message' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'action',
                  'value' => 'Show Message'
                ]
              ]
            ],
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'action',
                  'value' => 'Show Message'
                ]
              ]
            ]
          ]
        ]
      ]
    ],
    'Case' => [
      'controller' => 'controllers/record',
      'recordViews' => [
        'detail' => 'crm:views/case/record/detail'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/case/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ],
        'detailSmall' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/case/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ]
      ],
      'filterList' => [
        0 => [
          'name' => 'open'
        ],
        1 => [
          'name' => 'closed',
          'style' => 'success'
        ]
      ],
      'relationshipPanels' => [
        'articles' => [
          'create' => false,
          'recordListView' => 'crm:views/knowledge-base-article/record/list-for-case',
          'rowActionsView' => 'crm:views/knowledge-base-article/record/row-actions/for-case'
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'selectDefaultFilters' => [
        'filter' => 'open'
      ],
      'allowInternalNotes' => true,
      'dynamicLogic' => [
        'fields' => [
          'number' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'id'
                ]
              ]
            ]
          ]
        ]
      ],
      'additionalLayouts' => [
        'detailPortal' => [
          'type' => 'detail'
        ],
        'detailSmallPortal' => [
          'type' => 'detail'
        ],
        'listPortal' => [
          'type' => 'list'
        ]
      ],
      'iconClass' => 'fas fa-briefcase'
    ],
    'Contact' => [
      'controller' => 'controllers/record',
      'aclPortal' => 'crm:acl-portal/contact',
      'views' => [
        'detail' => 'crm:views/contact/detail'
      ],
      'recordViews' => [
        'detail' => 'crm:views/contact/record/detail',
        'detailQuick' => 'crm:views/contact/record/detail-small'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ],
        'detailSmall' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ]
      ],
      'relationshipPanels' => [
        'campaignLogRecords' => [
          'rowActionsView' => 'views/record/row-actions/empty',
          'select' => false,
          'create' => false
        ],
        'opportunities' => [
          'layout' => 'listForContact'
        ],
        'targetLists' => [
          'create' => false,
          'rowActionsView' => 'crm:views/record/row-actions/relationship-target',
          'layout' => 'listForTarget',
          'view' => 'crm:views/record/panels/target-lists'
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'additionalLayouts' => [
        'detailConvert' => [
          'type' => 'detail'
        ],
        'listForAccount' => [
          'type' => 'listSmall'
        ]
      ],
      'filterList' => [
        0 => 'portalUsers'
      ],
      'dynamicLogic' => [
        'fields' => [
          'title' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'accountId'
                ]
              ]
            ]
          ],
          'portalUser' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'portalUserId',
                  'data' => [
                    'field' => 'portalUser'
                  ]
                ]
              ]
            ]
          ]
        ]
      ],
      'color' => '#ffffff',
      'iconClass' => 'fas fa-id-badge',
      'kanbanViewMode' => false
    ],
    'Document' => [
      'controller' => 'controllers/record',
      'views' => [
        'list' => 'crm:views/document/list'
      ],
      'modalViews' => [
        'select' => 'crm:views/document/modals/select-records'
      ],
      'viewSetupHandlers' => [
        'list' => [
          0 => 'crm:view-setup-handlers/document/record-list-drag-n-drop'
        ]
      ],
      'filterList' => [
        0 => 'active',
        1 => 'draft'
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'selectDefaultFilters' => [
        'filter' => 'active'
      ],
      'iconClass' => 'far fa-file-alt'
    ],
    'DocumentFolder' => [
      'controller' => 'controllers/record-tree',
      'collection' => 'collections/tree',
      'menu' => [
        'listTree' => [
          'buttons' => [
            0 => [
              'label' => 'List View',
              'link' => '#DocumentFolder/list',
              'acl' => 'read',
              'style' => 'default'
            ],
            1 => [
              'label' => 'Documents',
              'link' => '#Document',
              'acl' => 'read',
              'style' => 'default',
              'aclScope' => 'Document'
            ]
          ]
        ],
        'list' => [
          'buttons' => [
            0 => [
              'label' => 'Tree View',
              'link' => '#DocumentFolder',
              'acl' => 'read',
              'style' => 'default'
            ],
            1 => [
              'label' => 'Documents',
              'link' => '#Document',
              'acl' => 'read',
              'style' => 'default',
              'aclScope' => 'Document'
            ]
          ]
        ]
      ],
      'relationshipPanels' => [
        'children' => [
          'selectDisabled' => true,
          'unlinkDisabled' => true
        ]
      ]
    ],
    'EmailQueueItem' => [
      'controller' => 'controllers/record',
      'views' => [
        'list' => 'crm:views/email-queue-item/list'
      ],
      'recordViews' => [
        'list' => 'crm:views/email-queue-item/record/list'
      ]
    ],
    'KnowledgeBaseArticle' => [
      'controller' => 'controllers/record',
      'views' => [
        'list' => 'crm:views/knowledge-base-article/list'
      ],
      'recordViews' => [
        'editQuick' => 'crm:views/knowledge-base-article/record/edit-quick',
        'detailQuick' => 'crm:views/knowledge-base-article/record/detail-quick',
        'detail' => 'crm:views/knowledge-base-article/record/detail',
        'edit' => 'crm:views/knowledge-base-article/record/edit',
        'list' => 'crm:views/knowledge-base-article/record/list'
      ],
      'modalViews' => [
        'select' => 'crm:views/knowledge-base-article/modals/select-records'
      ],
      'filterList' => [
        0 => [
          'name' => 'published',
          'inPortalDisabled' => true
        ]
      ],
      'boolFilterList' => [
        0 => [
          'name' => 'onlyMy',
          'inPortalDisabled' => true
        ]
      ],
      'relationshipPanels' => [
        'cases' => [
          'create' => false,
          'rowActionsView' => 'views/record/row-actions/relationship-view-and-unlink'
        ]
      ],
      'additionalLayouts' => [
        'detailPortal' => [
          'type' => 'detail'
        ],
        'detailSmallPortal' => [
          'type' => 'detail'
        ],
        'listPortal' => [
          'type' => 'list'
        ]
      ],
      'iconClass' => 'fas fa-book'
    ],
    'KnowledgeBaseCategory' => [
      'controller' => 'controllers/record-tree',
      'collection' => 'collections/tree',
      'menu' => [
        'listTree' => [
          'buttons' => [
            0 => [
              'label' => 'List View',
              'link' => '#KnowledgeBaseCategory/list',
              'acl' => 'read',
              'style' => 'default'
            ],
            1 => [
              'label' => 'Articles',
              'link' => '#KnowledgeBaseArticle',
              'acl' => 'read',
              'style' => 'default',
              'aclScope' => 'KnowledgeBaseArticle'
            ]
          ]
        ],
        'list' => [
          'buttons' => [
            0 => [
              'label' => 'Tree View',
              'link' => '#KnowledgeBaseCategory',
              'acl' => 'read',
              'style' => 'default'
            ],
            1 => [
              'label' => 'Articles',
              'link' => '#KnowledgeBaseArticle',
              'acl' => 'read',
              'style' => 'default',
              'aclScope' => 'KnowledgeBaseArticle'
            ]
          ]
        ]
      ],
      'relationshipPanels' => [
        'children' => [
          'selectDisabled' => true,
          'unlinkDisabled' => true
        ]
      ]
    ],
    'Lead' => [
      'controller' => 'crm:controllers/lead',
      'views' => [
        'detail' => 'crm:views/lead/detail'
      ],
      'recordViews' => [
        'detail' => 'crm:views/lead/record/detail'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'convertedTo',
            'label' => 'Converted To',
            'view' => 'crm:views/lead/record/panels/converted-to',
            'notRefreshable' => true,
            'hidden' => true,
            'style' => 'success',
            'isForm' => true
          ],
          1 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          3 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ],
        'edit' => [
          0 => [
            'name' => 'convertedTo',
            'label' => 'Converted To',
            'view' => 'crm:views/lead/record/panels/converted-to',
            'notRefreshable' => true,
            'hidden' => true,
            'style' => 'success',
            'isForm' => true
          ]
        ],
        'detailSmall' => [
          0 => [
            'name' => 'convertedTo',
            'label' => 'Converted To',
            'view' => 'crm:views/lead/record/panels/converted-to',
            'notRefreshable' => true,
            'hidden' => true,
            'style' => 'success',
            'isForm' => true
          ],
          1 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          3 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ],
        'editSmall' => [
          0 => [
            'name' => 'convertedTo',
            'label' => 'Converted To',
            'view' => 'crm:views/lead/record/panels/converted-to',
            'notRefreshable' => true,
            'hidden' => true,
            'style' => 'success',
            'isForm' => true
          ]
        ]
      ],
      'relationshipPanels' => [
        'campaignLogRecords' => [
          'rowActionsView' => 'views/record/row-actions/empty',
          'select' => false,
          'create' => false
        ],
        'targetLists' => [
          'create' => false,
          'rowActionsView' => 'crm:views/record/row-actions/relationship-target',
          'layout' => 'listForTarget',
          'view' => 'crm:views/record/panels/target-lists'
        ]
      ],
      'filterList' => [
        0 => [
          'name' => 'actual'
        ],
        1 => [
          'name' => 'converted',
          'style' => 'success'
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'dynamicLogic' => [
        'fields' => [
          'name' => [
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isEmpty',
                  'attribute' => 'accountName'
                ],
                1 => [
                  'type' => 'isEmpty',
                  'attribute' => 'emailAddress'
                ],
                2 => [
                  'type' => 'isEmpty',
                  'attribute' => 'phoneNumber'
                ]
              ]
            ]
          ],
          'convertedAt' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'and',
                  'value' => [
                    0 => [
                      'type' => 'equals',
                      'attribute' => 'status',
                      'value' => 'Converted'
                    ],
                    1 => [
                      'type' => 'isNotEmpty',
                      'attribute' => 'convertedAt'
                    ]
                  ]
                ]
              ]
            ]
          ]
        ],
        'panels' => [
          'convertedTo' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'status',
                  'value' => 'Converted'
                ]
              ]
            ]
          ]
        ]
      ],
      'color' => '#d6a2c9',
      'iconClass' => 'fas fa-address-card'
    ],
    'MassEmail' => [
      'controller' => 'controllers/record',
      'acl' => 'crm:acl/mass-email',
      'recordViews' => [
        'detail' => 'crm:views/mass-email/record/detail',
        'edit' => 'crm:views/mass-email/record/edit',
        'editQuick' => 'crm:views/mass-email/record/edit-small'
      ],
      'views' => [
        'detail' => 'crm:views/mass-email/detail'
      ],
      'defaultSidePanel' => [
        'edit' => false,
        'editSmall' => false
      ],
      'menu' => [
        'list' => [
          'dropdown' => [
            0 => [
              'labelTranslation' => 'Global.scopeNamesPlural.EmailQueueItem',
              'link' => '#EmailQueueItem',
              'accessDataList' => [
                0 => [
                  'isAdminOnly' => true
                ]
              ]
            ]
          ]
        ]
      ],
      'dynamicLogic' => [
        'fields' => [
          'status' => [
            'readOnly' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'and',
                  'value' => [
                    0 => [
                      'type' => 'or',
                      'value' => [
                        0 => [
                          'type' => 'equals',
                          'attribute' => 'status',
                          'value' => 'Complete'
                        ],
                        1 => [
                          'type' => 'equals',
                          'attribute' => 'status',
                          'value' => 'In Process'
                        ],
                        2 => [
                          'type' => 'equals',
                          'attribute' => 'status',
                          'value' => 'Failed'
                        ]
                      ]
                    ],
                    1 => [
                      'type' => 'isNotEmpty',
                      'attribute' => 'id'
                    ]
                  ]
                ]
              ]
            ]
          ]
        ],
        'options' => [
          'status' => [
            0 => [
              'optionList' => [
                0 => 'Draft',
                1 => 'Pending'
              ],
              'conditionGroup' => [
                0 => [
                  'type' => 'in',
                  'attribute' => 'status',
                  'value' => [
                    0 => 'Draft',
                    1 => 'Pending'
                  ]
                ]
              ]
            ]
          ]
        ]
      ],
      'filterList' => [
        0 => [
          'name' => 'actual'
        ],
        1 => [
          'name' => 'complete',
          'style' => 'success'
        ]
      ]
    ],
    'Meeting' => [
      'controller' => 'controllers/record',
      'acl' => 'crm:acl/meeting',
      'views' => [
        'detail' => 'crm:views/meeting/detail'
      ],
      'recordViews' => [
        'list' => 'crm:views/meeting/record/list',
        'detail' => 'crm:views/meeting/record/detail'
      ],
      'modalViews' => [
        'detail' => 'crm:views/meeting/modals/detail'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'crm:views/meeting/record/panels/attendees',
            'options' => [
              'fieldList' => [
                0 => 'users',
                1 => 'contacts',
                2 => 'leads'
              ]
            ],
            'sticked' => true,
            'isForm' => true,
            'notRefreshable' => true
          ]
        ],
        'detailSmall' => [
          0 => [
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'crm:views/meeting/record/panels/attendees',
            'sticked' => true,
            'isForm' => true,
            'notRefreshable' => true
          ]
        ],
        'edit' => [
          0 => [
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'crm:views/meeting/record/panels/attendees',
            'sticked' => true,
            'isForm' => true,
            'notRefreshable' => true
          ]
        ],
        'editSmall' => [
          0 => [
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'crm:views/meeting/record/panels/attendees',
            'sticked' => true,
            'isForm' => true,
            'notRefreshable' => true
          ]
        ]
      ],
      'bottomPanels' => [
        'detail' => [
          0 => [
            'name' => 'scheduler',
            'label' => 'Scheduler',
            'view' => 'crm:views/meeting/record/panels/scheduler',
            'order' => 3
          ]
        ],
        'edit' => [
          0 => [
            'name' => 'scheduler',
            'label' => 'Scheduler',
            'view' => 'crm:views/meeting/record/panels/scheduler',
            'order' => 1
          ]
        ]
      ],
      'filterList' => [
        0 => [
          'name' => 'planned'
        ],
        1 => [
          'name' => 'held',
          'style' => 'success'
        ],
        2 => [
          'name' => 'todays'
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'activityDefs' => [
        'link' => 'meetings',
        'activitiesCreate' => true,
        'historyCreate' => true
      ],
      'forcePatchAttributeDependencyMap' => [
        'dateEnd' => [
          0 => 'dateStart'
        ],
        'dateEndDate' => [
          0 => 'dateStartDate'
        ]
      ],
      'dynamicLogic' => [
        'fields' => [
          'reminders' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'and',
                  'value' => [
                    0 => [
                      'type' => 'notEquals',
                      'attribute' => 'status',
                      'value' => 'Held'
                    ],
                    1 => [
                      'type' => 'notEquals',
                      'attribute' => 'status',
                      'value' => 'Not Held'
                    ]
                  ]
                ]
              ]
            ]
          ],
          'duration' => [
            'readOnly' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'isAllDay'
                ]
              ]
            ]
          ]
        ]
      ],
      'iconClass' => 'fas fa-calendar-check'
    ],
    'Opportunity' => [
      'controller' => 'controllers/record',
      'views' => [
        'detail' => 'crm:views/opportunity/detail'
      ],
      'recordViews' => [
        'edit' => 'crm:views/opportunity/record/edit',
        'editSmall' => 'crm:views/opportunity/record/edit-small',
        'list' => 'crm:views/opportunity/record/list',
        'kanban' => 'crm:views/opportunity/record/kanban'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/opportunity/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ],
        'detailSmall' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ]
      ],
      'filterList' => [
        0 => [
          'name' => 'open'
        ],
        1 => [
          'name' => 'won',
          'style' => 'success'
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'additionalLayouts' => [
        'detailConvert' => [
          'type' => 'detail'
        ],
        'listForAccount' => [
          'type' => 'listSmall'
        ],
        'listForContact' => [
          'type' => 'listSmall'
        ]
      ],
      'kanbanViewMode' => true,
      'dynamicLogic' => [
        'fields' => [
          'lastStage' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'stage',
                  'value' => 'Closed Lost'
                ]
              ]
            ]
          ]
        ]
      ],
      'color' => '#9fc77e',
      'iconClass' => 'fas fa-dollar-sign'
    ],
    'Target' => [
      'controller' => 'controllers/record',
      'views' => [
        'detail' => 'Crm:Target.Detail'
      ],
      'menu' => [
        'detail' => [
          'buttons' => [
            0 => [
              'label' => 'Convert to Lead',
              'action' => 'convertToLead',
              'acl' => 'edit'
            ]
          ]
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ]
    ],
    'TargetList' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'optedOut',
            'label' => 'Opted Out',
            'view' => 'crm:views/target-list/record/panels/opted-out'
          ]
        ]
      ],
      'recordViews' => [
        'detail' => 'crm:views/target-list/record/detail'
      ],
      'relationshipPanels' => [
        'contacts' => [
          'actionList' => [
            0 => [
              'label' => 'Unlink All',
              'action' => 'unlinkAllRelated',
              'acl' => 'edit',
              'data' => [
                'link' => 'contacts'
              ]
            ]
          ],
          'rowActionsView' => 'crm:views/target-list/record/row-actions/default',
          'view' => 'crm:views/target-list/record/panels/relationship',
          'massSelect' => true
        ],
        'leads' => [
          'actionList' => [
            0 => [
              'label' => 'Unlink All',
              'action' => 'unlinkAllRelated',
              'acl' => 'edit',
              'data' => [
                'link' => 'leads'
              ]
            ]
          ],
          'rowActionsView' => 'crm:views/target-list/record/row-actions/default',
          'view' => 'crm:views/target-list/record/panels/relationship',
          'massSelect' => true
        ],
        'accounts' => [
          'actionList' => [
            0 => [
              'label' => 'Unlink All',
              'action' => 'unlinkAllRelated',
              'acl' => 'edit',
              'data' => [
                'link' => 'accounts'
              ]
            ]
          ],
          'rowActionsView' => 'crm:views/target-list/record/row-actions/default',
          'view' => 'crm:views/target-list/record/panels/relationship',
          'massSelect' => true
        ],
        'users' => [
          'create' => false,
          'actionList' => [
            0 => [
              'label' => 'Unlink All',
              'action' => 'unlinkAllRelated',
              'acl' => 'edit',
              'data' => [
                'link' => 'users'
              ]
            ]
          ],
          'rowActionsView' => 'crm:views/target-list/record/row-actions/default',
          'view' => 'crm:views/target-list/record/panels/relationship',
          'massSelect' => true
        ]
      ],
      'dynamicLogic' => [
        'fields' => [
          'entryCount' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'id'
                ]
              ]
            ]
          ],
          'optedOutCount' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'id'
                ]
              ]
            ]
          ]
        ]
      ],
      'iconClass' => 'fas fa-crosshairs'
    ],
    'Task' => [
      'controller' => 'controllers/record',
      'recordViews' => [
        'list' => 'crm:views/task/record/list',
        'detail' => 'crm:views/task/record/detail'
      ],
      'views' => [
        'list' => 'crm:views/task/list',
        'detail' => 'crm:views/task/detail'
      ],
      'modalViews' => [
        'detail' => 'crm:views/task/modals/detail'
      ],
      'dynamicLogic' => [
        'fields' => [
          'dateCompleted' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'status',
                  'value' => 'Completed'
                ]
              ]
            ]
          ],
          'reminders' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'and',
                  'value' => [
                    0 => [
                      'type' => 'or',
                      'value' => [
                        0 => [
                          'type' => 'isNotEmpty',
                          'attribute' => 'dateEnd'
                        ],
                        1 => [
                          'type' => 'isNotEmpty',
                          'attribute' => 'dateEndDate'
                        ]
                      ]
                    ],
                    1 => [
                      'type' => 'notEquals',
                      'attribute' => 'status',
                      'value' => 'Completed'
                    ],
                    2 => [
                      'type' => 'notEquals',
                      'attribute' => 'status',
                      'value' => 'Canceled'
                    ]
                  ]
                ]
              ]
            ]
          ]
        ]
      ],
      'filterList' => [
        0 => 'actual',
        1 => [
          'name' => 'completed',
          'style' => 'success'
        ],
        2 => [
          'name' => 'todays'
        ],
        3 => [
          'name' => 'overdue',
          'style' => 'danger'
        ],
        4 => [
          'name' => 'deferred'
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-tasks',
      'kanbanViewMode' => true
    ],
    'Components' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-cubes'
    ],
    'EquipmentClasses' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'far fa-circle',
      'kanbanViewMode' => false,
      'color' => NULL
    ],
    'EquipmentDefinitions' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-cog',
      'relationshipPanels' => [
        'eqipmentDefinitionsPropertiesFromClasseses' => [
          'select' => false,
          'create' => false,
          'view' => 'custom:views/record/panels/entityDefinitionsPropertiesFromClasseses-panel'
        ]
      ],
      'kanbanViewMode' => false,
      'color' => NULL
    ],
    'EquipmentDefinitionsPropertiesFromClasses' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'kanbanViewMode' => false,
      'color' => NULL,
      'iconClass' => NULL
    ],
    'EquipmentProperties' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'far fa-plus-square'
    ],
    'KeyPerformanceIndicator' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-chart-pie',
      'kanbanViewMode' => false,
      'color' => NULL
    ],
    'MaterialClasses' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'far fa-circle',
      'kanbanViewMode' => false,
      'color' => NULL
    ],
    'MaterialDefinitions' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-cube',
      'relationshipPanels' => [
        'materialDefinitionsPropertiesFromClasseses' => [
          'select' => false,
          'create' => false,
          'view' => 'custom:views/record/panels/entityDefinitionsPropertiesFromClasseses-panel'
        ]
      ],
      'kanbanViewMode' => false,
      'color' => NULL
    ],
    'MaterialDefinitionsPropertiesFromClasses' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ]
    ],
    'MaterialLots' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-fill-drip',
      'kanbanViewMode' => false,
      'color' => NULL
    ],
    'MaterialProperties' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'far fa-plus-square',
      'kanbanViewMode' => false,
      'color' => NULL
    ],
    'OrderItem' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-cube'
    ],
    'Orders' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-shopping-cart',
      'kanbanViewMode' => true,
      'color' => NULL
    ],
    'PersonnelClasses' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'far fa-circle'
    ],
    'PersonnelDefinitions' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'relationshipPanels' => [
        'personnelDefinitionsPropertiesFromClasses' => [
          'select' => false,
          'create' => false,
          'view' => 'custom:views/record/panels/entityDefinitionsPropertiesFromClasseses-panel'
        ]
      ],
      'iconClass' => 'fas fa-user'
    ],
    'PersonnelDefinitionsPropertiesFromClasses' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ]
    ],
    'PersonnelProperties' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'far fa-plus-square',
      'kanbanViewMode' => false,
      'color' => NULL
    ],
    'ProcessSegment' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-cogs',
      'kanbanViewMode' => false,
      'color' => NULL
    ],
    'ProcessSegmentEquipmentItem' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ]
    ],
    'ProcessSegmentMaterialItem' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ]
    ],
    'ProcessSegmentPersonnelItem' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ]
    ],
    'ProductDefinitions' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-tag',
      'kanbanViewMode' => false,
      'color' => NULL
    ],
    'ProductSegmentEquipmentItem' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ]
    ],
    'ProductSegmentMaterialItem' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ]
    ],
    'ProductSegmentPersonnelItem' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ]
    ],
    'ProductSegments' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-network-wired',
      'kanbanViewMode' => false,
      'color' => NULL,
      'dynamicLogic' => [
        'fields' => [
          'productDefinitions' => [
            'visible' => NULL,
            'invalid' => NULL
          ],
          'materialClasses' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'classOnly'
                ]
              ]
            ]
          ],
          'materialDefinitions' => [
            'invalid' => NULL,
            'visible' => NULL,
            'readOnly' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'classOnly'
                ]
              ]
            ]
          ],
          'equipmentClasses' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'classOnlyEquipment'
                ]
              ]
            ]
          ],
          'equipmentDefinitions' => [
            'readOnly' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'classOnlyEquipment'
                ]
              ]
            ]
          ]
        ]
      ]
    ],
    'ProductionPlanning' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-grip-horizontal',
      'kanbanViewMode' => false,
      'color' => NULL
    ],
    'ProductionPlanningItem' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ]
    ],
    'TestovaciEntita' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ]
    ],
    'Warehouse' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-warehouse'
    ],
    'WarehouseItem' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-cubes'
    ]
  ],
  'dashlets' => [
    'Emails' => [
      'view' => 'views/dashlets/emails',
      'aclScope' => 'Email',
      'entityType' => 'Email',
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true,
            'trim' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15,
              6 => 20,
              7 => 30
            ]
          ]
        ],
        'defaults' => [
          'orderBy' => 'dateSent',
          'order' => 'desc',
          'displayRecords' => 5,
          'expandedLayout' => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'subject',
                  'link' => true
                ]
              ],
              1 => [
                0 => [
                  'name' => 'dateSent',
                  'view' => 'views/fields/datetime-short'
                ],
                1 => [
                  'name' => 'personStringData',
                  'view' => 'views/email/fields/person-string-data-for-expanded'
                ]
              ]
            ]
          ],
          'searchData' => [
            'bool' => [
              'onlyMy' => true
            ],
            'advanced' => [
              0 => [
                'attribute' => 'folderId',
                'type' => 'inFolder',
                'value' => 'inbox'
              ]
            ]
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ]
            ]
          ]
        ]
      ],
      'accessDataList' => [
        0 => [
          'inPortalDisabled' => true
        ]
      ]
    ],
    'Iframe' => [
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'trim' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'url' => [
            'type' => 'url',
            'required' => true
          ]
        ],
        'defaults' => [
          'autorefreshInterval' => 0
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'url'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ]
            ]
          ]
        ]
      ]
    ],
    'Records' => [
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true,
            'trim' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15,
              6 => 20,
              7 => 30,
              8 => 50
            ]
          ],
          'entityType' => [
            'type' => 'enum',
            'view' => 'views/dashlets/fields/records/entity-type',
            'translation' => 'Global.scopeNames'
          ],
          'primaryFilter' => [
            'type' => 'enum',
            'view' => 'views/dashlets/fields/records/primary-filter'
          ],
          'boolFilterList' => [
            'type' => 'multiEnum',
            'view' => 'views/dashlets/fields/records/bool-filter-list'
          ],
          'sortBy' => [
            'type' => 'enum',
            'view' => 'views/dashlets/fields/records/sort-by'
          ],
          'sortDirection' => [
            'type' => 'enum',
            'view' => 'views/dashlets/fields/records/sort-direction',
            'options' => [
              0 => 'asc',
              1 => 'desc'
            ],
            'translation' => 'EntityManager.options.sortDirection'
          ],
          'expandedLayout' => [
            'type' => 'base',
            'view' => 'views/dashlets/fields/records/expanded-layout'
          ]
        ],
        'defaults' => [
          'displayRecords' => 10,
          'autorefreshInterval' => 0.5,
          'expandedLayout' => [
            'rows' => []
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'entityType'
                ],
                1 => false
              ],
              2 => [
                0 => [
                  'name' => 'primaryFilter'
                ],
                1 => [
                  'name' => 'sortBy'
                ]
              ],
              3 => [
                0 => [
                  'name' => 'boolFilterList'
                ],
                1 => [
                  'name' => 'sortDirection'
                ]
              ],
              4 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              5 => [
                0 => [
                  'name' => 'expandedLayout'
                ],
                1 => false
              ]
            ]
          ]
        ]
      ]
    ],
    'Stream' => [
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true,
            'trim' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15,
              6 => 20
            ]
          ],
          'skipOwn' => [
            'type' => 'bool',
            'tooltip' => true
          ]
        ],
        'defaults' => [
          'displayRecords' => 10,
          'autorefreshInterval' => 0.5,
          'skipOwn' => false
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'skipOwn'
                ],
                1 => false
              ]
            ]
          ]
        ]
      ]
    ],
    'Activities' => [
      'view' => 'crm:views/dashlets/activities',
      'options' => [
        'view' => 'crm:views/dashlets/options/activities',
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'enabledScopeList' => [
            'type' => 'multiEnum',
            'translation' => 'Global.scopeNamesPlural',
            'required' => true
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15,
              6 => 20,
              7 => 30,
              8 => 50
            ]
          ],
          'futureDays' => [
            'type' => 'int',
            'min' => 0,
            'required' => true
          ]
        ],
        'defaults' => [
          'displayRecords' => 10,
          'autorefreshInterval' => 0.5,
          'futureDays' => 3,
          'enabledScopeList' => [
            0 => 'Meeting',
            1 => 'Call',
            2 => 'Task'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'enabledScopeList'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'futureDays'
                ],
                1 => false
              ]
            ]
          ]
        ]
      ]
    ],
    'Calendar' => [
      'view' => 'crm:views/dashlets/calendar',
      'aclScope' => 'Calendar',
      'options' => [
        'view' => 'crm:views/dashlets/options/calendar',
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'enabledScopeList' => [
            'type' => 'multiEnum',
            'translation' => 'Global.scopeNamesPlural',
            'required' => true
          ],
          'mode' => [
            'type' => 'enum',
            'options' => [
              0 => 'basicWeek',
              1 => 'agendaWeek',
              2 => 'timeline',
              3 => 'month',
              4 => 'basicDay',
              5 => 'agendaDay'
            ]
          ],
          'users' => [
            'type' => 'linkMultiple',
            'entity' => 'User',
            'view' => 'views/fields/assigned-users',
            'sortable' => true
          ],
          'teams' => [
            'type' => 'linkMultiple',
            'entity' => 'Team',
            'view' => 'crm:views/calendar/fields/teams'
          ]
        ],
        'defaults' => [
          'autorefreshInterval' => 0.5,
          'mode' => 'basicWeek',
          'enabledScopeList' => [
            0 => 'Meeting',
            1 => 'Call',
            2 => 'Task'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'mode'
                ],
                1 => [
                  'name' => 'enabledScopeList'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'users'
                ],
                1 => false
              ],
              3 => [
                0 => [
                  'name' => 'teams'
                ],
                1 => false
              ]
            ]
          ]
        ]
      ],
      'accessDataList' => [
        0 => [
          'inPortalDisabled' => true
        ]
      ]
    ],
    'Calls' => [
      'view' => 'crm:views/dashlets/calls',
      'aclScope' => 'Call',
      'entityType' => 'Call',
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15,
              6 => 20,
              7 => 30
            ]
          ],
          'expandedLayout' => [
            'type' => 'base',
            'view' => 'views/dashlets/fields/records/expanded-layout'
          ]
        ],
        'defaults' => [
          'orderBy' => 'dateStart',
          'order' => 'asc',
          'displayRecords' => 5,
          'populateAssignedUser' => true,
          'expandedLayout' => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'name',
                  'link' => true
                ]
              ],
              1 => [
                0 => [
                  'name' => 'dateStart'
                ]
              ]
            ]
          ],
          'searchData' => [
            'bool' => [
              'onlyMy' => true
            ],
            'primary' => 'planned',
            'advanced' => [
              1 => [
                'type' => 'or',
                'value' => [
                  1 => [
                    'type' => 'today',
                    'field' => 'dateStart',
                    'dateTime' => true
                  ],
                  2 => [
                    'type' => 'future',
                    'field' => 'dateEnd',
                    'dateTime' => true
                  ],
                  3 => [
                    'type' => 'lastXDays',
                    'field' => 'dateStart',
                    'value' => 5,
                    'dateTime' => true
                  ]
                ]
              ]
            ]
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'expandedLayout'
                ],
                1 => false
              ]
            ]
          ]
        ]
      ],
      'accessDataList' => [
        0 => [
          'inPortalDisabled' => true
        ]
      ]
    ],
    'Cases' => [
      'view' => 'views/dashlets/abstract/record-list',
      'aclScope' => 'Case',
      'entityType' => 'Case',
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15
            ]
          ],
          'expandedLayout' => [
            'type' => 'base',
            'view' => 'views/dashlets/fields/records/expanded-layout'
          ]
        ],
        'defaults' => [
          'orderBy' => 'number',
          'order' => 'desc',
          'displayRecords' => 5,
          'populateAssignedUser' => true,
          'expandedLayout' => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'number'
                ],
                1 => [
                  'name' => 'name',
                  'link' => true
                ],
                2 => [
                  'name' => 'type'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'status'
                ],
                1 => [
                  'name' => 'priority'
                ]
              ]
            ]
          ],
          'searchData' => [
            'bool' => [
              'onlyMy' => true
            ],
            'primary' => 'open'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'expandedLayout'
                ],
                1 => false
              ]
            ]
          ]
        ]
      ]
    ],
    'Leads' => [
      'view' => 'views/dashlets/abstract/record-list',
      'aclScope' => 'Lead',
      'entityType' => 'Lead',
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15,
              6 => 20,
              7 => 30
            ]
          ],
          'expandedLayout' => [
            'type' => 'base',
            'view' => 'views/dashlets/fields/records/expanded-layout'
          ]
        ],
        'defaults' => [
          'orderBy' => 'createdAt',
          'order' => 'desc',
          'displayRecords' => 5,
          'populateAssignedUser' => true,
          'expandedLayout' => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'name',
                  'link' => true
                ],
                1 => [
                  'name' => 'addressCity'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'status'
                ],
                1 => [
                  'name' => 'source'
                ]
              ]
            ]
          ],
          'searchData' => [
            'bool' => [
              'onlyMy' => true
            ],
            'primary' => 'actual'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'expandedLayout'
                ],
                1 => false
              ]
            ]
          ]
        ]
      ]
    ],
    'Meetings' => [
      'view' => 'crm:views/dashlets/meetings',
      'aclScope' => 'Meeting',
      'entityType' => 'Meeting',
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15,
              6 => 20,
              7 => 30
            ]
          ],
          'expandedLayout' => [
            'type' => 'base',
            'view' => 'views/dashlets/fields/records/expanded-layout'
          ]
        ],
        'defaults' => [
          'orderBy' => 'dateStart',
          'order' => 'asc',
          'displayRecords' => 5,
          'populateAssignedUser' => true,
          'expandedLayout' => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'name',
                  'link' => true
                ]
              ],
              1 => [
                0 => [
                  'name' => 'dateStart'
                ]
              ]
            ]
          ],
          'searchData' => [
            'bool' => [
              'onlyMy' => true
            ],
            'primary' => 'planned',
            'advanced' => [
              1 => [
                'type' => 'or',
                'value' => [
                  1 => [
                    'type' => 'today',
                    'field' => 'dateStart',
                    'dateTime' => true
                  ],
                  2 => [
                    'type' => 'future',
                    'field' => 'dateEnd',
                    'dateTime' => true
                  ]
                ]
              ]
            ]
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'expandedLayout'
                ],
                1 => false
              ]
            ]
          ]
        ]
      ],
      'accessDataList' => [
        0 => [
          'inPortalDisabled' => true
        ]
      ]
    ],
    'Opportunities' => [
      'view' => 'views/dashlets/abstract/record-list',
      'aclScope' => 'Opportunity',
      'entityType' => 'Opportunity',
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15,
              6 => 20,
              7 => 30
            ]
          ],
          'expandedLayout' => [
            'type' => 'base',
            'view' => 'views/dashlets/fields/records/expanded-layout'
          ]
        ],
        'defaults' => [
          'orderBy' => 'closeDate',
          'order' => 'asc',
          'displayRecords' => 5,
          'populateAssignedUser' => true,
          'expandedLayout' => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'name',
                  'link' => true
                ]
              ],
              1 => [
                0 => [
                  'name' => 'stage'
                ],
                1 => [
                  'name' => 'amount'
                ]
              ]
            ]
          ],
          'searchData' => [
            'bool' => [
              'onlyMy' => true
            ],
            'primary' => 'open'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'expandedLayout'
                ],
                1 => false
              ]
            ]
          ]
        ]
      ]
    ],
    'OpportunitiesByLeadSource' => [
      'view' => 'crm:views/dashlets/opportunities-by-lead-source',
      'aclScope' => 'Opportunity',
      'options' => [
        'view' => 'crm:views/dashlets/options/chart',
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'dateFrom' => [
            'type' => 'date',
            'required' => true
          ],
          'dateTo' => [
            'type' => 'date',
            'required' => true
          ],
          'dateFilter' => [
            'type' => 'enum',
            'options' => [
              0 => 'currentYear',
              1 => 'currentQuarter',
              2 => 'currentMonth',
              3 => 'currentFiscalYear',
              4 => 'currentFiscalQuarter',
              5 => 'ever',
              6 => 'between'
            ],
            'default' => 'currentYear',
            'translation' => 'Global.options.dateSearchRanges'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'dateFilter'
                ],
                1 => false
              ],
              2 => [
                0 => [
                  'name' => 'dateFrom'
                ],
                1 => [
                  'name' => 'dateTo'
                ]
              ]
            ]
          ]
        ],
        'defaults' => [
          'dateFilter' => 'currentYear'
        ]
      ]
    ],
    'OpportunitiesByStage' => [
      'view' => 'crm:views/dashlets/opportunities-by-stage',
      'aclScope' => 'Opportunity',
      'options' => [
        'view' => 'crm:views/dashlets/options/chart',
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'dateFrom' => [
            'type' => 'date',
            'required' => true
          ],
          'dateTo' => [
            'type' => 'date',
            'required' => true
          ],
          'dateFilter' => [
            'type' => 'enum',
            'options' => [
              0 => 'currentYear',
              1 => 'currentQuarter',
              2 => 'currentMonth',
              3 => 'currentFiscalYear',
              4 => 'currentFiscalQuarter',
              5 => 'ever',
              6 => 'between'
            ],
            'default' => 'currentYear',
            'translation' => 'Global.options.dateSearchRanges'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'dateFilter'
                ],
                1 => false
              ],
              2 => [
                0 => [
                  'name' => 'dateFrom'
                ],
                1 => [
                  'name' => 'dateTo'
                ]
              ]
            ]
          ]
        ],
        'defaults' => [
          'dateFilter' => 'currentYear'
        ]
      ]
    ],
    'SalesByMonth' => [
      'view' => 'crm:views/dashlets/sales-by-month',
      'aclScope' => 'Opportunity',
      'options' => [
        'view' => 'crm:views/dashlets/options/chart',
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'dateFrom' => [
            'type' => 'date',
            'required' => true
          ],
          'dateTo' => [
            'type' => 'date',
            'required' => true
          ],
          'dateFilter' => [
            'type' => 'enum',
            'options' => [
              0 => 'currentYear',
              1 => 'currentQuarter',
              2 => 'currentFiscalYear',
              3 => 'currentFiscalQuarter',
              4 => 'between'
            ],
            'default' => 'currentYear',
            'translation' => 'Global.options.dateSearchRanges'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'dateFilter'
                ],
                1 => false
              ],
              2 => [
                0 => [
                  'name' => 'dateFrom'
                ],
                1 => [
                  'name' => 'dateTo'
                ]
              ]
            ]
          ]
        ],
        'defaults' => [
          'dateFilter' => 'currentYear'
        ]
      ]
    ],
    'SalesPipeline' => [
      'view' => 'crm:views/dashlets/sales-pipeline',
      'aclScope' => 'Opportunity',
      'options' => [
        'view' => 'crm:views/dashlets/options/sales-pipeline',
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'dateFrom' => [
            'type' => 'date',
            'required' => true
          ],
          'dateTo' => [
            'type' => 'date',
            'required' => true
          ],
          'dateFilter' => [
            'type' => 'enum',
            'options' => [
              0 => 'currentYear',
              1 => 'currentQuarter',
              2 => 'currentMonth',
              3 => 'currentFiscalYear',
              4 => 'currentFiscalQuarter',
              5 => 'ever',
              6 => 'between'
            ],
            'default' => 'currentYear',
            'translation' => 'Global.options.dateSearchRanges'
          ],
          'useLastStage' => [
            'type' => 'bool'
          ],
          'team' => [
            'type' => 'link',
            'entity' => 'Team',
            'view' => 'crm:views/dashlets/options/sales-pipeline/fields/team'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title',
                  'span' => 2
                ]
              ],
              1 => [
                0 => [
                  'name' => 'dateFilter'
                ],
                1 => [
                  'name' => 'useLastStage'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'dateFrom'
                ],
                1 => [
                  'name' => 'dateTo'
                ]
              ],
              3 => [
                0 => [
                  'name' => 'team'
                ],
                1 => false
              ]
            ]
          ]
        ],
        'defaults' => [
          'dateFilter' => 'currentYear',
          'teamId' => NULL,
          'teamName' => NULL
        ]
      ]
    ],
    'Tasks' => [
      'view' => 'crm:views/dashlets/tasks',
      'aclScope' => 'Task',
      'entityType' => 'Task',
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15,
              6 => 20,
              7 => 30
            ]
          ],
          'expandedLayout' => [
            'type' => 'base',
            'view' => 'views/dashlets/fields/records/expanded-layout'
          ]
        ],
        'defaults' => [
          'orderBy' => 'dateEnd',
          'order' => 'asc',
          'displayRecords' => 5,
          'expandedLayout' => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'name',
                  'link' => true
                ]
              ],
              1 => [
                0 => [
                  'name' => 'status'
                ],
                1 => [
                  'name' => 'dateEnd'
                ]
              ]
            ]
          ],
          'searchData' => [
            'bool' => [
              'onlyMy' => true
            ],
            'primary' => 'actualStartingNotInFuture'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'expandedLayout',
                  'fullWidth' => true
                ]
              ]
            ]
          ]
        ]
      ],
      'accessDataList' => [
        0 => [
          'inPortalDisabled' => true
        ]
      ]
    ]
  ],
  'entityAcl' => [
    'Attachment' => [
      'fields' => [
        'storage' => [
          'readOnly' => true
        ],
        'sourceId' => [
          'readOnly' => true
        ]
      ]
    ],
    'AuthLogRecord' => [
      'fields' => [
        'username' => [
          'readOnly' => true
        ],
        'portal' => [
          'readOnly' => true
        ],
        'user' => [
          'readOnly' => true
        ],
        'ipAddress' => [
          'readOnly' => true
        ],
        'authToken' => [
          'readOnly' => true
        ],
        'isDenied' => [
          'readOnly' => true
        ],
        'denialReason' => [
          'readOnly' => true
        ],
        'microtime' => [
          'readOnly' => true
        ],
        'requestUrl' => [
          'readOnly' => true
        ],
        'requestMethod' => [
          'readOnly' => true
        ]
      ]
    ],
    'AuthToken' => [
      'fields' => [
        'hash' => [
          'internal' => true,
          'readOnly' => true
        ],
        'token' => [
          'internal' => true,
          'readOnly' => true
        ],
        'secret' => [
          'internal' => true,
          'readOnly' => true
        ],
        'portal' => [
          'readOnly' => true
        ],
        'user' => [
          'readOnly' => true
        ],
        'ipAddress' => [
          'readOnly' => true
        ],
        'lastAccess' => [
          'readOnly' => true
        ],
        'createdAt' => [
          'readOnly' => true
        ],
        'modifiedAt' => [
          'readOnly' => true
        ]
      ]
    ],
    'Email' => [
      'fields' => [
        'users' => [
          'readOnly' => true
        ],
        'messageId' => [
          'readOnly' => true
        ],
        'tasks' => [
          'readOnly' => true
        ]
      ],
      'links' => [
        'users' => [
          'onlyAdmin' => true
        ],
        'tasks' => [
          'readOnly' => true
        ]
      ]
    ],
    'EmailAccount' => [
      'fields' => [
        'password' => [
          'internal' => true
        ],
        'smtpPassword' => [
          'internal' => true
        ],
        'imapHandler' => [
          'internal' => true
        ],
        'smtpHandler' => [
          'internal' => true
        ],
        'fetchData' => [
          'readOnly' => true
        ]
      ]
    ],
    'InboundEmail' => [
      'fields' => [
        'password' => [
          'internal' => true
        ],
        'smtpPassword' => [
          'internal' => true
        ],
        'imapHandler' => [
          'internal' => true
        ],
        'smtpHandler' => [
          'internal' => true
        ],
        'fetchData' => [
          'readOnly' => true
        ]
      ]
    ],
    'Integration' => [
      'languageAclDisabled' => true
    ],
    'User' => [
      'fields' => [
        'userName' => [
          'nonAdminReadOnly' => true
        ],
        'apiKey' => [
          'onlyAdmin' => true,
          'readOnly' => true,
          'nonAdminReadOnly' => true
        ],
        'password' => [
          'internal' => true,
          'nonAdminReadOnly' => true
        ],
        'passwordConfirm' => [
          'internal' => true,
          'nonAdminReadOnly' => true
        ],
        'authLogRecordId' => [
          'internal' => true
        ],
        'authMethod' => [
          'onlyAdmin' => true
        ],
        'secretKey' => [
          'readOnly' => true,
          'onlyAdmin' => true
        ],
        'isActive' => [
          'nonAdminReadOnly' => true
        ],
        'emailAddress' => [
          'nonAdminReadOnly' => true
        ],
        'teams' => [
          'nonAdminReadOnly' => true
        ],
        'roles' => [
          'nonAdminReadOnly' => true
        ],
        'portals' => [
          'nonAdminReadOnly' => true
        ],
        'portalRoles' => [
          'nonAdminReadOnly' => true
        ],
        'contact' => [
          'nonAdminReadOnly' => true
        ],
        'accounts' => [
          'nonAdminReadOnly' => true
        ],
        'type' => [
          'nonAdminReadOnly' => true
        ],
        'auth2FA' => [
          'onlyAdmin' => true
        ],
        'userData' => [
          'internal' => true
        ]
      ],
      'links' => [
        'teams' => [
          'nonAdminReadOnly' => true
        ],
        'roles' => [
          'onlyAdmin' => true
        ],
        'portalRoles' => [
          'onlyAdmin' => true
        ],
        'accounts' => [
          'onlyAdmin' => true
        ],
        'defaultTeam' => [
          'onlyAdmin' => true
        ],
        'dashboardTemplate' => [
          'onlyAdmin' => true
        ],
        'preferences' => [
          'onlyAdmin' => true
        ],
        'userData' => [
          'internal' => true
        ]
      ]
    ],
    'Case' => [
      'fields' => [
        'inboundEmail' => [
          'readOnly' => true
        ]
      ],
      'links' => [
        'inboundEmail' => [
          'readOnly' => true
        ]
      ]
    ],
    'Task' => [
      'fields' => [
        'email' => [
          'readOnly' => true
        ]
      ]
    ]
  ],
  'entityDefs' => [
    'ActionHistoryRecord' => [
      'fields' => [
        'number' => [
          'type' => 'autoincrement',
          'index' => true
        ],
        'targetType' => [
          'type' => 'varchar',
          'view' => 'views/action-history-record/fields/target-type',
          'translation' => 'Global.scopeNames'
        ],
        'target' => [
          'type' => 'linkParent',
          'view' => 'views/action-history-record/fields/target'
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'action' => [
          'type' => 'enum',
          'options' => [
            0 => 'read',
            1 => 'update',
            2 => 'create',
            3 => 'delete'
          ]
        ],
        'createdAt' => [
          'type' => 'datetime',
          'hasSeconds' => true
        ],
        'user' => [
          'type' => 'link'
        ],
        'userType' => [
          'type' => 'foreign',
          'link' => 'user',
          'field' => 'type',
          'view' => 'views/fields/foreign-enum',
          'notStorable' => true
        ],
        'ipAddress' => [
          'type' => 'varchar',
          'maxLength' => '39'
        ],
        'authToken' => [
          'type' => 'link'
        ],
        'authLogRecord' => [
          'type' => 'link'
        ]
      ],
      'links' => [
        'user' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'target' => [
          'type' => 'belongsToParent'
        ],
        'authToken' => [
          'type' => 'belongsTo',
          'entity' => 'AuthToken',
          'foreignName' => 'id',
          'foreign' => 'actionHistoryRecords'
        ],
        'authLogRecord' => [
          'type' => 'belongsTo',
          'entity' => 'AuthLogRecord',
          'foreignName' => 'id',
          'foreign' => 'actionHistoryRecords'
        ]
      ],
      'collection' => [
        'sortBy' => 'number',
        'asc' => false,
        'textFilterFields' => [
          0 => 'ipAddress',
          1 => 'userName'
        ],
        'orderBy' => 'number',
        'order' => 'desc'
      ]
    ],
    'ArrayValue' => [
      'fields' => [
        'value' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 100
        ],
        'entity' => [
          'type' => 'linkParent'
        ],
        'attribute' => [
          'type' => 'varchar',
          'maxLength' => 100
        ]
      ],
      'indexes' => [
        'entityTypeValue' => [
          'columns' => [
            0 => 'entityType',
            1 => 'value'
          ]
        ],
        'entityValue' => [
          'columns' => [
            0 => 'entityType',
            1 => 'entityId',
            2 => 'value'
          ]
        ]
      ]
    ],
    'Attachment' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'view' => 'views/attachment/fields/name',
          'maxLength' => 255
        ],
        'type' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'size' => [
          'type' => 'int',
          'min' => 0
        ],
        'parent' => [
          'type' => 'linkParent',
          'view' => 'views/attachment/fields/parent'
        ],
        'related' => [
          'type' => 'linkParent',
          'noLoad' => true,
          'view' => 'views/attachment/fields/parent',
          'validatorClassName' => 'Espo\\Classes\\FieldValidators\\Attachment\\Related'
        ],
        'sourceId' => [
          'type' => 'varchar',
          'maxLength' => 36,
          'readOnly' => true,
          'disabled' => true,
          'index' => true
        ],
        'field' => [
          'type' => 'varchar',
          'disabled' => true
        ],
        'isBeingUploaded' => [
          'type' => 'bool',
          'default' => false
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'contents' => [
          'type' => 'text',
          'notStorable' => true
        ],
        'role' => [
          'type' => 'enum',
          'maxLength' => 36,
          'options' => [
            0 => 'Attachment',
            1 => 'Inline Attachment',
            2 => 'Import File',
            3 => 'Export File',
            4 => 'Mail Merge',
            5 => 'Mass Pdf'
          ]
        ],
        'storage' => [
          'type' => 'varchar',
          'maxLength' => 24,
          'default' => NULL
        ],
        'storageFilePath' => [
          'type' => 'varchar',
          'maxLength' => 260,
          'default' => NULL
        ],
        'global' => [
          'type' => 'bool',
          'default' => false
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'parent' => [
          'type' => 'belongsToParent',
          'foreign' => 'attachments'
        ],
        'related' => [
          'type' => 'belongsToParent'
        ]
      ],
      'collection' => [
        'sortBy' => 'createdAt',
        'asc' => false,
        'orderBy' => 'createdAt',
        'order' => 'desc'
      ],
      'indexes' => [
        'parent' => [
          'columns' => [
            0 => 'parentType',
            1 => 'parentId'
          ]
        ]
      ],
      'sourceList' => [
        0 => 'Document'
      ]
    ],
    'AuthLogRecord' => [
      'fields' => [
        'username' => [
          'type' => 'varchar',
          'readOnly' => true,
          'maxLength' => 100
        ],
        'portal' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'user' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'authToken' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'ipAddress' => [
          'type' => 'varchar',
          'maxLength' => '45',
          'readOnly' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'hasSeconds' => true
        ],
        'isDenied' => [
          'type' => 'bool',
          'readOnly' => true
        ],
        'denialReason' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'CREDENTIALS',
            2 => 'INACTIVE_USER',
            3 => 'IS_PORTAL_USER',
            4 => 'IS_NOT_PORTAL_USER',
            5 => 'USER_IS_NOT_IN_PORTAL'
          ],
          'readOnly' => true
        ],
        'requestTime' => [
          'type' => 'float',
          'readOnly' => true
        ],
        'requestUrl' => [
          'type' => 'varchar',
          'readOnly' => true
        ],
        'requestMethod' => [
          'type' => 'varchar',
          'readOnly' => true,
          'maxLength' => '15'
        ],
        'authTokenIsActive' => [
          'type' => 'foreign',
          'link' => 'authToken',
          'field' => 'isActive',
          'readOnly' => true,
          'view' => 'views/fields/foreign-bool'
        ],
        'authenticationMethod' => [
          'type' => 'enum',
          'options' => [
            0 => 'Espo',
            1 => 'LDAP',
            2 => 'ApiKey',
            3 => 'Hmac'
          ]
        ]
      ],
      'links' => [
        'user' => [
          'type' => 'belongsTo',
          'entity' => 'User',
          'noJoin' => true
        ],
        'portal' => [
          'type' => 'belongsTo',
          'entity' => 'Portal'
        ],
        'authToken' => [
          'type' => 'belongsTo',
          'entity' => 'AuthToken',
          'foreign' => 'authLog',
          'foreignName' => 'id'
        ],
        'actionHistoryRecords' => [
          'type' => 'hasMany',
          'entity' => 'ActionHistoryRecord',
          'foreign' => 'authLogRecord'
        ]
      ],
      'collection' => [
        'sortBy' => 'requestTime',
        'asc' => false,
        'textFilterFields' => [
          0 => 'ipAddress',
          1 => 'username'
        ],
        'orderBy' => 'requestTime',
        'order' => 'desc'
      ],
      'indexes' => [
        'ipAddress' => [
          'columns' => [
            0 => 'ipAddress'
          ]
        ],
        'ipAddressRequestTime' => [
          'columns' => [
            0 => 'ipAddress',
            1 => 'requestTime'
          ]
        ],
        'requestTime' => [
          'columns' => [
            0 => 'requestTime'
          ]
        ]
      ]
    ],
    'AuthToken' => [
      'fields' => [
        'token' => [
          'type' => 'varchar',
          'maxLength' => '36',
          'index' => true,
          'readOnly' => true
        ],
        'hash' => [
          'type' => 'varchar',
          'maxLength' => 150,
          'index' => true,
          'readOnly' => true
        ],
        'secret' => [
          'type' => 'varchar',
          'maxLength' => '36',
          'readOnly' => true
        ],
        'userId' => [
          'type' => 'varchar',
          'maxLength' => '36',
          'readOnly' => true
        ],
        'user' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'portal' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'ipAddress' => [
          'type' => 'varchar',
          'maxLength' => '45',
          'readOnly' => true
        ],
        'isActive' => [
          'type' => 'bool',
          'default' => true
        ],
        'lastAccess' => [
          'type' => 'datetime',
          'readOnly' => true,
          'hasSeconds' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'hasSeconds' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ]
      ],
      'links' => [
        'user' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'portal' => [
          'type' => 'belongsTo',
          'entity' => 'Portal'
        ],
        'actionHistoryRecords' => [
          'type' => 'hasMany',
          'entity' => 'ActionHistoryRecord',
          'foreign' => 'authToken'
        ]
      ],
      'collection' => [
        'orderBy' => 'lastAccess',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'ipAddress',
          1 => 'userName'
        ],
        'sortBy' => 'lastAccess',
        'asc' => false
      ],
      'indexes' => [
        'token' => [
          'columns' => [
            0 => 'token',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'Autofollow' => [
      'fields' => [
        'id' => [
          'type' => 'id',
          'dbType' => 'int',
          'autoincrement' => true
        ],
        'entityType' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'index' => true
        ],
        'userId' => [
          'type' => 'varchar',
          'maxLength' => 24,
          'index' => true
        ]
      ]
    ],
    'Currency' => [
      'fields' => [
        'rate' => [
          'type' => 'float'
        ]
      ]
    ],
    'DashboardTemplate' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'trim' => true,
          'required' => true
        ],
        'layout' => [
          'type' => 'jsonArray',
          'view' => 'views/settings/fields/dashboard-layout',
          'inlineEditDisabled' => true,
          'required' => true
        ],
        'dashletsOptions' => [
          'type' => 'jsonObject',
          'disabled' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'Email' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'layoutDefaultSidePanelDisabled' => true
        ],
        'subject' => [
          'type' => 'varchar',
          'required' => true,
          'notStorable' => true,
          'view' => 'views/email/fields/subject',
          'disabled' => true,
          'trim' => true
        ],
        'fromName' => [
          'type' => 'varchar',
          'readOnly' => true,
          'notStorable' => true,
          'textFilterDisabled' => true,
          'layoutFiltersDisabled' => true,
          'customizationDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true
        ],
        'fromAddress' => [
          'type' => 'varchar',
          'readOnly' => true,
          'notStorable' => true,
          'textFilterDisabled' => true,
          'layoutFiltersDisabled' => true,
          'customizationDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true
        ],
        'fromString' => [
          'type' => 'varchar',
          'customizationDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true
        ],
        'replyToString' => [
          'type' => 'varchar',
          'customizationDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true
        ],
        'replyToName' => [
          'type' => 'varchar',
          'readOnly' => true,
          'notStorable' => true,
          'textFilterDisabled' => true,
          'layoutFiltersDisabled' => true,
          'customizationDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true
        ],
        'replyToAddress' => [
          'type' => 'varchar',
          'readOnly' => true,
          'notStorable' => true,
          'textFilterDisabled' => true,
          'layoutFiltersDisabled' => true,
          'customizationDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true
        ],
        'addressNameMap' => [
          'type' => 'jsonObject',
          'disabled' => true,
          'readOnly' => true,
          'customizationDisabled' => true
        ],
        'from' => [
          'type' => 'varchar',
          'notStorable' => true,
          'required' => true,
          'view' => 'views/email/fields/from-address-varchar',
          'textFilterDisabled' => true,
          'customizationDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true
        ],
        'to' => [
          'type' => 'varchar',
          'notStorable' => true,
          'required' => true,
          'view' => 'views/email/fields/email-address-varchar',
          'textFilterDisabled' => true,
          'validatorClassName' => 'Espo\\Classes\\FieldValidators\\Email\\EmailAddresses',
          'customizationDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true
        ],
        'cc' => [
          'type' => 'varchar',
          'notStorable' => true,
          'view' => 'views/email/fields/email-address-varchar',
          'customizationDisabled' => true,
          'textFilterDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true
        ],
        'bcc' => [
          'type' => 'varchar',
          'notStorable' => true,
          'view' => 'views/email/fields/email-address-varchar',
          'customizationDisabled' => true,
          'textFilterDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true
        ],
        'replyTo' => [
          'type' => 'varchar',
          'notStorable' => true,
          'view' => 'views/email/fields/email-address-varchar',
          'textFilterDisabled' => true,
          'customizationDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true
        ],
        'personStringData' => [
          'type' => 'varchar',
          'notStorable' => true,
          'disabled' => true,
          'view' => 'views/email/fields/person-string-data',
          'customizationDisabled' => true
        ],
        'isRead' => [
          'type' => 'bool',
          'notStorable' => true,
          'default' => true,
          'readOnly' => true,
          'customizationDisabled' => true
        ],
        'isNotRead' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutListDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'readOnly' => true,
          'customizationDisabled' => true
        ],
        'isReplied' => [
          'type' => 'bool',
          'readOnly' => true,
          'customizationDisabled' => true
        ],
        'isNotReplied' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutListDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'readOnly' => true,
          'customizationDisabled' => true
        ],
        'isImportant' => [
          'type' => 'bool',
          'notStorable' => true,
          'default' => false,
          'customizationDisabled' => true
        ],
        'inTrash' => [
          'type' => 'bool',
          'notStorable' => true,
          'default' => false,
          'customizationDisabled' => true
        ],
        'folderId' => [
          'type' => 'varchar',
          'notStorable' => true,
          'default' => NULL,
          'textFilterDisabled' => true,
          'customizationDisabled' => true,
          'layoutAvailabilityList' => []
        ],
        'isUsers' => [
          'type' => 'bool',
          'notStorable' => true,
          'default' => false,
          'customizationDisabled' => true
        ],
        'folder' => [
          'type' => 'link',
          'notStorable' => true,
          'readOnly' => true,
          'entity' => 'EmailFolder',
          'customizationDisabled' => true
        ],
        'nameHash' => [
          'type' => 'text',
          'notStorable' => true,
          'readOnly' => true,
          'disabled' => true,
          'customizationDisabled' => true
        ],
        'typeHash' => [
          'type' => 'text',
          'notStorable' => true,
          'readOnly' => true,
          'disabled' => true,
          'customizationDisabled' => true
        ],
        'idHash' => [
          'type' => 'text',
          'notStorable' => true,
          'readOnly' => true,
          'disabled' => true,
          'customizationDisabled' => true
        ],
        'messageId' => [
          'type' => 'varchar',
          'maxLength' => 255,
          'readOnly' => true,
          'index' => true,
          'textFilterDisabled' => true,
          'customizationDisabled' => true
        ],
        'messageIdInternal' => [
          'type' => 'varchar',
          'maxLength' => 300,
          'readOnly' => true,
          'textFilterDisabled' => true,
          'customizationDisabled' => true,
          'layoutAvailabilityList' => []
        ],
        'emailAddress' => [
          'type' => 'base',
          'notStorable' => true,
          'view' => 'views/email/fields/email-address',
          'customizationDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true
        ],
        'fromEmailAddress' => [
          'type' => 'link',
          'view' => 'views/email/fields/from-email-address',
          'textFilterDisabled' => true,
          'customizationDisabled' => true,
          'layoutAvailabilityList' => []
        ],
        'toEmailAddresses' => [
          'type' => 'linkMultiple',
          'customizationDisabled' => true,
          'layoutAvailabilityList' => []
        ],
        'ccEmailAddresses' => [
          'type' => 'linkMultiple',
          'customizationDisabled' => true,
          'layoutAvailabilityList' => []
        ],
        'replyToEmailAddresses' => [
          'type' => 'linkMultiple',
          'customizationDisabled' => true,
          'layoutAvailabilityList' => []
        ],
        'bodyPlain' => [
          'type' => 'text',
          'seeMoreDisabled' => true,
          'clientReadOnly' => true,
          'customizationDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true
        ],
        'body' => [
          'type' => 'wysiwyg',
          'view' => 'views/email/fields/body',
          'attachmentField' => 'attachments',
          'useIframe' => true,
          'customizationDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true
        ],
        'isHtml' => [
          'type' => 'bool',
          'default' => true,
          'fieldManagerParamList' => [
            0 => 'default',
            1 => 'tooltipText'
          ],
          'inlineEditDisabled' => true
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Draft',
            1 => 'Sending',
            2 => 'Sent',
            3 => 'Archived',
            4 => 'Failed'
          ],
          'default' => 'Archived',
          'clientReadOnly' => true,
          'style' => [
            'Draft' => 'warning',
            'Failed' => 'danger',
            'Sending' => 'warning'
          ],
          'customizationDisabled' => true
        ],
        'attachments' => [
          'type' => 'attachmentMultiple',
          'sourceList' => [
            0 => 'Document'
          ],
          'layoutDefaultSidePanelDisabled' => true
        ],
        'hasAttachment' => [
          'type' => 'bool',
          'readOnly' => true,
          'customizationDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true
        ],
        'parent' => [
          'type' => 'linkParent',
          'fieldManagerParamList' => [
            0 => 'required',
            1 => 'entityList',
            2 => 'audited',
            3 => 'tooltipText'
          ],
          'entityList' => [
            0 => 'Account',
            1 => 'Lead',
            2 => 'Contact',
            3 => 'Opportunity',
            4 => 'Case'
          ]
        ],
        'dateSent' => [
          'type' => 'datetime',
          'customizationDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true
        ],
        'deliveryDate' => [
          'type' => 'datetime',
          'readOnly' => true,
          'customizationDisabled' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'customizationDisabled' => true
        ],
        'sentBy' => [
          'type' => 'link',
          'readOnly' => true,
          'noLoad' => true,
          'customizationDisabled' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'customizationDisabled' => true
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => false,
          'view' => 'views/fields/assigned-user'
        ],
        'replied' => [
          'type' => 'link',
          'noJoin' => true,
          'view' => 'views/email/fields/replied',
          'customizationDisabled' => true
        ],
        'replies' => [
          'type' => 'linkMultiple',
          'readOnly' => true,
          'orderBy' => 'dateSent',
          'view' => 'views/email/fields/replies',
          'customizationDisabled' => true,
          'columns' => [
            'status' => 'status'
          ]
        ],
        'isSystem' => [
          'type' => 'bool',
          'default' => false,
          'readOnly' => true,
          'customizationDisabled' => true
        ],
        'isJustSent' => [
          'type' => 'bool',
          'default' => false,
          'disabled' => true,
          'notStorable' => true,
          'customizationDisabled' => true
        ],
        'isBeingImported' => [
          'type' => 'bool',
          'disabled' => true,
          'notStorable' => true,
          'customizationDisabled' => true
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'users' => [
          'type' => 'linkMultiple',
          'noLoad' => true,
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'readOnly' => true,
          'columns' => [
            'inTrash' => 'inTrash',
            'folderId' => 'folderId'
          ],
          'customizationDisabled' => true
        ],
        'assignedUsers' => [
          'type' => 'linkMultiple',
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'readOnly' => true,
          'customizationDisabled' => true
        ],
        'inboundEmails' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'noLoad' => true,
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'default'
          ]
        ],
        'emailAccounts' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'noLoad' => true,
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'default'
          ]
        ],
        'icsContents' => [
          'type' => 'text',
          'readOnly' => true,
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'dbType' => 'text',
          'customizationDisabled' => true,
          'layoutAvailabilityList' => []
        ],
        'icsEventData' => [
          'type' => 'jsonObject',
          'readOnly' => true,
          'directAccessDisabled' => true,
          'notStorable' => true,
          'customizationDisabled' => true,
          'layoutAvailabilityList' => []
        ],
        'icsEventUid' => [
          'type' => 'varchar',
          'maxLength' => 255,
          'index' => true,
          'customizationDisabled' => true,
          'layoutAvailabilityList' => []
        ],
        'icsEventDateStart' => [
          'type' => 'datetimeOptional',
          'readOnly' => true,
          'notStorable' => true,
          'customizationDisabled' => true,
          'layoutAvailabilityList' => []
        ],
        'createEvent' => [
          'type' => 'base',
          'disabled' => true,
          'notStorable' => true,
          'view' => 'views/email/fields/create-event',
          'customizationDisabled' => true,
          'layoutAvailabilityList' => []
        ],
        'createdEvent' => [
          'type' => 'linkParent',
          'readOnly' => true,
          'view' => 'views/email/fields/created-event',
          'fieldManagerParamList' => [
            0 => 'tooltipText'
          ],
          'layoutAvailabilityList' => []
        ],
        'account' => [
          'type' => 'link',
          'readOnly' => true,
          'customizationDisabled' => true
        ],
        'tasks' => [
          'type' => 'linkMultiple',
          'readOnly' => true,
          'columns' => [
            'status' => 'status'
          ],
          'view' => 'views/fields/link-multiple-with-status',
          'customizationDefaultDisabled' => true
        ],
        'icsEventDateStartDate' => [
          'readOnly' => true,
          'notStorable' => true,
          'customizationDisabled' => true,
          'type' => 'date',
          'disabled' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam'
        ],
        'assignedUsers' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'relationName' => 'entityUser'
        ],
        'users' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'emails',
          'additionalColumns' => [
            'isRead' => [
              'type' => 'bool',
              'default' => false
            ],
            'isImportant' => [
              'type' => 'bool',
              'default' => false
            ],
            'inTrash' => [
              'type' => 'bool',
              'default' => false
            ],
            'folderId' => [
              'type' => 'varchar',
              'default' => NULL,
              'maxLength' => 24
            ]
          ]
        ],
        'sentBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'attachments' => [
          'type' => 'hasChildren',
          'entity' => 'Attachment',
          'foreign' => 'parent',
          'relationName' => 'attachments'
        ],
        'parent' => [
          'type' => 'belongsToParent',
          'entityList' => [],
          'foreign' => 'emails'
        ],
        'replied' => [
          'type' => 'belongsTo',
          'entity' => 'Email',
          'foreign' => 'replies'
        ],
        'replies' => [
          'type' => 'hasMany',
          'entity' => 'Email',
          'foreign' => 'replied'
        ],
        'fromEmailAddress' => [
          'type' => 'belongsTo',
          'entity' => 'EmailAddress'
        ],
        'toEmailAddresses' => [
          'type' => 'hasMany',
          'entity' => 'EmailAddress',
          'relationName' => 'emailEmailAddress',
          'conditions' => [
            'addressType' => 'to'
          ],
          'additionalColumns' => [
            'addressType' => [
              'type' => 'varchar',
              'len' => '4'
            ]
          ]
        ],
        'ccEmailAddresses' => [
          'type' => 'hasMany',
          'entity' => 'EmailAddress',
          'relationName' => 'emailEmailAddress',
          'conditions' => [
            'addressType' => 'cc'
          ],
          'additionalColumns' => [
            'addressType' => [
              'type' => 'varchar',
              'len' => '4'
            ]
          ],
          'layoutDefaultSidePanelDisabled' => true
        ],
        'bccEmailAddresses' => [
          'type' => 'hasMany',
          'entity' => 'EmailAddress',
          'relationName' => 'emailEmailAddress',
          'conditions' => [
            'addressType' => 'bcc'
          ],
          'additionalColumns' => [
            'addressType' => [
              'type' => 'varchar',
              'len' => '4'
            ]
          ],
          'layoutDefaultSidePanelDisabled' => true
        ],
        'replyToEmailAddresses' => [
          'type' => 'hasMany',
          'entity' => 'EmailAddress',
          'relationName' => 'emailEmailAddress',
          'conditions' => [
            'addressType' => 'rto'
          ],
          'additionalColumns' => [
            'addressType' => [
              'type' => 'varchar',
              'len' => '4'
            ]
          ]
        ],
        'inboundEmails' => [
          'type' => 'hasMany',
          'entity' => 'InboundEmail',
          'foreign' => 'emails'
        ],
        'emailAccounts' => [
          'type' => 'hasMany',
          'entity' => 'EmailAccount',
          'foreign' => 'emails'
        ],
        'createdEvent' => [
          'type' => 'belongsToParent',
          'entityList' => [
            0 => 'Meeting'
          ]
        ],
        'account' => [
          'type' => 'belongsTo',
          'entity' => 'Account'
        ],
        'tasks' => [
          'type' => 'hasMany',
          'entity' => 'Task',
          'foreign' => 'email'
        ]
      ],
      'collection' => [
        'orderBy' => 'dateSent',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name',
          1 => 'bodyPlain',
          2 => 'body'
        ],
        'countDisabled' => true,
        'fullTextSearch' => true,
        'fullTextSearchOrderType' => 'original',
        'sortBy' => 'dateSent',
        'asc' => false
      ],
      'indexes' => [
        'createdById' => [
          'columns' => [
            0 => 'createdById'
          ]
        ],
        'dateSent' => [
          'columns' => [
            0 => 'dateSent',
            1 => 'deleted'
          ]
        ],
        'dateSentStatus' => [
          'columns' => [
            0 => 'dateSent',
            1 => 'status',
            2 => 'deleted'
          ]
        ]
      ]
    ],
    'EmailAccount' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'emailAddress' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 100,
          'trim' => true,
          'tooltip' => true,
          'view' => 'views/email-account/fields/email-address'
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Active',
            1 => 'Inactive'
          ],
          'default' => 'Active'
        ],
        'host' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'port' => [
          'type' => 'int',
          'min' => 0,
          'max' => 65535,
          'default' => 993
        ],
        'security' => [
          'type' => 'enum',
          'default' => 'SSL',
          'options' => [
            0 => '',
            1 => 'SSL',
            2 => 'TLS'
          ]
        ],
        'username' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'password' => [
          'type' => 'password'
        ],
        'monitoredFolders' => [
          'type' => 'array',
          'default' => [
            0 => 'INBOX'
          ],
          'view' => 'views/email-account/fields/folders',
          'displayAsList' => true,
          'noEmptyString' => true,
          'duplicateIgnore' => true
        ],
        'sentFolder' => [
          'type' => 'varchar',
          'view' => 'views/email-account/fields/folder',
          'duplicateIgnore' => true
        ],
        'storeSentEmails' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'keepFetchedEmailsUnread' => [
          'type' => 'bool'
        ],
        'fetchSince' => [
          'type' => 'date'
        ],
        'fetchData' => [
          'type' => 'jsonObject',
          'readOnly' => true,
          'duplicateIgnore' => true
        ],
        'emailFolder' => [
          'type' => 'link',
          'view' => 'views/email-account/fields/email-folder',
          'duplicateIgnore' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'useImap' => [
          'type' => 'bool',
          'default' => true
        ],
        'useSmtp' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'smtpHost' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'smtpPort' => [
          'type' => 'int',
          'min' => 0,
          'max' => 65535,
          'default' => 587
        ],
        'smtpAuth' => [
          'type' => 'bool',
          'default' => true
        ],
        'smtpSecurity' => [
          'type' => 'enum',
          'default' => 'TLS',
          'options' => [
            0 => '',
            1 => 'SSL',
            2 => 'TLS'
          ]
        ],
        'smtpUsername' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'smtpPassword' => [
          'type' => 'password'
        ],
        'smtpAuthMechanism' => [
          'type' => 'enum',
          'options' => [
            0 => 'login',
            1 => 'crammd5',
            2 => 'plain'
          ],
          'default' => 'login'
        ],
        'imapHandler' => [
          'type' => 'varchar',
          'readOnly' => true
        ],
        'smtpHandler' => [
          'type' => 'varchar',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'filters' => [
          'type' => 'hasChildren',
          'foreign' => 'parent',
          'entity' => 'EmailFilter'
        ],
        'emails' => [
          'type' => 'hasMany',
          'entity' => 'Email',
          'foreign' => 'emailAccounts'
        ],
        'emailFolder' => [
          'type' => 'belongsTo',
          'entity' => 'EmailFolder'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'EmailAddress' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 255
        ],
        'lower' => [
          'type' => 'varchar',
          'required' => true,
          'index' => true
        ],
        'invalid' => [
          'type' => 'bool'
        ],
        'optOut' => [
          'type' => 'bool'
        ],
        'primary' => [
          'type' => 'bool',
          'notStorable' => true
        ]
      ],
      'links' => [],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'EmailFilter' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 100,
          'tooltip' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'from' => [
          'type' => 'varchar',
          'maxLength' => 255,
          'tooltip' => true,
          'trim' => true
        ],
        'to' => [
          'type' => 'varchar',
          'maxLength' => 255,
          'tooltip' => true,
          'trim' => true
        ],
        'subject' => [
          'type' => 'varchar',
          'maxLength' => 255,
          'tooltip' => true
        ],
        'bodyContains' => [
          'type' => 'array',
          'tooltip' => true
        ],
        'isGlobal' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'parent' => [
          'type' => 'linkParent',
          'view' => 'views/email-filter/fields/parent'
        ],
        'action' => [
          'type' => 'enum',
          'default' => 'Skip',
          'options' => [
            0 => 'Skip',
            1 => 'Move to Folder'
          ],
          'view' => 'views/email-filter/fields/action'
        ],
        'emailFolder' => [
          'type' => 'link',
          'view' => 'views/email-filter/fields/email-folder'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'parent' => [
          'type' => 'belongsToParent',
          'entityList' => [
            0 => 'User',
            1 => 'EmailAccount',
            2 => 'InboundEmail'
          ]
        ],
        'emailFolder' => [
          'type' => 'belongsTo',
          'entity' => 'EmailFolder'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ]
    ],
    'EmailFolder' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 64,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'order' => [
          'type' => 'int'
        ],
        'assignedUser' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'skipNotifications' => [
          'type' => 'bool'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ],
      'collection' => [
        'orderBy' => 'order',
        'order' => 'asc',
        'sortBy' => 'order',
        'asc' => true
      ]
    ],
    'EmailTemplate' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'subject' => [
          'type' => 'varchar'
        ],
        'body' => [
          'type' => 'wysiwyg',
          'view' => 'views/email-template/fields/body',
          'useIframe' => true
        ],
        'isHtml' => [
          'type' => 'bool',
          'default' => true,
          'inlineEditDisabled' => true
        ],
        'oneOff' => [
          'type' => 'bool',
          'default' => false,
          'tooltip' => true
        ],
        'attachments' => [
          'type' => 'attachmentMultiple'
        ],
        'category' => [
          'type' => 'link',
          'view' => 'views/fields/link-category-tree'
        ],
        'assignedUser' => [
          'type' => 'link'
        ],
        'teams' => [
          'type' => 'linkMultiple'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ]
      ],
      'links' => [
        'attachments' => [
          'type' => 'hasChildren',
          'entity' => 'Attachment',
          'foreign' => 'parent'
        ],
        'category' => [
          'type' => 'belongsTo',
          'foreign' => 'emailTemplates',
          'entity' => 'EmailTemplateCategory'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name',
          1 => 'subject'
        ],
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'optimisticConcurrencyControl' => true
    ],
    'EmailTemplateCategory' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'order' => [
          'type' => 'int',
          'minValue' => 1,
          'required' => true,
          'textFilterDisabled' => true
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'teams' => [
          'type' => 'linkMultiple'
        ],
        'parent' => [
          'type' => 'link'
        ],
        'childList' => [
          'type' => 'jsonArray',
          'notStorable' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'parent' => [
          'type' => 'belongsTo',
          'foreign' => 'children',
          'entity' => 'EmailTemplateCategory'
        ],
        'children' => [
          'type' => 'hasMany',
          'foreign' => 'parent',
          'entity' => 'EmailTemplateCategory'
        ],
        'emailTemplates' => [
          'type' => 'hasMany',
          'foreign' => 'category',
          'entity' => 'EmailTemplate'
        ]
      ],
      'collection' => [
        'orderBy' => 'parent',
        'order' => 'asc',
        'sortBy' => 'parent',
        'asc' => true
      ],
      'additionalTables' => [
        'EmailTemplateCategoryPath' => [
          'fields' => [
            'id' => [
              'type' => 'id',
              'dbType' => 'int',
              'len' => '11',
              'autoincrement' => true
            ],
            'ascendorId' => [
              'type' => 'varchar',
              'len' => '100',
              'index' => true
            ],
            'descendorId' => [
              'type' => 'varchar',
              'len' => '24',
              'index' => true
            ]
          ]
        ]
      ]
    ],
    'Export' => [
      'fields' => [
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Pending',
            1 => 'Running',
            2 => 'Success',
            3 => 'Failed'
          ],
          'default' => 'Pending'
        ],
        'params' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'required' => true
        ],
        'notifyOnFinish' => [
          'type' => 'bool',
          'default' => false
        ],
        'attachment' => [
          'type' => 'link',
          'entity' => 'Attachment'
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ]
    ],
    'Extension' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true
        ],
        'version' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 50
        ],
        'fileList' => [
          'type' => 'jsonArray'
        ],
        'description' => [
          'type' => 'text'
        ],
        'isInstalled' => [
          'type' => 'bool',
          'default' => false
        ],
        'checkVersionUrl' => [
          'type' => 'url'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ]
    ],
    'ExternalAccount' => [
      'fields' => [
        'id' => [
          'type' => 'id',
          'maxLength' => 64
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'enabled' => [
          'type' => 'bool'
        ],
        'isLocked' => [
          'type' => 'bool'
        ]
      ]
    ],
    'Import' => [
      'fields' => [
        'entityType' => [
          'type' => 'enum',
          'translation' => 'Global.scopeNames',
          'required' => true,
          'readOnly' => true
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Standby',
            1 => 'Pending',
            2 => 'In Process',
            3 => 'Complete',
            4 => 'Failed'
          ],
          'readOnly' => true,
          'style' => [
            'Complete' => 'success',
            'Failed' => 'danger'
          ]
        ],
        'file' => [
          'type' => 'file',
          'required' => true,
          'readOnly' => true
        ],
        'importedCount' => [
          'type' => 'int',
          'readOnly' => true,
          'notStorable' => true
        ],
        'duplicateCount' => [
          'type' => 'int',
          'readOnly' => true,
          'notStorable' => true
        ],
        'updatedCount' => [
          'type' => 'int',
          'readOnly' => true,
          'notStorable' => true
        ],
        'lastIndex' => [
          'type' => 'int',
          'readOnly' => true
        ],
        'params' => [
          'type' => 'jsonObject',
          'readOnly' => true
        ],
        'attributeList' => [
          'type' => 'jsonArray',
          'readOnly' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'errors' => [
          'type' => 'hasMany',
          'entity' => 'ImportError',
          'foreign' => 'import',
          'readOnly' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ]
    ],
    'ImportEntity' => [
      'fields' => [
        'id' => [
          'type' => 'id',
          'dbType' => 'bigint',
          'autoincrement' => true
        ],
        'entityId' => [
          'type' => 'varchar',
          'maxLength' => 24,
          'index' => 'entity'
        ],
        'entityType' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'index' => 'entity'
        ],
        'importId' => [
          'type' => 'varchar',
          'maxLength' => 24,
          'index' => true
        ],
        'isImported' => [
          'type' => 'bool'
        ],
        'isUpdated' => [
          'type' => 'bool'
        ],
        'isDuplicate' => [
          'type' => 'bool'
        ]
      ],
      'indexes' => [
        'entityImport' => [
          'columns' => [
            0 => 'importId',
            1 => 'entityType'
          ]
        ]
      ]
    ],
    'ImportError' => [
      'fields' => [
        'import' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'rowIndex' => [
          'type' => 'int',
          'readOnly' => true,
          'tooltip' => true
        ],
        'exportRowIndex' => [
          'type' => 'int',
          'readOnly' => true
        ],
        'lineNumber' => [
          'type' => 'int',
          'readOnly' => true,
          'tooltip' => true,
          'notStorable' => true,
          'view' => 'views/import-error/fields/line-number'
        ],
        'exportLineNumber' => [
          'type' => 'int',
          'readOnly' => true,
          'tooltip' => true,
          'notStorable' => true,
          'view' => 'views/import-error/fields/line-number'
        ],
        'type' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Validation',
            2 => 'No-Access',
            3 => 'Not-Found',
            4 => 'Integrity-Constraint-Violation'
          ],
          'readOnly' => true
        ],
        'validationFailures' => [
          'type' => 'jsonArray',
          'readOnly' => true,
          'view' => 'views/import-error/fields/validation-failures'
        ],
        'row' => [
          'type' => 'array',
          'readOnly' => true,
          'displayAsList' => true,
          'doNotStoreArrayValues' => true
        ]
      ],
      'links' => [
        'import' => [
          'type' => 'belongsTo',
          'entity' => 'Import',
          'foreign' => 'errors',
          'foreignName' => 'id'
        ]
      ],
      'collection' => [
        'orderBy' => 'rowIndex',
        'sortBy' => 'rowIndex'
      ],
      'indexes' => [
        'rowIndex' => [
          'columns' => [
            0 => 'rowIndex'
          ]
        ],
        'importRowIndex' => [
          'columns' => [
            0 => 'importId',
            1 => 'rowIndex'
          ]
        ]
      ]
    ],
    'InboundEmail' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'emailAddress' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 100,
          'view' => 'views/inbound-email/fields/email-address',
          'trim' => true
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Active',
            1 => 'Inactive'
          ],
          'default' => 'Active'
        ],
        'host' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'port' => [
          'type' => 'int',
          'min' => 0,
          'max' => 65535,
          'default' => 993
        ],
        'security' => [
          'type' => 'enum',
          'default' => 'SSL',
          'options' => [
            0 => '',
            1 => 'SSL',
            2 => 'TLS'
          ]
        ],
        'username' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'password' => [
          'type' => 'password'
        ],
        'monitoredFolders' => [
          'type' => 'array',
          'default' => [
            0 => 'INBOX'
          ],
          'view' => 'views/inbound-email/fields/folders',
          'displayAsList' => true,
          'noEmptyString' => true,
          'duplicateIgnore' => true
        ],
        'fetchSince' => [
          'type' => 'date'
        ],
        'fetchData' => [
          'type' => 'jsonObject',
          'readOnly' => true,
          'duplicateIgnore' => true
        ],
        'assignToUser' => [
          'type' => 'link',
          'tooltip' => true
        ],
        'team' => [
          'type' => 'link',
          'tooltip' => true
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'tooltip' => true
        ],
        'addAllTeamUsers' => [
          'type' => 'bool',
          'tooltip' => true,
          'default' => true
        ],
        'sentFolder' => [
          'type' => 'varchar',
          'view' => 'views/inbound-email/fields/folder',
          'duplicateIgnore' => true
        ],
        'storeSentEmails' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'keepFetchedEmailsUnread' => [
          'type' => 'bool'
        ],
        'useImap' => [
          'type' => 'bool',
          'default' => true
        ],
        'useSmtp' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'smtpIsShared' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'smtpIsForMassEmail' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'smtpHost' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'smtpPort' => [
          'type' => 'int',
          'min' => 0,
          'max' => 65535,
          'default' => 587
        ],
        'smtpAuth' => [
          'type' => 'bool',
          'default' => true
        ],
        'smtpSecurity' => [
          'type' => 'enum',
          'default' => 'TLS',
          'options' => [
            0 => '',
            1 => 'SSL',
            2 => 'TLS'
          ]
        ],
        'smtpUsername' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'smtpPassword' => [
          'type' => 'password'
        ],
        'smtpAuthMechanism' => [
          'type' => 'enum',
          'options' => [
            0 => 'login',
            1 => 'crammd5',
            2 => 'plain'
          ],
          'default' => 'login'
        ],
        'createCase' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'caseDistribution' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Direct-Assignment',
            2 => 'Round-Robin',
            3 => 'Least-Busy'
          ],
          'default' => 'Direct-Assignment',
          'tooltip' => true
        ],
        'targetUserPosition' => [
          'type' => 'enum',
          'view' => 'views/inbound-email/fields/target-user-position',
          'tooltip' => true
        ],
        'reply' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'replyEmailTemplate' => [
          'type' => 'link'
        ],
        'replyFromAddress' => [
          'type' => 'varchar'
        ],
        'replyToAddress' => [
          'type' => 'varchar',
          'view' => 'views/fields/email-address',
          'tooltip' => true
        ],
        'replyFromName' => [
          'type' => 'varchar'
        ],
        'fromName' => [
          'type' => 'varchar'
        ],
        'imapHandler' => [
          'type' => 'varchar',
          'readOnly' => true
        ],
        'smtpHandler' => [
          'type' => 'varchar',
          'readOnly' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'foreign' => 'inboundEmails'
        ],
        'assignToUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'team' => [
          'type' => 'belongsTo',
          'entity' => 'Team'
        ],
        'replyEmailTemplate' => [
          'type' => 'belongsTo',
          'entity' => 'EmailTemplate'
        ],
        'filters' => [
          'type' => 'hasChildren',
          'foreign' => 'parent',
          'entity' => 'EmailFilter'
        ],
        'emails' => [
          'type' => 'hasMany',
          'entity' => 'Email',
          'foreign' => 'inboundEmails'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'Integration' => [
      'fields' => [
        'data' => [
          'type' => 'jsonObject'
        ],
        'enabled' => [
          'type' => 'bool'
        ]
      ]
    ],
    'Job' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'view' => 'views/admin/job/fields/name'
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Pending',
            1 => 'Ready',
            2 => 'Running',
            3 => 'Success',
            4 => 'Failed'
          ],
          'default' => 'Pending',
          'style' => [
            'Success' => 'success',
            'Failed' => 'danger',
            'Running' => 'warning',
            'Ready' => 'warning'
          ],
          'maxLength' => 16
        ],
        'executeTime' => [
          'type' => 'datetime',
          'required' => true,
          'hasSeconds' => true
        ],
        'number' => [
          'type' => 'int',
          'index' => true,
          'readOnly' => true,
          'view' => 'views/fields/autoincrement',
          'dbType' => 'bigint',
          'unique' => true,
          'autoincrement' => true
        ],
        'className' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 255
        ],
        'serviceName' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 100
        ],
        'methodName' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'job' => [
          'type' => 'varchar',
          'view' => 'views/scheduled-job/fields/job'
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'scheduledJob' => [
          'type' => 'link'
        ],
        'scheduledJobJob' => [
          'type' => 'foreign',
          'link' => 'scheduledJob',
          'field' => 'job'
        ],
        'queue' => [
          'type' => 'varchar',
          'maxLength' => 36,
          'default' => NULL
        ],
        'group' => [
          'type' => 'varchar',
          'maxLength' => 128,
          'default' => NULL
        ],
        'targetGroup' => [
          'type' => 'varchar',
          'maxLength' => 128,
          'default' => NULL
        ],
        'startedAt' => [
          'type' => 'datetime',
          'hasSeconds' => true
        ],
        'executedAt' => [
          'type' => 'datetime',
          'hasSeconds' => true
        ],
        'pid' => [
          'type' => 'int'
        ],
        'attempts' => [
          'type' => 'int'
        ],
        'targetId' => [
          'type' => 'varchar',
          'maxLength' => 48
        ],
        'targetType' => [
          'type' => 'varchar',
          'maxLength' => 64
        ],
        'failedAttempts' => [
          'type' => 'int'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'hasSeconds' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'hasSeconds' => true
        ]
      ],
      'links' => [
        'scheduledJob' => [
          'type' => 'belongsTo',
          'entity' => 'ScheduledJob'
        ]
      ],
      'collection' => [
        'orderBy' => 'number',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'id',
          1 => 'name',
          2 => 'methodName',
          3 => 'serviceName'
        ],
        'sortBy' => 'number',
        'asc' => false
      ],
      'indexes' => [
        'executeTime' => [
          'columns' => [
            0 => 'status',
            1 => 'executeTime'
          ]
        ],
        'status' => [
          'columns' => [
            0 => 'status',
            1 => 'deleted'
          ]
        ],
        'statusScheduledJobId' => [
          'columns' => [
            0 => 'status',
            1 => 'scheduledJobId'
          ]
        ]
      ]
    ],
    'KanbanOrder' => [
      'fields' => [
        'order' => [
          'type' => 'int',
          'dbType' => 'smallint'
        ],
        'entity' => [
          'type' => 'linkParent'
        ],
        'group' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'userId' => [
          'type' => 'varchar',
          'maxLength' => 24
        ]
      ],
      'links' => [
        'entity' => [
          'type' => 'belongsToParent'
        ]
      ],
      'indexes' => [
        'entityUserId' => [
          'columns' => [
            0 => 'entityType',
            1 => 'entityId',
            2 => 'userId'
          ]
        ],
        'entityType' => [
          'columns' => [
            0 => 'entityType'
          ]
        ],
        'entityTypeUserId' => [
          'columns' => [
            0 => 'entityType',
            1 => 'userId'
          ]
        ]
      ]
    ],
    'LayoutRecord' => [
      'fields' => [
        'name' => [
          'type' => 'varchar'
        ],
        'layoutSet' => [
          'type' => 'link'
        ],
        'data' => [
          'type' => 'text'
        ]
      ],
      'links' => [
        'layoutSet' => [
          'type' => 'belongsTo',
          'entity' => 'LayoutSet',
          'foreign' => 'layoutRecords'
        ]
      ],
      'indexes' => [
        'nameLayoutSetId' => [
          'columns' => [
            0 => 'name',
            1 => 'layoutSetId'
          ]
        ]
      ]
    ],
    'LayoutSet' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 100,
          'trim' => true
        ],
        'layoutList' => [
          'type' => 'multiEnum',
          'displayAsList' => true,
          'view' => 'views/layout-set/fields/layout-list'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ]
      ],
      'links' => [
        'layoutRecords' => [
          'type' => 'hasMany',
          'entity' => 'LayoutRecord',
          'foreign' => 'layoutSet'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'foreign' => 'layoutSet'
        ],
        'portals' => [
          'type' => 'hasMany',
          'entity' => 'Portal',
          'foreign' => 'layoutSet'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'LeadCapture' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'trim' => true
        ],
        'campaign' => [
          'type' => 'link'
        ],
        'isActive' => [
          'type' => 'bool',
          'default' => true
        ],
        'subscribeToTargetList' => [
          'type' => 'bool',
          'default' => true
        ],
        'subscribeContactToTargetList' => [
          'type' => 'bool',
          'default' => true
        ],
        'targetList' => [
          'type' => 'link'
        ],
        'fieldList' => [
          'type' => 'multiEnum',
          'default' => [
            0 => 'firstName',
            1 => 'lastName',
            2 => 'emailAddress'
          ],
          'view' => 'views/lead-capture/fields/field-list',
          'required' => true,
          'ignoreFieldList' => [
            0 => 'targetList',
            1 => 'targetLists',
            2 => 'acceptanceStatusMeetings',
            3 => 'acceptanceStatusCalls',
            4 => 'campaign',
            5 => 'source',
            6 => 'teams',
            7 => 'createdOpportunity',
            8 => 'createdAccount',
            9 => 'createdContact'
          ]
        ],
        'duplicateCheck' => [
          'type' => 'bool',
          'default' => true
        ],
        'optInConfirmation' => [
          'type' => 'bool'
        ],
        'optInConfirmationEmailTemplate' => [
          'type' => 'link'
        ],
        'optInConfirmationLifetime' => [
          'type' => 'int',
          'default' => 48,
          'min' => 1
        ],
        'optInConfirmationSuccessMessage' => [
          'type' => 'text',
          'tooltip' => true
        ],
        'createLeadBeforeOptInConfirmation' => [
          'type' => 'bool'
        ],
        'skipOptInConfirmationIfSubscribed' => [
          'type' => 'bool'
        ],
        'leadSource' => [
          'type' => 'enum',
          'view' => 'crm:views/opportunity/fields/lead-source',
          'customizationOptionsDisabled' => true,
          'default' => 'Web Site'
        ],
        'apiKey' => [
          'type' => 'varchar',
          'maxLength' => 36,
          'readOnly' => true,
          'view' => 'views/lead-capture/fields/api-key'
        ],
        'targetTeam' => [
          'type' => 'link'
        ],
        'exampleRequestUrl' => [
          'type' => 'varchar',
          'notStorable' => true,
          'readOnly' => true
        ],
        'exampleRequestMethod' => [
          'type' => 'varchar',
          'notStorable' => true,
          'readOnly' => true
        ],
        'exampleRequestPayload' => [
          'type' => 'text',
          'notStorable' => true,
          'readOnly' => true,
          'seeMoreDisabled' => true
        ],
        'exampleRequestHeaders' => [
          'type' => 'array',
          'notStorable' => true,
          'readOnly' => true
        ],
        'inboundEmail' => [
          'type' => 'link'
        ],
        'smtpAccount' => [
          'type' => 'base',
          'notStorable' => true,
          'view' => 'views/lead-capture/fields/smtp-account'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'targetList' => [
          'type' => 'belongsTo',
          'entity' => 'TargetList'
        ],
        'campaign' => [
          'type' => 'belongsTo',
          'entity' => 'Campaign'
        ],
        'targetTeam' => [
          'type' => 'belongsTo',
          'entity' => 'Team'
        ],
        'inboundEmail' => [
          'type' => 'belongsTo',
          'entity' => 'InboundEmail'
        ],
        'optInConfirmationEmailTemplate' => [
          'type' => 'belongsTo',
          'entity' => 'EmailTemplate'
        ],
        'logRecords' => [
          'type' => 'hasMany',
          'entity' => 'LeadCaptureLogRecord',
          'foreign' => 'leadCapture'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'LeadCaptureLogRecord' => [
      'fields' => [
        'number' => [
          'type' => 'autoincrement',
          'index' => true,
          'readOnly' => true
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'isCreated' => [
          'type' => 'bool'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'leadCapture' => [
          'type' => 'link'
        ],
        'target' => [
          'type' => 'linkParent'
        ]
      ],
      'links' => [
        'leadCapture' => [
          'type' => 'belongsTo',
          'entity' => 'LeadCapture',
          'foreign' => 'logRecords'
        ],
        'target' => [
          'type' => 'belongsToParent',
          'entityList' => [
            0 => 'Contact',
            1 => 'Lead'
          ]
        ]
      ],
      'collection' => [
        'orderBy' => 'number',
        'order' => 'desc',
        'sortBy' => 'number',
        'asc' => false
      ]
    ],
    'MassAction' => [
      'fields' => [
        'entityType' => [
          'type' => 'varchar',
          'required' => true
        ],
        'action' => [
          'type' => 'varchar',
          'required' => true
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Pending',
            1 => 'Running',
            2 => 'Success',
            3 => 'Failed'
          ],
          'default' => 'Pending'
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'params' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'required' => true
        ],
        'processedCount' => [
          'type' => 'int'
        ],
        'notifyOnFinish' => [
          'type' => 'bool',
          'default' => false
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ]
    ],
    'NextNumber' => [
      'fields' => [
        'entityType' => [
          'type' => 'varchar',
          'index' => true,
          'maxLength' => 100
        ],
        'fieldName' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'value' => [
          'type' => 'int',
          'default' => 1
        ]
      ],
      'indexes' => [
        'entityTypeFieldName' => [
          'columns' => [
            0 => 'entityType',
            1 => 'fieldName'
          ]
        ]
      ]
    ],
    'Note' => [
      'fields' => [
        'post' => [
          'type' => 'text',
          'rows' => 100000,
          'view' => 'views/note/fields/post',
          'customizationDefaultDisabled' => true,
          'customizationRequiredDisabled' => true,
          'customizationInlineEditDisabledDisabled' => true,
          'customizationTooltipTextDisabled' => true,
          'customizationSeeMoreDisabledDisabled' => true,
          'customizationRowsDisabled' => true,
          'customizationDisplayRawTextDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'dynamicLogicDisabled' => true
        ],
        'data' => [
          'type' => 'jsonObject',
          'readOnly' => true,
          'customizationDisabled' => true
        ],
        'type' => [
          'type' => 'enum',
          'readOnly' => true,
          'view' => 'views/fields/enum',
          'options' => [
            0 => 'Post',
            1 => 'Create',
            2 => 'CreateRelated',
            3 => 'Update',
            4 => 'Status',
            5 => 'Assign',
            6 => 'Relate',
            7 => 'EmailReceived',
            8 => 'EmailSent'
          ],
          'customizationDisabled' => true,
          'default' => 'Post'
        ],
        'targetType' => [
          'type' => 'enum',
          'options' => [
            0 => 'self',
            1 => 'all',
            2 => 'teams',
            3 => 'users',
            4 => 'portals'
          ],
          'customizationDisabled' => true
        ],
        'parent' => [
          'type' => 'linkParent',
          'customizationDisabled' => true
        ],
        'related' => [
          'type' => 'linkParent',
          'readOnly' => true,
          'customizationDisabled' => true
        ],
        'attachments' => [
          'type' => 'attachmentMultiple',
          'view' => 'views/stream/fields/attachment-multiple',
          'customizationRequiredDisabled' => true,
          'customizationPreviewSizeDisabled' => true,
          'customizationInlineEditDisabledDisabled' => true,
          'customizationTooltipTextDisabled' => true,
          'dynamicLogicDisabled' => true
        ],
        'number' => [
          'type' => 'autoincrement',
          'index' => true,
          'dbType' => 'bigint',
          'readOnly' => true,
          'customizationDisabled' => true
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'noLoad' => true,
          'customizationDisabled' => true
        ],
        'portals' => [
          'type' => 'linkMultiple',
          'noLoad' => true,
          'customizationDisabled' => true
        ],
        'users' => [
          'type' => 'linkMultiple',
          'noLoad' => true,
          'customizationDisabled' => true
        ],
        'isGlobal' => [
          'type' => 'bool',
          'customizationDisabled' => true
        ],
        'createdByGender' => [
          'type' => 'foreign',
          'link' => 'createdBy',
          'field' => 'gender',
          'customizationDisabled' => true
        ],
        'notifiedUserIdList' => [
          'type' => 'jsonArray',
          'notStorable' => true,
          'disabled' => true,
          'customizationDisabled' => true
        ],
        'isInternal' => [
          'type' => 'bool',
          'customizationDisabled' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'customizationDisabled' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'customizationDisabled' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'customizationDisabled' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'customizationDisabled' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'attachments' => [
          'type' => 'hasChildren',
          'entity' => 'Attachment',
          'relationName' => 'attachments',
          'foreign' => 'parent'
        ],
        'parent' => [
          'type' => 'belongsToParent',
          'foreign' => 'notes'
        ],
        'superParent' => [
          'type' => 'belongsToParent'
        ],
        'related' => [
          'type' => 'belongsToParent'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'foreign' => 'notes'
        ],
        'portals' => [
          'type' => 'hasMany',
          'entity' => 'Portal',
          'foreign' => 'notes'
        ],
        'users' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'notes'
        ]
      ],
      'collection' => [
        'orderBy' => 'number',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'post'
        ],
        'sortBy' => 'number',
        'asc' => false
      ],
      'statusStyles' => [
        'Lead' => [
          'Assigned' => 'primary',
          'In Process' => 'primary'
        ],
        'Case' => [
          'Assigned' => 'primary'
        ],
        'Opportunity' => [
          'Proposal' => 'primary',
          'Negotiation' => 'primary'
        ],
        'Task' => [
          'Started' => 'primary',
          'Canceled' => 'danger'
        ]
      ],
      'indexes' => [
        'createdAt' => [
          'type' => 'index',
          'columns' => [
            0 => 'createdAt'
          ]
        ],
        'parent' => [
          'type' => 'index',
          'columns' => [
            0 => 'parentId',
            1 => 'parentType'
          ]
        ],
        'parentAndSuperParent' => [
          'type' => 'index',
          'columns' => [
            0 => 'parentId',
            1 => 'parentType',
            2 => 'superParentId',
            3 => 'superParentType'
          ]
        ],
        'createdByNumber' => [
          'columns' => [
            0 => 'createdById',
            1 => 'number'
          ]
        ]
      ]
    ],
    'Notification' => [
      'fields' => [
        'number' => [
          'type' => 'autoincrement',
          'dbType' => 'bigint',
          'index' => true
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'noteData' => [
          'type' => 'jsonObject',
          'notStorable' => true
        ],
        'type' => [
          'type' => 'varchar'
        ],
        'read' => [
          'type' => 'bool'
        ],
        'emailIsProcessed' => [
          'type' => 'bool'
        ],
        'user' => [
          'type' => 'link'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'message' => [
          'type' => 'text'
        ],
        'related' => [
          'type' => 'linkParent',
          'readOnly' => true
        ],
        'relatedParent' => [
          'type' => 'linkParent',
          'readOnly' => true
        ]
      ],
      'links' => [
        'user' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'related' => [
          'type' => 'belongsToParent'
        ],
        'relatedParent' => [
          'type' => 'belongsToParent'
        ]
      ],
      'collection' => [
        'orderBy' => 'number',
        'order' => 'desc',
        'sortBy' => 'number',
        'asc' => false
      ],
      'indexes' => [
        'createdAt' => [
          'type' => 'index',
          'columns' => [
            0 => 'createdAt'
          ]
        ],
        'user' => [
          'type' => 'index',
          'columns' => [
            0 => 'userId',
            1 => 'createdAt'
          ]
        ]
      ]
    ],
    'PasswordChangeRequest' => [
      'fields' => [
        'requestId' => [
          'type' => 'varchar',
          'maxLength' => 64,
          'index' => true
        ],
        'user' => [
          'type' => 'link',
          'readOnly' => true,
          'index' => true
        ],
        'url' => [
          'type' => 'url'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ]
      ],
      'links' => [
        'user' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ]
    ],
    'PhoneNumber' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 36,
          'index' => true
        ],
        'type' => [
          'type' => 'enum'
        ],
        'numeric' => [
          'type' => 'varchar',
          'maxLength' => 36,
          'index' => true
        ],
        'invalid' => [
          'type' => 'bool'
        ],
        'optOut' => [
          'type' => 'bool'
        ],
        'primary' => [
          'type' => 'bool',
          'notStorable' => true
        ]
      ],
      'links' => [],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'Portal' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'logo' => [
          'type' => 'image'
        ],
        'url' => [
          'type' => 'url',
          'notStorable' => true,
          'readOnly' => true
        ],
        'customId' => [
          'type' => 'varchar',
          'maxLength' => 36,
          'view' => 'views/portal/fields/custom-id',
          'trim' => true,
          'index' => true
        ],
        'isActive' => [
          'type' => 'bool',
          'default' => true
        ],
        'isDefault' => [
          'type' => 'bool',
          'default' => false,
          'notStorable' => true
        ],
        'portalRoles' => [
          'type' => 'linkMultiple'
        ],
        'tabList' => [
          'type' => 'array',
          'view' => 'views/portal/fields/tab-list',
          'validationList' => [
            0 => 'array',
            1 => 'required'
          ]
        ],
        'quickCreateList' => [
          'type' => 'array',
          'translation' => 'Global.scopeNames',
          'view' => 'views/portal/fields/quick-create-list'
        ],
        'companyLogo' => [
          'type' => 'image'
        ],
        'theme' => [
          'type' => 'enum',
          'view' => 'views/preferences/fields/theme',
          'translation' => 'Global.themes'
        ],
        'themeParams' => [
          'type' => 'jsonObject'
        ],
        'language' => [
          'type' => 'enum',
          'view' => 'views/preferences/fields/language'
        ],
        'timeZone' => [
          'type' => 'enum',
          'view' => 'views/preferences/fields/time-zone'
        ],
        'dateFormat' => [
          'type' => 'enum',
          'view' => 'views/preferences/fields/date-format'
        ],
        'timeFormat' => [
          'type' => 'enum',
          'view' => 'views/preferences/fields/time-format'
        ],
        'weekStart' => [
          'type' => 'enumInt',
          'options' => [
            0 => 0,
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4,
            5 => 5,
            6 => 6
          ],
          'default' => -1,
          'view' => 'views/preferences/fields/week-start'
        ],
        'defaultCurrency' => [
          'type' => 'enum',
          'view' => 'views/preferences/fields/default-currency'
        ],
        'dashboardLayout' => [
          'type' => 'jsonArray',
          'view' => 'views/settings/fields/dashboard-layout'
        ],
        'dashletsOptions' => [
          'type' => 'jsonObject',
          'disabled' => true
        ],
        'customUrl' => [
          'type' => 'url'
        ],
        'layoutSet' => [
          'type' => 'link',
          'tooltip' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'users' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'portals'
        ],
        'portalRoles' => [
          'type' => 'hasMany',
          'entity' => 'PortalRole',
          'foreign' => 'portals'
        ],
        'notes' => [
          'type' => 'hasMany',
          'entity' => 'Note',
          'foreign' => 'portals'
        ],
        'layoutSet' => [
          'type' => 'belongsTo',
          'entity' => 'LayoutSet',
          'foreign' => 'portals'
        ],
        'articles' => [
          'type' => 'hasMany',
          'entity' => 'KnowledgeBaseArticle',
          'foreign' => 'portals'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'PortalRole' => [
      'fields' => [
        'name' => [
          'maxLength' => 150,
          'required' => true,
          'type' => 'varchar',
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'fieldData' => [
          'type' => 'jsonObject'
        ],
        'exportPermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'yes',
            2 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'massUpdatePermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'yes',
            2 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ]
      ],
      'links' => [
        'users' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'portalRoles'
        ],
        'portals' => [
          'type' => 'hasMany',
          'entity' => 'Portal',
          'foreign' => 'portalRoles'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'Preferences' => [
      'fields' => [
        'timeZone' => [
          'type' => 'enum',
          'view' => 'views/preferences/fields/time-zone'
        ],
        'dateFormat' => [
          'type' => 'enum',
          'view' => 'views/preferences/fields/date-format'
        ],
        'timeFormat' => [
          'type' => 'enum',
          'view' => 'views/preferences/fields/time-format'
        ],
        'weekStart' => [
          'type' => 'enumInt',
          'options' => [
            0 => 0,
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4,
            5 => 5,
            6 => 6
          ],
          'default' => -1,
          'view' => 'views/preferences/fields/week-start'
        ],
        'defaultCurrency' => [
          'type' => 'enum',
          'view' => 'views/preferences/fields/default-currency'
        ],
        'thousandSeparator' => [
          'type' => 'varchar',
          'default' => ',',
          'maxLength' => 1,
          'view' => 'views/settings/fields/thousand-separator'
        ],
        'decimalMark' => [
          'type' => 'varchar',
          'default' => '.',
          'required' => true,
          'maxLength' => 1
        ],
        'dashboardLayout' => [
          'type' => 'jsonArray',
          'view' => 'views/settings/fields/dashboard-layout'
        ],
        'dashletsOptions' => [
          'type' => 'jsonObject'
        ],
        'importParams' => [
          'type' => 'jsonObject'
        ],
        'sharedCalendarUserList' => [
          'type' => 'jsonArray'
        ],
        'calendarViewDataList' => [
          'type' => 'jsonArray'
        ],
        'presetFilters' => [
          'type' => 'jsonObject'
        ],
        'smtpEmailAddress' => [
          'type' => 'varchar',
          'readOnly' => true,
          'notStorable' => true,
          'view' => 'views/preferences/fields/smtp-email-address',
          'trim' => true
        ],
        'smtpServer' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'smtpPort' => [
          'type' => 'int',
          'min' => 0,
          'max' => 65535,
          'default' => 25
        ],
        'smtpAuth' => [
          'type' => 'bool',
          'default' => false
        ],
        'smtpSecurity' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'SSL',
            2 => 'TLS'
          ]
        ],
        'smtpUsername' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'smtpPassword' => [
          'type' => 'password'
        ],
        'language' => [
          'type' => 'enum',
          'view' => 'views/preferences/fields/language'
        ],
        'exportDelimiter' => [
          'type' => 'varchar',
          'default' => ',',
          'required' => true,
          'maxLength' => 1,
          'options' => [
            0 => ',',
            1 => ';',
            2 => '\\t',
            3 => '|'
          ]
        ],
        'receiveAssignmentEmailNotifications' => [
          'type' => 'bool',
          'default' => true
        ],
        'receiveMentionEmailNotifications' => [
          'type' => 'bool',
          'default' => true
        ],
        'receiveStreamEmailNotifications' => [
          'type' => 'bool',
          'default' => true
        ],
        'assignmentNotificationsIgnoreEntityTypeList' => [
          'type' => 'checklist',
          'translation' => 'Global.scopeNamesPlural',
          'view' => 'views/preferences/fields/assignment-notifications-ignore-entity-type-list',
          'default' => []
        ],
        'assignmentEmailNotificationsIgnoreEntityTypeList' => [
          'type' => 'checklist',
          'translation' => 'Global.scopeNamesPlural',
          'view' => 'views/preferences/fields/assignment-email-notifications-ignore-entity-type-list'
        ],
        'autoFollowEntityTypeList' => [
          'type' => 'multiEnum',
          'view' => 'views/preferences/fields/auto-follow-entity-type-list',
          'translation' => 'Global.scopeNamesPlural',
          'notStorable' => true,
          'tooltip' => true
        ],
        'signature' => [
          'type' => 'wysiwyg',
          'view' => 'views/preferences/fields/signature',
          'default' => ''
        ],
        'defaultReminders' => [
          'type' => 'jsonArray',
          'view' => 'crm:views/meeting/fields/reminders',
          'default' => []
        ],
        'theme' => [
          'type' => 'enum',
          'view' => 'views/preferences/fields/theme',
          'translation' => 'Global.themes'
        ],
        'themeParams' => [
          'type' => 'jsonObject'
        ],
        'useCustomTabList' => [
          'type' => 'bool',
          'default' => false
        ],
        'tabList' => [
          'type' => 'array',
          'view' => 'views/preferences/fields/tab-list',
          'validationList' => [
            0 => 'array',
            1 => 'required'
          ]
        ],
        'emailReplyToAllByDefault' => [
          'type' => 'bool',
          'default' => true
        ],
        'emailReplyForceHtml' => [
          'type' => 'bool',
          'default' => false
        ],
        'isPortalUser' => [
          'type' => 'bool',
          'notStorable' => true
        ],
        'doNotFillAssignedUserIfNotRequired' => [
          'type' => 'bool',
          'tooltip' => true,
          'default' => true
        ],
        'followEntityOnStreamPost' => [
          'type' => 'bool',
          'default' => true
        ],
        'followCreatedEntities' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'followCreatedEntityTypeList' => [
          'type' => 'multiEnum',
          'view' => 'views/preferences/fields/auto-follow-entity-type-list',
          'translation' => 'Global.scopeNamesPlural',
          'default' => [],
          'tooltip' => true
        ],
        'emailUseExternalClient' => [
          'type' => 'bool',
          'default' => false
        ],
        'scopeColorsDisabled' => [
          'type' => 'bool',
          'default' => false
        ],
        'tabColorsDisabled' => [
          'type' => 'bool',
          'default' => false
        ]
      ],
      'noDeletedAttribute' => true
    ],
    'Role' => [
      'fields' => [
        'name' => [
          'maxLength' => 150,
          'required' => true,
          'type' => 'varchar',
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'assignmentPermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'all',
            2 => 'team',
            3 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'userPermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'all',
            2 => 'team',
            3 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'portalPermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'yes',
            2 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'groupEmailAccountPermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'all',
            2 => 'team',
            3 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'exportPermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'yes',
            2 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'massUpdatePermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'yes',
            2 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'dataPrivacyPermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'yes',
            2 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'followerManagementPermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'all',
            2 => 'team',
            3 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'fieldData' => [
          'type' => 'jsonObject'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ]
      ],
      'links' => [
        'users' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'roles'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'foreign' => 'roles'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'ScheduledJob' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'job' => [
          'type' => 'varchar',
          'required' => true,
          'view' => 'views/scheduled-job/fields/job'
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Active',
            1 => 'Inactive'
          ],
          'default' => 'Active'
        ],
        'scheduling' => [
          'type' => 'varchar',
          'required' => true,
          'view' => 'views/scheduled-job/fields/scheduling',
          'tooltip' => true,
          'trim' => true
        ],
        'lastRun' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'isInternal' => [
          'type' => 'bool',
          'readOnly' => true,
          'disabled' => true,
          'default' => false
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'log' => [
          'type' => 'hasMany',
          'entity' => 'ScheduledJobLogRecord',
          'foreign' => 'scheduledJob'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ],
      'jobSchedulingMap' => [
        'CheckInboundEmails' => '*/2 * * * *',
        'CheckEmailAccounts' => '*/1 * * * *',
        'SendEmailReminders' => '*/2 * * * *',
        'Cleanup' => '1 1 * * 0',
        'AuthTokenControl' => '*/6 * * * *',
        'SendEmailNotifications' => '*/2 * * * *',
        'ProcessWebhookQueue' => '*/5 * * * *',
        'ProcessMassEmail' => '15 * * * *',
        'ControlKnowledgeBaseArticleStatus' => '10 1 * * *'
      ],
      'jobs' => [
        'SubmitPopupReminders' => [
          'name' => 'Submit Popup Reminders',
          'isSystem' => true,
          'scheduling' => '* * * * *'
        ]
      ]
    ],
    'ScheduledJobLogRecord' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'readOnly' => true
        ],
        'status' => [
          'type' => 'enum',
          'readOnly' => true,
          'options' => [
            0 => 'Success',
            1 => 'Failed'
          ],
          'style' => [
            'Success' => 'success',
            'Failed' => 'danger'
          ]
        ],
        'executionTime' => [
          'type' => 'datetime',
          'readOnly' => true,
          'hasSeconds' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'scheduledJob' => [
          'type' => 'link'
        ],
        'target' => [
          'type' => 'linkParent'
        ]
      ],
      'links' => [
        'scheduledJob' => [
          'type' => 'belongsTo',
          'entity' => 'ScheduledJob'
        ]
      ],
      'collection' => [
        'orderBy' => 'executionTime',
        'order' => 'desc',
        'sortBy' => 'executionTime',
        'asc' => false
      ],
      'indexes' => [
        'scheduledJobIdExecutionTime' => [
          'type' => 'index',
          'columns' => [
            0 => 'scheduledJobId',
            1 => 'executionTime'
          ]
        ]
      ]
    ],
    'Settings' => [
      'fields' => [
        'useCache' => [
          'type' => 'bool',
          'default' => true,
          'tooltip' => true
        ],
        'recordsPerPage' => [
          'type' => 'int',
          'min' => 1,
          'max' => 200,
          'default' => 20,
          'required' => true,
          'tooltip' => true
        ],
        'recordsPerPageSmall' => [
          'type' => 'int',
          'min' => 1,
          'max' => 100,
          'default' => 5,
          'required' => true,
          'tooltip' => true
        ],
        'recordsPerPageSelect' => [
          'type' => 'int',
          'min' => 1,
          'max' => 100,
          'default' => 10,
          'required' => true,
          'tooltip' => true
        ],
        'timeZone' => [
          'type' => 'enum',
          'default' => 'UTC',
          'options' => [
            0 => 'UTC',
            1 => 'Africa/Abidjan',
            2 => 'Africa/Accra',
            3 => 'Africa/Addis_Ababa',
            4 => 'Africa/Algiers',
            5 => 'Africa/Asmara',
            6 => 'Africa/Bamako',
            7 => 'Africa/Bangui',
            8 => 'Africa/Banjul',
            9 => 'Africa/Bissau',
            10 => 'Africa/Blantyre',
            11 => 'Africa/Brazzaville',
            12 => 'Africa/Bujumbura',
            13 => 'Africa/Cairo',
            14 => 'Africa/Casablanca',
            15 => 'Africa/Ceuta',
            16 => 'Africa/Conakry',
            17 => 'Africa/Dakar',
            18 => 'Africa/Dar_es_Salaam',
            19 => 'Africa/Djibouti',
            20 => 'Africa/Douala',
            21 => 'Africa/El_Aaiun',
            22 => 'Africa/Freetown',
            23 => 'Africa/Gaborone',
            24 => 'Africa/Harare',
            25 => 'Africa/Johannesburg',
            26 => 'Africa/Juba',
            27 => 'Africa/Kampala',
            28 => 'Africa/Khartoum',
            29 => 'Africa/Kigali',
            30 => 'Africa/Kinshasa',
            31 => 'Africa/Lagos',
            32 => 'Africa/Libreville',
            33 => 'Africa/Lome',
            34 => 'Africa/Luanda',
            35 => 'Africa/Lubumbashi',
            36 => 'Africa/Lusaka',
            37 => 'Africa/Malabo',
            38 => 'Africa/Maputo',
            39 => 'Africa/Maseru',
            40 => 'Africa/Mbabane',
            41 => 'Africa/Mogadishu',
            42 => 'Africa/Monrovia',
            43 => 'Africa/Nairobi',
            44 => 'Africa/Ndjamena',
            45 => 'Africa/Niamey',
            46 => 'Africa/Nouakchott',
            47 => 'Africa/Ouagadougou',
            48 => 'Africa/Porto-Novo',
            49 => 'Africa/Sao_Tome',
            50 => 'Africa/Tripoli',
            51 => 'Africa/Tunis',
            52 => 'Africa/Windhoek',
            53 => 'America/Adak',
            54 => 'America/Anchorage',
            55 => 'America/Anguilla',
            56 => 'America/Antigua',
            57 => 'America/Araguaina',
            58 => 'America/Argentina/Buenos_Aires',
            59 => 'America/Argentina/Catamarca',
            60 => 'America/Argentina/Cordoba',
            61 => 'America/Argentina/Jujuy',
            62 => 'America/Argentina/La_Rioja',
            63 => 'America/Argentina/Mendoza',
            64 => 'America/Argentina/Rio_Gallegos',
            65 => 'America/Argentina/Salta',
            66 => 'America/Argentina/San_Juan',
            67 => 'America/Argentina/San_Luis',
            68 => 'America/Argentina/Tucuman',
            69 => 'America/Argentina/Ushuaia',
            70 => 'America/Aruba',
            71 => 'America/Asuncion',
            72 => 'America/Atikokan',
            73 => 'America/Bahia',
            74 => 'America/Bahia_Banderas',
            75 => 'America/Barbados',
            76 => 'America/Belem',
            77 => 'America/Belize',
            78 => 'America/Blanc-Sablon',
            79 => 'America/Boa_Vista',
            80 => 'America/Bogota',
            81 => 'America/Boise',
            82 => 'America/Cambridge_Bay',
            83 => 'America/Campo_Grande',
            84 => 'America/Cancun',
            85 => 'America/Caracas',
            86 => 'America/Cayenne',
            87 => 'America/Cayman',
            88 => 'America/Chicago',
            89 => 'America/Chihuahua',
            90 => 'America/Costa_Rica',
            91 => 'America/Creston',
            92 => 'America/Cuiaba',
            93 => 'America/Curacao',
            94 => 'America/Danmarkshavn',
            95 => 'America/Dawson',
            96 => 'America/Dawson_Creek',
            97 => 'America/Denver',
            98 => 'America/Detroit',
            99 => 'America/Dominica',
            100 => 'America/Edmonton',
            101 => 'America/Eirunepe',
            102 => 'America/El_Salvador',
            103 => 'America/Fortaleza',
            104 => 'America/Glace_Bay',
            105 => 'America/Godthab',
            106 => 'America/Goose_Bay',
            107 => 'America/Grand_Turk',
            108 => 'America/Grenada',
            109 => 'America/Guadeloupe',
            110 => 'America/Guatemala',
            111 => 'America/Guayaquil',
            112 => 'America/Guyana',
            113 => 'America/Halifax',
            114 => 'America/Havana',
            115 => 'America/Hermosillo',
            116 => 'America/Indiana/Indianapolis',
            117 => 'America/Indiana/Knox',
            118 => 'America/Indiana/Marengo',
            119 => 'America/Indiana/Petersburg',
            120 => 'America/Indiana/Tell_City',
            121 => 'America/Indiana/Vevay',
            122 => 'America/Indiana/Vincennes',
            123 => 'America/Indiana/Winamac',
            124 => 'America/Inuvik',
            125 => 'America/Iqaluit',
            126 => 'America/Jamaica',
            127 => 'America/Juneau',
            128 => 'America/Kentucky/Louisville',
            129 => 'America/Kentucky/Monticello',
            130 => 'America/Kralendijk',
            131 => 'America/La_Paz',
            132 => 'America/Lima',
            133 => 'America/Los_Angeles',
            134 => 'America/Lower_Princes',
            135 => 'America/Maceio',
            136 => 'America/Managua',
            137 => 'America/Manaus',
            138 => 'America/Marigot',
            139 => 'America/Martinique',
            140 => 'America/Matamoros',
            141 => 'America/Mazatlan',
            142 => 'America/Menominee',
            143 => 'America/Merida',
            144 => 'America/Metlakatla',
            145 => 'America/Mexico_City',
            146 => 'America/Miquelon',
            147 => 'America/Moncton',
            148 => 'America/Monterrey',
            149 => 'America/Montevideo',
            150 => 'America/Montserrat',
            151 => 'America/Nassau',
            152 => 'America/New_York',
            153 => 'America/Nipigon',
            154 => 'America/Nome',
            155 => 'America/Noronha',
            156 => 'America/North_Dakota/Beulah',
            157 => 'America/North_Dakota/Center',
            158 => 'America/North_Dakota/New_Salem',
            159 => 'America/Ojinaga',
            160 => 'America/Panama',
            161 => 'America/Pangnirtung',
            162 => 'America/Paramaribo',
            163 => 'America/Phoenix',
            164 => 'America/Port-au-Prince',
            165 => 'America/Port_of_Spain',
            166 => 'America/Porto_Velho',
            167 => 'America/Puerto_Rico',
            168 => 'America/Rainy_River',
            169 => 'America/Rankin_Inlet',
            170 => 'America/Recife',
            171 => 'America/Regina',
            172 => 'America/Resolute',
            173 => 'America/Rio_Branco',
            174 => 'America/Santa_Isabel',
            175 => 'America/Santarem',
            176 => 'America/Santiago',
            177 => 'America/Santo_Domingo',
            178 => 'America/Sao_Paulo',
            179 => 'America/Scoresbysund',
            180 => 'America/Sitka',
            181 => 'America/St_Barthelemy',
            182 => 'America/St_Johns',
            183 => 'America/St_Kitts',
            184 => 'America/St_Lucia',
            185 => 'America/St_Thomas',
            186 => 'America/St_Vincent',
            187 => 'America/Swift_Current',
            188 => 'America/Tegucigalpa',
            189 => 'America/Thule',
            190 => 'America/Thunder_Bay',
            191 => 'America/Tijuana',
            192 => 'America/Toronto',
            193 => 'America/Tortola',
            194 => 'America/Vancouver',
            195 => 'America/Whitehorse',
            196 => 'America/Winnipeg',
            197 => 'America/Yakutat',
            198 => 'America/Yellowknife',
            199 => 'Antarctica/Casey',
            200 => 'Antarctica/Davis',
            201 => 'Antarctica/DumontDUrville',
            202 => 'Antarctica/Macquarie',
            203 => 'Antarctica/Mawson',
            204 => 'Antarctica/McMurdo',
            205 => 'Antarctica/Palmer',
            206 => 'Antarctica/Rothera',
            207 => 'Antarctica/Syowa',
            208 => 'Antarctica/Vostok',
            209 => 'Arctic/Longyearbyen',
            210 => 'Asia/Aden',
            211 => 'Asia/Almaty',
            212 => 'Asia/Amman',
            213 => 'Asia/Anadyr',
            214 => 'Asia/Aqtau',
            215 => 'Asia/Aqtobe',
            216 => 'Asia/Ashgabat',
            217 => 'Asia/Baghdad',
            218 => 'Asia/Bahrain',
            219 => 'Asia/Baku',
            220 => 'Asia/Bangkok',
            221 => 'Asia/Beirut',
            222 => 'Asia/Bishkek',
            223 => 'Asia/Brunei',
            224 => 'Asia/Choibalsan',
            225 => 'Asia/Chongqing',
            226 => 'Asia/Colombo',
            227 => 'Asia/Damascus',
            228 => 'Asia/Dhaka',
            229 => 'Asia/Dili',
            230 => 'Asia/Dubai',
            231 => 'Asia/Dushanbe',
            232 => 'Asia/Gaza',
            233 => 'Asia/Harbin',
            234 => 'Asia/Hebron',
            235 => 'Asia/Ho_Chi_Minh',
            236 => 'Asia/Hong_Kong',
            237 => 'Asia/Hovd',
            238 => 'Asia/Irkutsk',
            239 => 'Asia/Jakarta',
            240 => 'Asia/Jayapura',
            241 => 'Asia/Jerusalem',
            242 => 'Asia/Kabul',
            243 => 'Asia/Kamchatka',
            244 => 'Asia/Karachi',
            245 => 'Asia/Kashgar',
            246 => 'Asia/Kathmandu',
            247 => 'Asia/Khandyga',
            248 => 'Asia/Kolkata',
            249 => 'Asia/Krasnoyarsk',
            250 => 'Asia/Kuala_Lumpur',
            251 => 'Asia/Kuching',
            252 => 'Asia/Kuwait',
            253 => 'Asia/Macau',
            254 => 'Asia/Magadan',
            255 => 'Asia/Makassar',
            256 => 'Asia/Manila',
            257 => 'Asia/Muscat',
            258 => 'Asia/Nicosia',
            259 => 'Asia/Novokuznetsk',
            260 => 'Asia/Novosibirsk',
            261 => 'Asia/Omsk',
            262 => 'Asia/Oral',
            263 => 'Asia/Phnom_Penh',
            264 => 'Asia/Pontianak',
            265 => 'Asia/Pyongyang',
            266 => 'Asia/Qatar',
            267 => 'Asia/Qyzylorda',
            268 => 'Asia/Rangoon',
            269 => 'Asia/Riyadh',
            270 => 'Asia/Sakhalin',
            271 => 'Asia/Samarkand',
            272 => 'Asia/Seoul',
            273 => 'Asia/Shanghai',
            274 => 'Asia/Singapore',
            275 => 'Asia/Taipei',
            276 => 'Asia/Tashkent',
            277 => 'Asia/Tbilisi',
            278 => 'Asia/Tehran',
            279 => 'Asia/Thimphu',
            280 => 'Asia/Tokyo',
            281 => 'Asia/Ulaanbaatar',
            282 => 'Asia/Urumqi',
            283 => 'Asia/Ust-Nera',
            284 => 'Asia/Vientiane',
            285 => 'Asia/Vladivostok',
            286 => 'Asia/Yakutsk',
            287 => 'Asia/Yekaterinburg',
            288 => 'Asia/Yerevan',
            289 => 'Atlantic/Azores',
            290 => 'Atlantic/Bermuda',
            291 => 'Atlantic/Canary',
            292 => 'Atlantic/Cape_Verde',
            293 => 'Atlantic/Faroe',
            294 => 'Atlantic/Madeira',
            295 => 'Atlantic/Reykjavik',
            296 => 'Atlantic/South_Georgia',
            297 => 'Atlantic/St_Helena',
            298 => 'Atlantic/Stanley',
            299 => 'Australia/Adelaide',
            300 => 'Australia/Brisbane',
            301 => 'Australia/Broken_Hill',
            302 => 'Australia/Currie',
            303 => 'Australia/Darwin',
            304 => 'Australia/Eucla',
            305 => 'Australia/Hobart',
            306 => 'Australia/Lindeman',
            307 => 'Australia/Lord_Howe',
            308 => 'Australia/Melbourne',
            309 => 'Australia/Perth',
            310 => 'Australia/Sydney',
            311 => 'Europe/Amsterdam',
            312 => 'Europe/Andorra',
            313 => 'Europe/Athens',
            314 => 'Europe/Belgrade',
            315 => 'Europe/Berlin',
            316 => 'Europe/Bratislava',
            317 => 'Europe/Brussels',
            318 => 'Europe/Bucharest',
            319 => 'Europe/Budapest',
            320 => 'Europe/Busingen',
            321 => 'Europe/Chisinau',
            322 => 'Europe/Copenhagen',
            323 => 'Europe/Dublin',
            324 => 'Europe/Gibraltar',
            325 => 'Europe/Guernsey',
            326 => 'Europe/Helsinki',
            327 => 'Europe/Isle_of_Man',
            328 => 'Europe/Istanbul',
            329 => 'Europe/Jersey',
            330 => 'Europe/Kaliningrad',
            331 => 'Europe/Kiev',
            332 => 'Europe/Lisbon',
            333 => 'Europe/Ljubljana',
            334 => 'Europe/London',
            335 => 'Europe/Luxembourg',
            336 => 'Europe/Madrid',
            337 => 'Europe/Malta',
            338 => 'Europe/Mariehamn',
            339 => 'Europe/Minsk',
            340 => 'Europe/Monaco',
            341 => 'Europe/Moscow',
            342 => 'Europe/Oslo',
            343 => 'Europe/Paris',
            344 => 'Europe/Podgorica',
            345 => 'Europe/Prague',
            346 => 'Europe/Riga',
            347 => 'Europe/Rome',
            348 => 'Europe/Samara',
            349 => 'Europe/San_Marino',
            350 => 'Europe/Sarajevo',
            351 => 'Europe/Simferopol',
            352 => 'Europe/Skopje',
            353 => 'Europe/Sofia',
            354 => 'Europe/Stockholm',
            355 => 'Europe/Tallinn',
            356 => 'Europe/Tirane',
            357 => 'Europe/Uzhgorod',
            358 => 'Europe/Vaduz',
            359 => 'Europe/Vatican',
            360 => 'Europe/Vienna',
            361 => 'Europe/Vilnius',
            362 => 'Europe/Volgograd',
            363 => 'Europe/Warsaw',
            364 => 'Europe/Zagreb',
            365 => 'Europe/Zaporozhye',
            366 => 'Europe/Zurich',
            367 => 'Indian/Antananarivo',
            368 => 'Indian/Chagos',
            369 => 'Indian/Christmas',
            370 => 'Indian/Cocos',
            371 => 'Indian/Comoro',
            372 => 'Indian/Kerguelen',
            373 => 'Indian/Mahe',
            374 => 'Indian/Maldives',
            375 => 'Indian/Mauritius',
            376 => 'Indian/Mayotte',
            377 => 'Indian/Reunion',
            378 => 'Pacific/Apia',
            379 => 'Pacific/Auckland',
            380 => 'Pacific/Chatham',
            381 => 'Pacific/Chuuk',
            382 => 'Pacific/Easter',
            383 => 'Pacific/Efate',
            384 => 'Pacific/Enderbury',
            385 => 'Pacific/Fakaofo',
            386 => 'Pacific/Fiji',
            387 => 'Pacific/Funafuti',
            388 => 'Pacific/Galapagos',
            389 => 'Pacific/Gambier',
            390 => 'Pacific/Guadalcanal',
            391 => 'Pacific/Guam',
            392 => 'Pacific/Honolulu',
            393 => 'Pacific/Johnston',
            394 => 'Pacific/Kiritimati',
            395 => 'Pacific/Kosrae',
            396 => 'Pacific/Kwajalein',
            397 => 'Pacific/Majuro',
            398 => 'Pacific/Marquesas',
            399 => 'Pacific/Midway',
            400 => 'Pacific/Nauru',
            401 => 'Pacific/Niue',
            402 => 'Pacific/Norfolk',
            403 => 'Pacific/Noumea',
            404 => 'Pacific/Pago_Pago',
            405 => 'Pacific/Palau',
            406 => 'Pacific/Pitcairn',
            407 => 'Pacific/Pohnpei',
            408 => 'Pacific/Port_Moresby',
            409 => 'Pacific/Rarotonga',
            410 => 'Pacific/Saipan',
            411 => 'Pacific/Tahiti',
            412 => 'Pacific/Tarawa',
            413 => 'Pacific/Tongatapu',
            414 => 'Pacific/Wake',
            415 => 'Pacific/Wallis'
          ]
        ],
        'dateFormat' => [
          'type' => 'enum',
          'default' => 'DD.MM.YYYY',
          'view' => 'views/settings/fields/date-format'
        ],
        'timeFormat' => [
          'type' => 'enum',
          'default' => 'HH:mm',
          'view' => 'views/settings/fields/time-format'
        ],
        'weekStart' => [
          'type' => 'enumInt',
          'options' => [
            0 => 0,
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4,
            5 => 5,
            6 => 6
          ],
          'default' => 0,
          'translation' => 'Global.lists.dayNames'
        ],
        'fiscalYearShift' => [
          'type' => 'enumInt',
          'default' => 0,
          'view' => 'views/settings/fields/fiscal-year-shift'
        ],
        'thousandSeparator' => [
          'type' => 'varchar',
          'default' => ',',
          'maxLength' => 1,
          'view' => 'views/settings/fields/thousand-separator'
        ],
        'decimalMark' => [
          'type' => 'varchar',
          'default' => '.',
          'required' => true,
          'maxLength' => 1
        ],
        'currencyList' => [
          'type' => 'multiEnum',
          'default' => [
            0 => 'USD',
            1 => 'EUR'
          ],
          'required' => true,
          'view' => 'views/settings/fields/currency-list',
          'tooltip' => true
        ],
        'defaultCurrency' => [
          'type' => 'enum',
          'default' => 'USD',
          'required' => true,
          'view' => 'views/settings/fields/default-currency'
        ],
        'baseCurrency' => [
          'type' => 'enum',
          'default' => 'USD',
          'required' => true,
          'view' => 'views/settings/fields/default-currency'
        ],
        'currencyRates' => [
          'type' => 'base',
          'view' => 'views/settings/fields/currency-rates'
        ],
        'outboundEmailIsShared' => [
          'type' => 'bool',
          'default' => false,
          'tooltip' => true
        ],
        'outboundEmailFromName' => [
          'type' => 'varchar',
          'default' => 'EspoCRM',
          'trim' => true
        ],
        'outboundEmailFromAddress' => [
          'type' => 'varchar',
          'default' => 'crm@example.com',
          'trim' => true,
          'tooltip' => true,
          'view' => 'views/settings/fields/outbound-email-from-address'
        ],
        'emailAddressLookupEntityTypeList' => [
          'type' => 'multiEnum',
          'tooltip' => true,
          'view' => 'views/settings/fields/email-address-lookup-entity-type-list'
        ],
        'smtpServer' => [
          'type' => 'varchar',
          'tooltip' => true,
          'trim' => true
        ],
        'smtpPort' => [
          'type' => 'int',
          'min' => 0,
          'max' => 65535,
          'default' => 587
        ],
        'smtpAuth' => [
          'type' => 'bool'
        ],
        'smtpSecurity' => [
          'type' => 'enum',
          'default' => 'TLS',
          'options' => [
            0 => '',
            1 => 'SSL',
            2 => 'TLS'
          ]
        ],
        'smtpUsername' => [
          'type' => 'varchar'
        ],
        'smtpPassword' => [
          'type' => 'password'
        ],
        'tabList' => [
          'type' => 'array',
          'view' => 'views/settings/fields/tab-list',
          'validationList' => [
            0 => 'array',
            1 => 'required'
          ]
        ],
        'quickCreateList' => [
          'type' => 'array',
          'translation' => 'Global.scopeNames',
          'view' => 'views/settings/fields/quick-create-list'
        ],
        'language' => [
          'type' => 'enum',
          'default' => 'en_US',
          'view' => 'views/settings/fields/language',
          'isSorted' => true
        ],
        'globalSearchEntityList' => [
          'type' => 'multiEnum',
          'translation' => 'Global.scopeNames',
          'view' => 'views/settings/fields/global-search-entity-list',
          'tooltip' => true
        ],
        'exportDelimiter' => [
          'type' => 'varchar',
          'default' => ',',
          'required' => true,
          'maxLength' => 1
        ],
        'companyLogo' => [
          'type' => 'image'
        ],
        'authenticationMethod' => [
          'type' => 'enum',
          'default' => 'Espo',
          'view' => 'views/settings/fields/authentication-method'
        ],
        'auth2FA' => [
          'type' => 'bool'
        ],
        'auth2FAMethodList' => [
          'type' => 'multiEnum',
          'view' => 'views/settings/fields/auth-two-fa-method-list'
        ],
        'auth2FAForced' => [
          'type' => 'bool'
        ],
        'passwordRecoveryDisabled' => [
          'type' => 'bool'
        ],
        'passwordRecoveryForAdminDisabled' => [
          'type' => 'bool'
        ],
        'passwordRecoveryForInternalUsersDisabled' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'passwordRecoveryNoExposure' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'passwordGenerateLength' => [
          'type' => 'int',
          'min' => 6,
          'max' => 150,
          'required' => true
        ],
        'passwordStrengthLength' => [
          'type' => 'int',
          'max' => 150,
          'min' => 1
        ],
        'passwordStrengthLetterCount' => [
          'type' => 'int',
          'max' => 150,
          'min' => 0
        ],
        'passwordStrengthNumberCount' => [
          'type' => 'int',
          'max' => 150,
          'min' => 0
        ],
        'passwordStrengthBothCases' => [
          'type' => 'bool'
        ],
        'ldapHost' => [
          'type' => 'varchar'
        ],
        'ldapPort' => [
          'type' => 'varchar',
          'default' => 389
        ],
        'ldapSecurity' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'SSL',
            2 => 'TLS'
          ]
        ],
        'ldapAuth' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'ldapUsername' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapPassword' => [
          'type' => 'password',
          'tooltip' => true
        ],
        'ldapBindRequiresDn' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'ldapUserLoginFilter' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapBaseDn' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapAccountCanonicalForm' => [
          'type' => 'enum',
          'options' => [
            0 => 'Dn',
            1 => 'Username',
            2 => 'Backslash',
            3 => 'Principal'
          ],
          'tooltip' => true
        ],
        'ldapAccountDomainName' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapAccountDomainNameShort' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapAccountFilterFormat' => [
          'type' => 'varchar'
        ],
        'ldapTryUsernameSplit' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'ldapOptReferrals' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'ldapPortalUserLdapAuth' => [
          'type' => 'bool',
          'default' => false,
          'tooltip' => true
        ],
        'ldapCreateEspoUser' => [
          'type' => 'bool',
          'default' => true,
          'tooltip' => true
        ],
        'ldapUserNameAttribute' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapUserObjectClass' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapUserFirstNameAttribute' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapUserLastNameAttribute' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapUserTitleAttribute' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapUserEmailAddressAttribute' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapUserPhoneNumberAttribute' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapUserDefaultTeam' => [
          'type' => 'link',
          'tooltip' => true,
          'entity' => 'Team'
        ],
        'ldapUserTeams' => [
          'type' => 'linkMultiple',
          'tooltip' => true,
          'entity' => 'Team'
        ],
        'ldapPortalUserPortals' => [
          'type' => 'linkMultiple',
          'tooltip' => true,
          'entity' => 'Portal'
        ],
        'ldapPortalUserRoles' => [
          'type' => 'linkMultiple',
          'tooltip' => true,
          'entity' => 'PortalRole'
        ],
        'exportDisabled' => [
          'type' => 'bool',
          'default' => false,
          'tooltip' => true
        ],
        'emailNotificationsDelay' => [
          'type' => 'int',
          'min' => 0,
          'max' => 18000,
          'tooltip' => true
        ],
        'assignmentEmailNotifications' => [
          'type' => 'bool',
          'default' => false
        ],
        'assignmentEmailNotificationsEntityList' => [
          'type' => 'multiEnum',
          'translation' => 'Global.scopeNamesPlural',
          'view' => 'views/settings/fields/assignment-email-notifications-entity-list'
        ],
        'assignmentNotificationsEntityList' => [
          'type' => 'multiEnum',
          'translation' => 'Global.scopeNamesPlural',
          'view' => 'views/settings/fields/assignment-notifications-entity-list'
        ],
        'postEmailNotifications' => [
          'type' => 'bool',
          'default' => false
        ],
        'updateEmailNotifications' => [
          'type' => 'bool',
          'default' => false
        ],
        'mentionEmailNotifications' => [
          'type' => 'bool',
          'default' => false
        ],
        'streamEmailNotifications' => [
          'type' => 'bool',
          'default' => false
        ],
        'portalStreamEmailNotifications' => [
          'type' => 'bool',
          'default' => true
        ],
        'streamEmailNotificationsEntityList' => [
          'type' => 'multiEnum',
          'translation' => 'Global.scopeNamesPlural',
          'view' => 'views/settings/fields/stream-email-notifications-entity-list',
          'tooltip' => true
        ],
        'streamEmailNotificationsTypeList' => [
          'type' => 'multiEnum',
          'options' => [
            0 => 'Post',
            1 => 'Status',
            2 => 'EmailReceived'
          ]
        ],
        'newNotificationCountInTitle' => [
          'type' => 'bool'
        ],
        'b2cMode' => [
          'type' => 'bool',
          'default' => false,
          'tooltip' => true
        ],
        'avatarsDisabled' => [
          'type' => 'bool',
          'default' => false
        ],
        'followCreatedEntities' => [
          'type' => 'bool',
          'default' => false,
          'tooltip' => true
        ],
        'adminPanelIframeUrl' => [
          'type' => 'varchar'
        ],
        'displayListViewRecordCount' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'userThemesDisabled' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'theme' => [
          'type' => 'enum',
          'view' => 'views/settings/fields/theme',
          'translation' => 'Global.themes'
        ],
        'themeParams' => [
          'type' => 'jsonObject'
        ],
        'attachmentUploadMaxSize' => [
          'type' => 'float',
          'min' => 0
        ],
        'attachmentUploadChunkSize' => [
          'type' => 'float',
          'min' => 0
        ],
        'emailMessageMaxSize' => [
          'type' => 'float',
          'min' => 0,
          'tooltip' => true
        ],
        'inboundEmailMaxPortionSize' => [
          'type' => 'int',
          'min' => 1,
          'max' => 500
        ],
        'personalEmailMaxPortionSize' => [
          'type' => 'int',
          'min' => 1,
          'max' => 500
        ],
        'maxEmailAccountCount' => [
          'type' => 'int'
        ],
        'massEmailMaxPerHourCount' => [
          'type' => 'int',
          'min' => 1
        ],
        'massEmailVerp' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'authTokenLifetime' => [
          'type' => 'float',
          'min' => 0,
          'default' => 0,
          'tooltip' => true
        ],
        'authTokenMaxIdleTime' => [
          'type' => 'float',
          'min' => 0,
          'default' => 0,
          'tooltip' => true
        ],
        'authTokenPreventConcurrent' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'dashboardLayout' => [
          'type' => 'jsonArray',
          'view' => 'views/settings/fields/dashboard-layout'
        ],
        'dashletsOptions' => [
          'type' => 'jsonObject',
          'disabled' => true
        ],
        'siteUrl' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'applicationName' => [
          'type' => 'varchar'
        ],
        'readableDateFormatDisabled' => [
          'type' => 'bool'
        ],
        'addressFormat' => [
          'type' => 'enumInt',
          'options' => [
            0 => 1,
            1 => 2,
            2 => 3,
            3 => 4
          ]
        ],
        'addressPreview' => [
          'type' => 'address',
          'notStorable' => true,
          'readOnly' => true,
          'view' => 'views/settings/fields/address-preview'
        ],
        'personNameFormat' => [
          'type' => 'enum',
          'options' => [
            0 => 'firstLast',
            1 => 'lastFirst',
            2 => 'firstMiddleLast',
            3 => 'lastFirstMiddle'
          ]
        ],
        'currencyFormat' => [
          'type' => 'enumInt',
          'options' => [
            0 => 1,
            1 => 2,
            2 => 3
          ]
        ],
        'currencyDecimalPlaces' => [
          'type' => 'int',
          'tooltip' => true,
          'min' => 0,
          'max' => 20
        ],
        'notificationSoundsDisabled' => [
          'type' => 'bool'
        ],
        'calendarEntityList' => [
          'type' => 'multiEnum',
          'view' => 'views/settings/fields/calendar-entity-list',
          'tooltip' => true
        ],
        'activitiesEntityList' => [
          'type' => 'multiEnum',
          'view' => 'views/settings/fields/activities-entity-list',
          'tooltip' => true
        ],
        'historyEntityList' => [
          'type' => 'multiEnum',
          'view' => 'views/settings/fields/history-entity-list',
          'tooltip' => true
        ],
        'busyRangesEntityList' => [
          'type' => 'multiEnum',
          'tooltip' => true,
          'view' => 'views/settings/fields/busy-ranges-entity-list'
        ],
        'googleMapsApiKey' => [
          'type' => 'varchar'
        ],
        'massEmailDisableMandatoryOptOutLink' => [
          'type' => 'bool'
        ],
        'massEmailOpenTracking' => [
          'type' => 'bool'
        ],
        'aclAllowDeleteCreated' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'lastViewedCount' => [
          'type' => 'int',
          'min' => 1,
          'max' => 200,
          'default' => 20,
          'required' => true
        ],
        'adminNotifications' => [
          'type' => 'bool'
        ],
        'adminNotificationsNewVersion' => [
          'type' => 'bool'
        ],
        'adminNotificationsNewExtensionVersion' => [
          'type' => 'bool'
        ],
        'textFilterUseContainsForVarchar' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'scopeColorsDisabled' => [
          'type' => 'bool'
        ],
        'tabColorsDisabled' => [
          'type' => 'bool'
        ],
        'tabIconsDisabled' => [
          'type' => 'bool'
        ],
        'emailAddressIsOptedOutByDefault' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'outboundEmailBccAddress' => [
          'type' => 'varchar',
          'view' => 'views/fields/email-address',
          'trim' => true
        ],
        'cleanupDeletedRecords' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'addressCountryList' => [
          'type' => 'multiEnum',
          'tooltip' => true
        ],
        'addressCityList' => [
          'type' => 'multiEnum',
          'tooltip' => true
        ],
        'addressStateList' => [
          'type' => 'multiEnum',
          'tooltip' => true
        ],
        'jobRunInParallel' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'jobMaxPortion' => [
          'type' => 'int',
          'tooltip' => true
        ],
        'jobPoolConcurrencyNumber' => [
          'type' => 'int',
          'tooltip' => true,
          'min' => 1
        ],
        'daemonInterval' => [
          'type' => 'int',
          'tooltip' => true
        ],
        'daemonMaxProcessNumber' => [
          'type' => 'int',
          'tooltip' => true,
          'min' => 1
        ],
        'daemonProcessTimeout' => [
          'type' => 'int',
          'tooltip' => true
        ],
        'cronDisabled' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'maintenanceMode' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'useWebSocket' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'awsS3Storage' => [
          'type' => 'jsonObject'
        ],
        'outboundSmsFromNumber' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'smsProvider' => [
          'type' => 'enum',
          'view' => 'views/settings/fields/sms-provider'
        ],
        'addressPreviewStreet' => [
          'notStorable' => true,
          'readOnly' => true,
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar'
        ],
        'addressPreviewCity' => [
          'notStorable' => true,
          'readOnly' => true,
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-city',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'addressPreviewState' => [
          'notStorable' => true,
          'readOnly' => true,
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-state',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'addressPreviewCountry' => [
          'notStorable' => true,
          'readOnly' => true,
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-country',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'addressPreviewPostalCode' => [
          'notStorable' => true,
          'readOnly' => true,
          'type' => 'varchar',
          'maxLength' => 40,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'addressPreviewMap' => [
          'notStorable' => true,
          'readOnly' => true,
          'type' => 'map',
          'layoutListDisabled' => true,
          'provider' => 'Google',
          'height' => 300,
          'exportDisabled' => true,
          'importDisabled' => true
        ]
      ]
    ],
    'Sms' => [
      'fields' => [
        'from' => [
          'type' => 'varchar',
          'notStorable' => true,
          'required' => true,
          'textFilterDisabled' => true
        ],
        'fromName' => [
          'type' => 'varchar'
        ],
        'to' => [
          'type' => 'varchar',
          'notStorable' => true,
          'required' => true,
          'textFilterDisabled' => true
        ],
        'fromPhoneNumber' => [
          'type' => 'link',
          'textFilterDisabled' => true
        ],
        'toPhoneNumbers' => [
          'type' => 'linkMultiple'
        ],
        'body' => [
          'type' => 'text'
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Draft',
            1 => 'Sending',
            2 => 'Sent',
            3 => 'Archived',
            4 => 'Failed'
          ],
          'default' => 'Archived',
          'clientReadOnly' => true,
          'style' => [
            'Draft' => 'warning',
            'Failed' => 'danger',
            'Sending' => 'warning'
          ]
        ],
        'parent' => [
          'type' => 'linkParent'
        ],
        'dateSent' => [
          'type' => 'datetime'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'replied' => [
          'type' => 'link',
          'noJoin' => true,
          'readOnly' => true,
          'view' => 'views/email/fields/replied'
        ],
        'replies' => [
          'type' => 'linkMultiple',
          'readOnly' => true,
          'orderBy' => 'dateSent',
          'view' => 'views/email/fields/replies'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam'
        ],
        'parent' => [
          'type' => 'belongsToParent',
          'entityList' => [
            0 => 'Account',
            1 => 'Contact',
            2 => 'Lead',
            3 => 'Opportunity'
          ],
          'foreign' => 'emails'
        ],
        'replied' => [
          'type' => 'belongsTo',
          'entity' => 'Sms',
          'foreign' => 'replies',
          'foreignName' => 'id'
        ],
        'replies' => [
          'type' => 'hasMany',
          'entity' => 'Sms',
          'foreign' => 'replied'
        ],
        'fromPhoneNumber' => [
          'type' => 'belongsTo',
          'entity' => 'PhoneNumber'
        ],
        'toPhoneNumbers' => [
          'type' => 'hasMany',
          'entity' => 'PhoneNumber',
          'relationName' => 'smsPhoneNumber',
          'conditions' => [
            'addressType' => 'to'
          ],
          'additionalColumns' => [
            'addressType' => [
              'type' => 'varchar',
              'len' => '4'
            ]
          ]
        ]
      ],
      'collection' => [
        'orderBy' => 'dateSent',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name',
          1 => 'body'
        ],
        'sortBy' => 'dateSent',
        'asc' => false
      ],
      'indexes' => [
        'dateSent' => [
          'columns' => [
            0 => 'dateSent',
            1 => 'deleted'
          ]
        ],
        'dateSentStatus' => [
          'columns' => [
            0 => 'dateSent',
            1 => 'status',
            2 => 'deleted'
          ]
        ]
      ]
    ],
    'Subscription' => [
      'fields' => [
        'id' => [
          'type' => 'id',
          'dbType' => 'int',
          'autoincrement' => true
        ],
        'entityId' => [
          'type' => 'varchar',
          'maxLength' => 24,
          'index' => 'entity'
        ],
        'entityType' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'index' => 'entity'
        ],
        'userId' => [
          'type' => 'varchar',
          'maxLength' => 24,
          'index' => true
        ]
      ],
      'indexes' => [
        'userEntity' => [
          'columns' => [
            0 => 'userId',
            1 => 'entityId',
            2 => 'entityType'
          ]
        ]
      ]
    ],
    'Team' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'roles' => [
          'type' => 'linkMultiple',
          'tooltip' => true
        ],
        'positionList' => [
          'type' => 'array',
          'displayAsList' => true,
          'tooltip' => true
        ],
        'userRole' => [
          'type' => 'varchar',
          'notStorable' => true,
          'disabled' => true
        ],
        'layoutSet' => [
          'type' => 'link',
          'tooltip' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ]
      ],
      'links' => [
        'users' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'teams',
          'columnAttributeMap' => [
            'role' => 'userRole'
          ]
        ],
        'roles' => [
          'type' => 'hasMany',
          'entity' => 'Role',
          'foreign' => 'teams'
        ],
        'notes' => [
          'type' => 'hasMany',
          'entity' => 'Note',
          'foreign' => 'teams'
        ],
        'inboundEmails' => [
          'type' => 'hasMany',
          'entity' => 'InboundEmail',
          'foreign' => 'teams'
        ],
        'layoutSet' => [
          'type' => 'belongsTo',
          'entity' => 'LayoutSet',
          'foreign' => 'teams'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'Template' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'body' => [
          'type' => 'wysiwyg',
          'view' => 'views/template/fields/body'
        ],
        'header' => [
          'type' => 'wysiwyg',
          'view' => 'views/template/fields/body'
        ],
        'footer' => [
          'type' => 'wysiwyg',
          'view' => 'views/template/fields/body',
          'tooltip' => true
        ],
        'entityType' => [
          'type' => 'enum',
          'required' => true,
          'translation' => 'Global.scopeNames',
          'view' => 'views/template/fields/entity-type'
        ],
        'leftMargin' => [
          'type' => 'float',
          'default' => 10
        ],
        'rightMargin' => [
          'type' => 'float',
          'default' => 10
        ],
        'topMargin' => [
          'type' => 'float',
          'default' => 10
        ],
        'bottomMargin' => [
          'type' => 'float',
          'default' => 25
        ],
        'printFooter' => [
          'type' => 'bool'
        ],
        'printHeader' => [
          'type' => 'bool'
        ],
        'footerPosition' => [
          'type' => 'float',
          'default' => 15
        ],
        'headerPosition' => [
          'type' => 'float',
          'default' => 10
        ],
        'teams' => [
          'type' => 'linkMultiple'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'variables' => [
          'type' => 'base',
          'notStorable' => true,
          'tooltip' => true
        ],
        'pageOrientation' => [
          'type' => 'enum',
          'options' => [
            0 => 'Portrait',
            1 => 'Landscape'
          ],
          'default' => 'Portrait'
        ],
        'pageFormat' => [
          'type' => 'enum',
          'options' => [
            0 => 'A3',
            1 => 'A4',
            2 => 'A5',
            3 => 'A6',
            4 => 'A7',
            5 => 'Custom'
          ],
          'default' => 'A4'
        ],
        'pageWidth' => [
          'type' => 'float',
          'min' => 1
        ],
        'pageHeight' => [
          'type' => 'float',
          'min' => 1
        ],
        'fontFace' => [
          'type' => 'enum',
          'view' => 'views/template/fields/font-face'
        ],
        'title' => [
          'type' => 'varchar'
        ]
      ],
      'links' => [
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam'
        ],
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ],
      'optimisticConcurrencyControl' => true
    ],
    'TwoFactorCode' => [
      'fields' => [
        'code' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'method' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'attemptsLeft' => [
          'type' => 'int'
        ],
        'isActive' => [
          'type' => 'bool',
          'default' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ]
      ],
      'links' => [
        'user' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ],
      'indexes' => [
        'createdAt' => [
          'columns' => [
            0 => 'createdAt'
          ]
        ],
        'userIdMethod' => [
          'columns' => [
            0 => 'userId',
            1 => 'method'
          ]
        ],
        'userIdMethodIsActive' => [
          'columns' => [
            0 => 'userId',
            1 => 'method',
            2 => 'isActive'
          ]
        ],
        'userIdMethodCreatedAt' => [
          'columns' => [
            0 => 'userId',
            1 => 'method',
            2 => 'createdAt'
          ]
        ]
      ]
    ],
    'UniqueId' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'index' => true
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'terminateAt' => [
          'type' => 'datetime'
        ],
        'target' => [
          'type' => 'linkParent'
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'target' => [
          'type' => 'belongsToParent'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ]
    ],
    'User' => [
      'fields' => [
        'userName' => [
          'type' => 'varchar',
          'maxLength' => 50,
          'required' => true,
          'view' => 'views/user/fields/user-name',
          'tooltip' => true,
          'fieldManagerParamList' => [
            0 => 'maxLength',
            1 => 'tooltipText',
            2 => 'inlineEditDisabled'
          ]
        ],
        'name' => [
          'type' => 'personName',
          'view' => 'views/user/fields/name',
          'dependeeAttributeList' => [
            0 => 'userName'
          ]
        ],
        'type' => [
          'type' => 'enum',
          'options' => [
            0 => 'regular',
            1 => 'admin',
            2 => 'portal',
            3 => 'system',
            4 => 'super-admin',
            5 => 'api'
          ],
          'default' => 'regular',
          'maxLength' => 24,
          'index' => true,
          'inlineEditDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'fieldManagerParamList' => [
            0 => 'tooltipText'
          ]
        ],
        'password' => [
          'type' => 'password',
          'maxLength' => 150,
          'internal' => true,
          'disabled' => true,
          'fieldManagerParamList' => [
            0 => 'tooltipText'
          ]
        ],
        'passwordConfirm' => [
          'type' => 'password',
          'maxLength' => 150,
          'internal' => true,
          'disabled' => true,
          'notStorable' => true,
          'fieldManagerParamList' => []
        ],
        'authMethod' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'ApiKey',
            2 => 'Hmac'
          ],
          'maxLength' => 24,
          'layoutMassUpdateDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutFiltersDisabled' => true,
          'layoutListDisabled' => true,
          'fieldManagerParamList' => [
            0 => 'tooltipText'
          ]
        ],
        'apiKey' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'readOnly' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutFiltersDisabled' => true,
          'layoutListDisabled' => true,
          'fieldManagerParamList' => [
            0 => 'tooltipText'
          ]
        ],
        'secretKey' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'readOnly' => true,
          'notStorable' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutFiltersDisabled' => true,
          'layoutListDisabled' => true,
          'fieldManagerParamList' => [
            0 => 'tooltipText'
          ]
        ],
        'salutationName' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Mr.',
            2 => 'Ms.',
            3 => 'Mrs.',
            4 => 'Dr.'
          ]
        ],
        'firstName' => [
          'type' => 'varchar',
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'maxLength' => 100
        ],
        'lastName' => [
          'type' => 'varchar',
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'maxLength' => 100,
          'required' => true
        ],
        'isActive' => [
          'type' => 'bool',
          'layoutDetailDisabled' => true,
          'tooltip' => true,
          'default' => true,
          'customizationAuditedDisabled' => true
        ],
        'title' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'customizationAuditedDisabled' => true
        ],
        'position' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'notStorable' => true,
          'where' => [
            'LIKE' => [
              'leftJoins' => [
                0 => [
                  0 => 'teams',
                  1 => 'teamsPosition'
                ]
              ],
              'whereClause' => [
                'teamsPositionMiddle.role*' => '{value}'
              ],
              'distinct' => true
            ],
            'NOT LIKE' => [
              'leftJoins' => [
                0 => [
                  0 => 'teams',
                  1 => 'teamsPosition'
                ]
              ],
              'whereClause' => [
                'teamsPositionMiddle.role!*' => '{value}'
              ],
              'distinct' => true
            ],
            '=' => [
              'leftJoins' => [
                0 => [
                  0 => 'teams',
                  1 => 'teamsPosition'
                ]
              ],
              'whereClause' => [
                'teamsPositionMiddle.role' => '{value}'
              ],
              'distinct' => true
            ],
            '<>' => [
              'whereClause' => [
                'id!=s' => [
                  'from' => 'TeamUser',
                  'select' => [
                    0 => 'userId'
                  ],
                  'whereClause' => [
                    'deleted' => 0,
                    'role' => '{value}'
                  ]
                ]
              ]
            ],
            'IS NULL' => [
              'leftJoins' => [
                0 => [
                  0 => 'teams',
                  1 => 'teamsPosition'
                ]
              ],
              'whereClause' => [
                'teamsPositionMiddle.role' => NULL
              ],
              'distinct' => true
            ],
            'IS NOT NULL' => [
              'leftJoins' => [
                0 => [
                  0 => 'teams',
                  1 => 'teamsPosition'
                ]
              ],
              'whereClause' => [
                'teamsPositionMiddle.role!=' => NULL
              ],
              'distinct' => true
            ]
          ],
          'directUpdateDisabled' => true,
          'trim' => true,
          'readOnly' => true,
          'importDisabled' => true,
          'exportDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'textFilterDisabled' => true,
          'fieldManagerParamList' => [
            0 => 'tooltipText'
          ]
        ],
        'emailAddress' => [
          'type' => 'email',
          'required' => false,
          'layoutMassUpdateDisabled' => true
        ],
        'phoneNumber' => [
          'type' => 'phone',
          'typeList' => [
            0 => 'Mobile',
            1 => 'Office',
            2 => 'Home',
            3 => 'Fax',
            4 => 'Other'
          ],
          'defaultType' => 'Mobile'
        ],
        'token' => [
          'type' => 'varchar',
          'notStorable' => true,
          'disabled' => true,
          'customizationDisabled' => true
        ],
        'authTokenId' => [
          'type' => 'varchar',
          'notStorable' => true,
          'disabled' => true,
          'customizationDisabled' => true
        ],
        'authLogRecordId' => [
          'type' => 'varchar',
          'notStorable' => true,
          'disabled' => true,
          'customizationDisabled' => true
        ],
        'ipAddress' => [
          'type' => 'varchar',
          'notStorable' => true,
          'disabled' => true,
          'customizationDisabled' => true
        ],
        'defaultTeam' => [
          'type' => 'link',
          'layoutDetailDisabled' => true,
          'tooltip' => true,
          'customizationAuditedDisabled' => true
        ],
        'acceptanceStatus' => [
          'type' => 'varchar',
          'notStorable' => true,
          'exportDisabled' => true,
          'disabled' => true,
          'fieldManagerParamList' => []
        ],
        'acceptanceStatusMeetings' => [
          'type' => 'enum',
          'notStorable' => true,
          'directUpdateDisabled' => true,
          'layoutAvailabilityList' => [
            0 => 'filters'
          ],
          'importDisabled' => true,
          'exportDisabled' => true,
          'view' => 'crm:views/lead/fields/acceptance-status',
          'link' => 'meetings',
          'column' => 'status',
          'fieldManagerParamList' => []
        ],
        'acceptanceStatusCalls' => [
          'type' => 'enum',
          'notStorable' => true,
          'directUpdateDisabled' => true,
          'layoutAvailabilityList' => [
            0 => 'filters'
          ],
          'importDisabled' => true,
          'exportDisabled' => true,
          'view' => 'crm:views/lead/fields/acceptance-status',
          'link' => 'calls',
          'column' => 'status',
          'fieldManagerParamList' => []
        ],
        'teamRole' => [
          'type' => 'varchar',
          'notStorable' => true,
          'disabled' => true,
          'fieldManagerParamList' => []
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'tooltip' => true,
          'columns' => [
            'role' => 'userRole'
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'layoutDetailDisabled' => true,
          'view' => 'views/user/fields/teams',
          'default' => 'javascript: return {teamsIds: []}'
        ],
        'roles' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'tooltip' => true
        ],
        'portals' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'tooltip' => true
        ],
        'portalRoles' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'tooltip' => true
        ],
        'contact' => [
          'type' => 'link',
          'layoutDetailDisabled' => true,
          'view' => 'views/user/fields/contact',
          'fieldManagerParamList' => [
            0 => 'inlineEditDisabled',
            1 => 'tooltipText'
          ]
        ],
        'accounts' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'fieldManagerParamList' => [
            0 => 'inlineEditDisabled',
            1 => 'tooltipText'
          ]
        ],
        'account' => [
          'type' => 'link',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'foreignAccessDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'readOnly' => true
        ],
        'portal' => [
          'type' => 'link',
          'notStorable' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'avatar' => [
          'type' => 'image',
          'view' => 'views/user/fields/avatar',
          'layoutDetailDisabled' => true,
          'previewSize' => 'small',
          'customizationAuditedDisabled' => true
        ],
        'sendAccessInfo' => [
          'type' => 'bool',
          'notStorable' => true,
          'disabled' => true
        ],
        'gender' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Male',
            2 => 'Female',
            3 => 'Neutral'
          ]
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'dashboardTemplate' => [
          'type' => 'link',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'customizationAuditedDisabled' => true
        ],
        'auth2FA' => [
          'type' => 'foreign',
          'link' => 'userData',
          'field' => 'auth2FA',
          'readOnly' => true,
          'view' => 'views/fields/foreign-bool'
        ],
        'userData' => [
          'type' => 'linkOne',
          'disabled' => true,
          'customizationDisabled' => true
        ],
        'lastAccess' => [
          'type' => 'datetime',
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'layoutFiltersDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutDetailDisabled' => true,
          'directAccessDisabled' => true,
          'exportDisabled' => true
        ],
        'targetListIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'readOnly' => true,
          'disabled' => true,
          'fieldManagerParamList' => []
        ],
        'orders' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'noLoad' => true,
          'importDisabled' => true,
          'isCustom' => true
        ],
        'middleName' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 100,
          'pattern' => '$noBadCharacters'
        ],
        'emailAddressIsOptedOut' => [
          'layoutMassUpdateDisabled' => true,
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ],
        'phoneNumberIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ]
      ],
      'links' => [
        'defaultTeam' => [
          'type' => 'belongsTo',
          'entity' => 'Team'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'foreign' => 'users',
          'additionalColumns' => [
            'role' => [
              'type' => 'varchar',
              'len' => 100
            ]
          ],
          'layoutRelationshipsDisabled' => true,
          'columnAttributeMap' => [
            'role' => 'teamRole'
          ]
        ],
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'roles' => [
          'type' => 'hasMany',
          'entity' => 'Role',
          'foreign' => 'users',
          'layoutRelationshipsDisabled' => true
        ],
        'portals' => [
          'type' => 'hasMany',
          'entity' => 'Portal',
          'foreign' => 'users',
          'layoutRelationshipsDisabled' => true
        ],
        'portalRoles' => [
          'type' => 'hasMany',
          'entity' => 'PortalRole',
          'foreign' => 'users',
          'layoutRelationshipsDisabled' => true
        ],
        'dashboardTemplate' => [
          'type' => 'belongsTo',
          'entity' => 'DashboardTemplate'
        ],
        'preferences' => [
          'type' => 'hasOne',
          'entity' => 'Preferences',
          'noJoin' => true
        ],
        'userData' => [
          'type' => 'hasOne',
          'entity' => 'UserData',
          'foreign' => 'user',
          'foreignName' => 'id'
        ],
        'meetings' => [
          'type' => 'hasMany',
          'entity' => 'Meeting',
          'foreign' => 'users',
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'calls' => [
          'type' => 'hasMany',
          'entity' => 'Call',
          'foreign' => 'users',
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'emails' => [
          'type' => 'hasMany',
          'entity' => 'Email',
          'foreign' => 'users'
        ],
        'notes' => [
          'type' => 'hasMany',
          'entity' => 'Note',
          'foreign' => 'users',
          'layoutRelationshipsDisabled' => true
        ],
        'contact' => [
          'type' => 'belongsTo',
          'entity' => 'Contact',
          'foreign' => 'portalUser'
        ],
        'accounts' => [
          'type' => 'hasMany',
          'entity' => 'Account',
          'foreign' => 'portalUsers',
          'relationName' => 'AccountPortalUser'
        ],
        'tasks' => [
          'type' => 'hasMany',
          'entity' => 'Task',
          'foreign' => 'assignedUser'
        ],
        'targetLists' => [
          'type' => 'hasMany',
          'entity' => 'TargetList',
          'foreign' => 'users',
          'columnAttributeMap' => [
            'optedOut' => 'targetListIsOptedOut'
          ]
        ],
        'orders' => [
          'type' => 'hasMany',
          'foreign' => 'confirmedBy',
          'entity' => 'Orders',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'userName',
        'order' => 'asc',
        'textFilterFields' => [
          0 => 'name',
          1 => 'userName',
          2 => 'emailAddress'
        ],
        'sortBy' => 'userName',
        'asc' => true
      ]
    ],
    'UserData' => [
      'fields' => [
        'imapHandlers' => [
          'type' => 'jsonObject'
        ],
        'smtpHandlers' => [
          'type' => 'jsonObject'
        ],
        'auth2FA' => [
          'type' => 'bool'
        ],
        'auth2FAMethod' => [
          'type' => 'enum'
        ],
        'auth2FATotpSecret' => [
          'type' => 'varchar',
          'maxLength' => 32
        ],
        'auth2FAEmailAddress' => [
          'type' => 'varchar'
        ]
      ],
      'links' => [
        'user' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ]
    ],
    'Webhook' => [
      'fields' => [
        'event' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'required' => true,
          'view' => 'views/webhook/fields/event'
        ],
        'url' => [
          'type' => 'varchar',
          'maxLength' => 512,
          'required' => true
        ],
        'isActive' => [
          'type' => 'bool',
          'default' => true
        ],
        'user' => [
          'type' => 'link',
          'view' => 'views/webhook/fields/user'
        ],
        'entityType' => [
          'type' => 'varchar',
          'readOnly' => true,
          'view' => 'views/fields/entity-type'
        ],
        'type' => [
          'type' => 'enum',
          'options' => [
            0 => 'create',
            1 => 'update',
            2 => 'fieldUpdate',
            3 => 'delete'
          ],
          'readOnly' => true
        ],
        'field' => [
          'type' => 'varchar',
          'readOnly' => true
        ],
        'secretKey' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'readOnly' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutFiltersDisabled' => true,
          'layoutListDisabled' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'user' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'event'
        ],
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'event' => [
          'columns' => [
            0 => 'event'
          ]
        ],
        'entityTypeType' => [
          'columns' => [
            0 => 'entityType',
            1 => 'type'
          ]
        ],
        'entityTypeField' => [
          'columns' => [
            0 => 'entityType',
            1 => 'field'
          ]
        ]
      ]
    ],
    'WebhookEventQueueItem' => [
      'fields' => [
        'number' => [
          'type' => 'autoincrement',
          'dbType' => 'bigint'
        ],
        'event' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'required' => true
        ],
        'target' => [
          'type' => 'linkParent'
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'isProcessed' => [
          'type' => 'bool'
        ]
      ],
      'links' => [],
      'collection' => [
        'orderBy' => 'number',
        'order' => 'desc',
        'sortBy' => 'number',
        'asc' => false
      ]
    ],
    'WebhookQueueItem' => [
      'fields' => [
        'number' => [
          'type' => 'autoincrement',
          'dbType' => 'bigint'
        ],
        'event' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'required' => true
        ],
        'webhook' => [
          'type' => 'link'
        ],
        'target' => [
          'type' => 'linkParent'
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'createdAt' => [
          'type' => 'datetime'
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Pending',
            1 => 'Success',
            2 => 'Failed'
          ],
          'default' => 'Pending',
          'maxLength' => 15
        ],
        'processedAt' => [
          'type' => 'datetime'
        ],
        'attempts' => [
          'type' => 'int',
          'default' => 0
        ],
        'processAt' => [
          'type' => 'datetime'
        ]
      ],
      'links' => [
        'webhook' => [
          'type' => 'belongsTo',
          'entity' => 'Webhook',
          'foreignName' => 'id'
        ]
      ],
      'collection' => [
        'orderBy' => 'number',
        'order' => 'desc',
        'sortBy' => 'number',
        'asc' => false
      ]
    ],
    'Account' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'maxLength' => 249,
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'website' => [
          'type' => 'url',
          'strip' => true
        ],
        'emailAddress' => [
          'type' => 'email',
          'isPersonalData' => true
        ],
        'phoneNumber' => [
          'type' => 'phone',
          'typeList' => [
            0 => 'Office',
            1 => 'Mobile',
            2 => 'Fax',
            3 => 'Other'
          ],
          'defaultType' => 'Office'
        ],
        'type' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Customer',
            2 => 'Investor',
            3 => 'Partner',
            4 => 'Reseller'
          ]
        ],
        'industry' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Advertising',
            2 => 'Aerospace',
            3 => 'Agriculture',
            4 => 'Apparel & Accessories',
            5 => 'Architecture',
            6 => 'Automotive',
            7 => 'Banking',
            8 => 'Biotechnology',
            9 => 'Building Materials & Equipment',
            10 => 'Chemical',
            11 => 'Construction',
            12 => 'Consulting',
            13 => 'Computer',
            14 => 'Culture',
            15 => 'Creative',
            16 => 'Defense',
            17 => 'Education',
            18 => 'Electronics',
            19 => 'Electric Power',
            20 => 'Energy',
            21 => 'Entertainment & Leisure',
            22 => 'Finance',
            23 => 'Food & Beverage',
            24 => 'Grocery',
            25 => 'Healthcare',
            26 => 'Hospitality',
            27 => 'Insurance',
            28 => 'Legal',
            29 => 'Manufacturing',
            30 => 'Mass Media',
            31 => 'Marketing',
            32 => 'Mining',
            33 => 'Music',
            34 => 'Publishing',
            35 => 'Petroleum',
            36 => 'Real Estate',
            37 => 'Retail',
            38 => 'Service',
            39 => 'Sports',
            40 => 'Software',
            41 => 'Support',
            42 => 'Shipping',
            43 => 'Travel',
            44 => 'Technology',
            45 => 'Telecommunications',
            46 => 'Television',
            47 => 'Transportation',
            48 => 'Testing, Inspection & Certification',
            49 => 'Venture Capital',
            50 => 'Wholesale',
            51 => 'Water'
          ],
          'isSorted' => true
        ],
        'sicCode' => [
          'type' => 'varchar',
          'maxLength' => 40,
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'noSpellCheck' => true
        ],
        'contactRole' => [
          'type' => 'varchar',
          'notStorable' => true,
          'disabled' => true,
          'maxLength' => 100,
          'pattern' => '$noBadCharacters',
          'layoutMassUpdateDisabled' => true,
          'layoutListDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutSearchDisabled' => true,
          'fieldManagerParamList' => [
            0 => 'pattern'
          ]
        ],
        'contactIsInactive' => [
          'type' => 'bool',
          'notStorable' => true,
          'default' => false,
          'disabled' => true
        ],
        'billingAddress' => [
          'type' => 'address',
          'trim' => true
        ],
        'billingAddressStreet' => [
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar'
        ],
        'billingAddressCity' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-city',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'billingAddressState' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-state',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'billingAddressCountry' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-country',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'billingAddressPostalCode' => [
          'type' => 'varchar',
          'maxLength' => 40,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'shippingAddress' => [
          'type' => 'address',
          'view' => 'crm:views/account/fields/shipping-address'
        ],
        'shippingAddressStreet' => [
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar',
          'trim' => true
        ],
        'shippingAddressCity' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-city',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'shippingAddressState' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-state',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'shippingAddressCountry' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-country',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'shippingAddressPostalCode' => [
          'type' => 'varchar',
          'maxLength' => 40,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'campaign' => [
          'type' => 'link',
          'layoutListDisabled' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'assignedUser' => [
          'type' => 'link',
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'targetLists' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'importDisabled' => true,
          'exportDisabled' => true,
          'noLoad' => true
        ],
        'targetList' => [
          'type' => 'link',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutFiltersDisabled' => true,
          'entity' => 'TargetList',
          'directAccessDisabled' => true
        ],
        'originalLead' => [
          'type' => 'linkOne',
          'readOnly' => true,
          'view' => 'views/fields/link-one'
        ],
        'targetListIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'emailAddressIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ],
        'phoneNumberIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ],
        'billingAddressMap' => [
          'type' => 'map',
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'provider' => 'Google',
          'height' => 300,
          'exportDisabled' => true,
          'importDisabled' => true
        ],
        'shippingAddressMap' => [
          'type' => 'map',
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'provider' => 'Google',
          'height' => 300,
          'exportDisabled' => true,
          'importDisabled' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'contacts' => [
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'accounts',
          'columnAttributeMap' => [
            'role' => 'contactRole',
            'isInactive' => 'contactIsInactive'
          ]
        ],
        'contactsPrimary' => [
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'account',
          'layoutRelationshipsDisabled' => true
        ],
        'opportunities' => [
          'type' => 'hasMany',
          'entity' => 'Opportunity',
          'foreign' => 'account'
        ],
        'cases' => [
          'type' => 'hasMany',
          'entity' => 'Case',
          'foreign' => 'account'
        ],
        'documents' => [
          'type' => 'hasMany',
          'entity' => 'Document',
          'foreign' => 'accounts',
          'audited' => true
        ],
        'meetingsPrimary' => [
          'type' => 'hasMany',
          'entity' => 'Meeting',
          'foreign' => 'account',
          'layoutRelationshipsDisabled' => true
        ],
        'emailsPrimary' => [
          'type' => 'hasMany',
          'entity' => 'Email',
          'foreign' => 'account',
          'layoutRelationshipsDisabled' => true
        ],
        'callsPrimary' => [
          'type' => 'hasMany',
          'entity' => 'Call',
          'foreign' => 'account',
          'layoutRelationshipsDisabled' => true
        ],
        'tasksPrimary' => [
          'type' => 'hasMany',
          'entity' => 'Task',
          'foreign' => 'account',
          'layoutRelationshipsDisabled' => true
        ],
        'meetings' => [
          'type' => 'hasChildren',
          'entity' => 'Meeting',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'calls' => [
          'type' => 'hasChildren',
          'entity' => 'Call',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'tasks' => [
          'type' => 'hasChildren',
          'entity' => 'Task',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true
        ],
        'emails' => [
          'type' => 'hasChildren',
          'entity' => 'Email',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true
        ],
        'campaign' => [
          'type' => 'belongsTo',
          'entity' => 'Campaign',
          'foreign' => 'accounts'
        ],
        'campaignLogRecords' => [
          'type' => 'hasChildren',
          'entity' => 'CampaignLogRecord',
          'foreign' => 'parent'
        ],
        'targetLists' => [
          'type' => 'hasMany',
          'entity' => 'TargetList',
          'foreign' => 'accounts',
          'columnAttributeMap' => [
            'optedOut' => 'targetListIsOptedOut'
          ]
        ],
        'portalUsers' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'accounts'
        ],
        'originalLead' => [
          'type' => 'hasOne',
          'entity' => 'Lead',
          'foreign' => 'createdAccount'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name',
          1 => 'emailAddress'
        ],
        'fullTextSearch' => false,
        'countDisabled' => false,
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'createdAt' => [
          'columns' => [
            0 => 'createdAt',
            1 => 'deleted'
          ]
        ],
        'createdAtId' => [
          'unique' => true,
          'columns' => [
            0 => 'createdAt',
            1 => 'id'
          ]
        ],
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ],
      'optimisticConcurrencyControl' => false
    ],
    'Call' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Planned',
            1 => 'Held',
            2 => 'Not Held'
          ],
          'default' => 'Planned',
          'style' => [
            'Held' => 'success'
          ],
          'audited' => true
        ],
        'dateStart' => [
          'type' => 'datetime',
          'required' => true,
          'default' => 'javascript: return this.dateTime.getNow(15);',
          'audited' => true
        ],
        'dateEnd' => [
          'type' => 'datetime',
          'required' => true,
          'view' => 'crm:views/call/fields/date-end',
          'after' => 'dateStart'
        ],
        'duration' => [
          'type' => 'duration',
          'start' => 'dateStart',
          'end' => 'dateEnd',
          'options' => [
            0 => 300,
            1 => 600,
            2 => 900,
            3 => 1800,
            4 => 2700,
            5 => 3600,
            6 => 7200
          ],
          'default' => 300,
          'notStorable' => true,
          'select' => [
            'select' => 'TIMESTAMPDIFF_SECOND:(dateStart, dateEnd)'
          ],
          'order' => [
            'order' => [
              0 => [
                0 => 'TIMESTAMPDIFF_SECOND:(dateStart, dateEnd)',
                1 => '{direction}'
              ]
            ]
          ]
        ],
        'reminders' => [
          'type' => 'jsonArray',
          'notStorable' => true,
          'view' => 'crm:views/meeting/fields/reminders',
          'layoutListDisabled' => true
        ],
        'direction' => [
          'type' => 'enum',
          'options' => [
            0 => 'Outbound',
            1 => 'Inbound'
          ],
          'default' => 'Outbound'
        ],
        'description' => [
          'type' => 'text'
        ],
        'parent' => [
          'type' => 'linkParent',
          'entityList' => [
            0 => 'Account',
            1 => 'Lead',
            2 => 'Contact',
            3 => 'Opportunity',
            4 => 'Case'
          ]
        ],
        'account' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'acceptanceStatus' => [
          'type' => 'enum',
          'notStorable' => true,
          'options' => [
            0 => 'None',
            1 => 'Accepted',
            2 => 'Tentative',
            3 => 'Declined'
          ],
          'style' => [
            'Accepted' => 'success',
            'Declined' => 'danger',
            'Tentative' => 'warning'
          ],
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'importDisabled' => true,
          'exportDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationRequiredDisabled' => true,
          'customizationIsSortedDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'customizationAuditedDisabled' => true,
          'where' => [
            '=' => [
              'whereClause' => [
                'OR' => [
                  'contactsMiddle.status' => '{value}',
                  'leadsMiddle.status' => '{value}',
                  'usersMiddle.status' => '{value}'
                ]
              ],
              'leftJoins' => [
                0 => 'users',
                1 => 'contacts',
                2 => 'leads'
              ],
              'distinct' => true
            ],
            '<>' => [
              'whereClause' => [
                0 => [
                  'id!=s' => [
                    'from' => 'CallContact',
                    'select' => [
                      0 => 'callId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ],
                1 => [
                  'id!=s' => [
                    'from' => 'CallLead',
                    'select' => [
                      0 => 'callId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ],
                2 => [
                  'id!=s' => [
                    'from' => 'CallUser',
                    'select' => [
                      0 => 'callId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ]
              ]
            ],
            'IN' => [
              'leftJoins' => [
                0 => 'users',
                1 => 'leads',
                2 => 'contacts'
              ],
              'whereClause' => [
                'OR' => [
                  'contactsMiddle.status' => '{value}',
                  'leadsMiddle.status' => '{value}',
                  'usersMiddle.status' => '{value}'
                ]
              ],
              'distinct' => true
            ],
            'NOT IN' => [
              'whereClause' => [
                0 => [
                  'id!=s' => [
                    'from' => 'CallContact',
                    'select' => [
                      0 => 'callId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ],
                1 => [
                  'id!=s' => [
                    'from' => 'CallLead',
                    'select' => [
                      0 => 'callId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ],
                2 => [
                  'id!=s' => [
                    'from' => 'CallUser',
                    'select' => [
                      0 => 'callId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ]
              ]
            ],
            'IS NULL' => [
              'leftJoins' => [
                0 => 'users',
                1 => 'contacts',
                2 => 'leads'
              ],
              'whereClause' => [
                'contactsMiddle.status' => NULL,
                'leadsMiddle.status' => NULL,
                'usersMiddle.status' => NULL
              ],
              'distinct' => true
            ],
            'IS NOT NULL' => [
              'whereClause' => [
                0 => [
                  'id!=s' => [
                    'from' => 'CallContact',
                    'select' => [
                      0 => 'callId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => NULL
                    ]
                  ]
                ],
                1 => [
                  'id!=s' => [
                    'from' => 'CallLead',
                    'select' => [
                      0 => 'callId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => NULL
                    ]
                  ]
                ],
                2 => [
                  'id!=s' => [
                    'from' => 'CallUser',
                    'select' => [
                      0 => 'callId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => NULL
                    ]
                  ]
                ]
              ]
            ]
          ],
          'view' => 'crm:views/meeting/fields/acceptance-status'
        ],
        'users' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'view' => 'crm:views/meeting/fields/users',
          'columns' => [
            'status' => 'acceptanceStatus'
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'orderBy' => 'name'
        ],
        'contacts' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'view' => 'crm:views/call/fields/contacts',
          'columns' => [
            'status' => 'acceptanceStatus'
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'orderBy' => 'name'
        ],
        'leads' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'view' => 'crm:views/call/fields/leads',
          'columns' => [
            'status' => 'acceptanceStatus'
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'orderBy' => 'name'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'phoneNumbersMap' => [
          'type' => 'jsonObject',
          'notStorable' => true,
          'disabled' => true
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ]
      ],
      'links' => [
        'account' => [
          'type' => 'belongsTo',
          'entity' => 'Account'
        ],
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'users' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'calls',
          'additionalColumns' => [
            'status' => [
              'type' => 'varchar',
              'len' => '36',
              'default' => 'None'
            ]
          ],
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'contacts' => [
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'calls',
          'additionalColumns' => [
            'status' => [
              'type' => 'varchar',
              'len' => '36',
              'default' => 'None'
            ]
          ],
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'leads' => [
          'type' => 'hasMany',
          'entity' => 'Lead',
          'foreign' => 'calls',
          'additionalColumns' => [
            'status' => [
              'type' => 'varchar',
              'len' => '36',
              'default' => 'None'
            ]
          ],
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'parent' => [
          'type' => 'belongsToParent',
          'foreign' => 'calls'
        ]
      ],
      'collection' => [
        'orderBy' => 'dateStart',
        'order' => 'desc',
        'sortBy' => 'dateStart',
        'asc' => false
      ],
      'indexes' => [
        'dateStartStatus' => [
          'columns' => [
            0 => 'dateStart',
            1 => 'status'
          ]
        ],
        'dateStart' => [
          'columns' => [
            0 => 'dateStart',
            1 => 'deleted'
          ]
        ],
        'status' => [
          'columns' => [
            0 => 'status',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ],
        'assignedUserStatus' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'status'
          ]
        ]
      ]
    ],
    'Campaign' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Planning',
            1 => 'Active',
            2 => 'Inactive',
            3 => 'Complete'
          ],
          'default' => 'Planning'
        ],
        'type' => [
          'type' => 'enum',
          'options' => [
            0 => 'Email',
            1 => 'Newsletter',
            2 => 'Web',
            3 => 'Television',
            4 => 'Radio',
            5 => 'Mail'
          ],
          'default' => 'Email'
        ],
        'startDate' => [
          'type' => 'date'
        ],
        'endDate' => [
          'type' => 'date'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'assignedUser' => [
          'type' => 'link',
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'targetLists' => [
          'type' => 'linkMultiple',
          'tooltip' => true
        ],
        'excludingTargetLists' => [
          'type' => 'linkMultiple',
          'tooltip' => true
        ],
        'sentCount' => [
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'openedCount' => [
          'view' => 'crm:views/campaign/fields/int-with-percentage',
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'clickedCount' => [
          'view' => 'crm:views/campaign/fields/int-with-percentage',
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'optedInCount' => [
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'optedOutCount' => [
          'view' => 'crm:views/campaign/fields/int-with-percentage',
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'bouncedCount' => [
          'view' => 'crm:views/campaign/fields/int-with-percentage',
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'hardBouncedCount' => [
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'softBouncedCount' => [
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'leadCreatedCount' => [
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'openedPercentage' => [
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'clickedPercentage' => [
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'optedOutPercentage' => [
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'bouncedPercentage' => [
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'revenue' => [
          'type' => 'currency',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'budget' => [
          'type' => 'currency'
        ],
        'contactsTemplate' => [
          'type' => 'link',
          'view' => 'crm:views/campaign/fields/template',
          'targetEntityType' => 'Contact'
        ],
        'leadsTemplate' => [
          'type' => 'link',
          'view' => 'crm:views/campaign/fields/template',
          'targetEntityType' => 'Lead'
        ],
        'accountsTemplate' => [
          'type' => 'link',
          'view' => 'crm:views/campaign/fields/template',
          'targetEntityType' => 'Account'
        ],
        'usersTemplate' => [
          'type' => 'link',
          'view' => 'crm:views/campaign/fields/template',
          'targetEntityType' => 'User'
        ],
        'mailMergeOnlyWithAddress' => [
          'type' => 'bool',
          'default' => true
        ],
        'revenueCurrency' => [
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true,
          'type' => 'enum',
          'view' => 'views/fields/currency-list',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'customizationRequiredDisabled' => true,
          'customizationOptionsDisabled' => true,
          'customizationIsSortedDisabled' => true,
          'customizationDisplayAsLabelDisabled' => true,
          'customizationAuditedDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'customizationDefaultView' => 'views/admin/field-manager/fields/currency-default',
          'maxLength' => 6
        ],
        'revenueConverted' => [
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true,
          'type' => 'currencyConverted',
          'importDisabled' => true
        ],
        'budgetCurrency' => [
          'type' => 'enum',
          'view' => 'views/fields/currency-list',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'customizationRequiredDisabled' => true,
          'customizationOptionsDisabled' => true,
          'customizationIsSortedDisabled' => true,
          'customizationDisplayAsLabelDisabled' => true,
          'customizationAuditedDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'customizationDefaultView' => 'views/admin/field-manager/fields/currency-default',
          'maxLength' => 6
        ],
        'budgetConverted' => [
          'type' => 'currencyConverted',
          'readOnly' => true,
          'importDisabled' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'targetLists' => [
          'type' => 'hasMany',
          'entity' => 'TargetList',
          'foreign' => 'campaigns'
        ],
        'excludingTargetLists' => [
          'type' => 'hasMany',
          'entity' => 'TargetList',
          'foreign' => 'campaignsExcluding',
          'relationName' => 'campaignTargetListExcluding'
        ],
        'accounts' => [
          'type' => 'hasMany',
          'entity' => 'Account',
          'foreign' => 'campaign'
        ],
        'contacts' => [
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'campaign'
        ],
        'leads' => [
          'type' => 'hasMany',
          'entity' => 'Lead',
          'foreign' => 'campaign'
        ],
        'opportunities' => [
          'type' => 'hasMany',
          'entity' => 'Opportunity',
          'foreign' => 'campaign'
        ],
        'campaignLogRecords' => [
          'type' => 'hasMany',
          'entity' => 'CampaignLogRecord',
          'foreign' => 'campaign'
        ],
        'trackingUrls' => [
          'type' => 'hasMany',
          'entity' => 'CampaignTrackingUrl',
          'foreign' => 'campaign'
        ],
        'massEmails' => [
          'type' => 'hasMany',
          'entity' => 'MassEmail',
          'foreign' => 'campaign',
          'layoutRelationshipsDisabled' => true
        ],
        'contactsTemplate' => [
          'type' => 'belongsTo',
          'entity' => 'Template',
          'noJoin' => true
        ],
        'leadsTemplate' => [
          'type' => 'belongsTo',
          'entity' => 'Template',
          'noJoin' => true
        ],
        'accountsTemplate' => [
          'type' => 'belongsTo',
          'entity' => 'Template',
          'noJoin' => true
        ],
        'usersTemplate' => [
          'type' => 'belongsTo',
          'entity' => 'Template',
          'noJoin' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'createdAt' => [
          'columns' => [
            0 => 'createdAt',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'CampaignLogRecord' => [
      'fields' => [
        'action' => [
          'type' => 'enum',
          'required' => true,
          'maxLength' => 50,
          'options' => [
            0 => 'Sent',
            1 => 'Opened',
            2 => 'Opted Out',
            3 => 'Bounced',
            4 => 'Clicked',
            5 => 'Opted In',
            6 => 'Lead Created'
          ]
        ],
        'actionDate' => [
          'type' => 'datetime',
          'required' => true
        ],
        'data' => [
          'type' => 'jsonObject',
          'view' => 'crm:views/campaign-log-record/fields/data'
        ],
        'stringData' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'stringAdditionalData' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'application' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 36,
          'default' => 'Espo'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'fieldManagerParamList' => []
        ],
        'campaign' => [
          'type' => 'link'
        ],
        'parent' => [
          'type' => 'linkParent'
        ],
        'object' => [
          'type' => 'linkParent'
        ],
        'queueItem' => [
          'type' => 'link'
        ],
        'isTest' => [
          'type' => 'bool',
          'default' => false
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'campaign' => [
          'type' => 'belongsTo',
          'entity' => 'Campaign',
          'foreign' => 'campaignLogRecords'
        ],
        'queueItem' => [
          'type' => 'belongsTo',
          'entity' => 'EmailQueueItem',
          'noJoin' => true
        ],
        'parent' => [
          'type' => 'belongsToParent',
          'entityList' => [
            0 => 'Account',
            1 => 'Contact',
            2 => 'Lead',
            3 => 'Opportunity',
            4 => 'User'
          ]
        ],
        'object' => [
          'type' => 'belongsToParent',
          'entityList' => [
            0 => 'Email',
            1 => 'CampaignTrackingUrl'
          ]
        ]
      ],
      'collection' => [
        'textFilterFields' => [
          0 => 'queueItem.id',
          1 => 'queueItem.emailAddress'
        ],
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'actionDate' => [
          'columns' => [
            0 => 'actionDate',
            1 => 'deleted'
          ]
        ],
        'action' => [
          'columns' => [
            0 => 'action',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'CampaignTrackingUrl' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'url' => [
          'type' => 'url',
          'tooltip' => true
        ],
        'urlToUse' => [
          'type' => 'varchar',
          'notStorable' => true,
          'readOnly' => true
        ],
        'campaign' => [
          'type' => 'link'
        ],
        'action' => [
          'type' => 'enum',
          'options' => [
            0 => 'Redirect',
            1 => 'Show Message'
          ],
          'default' => 'Redirect'
        ],
        'message' => [
          'type' => 'text',
          'tooltip' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'fieldManagerParamList' => []
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'fieldManagerParamList' => []
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'campaign' => [
          'type' => 'belongsTo',
          'entity' => 'Campaign',
          'foreign' => 'trackingUrls'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'Case' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'number' => [
          'type' => 'autoincrement',
          'index' => true
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'New',
            1 => 'Assigned',
            2 => 'Pending',
            3 => 'Closed',
            4 => 'Rejected',
            5 => 'Duplicate'
          ],
          'default' => 'New',
          'style' => [
            'Closed' => 'success',
            'Duplicate' => 'danger',
            'Rejected' => 'danger'
          ],
          'audited' => true,
          'fieldManagerAdditionalParamList' => [
            0 => [
              'name' => 'notActualOptions',
              'view' => 'views/admin/field-manager/fields/not-actual-options'
            ]
          ],
          'notActualOptions' => [
            0 => 'Closed',
            1 => 'Rejected',
            2 => 'Duplicate'
          ]
        ],
        'priority' => [
          'type' => 'enum',
          'options' => [
            0 => 'Low',
            1 => 'Normal',
            2 => 'High',
            3 => 'Urgent'
          ],
          'default' => 'Normal',
          'displayAsLabel' => true,
          'style' => [
            'High' => 'warning',
            'Urgent' => 'danger'
          ],
          'audited' => true
        ],
        'type' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Question',
            2 => 'Incident',
            3 => 'Problem'
          ],
          'audited' => true
        ],
        'description' => [
          'type' => 'text'
        ],
        'account' => [
          'type' => 'link'
        ],
        'lead' => [
          'type' => 'link'
        ],
        'contact' => [
          'type' => 'link',
          'view' => 'crm:views/case/fields/contact'
        ],
        'contacts' => [
          'type' => 'linkMultiple',
          'view' => 'crm:views/case/fields/contacts',
          'orderBy' => 'name',
          'detailLayoutIncompatibleFieldList' => [
            0 => 'contact'
          ]
        ],
        'inboundEmail' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'assignedUser' => [
          'type' => 'link',
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'attachments' => [
          'type' => 'attachmentMultiple'
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'inboundEmail' => [
          'type' => 'belongsTo',
          'entity' => 'InboundEmail'
        ],
        'account' => [
          'type' => 'belongsTo',
          'entity' => 'Account',
          'foreign' => 'cases'
        ],
        'lead' => [
          'type' => 'belongsTo',
          'entity' => 'Lead',
          'foreign' => 'cases'
        ],
        'contact' => [
          'type' => 'belongsTo',
          'entity' => 'Contact',
          'foreign' => 'casesPrimary'
        ],
        'contacts' => [
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'cases',
          'layoutRelationshipsDisabled' => true
        ],
        'meetings' => [
          'type' => 'hasChildren',
          'entity' => 'Meeting',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'calls' => [
          'type' => 'hasChildren',
          'entity' => 'Call',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'tasks' => [
          'type' => 'hasChildren',
          'entity' => 'Task',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'emails' => [
          'type' => 'hasChildren',
          'entity' => 'Email',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true
        ],
        'articles' => [
          'type' => 'hasMany',
          'entity' => 'KnowledgeBaseArticle',
          'foreign' => 'cases',
          'audited' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'number',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name',
          1 => 'number'
        ],
        'sortBy' => 'number',
        'asc' => false
      ],
      'indexes' => [
        'status' => [
          'columns' => [
            0 => 'status',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ],
        'assignedUserStatus' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'status'
          ]
        ]
      ]
    ],
    'Contact' => [
      'fields' => [
        'name' => [
          'type' => 'personName',
          'isPersonalData' => true
        ],
        'salutationName' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Mr.',
            2 => 'Ms.',
            3 => 'Mrs.',
            4 => 'Dr.'
          ]
        ],
        'firstName' => [
          'type' => 'varchar',
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'maxLength' => 100,
          'default' => ''
        ],
        'lastName' => [
          'type' => 'varchar',
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'maxLength' => 100,
          'required' => true,
          'default' => ''
        ],
        'accountAnyId' => [
          'notStorable' => true,
          'customizationDisabled' => true,
          'disabled' => true,
          'type' => 'varchar',
          'where' => [
            '=' => [
              'whereClause' => [
                'id=s' => [
                  'from' => 'AccountContact',
                  'select' => [
                    0 => 'contactId'
                  ],
                  'whereClause' => [
                    'deleted' => 0,
                    'accountId' => '{value}'
                  ]
                ]
              ]
            ],
            '<>' => [
              'whereClause' => [
                'id!=s' => [
                  'from' => 'AccountContact',
                  'select' => [
                    0 => 'contactId'
                  ],
                  'whereClause' => [
                    'deleted' => 0,
                    'accountId' => '{value}'
                  ]
                ]
              ]
            ],
            'IN' => [
              'whereClause' => [
                'id=s' => [
                  'from' => 'AccountContact',
                  'select' => [
                    0 => 'contactId'
                  ],
                  'whereClause' => [
                    'deleted' => 0,
                    'accountId' => '{value}'
                  ]
                ]
              ]
            ],
            'NOT IN' => [
              'whereClause' => [
                'id!=s' => [
                  'from' => 'AccountContact',
                  'select' => [
                    0 => 'contactId'
                  ],
                  'whereClause' => [
                    'deleted' => 0,
                    'accountId' => '{value}'
                  ]
                ]
              ]
            ],
            'IS NULL' => [
              'whereClause' => [
                'accountId' => NULL
              ]
            ],
            'IS NOT NULL' => [
              'whereClause' => [
                'accountId!=' => NULL
              ]
            ]
          ]
        ],
        'title' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'view' => 'crm:views/contact/fields/title',
          'directUpdateDisabled' => true,
          'notStorable' => true,
          'select' => [
            'select' => 'accountContactPrimary.role',
            'leftJoins' => [
              0 => [
                0 => 'AccountContact',
                1 => 'accountContactPrimary',
                2 => [
                  'contact.id:' => 'accountContactPrimary.contactId',
                  'contact.accountId:' => 'accountContactPrimary.accountId',
                  'accountContactPrimary.deleted' => false
                ]
              ]
            ]
          ],
          'order' => [
            'order' => [
              0 => [
                0 => 'accountContactPrimary.role',
                1 => '{direction}'
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'AccountContact',
                1 => 'accountContactPrimary',
                2 => [
                  'contact.id:' => 'accountContactPrimary.contactId',
                  'contact.accountId:' => 'accountContactPrimary.accountId',
                  'accountContactPrimary.deleted' => false
                ]
              ]
            ]
          ],
          'where' => [
            'LIKE' => [
              'leftJoins' => [
                0 => 'accounts'
              ],
              'whereClause' => [
                'accountsMiddle.role*' => '{value}'
              ],
              'distinct' => true
            ],
            'NOT LIKE' => [
              'leftJoins' => [
                0 => 'accounts'
              ],
              'whereClause' => [
                'accountsMiddle.role!*' => '{value}'
              ],
              'distinct' => true
            ],
            '=' => [
              'leftJoins' => [
                0 => 'accounts'
              ],
              'whereClause' => [
                'accountsMiddle.role' => '{value}'
              ],
              'distinct' => true
            ],
            '<>' => [
              'leftJoins' => [
                0 => 'accounts'
              ],
              'whereClause' => [
                'accountsMiddle.role!=' => '{value}'
              ],
              'distinct' => true
            ],
            'IS NULL' => [
              'leftJoins' => [
                0 => 'accounts'
              ],
              'whereClause' => [
                'accountsMiddle.role=' => NULL
              ],
              'distinct' => true
            ],
            'IS NOT NULL' => [
              'leftJoins' => [
                0 => 'accounts'
              ],
              'whereClause' => [
                'accountsMiddle.role!=' => NULL
              ],
              'distinct' => true
            ]
          ],
          'trim' => true,
          'customizationOptionsDisabled' => true,
          'textFilterDisabled' => true
        ],
        'description' => [
          'type' => 'text'
        ],
        'emailAddress' => [
          'type' => 'email',
          'isPersonalData' => true
        ],
        'phoneNumber' => [
          'type' => 'phone',
          'typeList' => [
            0 => 'Mobile',
            1 => 'Office',
            2 => 'Home',
            3 => 'Fax',
            4 => 'Other'
          ],
          'defaultType' => 'Mobile',
          'isPersonalData' => true
        ],
        'doNotCall' => [
          'type' => 'bool'
        ],
        'address' => [
          'type' => 'address',
          'isPersonalData' => true
        ],
        'addressStreet' => [
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar'
        ],
        'addressCity' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-city',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'addressState' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-state',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'addressCountry' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-country',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'addressPostalCode' => [
          'type' => 'varchar',
          'maxLength' => 40,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'account' => [
          'type' => 'link',
          'view' => 'crm:views/contact/fields/account'
        ],
        'accounts' => [
          'type' => 'linkMultiple',
          'view' => 'crm:views/contact/fields/accounts',
          'columns' => [
            'role' => 'contactRole',
            'isInactive' => 'contactIsInactive'
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'orderBy' => 'name',
          'detailLayoutIncompatibleFieldList' => [
            0 => 'account'
          ]
        ],
        'accountRole' => [
          'type' => 'varchar',
          'notStorable' => true,
          'directUpdateDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutFiltersDisabled' => true,
          'layoutAvailabilityList' => [
            0 => 'listForAccount'
          ],
          'exportDisabled' => true,
          'importDisabled' => true,
          'view' => 'crm:views/contact/fields/account-role',
          'customizationOptionsDisabled' => true,
          'textFilterDisabled' => true
        ],
        'accountIsInactive' => [
          'type' => 'bool',
          'notStorable' => true,
          'mergeDisabled' => true,
          'select' => [
            'select' => 'accountContactPrimary.isInactive',
            'leftJoins' => [
              0 => [
                0 => 'AccountContact',
                1 => 'accountContactPrimary',
                2 => [
                  'contact.id:' => 'accountContactPrimary.contactId',
                  'contact.accountId:' => 'accountContactPrimary.accountId',
                  'accountContactPrimary.deleted' => false
                ]
              ]
            ]
          ],
          'order' => [
            'order' => [
              0 => [
                0 => 'accountContactPrimary.isInactive',
                1 => '{direction}'
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'AccountContact',
                1 => 'accountContactPrimary',
                2 => [
                  'contact.id:' => 'accountContactPrimary.contactId',
                  'contact.accountId:' => 'accountContactPrimary.accountId',
                  'accountContactPrimary.deleted' => false
                ]
              ]
            ]
          ],
          'where' => [
            '= TRUE' => [
              'leftJoins' => [
                0 => [
                  0 => 'AccountContact',
                  1 => 'accountContactFilterIsInactive',
                  2 => [
                    'accountContactFilterIsInactive.contactId:' => 'id',
                    'accountContactFilterIsInactive.accountId:' => 'accountId',
                    'accountContactFilterIsInactive.deleted' => false
                  ]
                ]
              ],
              'whereClause' => [
                'accountContactFilterIsInactive.isInactive' => true
              ]
            ],
            '= FALSE' => [
              'leftJoins' => [
                0 => [
                  0 => 'AccountContact',
                  1 => 'accountContactFilterIsInactive',
                  2 => [
                    'accountContactFilterIsInactive.contactId:' => 'id',
                    'accountContactFilterIsInactive.accountId:' => 'accountId',
                    'accountContactFilterIsInactive.deleted' => false
                  ]
                ]
              ],
              'whereClause' => [
                'OR' => [
                  0 => [
                    'accountContactFilterIsInactive.isInactive!=' => true
                  ],
                  1 => [
                    'accountContactFilterIsInactive.isInactive=' => NULL
                  ]
                ]
              ]
            ]
          ],
          'layoutListDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true
        ],
        'accountType' => [
          'type' => 'foreign',
          'link' => 'account',
          'field' => 'type',
          'readOnly' => true,
          'view' => 'views/fields/foreign-enum'
        ],
        'opportunityRole' => [
          'type' => 'enum',
          'notStorable' => true,
          'options' => [
            0 => '',
            1 => 'Decision Maker',
            2 => 'Evaluator',
            3 => 'Influencer'
          ],
          'layoutMassUpdateDisabled' => true,
          'layoutListDisabled' => true,
          'layoutDetailDisabled' => true,
          'customizationRequiredDisabled' => true,
          'customizationIsSortedDisabled' => true,
          'customizationAuditedDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'where' => [
            '=' => [
              'whereClause' => [
                'opportunitiesMiddle.role' => '{value}'
              ],
              'leftJoins' => [
                0 => 'opportunities'
              ],
              'distinct' => true
            ],
            '<>' => [
              'whereClause' => [
                'id!=s' => [
                  'from' => 'ContactOpportunity',
                  'select' => [
                    0 => 'contactId'
                  ],
                  'whereClause' => [
                    'deleted' => false,
                    'role' => '{value}'
                  ]
                ]
              ]
            ],
            'IN' => [
              'leftJoins' => [
                0 => 'opportunities'
              ],
              'whereClause' => [
                'opportunitiesMiddle.role' => '{value}'
              ],
              'distinct' => true
            ],
            'NOT IN' => [
              'whereClause' => [
                'id!=s' => [
                  'from' => 'ContactOpportunity',
                  'select' => [
                    0 => 'contactId'
                  ],
                  'whereClause' => [
                    'deleted' => false,
                    'role' => '{value}'
                  ]
                ]
              ]
            ],
            'LIKE' => [
              'leftJoins' => [
                0 => 'opportunities'
              ],
              'whereClause' => [
                'opportunitiesMiddle.role*' => '{value}'
              ],
              'distinct' => true
            ],
            'NOT LIKE' => [
              'leftJoins' => [
                0 => 'opportunities'
              ],
              'whereClause' => [
                'opportunitiesMiddle.role!*' => '{value}'
              ],
              'distinct' => true
            ],
            'IS NULL' => [
              'leftJoins' => [
                0 => 'opportunities'
              ],
              'whereClause' => [
                'opportunitiesMiddle.role' => NULL
              ],
              'distinct' => true
            ],
            'IS NOT NULL' => [
              'whereClause' => [
                'id!=s' => [
                  'from' => 'ContactOpportunity',
                  'select' => [
                    0 => 'contactId'
                  ],
                  'whereClause' => [
                    'deleted' => false,
                    'role' => NULL
                  ]
                ]
              ]
            ]
          ],
          'view' => 'crm:views/contact/fields/opportunity-role'
        ],
        'acceptanceStatus' => [
          'type' => 'varchar',
          'notStorable' => true,
          'exportDisabled' => true,
          'disabled' => true,
          'fieldManagerParamList' => []
        ],
        'acceptanceStatusMeetings' => [
          'type' => 'enum',
          'notStorable' => true,
          'directUpdateDisabled' => true,
          'layoutAvailabilityList' => [
            0 => 'filters'
          ],
          'importDisabled' => true,
          'exportDisabled' => true,
          'view' => 'crm:views/lead/fields/acceptance-status',
          'link' => 'meetings',
          'column' => 'status',
          'fieldManagerParamList' => []
        ],
        'acceptanceStatusCalls' => [
          'type' => 'enum',
          'notStorable' => true,
          'directUpdateDisabled' => true,
          'layoutAvailabilityList' => [
            0 => 'filters'
          ],
          'importDisabled' => true,
          'exportDisabled' => true,
          'view' => 'crm:views/lead/fields/acceptance-status',
          'link' => 'calls',
          'column' => 'status',
          'fieldManagerParamList' => []
        ],
        'campaign' => [
          'type' => 'link',
          'layoutListDisabled' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'assignedUser' => [
          'type' => 'link',
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'targetLists' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'importDisabled' => true,
          'noLoad' => true
        ],
        'targetList' => [
          'type' => 'link',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutFiltersDisabled' => true,
          'exportDisabled' => true,
          'entity' => 'TargetList',
          'directAccessDisabled' => true
        ],
        'portalUser' => [
          'type' => 'linkOne',
          'readOnly' => true,
          'notStorable' => true,
          'view' => 'views/fields/link-one'
        ],
        'hasPortalUser' => [
          'type' => 'bool',
          'notStorable' => true,
          'readOnly' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'foreignAccessDisabled' => true,
          'select' => [
            'select' => 'IS_NOT_NULL:(portalUser.id)',
            'leftJoins' => [
              0 => [
                0 => 'portalUser',
                1 => 'portalUser'
              ]
            ]
          ],
          'where' => [
            '= TRUE' => [
              'whereClause' => [
                'portalUser.id!=' => NULL
              ],
              'leftJoins' => [
                0 => [
                  0 => 'portalUser',
                  1 => 'portalUser'
                ]
              ]
            ],
            '= FALSE' => [
              'whereClause' => [
                'portalUser.id=' => NULL
              ],
              'leftJoins' => [
                0 => [
                  0 => 'portalUser',
                  1 => 'portalUser'
                ]
              ]
            ]
          ],
          'order' => [
            'order' => [
              0 => [
                0 => 'portalUser.id',
                1 => '{direction}'
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'portalUser',
                1 => 'portalUser'
              ]
            ],
            'additionalSelect' => [
              0 => 'portalUser.id'
            ]
          ]
        ],
        'originalLead' => [
          'type' => 'linkOne',
          'readOnly' => true,
          'view' => 'views/fields/link-one'
        ],
        'targetListIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'middleName' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 100,
          'pattern' => '$noBadCharacters'
        ],
        'emailAddressIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ],
        'phoneNumberIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ],
        'addressMap' => [
          'type' => 'map',
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'provider' => 'Google',
          'height' => 300,
          'exportDisabled' => true,
          'importDisabled' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'account' => [
          'type' => 'belongsTo',
          'entity' => 'Account'
        ],
        'accounts' => [
          'type' => 'hasMany',
          'entity' => 'Account',
          'foreign' => 'contacts',
          'additionalColumns' => [
            'role' => [
              'type' => 'varchar',
              'len' => 100
            ],
            'isInactive' => [
              'type' => 'bool',
              'default' => false
            ]
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'layoutRelationshipsDisabled' => true,
          'columnAttributeMap' => [
            'role' => 'accountRole',
            'isInactive' => 'accountIsInactive'
          ]
        ],
        'opportunities' => [
          'type' => 'hasMany',
          'entity' => 'Opportunity',
          'foreign' => 'contacts',
          'columnAttributeMap' => [
            'role' => 'opportunityRole'
          ]
        ],
        'opportunitiesPrimary' => [
          'type' => 'hasMany',
          'entity' => 'Opportunity',
          'foreign' => 'contact',
          'layoutRelationshipsDisabled' => true
        ],
        'casesPrimary' => [
          'type' => 'hasMany',
          'entity' => 'Case',
          'foreign' => 'contact',
          'layoutRelationshipsDisabled' => true
        ],
        'cases' => [
          'type' => 'hasMany',
          'entity' => 'Case',
          'foreign' => 'contacts'
        ],
        'meetings' => [
          'type' => 'hasMany',
          'entity' => 'Meeting',
          'foreign' => 'contacts',
          'layoutRelationshipsDisabled' => true,
          'audited' => true,
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'calls' => [
          'type' => 'hasMany',
          'entity' => 'Call',
          'foreign' => 'contacts',
          'layoutRelationshipsDisabled' => true,
          'audited' => true,
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'tasks' => [
          'type' => 'hasChildren',
          'entity' => 'Task',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'emails' => [
          'type' => 'hasChildren',
          'entity' => 'Email',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true
        ],
        'campaign' => [
          'type' => 'belongsTo',
          'entity' => 'Campaign',
          'foreign' => 'contacts'
        ],
        'campaignLogRecords' => [
          'type' => 'hasChildren',
          'entity' => 'CampaignLogRecord',
          'foreign' => 'parent'
        ],
        'targetLists' => [
          'type' => 'hasMany',
          'entity' => 'TargetList',
          'foreign' => 'contacts',
          'columnAttributeMap' => [
            'optedOut' => 'targetListIsOptedOut'
          ]
        ],
        'portalUser' => [
          'type' => 'hasOne',
          'entity' => 'User',
          'foreign' => 'contact'
        ],
        'originalLead' => [
          'type' => 'hasOne',
          'entity' => 'Lead',
          'foreign' => 'createdContact'
        ],
        'documents' => [
          'type' => 'hasMany',
          'entity' => 'Document',
          'foreign' => 'contacts',
          'audited' => true
        ],
        'tasksPrimary' => [
          'type' => 'hasMany',
          'entity' => 'Task',
          'foreign' => 'contact',
          'layoutRelationshipsDisabled' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name',
          1 => 'emailAddress'
        ],
        'fullTextSearch' => false,
        'countDisabled' => false,
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'createdAt' => [
          'columns' => [
            0 => 'createdAt',
            1 => 'deleted'
          ]
        ],
        'createdAtId' => [
          'unique' => true,
          'columns' => [
            0 => 'createdAt',
            1 => 'id'
          ]
        ],
        'firstName' => [
          'columns' => [
            0 => 'firstName',
            1 => 'deleted'
          ]
        ],
        'name' => [
          'columns' => [
            0 => 'firstName',
            1 => 'lastName'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ],
      'optimisticConcurrencyControl' => false
    ],
    'Document' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'view' => 'crm:views/document/fields/name',
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'file' => [
          'type' => 'file',
          'required' => true,
          'view' => 'crm:views/document/fields/file',
          'accept' => [
            0 => '.pdf',
            1 => '.odt',
            2 => '.ods',
            3 => '.odp',
            4 => '.docx',
            5 => '.xlsx',
            6 => '.pptx',
            7 => '.doc',
            8 => '.xls',
            9 => '.ppt',
            10 => '.rtf',
            11 => '.csv',
            12 => '.md',
            13 => '.txt'
          ]
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Active',
            1 => 'Draft',
            2 => 'Expired',
            3 => 'Canceled'
          ],
          'style' => [
            'Canceled' => 'danger',
            'Expired' => 'danger'
          ]
        ],
        'type' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Contract',
            2 => 'NDA',
            3 => 'EULA',
            4 => 'License Agreement'
          ]
        ],
        'publishDate' => [
          'type' => 'date',
          'required' => true,
          'default' => 'javascript: return this.dateTime.getToday();'
        ],
        'expirationDate' => [
          'type' => 'date',
          'after' => 'publishDate'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'assignedUser' => [
          'type' => 'link',
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'accounts' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'importDisabled' => true,
          'noLoad' => true
        ],
        'folder' => [
          'type' => 'link',
          'view' => 'views/fields/link-category-tree'
        ]
      ],
      'links' => [
        'accounts' => [
          'type' => 'hasMany',
          'entity' => 'Account',
          'foreign' => 'documents'
        ],
        'opportunities' => [
          'type' => 'hasMany',
          'entity' => 'Opportunity',
          'foreign' => 'documents'
        ],
        'leads' => [
          'type' => 'hasMany',
          'entity' => 'Lead',
          'foreign' => 'documents'
        ],
        'contacts' => [
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'documents'
        ],
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'folder' => [
          'type' => 'belongsTo',
          'foreign' => 'documents',
          'entity' => 'DocumentFolder'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ]
    ],
    'DocumentFolder' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'fieldManagerParamList' => []
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'fieldManagerParamList' => []
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'parent' => [
          'type' => 'link'
        ],
        'childList' => [
          'type' => 'jsonArray',
          'notStorable' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'parent' => [
          'type' => 'belongsTo',
          'foreign' => 'children',
          'entity' => 'DocumentFolder'
        ],
        'children' => [
          'type' => 'hasMany',
          'foreign' => 'parent',
          'entity' => 'DocumentFolder'
        ],
        'documents' => [
          'type' => 'hasMany',
          'foreign' => 'folder',
          'entity' => 'Document'
        ]
      ],
      'collection' => [
        'orderBy' => 'parent',
        'order' => 'asc',
        'sortBy' => 'parent',
        'asc' => true
      ],
      'additionalTables' => [
        'DocumentFolderPath' => [
          'fields' => [
            'id' => [
              'type' => 'id',
              'dbType' => 'int',
              'len' => '11',
              'autoincrement' => true
            ],
            'ascendorId' => [
              'type' => 'varchar',
              'len' => '100',
              'index' => true
            ],
            'descendorId' => [
              'type' => 'varchar',
              'len' => '24',
              'index' => true
            ]
          ]
        ]
      ]
    ],
    'EmailQueueItem' => [
      'fields' => [
        'massEmail' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Pending',
            1 => 'Sent',
            2 => 'Failed',
            3 => 'Sending'
          ],
          'readOnly' => true
        ],
        'attemptCount' => [
          'type' => 'int',
          'readOnly' => true,
          'default' => 0
        ],
        'target' => [
          'type' => 'linkParent',
          'readOnly' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'sentAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'emailAddress' => [
          'type' => 'varchar',
          'readOnly' => true
        ],
        'isTest' => [
          'type' => 'bool'
        ]
      ],
      'links' => [
        'massEmail' => [
          'type' => 'belongsTo',
          'entity' => 'MassEmail',
          'foreign' => 'queueItems'
        ],
        'target' => [
          'type' => 'belongsToParent'
        ]
      ],
      'collection' => [
        'textFilterFields' => [
          0 => 'id',
          1 => 'emailAddress'
        ],
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ]
    ],
    'KnowledgeBaseArticle' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Draft',
            1 => 'In Review',
            2 => 'Published',
            3 => 'Archived'
          ],
          'view' => 'crm:views/knowledge-base-article/fields/status',
          'default' => 'Draft'
        ],
        'language' => [
          'type' => 'enum',
          'view' => 'crm:views/knowledge-base-article/fields/language',
          'customizationOptionsDisabled' => true
        ],
        'type' => [
          'type' => 'enum',
          'options' => [
            0 => 'Article'
          ],
          'default' => 'Article'
        ],
        'portals' => [
          'type' => 'linkMultiple',
          'tooltip' => true
        ],
        'publishDate' => [
          'type' => 'date'
        ],
        'expirationDate' => [
          'type' => 'date',
          'after' => 'publishDate'
        ],
        'order' => [
          'type' => 'int',
          'disableFormatting' => true,
          'textFilterDisabled' => true
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'fieldManagerParamList' => []
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'fieldManagerParamList' => []
        ],
        'assignedUser' => [
          'type' => 'link',
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'categories' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/link-multiple-category-tree'
        ],
        'attachments' => [
          'type' => 'attachmentMultiple'
        ],
        'body' => [
          'type' => 'wysiwyg'
        ]
      ],
      'links' => [
        'cases' => [
          'type' => 'hasMany',
          'entity' => 'Case',
          'foreign' => 'articles'
        ],
        'portals' => [
          'type' => 'hasMany',
          'entity' => 'Portal',
          'foreign' => 'articles'
        ],
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'categories' => [
          'type' => 'hasMany',
          'foreign' => 'articles',
          'entity' => 'KnowledgeBaseCategory'
        ]
      ],
      'collection' => [
        'orderBy' => 'order',
        'order' => 'asc',
        'sortBy' => 'order',
        'asc' => true
      ],
      'optimisticConcurrencyControl' => true
    ],
    'KnowledgeBaseCategory' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'fieldManagerParamList' => []
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'fieldManagerParamList' => []
        ],
        'order' => [
          'type' => 'int',
          'required' => true,
          'disableFormatting' => true,
          'textFilterDisabled' => true
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'parent' => [
          'type' => 'link'
        ],
        'childList' => [
          'type' => 'jsonArray',
          'notStorable' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'parent' => [
          'type' => 'belongsTo',
          'foreign' => 'children',
          'entity' => 'KnowledgeBaseCategory'
        ],
        'children' => [
          'type' => 'hasMany',
          'foreign' => 'parent',
          'entity' => 'KnowledgeBaseCategory'
        ],
        'articles' => [
          'type' => 'hasMany',
          'foreign' => 'categories',
          'entity' => 'KnowledgeBaseArticle'
        ]
      ],
      'collection' => [
        'orderBy' => 'parent',
        'orderByColumn' => 'parentId',
        'order' => 'asc',
        'sortBy' => 'parent',
        'asc' => true
      ],
      'additionalTables' => [
        'KnowledgeBaseCategoryPath' => [
          'fields' => [
            'id' => [
              'type' => 'id',
              'dbType' => 'int',
              'len' => '11',
              'autoincrement' => true
            ],
            'ascendorId' => [
              'type' => 'varchar',
              'len' => '100',
              'index' => true
            ],
            'descendorId' => [
              'type' => 'varchar',
              'len' => '24',
              'index' => true
            ]
          ]
        ]
      ]
    ],
    'Lead' => [
      'fields' => [
        'name' => [
          'type' => 'personName',
          'isPersonalData' => true,
          'dependeeAttributeList' => [
            0 => 'emailAddress',
            1 => 'phoneNumber',
            2 => 'accountName'
          ]
        ],
        'salutationName' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Mr.',
            2 => 'Ms.',
            3 => 'Mrs.',
            4 => 'Dr.'
          ]
        ],
        'firstName' => [
          'type' => 'varchar',
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'maxLength' => 100,
          'default' => ''
        ],
        'lastName' => [
          'type' => 'varchar',
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'maxLength' => 100,
          'default' => ''
        ],
        'title' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'pattern' => '$noBadCharacters'
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'New',
            1 => 'Assigned',
            2 => 'In Process',
            3 => 'Converted',
            4 => 'Recycled',
            5 => 'Dead'
          ],
          'default' => 'New',
          'style' => [
            'Converted' => 'success',
            'Recycled' => 'danger',
            'Dead' => 'danger'
          ],
          'audited' => true,
          'fieldManagerAdditionalParamList' => [
            0 => [
              'name' => 'notActualOptions',
              'view' => 'views/admin/field-manager/fields/not-actual-options'
            ]
          ],
          'notActualOptions' => [
            0 => 'Converted',
            1 => 'Recycled',
            2 => 'Dead'
          ]
        ],
        'source' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Call',
            2 => 'Email',
            3 => 'Existing Customer',
            4 => 'Partner',
            5 => 'Public Relations',
            6 => 'Web Site',
            7 => 'Campaign',
            8 => 'Other'
          ]
        ],
        'industry' => [
          'type' => 'enum',
          'view' => 'crm:views/lead/fields/industry',
          'customizationOptionsDisabled' => true,
          'optionsPath' => 'entityDefs.Account.fields.industry.options',
          'translation' => 'Account.options.industry',
          'default' => '',
          'isSorted' => true
        ],
        'opportunityAmount' => [
          'type' => 'currency',
          'min' => 0,
          'audited' => true
        ],
        'opportunityAmountConverted' => [
          'type' => 'currencyConverted',
          'readOnly' => true,
          'importDisabled' => true
        ],
        'website' => [
          'type' => 'url',
          'strip' => true
        ],
        'address' => [
          'type' => 'address',
          'isPersonalData' => true
        ],
        'addressStreet' => [
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar'
        ],
        'addressCity' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-city',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'addressState' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-state',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'addressCountry' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-country',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'addressPostalCode' => [
          'type' => 'varchar',
          'maxLength' => 40,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'emailAddress' => [
          'type' => 'email',
          'isPersonalData' => true
        ],
        'phoneNumber' => [
          'type' => 'phone',
          'typeList' => [
            0 => 'Mobile',
            1 => 'Office',
            2 => 'Home',
            3 => 'Fax',
            4 => 'Other'
          ],
          'defaultType' => 'Mobile',
          'isPersonalData' => true
        ],
        'doNotCall' => [
          'type' => 'bool'
        ],
        'description' => [
          'type' => 'text'
        ],
        'convertedAt' => [
          'type' => 'datetime',
          'layoutMassUpdateDisabled' => true,
          'readOnly' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'accountName' => [
          'type' => 'varchar',
          'pattern' => '$noBadCharacters'
        ],
        'assignedUser' => [
          'type' => 'link',
          'view' => 'views/fields/assigned-user'
        ],
        'acceptanceStatus' => [
          'type' => 'varchar',
          'notStorable' => true,
          'exportDisabled' => true,
          'disabled' => true,
          'fieldManagerParamList' => []
        ],
        'acceptanceStatusMeetings' => [
          'type' => 'enum',
          'notStorable' => true,
          'directUpdateDisabled' => true,
          'layoutAvailabilityList' => [
            0 => 'filters'
          ],
          'importDisabled' => true,
          'exportDisabled' => true,
          'view' => 'crm:views/lead/fields/acceptance-status',
          'link' => 'meetings',
          'column' => 'status',
          'fieldManagerParamList' => []
        ],
        'acceptanceStatusCalls' => [
          'type' => 'enum',
          'notStorable' => true,
          'directUpdateDisabled' => true,
          'layoutAvailabilityList' => [
            0 => 'filters'
          ],
          'importDisabled' => true,
          'exportDisabled' => true,
          'view' => 'crm:views/lead/fields/acceptance-status',
          'link' => 'calls',
          'column' => 'status',
          'fieldManagerParamList' => []
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'campaign' => [
          'type' => 'link',
          'layoutListDisabled' => true
        ],
        'createdAccount' => [
          'type' => 'link',
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true
        ],
        'createdContact' => [
          'type' => 'link',
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'view' => 'crm:views/lead/fields/created-contact'
        ],
        'createdOpportunity' => [
          'type' => 'link',
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'view' => 'crm:views/lead/fields/created-opportunity'
        ],
        'targetLists' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'importDisabled' => true,
          'noLoad' => true
        ],
        'targetList' => [
          'type' => 'link',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutFiltersDisabled' => true,
          'entity' => 'TargetList',
          'directAccessDisabled' => true
        ],
        'targetListIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'middleName' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 100,
          'pattern' => '$noBadCharacters'
        ],
        'opportunityAmountCurrency' => [
          'type' => 'enum',
          'view' => 'views/fields/currency-list',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'customizationRequiredDisabled' => true,
          'customizationOptionsDisabled' => true,
          'customizationIsSortedDisabled' => true,
          'customizationDisplayAsLabelDisabled' => true,
          'customizationAuditedDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'customizationDefaultView' => 'views/admin/field-manager/fields/currency-default',
          'maxLength' => 6
        ],
        'addressMap' => [
          'type' => 'map',
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'provider' => 'Google',
          'height' => 300,
          'exportDisabled' => true,
          'importDisabled' => true
        ],
        'emailAddressIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ],
        'phoneNumberIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'meetings' => [
          'type' => 'hasMany',
          'entity' => 'Meeting',
          'foreign' => 'leads',
          'layoutRelationshipsDisabled' => true,
          'audited' => true,
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'calls' => [
          'type' => 'hasMany',
          'entity' => 'Call',
          'foreign' => 'leads',
          'layoutRelationshipsDisabled' => true,
          'audited' => true,
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'tasks' => [
          'type' => 'hasChildren',
          'entity' => 'Task',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'cases' => [
          'type' => 'hasMany',
          'entity' => 'Case',
          'foreign' => 'lead',
          'audited' => true
        ],
        'emails' => [
          'type' => 'hasChildren',
          'entity' => 'Email',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true
        ],
        'createdAccount' => [
          'type' => 'belongsTo',
          'entity' => 'Account',
          'foreign' => 'originalLead'
        ],
        'createdContact' => [
          'type' => 'belongsTo',
          'entity' => 'Contact',
          'foreign' => 'originalLead'
        ],
        'createdOpportunity' => [
          'type' => 'belongsTo',
          'entity' => 'Opportunity',
          'foreign' => 'originalLead'
        ],
        'campaign' => [
          'type' => 'belongsTo',
          'entity' => 'Campaign',
          'foreign' => 'leads'
        ],
        'campaignLogRecords' => [
          'type' => 'hasChildren',
          'entity' => 'CampaignLogRecord',
          'foreign' => 'parent'
        ],
        'targetLists' => [
          'type' => 'hasMany',
          'entity' => 'TargetList',
          'foreign' => 'leads',
          'columnAttributeMap' => [
            'optedOut' => 'targetListIsOptedOut'
          ]
        ],
        'documents' => [
          'type' => 'hasMany',
          'entity' => 'Document',
          'foreign' => 'leads',
          'audited' => true
        ]
      ],
      'convertEntityList' => [
        0 => 'Account',
        1 => 'Contact',
        2 => 'Opportunity'
      ],
      'convertFields' => [
        'Contact' => [],
        'Account' => [
          'name' => 'accountName',
          'billingAddressStreet' => 'addressStreet',
          'billingAddressCity' => 'addressCity',
          'billingAddressState' => 'addressState',
          'billingAddressPostalCode' => 'addressPostalCode',
          'billingAddressCountry' => 'addressCountry'
        ],
        'Opportunity' => [
          'amount' => 'opportunityAmount',
          'leadSource' => 'source'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name',
          1 => 'accountName',
          2 => 'emailAddress'
        ],
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'firstName' => [
          'columns' => [
            0 => 'firstName',
            1 => 'deleted'
          ]
        ],
        'name' => [
          'columns' => [
            0 => 'firstName',
            1 => 'lastName'
          ]
        ],
        'status' => [
          'columns' => [
            0 => 'status',
            1 => 'deleted'
          ]
        ],
        'createdAt' => [
          'columns' => [
            0 => 'createdAt',
            1 => 'deleted'
          ]
        ],
        'createdAtStatus' => [
          'columns' => [
            0 => 'createdAt',
            1 => 'status'
          ]
        ],
        'createdAtId' => [
          'unique' => true,
          'columns' => [
            0 => 'createdAt',
            1 => 'id'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ],
        'assignedUserStatus' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'status'
          ]
        ]
      ]
    ],
    'MassEmail' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Draft',
            1 => 'Pending',
            2 => 'Complete',
            3 => 'In Process',
            4 => 'Failed'
          ],
          'default' => 'Pending'
        ],
        'storeSentEmails' => [
          'type' => 'bool',
          'default' => false,
          'tooltip' => true
        ],
        'optOutEntirely' => [
          'type' => 'bool',
          'default' => false,
          'tooltip' => true
        ],
        'fromAddress' => [
          'type' => 'varchar',
          'trim' => true,
          'view' => 'crm:views/mass-email/fields/from-address'
        ],
        'fromName' => [
          'type' => 'varchar'
        ],
        'replyToAddress' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'replyToName' => [
          'type' => 'varchar'
        ],
        'startAt' => [
          'type' => 'datetime',
          'required' => true
        ],
        'emailTemplate' => [
          'type' => 'link',
          'required' => true,
          'view' => 'crm:views/mass-email/fields/email-template'
        ],
        'campaign' => [
          'type' => 'link'
        ],
        'targetLists' => [
          'type' => 'linkMultiple',
          'required' => true,
          'tooltip' => true
        ],
        'excludingTargetLists' => [
          'type' => 'linkMultiple',
          'tooltip' => true
        ],
        'inboundEmail' => [
          'type' => 'link'
        ],
        'smtpAccount' => [
          'type' => 'base',
          'notStorable' => true,
          'view' => 'crm:views/mass-email/fields/smtp-account'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'emailTemplate' => [
          'type' => 'belongsTo',
          'entity' => 'EmailTemplate'
        ],
        'campaign' => [
          'type' => 'belongsTo',
          'entity' => 'Campaign',
          'foreign' => 'massEmails'
        ],
        'targetLists' => [
          'type' => 'hasMany',
          'entity' => 'TargetList',
          'foreign' => 'massEmails'
        ],
        'excludingTargetLists' => [
          'type' => 'hasMany',
          'entity' => 'TargetList',
          'foreign' => 'massEmailsExcluding',
          'relationName' => 'massEmailTargetListExcluding'
        ],
        'inboundEmail' => [
          'type' => 'belongsTo',
          'entity' => 'InboundEmail'
        ],
        'queueItems' => [
          'type' => 'hasMany',
          'entity' => 'EmailQueueItem',
          'foreign' => 'massEmail'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ]
    ],
    'Meeting' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Planned',
            1 => 'Held',
            2 => 'Not Held'
          ],
          'default' => 'Planned',
          'style' => [
            'Held' => 'success'
          ],
          'audited' => true
        ],
        'dateStart' => [
          'type' => 'datetimeOptional',
          'view' => 'crm:views/meeting/fields/date-start',
          'required' => true,
          'default' => 'javascript: return this.dateTime.getNow(15);',
          'audited' => true
        ],
        'dateEnd' => [
          'type' => 'datetimeOptional',
          'view' => 'crm:views/meeting/fields/date-end',
          'required' => true,
          'after' => 'dateStart'
        ],
        'isAllDay' => [
          'type' => 'bool',
          'layoutListDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true
        ],
        'duration' => [
          'type' => 'duration',
          'start' => 'dateStart',
          'end' => 'dateEnd',
          'options' => [
            0 => 900,
            1 => 1800,
            2 => 3600,
            3 => 7200,
            4 => 10800,
            5 => 86400
          ],
          'default' => 3600,
          'notStorable' => true,
          'select' => [
            'select' => 'TIMESTAMPDIFF_SECOND:(dateStart, dateEnd)'
          ],
          'order' => [
            'order' => [
              0 => [
                0 => 'TIMESTAMPDIFF_SECOND:(dateStart, dateEnd)',
                1 => '{direction}'
              ]
            ]
          ]
        ],
        'reminders' => [
          'type' => 'jsonArray',
          'notStorable' => true,
          'view' => 'crm:views/meeting/fields/reminders',
          'layoutListDisabled' => true
        ],
        'description' => [
          'type' => 'text'
        ],
        'parent' => [
          'type' => 'linkParent',
          'entityList' => [
            0 => 'Account',
            1 => 'Lead',
            2 => 'Contact',
            3 => 'Opportunity',
            4 => 'Case'
          ]
        ],
        'account' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'acceptanceStatus' => [
          'type' => 'enum',
          'notStorable' => true,
          'options' => [
            0 => 'None',
            1 => 'Accepted',
            2 => 'Tentative',
            3 => 'Declined'
          ],
          'style' => [
            'Accepted' => 'success',
            'Declined' => 'danger',
            'Tentative' => 'warning'
          ],
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'importDisabled' => true,
          'exportDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationRequiredDisabled' => true,
          'customizationIsSortedDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'customizationAuditedDisabled' => true,
          'where' => [
            '=' => [
              'whereClause' => [
                'OR' => [
                  'contactsMiddle.status' => '{value}',
                  'leadsMiddle.status' => '{value}',
                  'usersMiddle.status' => '{value}'
                ]
              ],
              'leftJoins' => [
                0 => 'users',
                1 => 'contacts',
                2 => 'leads'
              ],
              'distinct' => true
            ],
            '<>' => [
              'whereClause' => [
                0 => [
                  'id!=s' => [
                    'from' => 'ContactMeeting',
                    'select' => [
                      0 => 'meetingId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ],
                1 => [
                  'id!=s' => [
                    'from' => 'LeadMeeting',
                    'select' => [
                      0 => 'meetingId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ],
                2 => [
                  'id!=s' => [
                    'from' => 'MeetingUser',
                    'select' => [
                      0 => 'meetingId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ]
              ]
            ],
            'IN' => [
              'leftJoins' => [
                0 => 'users',
                1 => 'leads',
                2 => 'contacts'
              ],
              'whereClause' => [
                'OR' => [
                  'contactsMiddle.status' => '{value}',
                  'leadsMiddle.status' => '{value}',
                  'usersMiddle.status' => '{value}'
                ]
              ],
              'distinct' => true
            ],
            'NOT IN' => [
              'whereClause' => [
                0 => [
                  'id!=s' => [
                    'from' => 'ContactMeeting',
                    'select' => [
                      0 => 'meetingId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ],
                1 => [
                  'id!=s' => [
                    'from' => 'LeadMeeting',
                    'select' => [
                      0 => 'meetingId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ],
                2 => [
                  'id!=s' => [
                    'from' => 'MeetingUser',
                    'select' => [
                      0 => 'meetingId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ]
              ]
            ],
            'IS NULL' => [
              'leftJoins' => [
                0 => 'users',
                1 => 'contacts',
                2 => 'leads'
              ],
              'whereClause' => [
                'contactsMiddle.status' => NULL,
                'leadsMiddle.status' => NULL,
                'usersMiddle.status' => NULL
              ],
              'distinct' => true
            ],
            'IS NOT NULL' => [
              'whereClause' => [
                0 => [
                  'id!=s' => [
                    'from' => 'ContactMeeting',
                    'select' => [
                      0 => 'meetingId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => NULL
                    ]
                  ]
                ],
                1 => [
                  'id!=s' => [
                    'from' => 'LeadMeeting',
                    'select' => [
                      0 => 'meetingId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => NULL
                    ]
                  ]
                ],
                2 => [
                  'id!=s' => [
                    'from' => 'MeetingUser',
                    'select' => [
                      0 => 'meetingId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => NULL
                    ]
                  ]
                ]
              ]
            ]
          ],
          'view' => 'crm:views/meeting/fields/acceptance-status'
        ],
        'users' => [
          'type' => 'linkMultiple',
          'view' => 'crm:views/meeting/fields/users',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'columns' => [
            'status' => 'acceptanceStatus'
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'orderBy' => 'name'
        ],
        'contacts' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'view' => 'crm:views/meeting/fields/contacts',
          'columns' => [
            'status' => 'acceptanceStatus'
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'orderBy' => 'name'
        ],
        'leads' => [
          'type' => 'linkMultiple',
          'view' => 'crm:views/meeting/fields/attendees',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'columns' => [
            'status' => 'acceptanceStatus'
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'orderBy' => 'name'
        ],
        'sourceEmail' => [
          'type' => 'link',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutFiltersDisabled' => true,
          'exportDisabled' => true,
          'importDisabled' => true,
          'entity' => 'TargetList',
          'directAccessDisabled' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'dateStartDate' => [
          'type' => 'date',
          'disabled' => true
        ],
        'dateEndDate' => [
          'type' => 'date',
          'disabled' => true
        ]
      ],
      'links' => [
        'account' => [
          'type' => 'belongsTo',
          'entity' => 'Account'
        ],
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'users' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'meetings',
          'additionalColumns' => [
            'status' => [
              'type' => 'varchar',
              'len' => '36',
              'default' => 'None'
            ]
          ],
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'contacts' => [
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'meetings',
          'additionalColumns' => [
            'status' => [
              'type' => 'varchar',
              'len' => '36',
              'default' => 'None'
            ]
          ],
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'leads' => [
          'type' => 'hasMany',
          'entity' => 'Lead',
          'foreign' => 'meetings',
          'additionalColumns' => [
            'status' => [
              'type' => 'varchar',
              'len' => '36',
              'default' => 'None'
            ]
          ],
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'parent' => [
          'type' => 'belongsToParent',
          'foreign' => 'meetings'
        ]
      ],
      'collection' => [
        'orderBy' => 'dateStart',
        'order' => 'desc',
        'sortBy' => 'dateStart',
        'asc' => false
      ],
      'indexes' => [
        'dateStartStatus' => [
          'columns' => [
            0 => 'dateStart',
            1 => 'status'
          ]
        ],
        'dateStart' => [
          'columns' => [
            0 => 'dateStart',
            1 => 'deleted'
          ]
        ],
        'status' => [
          'columns' => [
            0 => 'status',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ],
        'assignedUserStatus' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'status'
          ]
        ]
      ]
    ],
    'Opportunity' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'amount' => [
          'type' => 'currency',
          'required' => true,
          'min' => 0,
          'audited' => true
        ],
        'amountConverted' => [
          'type' => 'currencyConverted',
          'readOnly' => true,
          'importDisabled' => true
        ],
        'amountWeightedConverted' => [
          'type' => 'float',
          'readOnly' => true,
          'notStorable' => true,
          'select' => [
            'select' => 'DIV:(MUL:(amount, probability, amountCurrencyRate.rate), 100)',
            'leftJoins' => [
              0 => [
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => [
                  'amountCurrencyRate.id:' => 'amountCurrency'
                ]
              ]
            ]
          ],
          'where' => [
            '=' => [
              'whereClause' => [
                'DIV:(MUL:(amount, probability, amountCurrencyRate.rate), 100)=' => '{value}'
              ],
              'leftJoins' => [
                0 => [
                  0 => 'Currency',
                  1 => 'amountCurrencyRate',
                  2 => [
                    'amountCurrencyRate.id:' => 'amountCurrency'
                  ]
                ]
              ]
            ],
            '<' => [
              'whereClause' => [
                'DIV:(MUL:(amount, probability, amountCurrencyRate.rate), 100)<' => '{value}'
              ],
              'leftJoins' => [
                0 => [
                  0 => 'Currency',
                  1 => 'amountCurrencyRate',
                  2 => [
                    'amountCurrencyRate.id:' => 'amountCurrency'
                  ]
                ]
              ]
            ],
            '>' => [
              'whereClause' => [
                'DIV:(MUL:(amount, probability, amountCurrencyRate.rate), 100)>' => '{value}'
              ],
              'leftJoins' => [
                0 => [
                  0 => 'Currency',
                  1 => 'amountCurrencyRate',
                  2 => [
                    'amountCurrencyRate.id:' => 'amountCurrency'
                  ]
                ]
              ]
            ],
            '<=' => [
              'whereClause' => [
                'DIV:(MUL:(amount, probability, amountCurrencyRate.rate), 100)<=' => '{value}'
              ],
              'leftJoins' => [
                0 => [
                  0 => 'Currency',
                  1 => 'amountCurrencyRate',
                  2 => [
                    'amountCurrencyRate.id:' => 'amountCurrency'
                  ]
                ]
              ]
            ],
            '>=' => [
              'whereClause' => [
                'DIV:(MUL:(amount, probability, amountCurrencyRate.rate), 100)>=' => '{value}'
              ],
              'leftJoins' => [
                0 => [
                  0 => 'Currency',
                  1 => 'amountCurrencyRate',
                  2 => [
                    'amountCurrencyRate.id:' => 'amountCurrency'
                  ]
                ]
              ]
            ],
            '<>' => [
              'whereClause' => [
                'DIV:(MUL:(amount, probability, amountCurrencyRate.rate), 100)!=' => '{value}'
              ],
              'leftJoins' => [
                0 => [
                  0 => 'Currency',
                  1 => 'amountCurrencyRate',
                  2 => [
                    'amountCurrencyRate.id:' => 'amountCurrency'
                  ]
                ]
              ]
            ],
            'IS NULL' => [
              'whereClause' => [
                'IS_NULL:(amount)' => true
              ],
              'leftJoins' => [
                0 => [
                  0 => 'Currency',
                  1 => 'amountCurrencyRate',
                  2 => [
                    'amountCurrencyRate.id:' => 'amountCurrency'
                  ]
                ]
              ]
            ],
            'IS NOT NULL' => [
              'whereClause' => [
                'IS_NOT_NULL:(amount)' => true
              ],
              'leftJoins' => [
                0 => [
                  0 => 'Currency',
                  1 => 'amountCurrencyRate',
                  2 => [
                    'amountCurrencyRate.id:' => 'amountCurrency'
                  ]
                ]
              ]
            ]
          ],
          'order' => [
            'order' => [
              0 => [
                0 => 'DIV:(MUL:(amount, probability, amountCurrencyRate.rate), 100)',
                1 => '{direction}'
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => [
                  'amountCurrencyRate.id:' => 'amountCurrency'
                ]
              ]
            ]
          ],
          'view' => 'views/fields/currency-converted'
        ],
        'account' => [
          'type' => 'link'
        ],
        'contacts' => [
          'type' => 'linkMultiple',
          'view' => 'crm:views/opportunity/fields/contacts',
          'columns' => [
            'role' => 'opportunityRole'
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'primaryLink' => 'contact',
          'orderBy' => 'name',
          'detailLayoutIncompatibleFieldList' => [
            0 => 'contact'
          ]
        ],
        'contact' => [
          'type' => 'link'
        ],
        'stage' => [
          'type' => 'enum',
          'options' => [
            0 => 'Prospecting',
            1 => 'Qualification',
            2 => 'Proposal',
            3 => 'Negotiation',
            4 => 'Closed Won',
            5 => 'Closed Lost'
          ],
          'view' => 'crm:views/opportunity/fields/stage',
          'default' => 'Prospecting',
          'audited' => true,
          'probabilityMap' => [
            'Prospecting' => 10,
            'Qualification' => 20,
            'Proposal' => 50,
            'Negotiation' => 80,
            'Closed Won' => 100,
            'Closed Lost' => 0
          ],
          'style' => [
            'Closed Won' => 'success',
            'Closed Lost' => 'danger'
          ],
          'fieldManagerAdditionalParamList' => [
            0 => [
              'name' => 'probabilityMap',
              'view' => 'crm:views/opportunity/admin/field-manager/fields/probability-map'
            ]
          ]
        ],
        'lastStage' => [
          'type' => 'enum',
          'view' => 'crm:views/opportunity/fields/last-stage',
          'customizationOptionsDisabled' => true,
          'customizationDefaultDisabled' => true
        ],
        'probability' => [
          'type' => 'int',
          'required' => true,
          'min' => 0,
          'max' => 100
        ],
        'leadSource' => [
          'type' => 'enum',
          'view' => 'crm:views/opportunity/fields/lead-source',
          'customizationOptionsDisabled' => true,
          'optionsPath' => 'entityDefs.Lead.fields.source.options',
          'translation' => 'Lead.options.source'
        ],
        'closeDate' => [
          'type' => 'date',
          'required' => true,
          'audited' => true
        ],
        'description' => [
          'type' => 'text'
        ],
        'campaign' => [
          'type' => 'link'
        ],
        'originalLead' => [
          'type' => 'linkOne',
          'readOnly' => true,
          'view' => 'views/fields/link-one'
        ],
        'contactRole' => [
          'type' => 'enum',
          'notStorable' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutAvailabilityList' => [
            0 => 'listForContact'
          ],
          'customizationDefaultDisabled' => true,
          'customizationRequiredDisabled' => true,
          'customizationIsSortedDisabled' => true,
          'customizationAuditedDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'where' => [
            '=' => [
              'leftJoins' => [
                0 => 'contacts'
              ],
              'whereClause' => [
                'contactsMiddle.role' => '{value}'
              ],
              'distinct' => true
            ],
            '<>' => [
              'whereClause' => [
                'id!=s' => [
                  'from' => 'ContactOpportunity',
                  'select' => [
                    0 => 'opportunityId'
                  ],
                  'whereClause' => [
                    'deleted' => 0,
                    'role' => '{value}'
                  ]
                ]
              ]
            ],
            'IN' => [
              'leftJoins' => [
                0 => 'contacts'
              ],
              'whereClause' => [
                'contactsMiddle.role' => '{value}'
              ],
              'distinct' => true
            ],
            'NOT IN' => [
              'whereClause' => [
                'id!=s' => [
                  'from' => 'ContactOpportunity',
                  'select' => [
                    0 => 'opportunityId'
                  ],
                  'whereClause' => [
                    'deleted' => 0,
                    'role' => '{value}'
                  ]
                ]
              ]
            ],
            'LIKE' => [
              'leftJoins' => [
                0 => 'contacts'
              ],
              'whereClause' => [
                'contactsMiddle.role*' => '{value}'
              ],
              'distinct' => true
            ],
            'IS NULL' => [
              'leftJoins' => [
                0 => 'contacts'
              ],
              'whereClause' => [
                'contactsMiddle.role' => NULL
              ],
              'distinct' => true
            ],
            'IS NOT NULL' => [
              'whereClause' => [
                'id!=s' => [
                  'from' => 'ContactOpportunity',
                  'select' => [
                    0 => 'opportunityId'
                  ],
                  'whereClause' => [
                    'deleted' => 0,
                    'role' => NULL
                  ]
                ]
              ]
            ]
          ],
          'view' => 'crm:views/opportunity/fields/contact-role',
          'customizationOptionsDisabled' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => false,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'amountCurrency' => [
          'type' => 'enum',
          'view' => 'views/fields/currency-list',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'customizationRequiredDisabled' => true,
          'customizationOptionsDisabled' => true,
          'customizationIsSortedDisabled' => true,
          'customizationDisplayAsLabelDisabled' => true,
          'customizationAuditedDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'customizationDefaultView' => 'views/admin/field-manager/fields/currency-default',
          'maxLength' => 6
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'account' => [
          'type' => 'belongsTo',
          'entity' => 'Account',
          'foreign' => 'opportunities'
        ],
        'contacts' => [
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'opportunities',
          'additionalColumns' => [
            'role' => [
              'type' => 'varchar',
              'len' => 50
            ]
          ],
          'columnAttributeMap' => [
            'role' => 'contactRole'
          ]
        ],
        'contact' => [
          'type' => 'belongsTo',
          'entity' => 'Contact',
          'foreign' => 'opportunitiesPrimary'
        ],
        'meetings' => [
          'type' => 'hasChildren',
          'entity' => 'Meeting',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'calls' => [
          'type' => 'hasChildren',
          'entity' => 'Call',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'tasks' => [
          'type' => 'hasChildren',
          'entity' => 'Task',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'emails' => [
          'type' => 'hasChildren',
          'entity' => 'Email',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true
        ],
        'documents' => [
          'type' => 'hasMany',
          'entity' => 'Document',
          'foreign' => 'opportunities',
          'audited' => true
        ],
        'campaign' => [
          'type' => 'belongsTo',
          'entity' => 'Campaign',
          'foreign' => 'opportunities'
        ],
        'originalLead' => [
          'type' => 'hasOne',
          'entity' => 'Lead',
          'foreign' => 'createdOpportunity'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'stage' => [
          'columns' => [
            0 => 'stage',
            1 => 'deleted'
          ]
        ],
        'lastStage' => [
          'columns' => [
            0 => 'lastStage'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ],
        'createdAt' => [
          'columns' => [
            0 => 'createdAt',
            1 => 'deleted'
          ]
        ],
        'createdAtStage' => [
          'columns' => [
            0 => 'createdAt',
            1 => 'stage'
          ]
        ],
        'createdAtId' => [
          'unique' => true,
          'columns' => [
            0 => 'createdAt',
            1 => 'id'
          ]
        ],
        'assignedUserStage' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'stage'
          ]
        ]
      ]
    ],
    'Reminder' => [
      'fields' => [
        'remindAt' => [
          'type' => 'datetime',
          'index' => true
        ],
        'startAt' => [
          'type' => 'datetime',
          'index' => true
        ],
        'type' => [
          'type' => 'enum',
          'options' => [
            0 => 'Popup',
            1 => 'Email'
          ],
          'maxLength' => 36,
          'index' => true,
          'default' => 'Popup'
        ],
        'seconds' => [
          'type' => 'enumInt',
          'options' => [
            0 => 0,
            1 => 60,
            2 => 120,
            3 => 300,
            4 => 600,
            5 => 900,
            6 => 1800,
            7 => 3600,
            8 => 7200,
            9 => 10800,
            10 => 18000,
            11 => 86400,
            12 => 172800,
            13 => 259200,
            14 => 432000,
            15 => 604800
          ],
          'default' => 0
        ],
        'entityType' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'entityId' => [
          'type' => 'varchar',
          'maxLength' => 50
        ],
        'userId' => [
          'type' => 'varchar',
          'maxLength' => 50
        ],
        'isSubmitted' => [
          'type' => 'bool'
        ]
      ],
      'collection' => [
        'orderBy' => 'remindAt',
        'order' => 'desc',
        'sortBy' => 'remindAt',
        'asc' => false
      ]
    ],
    'Target' => [
      'fields' => [
        'name' => [
          'type' => 'personName'
        ],
        'salutationName' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Mr.',
            2 => 'Mrs.',
            3 => 'Ms.',
            4 => 'Dr.',
            5 => 'Drs.'
          ]
        ],
        'firstName' => [
          'type' => 'varchar',
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'maxLength' => 100,
          'default' => ''
        ],
        'lastName' => [
          'type' => 'varchar',
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'maxLength' => 100,
          'required' => true,
          'default' => ''
        ],
        'title' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'accountName' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'website' => [
          'type' => 'url'
        ],
        'address' => [
          'type' => 'address'
        ],
        'addressStreet' => [
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar'
        ],
        'addressCity' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-city',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'addressState' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-state',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'addressCountry' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-country',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'addressPostalCode' => [
          'type' => 'varchar',
          'maxLength' => 40,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'emailAddress' => [
          'type' => 'email'
        ],
        'phoneNumber' => [
          'type' => 'phone',
          'typeList' => [
            0 => 'Mobile',
            1 => 'Office',
            2 => 'Home',
            3 => 'Fax',
            4 => 'Other'
          ],
          'defaultType' => 'Mobile'
        ],
        'doNotCall' => [
          'type' => 'bool'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'middleName' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 100,
          'pattern' => '$noBadCharacters'
        ],
        'addressMap' => [
          'type' => 'map',
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'provider' => 'Google',
          'height' => 300,
          'exportDisabled' => true,
          'importDisabled' => true
        ],
        'emailAddressIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ],
        'phoneNumberIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'firstName' => [
          'columns' => [
            0 => 'firstName',
            1 => 'deleted'
          ]
        ],
        'name' => [
          'columns' => [
            0 => 'firstName',
            1 => 'lastName'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'TargetList' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'entryCount' => [
          'type' => 'int',
          'readOnly' => true,
          'notStorable' => true,
          'layoutFiltersDisabled' => true,
          'layoutMassUpdateDisabled' => true
        ],
        'optedOutCount' => [
          'type' => 'int',
          'readOnly' => true,
          'notStorable' => true,
          'layoutListDisabled' => true,
          'layoutFiltersDisabled' => true,
          'layoutMassUpdateDisabled' => true
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'assignedUser' => [
          'type' => 'link',
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'includingActionList' => [
          'type' => 'multiEnum',
          'view' => 'crm:views/target-list/fields/including-action-list',
          'layoutDetailDisabled' => true,
          'layoutFiltersDisabled' => true,
          'layoutLinkDisabled' => true,
          'notStorable' => true,
          'disabled' => true
        ],
        'excludingActionList' => [
          'type' => 'multiEnum',
          'view' => 'crm:views/target-list/fields/including-action-list',
          'layoutDetailDisabled' => true,
          'layoutFiltersDisabled' => true,
          'layoutLinkDisabled' => true,
          'notStorable' => true,
          'disabled' => true
        ],
        'targetStatus' => [
          'type' => 'enum',
          'options' => [
            0 => 'Listed',
            1 => 'Opted Out'
          ],
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutFiltersDisabled' => true,
          'exportDisabled' => true,
          'importDisabled' => true,
          'view' => 'crm:views/target-list/fields/target-status'
        ],
        'isOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutFiltersDisabled' => true,
          'exportDisabled' => true,
          'importDisabled' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'campaigns' => [
          'type' => 'hasMany',
          'entity' => 'Campaign',
          'foreign' => 'targetLists',
          'layoutRelationshipsDisabled' => true
        ],
        'massEmails' => [
          'type' => 'hasMany',
          'entity' => 'MassEmail',
          'foreign' => 'targetLists',
          'layoutRelationshipsDisabled' => true
        ],
        'campaignsExcluding' => [
          'type' => 'hasMany',
          'entity' => 'Campaign',
          'foreign' => 'excludingTargetLists',
          'layoutRelationshipsDisabled' => true
        ],
        'massEmailsExcluding' => [
          'type' => 'hasMany',
          'entity' => 'MassEmail',
          'foreign' => 'excludingTargetLists',
          'layoutRelationshipsDisabled' => true
        ],
        'accounts' => [
          'type' => 'hasMany',
          'entity' => 'Account',
          'foreign' => 'targetLists',
          'additionalColumns' => [
            'optedOut' => [
              'type' => 'bool'
            ]
          ],
          'columnAttributeMap' => [
            'optedOut' => 'isOptedOut'
          ]
        ],
        'contacts' => [
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'targetLists',
          'additionalColumns' => [
            'optedOut' => [
              'type' => 'bool'
            ]
          ],
          'columnAttributeMap' => [
            'optedOut' => 'isOptedOut'
          ]
        ],
        'leads' => [
          'type' => 'hasMany',
          'entity' => 'Lead',
          'foreign' => 'targetLists',
          'additionalColumns' => [
            'optedOut' => [
              'type' => 'bool'
            ]
          ],
          'columnAttributeMap' => [
            'optedOut' => 'isOptedOut'
          ]
        ],
        'users' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'targetLists',
          'additionalColumns' => [
            'optedOut' => [
              'type' => 'bool'
            ]
          ],
          'columnAttributeMap' => [
            'optedOut' => 'isOptedOut'
          ]
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'createdAt' => [
          'columns' => [
            0 => 'createdAt',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'Task' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Not Started',
            1 => 'Started',
            2 => 'Completed',
            3 => 'Canceled',
            4 => 'Deferred'
          ],
          'style' => [
            'Completed' => 'success'
          ],
          'default' => 'Not Started',
          'audited' => true,
          'fieldManagerAdditionalParamList' => [
            0 => [
              'name' => 'notActualOptions',
              'view' => 'views/admin/field-manager/fields/not-actual-options'
            ]
          ],
          'notActualOptions' => [
            0 => 'Completed',
            1 => 'Canceled',
            2 => 'Deferred'
          ]
        ],
        'priority' => [
          'type' => 'enum',
          'options' => [
            0 => 'Low',
            1 => 'Normal',
            2 => 'High',
            3 => 'Urgent'
          ],
          'default' => 'Normal',
          'displayAsLabel' => true,
          'style' => [
            'High' => 'warning',
            'Urgent' => 'danger'
          ],
          'audited' => true
        ],
        'dateStart' => [
          'type' => 'datetimeOptional',
          'before' => 'dateEnd'
        ],
        'dateEnd' => [
          'type' => 'datetimeOptional',
          'after' => 'dateStart',
          'view' => 'crm:views/task/fields/date-end',
          'audited' => true
        ],
        'dateStartDate' => [
          'type' => 'date',
          'disabled' => true
        ],
        'dateEndDate' => [
          'type' => 'date',
          'disabled' => true
        ],
        'dateCompleted' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'isOverdue' => [
          'type' => 'bool',
          'readOnly' => true,
          'notStorable' => true,
          'view' => 'crm:views/task/fields/is-overdue',
          'disabled' => true
        ],
        'reminders' => [
          'type' => 'jsonArray',
          'notStorable' => true,
          'view' => 'crm:views/meeting/fields/reminders',
          'dateField' => 'dateEnd'
        ],
        'description' => [
          'type' => 'text'
        ],
        'parent' => [
          'type' => 'linkParent',
          'entityList' => [
            0 => 'Account',
            1 => 'Contact',
            2 => 'Lead',
            3 => 'Opportunity',
            4 => 'Case'
          ]
        ],
        'account' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'contact' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'fieldManagerParamList' => [
            0 => 'useNumericFormat'
          ]
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user',
          'fieldManagerParamList' => []
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'attachments' => [
          'type' => 'attachmentMultiple',
          'sourceList' => [
            0 => 'Document'
          ]
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User',
          'foreign' => 'tasks'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'parent' => [
          'type' => 'belongsToParent',
          'foreign' => 'tasks'
        ],
        'account' => [
          'type' => 'belongsTo',
          'entity' => 'Account'
        ],
        'contact' => [
          'type' => 'belongsTo',
          'entity' => 'Contact'
        ],
        'email' => [
          'type' => 'belongsTo',
          'entity' => 'Email',
          'foreign' => 'tasks'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'dateStartStatus' => [
          'columns' => [
            0 => 'dateStart',
            1 => 'status'
          ]
        ],
        'dateEndStatus' => [
          'columns' => [
            0 => 'dateEnd',
            1 => 'status'
          ]
        ],
        'dateStart' => [
          'columns' => [
            0 => 'dateStart',
            1 => 'deleted'
          ]
        ],
        'status' => [
          'columns' => [
            0 => 'status',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ],
        'assignedUserStatus' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'status'
          ]
        ]
      ]
    ],
    'Components' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'warehouseItem' => [
          'type' => 'link'
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'warehouseItem' => [
          'type' => 'belongsTo',
          'foreign' => 'components',
          'entity' => 'WarehouseItem',
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'EquipmentClasses' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'equipmentDefinitionLists1' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ],
        'equipmentClassesPropertiesElementses' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ],
        'equipmentDefinitionsPropertiesFromClasses' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ],
        'processSegmentEquipmentItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ],
        'productSegmentEquipmentItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'noLoad' => true,
          'importDisabled' => true,
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'equipmentDefinitionLists1' => [
          'type' => 'hasMany',
          'relationName' => 'equipmentClassListEquipmentDefinitionList',
          'foreign' => 'equipmentClassLists',
          'entity' => 'EquipmentDefinitions',
          'audited' => false,
          'isCustom' => true
        ],
        'equipmentClassesPropertiesElementses' => [
          'type' => 'hasMany',
          'relationName' => 'equipmentClassListEquipmentClassesPropertiesElements',
          'foreign' => 'equipmentClassLists',
          'entity' => 'EquipmentProperties',
          'audited' => false,
          'isCustom' => true
        ],
        'equipmentDefinitionsPropertiesFromClasses' => [
          'type' => 'hasMany',
          'foreign' => 'equipmentClasses',
          'entity' => 'EquipmentDefinitionsPropertiesFromClasses',
          'audited' => false,
          'isCustom' => true
        ],
        'processSegmentEquipmentItems' => [
          'type' => 'hasMany',
          'foreign' => 'equipmentClasses',
          'entity' => 'ProcessSegmentEquipmentItem',
          'audited' => false,
          'isCustom' => true
        ],
        'productSegmentEquipmentItems' => [
          'type' => 'hasMany',
          'foreign' => 'equipmentClasses',
          'entity' => 'ProductSegmentEquipmentItem',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'asc',
        'textFilterFields' => [
          0 => 'name'
        ],
        'fullTextSearch' => false,
        'countDisabled' => false,
        'sortBy' => 'createdAt',
        'asc' => true
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ],
      'optimisticConcurrencyControl' => false
    ],
    'EquipmentDefinitions' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'equipmentDefinitionListParent' => [
          'type' => 'link'
        ],
        'equipmentDefinitionLists' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ],
        'equipmentClassLists' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ],
        'eqipmentDefinitionsPropertiesFromClasseses' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ],
        'processSegmentEquipmentItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ],
        'productSegmentEquipmentItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'noLoad' => true,
          'importDisabled' => true,
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'equipmentDefinitionListParent' => [
          'type' => 'belongsTo',
          'foreign' => 'equipmentDefinitionLists',
          'entity' => 'EquipmentDefinitions',
          'audited' => false,
          'isCustom' => true
        ],
        'equipmentDefinitionLists' => [
          'type' => 'hasMany',
          'foreign' => 'equipmentDefinitionListParent',
          'entity' => 'EquipmentDefinitions',
          'audited' => false,
          'isCustom' => true
        ],
        'equipmentClassLists' => [
          'type' => 'hasMany',
          'relationName' => 'equipmentClassListEquipmentDefinitionList',
          'foreign' => 'equipmentDefinitionLists1',
          'entity' => 'EquipmentClasses',
          'audited' => false,
          'isCustom' => true
        ],
        'eqipmentDefinitionsPropertiesFromClasseses' => [
          'type' => 'hasMany',
          'foreign' => 'equipmentDefinitionList',
          'entity' => 'EquipmentDefinitionsPropertiesFromClasses',
          'audited' => false,
          'isCustom' => true
        ],
        'processSegmentEquipmentItems' => [
          'type' => 'hasMany',
          'foreign' => 'equipmentDefinitions',
          'entity' => 'ProcessSegmentEquipmentItem',
          'audited' => false,
          'isCustom' => true
        ],
        'productSegmentEquipmentItems' => [
          'type' => 'hasMany',
          'foreign' => 'equipmentDefinitions',
          'entity' => 'ProductSegmentEquipmentItem',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'asc',
        'textFilterFields' => [
          0 => 'name'
        ],
        'fullTextSearch' => false,
        'countDisabled' => false,
        'sortBy' => 'createdAt',
        'asc' => true
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ],
      'optimisticConcurrencyControl' => false
    ],
    'EquipmentDefinitionsPropertiesFromClasses' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => false,
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'options' => []
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'value' => [
          'type' => 'varchar',
          'maxLength' => 150,
          'options' => [],
          'isCustom' => true
        ],
        'equipmentDefinitionList' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'equipmentClassesPropertiesElements' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'equipmentClasses' => [
          'type' => 'link'
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'equipmentDefinitionList' => [
          'type' => 'belongsTo',
          'foreign' => 'eqipmentDefinitionsPropertiesFromClasseses',
          'entity' => 'EquipmentDefinitions',
          'audited' => false,
          'isCustom' => true
        ],
        'equipmentClassesPropertiesElements' => [
          'type' => 'belongsTo',
          'foreign' => 'eqipmentDefinitionsPropertiesFromClasseses',
          'entity' => 'EquipmentProperties',
          'audited' => false,
          'isCustom' => true
        ],
        'equipmentClasses' => [
          'type' => 'belongsTo',
          'foreign' => 'equipmentDefinitionsPropertiesFromClasses',
          'entity' => 'EquipmentClasses',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name'
        ],
        'fullTextSearch' => false,
        'countDisabled' => true,
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ],
      'optimisticConcurrencyControl' => false
    ],
    'EquipmentProperties' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'valueType' => [
          'type' => 'enum',
          'options' => [
            0 => 'String',
            1 => 'Int',
            2 => 'Float'
          ],
          'style' => [
            'String' => NULL,
            'Int' => NULL,
            'Float' => NULL
          ],
          'default' => 'String',
          'isCustom' => true
        ],
        'eqipmentDefinitionsPropertiesFromClasseses' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ],
        'equipmentClassLists' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'eqipmentDefinitionsPropertiesFromClasseses' => [
          'type' => 'hasMany',
          'foreign' => 'equipmentClassesPropertiesElements',
          'entity' => 'EquipmentDefinitionsPropertiesFromClasses',
          'audited' => false,
          'isCustom' => true
        ],
        'equipmentClassLists' => [
          'type' => 'hasMany',
          'relationName' => 'equipmentClassListEquipmentClassesPropertiesElements',
          'foreign' => 'equipmentClassesPropertiesElementses',
          'entity' => 'EquipmentClasses',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'KeyPerformanceIndicator' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name'
        ],
        'fullTextSearch' => false,
        'countDisabled' => false,
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ],
      'optimisticConcurrencyControl' => false
    ],
    'MaterialClasses' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => false,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'materialProperties' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ],
        'materialDefinitions' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ],
        'materialDefinitionsPropertiesFromClasses' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ],
        'processSegmentMaterialItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ],
        'productSegmentMaterialItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'noLoad' => true,
          'importDisabled' => true,
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'materialProperties' => [
          'type' => 'hasMany',
          'relationName' => 'materialClassesProperties',
          'foreign' => 'materialClasses',
          'entity' => 'MaterialProperties',
          'audited' => false,
          'isCustom' => true
        ],
        'materialDefinitions' => [
          'type' => 'hasMany',
          'relationName' => 'materialDefinitionsClasses',
          'foreign' => 'materialClasses',
          'entity' => 'MaterialDefinitions',
          'audited' => false,
          'isCustom' => true
        ],
        'materialDefinitionsPropertiesFromClasses' => [
          'type' => 'hasMany',
          'foreign' => 'materialClasses',
          'entity' => 'MaterialDefinitionsPropertiesFromClasses',
          'audited' => false,
          'isCustom' => true
        ],
        'processSegmentMaterialItems' => [
          'type' => 'hasMany',
          'foreign' => 'materialClasses',
          'entity' => 'ProcessSegmentMaterialItem',
          'audited' => false,
          'isCustom' => true
        ],
        'productSegmentMaterialItems' => [
          'type' => 'hasMany',
          'foreign' => 'materialClasses',
          'entity' => 'ProductSegmentMaterialItem',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'asc',
        'textFilterFields' => [
          0 => 'name'
        ],
        'fullTextSearch' => false,
        'countDisabled' => false,
        'sortBy' => 'createdAt',
        'asc' => true
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ],
      'optimisticConcurrencyControl' => false
    ],
    'MaterialDefinitions' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => false,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'materialClasses' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ],
        'materialDefinitionsPropertiesFromClasseses' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ],
        'materialLots' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ],
        'processSegmentMaterialItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ],
        'productSegmentMaterialItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'noLoad' => true,
          'importDisabled' => true,
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'materialClasses' => [
          'type' => 'hasMany',
          'relationName' => 'materialDefinitionsClasses',
          'foreign' => 'materialDefinitions',
          'entity' => 'MaterialClasses',
          'audited' => false,
          'isCustom' => true
        ],
        'materialDefinitionsPropertiesFromClasseses' => [
          'type' => 'hasMany',
          'foreign' => 'materialDefinitions',
          'entity' => 'MaterialDefinitionsPropertiesFromClasses',
          'audited' => false,
          'isCustom' => true
        ],
        'materialLots' => [
          'type' => 'hasMany',
          'foreign' => 'materialDefinitions',
          'entity' => 'MaterialLots',
          'audited' => false,
          'isCustom' => true
        ],
        'processSegmentMaterialItems' => [
          'type' => 'hasMany',
          'foreign' => 'materialDefinitions',
          'entity' => 'ProcessSegmentMaterialItem',
          'audited' => false,
          'isCustom' => true
        ],
        'productSegmentMaterialItems' => [
          'type' => 'hasMany',
          'foreign' => 'materialDefinitions',
          'entity' => 'ProductSegmentMaterialItem',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'asc',
        'textFilterFields' => [
          0 => 'name'
        ],
        'fullTextSearch' => false,
        'countDisabled' => false,
        'sortBy' => 'createdAt',
        'asc' => true
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ],
      'optimisticConcurrencyControl' => false
    ],
    'MaterialDefinitionsPropertiesFromClasses' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => false,
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'options' => []
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'materialDefinitions' => [
          'type' => 'link'
        ],
        'materialProperties' => [
          'type' => 'link'
        ],
        'value' => [
          'type' => 'varchar',
          'maxLength' => 150,
          'options' => [],
          'isCustom' => true
        ],
        'materialClasses' => [
          'type' => 'link'
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'materialDefinitions' => [
          'type' => 'belongsTo',
          'foreign' => 'materialDefinitionsPropertiesFromClasseses',
          'entity' => 'MaterialDefinitions',
          'audited' => false,
          'isCustom' => true
        ],
        'materialProperties' => [
          'type' => 'belongsTo',
          'foreign' => 'materialDefinitionsPropertiesFromClasses',
          'entity' => 'MaterialProperties',
          'audited' => false,
          'isCustom' => true
        ],
        'materialClasses' => [
          'type' => 'belongsTo',
          'foreign' => 'materialDefinitionsPropertiesFromClasses',
          'entity' => 'MaterialClasses',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'MaterialLots' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => false,
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'options' => [],
          'tooltip' => true
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'storageLocation' => [
          'type' => 'varchar',
          'maxLength' => 150,
          'options' => [],
          'isCustom' => true
        ],
        'quantityUnit' => [
          'type' => 'varchar',
          'maxLength' => 150,
          'options' => [],
          'isCustom' => true
        ],
        'quantityValue' => [
          'notNull' => false,
          'type' => 'float',
          'isCustom' => true
        ],
        'materialDefinitions' => [
          'type' => 'link'
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'materialDefinitions' => [
          'type' => 'belongsTo',
          'foreign' => 'materialLots',
          'entity' => 'MaterialDefinitions',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'textFilterFields' => [
          0 => 'name'
        ],
        'fullTextSearch' => false,
        'countDisabled' => false,
        'sortBy' => 'name',
        'asc' => true
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ],
      'optimisticConcurrencyControl' => false
    ],
    'MaterialProperties' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'materialClasses' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ],
        'materialDefinitionsPropertiesFromClasses' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ],
        'valueType' => [
          'type' => 'enum',
          'options' => [
            0 => 'String',
            1 => 'Float',
            2 => 'Int'
          ],
          'style' => [
            'String' => NULL,
            'Float' => NULL,
            'Int' => NULL
          ],
          'default' => 'String',
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'materialClasses' => [
          'type' => 'hasMany',
          'relationName' => 'materialClassesProperties',
          'foreign' => 'materialProperties',
          'entity' => 'MaterialClasses',
          'audited' => false,
          'isCustom' => true
        ],
        'materialDefinitionsPropertiesFromClasses' => [
          'type' => 'hasMany',
          'foreign' => 'materialProperties',
          'entity' => 'MaterialDefinitionsPropertiesFromClasses',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'asc',
        'textFilterFields' => [
          0 => 'name'
        ],
        'fullTextSearch' => false,
        'countDisabled' => false,
        'sortBy' => 'createdAt',
        'asc' => true
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ],
      'optimisticConcurrencyControl' => false
    ],
    'OrderItem' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => false,
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'options' => []
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'quantity' => [
          'type' => 'int',
          'min' => 0,
          'isCustom' => true,
          'required' => true,
          'default' => 1
        ],
        'orders' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ],
        'productDefinitions' => [
          'type' => 'link',
          'required' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'orders' => [
          'type' => 'hasMany',
          'relationName' => 'orderProducts',
          'foreign' => 'orderItems',
          'entity' => 'Orders',
          'audited' => false,
          'isCustom' => true
        ],
        'productDefinitions' => [
          'type' => 'belongsTo',
          'foreign' => 'orderItems',
          'entity' => 'ProductDefinitions',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'Orders' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => false,
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'options' => []
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'customerName' => [
          'type' => 'varchar',
          'maxLength' => 150,
          'options' => [],
          'isCustom' => true
        ],
        'customerEmail' => [
          'type' => 'varchar',
          'maxLength' => 150,
          'options' => [],
          'isCustom' => true
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'new',
            1 => 'inProcess',
            2 => 'Done'
          ],
          'style' => [
            'new' => 'warning',
            'inProcess' => 'info',
            'Done' => 'success'
          ],
          'default' => 'new',
          'isCustom' => true,
          'displayAsLabel' => true
        ],
        'priority' => [
          'type' => 'enum',
          'options' => [
            0 => '1',
            1 => '2',
            2 => '3',
            3 => '4',
            4 => '5',
            5 => '6',
            6 => '7',
            7 => '8',
            8 => '9',
            9 => '10'
          ],
          'style' => [
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
            5 => NULL,
            6 => NULL,
            7 => NULL,
            8 => NULL,
            9 => NULL,
            10 => NULL
          ],
          'default' => '1',
          'isCustom' => true
        ],
        'orderItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ],
        'number' => [
          'type' => 'number',
          'len' => 36,
          'notNull' => false,
          'unique' => false,
          'nextNumber' => 1,
          'padLength' => 5,
          'prefix' => 'OBJ_',
          'isCustom' => true
        ],
        'confirmed' => [
          'notNull' => true,
          'type' => 'bool',
          'isCustom' => true
        ],
        'confirmedBy' => [
          'type' => 'link'
        ],
        'finishedAt' => [
          'notNull' => false,
          'type' => 'datetime',
          'minuteStep' => 30,
          'isCustom' => true
        ],
        'orderedAt' => [
          'notNull' => false,
          'type' => 'datetime',
          'minuteStep' => 30,
          'isCustom' => true
        ],
        'startedAt' => [
          'notNull' => false,
          'type' => 'datetime',
          'minuteStep' => 30,
          'isCustom' => true
        ],
        'productsFull' => [
          'notNull' => true,
          'type' => 'bool',
          'isCustom' => true
        ],
        'state' => [
          'type' => 'int',
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'orderItems' => [
          'type' => 'hasMany',
          'relationName' => 'orderProducts',
          'foreign' => 'orders',
          'entity' => 'OrderItem',
          'audited' => false,
          'isCustom' => true
        ],
        'confirmedBy' => [
          'type' => 'belongsTo',
          'foreign' => 'orders',
          'entity' => 'User',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name'
        ],
        'fullTextSearch' => false,
        'countDisabled' => false,
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ],
      'optimisticConcurrencyControl' => false
    ],
    'PersonnelClasses' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'personnelProperties' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ],
        'personnelDefinitions' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ],
        'personnelDefinitionsPropertiesFromClasses' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ],
        'processSegmentPersonnelItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ],
        'productSegmentPersonnelItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'noLoad' => true,
          'importDisabled' => true,
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'personnelProperties' => [
          'type' => 'hasMany',
          'relationName' => 'personnelClassesProperties',
          'foreign' => 'personnelClasses',
          'entity' => 'PersonnelProperties',
          'audited' => false,
          'isCustom' => true
        ],
        'personnelDefinitions' => [
          'type' => 'hasMany',
          'relationName' => 'personnelClassesPersonnelDefinitions',
          'foreign' => 'personnelClasses',
          'entity' => 'PersonnelDefinitions',
          'audited' => false,
          'isCustom' => true
        ],
        'personnelDefinitionsPropertiesFromClasses' => [
          'type' => 'hasMany',
          'foreign' => 'personnelClasses',
          'entity' => 'PersonnelDefinitionsPropertiesFromClasses',
          'audited' => false,
          'isCustom' => true
        ],
        'processSegmentPersonnelItems' => [
          'type' => 'hasMany',
          'foreign' => 'personnelClasses',
          'entity' => 'ProcessSegmentPersonnelItem',
          'audited' => false,
          'isCustom' => true
        ],
        'productSegmentPersonnelItems' => [
          'type' => 'hasMany',
          'foreign' => 'personnelClasses',
          'entity' => 'ProductSegmentPersonnelItem',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'PersonnelDefinitions' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'options' => []
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'personnelDefinitionsPropertiesFromClasses' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ],
        'personnelClasses' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ],
        'processSegmentPersonnelItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ],
        'productSegmentPersonnelItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'noLoad' => true,
          'importDisabled' => true,
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'personnelDefinitionsPropertiesFromClasses' => [
          'type' => 'hasMany',
          'foreign' => 'personnelDefinitions',
          'entity' => 'PersonnelDefinitionsPropertiesFromClasses',
          'audited' => false,
          'isCustom' => true
        ],
        'personnelClasses' => [
          'type' => 'hasMany',
          'relationName' => 'personnelClassesPersonnelDefinitions',
          'foreign' => 'personnelDefinitions',
          'entity' => 'PersonnelClasses',
          'audited' => false,
          'isCustom' => true
        ],
        'processSegmentPersonnelItems' => [
          'type' => 'hasMany',
          'foreign' => 'personnelDefinitions',
          'entity' => 'ProcessSegmentPersonnelItem',
          'audited' => false,
          'isCustom' => true
        ],
        'productSegmentPersonnelItems' => [
          'type' => 'hasMany',
          'foreign' => 'personnelDefinitions',
          'entity' => 'ProductSegmentPersonnelItem',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'PersonnelDefinitionsPropertiesFromClasses' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'personnelDefinitions' => [
          'type' => 'link'
        ],
        'personnelProperties' => [
          'type' => 'link'
        ],
        'value' => [
          'type' => 'varchar',
          'maxLength' => 150,
          'options' => [],
          'isCustom' => true
        ],
        'personnelClasses' => [
          'type' => 'link'
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'personnelDefinitions' => [
          'type' => 'belongsTo',
          'foreign' => 'personnelDefinitionsPropertiesFromClasses',
          'entity' => 'PersonnelDefinitions',
          'audited' => false,
          'isCustom' => true
        ],
        'personnelProperties' => [
          'type' => 'belongsTo',
          'foreign' => 'personnelDefinitionsPropertiesFromClasses',
          'entity' => 'PersonnelProperties',
          'audited' => false,
          'isCustom' => true
        ],
        'personnelClasses' => [
          'type' => 'belongsTo',
          'foreign' => 'personnelDefinitionsPropertiesFromClasses',
          'entity' => 'PersonnelClasses',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'PersonnelProperties' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'personnelClasses' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ],
        'personnelDefinitionsPropertiesFromClasses' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ],
        'valueType' => [
          'type' => 'enum',
          'options' => [
            0 => 'String',
            1 => 'Float',
            2 => 'Int'
          ],
          'style' => [
            'String' => NULL,
            'Float' => NULL,
            'Int' => NULL
          ],
          'default' => 'String',
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'personnelClasses' => [
          'type' => 'hasMany',
          'relationName' => 'personnelClassesProperties',
          'foreign' => 'personnelProperties',
          'entity' => 'PersonnelClasses',
          'audited' => false,
          'isCustom' => true
        ],
        'personnelDefinitionsPropertiesFromClasses' => [
          'type' => 'hasMany',
          'foreign' => 'personnelProperties',
          'entity' => 'PersonnelDefinitionsPropertiesFromClasses',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name'
        ],
        'fullTextSearch' => false,
        'countDisabled' => false,
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ],
      'optimisticConcurrencyControl' => false
    ],
    'ProcessSegment' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'processSegmentEquipmentItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ],
        'processSegmentPersonnelItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'processSegmentEquipmentItems' => [
          'type' => 'hasMany',
          'relationName' => 'processSegmenEquipment',
          'foreign' => 'processSegments',
          'entity' => 'ProcessSegmentEquipmentItem',
          'audited' => false,
          'isCustom' => true
        ],
        'processSegmentPersonnelItems' => [
          'type' => 'hasMany',
          'relationName' => 'processSegmentPersonnel',
          'foreign' => 'processSegments',
          'entity' => 'ProcessSegmentPersonnelItem',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'asc',
        'textFilterFields' => [
          0 => 'name'
        ],
        'fullTextSearch' => false,
        'countDisabled' => false,
        'sortBy' => 'createdAt',
        'asc' => true
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ],
      'optimisticConcurrencyControl' => false
    ],
    'ProcessSegmentEquipmentItem' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => false,
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'options' => []
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'equipmentClasses' => [
          'type' => 'link'
        ],
        'equipmentDefinitions' => [
          'type' => 'link'
        ],
        'quantity' => [
          'type' => 'int',
          'isCustom' => true
        ],
        'processSegments' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'equipmentClasses' => [
          'type' => 'belongsTo',
          'foreign' => 'processSegmentEquipmentItems',
          'entity' => 'EquipmentClasses',
          'audited' => false,
          'isCustom' => true
        ],
        'equipmentDefinitions' => [
          'type' => 'belongsTo',
          'foreign' => 'processSegmentEquipmentItems',
          'entity' => 'EquipmentDefinitions',
          'audited' => false,
          'isCustom' => true
        ],
        'processSegments' => [
          'type' => 'hasMany',
          'relationName' => 'processSegmenEquipment',
          'foreign' => 'processSegmentEquipmentItems',
          'entity' => 'ProcessSegment',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'ProcessSegmentMaterialItem' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => false,
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'options' => []
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'quantity' => [
          'notNull' => false,
          'type' => 'float',
          'isCustom' => true
        ],
        'materialDefinitions' => [
          'type' => 'link'
        ],
        'materialClasses' => [
          'type' => 'link'
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'materialDefinitions' => [
          'type' => 'belongsTo',
          'foreign' => 'processSegmentMaterialItems',
          'entity' => 'MaterialDefinitions',
          'audited' => false,
          'isCustom' => true
        ],
        'materialClasses' => [
          'type' => 'belongsTo',
          'foreign' => 'processSegmentMaterialItems',
          'entity' => 'MaterialClasses',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'ProcessSegmentPersonnelItem' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => false,
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'options' => []
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'quantity' => [
          'type' => 'int',
          'isCustom' => true
        ],
        'personnelClasses' => [
          'type' => 'link'
        ],
        'personnelDefinitions' => [
          'type' => 'link'
        ],
        'processSegments' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'personnelClasses' => [
          'type' => 'belongsTo',
          'foreign' => 'processSegmentPersonnelItems',
          'entity' => 'PersonnelClasses',
          'audited' => false,
          'isCustom' => true
        ],
        'personnelDefinitions' => [
          'type' => 'belongsTo',
          'foreign' => 'processSegmentPersonnelItems',
          'entity' => 'PersonnelDefinitions',
          'audited' => false,
          'isCustom' => true
        ],
        'processSegments' => [
          'type' => 'hasMany',
          'relationName' => 'processSegmentPersonnel',
          'foreign' => 'processSegmentPersonnelItems',
          'entity' => 'ProcessSegment',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'ProductDefinitions' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => false,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'productSegments' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ],
        'orderItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'productSegments' => [
          'type' => 'hasMany',
          'relationName' => 'productSegmentsProductDefinitions',
          'foreign' => 'productDefinitions',
          'entity' => 'ProductSegments',
          'audited' => false,
          'isCustom' => true
        ],
        'orderItems' => [
          'type' => 'hasMany',
          'foreign' => 'productDefinitions',
          'entity' => 'OrderItem',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'asc',
        'textFilterFields' => [
          0 => 'name'
        ],
        'fullTextSearch' => false,
        'countDisabled' => false,
        'sortBy' => 'createdAt',
        'asc' => true
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ],
      'optimisticConcurrencyControl' => false
    ],
    'ProductSegmentEquipmentItem' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => false,
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'options' => []
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'equipmentClasses' => [
          'type' => 'link'
        ],
        'equipmentDefinitions' => [
          'type' => 'link'
        ],
        'productSegmentses' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'importDisabled' => true,
          'noLoad' => true,
          'isCustom' => true
        ],
        'quantity' => [
          'notNull' => false,
          'type' => 'float',
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'equipmentClasses' => [
          'type' => 'belongsTo',
          'foreign' => 'productSegmentEquipmentItems',
          'entity' => 'EquipmentClasses',
          'audited' => false,
          'isCustom' => true
        ],
        'equipmentDefinitions' => [
          'type' => 'belongsTo',
          'foreign' => 'productSegmentEquipmentItems',
          'entity' => 'EquipmentDefinitions',
          'audited' => false,
          'isCustom' => true
        ],
        'productSegmentses' => [
          'type' => 'hasMany',
          'relationName' => 'productSegmentEquipment',
          'foreign' => 'productSegmentEquipmentItems',
          'entity' => 'ProductSegments',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'ProductSegmentMaterialItem' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => false,
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'options' => []
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'quantity' => [
          'notNull' => false,
          'type' => 'float',
          'isCustom' => true
        ],
        'materialClasses' => [
          'type' => 'link'
        ],
        'materialDefinitions' => [
          'type' => 'link'
        ],
        'productSegmentses' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'importDisabled' => true,
          'noLoad' => true,
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'materialClasses' => [
          'type' => 'belongsTo',
          'foreign' => 'productSegmentMaterialItems',
          'entity' => 'MaterialClasses',
          'audited' => false,
          'isCustom' => true
        ],
        'materialDefinitions' => [
          'type' => 'belongsTo',
          'foreign' => 'productSegmentMaterialItems',
          'entity' => 'MaterialDefinitions',
          'audited' => false,
          'isCustom' => true
        ],
        'productSegmentses' => [
          'type' => 'hasMany',
          'relationName' => 'productSegmentMaterial',
          'foreign' => 'productSegmentMaterialItems',
          'entity' => 'ProductSegments',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'ProductSegmentPersonnelItem' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => false,
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'options' => []
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'personnelClasses' => [
          'type' => 'link'
        ],
        'personnelDefinitions' => [
          'type' => 'link'
        ],
        'quantity' => [
          'notNull' => false,
          'type' => 'float',
          'isCustom' => true
        ],
        'productSegmentses' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'importDisabled' => true,
          'noLoad' => true,
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'personnelClasses' => [
          'type' => 'belongsTo',
          'foreign' => 'productSegmentPersonnelItems',
          'entity' => 'PersonnelClasses',
          'audited' => false,
          'isCustom' => true
        ],
        'personnelDefinitions' => [
          'type' => 'belongsTo',
          'foreign' => 'productSegmentPersonnelItems',
          'entity' => 'PersonnelDefinitions',
          'audited' => false,
          'isCustom' => true
        ],
        'productSegmentses' => [
          'type' => 'hasMany',
          'relationName' => 'productSegmentPersonnel',
          'foreign' => 'productSegmentPersonnelItems',
          'entity' => 'ProductSegments',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'ProductSegments' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => false,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'duration' => [
          'notNull' => false,
          'type' => 'float',
          'isCustom' => true
        ],
        'productDefinitions' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ],
        'productSegmentEquipmentItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ],
        'productSegmentMaterialItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ],
        'productSegmentPersonnelItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'importDisabled' => false,
          'noLoad' => false,
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'productDefinitions' => [
          'type' => 'hasMany',
          'relationName' => 'productSegmentsProductDefinitions',
          'foreign' => 'productSegments',
          'entity' => 'ProductDefinitions',
          'audited' => false,
          'isCustom' => true
        ],
        'productSegmentEquipmentItems' => [
          'type' => 'hasMany',
          'relationName' => 'productSegmentEquipment',
          'foreign' => 'productSegmentses',
          'entity' => 'ProductSegmentEquipmentItem',
          'audited' => false,
          'isCustom' => true
        ],
        'productSegmentMaterialItems' => [
          'type' => 'hasMany',
          'relationName' => 'productSegmentMaterial',
          'foreign' => 'productSegmentses',
          'entity' => 'ProductSegmentMaterialItem',
          'audited' => false,
          'isCustom' => true
        ],
        'productSegmentPersonnelItems' => [
          'type' => 'hasMany',
          'relationName' => 'productSegmentPersonnel',
          'foreign' => 'productSegmentses',
          'entity' => 'ProductSegmentPersonnelItem',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'asc',
        'textFilterFields' => [
          0 => 'name'
        ],
        'fullTextSearch' => true,
        'countDisabled' => false,
        'sortBy' => 'createdAt',
        'asc' => true
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ],
      'optimisticConcurrencyControl' => false
    ],
    'ProductionPlanning' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => false,
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'options' => []
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'priority' => [
          'type' => 'int',
          'default' => 5,
          'min' => 1,
          'max' => 10,
          'isCustom' => true
        ],
        'orderNumber' => [
          'type' => 'varchar',
          'maxLength' => 150,
          'options' => [],
          'isCustom' => true
        ],
        'productionPlanningItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ],
        'startDate' => [
          'notNull' => false,
          'type' => 'datetime',
          'minuteStep' => 30,
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'productionPlanningItems' => [
          'type' => 'hasMany',
          'foreign' => 'productionPlanning',
          'entity' => 'ProductionPlanningItem',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name'
        ],
        'fullTextSearch' => false,
        'countDisabled' => false,
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ],
      'optimisticConcurrencyControl' => false
    ],
    'ProductionPlanningItem' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => false,
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'options' => []
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'productionPlanning' => [
          'type' => 'link'
        ],
        'quantity' => [
          'type' => 'int',
          'required' => true,
          'min' => 0,
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'productionPlanning' => [
          'type' => 'belongsTo',
          'foreign' => 'productionPlanningItems',
          'entity' => 'ProductionPlanning',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'TestovaciEntita' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'Warehouse' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'warehouseItems' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => false,
          'layoutMassUpdateDisabled' => false,
          'noLoad' => false,
          'importDisabled' => false,
          'isCustom' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'warehouseItems' => [
          'type' => 'hasMany',
          'foreign' => 'warehouse',
          'entity' => 'WarehouseItem',
          'audited' => false,
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'WarehouseItem' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => false,
          'trim' => true,
          'pattern' => '$noBadCharacters',
          'options' => []
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'warehouse' => [
          'type' => 'link'
        ],
        'quantity' => [
          'type' => 'int',
          'required' => true,
          'min' => 0,
          'isCustom' => true
        ],
        'components' => [
          'type' => 'linkOne'
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'warehouse' => [
          'type' => 'belongsTo',
          'foreign' => 'warehouseItems',
          'entity' => 'Warehouse',
          'audited' => false,
          'isCustom' => true
        ],
        'components' => [
          'type' => 'hasOne',
          'foreign' => 'warehouseItem',
          'entity' => 'Components',
          'isCustom' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ]
  ],
  'fields' => [
    'address' => [
      'actualFields' => [
        0 => 'street',
        1 => 'city',
        2 => 'state',
        3 => 'country',
        4 => 'postalCode'
      ],
      'fields' => [
        'street' => [
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar'
        ],
        'city' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-city',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'state' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-state',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'country' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-country',
          'customizationOptionsDisabled' => true,
          'pattern' => '$noBadCharacters'
        ],
        'postalCode' => [
          'type' => 'varchar',
          'maxLength' => 40,
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'map' => [
          'type' => 'map',
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'provider' => 'Google',
          'height' => 300,
          'exportDisabled' => true,
          'importDisabled' => true
        ]
      ],
      'params' => [
        0 => [
          'name' => 'viewMap',
          'type' => 'bool'
        ]
      ],
      'notMergeable' => true,
      'notCreatable' => false,
      'filter' => true,
      'skipOrmDefs' => true,
      'personalData' => true,
      'valueFactoryClassName' => 'Espo\\Core\\Field\\Address\\AddressFactory',
      'attributeExtractorClassName' => 'Espo\\Core\\Field\\Address\\AddressAttributeExtractor'
    ],
    'array' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'options',
          'type' => 'array',
          'view' => 'views/admin/field-manager/fields/options',
          'tooltip' => 'optionsArray'
        ],
        2 => [
          'name' => 'translation',
          'type' => 'varchar',
          'hidden' => true
        ],
        3 => [
          'name' => 'allowCustomOptions',
          'type' => 'bool',
          'hidden' => true
        ],
        4 => [
          'name' => 'noEmptyString',
          'type' => 'bool',
          'default' => true
        ],
        5 => [
          'name' => 'displayAsList',
          'type' => 'bool',
          'tooltip' => true
        ],
        6 => [
          'name' => 'maxCount',
          'type' => 'int',
          'min' => 1,
          'tooltip' => true
        ],
        7 => [
          'name' => 'pattern',
          'type' => 'varchar',
          'tooltip' => true,
          'view' => 'views/admin/field-manager/fields/pattern'
        ],
        8 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        9 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ],
        10 => [
          'name' => 'optionsPath',
          'type' => 'varchar',
          'hidden' => true
        ]
      ],
      'validationList' => [
        0 => 'array',
        1 => 'arrayOfString',
        2 => 'valid',
        3 => 'required',
        4 => 'maxCount',
        5 => 'maxLength',
        6 => 'pattern',
        7 => 'noEmptyString'
      ],
      'mandatoryValidationList' => [
        0 => 'array',
        1 => 'arrayOfString',
        2 => 'valid',
        3 => 'maxLength'
      ],
      'filter' => true,
      'notCreatable' => false,
      'notSortable' => true,
      'fieldDefs' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true
      ],
      'translatedOptions' => true,
      'dynamicLogicOptions' => true,
      'personalData' => true,
      'massUpdateActionList' => [
        0 => 'update',
        1 => 'add',
        2 => 'remove'
      ]
    ],
    'arrayInt' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'options',
          'type' => 'arrayInt'
        ],
        2 => [
          'name' => 'translation',
          'type' => 'varchar',
          'hidden' => true
        ],
        3 => [
          'name' => 'noEmptyString',
          'type' => 'bool',
          'default' => false
        ],
        4 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        5 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'array'
      ],
      'mandatoryValidationList' => [
        0 => 'array'
      ],
      'filter' => true,
      'notCreatable' => true,
      'fieldDefs' => [
        'type' => 'jsonArray'
      ]
    ],
    'attachmentMultiple' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'sourceList',
          'type' => 'multiEnum',
          'view' => 'views/admin/field-manager/fields/source-list'
        ],
        2 => [
          'name' => 'maxFileSize',
          'type' => 'float',
          'tooltip' => true,
          'min' => 0
        ],
        3 => [
          'name' => 'previewSize',
          'type' => 'enum',
          'default' => 'medium',
          'options' => [
            0 => '',
            1 => 'x-small',
            2 => 'small',
            3 => 'medium',
            4 => 'large'
          ]
        ],
        4 => [
          'name' => 'accept',
          'type' => 'multiEnum',
          'noEmptyString' => true,
          'allowCustomOptions' => true,
          'options' => [
            0 => 'image/*',
            1 => 'audio/*',
            2 => 'video/*',
            3 => '.zip',
            4 => '.pdf',
            5 => '.odt',
            6 => '.ods',
            7 => '.odp',
            8 => '.docx',
            9 => '.xlsx',
            10 => '.pptx',
            11 => '.doc',
            12 => '.xls',
            13 => '.ppt',
            14 => '.rtf',
            15 => '.csv',
            16 => '.md',
            17 => '.txt'
          ],
          'tooltip' => 'fileAccept'
        ]
      ],
      'actualFields' => [
        0 => 'ids'
      ],
      'notActualFields' => [
        0 => 'names',
        1 => 'types'
      ],
      'linkDefs' => [
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreign' => 'parent',
        'layoutRelationshipsDisabled' => true,
        'relationName' => 'attachments',
        'disabled' => true
      ],
      'notSortable' => true,
      'filter' => true,
      'personalData' => true,
      'validationList' => [
        0 => 'required',
        1 => 'pattern'
      ],
      'mandatoryValidationList' => [
        0 => 'pattern'
      ],
      'validatorClassName' => 'Espo\\Classes\\FieldValidators\\LinkMultipleType',
      'duplicatorClassName' => 'Espo\\Classes\\FieldDuplicators\\AttachmentMultiple',
      'massUpdateActionList' => [
        0 => 'update',
        1 => 'add'
      ]
    ],
    'autoincrement' => [
      'params' => [],
      'notCreatable' => false,
      'filter' => true,
      'fieldDefs' => [
        'type' => 'int',
        'autoincrement' => true,
        'unique' => true
      ],
      'hookClassName' => 'Espo\\Tools\\FieldManager\\Hooks\\AutoincrementType',
      'textFilter' => true,
      'readOnly' => true
    ],
    'barcode' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'codeType',
          'type' => 'enum',
          'options' => [
            0 => 'CODE128',
            1 => 'CODE128A',
            2 => 'CODE128B',
            3 => 'CODE128C',
            4 => 'EAN13',
            5 => 'EAN8',
            6 => 'EAN5',
            7 => 'EAN2',
            8 => 'UPC',
            9 => 'UPCE',
            10 => 'ITF14',
            11 => 'pharmacode',
            12 => 'QRcode'
          ],
          'translation' => 'FieldManager.options.barcodeType'
        ],
        2 => [
          'name' => 'lastChar',
          'type' => 'varchar',
          'maxLength' => 1,
          'tooltip' => 'barcodeLastChar'
        ],
        3 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'required',
        1 => 'maxLength'
      ],
      'mandatoryValidationList' => [
        0 => 'maxLength'
      ],
      'filter' => true,
      'textFilter' => true,
      'textFilterForeign' => true,
      'fieldDefs' => [
        'type' => 'varchar',
        'len' => 255
      ],
      'validatorClassName' => 'Espo\\Classes\\FieldValidators\\VarcharType'
    ],
    'base' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool'
        ]
      ],
      'filter' => false,
      'notCreatable' => true,
      'fieldDefs' => [
        'notStorable' => true
      ]
    ],
    'bool' => [
      'params' => [
        0 => [
          'name' => 'default',
          'type' => 'bool'
        ],
        1 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        2 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'filter' => true,
      'fieldDefs' => [
        'notNull' => true
      ]
    ],
    'checklist' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'options',
          'type' => 'array',
          'view' => 'views/admin/field-manager/fields/options',
          'noEmptyString' => true,
          'required' => true,
          'tooltip' => true
        ],
        2 => [
          'name' => 'isSorted',
          'type' => 'bool'
        ],
        3 => [
          'name' => 'translation',
          'type' => 'varchar',
          'hidden' => true
        ],
        4 => [
          'name' => 'maxCount',
          'type' => 'int',
          'min' => 1,
          'tooltip' => true
        ],
        5 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        6 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ],
        7 => [
          'name' => 'optionsPath',
          'type' => 'varchar',
          'hidden' => true
        ]
      ],
      'validationList' => [
        0 => 'array',
        1 => 'arrayOfString',
        2 => 'valid',
        3 => 'required',
        4 => 'maxCount'
      ],
      'mandatoryValidationList' => [
        0 => 'array',
        1 => 'arrayOfString',
        2 => 'valid'
      ],
      'filter' => true,
      'notCreatable' => false,
      'notSortable' => true,
      'fieldDefs' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true
      ],
      'translatedOptions' => true,
      'dynamicLogicOptions' => true,
      'personalData' => true
    ],
    'colorpicker' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'colorpicker'
        ],
        2 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        3 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'filter' => false,
      'fieldDefs' => [
        'type' => 'varchar',
        'maxLength' => 7
      ],
      'notCreatable' => true
    ],
    'currency' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'float'
        ],
        2 => [
          'name' => 'min',
          'type' => 'float'
        ],
        3 => [
          'name' => 'max',
          'type' => 'float'
        ],
        4 => [
          'name' => 'onlyDefaultCurrency',
          'type' => 'bool',
          'default' => false
        ],
        5 => [
          'name' => 'conversionDisabled',
          'type' => 'bool',
          'default' => false,
          'tooltip' => true
        ],
        6 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        7 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'actualFields' => [
        0 => 'currency',
        1 => ''
      ],
      'fields' => [
        'currency' => [
          'type' => 'enum',
          'view' => 'views/fields/currency-list',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'customizationRequiredDisabled' => true,
          'customizationOptionsDisabled' => true,
          'customizationIsSortedDisabled' => true,
          'customizationDisplayAsLabelDisabled' => true,
          'customizationAuditedDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'customizationDefaultView' => 'views/admin/field-manager/fields/currency-default',
          'maxLength' => 6
        ],
        'converted' => [
          'type' => 'currencyConverted',
          'readOnly' => true,
          'importDisabled' => true
        ]
      ],
      'validationList' => [
        0 => 'required',
        1 => 'min',
        2 => 'max'
      ],
      'filter' => true,
      'personalData' => true,
      'valueFactoryClassName' => 'Espo\\Core\\Field\\Currency\\CurrencyFactory',
      'attributeExtractorClassName' => 'Espo\\Core\\Field\\Currency\\CurrencyAttributeExtractor'
    ],
    'currencyConverted' => [
      'params' => [],
      'filter' => true,
      'notCreatable' => true,
      'skipOrmDefs' => true
    ],
    'date' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'enum',
          'view' => 'views/admin/field-manager/fields/date/default',
          'options' => [
            0 => '',
            1 => 'javascript: return this.dateTime.getToday();',
            2 => 'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');',
            3 => 'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');',
            4 => 'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');',
            5 => 'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');',
            6 => 'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');',
            7 => 'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');',
            8 => 'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');',
            9 => 'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');',
            10 => 'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');',
            11 => 'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');',
            12 => 'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');',
            13 => 'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');',
            14 => 'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');',
            15 => 'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');',
            16 => 'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');',
            17 => 'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');',
            18 => 'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');',
            19 => 'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');',
            20 => 'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');',
            21 => 'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');',
            22 => 'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');',
            23 => 'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');',
            24 => 'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');',
            25 => 'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');',
            26 => 'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');'
          ],
          'translation' => 'FieldManager.options.dateDefault'
        ],
        2 => [
          'name' => 'after',
          'type' => 'varchar',
          'view' => 'views/admin/field-manager/fields/date/after-before'
        ],
        3 => [
          'name' => 'before',
          'type' => 'varchar',
          'view' => 'views/admin/field-manager/fields/date/after-before'
        ],
        4 => [
          'type' => 'bool',
          'name' => 'useNumericFormat'
        ],
        5 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        6 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'required'
      ],
      'filter' => true,
      'fieldDefs' => [
        'notNull' => false
      ],
      'personalData' => true,
      'valueFactoryClassName' => 'Espo\\Core\\Field\\Date\\DateFactory',
      'attributeExtractorClassName' => 'Espo\\Core\\Field\\Date\\DateAttributeExtractor'
    ],
    'datetime' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'enum',
          'view' => 'views/admin/field-manager/fields/date/default',
          'options' => [
            0 => '',
            1 => 'javascript: return this.dateTime.getNow(1);',
            2 => 'javascript: return this.dateTime.getNow(5);',
            3 => 'javascript: return this.dateTime.getNow(15);',
            4 => 'javascript: return this.dateTime.getNow(30);',
            5 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);',
            6 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);',
            7 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);',
            8 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);',
            9 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);',
            10 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);',
            11 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);',
            12 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);',
            13 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);',
            14 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);',
            15 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);',
            16 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);',
            17 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);',
            18 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);',
            19 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);',
            20 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);',
            21 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);',
            22 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);',
            23 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);'
          ],
          'translation' => 'FieldManager.options.dateTimeDefault'
        ],
        2 => [
          'name' => 'after',
          'type' => 'varchar',
          'view' => 'views/admin/field-manager/fields/date/after-before'
        ],
        3 => [
          'name' => 'before',
          'type' => 'varchar',
          'view' => 'views/admin/field-manager/fields/date/after-before'
        ],
        4 => [
          'type' => 'bool',
          'name' => 'useNumericFormat'
        ],
        5 => [
          'type' => 'bool',
          'name' => 'hasSeconds',
          'hidden' => true
        ],
        6 => [
          'type' => 'enumInt',
          'name' => 'minuteStep',
          'options' => [
            0 => 30,
            1 => 15,
            2 => 10,
            3 => 5,
            4 => 1
          ]
        ],
        7 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        8 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'required'
      ],
      'filter' => true,
      'fieldDefs' => [
        'notNull' => false
      ],
      'personalData' => true,
      'valueFactoryClassName' => 'Espo\\Core\\Field\\DateTime\\DateTimeFactory',
      'attributeExtractorClassName' => 'Espo\\Core\\Field\\DateTime\\DateTimeAttributeExtractor'
    ],
    'datetimeOptional' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'enum',
          'view' => 'views/admin/field-manager/fields/date/default',
          'options' => [
            0 => '',
            1 => 'javascript: return this.dateTime.getNow(1);',
            2 => 'javascript: return this.dateTime.getNow(5);',
            3 => 'javascript: return this.dateTime.getNow(15);',
            4 => 'javascript: return this.dateTime.getNow(30);',
            5 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);',
            6 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);',
            7 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);',
            8 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);',
            9 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);',
            10 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);',
            11 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);',
            12 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);',
            13 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);',
            14 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);',
            15 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);',
            16 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);',
            17 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);',
            18 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);',
            19 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);',
            20 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);',
            21 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);',
            22 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);',
            23 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);'
          ],
          'translation' => 'FieldManager.options.dateTimeDefault'
        ],
        2 => [
          'name' => 'after',
          'type' => 'varchar',
          'view' => 'views/admin/field-manager/fields/date/after-before'
        ],
        3 => [
          'name' => 'before',
          'type' => 'varchar',
          'view' => 'views/admin/field-manager/fields/date/after-before'
        ],
        4 => [
          'type' => 'bool',
          'name' => 'useNumericFormat'
        ],
        5 => [
          'type' => 'enumInt',
          'name' => 'minuteStep',
          'options' => [
            0 => 30,
            1 => 15,
            2 => 10,
            3 => 5,
            4 => 1
          ]
        ],
        6 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        7 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'actualFields' => [
        0 => '',
        1 => 'date'
      ],
      'fields' => [
        'date' => [
          'type' => 'date',
          'disabled' => true
        ]
      ],
      'validationList' => [
        0 => 'required'
      ],
      'filter' => true,
      'notCreatable' => true,
      'fieldDefs' => [
        'type' => 'datetime',
        'notNull' => false
      ],
      'view' => 'views/fields/datetime-optional',
      'personalData' => true,
      'valueFactoryClassName' => 'Espo\\Core\\Field\\DateTimeOptional\\DateTimeOptionalFactory',
      'attributeExtractorClassName' => 'Espo\\Core\\Field\\DateTimeOptional\\DateTimeOptionalAttributeExtractor'
    ],
    'duration' => [
      'params' => [
        0 => [
          'name' => 'default',
          'type' => 'int'
        ],
        1 => [
          'name' => 'options',
          'type' => 'arrayInt'
        ]
      ],
      'notCreatable' => true,
      'fieldDefs' => [
        'type' => 'int'
      ]
    ],
    'email' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'audited',
          'type' => 'bool'
        ]
      ],
      'actualFields' => [
        0 => 'isOptedOut',
        1 => '',
        2 => 'data'
      ],
      'notActualFields' => [],
      'fields' => [
        'isOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ]
      ],
      'validationList' => [
        0 => 'required',
        1 => 'emailAddress',
        2 => 'maxLength'
      ],
      'mandatoryValidationList' => [
        0 => 'emailAddress',
        1 => 'maxLength'
      ],
      'notCreatable' => true,
      'filter' => true,
      'fieldDefs' => [
        'notStorable' => true
      ],
      'textFilter' => true,
      'personalData' => true,
      'valueFactoryClassName' => 'Espo\\Core\\Field\\EmailAddress\\EmailAddressGroupFactory',
      'attributeExtractorClassName' => 'Espo\\Core\\Field\\EmailAddress\\EmailAddressGroupAttributeExtractor'
    ],
    'enum' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'options',
          'type' => 'array',
          'view' => 'views/admin/field-manager/fields/options-with-style',
          'tooltip' => true
        ],
        2 => [
          'name' => 'default',
          'type' => 'enum',
          'view' => 'views/admin/field-manager/fields/options/default'
        ],
        3 => [
          'name' => 'isSorted',
          'type' => 'bool'
        ],
        4 => [
          'name' => 'translation',
          'type' => 'varchar',
          'hidden' => true
        ],
        5 => [
          'name' => 'optionsPath',
          'type' => 'varchar',
          'hidden' => true
        ],
        6 => [
          'name' => 'style',
          'type' => 'jsonObject',
          'hidden' => true
        ],
        7 => [
          'name' => 'displayAsLabel',
          'type' => 'bool'
        ],
        8 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        9 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'required',
        1 => 'valid',
        2 => 'maxLength'
      ],
      'mandatoryValidationList' => [
        0 => 'valid',
        1 => 'maxLength'
      ],
      'filter' => true,
      'fieldDefs' => [
        'type' => 'varchar'
      ],
      'translatedOptions' => true,
      'dynamicLogicOptions' => true,
      'personalData' => true
    ],
    'enumFloat' => [
      'params' => [
        0 => [
          'name' => 'options',
          'type' => 'array'
        ],
        1 => [
          'name' => 'default',
          'type' => 'float'
        ],
        2 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        3 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'filter' => true,
      'notCreatable' => true,
      'fieldDefs' => [
        'type' => 'float'
      ]
    ],
    'enumInt' => [
      'params' => [
        0 => [
          'name' => 'options',
          'type' => 'array'
        ],
        1 => [
          'name' => 'default',
          'type' => 'int'
        ],
        2 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        3 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ],
        4 => [
          'name' => 'translation',
          'type' => 'varchar',
          'hidden' => true
        ]
      ],
      'filter' => true,
      'notCreatable' => true,
      'fieldDefs' => [
        'type' => 'int'
      ]
    ],
    'file' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'sourceList',
          'type' => 'multiEnum',
          'view' => 'views/admin/field-manager/fields/source-list'
        ],
        2 => [
          'name' => 'maxFileSize',
          'type' => 'float',
          'tooltip' => true,
          'min' => 0
        ],
        3 => [
          'name' => 'accept',
          'type' => 'multiEnum',
          'noEmptyString' => true,
          'allowCustomOptions' => true,
          'options' => [
            0 => 'image/*',
            1 => 'audio/*',
            2 => 'video/*',
            3 => '.zip',
            4 => '.pdf',
            5 => '.odt',
            6 => '.ods',
            7 => '.odp',
            8 => '.docx',
            9 => '.xlsx',
            10 => '.pptx',
            11 => '.doc',
            12 => '.xls',
            13 => '.ppt',
            14 => '.rtf',
            15 => '.csv',
            16 => '.md',
            17 => '.txt'
          ],
          'tooltip' => 'fileAccept'
        ],
        4 => [
          'name' => 'audited',
          'type' => 'bool'
        ]
      ],
      'actualFields' => [
        0 => 'id'
      ],
      'notActualFields' => [
        0 => 'name'
      ],
      'validationList' => [
        0 => 'required',
        1 => 'pattern'
      ],
      'mandatoryValidationList' => [
        0 => 'pattern'
      ],
      'filter' => true,
      'linkDefs' => [
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'skipOrmDefs' => true,
        'disabled' => true
      ],
      'personalData' => true,
      'duplicatorClassName' => 'Espo\\Classes\\FieldDuplicators\\File'
    ],
    'float' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'float'
        ],
        2 => [
          'name' => 'min',
          'type' => 'float'
        ],
        3 => [
          'name' => 'max',
          'type' => 'float'
        ],
        4 => [
          'name' => 'decimalPlaces',
          'type' => 'int'
        ],
        5 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        6 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'required',
        1 => 'min',
        2 => 'max'
      ],
      'filter' => true,
      'fieldDefs' => [
        'notNull' => false
      ]
    ],
    'foreign' => [
      'params' => [
        0 => [
          'name' => 'link',
          'type' => 'varchar',
          'view' => 'views/admin/field-manager/fields/foreign/link',
          'required' => true
        ],
        1 => [
          'name' => 'field',
          'type' => 'varchar',
          'view' => 'views/admin/field-manager/fields/foreign/field',
          'required' => true
        ],
        2 => [
          'name' => 'view',
          'type' => 'varchar',
          'hidden' => true
        ]
      ],
      'fieldTypeList' => [
        0 => 'varchar',
        1 => 'enum',
        2 => 'enumInt',
        3 => 'enumFloat',
        4 => 'int',
        5 => 'float',
        6 => 'url',
        7 => 'date',
        8 => 'datetime',
        9 => 'text',
        10 => 'number',
        11 => 'bool',
        12 => 'email',
        13 => 'phone',
        14 => 'array',
        15 => 'multiEnum',
        16 => 'checklist',
        17 => 'currencyConverted'
      ],
      'fieldTypeViewMap' => [
        'varchar' => 'views/fields/foreign-varchar',
        'enum' => 'views/fields/foreign-enum',
        'enumInt' => 'views/fields/foreign-int',
        'enumFloat' => 'views/fields/foreign-float',
        'int' => 'views/fields/foreign-int',
        'float' => 'views/fields/foreign-float',
        'url' => 'views/fields/foreign-url',
        'date' => 'views/fields/foreign-date',
        'datetime' => 'views/fields/foreign-datetime',
        'text' => 'views/fields/foreign-text',
        'number' => 'views/fields/foreign-varchar',
        'bool' => 'views/fields/foreign-bool',
        'email' => 'views/fields/foreign-email',
        'phone' => 'views/fields/foreign-phone',
        'array' => 'views/fields/foreign-array',
        'checklist' => 'views/fields/foreign-checklist',
        'multiEnum' => 'views/fields/foreign-multi-enum',
        'currencyConverted' => 'views/fields/foreign-currency-converted'
      ],
      'filter' => true,
      'notCreatable' => false,
      'fieldDefs' => [
        'readOnly' => true
      ]
    ],
    'image' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'previewSize',
          'type' => 'enum',
          'default' => 'small',
          'options' => [
            0 => 'x-small',
            1 => 'small',
            2 => 'medium',
            3 => 'large'
          ]
        ],
        2 => [
          'name' => 'listPreviewSize',
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'small',
            2 => 'medium'
          ],
          'translation' => 'Admin.options.previewSize'
        ],
        3 => [
          'name' => 'maxFileSize',
          'type' => 'float',
          'tooltip' => true,
          'min' => 0
        ],
        4 => [
          'name' => 'audited',
          'type' => 'bool'
        ]
      ],
      'actualFields' => [
        0 => 'id'
      ],
      'notActualFields' => [
        0 => 'name'
      ],
      'validationList' => [
        0 => 'required',
        1 => 'pattern'
      ],
      'mandatoryValidationList' => [
        0 => 'pattern'
      ],
      'filter' => true,
      'linkDefs' => [
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'skipOrmDefs' => true,
        'disabled' => true
      ],
      'personalData' => true,
      'duplicatorClassName' => 'Espo\\Classes\\FieldDuplicators\\File'
    ],
    'int' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'int'
        ],
        2 => [
          'name' => 'min',
          'type' => 'int'
        ],
        3 => [
          'name' => 'max',
          'type' => 'int'
        ],
        4 => [
          'name' => 'disableFormatting',
          'type' => 'bool'
        ],
        5 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        6 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'required',
        1 => 'min',
        2 => 'max'
      ],
      'filter' => true,
      'textFilter' => true,
      'textFilterForeign' => true,
      'personalData' => true
    ],
    'jsonArray' => [
      'notCreatable' => true,
      'notMergeable' => true,
      'notSortable' => true,
      'filter' => false,
      'validationList' => [
        0 => 'array'
      ],
      'mandatoryValidationList' => [
        0 => 'array'
      ]
    ],
    'jsonObject' => [
      'notCreatable' => true,
      'notMergeable' => true,
      'filter' => false
    ],
    'link' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        2 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ],
        3 => [
          'name' => 'default',
          'type' => 'link',
          'view' => 'views/admin/field-manager/fields/link/default'
        ]
      ],
      'actualFields' => [
        0 => 'id'
      ],
      'notActualFields' => [
        0 => 'name'
      ],
      'validationList' => [
        0 => 'required',
        1 => 'pattern'
      ],
      'mandatoryValidationList' => [
        0 => 'pattern'
      ],
      'filter' => true,
      'notCreatable' => true,
      'valueFactoryClassName' => 'Espo\\Core\\Field\\Link\\LinkFactory',
      'attributeExtractorClassName' => 'Espo\\Core\\Field\\Link\\LinkAttributeExtractor'
    ],
    'linkMultiple' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'sortable',
          'type' => 'bool',
          'default' => false,
          'hidden' => true
        ],
        2 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ],
        3 => [
          'name' => 'default',
          'type' => 'linkMultiple',
          'view' => 'views/admin/field-manager/fields/link-multiple/default'
        ]
      ],
      'actualFields' => [
        0 => 'ids'
      ],
      'notActualFields' => [
        0 => 'names'
      ],
      'validationList' => [
        0 => 'required',
        1 => 'pattern',
        2 => 'columnsValid'
      ],
      'mandatoryValidationList' => [
        0 => 'pattern',
        1 => 'columnsValid'
      ],
      'notCreatable' => true,
      'notSortable' => true,
      'filter' => true,
      'valueFactoryClassName' => 'Espo\\Core\\Field\\LinkMultiple\\LinkMultipleFactory',
      'attributeExtractorClassName' => 'Espo\\Core\\Field\\LinkMultiple\\LinkMultipleAttributeExtractor',
      'duplicatorClassName' => 'Espo\\Classes\\FieldDuplicators\\LinkMultiple',
      'massUpdateActionList' => [
        0 => 'update',
        1 => 'add',
        2 => 'remove'
      ]
    ],
    'linkOne' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        2 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'actualFields' => [
        0 => 'id'
      ],
      'notActualFields' => [
        0 => 'name'
      ],
      'validationList' => [
        0 => 'required',
        1 => 'pattern'
      ],
      'mandatoryValidationList' => [
        0 => 'pattern'
      ],
      'validatorClassName' => 'Espo\\Classes\\FieldValidators\\LinkType',
      'filter' => true,
      'notCreatable' => true
    ],
    'linkParent' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'entityList',
          'type' => 'multiEnum',
          'view' => 'views/admin/field-manager/fields/entity-list'
        ],
        2 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        3 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'actualFields' => [
        0 => 'id',
        1 => 'type'
      ],
      'notActualFields' => [
        0 => 'name'
      ],
      'validationList' => [
        0 => 'required',
        1 => 'pattern',
        2 => 'valid'
      ],
      'mandatoryValidationList' => [
        0 => 'pattern',
        1 => 'valid'
      ],
      'filter' => true,
      'notCreatable' => true,
      'fieldDefs' => [
        'notStorable' => true
      ],
      'valueFactoryClassName' => 'Espo\\Core\\Field\\LinkParent\\LinkParentFactory',
      'attributeExtractorClassName' => 'Espo\\Core\\Field\\LinkParent\\LinkParentAttributeExtractor'
    ],
    'map' => [
      'params' => [
        0 => [
          'name' => 'provider',
          'type' => 'enum',
          'options' => [
            0 => 'Google'
          ],
          'default' => 'Google'
        ],
        1 => [
          'name' => 'height',
          'type' => 'int',
          'default' => 300
        ]
      ],
      'filter' => false,
      'notCreatable' => true,
      'notSortable' => true,
      'fieldDefs' => [
        'notStorable' => true
      ]
    ],
    'multiEnum' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'options',
          'type' => 'array',
          'view' => 'views/admin/field-manager/fields/options-with-style',
          'tooltip' => true
        ],
        2 => [
          'name' => 'isSorted',
          'type' => 'bool'
        ],
        3 => [
          'name' => 'translation',
          'type' => 'varchar',
          'hidden' => true
        ],
        4 => [
          'name' => 'allowCustomOptions',
          'type' => 'bool'
        ],
        5 => [
          'name' => 'maxCount',
          'type' => 'int',
          'min' => 1,
          'tooltip' => true
        ],
        6 => [
          'name' => 'style',
          'type' => 'jsonObject',
          'hidden' => true
        ],
        7 => [
          'name' => 'displayAsLabel',
          'type' => 'bool'
        ],
        8 => [
          'name' => 'displayAsList',
          'type' => 'bool',
          'tooltip' => true
        ],
        9 => [
          'name' => 'pattern',
          'type' => 'varchar',
          'tooltip' => true,
          'view' => 'views/admin/field-manager/fields/pattern'
        ],
        10 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        11 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ],
        12 => [
          'name' => 'optionsPath',
          'type' => 'varchar',
          'hidden' => true
        ]
      ],
      'validationList' => [
        0 => 'array',
        1 => 'arrayOfString',
        2 => 'valid',
        3 => 'required',
        4 => 'maxCount',
        5 => 'maxLength',
        6 => 'pattern',
        7 => 'noEmptyString'
      ],
      'mandatoryValidationList' => [
        0 => 'array',
        1 => 'arrayOfString',
        2 => 'valid',
        3 => 'maxLength',
        4 => 'noEmptyString'
      ],
      'filter' => true,
      'notCreatable' => false,
      'notSortable' => true,
      'fieldDefs' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true
      ],
      'translatedOptions' => true,
      'dynamicLogicOptions' => true,
      'personalData' => true,
      'massUpdateActionList' => [
        0 => 'update',
        1 => 'add',
        2 => 'remove'
      ]
    ],
    'number' => [
      'params' => [
        0 => [
          'name' => 'prefix',
          'type' => 'varchar',
          'maxLength' => 16
        ],
        1 => [
          'name' => 'nextNumber',
          'type' => 'int',
          'min' => 0,
          'max' => 2147483647,
          'required' => true,
          'default' => 1
        ],
        2 => [
          'name' => 'padLength',
          'type' => 'int',
          'default' => 5,
          'required' => true,
          'min' => 1,
          'max' => 20
        ]
      ],
      'filter' => true,
      'fieldDefs' => [
        'type' => 'varchar',
        'len' => 36,
        'notNull' => false,
        'unique' => false
      ],
      'hookClassName' => 'Espo\\Tools\\FieldManager\\Hooks\\NumberType',
      'textFilter' => true,
      'readOnly' => true
    ],
    'password' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'maxLength',
          'type' => 'int',
          'max' => 255
        ]
      ],
      'validationList' => [
        0 => 'valid',
        1 => 'maxLength'
      ],
      'mandatoryValidationList' => [
        0 => 'valid',
        1 => 'maxLength'
      ],
      'notSortable' => true,
      'notCreatable' => true,
      'filter' => false,
      'validatorClassName' => 'Espo\\Classes\\FieldValidators\\PasswordType'
    ],
    'personName' => [
      'actualFields' => [
        0 => 'salutation',
        1 => 'first',
        2 => 'last',
        3 => 'middle'
      ],
      'notActualFields' => [
        0 => ''
      ],
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ]
      ],
      'fields' => [
        'salutation' => [
          'type' => 'enum'
        ],
        'first' => [
          'type' => 'varchar',
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'last' => [
          'type' => 'varchar',
          'trim' => true,
          'pattern' => '$noBadCharacters'
        ],
        'middle' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 100,
          'pattern' => '$noBadCharacters'
        ]
      ],
      'naming' => 'prefix',
      'notMergeable' => true,
      'notCreatable' => true,
      'filter' => true,
      'skipOrmDefs' => false,
      'personalData' => true,
      'textFilter' => true,
      'fullTextSearch' => true,
      'validationList' => [
        0 => 'required'
      ],
      'fullTextSearchColumnList' => [
        0 => 'first',
        1 => 'last'
      ]
    ],
    'phone' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'typeList',
          'type' => 'array',
          'default' => [
            0 => 'Mobile',
            1 => 'Office',
            2 => 'Home',
            3 => 'Fax',
            4 => 'Other'
          ],
          'view' => 'views/admin/field-manager/fields/options'
        ],
        2 => [
          'name' => 'defaultType',
          'type' => 'varchar',
          'default' => 'Mobile'
        ],
        3 => [
          'name' => 'audited',
          'type' => 'bool'
        ]
      ],
      'actualFields' => [
        0 => 'isOptedOut',
        1 => '',
        2 => 'data'
      ],
      'notActualFields' => [],
      'fields' => [
        'isOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ]
      ],
      'validationList' => [
        0 => 'required',
        1 => 'valid',
        2 => 'maxLength'
      ],
      'mandatoryValidationList' => [
        0 => 'valid',
        1 => 'maxLength'
      ],
      'notCreatable' => true,
      'filter' => true,
      'fieldDefs' => [
        'notStorable' => true
      ],
      'translatedOptions' => true,
      'textFilter' => true,
      'personalData' => true,
      'valueFactoryClassName' => 'Espo\\Core\\Field\\PhoneNumber\\PhoneNumberGroupFactory',
      'attributeExtractorClassName' => 'Espo\\Core\\Field\\PhoneNumber\\PhoneNumberGroupAttributeExtractor'
    ],
    'rangeCurrency' => [
      'actualFields' => [
        0 => 'from',
        1 => 'to'
      ],
      'fields' => [
        'from' => [
          'type' => 'currency'
        ],
        'to' => [
          'type' => 'currency'
        ]
      ],
      'naming' => 'prefix',
      'notMergeable' => true,
      'notCreatable' => true,
      'filter' => false,
      'skipOrmDefs' => true
    ],
    'rangeFloat' => [
      'actualFields' => [
        0 => 'from',
        1 => 'to'
      ],
      'fields' => [
        'from' => [
          'type' => 'float'
        ],
        'to' => [
          'type' => 'float'
        ]
      ],
      'naming' => 'prefix',
      'notMergeable' => true,
      'notCreatable' => true,
      'filter' => false,
      'skipOrmDefs' => true
    ],
    'rangeInt' => [
      'actualFields' => [
        0 => 'from',
        1 => 'to'
      ],
      'fields' => [
        'from' => [
          'type' => 'int'
        ],
        'to' => [
          'type' => 'int'
        ]
      ],
      'naming' => 'prefix',
      'notMergeable' => true,
      'notCreatable' => true,
      'filter' => false,
      'skipOrmDefs' => true
    ],
    'text' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'text'
        ],
        2 => [
          'name' => 'maxLength',
          'type' => 'int'
        ],
        3 => [
          'name' => 'seeMoreDisabled',
          'type' => 'bool',
          'tooltip' => true
        ],
        4 => [
          'name' => 'rows',
          'type' => 'int',
          'min' => 1
        ],
        5 => [
          'name' => 'rowsMin',
          'type' => 'int',
          'default' => 2,
          'min' => 1,
          'hidden' => true
        ],
        6 => [
          'name' => 'cutHeight',
          'type' => 'int',
          'default' => 200,
          'min' => 1,
          'tooltip' => true
        ],
        7 => [
          'name' => 'displayRawText',
          'type' => 'bool'
        ],
        8 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ],
        9 => [
          'name' => 'audited',
          'type' => 'bool',
          'tooltip' => true
        ]
      ],
      'validationList' => [
        0 => 'required',
        1 => 'maxLength'
      ],
      'filter' => true,
      'personalData' => true,
      'textFilter' => true,
      'textFilterForeign' => true,
      'fullTextSearch' => true
    ],
    'url' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'varchar'
        ],
        2 => [
          'name' => 'maxLength',
          'type' => 'int'
        ],
        3 => [
          'name' => 'strip',
          'type' => 'bool',
          'tooltip' => 'urlStrip'
        ],
        4 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        5 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'required',
        1 => 'maxLength',
        2 => 'valid'
      ],
      'mandatoryValidationList' => [
        0 => 'maxLength',
        1 => 'valid'
      ],
      'filter' => true,
      'fieldDefs' => [
        'type' => 'varchar'
      ],
      'personalData' => true
    ],
    'varchar' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'varchar',
          'trim' => true
        ],
        2 => [
          'name' => 'maxLength',
          'type' => 'int',
          'default' => 150,
          'min' => 1,
          'max' => 65535
        ],
        3 => [
          'name' => 'options',
          'type' => 'multiEnum',
          'tooltip' => 'optionsVarchar'
        ],
        4 => [
          'name' => 'pattern',
          'type' => 'varchar',
          'default' => NULL,
          'tooltip' => true,
          'view' => 'views/admin/field-manager/fields/pattern'
        ],
        5 => [
          'name' => 'audited',
          'type' => 'bool',
          'tooltip' => true
        ],
        6 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ],
        7 => [
          'name' => 'noSpellCheck',
          'type' => 'bool',
          'default' => false,
          'hidden' => true
        ],
        8 => [
          'name' => 'optionsPath',
          'type' => 'varchar',
          'hidden' => true
        ]
      ],
      'validationList' => [
        0 => 'required',
        1 => 'maxLength',
        2 => 'pattern'
      ],
      'mandatoryValidationList' => [
        0 => 'maxLength'
      ],
      'filter' => true,
      'personalData' => true,
      'textFilter' => true,
      'textFilterForeign' => true,
      'dynamicLogicOptions' => true,
      'fullTextSearch' => true
    ],
    'wysiwyg' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'text'
        ],
        2 => [
          'name' => 'height',
          'type' => 'int'
        ],
        3 => [
          'name' => 'minHeight',
          'type' => 'int'
        ],
        4 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ],
        5 => [
          'name' => 'attachmentField',
          'type' => 'varchar',
          'hidden' => true
        ],
        6 => [
          'name' => 'useIframe',
          'type' => 'bool'
        ],
        7 => [
          'name' => 'maxLength',
          'type' => 'int'
        ],
        8 => [
          'name' => 'audited',
          'type' => 'bool',
          'tooltip' => true
        ]
      ],
      'filter' => true,
      'fieldDefs' => [
        'type' => 'text'
      ],
      'validationList' => [
        0 => 'required',
        1 => 'maxLength'
      ],
      'personalData' => true,
      'textFilter' => true,
      'fullTextSearch' => true,
      'duplicatorClassName' => 'Espo\\Classes\\FieldDuplicators\\Wysiwyg',
      'validatorClassName' => 'Espo\\Classes\\FieldValidators\\TextType'
    ]
  ],
  'integrations' => [
    'GoogleMaps' => [
      'fields' => [
        'apiKey' => [
          'type' => 'varchar',
          'maxLength' => 255,
          'required' => true
        ]
      ],
      'allowUserAccounts' => false,
      'view' => 'views/admin/integrations/google-maps',
      'authMethod' => 'GoogleMaps'
    ]
  ],
  'notificationDefs' => [
    'Email' => [
      'assignmentNotificatorClassName' => 'Espo\\Classes\\AssignmentNotificators\\Email'
    ],
    'Case' => [
      'emailNotificationHandlerClassNameMap' => [
        'notePost' => 'Espo\\Modules\\Crm\\Classes\\EmailNotificationHandlers\\CaseObj'
      ]
    ]
  ],
  'recordDefs' => [
    'ActionHistoryRecord' => [
      'readLoaderClassNameList' => [
        0 => 'Espo\\Core\\FieldProcessing\\LinkParent\\TargetLoader'
      ],
      'listLoaderClassNameList' => [
        0 => 'Espo\\Core\\FieldProcessing\\LinkParent\\TargetLoader'
      ],
      'massActions' => [
        'delete' => [
          'allowed' => true
        ]
      ]
    ],
    'Attachment' => [
      'massActions' => [
        'delete' => [
          'allowed' => true
        ]
      ]
    ],
    'AuthLogRecord' => [
      'massActions' => [
        'delete' => [
          'allowed' => true
        ]
      ]
    ],
    'AuthToken' => [
      'assignmentNotificatorClassName' => 'Espo\\Classes\\AssignmentNotificators\\Email',
      'readLoaderClassNameList' => [
        0 => 'Espo\\Classes\\FieldProcessing\\Email\\AddressDataLoader',
        1 => 'Espo\\Classes\\FieldProcessing\\Email\\UserColumnsLoader'
      ],
      'listLoaderClassNameList' => [
        0 => 'Espo\\Classes\\FieldProcessing\\Email\\StringDataLoader'
      ],
      'massActions' => [
        'update' => [
          'allowed' => true
        ],
        'delete' => [
          'allowed' => true
        ]
      ]
    ],
    'DashboardTemplate' => [
      'massActions' => [
        'delete' => [
          'allowed' => true
        ]
      ]
    ],
    'Email' => [
      'readLoaderClassNameList' => [
        0 => 'Espo\\Classes\\FieldProcessing\\Email\\AddressDataLoader',
        1 => 'Espo\\Classes\\FieldProcessing\\Email\\UserColumnsLoader',
        2 => 'Espo\\Classes\\FieldProcessing\\Email\\IcsDataLoader'
      ],
      'listLoaderClassNameList' => [
        0 => 'Espo\\Classes\\FieldProcessing\\Email\\StringDataLoader'
      ],
      'selectApplierClassNameList' => [
        0 => 'Espo\\Classes\\Select\\Email\\AdditionalAppliers\\Main'
      ]
    ],
    'EmailAccount' => [
      'massActions' => [
        'update' => [
          'allowed' => true
        ],
        'delete' => [
          'allowed' => true
        ]
      ]
    ],
    'EmailAddress' => [
      'massActions' => [
        'delete' => [
          'allowed' => true
        ]
      ]
    ],
    'EmailFilter' => [
      'massActions' => [
        'delete' => [
          'allowed' => true
        ],
        'update' => [
          'allowed' => true
        ]
      ]
    ],
    'EmailTemplate' => [
      'massActions' => [
        'delete' => [
          'allowed' => true
        ],
        'update' => [
          'allowed' => true
        ]
      ],
      'actions' => [
        'merge' => [
          'allowed' => true
        ]
      ]
    ],
    'EmailTemplateCategory' => [
      'massActions' => [
        'delete' => [
          'allowed' => true
        ],
        'update' => [
          'allowed' => true
        ]
      ]
    ],
    'Import' => [
      'readLoaderClassNameList' => [
        0 => 'Espo\\Classes\\FieldProcessing\\Import\\CountsLoader'
      ],
      'massActions' => [
        'delete' => [
          'allowed' => true
        ]
      ]
    ],
    'InboundEmail' => [
      'massActions' => [
        'update' => [
          'allowed' => true
        ],
        'delete' => [
          'allowed' => true
        ]
      ]
    ],
    'Job' => [
      'massActions' => [
        'delete' => [
          'allowed' => true
        ]
      ]
    ],
    'LayoutSet' => [
      'massActions' => [
        'delete' => [
          'allowed' => true
        ]
      ]
    ],
    'LeadCapture' => [
      'massActions' => [
        'delete' => [
          'allowed' => true
        ],
        'update' => [
          'allowed' => true
        ]
      ]
    ],
    'LeadCaptureLogRecord' => [
      'massActions' => [
        'delete' => [
          'allowed' => true
        ]
      ]
    ],
    'Note' => [
      'readLoaderClassNameList' => [
        0 => 'Espo\\Classes\\FieldProcessing\\Note\\AttachmentsLoader'
      ]
    ],
    'Notification' => [
      'exportDisabled' => true
    ],
    'PhoneNumber' => [
      'massActions' => [
        'update' => [
          'allowed' => true
        ],
        'delete' => [
          'allowed' => true
        ]
      ]
    ],
    'Portal' => [
      'readLoaderClassNameList' => [
        0 => 'Espo\\Classes\\FieldProcessing\\Portal\\UrlLoader'
      ],
      'listLoaderClassNameList' => [
        0 => 'Espo\\Classes\\FieldProcessing\\Portal\\UrlLoader'
      ],
      'massActions' => [
        'delete' => [
          'allowed' => true
        ]
      ]
    ],
    'PortalRole' => [
      'massActions' => [
        'delete' => [
          'allowed' => true
        ]
      ]
    ],
    'Preferences' => [
      'actionsDisabled' => true
    ],
    'Role' => [
      'massActions' => [
        'delete' => [
          'allowed' => true
        ]
      ]
    ],
    'ScheduledJob' => [
      'massActions' => [
        'delete' => [
          'allowed' => true
        ],
        'update' => [
          'allowed' => true
        ]
      ]
    ],
    'Team' => [
      'massActions' => [
        'delete' => [
          'allowed' => true
        ]
      ],
      'beforeLinkHookClassNameList' => [
        0 => 'Espo\\Classes\\RecordHooks\\Team\\BeforeLinkUserCheck'
      ]
    ],
    'Template' => [
      'massActions' => [
        'delete' => [
          'allowed' => true
        ],
        'update' => [
          'allowed' => true
        ]
      ]
    ],
    'User' => [
      'massActions' => [
        'update' => [
          'implementationClassName' => 'Espo\\Classes\\MassAction\\User\\MassUpdate'
        ],
        'delete' => [
          'implementationClassName' => 'Espo\\Classes\\MassAction\\User\\MassDelete'
        ]
      ],
      'readLoaderClassNameList' => [
        0 => 'Espo\\Classes\\FieldProcessing\\User\\LastAccessLoader'
      ]
    ],
    'Webhook' => [
      'massActions' => [
        'delete' => [
          'allowed' => true
        ],
        'update' => [
          'allowed' => true
        ]
      ]
    ],
    'Account' => [
      'duplicateWhereBuilderClassName' => 'Espo\\Classes\\DuplicateWhereBuilders\\Company',
      'readLoaderClassNameList' => [],
      'listLoaderClassNameList' => [],
      'saverClassNameList' => [],
      'selectApplierClassNameList' => [],
      'beforeReadHookClassNameList' => [],
      'beforeCreateHookClassNameList' => [],
      'beforeUpdateHookClassNameList' => [],
      'beforeDeleteHookClassNameList' => [],
      'beforeLinkHookClassNameList' => [],
      'beforeUnlinkHookClassNameList' => []
    ],
    'Call' => [
      'listLoaderClassNameList' => [
        0 => 'Espo\\Modules\\Crm\\Classes\\FieldProcessing\\Meeting\\AcceptanceStatusLoader'
      ],
      'readLoaderClassNameList' => [
        0 => 'Espo\\Core\\FieldProcessing\\Reminder\\Loader',
        1 => 'Espo\\Modules\\Crm\\Classes\\FieldProcessing\\Call\\PhoneNumberMapLoader'
      ],
      'saverClassNameList' => [
        0 => 'Espo\\Core\\FieldProcessing\\Reminder\\Saver'
      ],
      'beforeUpdateHookClassNameList' => [
        0 => 'Espo\\Classes\\RecordHooks\\Event\\BeforeUpdatePreserveDuration'
      ],
      'selectApplierClassNameList' => [],
      'beforeReadHookClassNameList' => [],
      'beforeCreateHookClassNameList' => [],
      'beforeDeleteHookClassNameList' => [],
      'beforeLinkHookClassNameList' => [],
      'beforeUnlinkHookClassNameList' => []
    ],
    'Campaign' => [
      'readLoaderClassNameList' => [
        0 => 'Espo\\Modules\\Crm\\Classes\\FieldProcessing\\Campaign\\StatsLoader'
      ],
      'listLoaderClassNameList' => [],
      'saverClassNameList' => [],
      'selectApplierClassNameList' => [],
      'beforeReadHookClassNameList' => [],
      'beforeCreateHookClassNameList' => [],
      'beforeUpdateHookClassNameList' => [],
      'beforeDeleteHookClassNameList' => [],
      'beforeLinkHookClassNameList' => [],
      'beforeUnlinkHookClassNameList' => []
    ],
    'CampaignLogRecord' => [
      'massActions' => [
        'update' => [
          'allowed' => true
        ],
        'delete' => [
          'allowed' => true
        ]
      ],
      'readLoaderClassNameList' => [],
      'listLoaderClassNameList' => [],
      'saverClassNameList' => [],
      'selectApplierClassNameList' => [],
      'beforeReadHookClassNameList' => [],
      'beforeCreateHookClassNameList' => [],
      'beforeUpdateHookClassNameList' => [],
      'beforeDeleteHookClassNameList' => [],
      'beforeLinkHookClassNameList' => [],
      'beforeUnlinkHookClassNameList' => []
    ],
    'CampaignTrackingUrl' => [
      'massActions' => [
        'update' => [
          'allowed' => true
        ],
        'delete' => [
          'allowed' => true
        ]
      ],
      'readLoaderClassNameList' => [],
      'listLoaderClassNameList' => [],
      'saverClassNameList' => [],
      'selectApplierClassNameList' => [],
      'beforeReadHookClassNameList' => [],
      'beforeCreateHookClassNameList' => [],
      'beforeUpdateHookClassNameList' => [],
      'beforeDeleteHookClassNameList' => [],
      'beforeLinkHookClassNameList' => [],
      'beforeUnlinkHookClassNameList' => []
    ],
    'Contact' => [
      'duplicateWhereBuilderClassName' => 'Espo\\Classes\\DuplicateWhereBuilders\\Person',
      'readLoaderClassNameList' => [],
      'listLoaderClassNameList' => [],
      'saverClassNameList' => [],
      'selectApplierClassNameList' => [],
      'beforeReadHookClassNameList' => [],
      'beforeCreateHookClassNameList' => [],
      'beforeUpdateHookClassNameList' => [],
      'beforeDeleteHookClassNameList' => [],
      'beforeLinkHookClassNameList' => [],
      'beforeUnlinkHookClassNameList' => []
    ],
    'DocumentFolder' => [
      'massActions' => [
        'update' => [
          'allowed' => true
        ],
        'delete' => [
          'allowed' => true
        ]
      ],
      'readLoaderClassNameList' => [],
      'listLoaderClassNameList' => [],
      'saverClassNameList' => [],
      'selectApplierClassNameList' => [],
      'beforeReadHookClassNameList' => [],
      'beforeCreateHookClassNameList' => [],
      'beforeUpdateHookClassNameList' => [],
      'beforeDeleteHookClassNameList' => [],
      'beforeLinkHookClassNameList' => [],
      'beforeUnlinkHookClassNameList' => []
    ],
    'EmailQueueItem' => [
      'massActions' => [
        'delete' => [
          'allowed' => true
        ]
      ],
      'readLoaderClassNameList' => [],
      'listLoaderClassNameList' => [],
      'saverClassNameList' => [],
      'selectApplierClassNameList' => [],
      'beforeReadHookClassNameList' => [],
      'beforeCreateHookClassNameList' => [],
      'beforeUpdateHookClassNameList' => [],
      'beforeDeleteHookClassNameList' => [],
      'beforeLinkHookClassNameList' => [],
      'beforeUnlinkHookClassNameList' => []
    ],
    'KnowledgeBaseCategory' => [
      'massActions' => [
        'update' => [
          'allowed' => true
        ],
        'delete' => [
          'allowed' => true
        ]
      ],
      'readLoaderClassNameList' => [],
      'listLoaderClassNameList' => [],
      'saverClassNameList' => [],
      'selectApplierClassNameList' => [],
      'beforeReadHookClassNameList' => [],
      'beforeCreateHookClassNameList' => [],
      'beforeUpdateHookClassNameList' => [],
      'beforeDeleteHookClassNameList' => [],
      'beforeLinkHookClassNameList' => [],
      'beforeUnlinkHookClassNameList' => []
    ],
    'Lead' => [
      'duplicateWhereBuilderClassName' => 'Espo\\Classes\\DuplicateWhereBuilders\\Person',
      'readLoaderClassNameList' => [],
      'listLoaderClassNameList' => [],
      'saverClassNameList' => [],
      'selectApplierClassNameList' => [],
      'beforeReadHookClassNameList' => [],
      'beforeCreateHookClassNameList' => [],
      'beforeUpdateHookClassNameList' => [],
      'beforeDeleteHookClassNameList' => [],
      'beforeLinkHookClassNameList' => [],
      'beforeUnlinkHookClassNameList' => []
    ],
    'MassEmail' => [
      'massActions' => [
        'update' => [
          'allowed' => true
        ],
        'delete' => [
          'allowed' => true
        ]
      ],
      'readLoaderClassNameList' => [],
      'listLoaderClassNameList' => [],
      'saverClassNameList' => [],
      'selectApplierClassNameList' => [],
      'beforeReadHookClassNameList' => [],
      'beforeCreateHookClassNameList' => [],
      'beforeUpdateHookClassNameList' => [],
      'beforeDeleteHookClassNameList' => [],
      'beforeLinkHookClassNameList' => [],
      'beforeUnlinkHookClassNameList' => []
    ],
    'Meeting' => [
      'listLoaderClassNameList' => [
        0 => 'Espo\\Modules\\Crm\\Classes\\FieldProcessing\\Meeting\\AcceptanceStatusLoader'
      ],
      'readLoaderClassNameList' => [
        0 => 'Espo\\Core\\FieldProcessing\\Reminder\\Loader'
      ],
      'saverClassNameList' => [
        0 => 'Espo\\Core\\FieldProcessing\\Reminder\\Saver',
        1 => 'Espo\\Modules\\Crm\\Classes\\FieldProcessing\\Meeting\\SourceEmailSaver'
      ],
      'beforeUpdateHookClassNameList' => [
        0 => 'Espo\\Classes\\RecordHooks\\Event\\BeforeUpdatePreserveDuration'
      ],
      'selectApplierClassNameList' => [],
      'beforeReadHookClassNameList' => [],
      'beforeCreateHookClassNameList' => [],
      'beforeDeleteHookClassNameList' => [],
      'beforeLinkHookClassNameList' => [],
      'beforeUnlinkHookClassNameList' => []
    ],
    'Opportunity' => [
      'massActions' => [
        'update' => [
          'implementationClassName' => 'Espo\\Modules\\Crm\\Classes\\MassAction\\Opportunity\\MassUpdate'
        ]
      ],
      'readLoaderClassNameList' => [],
      'listLoaderClassNameList' => [],
      'saverClassNameList' => [],
      'selectApplierClassNameList' => [],
      'beforeReadHookClassNameList' => [],
      'beforeCreateHookClassNameList' => [],
      'beforeUpdateHookClassNameList' => [],
      'beforeDeleteHookClassNameList' => [],
      'beforeLinkHookClassNameList' => [],
      'beforeUnlinkHookClassNameList' => []
    ],
    'TargetList' => [
      'readLoaderClassNameList' => [
        0 => 'Espo\\Modules\\Crm\\Classes\\FieldProcessing\\TargetList\\EntryCountLoader',
        1 => 'Espo\\Modules\\Crm\\Classes\\FieldProcessing\\TargetList\\OptedOutCountLoader'
      ],
      'listLoaderClassNameList' => [
        0 => 'Espo\\Modules\\Crm\\Classes\\FieldProcessing\\TargetList\\EntryCountLoader',
        1 => 'Espo\\Modules\\Crm\\Classes\\FieldProcessing\\TargetList\\OptedOutCountLoader'
      ],
      'saverClassNameList' => [],
      'selectApplierClassNameList' => [],
      'beforeReadHookClassNameList' => [],
      'beforeCreateHookClassNameList' => [],
      'beforeUpdateHookClassNameList' => [],
      'beforeDeleteHookClassNameList' => [],
      'beforeLinkHookClassNameList' => [],
      'beforeUnlinkHookClassNameList' => []
    ],
    'Task' => [
      'readLoaderClassNameList' => [
        0 => 'Espo\\Core\\FieldProcessing\\Reminder\\Loader'
      ],
      'saverClassNameList' => [
        0 => 'Espo\\Core\\FieldProcessing\\Reminder\\Saver'
      ],
      'listLoaderClassNameList' => [],
      'selectApplierClassNameList' => [],
      'beforeReadHookClassNameList' => [],
      'beforeCreateHookClassNameList' => [],
      'beforeUpdateHookClassNameList' => [],
      'beforeDeleteHookClassNameList' => [],
      'beforeLinkHookClassNameList' => [],
      'beforeUnlinkHookClassNameList' => []
    ]
  ],
  'scopes' => [
    'ActionHistoryRecord' => [
      'entity' => true
    ],
    'ArrayValue' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'Attachment' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'AuthLogRecord' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'AuthToken' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'Autofollow' => [
      'entity' => true
    ],
    'Currency' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => true,
      'aclActionList' => [
        0 => 'read',
        1 => 'edit'
      ],
      'aclLevelList' => [
        0 => 'yes',
        1 => 'no'
      ],
      'aclHighestLevel' => 'yes',
      'customizable' => false
    ],
    'Dashboard' => [
      'entity' => false,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'DashboardTemplate' => [
      'entity' => true
    ],
    'Email' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'aclPortalActionList' => [
        0 => 'read'
      ],
      'notifications' => true,
      'object' => true,
      'customizable' => true,
      'activity' => true,
      'activityStatusList' => [
        0 => 'Draft'
      ],
      'historyStatusList' => [
        0 => 'Archived',
        1 => 'Sent'
      ]
    ],
    'EmailAccount' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false
    ],
    'EmailAccountScope' => [
      'entity' => false,
      'layouts' => false,
      'tab' => false,
      'acl' => 'boolean'
    ],
    'EmailAddress' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'EmailFilter' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'notifications' => false,
      'object' => false,
      'customizable' => false
    ],
    'EmailFolder' => [
      'entity' => true
    ],
    'EmailTemplate' => [
      'entity' => true,
      'layouts' => false,
      'tab' => true,
      'acl' => true,
      'customizable' => false
    ],
    'EmailTemplateCategory' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => 'recordAllTeamNo',
      'customizable' => true,
      'importable' => false,
      'type' => 'CategoryTree',
      'notifications' => false
    ],
    'Export' => [
      'languageIsGlobal' => true
    ],
    'Extension' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'ExternalAccount' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => 'boolean',
      'aclPortal' => false,
      'customizable' => false
    ],
    'Formula' => [
      'languageIsGlobal' => true
    ],
    'Import' => [
      'entity' => true,
      'layouts' => false,
      'tab' => true,
      'acl' => 'boolean',
      'customizable' => false
    ],
    'ImportError' => [
      'entity' => true
    ],
    'InboundEmail' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false
    ],
    'Integration' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'Job' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'LastViewed' => [
      'entity' => false,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'LayoutRecord' => [
      'entity' => true
    ],
    'LayoutSet' => [
      'entity' => true
    ],
    'LeadCapture' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'LeadCaptureLogRecord' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'MassAction' => [
      'languageIsGlobal' => true
    ],
    'Note' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => true,
      'entityManager' => [
        'edit' => false,
        'fields' => true,
        'relationships' => false,
        'formula' => false,
        'layouts' => false,
        'addField' => false
      ]
    ],
    'Notification' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'PasswordChangeRequest' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'PhoneNumber' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'Portal' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'PortalRole' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false,
      'importable' => true,
      'exportFormatList' => [
        0 => 'csv'
      ]
    ],
    'PortalUser' => [
      'tab' => true,
      'tabAclPermission' => 'portalPermission'
    ],
    'Preferences' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'Role' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false,
      'importable' => true,
      'exportFormatList' => [
        0 => 'csv'
      ]
    ],
    'ScheduledJob' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'ScheduledJobLogRecord' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'Stream' => [
      'entity' => false,
      'layouts' => false,
      'tab' => true,
      'acl' => false,
      'customizable' => false
    ],
    'Subscription' => [
      'entity' => true
    ],
    'Team' => [
      'entity' => true,
      'layouts' => false,
      'tab' => true,
      'acl' => true,
      'aclActionList' => [
        0 => 'read'
      ],
      'aclLevelList' => [
        0 => 'all',
        1 => 'team',
        2 => 'no'
      ],
      'customizable' => false
    ],
    'Template' => [
      'entity' => true,
      'layouts' => false,
      'tab' => true,
      'acl' => 'recordAllTeamNo',
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'no'
      ],
      'aclPortalActionList' => [
        0 => 'read'
      ],
      'customizable' => true,
      'importable' => true,
      'disabled' => false
    ],
    'UniqueId' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'User' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclActionList' => [
        0 => 'read',
        1 => 'edit'
      ],
      'aclActionLevelListMap' => [
        'edit' => [
          0 => 'own',
          1 => 'no'
        ]
      ],
      'customizable' => true,
      'object' => true
    ],
    'UserData' => [
      'entity' => true
    ],
    'Webhook' => [
      'entity' => true,
      'acl' => 'boolean'
    ],
    'WebhookEventQueueItem' => [
      'entity' => true
    ],
    'WebhookQueueItem' => [
      'entity' => true
    ],
    'Account' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => 'recordAllAccountNo',
      'module' => 'Crm',
      'customizable' => true,
      'stream' => true,
      'importable' => true,
      'notifications' => true,
      'object' => true,
      'hasPersonalData' => true,
      'disabled' => false,
      'statusField' => NULL,
      'kanbanStatusIgnoreList' => NULL
    ],
    'Activities' => [
      'entity' => false,
      'layouts' => false,
      'tab' => false,
      'acl' => 'boolean',
      'aclPortal' => 'boolean',
      'module' => 'Crm',
      'customizable' => false
    ],
    'Calendar' => [
      'entity' => false,
      'tab' => true,
      'acl' => 'boolean',
      'module' => 'Crm'
    ],
    'Call' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => 'recordAllAccountContactOwnNo',
      'module' => 'Crm',
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'calendar' => true,
      'activity' => true,
      'object' => true,
      'activityStatusList' => [
        0 => 'Planned'
      ],
      'historyStatusList' => [
        0 => 'Held',
        1 => 'Not Held'
      ],
      'statusField' => 'status'
    ],
    'Campaign' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'module' => 'Crm',
      'customizable' => true,
      'stream' => false,
      'importable' => false,
      'object' => true,
      'statusField' => 'status'
    ],
    'CampaignLogRecord' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'module' => 'Crm',
      'customizable' => false,
      'stream' => false,
      'importable' => false
    ],
    'CampaignTrackingUrl' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'module' => 'Crm',
      'customizable' => false,
      'stream' => false,
      'importable' => false
    ],
    'Case' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => 'recordAllAccountContactOwnNo',
      'module' => 'Crm',
      'customizable' => true,
      'stream' => true,
      'importable' => true,
      'notifications' => true,
      'object' => true,
      'statusField' => 'status'
    ],
    'Contact' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => 'recordAllAccountContactNo',
      'module' => 'Crm',
      'customizable' => true,
      'stream' => true,
      'importable' => true,
      'notifications' => true,
      'object' => true,
      'hasPersonalData' => true,
      'disabled' => false,
      'statusField' => NULL,
      'kanbanStatusIgnoreList' => NULL
    ],
    'Document' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'module' => 'Crm',
      'customizable' => true,
      'importable' => false,
      'notifications' => true,
      'object' => true
    ],
    'DocumentFolder' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => 'recordAllTeamNo',
      'aclPortal' => 'recordAllNo',
      'aclPortalActionList' => [
        0 => 'read'
      ],
      'module' => 'Crm',
      'customizable' => true,
      'importable' => false,
      'type' => 'CategoryTree',
      'stream' => false,
      'notifications' => false
    ],
    'EmailQueueItem' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'notifications' => false,
      'object' => false,
      'customizable' => false,
      'module' => 'Crm'
    ],
    'KnowledgeBaseArticle' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => 'recordAllTeamNo',
      'aclPortal' => 'recordAllNo',
      'aclPortalActionList' => [
        0 => 'read'
      ],
      'module' => 'Crm',
      'customizable' => true,
      'importable' => true,
      'notifications' => false,
      'object' => true
    ],
    'KnowledgeBaseCategory' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => 'recordAllTeamNo',
      'aclPortal' => 'recordAllNo',
      'aclPortalActionList' => [
        0 => 'read'
      ],
      'module' => 'Crm',
      'customizable' => true,
      'importable' => false,
      'type' => 'CategoryTree',
      'stream' => false,
      'notifications' => false
    ],
    'Lead' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => 'recordAllOwnNo',
      'module' => 'Crm',
      'customizable' => true,
      'stream' => true,
      'importable' => true,
      'notifications' => true,
      'object' => true,
      'statusField' => 'status',
      'hasPersonalData' => true
    ],
    'MassEmail' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'notifications' => false,
      'object' => false,
      'customizable' => false,
      'module' => 'Crm'
    ],
    'Meeting' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => 'recordAllAccountContactOwnNo',
      'module' => 'Crm',
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'calendar' => true,
      'activity' => true,
      'object' => true,
      'activityStatusList' => [
        0 => 'Planned'
      ],
      'historyStatusList' => [
        0 => 'Held',
        1 => 'Not Held'
      ],
      'statusField' => 'status'
    ],
    'Opportunity' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => 'recordAllAccountContactOwnNo',
      'module' => 'Crm',
      'customizable' => true,
      'stream' => true,
      'importable' => true,
      'notifications' => true,
      'object' => true,
      'statusField' => 'stage',
      'kanbanStatusIgnoreList' => [
        0 => 'Closed Lost'
      ]
    ],
    'Reminder' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'module' => 'Crm',
      'customizable' => false,
      'importable' => false
    ],
    'Target' => [
      'entity' => false,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'module' => 'Crm',
      'customizable' => false,
      'importable' => false,
      'notifications' => false,
      'object' => true
    ],
    'TargetList' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'module' => 'Crm',
      'customizable' => true,
      'stream' => false,
      'importable' => false,
      'notifications' => true,
      'object' => true,
      'targetLinkList' => [
        0 => 'accounts',
        1 => 'contacts',
        2 => 'leads',
        3 => 'users'
      ]
    ],
    'Task' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'activityStatusList' => [
        0 => 'Not Started',
        1 => 'Started'
      ],
      'historyStatusList' => [
        0 => 'Completed'
      ],
      'module' => 'Crm',
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'calendar' => true,
      'object' => true,
      'statusField' => 'status',
      'stream' => true,
      'kanbanStatusIgnoreList' => [
        0 => 'Canceled',
        1 => 'Deferred'
      ]
    ],
    'Components' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true
    ],
    'EquipmentClasses' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true,
      'statusField' => NULL,
      'kanbanStatusIgnoreList' => NULL
    ],
    'EquipmentDefinitions' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true,
      'statusField' => NULL,
      'kanbanStatusIgnoreList' => NULL
    ],
    'EquipmentDefinitionsPropertiesFromClasses' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true,
      'statusField' => NULL,
      'kanbanStatusIgnoreList' => NULL
    ],
    'EquipmentProperties' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true
    ],
    'KeyPerformanceIndicator' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true,
      'statusField' => NULL,
      'kanbanStatusIgnoreList' => NULL
    ],
    'MaterialClasses' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true,
      'statusField' => NULL,
      'kanbanStatusIgnoreList' => NULL
    ],
    'MaterialDefinitions' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true,
      'statusField' => NULL,
      'kanbanStatusIgnoreList' => NULL
    ],
    'MaterialDefinitionsPropertiesFromClasses' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true
    ],
    'MaterialLots' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true,
      'statusField' => NULL,
      'kanbanStatusIgnoreList' => NULL
    ],
    'MaterialProperties' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true,
      'statusField' => NULL,
      'kanbanStatusIgnoreList' => NULL
    ],
    'OrderItem' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true
    ],
    'Orders' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true,
      'statusField' => 'status',
      'kanbanStatusIgnoreList' => NULL
    ],
    'PersonnelClasses' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true
    ],
    'PersonnelDefinitions' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true
    ],
    'PersonnelDefinitionsPropertiesFromClasses' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true
    ],
    'PersonnelProperties' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true,
      'statusField' => NULL,
      'kanbanStatusIgnoreList' => NULL
    ],
    'ProcessSegment' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true,
      'statusField' => NULL,
      'kanbanStatusIgnoreList' => NULL
    ],
    'ProcessSegmentEquipmentItem' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true
    ],
    'ProcessSegmentMaterialItem' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true
    ],
    'ProcessSegmentPersonnelItem' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true
    ],
    'ProductDefinitions' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true,
      'statusField' => NULL,
      'kanbanStatusIgnoreList' => NULL
    ],
    'ProductSegmentEquipmentItem' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true
    ],
    'ProductSegmentMaterialItem' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true
    ],
    'ProductSegmentPersonnelItem' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true
    ],
    'ProductSegments' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true,
      'statusField' => NULL,
      'kanbanStatusIgnoreList' => NULL
    ],
    'ProductionPlanning' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true,
      'statusField' => NULL,
      'kanbanStatusIgnoreList' => NULL
    ],
    'ProductionPlanningItem' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true
    ],
    'TestovaciEntita' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true
    ],
    'Warehouse' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true
    ],
    'WarehouseItem' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'stream' => false,
      'disabled' => false,
      'type' => 'Base',
      'module' => 'Custom',
      'object' => true,
      'isCustom' => true
    ]
  ],
  'selectDefs' => [
    'ActionHistoryRecord' => [
      'accessControlFilterClassNameMap' => [
        'onlyOwn' => 'Espo\\Classes\\Select\\ActionHistoryRecord\\AccessControlFilters\\OnlyOwn'
      ],
      'boolFilterClassNameMap' => [
        'onlyMy' => 'Espo\\Classes\\Select\\ActionHistoryRecord\\BoolFilters\\OnlyMy'
      ]
    ],
    'Attachment' => [
      'primaryFilterClassNameMap' => [
        'orphan' => 'Espo\\Classes\\Select\\Attachment\\PrimaryFilters\\Orphan'
      ]
    ],
    'AuthLogRecord' => [
      'primaryFilterClassNameMap' => [
        'denied' => 'Espo\\Classes\\Select\\AuthLogRecord\\PrimaryFilters\\Denied',
        'accepted' => 'Espo\\Classes\\Select\\AuthLogRecord\\PrimaryFilters\\Accepted'
      ]
    ],
    'AuthToken' => [
      'primaryFilterClassNameMap' => [
        'active' => 'Espo\\Classes\\Select\\AuthToken\\PrimaryFilters\\Active',
        'inactive' => 'Espo\\Classes\\Select\\AuthToken\\PrimaryFilters\\Inactive'
      ]
    ],
    'Email' => [
      'whereItemConverterClassNameMap' => [
        'folderId_inFolder' => 'Espo\\Classes\\Select\\Email\\Where\\ItemConverters\\InFolder',
        'emailAddress_equals' => 'Espo\\Classes\\Select\\Email\\Where\\ItemConverters\\EmailAddressEquals',
        'from_equals' => 'Espo\\Classes\\Select\\Email\\Where\\ItemConverters\\FromEquals',
        'to_equals' => 'Espo\\Classes\\Select\\Email\\Where\\ItemConverters\\ToEquals',
        'isNotReplied_isTrue' => 'Espo\\Classes\\Select\\Email\\Where\\ItemConverters\\IsNotRepliedIsTrue',
        'isNotReplied_isFalse' => 'Espo\\Classes\\Select\\Email\\Where\\ItemConverters\\IsNotRepliedIsFalse',
        'isNotRead_isTrue' => 'Espo\\Classes\\Select\\Email\\Where\\ItemConverters\\IsNotReadIsTrue',
        'isNotRead_isFalse' => 'Espo\\Classes\\Select\\Email\\Where\\ItemConverters\\IsNotReadIsFalse',
        'isRead_isTrue' => 'Espo\\Classes\\Select\\Email\\Where\\ItemConverters\\IsNotReadIsFalse',
        'isRead_isFalse' => 'Espo\\Classes\\Select\\Email\\Where\\ItemConverters\\IsNotReadIsTrue',
        'isImportant_isTrue' => 'Espo\\Classes\\Select\\Email\\Where\\ItemConverters\\IsImportantIsTrue',
        'isImportant_isFalse' => 'Espo\\Classes\\Select\\Email\\Where\\ItemConverters\\IsImportantIsFalse'
      ],
      'accessControlFilterClassNameMap' => [
        'onlyOwn' => 'Espo\\Classes\\Select\\Email\\AccessControlFilters\\OnlyOwn',
        'portalOnlyOwn' => 'Espo\\Classes\\Select\\Email\\AccessControlFilters\\OnlyOwn',
        'onlyTeam' => 'Espo\\Classes\\Select\\Email\\AccessControlFilters\\OnlyTeam',
        'portalOnlyContact' => 'Espo\\Classes\\Select\\Email\\AccessControlFilters\\PortalOnlyContact',
        'portalOnlyAccount' => 'Espo\\Classes\\Select\\Email\\AccessControlFilters\\PortalOnlyAccount'
      ],
      'boolFilterClassNameMap' => [
        'onlyMy' => 'Espo\\Classes\\Select\\Email\\BoolFilters\\OnlyMy'
      ],
      'textFilterClassName' => 'Espo\\Classes\\Select\\Email\\TextFilter',
      'textFilterUseContainsAttributeList' => [
        0 => 'name'
      ],
      'selectAttributesDependencyMap' => [
        'subject' => [
          0 => 'name'
        ],
        'personStringData' => [
          0 => 'fromString',
          1 => 'fromEmailAddressId'
        ]
      ]
    ],
    'EmailAccount' => [
      'accessControlFilterClassNameMap' => [
        'mandatory' => 'Espo\\Classes\\Select\\EmailAccount\\AccessControlFilters\\Mandatory'
      ]
    ],
    'EmailAddress' => [
      'primaryFilterClassNameMap' => [
        'orphan' => 'Espo\\Classes\\Select\\EmailAddress\\PrimaryFilters\\Orphan'
      ]
    ],
    'EmailFilter' => [
      'accessControlFilterClassNameMap' => [
        'onlyOwn' => 'Espo\\Classes\\Select\\EmailFilter\\AccessControlFilters\\OnlyOwn'
      ],
      'boolFilterClassNameMap' => [
        'onlyMy' => 'Espo\\Classes\\Select\\EmailFilter\\BoolFilters\\OnlyMy'
      ]
    ],
    'EmailFolder' => [
      'accessControlFilterClassNameMap' => [
        'mandatory' => 'Espo\\Classes\\Select\\EmailFolder\\AccessControlFilters\\Mandatory'
      ]
    ],
    'EmailTemplate' => [
      'primaryFilterClassNameMap' => [
        'actual' => 'Espo\\Classes\\Select\\EmailTemplate\\PrimaryFilters\\Actual'
      ]
    ],
    'Import' => [
      'accessControlFilterClassNameMap' => [
        'mandatory' => 'Espo\\Classes\\Select\\Import\\AccessControlFilters\\Mandatory'
      ],
      'accessControlFilterResolverClassName' => 'Espo\\Core\\Select\\AccessControl\\FilterResolvers\\Bypass'
    ],
    'ImportError' => [
      'accessControlFilterClassNameMap' => [
        'onlyMy' => 'Espo\\Core\\Select\\AccessControl\\Filters\\ForeignOnlyOwn'
      ],
      'accessControlFilterResolverClassName' => 'Espo\\Core\\Select\\AccessControl\\FilterResolvers\\BooleanOwn',
      'selectAttributesDependencyMap' => [
        'lineNumber' => [
          0 => 'rowIndex'
        ],
        'exportLineNumber' => [
          0 => 'exportRowIndex'
        ]
      ],
      'orderItemConverterClassNameMap' => [
        'lineNumber' => 'Espo\\Classes\\Select\\ImportError\\OrderItemConverters\\LineNumber',
        'exportLineNumber' => 'Espo\\Classes\\Select\\ImportError\\OrderItemConverters\\ExportLineNumber'
      ]
    ],
    'PhoneNumber' => [
      'primaryFilterClassNameMap' => [
        'orphan' => 'Espo\\Classes\\Select\\PhoneNumber\\PrimaryFilters\\Orphan'
      ]
    ],
    'ScheduledJob' => [
      'accessControlFilterClassNameMap' => [
        'mandatory' => 'Espo\\Classes\\Select\\ScheduledJob\\AccessControlFilters\\Mandatory'
      ]
    ],
    'Team' => [
      'boolFilterClassNameMap' => [
        'onlyMy' => 'Espo\\Classes\\Select\\Team\\BoolFilters\\OnlyMy'
      ],
      'accessControlFilterClassNameMap' => [
        'onlyTeam' => 'Espo\\Classes\\Select\\Team\\AccessControlFilters\\OnlyTeam'
      ]
    ],
    'Template' => [
      'accessControlFilterClassNameMap' => [
        'mandatory' => 'Espo\\Classes\\Select\\Template\\AccessControlFilters\\Mandatory'
      ]
    ],
    'User' => [
      'whereItemConverterClassNameMap' => [
        'id_isOfType' => 'Espo\\Classes\\Select\\User\\Where\\ItemConverters\\IsOfType'
      ],
      'accessControlFilterClassNameMap' => [
        'mandatory' => 'Espo\\Classes\\Select\\User\\AccessControlFilters\\Mandatory',
        'onlyTeam' => 'Espo\\Classes\\Select\\User\\AccessControlFilters\\OnlyTeam',
        'onlyOwn' => 'Espo\\Classes\\Select\\User\\AccessControlFilters\\OnlyOwn',
        'portalOnlyOwn' => 'Espo\\Classes\\Select\\User\\AccessControlFilters\\PortalOnlyOwn'
      ],
      'primaryFilterClassNameMap' => [
        'active' => 'Espo\\Classes\\Select\\User\\PrimaryFilters\\Active',
        'activePortal' => 'Espo\\Classes\\Select\\User\\PrimaryFilters\\ActivePortal',
        'activeApi' => 'Espo\\Classes\\Select\\User\\PrimaryFilters\\ActiveApi',
        'portal' => 'Espo\\Classes\\Select\\User\\PrimaryFilters\\Portal',
        'api' => 'Espo\\Classes\\Select\\User\\PrimaryFilters\\Api',
        'internal' => 'Espo\\Classes\\Select\\User\\PrimaryFilters\\Internal'
      ],
      'boolFilterClassNameMap' => [
        'onlyMyTeam' => 'Espo\\Classes\\Select\\User\\BoolFilters\\OnlyMyTeam'
      ],
      'orderItemConverterClassNameMap' => [
        'userNameOwnFirst' => 'Espo\\Classes\\Select\\User\\OrderItemConverters\\UserNameOwnFirst'
      ]
    ],
    'Webhook' => [
      'accessControlFilterClassNameMap' => [
        'mandatory' => 'Espo\\Classes\\Select\\Webhook\\AccessControlFilters\\Mandatory'
      ],
      'accessControlFilterResolverClassName' => 'Espo\\Core\\Select\\AccessControl\\FilterResolvers\\Bypass'
    ],
    'Account' => [
      'primaryFilterClassNameMap' => [
        'customers' => 'Espo\\Modules\\Crm\\Classes\\Select\\Account\\PrimaryFilters\\Customers',
        'resellers' => 'Espo\\Modules\\Crm\\Classes\\Select\\Account\\PrimaryFilters\\Resellers',
        'partners' => 'Espo\\Modules\\Crm\\Classes\\Select\\Account\\PrimaryFilters\\Partners',
        'recentlyCreated' => 'Espo\\Modules\\Crm\\Classes\\Select\\Account\\PrimaryFilters\\RecentlyCreated'
      ],
      'accessControlFilterClassNameMap' => [
        'portalOnlyAccount' => 'Espo\\Modules\\Crm\\Classes\\Select\\Account\\AccessControlFilters\\PortalOnlyAccount'
      ]
    ],
    'Call' => [
      'selectAttributesDependencyMap' => [
        'duration' => [
          0 => 'dateStart',
          1 => 'dateEnd'
        ],
        'dateStart' => [
          0 => 'dateEnd'
        ]
      ],
      'primaryFilterClassNameMap' => [
        'planned' => 'Espo\\Modules\\Crm\\Classes\\Select\\Meeting\\PrimaryFilters\\Planned',
        'held' => 'Espo\\Modules\\Crm\\Classes\\Select\\Meeting\\PrimaryFilters\\Held',
        'todays' => 'Espo\\Modules\\Crm\\Classes\\Select\\Call\\PrimaryFilters\\Todays'
      ],
      'boolFilterClassNameMap' => [
        'onlyMy' => 'Espo\\Modules\\Crm\\Classes\\Select\\Meeting\\BoolFilters\\OnlyMy'
      ],
      'accessControlFilterClassNameMap' => [
        'onlyOwn' => 'Espo\\Modules\\Crm\\Classes\\Select\\Meeting\\AccessControlFilters\\OnlyOwn',
        'onlyTeam' => 'Espo\\Modules\\Crm\\Classes\\Select\\Meeting\\AccessControlFilters\\OnlyTeam'
      ]
    ],
    'Campaign' => [
      'primaryFilterClassNameMap' => [
        'active' => 'Espo\\Modules\\Crm\\Classes\\Select\\Campaign\\PrimaryFilters\\Active'
      ]
    ],
    'CampaignLogRecord' => [
      'primaryFilterClassNameMap' => [
        'opened' => 'Espo\\Modules\\Crm\\Classes\\Select\\CampaignLogRecord\\PrimaryFilters\\Opened',
        'sent' => 'Espo\\Modules\\Crm\\Classes\\Select\\CampaignLogRecord\\PrimaryFilters\\Sent',
        'clicked' => 'Espo\\Modules\\Crm\\Classes\\Select\\CampaignLogRecord\\PrimaryFilters\\Clicked',
        'optedOut' => 'Espo\\Modules\\Crm\\Classes\\Select\\CampaignLogRecord\\PrimaryFilters\\OptedOut',
        'optedIn' => 'Espo\\Modules\\Crm\\Classes\\Select\\CampaignLogRecord\\PrimaryFilters\\OptedIn',
        'bounced' => 'Espo\\Modules\\Crm\\Classes\\Select\\CampaignLogRecord\\PrimaryFilters\\Bounced',
        'leadCreated' => 'Espo\\Modules\\Crm\\Classes\\Select\\CampaignLogRecord\\PrimaryFilters\\LeadCreated'
      ],
      'accessControlFilterClassNameMap' => [
        'onlyOwn' => 'Espo\\Modules\\Crm\\Classes\\Select\\CampaignLogRecord\\AccessControlFilters\\OnlyOwn',
        'onlyTeam' => 'Espo\\Modules\\Crm\\Classes\\Select\\CampaignLogRecord\\AccessControlFilters\\OnlyTeam'
      ]
    ],
    'CampaignTrackingUrl' => [
      'accessControlFilterClassNameMap' => [
        'onlyOwn' => 'Espo\\Modules\\Crm\\Classes\\Select\\CampaignTrackingUrl\\AccessControlFilters\\OnlyOwn',
        'onlyTeam' => 'Espo\\Modules\\Crm\\Classes\\Select\\CampaignTrackingUrl\\AccessControlFilters\\OnlyTeam'
      ]
    ],
    'Case' => [
      'primaryFilterClassNameMap' => [
        'open' => 'Espo\\Modules\\Crm\\Classes\\Select\\CaseObj\\PrimaryFilters\\Open',
        'closed' => 'Espo\\Modules\\Crm\\Classes\\Select\\CaseObj\\PrimaryFilters\\Closed'
      ],
      'boolFilterClassNameMap' => [
        'open' => 'Espo\\Modules\\Crm\\Classes\\Select\\CaseObj\\BoolFilters\\Open'
      ]
    ],
    'Contact' => [
      'primaryFilterClassNameMap' => [
        'portalUsers' => 'Espo\\Modules\\Crm\\Classes\\Select\\Contact\\PrimaryFilters\\PortalUsers',
        'notPortalUsers' => 'Espo\\Modules\\Crm\\Classes\\Select\\Contact\\PrimaryFilters\\NotPortalUsers',
        'accountActive' => 'Espo\\Modules\\Crm\\Classes\\Select\\Contact\\PrimaryFilters\\AccountActive'
      ],
      'accessControlFilterClassNameMap' => [
        'portalOnlyContact' => 'Espo\\Modules\\Crm\\Classes\\Select\\Contact\\AccessControlFilters\\PortalOnlyContact'
      ]
    ],
    'Document' => [
      'primaryFilterClassNameMap' => [
        'active' => 'Espo\\Modules\\Crm\\Classes\\Select\\Document\\PrimaryFilters\\Active',
        'draft' => 'Espo\\Modules\\Crm\\Classes\\Select\\Document\\PrimaryFilters\\Draft'
      ]
    ],
    'EmailQueueItem' => [
      'primaryFilterClassNameMap' => [
        'pending' => 'Espo\\Modules\\Crm\\Classes\\Select\\EmailQueueItem\\PrimaryFilters\\Pending',
        'failed' => 'Espo\\Modules\\Crm\\Classes\\Select\\EmailQueueItem\\PrimaryFilters\\Failed',
        'sent' => 'Espo\\Modules\\Crm\\Classes\\Select\\EmailQueueItem\\PrimaryFilters\\Sent'
      ]
    ],
    'KnowledgeBaseArticle' => [
      'primaryFilterClassNameMap' => [
        'published' => 'Espo\\Modules\\Crm\\Classes\\Select\\KnowledgeBaseArticle\\PrimaryFilters\\Published'
      ],
      'accessControlFilterClassNameMap' => [
        'mandatory' => 'Espo\\Modules\\Crm\\Classes\\Select\\KnowledgeBaseArticle\\AccessControlFilters\\Mandatory'
      ]
    ],
    'Lead' => [
      'primaryFilterClassNameMap' => [
        'actual' => 'Espo\\Modules\\Crm\\Classes\\Select\\Lead\\PrimaryFilters\\Actual',
        'active' => 'Espo\\Modules\\Crm\\Classes\\Select\\Lead\\PrimaryFilters\\Actual',
        'converted' => 'Espo\\Modules\\Crm\\Classes\\Select\\Lead\\PrimaryFilters\\Converted'
      ]
    ],
    'MassEmail' => [
      'accessControlFilterClassNameMap' => [
        'onlyOwn' => 'Espo\\Modules\\Crm\\Classes\\Select\\MassEmail\\AccessControlFilters\\OnlyOwn',
        'onlyTeam' => 'Espo\\Modules\\Crm\\Classes\\Select\\MassEmail\\AccessControlFilters\\OnlyTeam'
      ],
      'primaryFilterClassNameMap' => [
        'actual' => 'Espo\\Modules\\Crm\\Classes\\Select\\MassEmail\\PrimaryFilters\\Actual',
        'complete' => 'Espo\\Modules\\Crm\\Classes\\Select\\MassEmail\\PrimaryFilters\\Complete'
      ]
    ],
    'Meeting' => [
      'whereDateTimeItemTransformerClassName' => 'Espo\\Modules\\Crm\\Classes\\Select\\Meeting\\Where\\DateTimeItemTransformer',
      'selectAttributesDependencyMap' => [
        'duration' => [
          0 => 'dateStart',
          1 => 'dateEnd'
        ],
        'dateStart' => [
          0 => 'dateEnd'
        ],
        'dateStartDate' => [
          0 => 'dateEnd',
          1 => 'dateEndDate'
        ]
      ],
      'primaryFilterClassNameMap' => [
        'planned' => 'Espo\\Modules\\Crm\\Classes\\Select\\Meeting\\PrimaryFilters\\Planned',
        'held' => 'Espo\\Modules\\Crm\\Classes\\Select\\Meeting\\PrimaryFilters\\Held',
        'todays' => 'Espo\\Modules\\Crm\\Classes\\Select\\Meeting\\PrimaryFilters\\Todays'
      ],
      'boolFilterClassNameMap' => [
        'onlyMy' => 'Espo\\Modules\\Crm\\Classes\\Select\\Meeting\\BoolFilters\\OnlyMy'
      ],
      'accessControlFilterClassNameMap' => [
        'onlyOwn' => 'Espo\\Modules\\Crm\\Classes\\Select\\Meeting\\AccessControlFilters\\OnlyOwn',
        'onlyTeam' => 'Espo\\Modules\\Crm\\Classes\\Select\\Meeting\\AccessControlFilters\\OnlyTeam'
      ]
    ],
    'Opportunity' => [
      'primaryFilterClassNameMap' => [
        'open' => 'Espo\\Modules\\Crm\\Classes\\Select\\Opportunity\\PrimaryFilters\\Open',
        'won' => 'Espo\\Modules\\Crm\\Classes\\Select\\Opportunity\\PrimaryFilters\\Won',
        'lost' => 'Espo\\Modules\\Crm\\Classes\\Select\\Opportunity\\PrimaryFilters\\Lost'
      ]
    ],
    'TargetList' => [
      'selectAttributesDependencyMap' => [
        'targetStatus' => [
          0 => 'isOptedOut'
        ]
      ]
    ],
    'Task' => [
      'whereDateTimeItemTransformerClassName' => 'Espo\\Modules\\Crm\\Classes\\Select\\Meeting\\Where\\DateTimeItemTransformer',
      'selectAttributesDependencyMap' => [
        'dateEnd' => [
          0 => 'status'
        ]
      ],
      'primaryFilterClassNameMap' => [
        'actual' => 'Espo\\Modules\\Crm\\Classes\\Select\\Task\\PrimaryFilters\\Actual',
        'completed' => 'Espo\\Modules\\Crm\\Classes\\Select\\Task\\PrimaryFilters\\Completed',
        'deferred' => 'Espo\\Modules\\Crm\\Classes\\Select\\Task\\PrimaryFilters\\Deferred',
        'todays' => 'Espo\\Modules\\Crm\\Classes\\Select\\Task\\PrimaryFilters\\Todays',
        'actualStartingNotInFuture' => 'Espo\\Modules\\Crm\\Classes\\Select\\Task\\PrimaryFilters\\ActualStartingNotInFuture',
        'overdue' => 'Espo\\Modules\\Crm\\Classes\\Select\\Task\\PrimaryFilters\\Overdue'
      ],
      'boolFilterClassNameMap' => [
        'actual' => 'Espo\\Modules\\Crm\\Classes\\Select\\Task\\BoolFilters\\Actual',
        'completed' => 'Espo\\Modules\\Crm\\Classes\\Select\\Task\\BoolFilters\\Completed'
      ]
    ]
  ],
  'themes' => [
    'Dark' => [
      'stylesheet' => 'client/css/espo/dark.css',
      'stylesheetIframe' => 'client/css/espo/dark-iframe.css',
      'stylesheetIframeFallback' => 'client/css/espo/hazyblue-iframe.css',
      'textColor' => '#dedede',
      'chartGridColor' => '#646060',
      'chartTickColor' => '#575454',
      'chartSuccessColor' => '#5d8a55',
      'chartColorList' => [
        0 => '#7492cc',
        1 => '#c29c4a',
        2 => '#a1404a',
        3 => '#6a5f96',
        4 => '#b07e53',
        5 => '#3a5691',
        6 => '#7c593d',
        7 => '#a17a97',
        8 => '#858585'
      ],
      'chartColorAlternativeList' => [
        0 => '#7492cc',
        1 => '#c29c4a',
        2 => '#a1404a',
        3 => '#6a5f96',
        4 => '#b07e53'
      ],
      'calendarColors' => [
        '' => '#a58dc7a0',
        'Meeting' => '#697da5',
        'Call' => '#a1404a',
        'Task' => '#5d8a55'
      ],
      'isDark' => true
    ],
    'Espo' => [
      'stylesheet' => 'client/css/espo/espo.css',
      'stylesheetIframe' => 'client/css/espo/espo-iframe.css',
      'params' => [
        'navbar' => [
          'type' => 'enum',
          'default' => 'side',
          'options' => [
            0 => 'side',
            1 => 'top'
          ]
        ]
      ],
      'mappedParams' => [
        'navbarHeight' => [
          'param' => 'navbar',
          'valueMap' => [
            'side' => 30,
            'top' => 43
          ]
        ],
        'logo' => [
          'param' => 'navbar',
          'valueMap' => [
            'side' => 'client/img/logo-39.png',
            'top' => 'client/img/logo-39.png'
          ]
        ]
      ],
      'dashboardCellHeight' => 155,
      'dashboardCellMargin' => 19,
      'navbarHeight' => 43,
      'modalFooterAtTheTop' => true,
      'modalFullHeight' => true,
      'fontSize' => 14,
      'textColor' => '#333',
      'hoverColor' => '#FF3F19',
      'chartGridColor' => '#ddd',
      'chartSuccessColor' => '#76cb75',
      'chartTickColor' => '#e8eced',
      'chartColorList' => [
        0 => '#6FA8D6',
        1 => '#4E6CAD',
        2 => '#EDC555',
        3 => '#ED8F42',
        4 => '#DE6666',
        5 => '#7CC4A4',
        6 => '#8A7CC2',
        7 => '#D4729B',
        8 => '#bfbfbf'
      ],
      'chartColorAlternativeList' => [
        0 => '#6FA8D6',
        1 => '#EDC555',
        2 => '#ED8F42',
        3 => '#7CC4A4',
        4 => '#D4729B'
      ],
      'calendarColors' => [
        '' => '#a58dc7a0'
      ],
      'isDark' => false
    ],
    'EspoRtl' => [
      'stylesheet' => 'client/css/espo/espo-rtl.css',
      'stylesheetIframe' => 'client/css/espo/espo-rtl-iframe.css',
      'params' => [
        'navbar' => [
          'type' => 'enum',
          'default' => 'top',
          'options' => [
            0 => 'top'
          ]
        ]
      ]
    ],
    'Glass' => [
      'stylesheet' => 'client/css/espo/glass.css',
      'stylesheetIframe' => 'client/css/espo/glass-iframe.css',
      'stylesheetIframeFallback' => 'client/css/espo/hazyblue-iframe.css',
      'textColor' => '#dedede',
      'chartGridColor' => '#646060',
      'chartTickColor' => '#575454',
      'chartSuccessColor' => '#5d8a55',
      'chartColorList' => [
        0 => '#7492cc',
        1 => '#c29c4a',
        2 => '#a1404a',
        3 => '#6a5f96',
        4 => '#b07e53',
        5 => '#3a5691',
        6 => '#7c593d',
        7 => '#a17a97',
        8 => '#858585'
      ],
      'chartColorAlternativeList' => [
        0 => '#7492cc',
        1 => '#c29c4a',
        2 => '#a1404a',
        3 => '#6a5f96',
        4 => '#b07e53'
      ],
      'calendarColors' => [
        '' => '#a58dc7a0',
        'Meeting' => '#6680b3d1',
        'Call' => '#a1404ad1',
        'Task' => '#5d8a55d1'
      ],
      'isDark' => true
    ],
    'Hazyblue' => [
      'stylesheet' => 'client/css/espo/hazyblue.css',
      'stylesheetIframe' => 'client/css/espo/hazyblue-iframe.css',
      'textColor' => '#333',
      'chartGridColor' => '#ddd',
      'chartTickColor' => '#e8eced',
      'chartSuccessColor' => '#85b75f',
      'chartColorList' => [
        0 => '#6FA8D6',
        1 => '#EDC555',
        2 => '#DE6666',
        3 => '#8A7CC2',
        4 => '#c1834d',
        5 => '#4E6CAD',
        6 => '#ED8F42',
        7 => '#d69cc7',
        8 => '#bfbfbf'
      ],
      'chartColorAlternativeList' => [
        0 => '#6FA8D6',
        1 => '#EDC555',
        2 => '#DE6666',
        3 => '#8A7CC2',
        4 => '#c1834d'
      ]
    ],
    'Sakura' => [
      'stylesheet' => 'client/css/espo/sakura.css',
      'stylesheetIframe' => 'client/css/espo/sakura-iframe.css',
      'textColor' => '#424242',
      'chartGridColor' => '#ddd',
      'chartTickColor' => '#e8eced',
      'chartSuccessColor' => '#83CD77',
      'chartColorList' => [
        0 => '#6FA8D6',
        1 => '#4E6CAD',
        2 => '#EDC555',
        3 => '#ED8F42',
        4 => '#DE6666',
        5 => '#7CC4A4',
        6 => '#8A7CC2',
        7 => '#D4729B',
        8 => '#bfbfbf'
      ],
      'chartColorAlternativeList' => [
        0 => '#6FA8D6',
        1 => '#EDC555',
        2 => '#ED8F42',
        3 => '#7CC4A4',
        4 => '#D4729B'
      ]
    ],
    'Violet' => [
      'stylesheet' => 'client/css/espo/violet.css',
      'stylesheetIframe' => 'client/css/espo/violet-iframe.css',
      'textColor' => '#424242',
      'chartGridColor' => '#ddd',
      'chartTickColor' => '#e8eced',
      'chartSuccessColor' => '#7BC169',
      'chartColorList' => [
        0 => '#6FA8D6',
        1 => '#4E6CAD',
        2 => '#EDC555',
        3 => '#ED8F42',
        4 => '#DE6666',
        5 => '#7CC4A4',
        6 => '#8A7CC2',
        7 => '#D4729B',
        8 => '#bfbfbf'
      ],
      'chartColorAlternativeList' => [
        0 => '#6FA8D6',
        1 => '#EDC555',
        2 => '#ED8F42',
        3 => '#7CC4A4',
        4 => '#D4729B'
      ]
    ]
  ],
  'pdfDefs' => [
    'Account' => [
      'dataLoaderClassNameList' => [
        0 => 'Espo\\Modules\\Crm\\Classes\\Pdf\\Account\\ExampleDataLoader'
      ]
    ]
  ]
];
