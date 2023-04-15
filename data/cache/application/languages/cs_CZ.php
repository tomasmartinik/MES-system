<?php
return [
  'ActionHistoryRecord' => [
    'fields' => [
      'user' => 'User',
      'action' => 'Action',
      'createdAt' => 'Date',
      'userType' => 'User Type',
      'target' => 'Target',
      'targetType' => 'Target Type',
      'authToken' => 'Auth Token',
      'ipAddress' => 'IP Address',
      'authLogRecord' => 'Auth Log Record'
    ],
    'links' => [
      'authToken' => 'Auth Token',
      'authLogRecord' => 'Auth Log Record',
      'user' => 'User',
      'target' => 'Target'
    ],
    'presetFilters' => [
      'onlyMy' => 'Only My'
    ],
    'options' => [
      'action' => [
        'read' => 'Read',
        'update' => 'Update',
        'delete' => 'Delete',
        'create' => 'Create'
      ]
    ]
  ],
  'Admin' => [
    'labels' => [
      'Enabled' => 'Povoleno',
      'Disabled' => 'Zakázáno',
      'System' => 'Systém',
      'Users' => 'Uživatelé',
      'Email' => 'Email',
      'Messaging' => 'Messaging',
      'Data' => 'Data',
      'Misc' => 'Misc',
      'Customization' => 'Přizpůsobení',
      'Available Fields' => 'Dostupná pole',
      'Layout' => 'Layout',
      'Entity Manager' => 'Správa entit',
      'Add Panel' => 'Přidat panel',
      'Add Field' => 'Přidat pole',
      'Settings' => 'Nastavení',
      'Scheduled Jobs' => 'Naplánované akce',
      'Upgrade' => 'Upgrade',
      'Clear Cache' => 'Vyčistit cache',
      'Rebuild' => 'Přestavět',
      'Teams' => 'Týmy',
      'Roles' => 'Role',
      'Portal' => 'Portal',
      'Portals' => 'Portals',
      'Portal Roles' => 'Portal Roles',
      'Portal Users' => 'Portal Users',
      'API Users' => 'API Users',
      'Outbound Emails' => 'Odchozí emaily',
      'Group Email Accounts' => 'Group Email Accounts',
      'Personal Email Accounts' => 'Personal Email Accounts',
      'Inbound Emails' => 'Příchozí emaily',
      'Email Templates' => 'Šablony emailů',
      'Import' => 'Import',
      'Layout Manager' => 'Správa layoutu',
      'User Interface' => 'Uživatelské rozhraní',
      'Auth Tokens' => 'Autentizační tokeny',
      'Auth Log' => 'Auth Log',
      'Authentication' => 'Autentizace',
      'Currency' => 'Měna',
      'Integrations' => 'Integrace',
      'Extensions' => 'Rozšíření',
      'Webhooks' => 'Webhooks',
      'Dashboard Templates' => 'Dashboard Templates',
      'Upload' => 'Nahrát',
      'Installing...' => 'Instaluji...',
      'Upgrading...' => 'Upgraduji...',
      'Upgraded successfully' => 'Úspěšně upgradováno',
      'Installed successfully' => 'Úspěšně nainstalováno',
      'Ready for upgrade' => 'Připraveno k upgradu',
      'Run Upgrade' => 'Spustit upgrade',
      'Install' => 'Instalovat',
      'Ready for installation' => 'Připraveno k instalaci',
      'Uninstalling...' => 'Odebírám...',
      'Uninstalled' => 'Odebráno',
      'Create Entity' => 'Vytvořit entitu',
      'Edit Entity' => 'Upravit entitu',
      'Create Link' => 'Vytvořit link',
      'Edit Link' => 'Upravit link',
      'Notifications' => 'Upozornění',
      'Jobs' => 'Jobs',
      'Job Settings' => 'Job Settings',
      'Reset to Default' => 'Reset to Default',
      'Email Filters' => 'Email Filters',
      'Action History' => 'Action History',
      'Label Manager' => 'Label Manager',
      'Template Manager' => 'Template Manager',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => 'Attachments',
      'System Requirements' => 'System Requirements',
      'PDF Templates' => 'PDF Templates',
      'PHP Settings' => 'PHP Settings',
      'Database Settings' => 'Database Settings',
      'Permissions' => 'Permissions',
      'Email Addresses' => 'Email Addresses',
      'Phone Numbers' => 'Phone Numbers',
      'Layout Sets' => 'Layout Sets',
      'Success' => 'Success',
      'Fail' => 'Fail',
      'Configuration Instructions' => 'Configuration Instructions',
      'Formula Sandbox' => 'Formula Sandbox',
      'is recommended' => 'is recommended',
      'extension is missing' => 'extension is missing'
    ],
    'layouts' => [
      'list' => 'Seznam',
      'detail' => 'Detail',
      'listSmall' => 'Seznam (malý)',
      'detailSmall' => 'Detail (malý)',
      'detailPortal' => 'Detail (Portal)',
      'detailSmallPortal' => 'Detail (Small, Portal)',
      'listSmallPortal' => 'List (Small, Portal)',
      'listPortal' => 'List (Portal)',
      'relationshipsPortal' => 'Relationship Panels (Portal)',
      'filters' => 'Vyhledávací filtry',
      'massUpdate' => 'Hromadný update',
      'relationships' => 'Vztah',
      'defaultSidePanel' => 'Side Panel Fields',
      'bottomPanelsDetail' => 'Bottom Panels',
      'bottomPanelsEdit' => 'Bottom Panels (Edit)',
      'bottomPanelsDetailSmall' => 'Bottom Panels (Detail Small)',
      'bottomPanelsEditSmall' => 'Bottom Panels (Edit Small)',
      'sidePanelsDetail' => 'Side Panels (Detail)',
      'sidePanelsEdit' => 'Side Panels (Edit)',
      'sidePanelsDetailSmall' => 'Side Panels (Detail Small)',
      'sidePanelsEditSmall' => 'Side Panels (Edit Small)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Konvertovat stopu',
      'listForAccount' => 'Seznam (pro organizace)',
      'listForContact' => 'List (for Contact)'
    ],
    'fieldTypes' => [
      'address' => 'Adresa',
      'array' => 'Pole',
      'foreign' => 'Zahraniční',
      'duration' => 'Trvání',
      'password' => 'Heslo',
      'personName' => 'Person Name',
      'autoincrement' => 'Auto-increment',
      'bool' => 'Boolean',
      'currency' => 'Měna',
      'currencyConverted' => 'Currency (Converted)',
      'date' => 'Datum',
      'datetime' => 'DateTime',
      'datetimeOptional' => 'Datum/DateTime',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Vícenásobný link',
      'linkParent' => 'Rodičovský link',
      'linkOne' => 'Link One',
      'phone' => 'Telefon',
      'text' => 'Text',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'Soubor',
      'image' => 'Obrázek',
      'multiEnum' => 'Vícenásobný Enum',
      'attachmentMultiple' => 'Attachment Multiple',
      'rangeInt' => 'Range Integer',
      'rangeFloat' => 'Range Float',
      'rangeCurrency' => 'Range Currency',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Map',
      'number' => 'Number (auto-increment)',
      'colorpicker' => 'Color Picker',
      'checklist' => 'Checklist',
      'barcode' => 'Barcode',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Object',
      'parsonName' => 'Jméno',
      'multienim' => 'Multienum'
    ],
    'fields' => [
      'type' => 'Typ',
      'name' => 'Jméno',
      'label' => 'Popisek',
      'tooltipText' => 'Tooltip Text',
      'required' => 'Povinné',
      'default' => 'Výchozí',
      'maxLength' => 'Maximální délka',
      'options' => 'Možnosti',
      'after' => 'Po (pole)',
      'before' => 'Před (pole)',
      'link' => 'Link',
      'field' => 'Pole',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Překlad',
      'previewSize' => 'Velikost náhledu',
      'listPreviewSize' => 'Preview Size in List View',
      'noEmptyString' => 'Neprázdný řetězec',
      'defaultType' => 'Výchozí typ',
      'seeMoreDisabled' => 'Zakázat ořez textu',
      'cutHeight' => 'Cut Height (px)',
      'entityList' => 'Entity List',
      'isSorted' => 'Is Sorted (alphabetically)',
      'audited' => 'Audited',
      'trim' => 'Trim',
      'height' => 'Height (px)',
      'minHeight' => 'Min Height (px)',
      'provider' => 'Provider',
      'typeList' => 'Type List',
      'rows' => 'Number of rows of textarea',
      'lengthOfCut' => 'Length of cut',
      'sourceList' => 'Source List',
      'prefix' => 'Prefix',
      'nextNumber' => 'Next Number',
      'padLength' => 'Pad Length',
      'disableFormatting' => 'Disable Formatting',
      'dynamicLogicVisible' => 'Conditions making field visible',
      'dynamicLogicReadOnly' => 'Conditions making field read-only',
      'dynamicLogicRequired' => 'Conditions making field required',
      'dynamicLogicOptions' => 'Conditional options',
      'dynamicLogicInvalid' => 'Conditions making field invalid',
      'probabilityMap' => 'Stage Probabilities (%)',
      'notActualOptions' => 'Not Actual Options',
      'readOnly' => 'Read-only',
      'maxFileSize' => 'Max File Size (Mb)',
      'isPersonalData' => 'Is Personal Data',
      'useIframe' => 'Use Iframe',
      'useNumericFormat' => 'Use Numeric Format',
      'strip' => 'Strip',
      'minuteStep' => 'Minutes Step',
      'inlineEditDisabled' => 'Disable Inline Edit',
      'allowCustomOptions' => 'Allow Custom Options',
      'displayAsLabel' => 'Display as Label',
      'displayAsList' => 'Display as List',
      'maxCount' => 'Max Item Count',
      'accept' => 'Accept',
      'viewMap' => 'View Map Button',
      'codeType' => 'Code Type',
      'lastChar' => 'Last Character',
      'onlyDefaultCurrency' => 'Only default currency',
      'displayRawText' => 'Display raw text (no markdown)',
      'conversionDisabled' => 'Disable Conversion',
      'decimalPlaces' => 'Decimal Places',
      'pattern' => 'Pattern',
      'globalRestrictions' => 'Global Restrictions'
    ],
    'strings' => [
      'rebuildRequired' => 'Rebuild is required'
    ],
    'messages' => [
      'formulaFunctions' => 'More functions can be found in [documentation]({documentationUrl}).',
      'rebuildRequired' => 'You need to run rebuild from CLI.',
      'upgradeVersion' => 'EspoCRM bude upgradováno na verzi <strong>{version}</strong>. Toto může chvíli trvat.',
      'upgradeDone' => 'EspoCRM bylo upgradováno na verzi <strong>{version}</strong>.',
      'upgradeBackup' => 'Doporučujeme zálohovat soubory a data EspoCRM před upgradem.',
      'thousandSeparatorEqualsDecimalMark' => 'Oddělovač tisíců nemůže být stejný jako desetinný symbol.',
      'userHasNoEmailAddress' => 'Uživatel nemá emailovou adresu.',
      'selectEntityType' => 'Vybrat entitu v levém menu.',
      'selectUpgradePackage' => 'Vybrat upgrade balíček',
      'downloadUpgradePackage' => 'Stáhnout upgradovací balíčky na <a href="https://sourceforge.net/projects/espocrm/files/Upgrades/">tomto odkaze</a>.',
      'selectLayout' => 'Vybrat požadovaný layout v levém menu a upravit ho.',
      'selectExtensionPackage' => 'Vybrat rozšiřující balíček',
      'extensionInstalled' => 'Rozšíření {name} {version} bylo nainstalováno.',
      'installExtension' => 'Rozšíření {name} {version} je připraveno k instalaci.',
      'cronIsNotConfigured' => 'Scheduled jobs are not running.  Hence inbound emails, notifications and reminders are not working. Please follow the [instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) to setup cron job.',
      'newVersionIsAvailable' => 'New EspoCRM version {latestVersion} is available. Please follow the [instructions](https://www.espocrm.com/documentation/administration/upgrading/) to upgrade your instance.',
      'newExtensionVersionIsAvailable' => 'New {extensionName} version {latestVersion} is available.',
      'uninstallConfirmation' => 'Opravdu odinstalovat vybrané rozšíření?',
      'upgradeInfo' => 'Check the [documentation]({url}) about how to upgrade your EspoCRM instance.',
      'upgradeRecommendation' => 'This way of upgrading is not recommended. It\'s better to upgrade from CLI.'
    ],
    'descriptions' => [
      'settings' => 'Systémová nastavení aplikace.',
      'scheduledJob' => 'Činnosti vykonávané CRONem.',
      'jobs' => 'Jobs execute tasks in the background.',
      'upgrade' => 'Upgradovat EspoCRM.',
      'clearCache' => 'Vyčistit veškerou cache.',
      'rebuild' => 'Přestavě backend a vyčistit cache.',
      'users' => 'Správa uživatelů.',
      'teams' => 'Správa týmů.',
      'roles' => 'Správa rolí.',
      'portals' => 'Portals management.',
      'portalRoles' => 'Roles for portal.',
      'portalUsers' => 'Users of portal.',
      'outboundEmails' => 'Nastavení SMTP pro odchozí emaily.',
      'groupEmailAccounts' => 'Group IMAP email accounts. Email import and Email-to-Case.',
      'personalEmailAccounts' => 'Users email accounts.',
      'emailTemplates' => 'Šablony pro odchozí emaily.',
      'import' => 'Importovat data z CSV souboru.',
      'layoutManager' => 'Přizpůsobit layouty (seznam, detail, upravit, hledat, hromadný update).',
      'entityManager' => 'Vytvořit vlastní entity, úpravit existující. Správa polí a vztahů.',
      'userInterface' => 'Nastavit uživatelské rozhraní.',
      'authTokens' => 'Aktivní autentizační sessions. IP adresa a datum posledního přístupu.',
      'authentication' => 'Nastavení autentizace.',
      'currency' => 'Nastavení měn a kurzů.',
      'extensions' => 'Instalovat a odebrat rozšíření.',
      'integrations' => 'Integrace se službami třetích stran.',
      'notifications' => 'Nastavení In-app a emailových upozornění.',
      'inboundEmails' => 'Skupinové IMAP účty. Email import a Email-to-Case.',
      'emailFilters' => 'Email messages that match the specified filter won\'t be imported.',
      'actionHistory' => 'Log of user actions.',
      'labelManager' => 'Customize application labels.',
      'templateManager' => 'Customize message templates.',
      'authLog' => 'Login history.',
      'leadCapture' => 'API entry points for Web-to-Lead.',
      'attachments' => 'All file attachments stored in the system.',
      'systemRequirements' => 'System Requirements for EspoCRM.',
      'apiUsers' => 'Separate users for integration purposes.',
      'webhooks' => 'Manage webhooks.',
      'emailAddresses' => 'All email addresses stored in the system.',
      'phoneNumbers' => 'All phone numbers stored in the system.',
      'dashboardTemplates' => 'Deploy dashboards to users.',
      'layoutSets' => 'Collections of layouts that can be assigned to teams & portals.',
      'jobsSettings' => 'Job processing settings. Jobs execute tasks in the background.',
      'sms' => 'SMS settings.',
      'pdfTemplates' => 'Templates for printing to PDF.',
      'formulaSandbox' => 'Write and test formula scripts.'
    ],
    'keywords' => [
      'settings' => 'system',
      'userInterface' => 'ui,theme,tabs,logo,dashboard',
      'authentication' => 'password,security,ldap',
      'scheduledJob' => 'cron,jobs',
      'integrations' => 'google,maps,google maps',
      'authLog' => 'log,history',
      'authTokens' => 'history,access,log',
      'entityManager' => 'fields,relations,relationships',
      'templateManager' => 'notifications',
      'jobs' => 'cron'
    ],
    'options' => [
      'previewSize' => [
        '' => 'Default',
        'x-small' => 'Extra-malý',
        'small' => 'Malý',
        'medium' => 'Střední',
        'large' => 'Velký'
      ]
    ],
    'logicalOperators' => [
      'and' => 'AND',
      'or' => 'OR',
      'not' => 'NOT'
    ],
    'systemRequirements' => [
      'requiredPhpVersion' => 'PHP Version',
      'requiredMysqlVersion' => 'MySQL Version',
      'requiredMariadbVersion' => 'MariaDB version',
      'host' => 'Host Name',
      'dbname' => 'Database Name',
      'user' => 'User Name',
      'writable' => 'Writable',
      'readable' => 'Readable'
    ],
    'templates' => [
      'twoFactorCode' => '2FA Code',
      'accessInfo' => 'Access Info',
      'accessInfoPortal' => 'Access Info for Portals',
      'assignment' => 'Assignment',
      'mention' => 'Mention',
      'noteEmailReceived' => 'Note about Received Email',
      'notePost' => 'Note about Post',
      'notePostNoParent' => 'Note about Post (no Parent)',
      'noteStatus' => 'Note about Status Update',
      'passwordChangeLink' => 'Password Change Link',
      'invitation' => 'Invitation',
      'reminder' => 'Reminder'
    ]
  ],
  'ApiUser' => [
    'labels' => [
      'Create ApiUser' => 'Create API User'
    ]
  ],
  'Attachment' => [
    'fields' => [
      'role' => 'Role',
      'related' => 'Related',
      'file' => 'File',
      'type' => 'Type',
      'field' => 'Field',
      'sourceId' => 'Source ID',
      'storage' => 'Storage',
      'size' => 'Size (bytes)',
      'isBeingUploaded' => 'Is Being Uploaded'
    ],
    'options' => [
      'role' => [
        'Attachment' => 'Attachment',
        'Inline Attachment' => 'Inline Attachment',
        'Import File' => 'Import File',
        'Export File' => 'Export File',
        'Mail Merge' => 'Mail Merge',
        'Mass Pdf' => 'Mass Pdf'
      ]
    ],
    'insertFromSourceLabels' => [
      'Document' => 'Insert Document'
    ],
    'presetFilters' => [
      'orphan' => 'Orphan'
    ]
  ],
  'AuthLogRecord' => [
    'fields' => [
      'username' => 'Username',
      'ipAddress' => 'IP Address',
      'requestTime' => 'Request Time',
      'createdAt' => 'Requested At',
      'isDenied' => 'Is Denied',
      'denialReason' => 'Denial Reason',
      'portal' => 'Portal',
      'user' => 'User',
      'authToken' => 'Auth Token Created',
      'requestUrl' => 'Request URL',
      'requestMethod' => 'Request Method',
      'authTokenIsActive' => 'Auth Token is Active',
      'authenticationMethod' => 'Authentication Method'
    ],
    'links' => [
      'authToken' => 'Auth Token Created',
      'user' => 'User',
      'portal' => 'Portal',
      'actionHistoryRecords' => 'Action History'
    ],
    'presetFilters' => [
      'denied' => 'Denied',
      'accepted' => 'Accepted'
    ],
    'options' => [
      'denialReason' => [
        'CREDENTIALS' => 'Invalid credentials',
        'INACTIVE_USER' => 'Inactive user',
        'IS_PORTAL_USER' => 'Portal user',
        'IS_NOT_PORTAL_USER' => 'Not a portal user',
        'USER_IS_NOT_IN_PORTAL' => 'User is not related to the portal'
      ]
    ]
  ],
  'AuthToken' => [
    'fields' => [
      'user' => 'Uživatel',
      'ipAddress' => 'IP adresa',
      'lastAccess' => 'Datum posledního přístupu',
      'createdAt' => 'Datum přihlášení',
      'isActive' => 'Is Active',
      'portal' => 'Portal'
    ],
    'links' => [
      'actionHistoryRecords' => 'Action History'
    ],
    'presetFilters' => [
      'active' => 'Active',
      'inactive' => 'Inactive'
    ],
    'labels' => [
      'Set Inactive' => 'Set Inactive'
    ],
    'massActions' => [
      'setInactive' => 'Set Inactive'
    ]
  ],
  'Currency' => [
    'names' => [
      'AED' => 'United Arab Emirates Dirham',
      'AFN' => 'Afghan Afghani',
      'ALL' => 'Albanian Lek',
      'AMD' => 'Armenian Dram',
      'ANG' => 'Netherlands Antillean Guilder',
      'AOA' => 'Angolan Kwanza',
      'ARS' => 'Argentine Peso',
      'AUD' => 'Australian Dollar',
      'AWG' => 'Aruban Florin',
      'AZN' => 'Azerbaijani Manat',
      'BAM' => 'Bosnia-Herzegovina Convertible Mark',
      'BBD' => 'Barbadian Dollar',
      'BDT' => 'Bangladeshi Taka',
      'BGN' => 'Bulgarian Lev',
      'BHD' => 'Bahraini Dinar',
      'BIF' => 'Burundian Franc',
      'BMD' => 'Bermudan Dollar',
      'BND' => 'Brunei Dollar',
      'BOB' => 'Bolivian Boliviano',
      'BOV' => 'Bolivian Mvdol',
      'BRL' => 'Brazilian Real',
      'BSD' => 'Bahamian Dollar',
      'BTN' => 'Bhutanese Ngultrum',
      'BWP' => 'Botswanan Pula',
      'BYN' => 'Belarusian Ruble',
      'BZD' => 'Belize Dollar',
      'CAD' => 'Canadian Dollar',
      'CDF' => 'Congolese Franc',
      'CHE' => 'WIR Euro',
      'CHF' => 'Swiss Franc',
      'CHW' => 'WIR Franc',
      'CLF' => 'Chilean Unit of Account (UF)',
      'CLP' => 'Chilean Peso',
      'CNH' => 'Chinese Yuan (offshore)',
      'CNY' => 'Chinese Yuan',
      'COP' => 'Colombian Peso',
      'COU' => 'Colombian Real Value Unit',
      'CRC' => 'Costa Rican Colón',
      'CUC' => 'Cuban Convertible Peso',
      'CUP' => 'Cuban Peso',
      'CVE' => 'Cape Verdean Escudo',
      'CZK' => 'Czech Koruna',
      'DJF' => 'Djiboutian Franc',
      'DKK' => 'Danish Krone',
      'DOP' => 'Dominican Peso',
      'DZD' => 'Algerian Dinar',
      'EGP' => 'Egyptian Pound',
      'ERN' => 'Eritrean Nakfa',
      'ETB' => 'Ethiopian Birr',
      'EUR' => 'Euro',
      'FJD' => 'Fijian Dollar',
      'FKP' => 'Falkland Islands Pound',
      'GBP' => 'British Pound',
      'GEL' => 'Georgian Lari',
      'GHS' => 'Ghanaian Cedi',
      'GIP' => 'Gibraltar Pound',
      'GMD' => 'Gambian Dalasi',
      'GNF' => 'Guinean Franc',
      'GTQ' => 'Guatemalan Quetzal',
      'GYD' => 'Guyanaese Dollar',
      'HKD' => 'Hong Kong Dollar',
      'HNL' => 'Honduran Lempira',
      'HRK' => 'Croatian Kuna',
      'HTG' => 'Haitian Gourde',
      'HUF' => 'Hungarian Forint',
      'IDR' => 'Indonesian Rupiah',
      'ILS' => 'Israeli New Shekel',
      'INR' => 'Indian Rupee',
      'IQD' => 'Iraqi Dinar',
      'IRR' => 'Iranian Rial',
      'ISK' => 'Icelandic Króna',
      'JMD' => 'Jamaican Dollar',
      'JOD' => 'Jordanian Dinar',
      'JPY' => 'Japanese Yen',
      'KES' => 'Kenyan Shilling',
      'KGS' => 'Kyrgystani Som',
      'KHR' => 'Cambodian Riel',
      'KMF' => 'Comorian Franc',
      'KPW' => 'North Korean Won',
      'KRW' => 'South Korean Won',
      'KWD' => 'Kuwaiti Dinar',
      'KYD' => 'Cayman Islands Dollar',
      'KZT' => 'Kazakhstani Tenge',
      'LAK' => 'Laotian Kip',
      'LBP' => 'Lebanese Pound',
      'LKR' => 'Sri Lankan Rupee',
      'LRD' => 'Liberian Dollar',
      'LSL' => 'Lesotho Loti',
      'LYD' => 'Libyan Dinar',
      'MAD' => 'Moroccan Dirham',
      'MDL' => 'Moldovan Leu',
      'MGA' => 'Malagasy Ariary',
      'MKD' => 'Macedonian Denar',
      'MMK' => 'Myanmar Kyat',
      'MNT' => 'Mongolian Tugrik',
      'MOP' => 'Macanese Pataca',
      'MRO' => 'Mauritanian Ouguiya',
      'MUR' => 'Mauritian Rupee',
      'MWK' => 'Malawian Kwacha',
      'MXN' => 'Mexican Peso',
      'MXV' => 'Mexican Investment Unit',
      'MYR' => 'Malaysian Ringgit',
      'MZN' => 'Mozambican Metical',
      'NAD' => 'Namibian Dollar',
      'NGN' => 'Nigerian Naira',
      'NIO' => 'Nicaraguan Córdoba',
      'NOK' => 'Norwegian Krone',
      'NPR' => 'Nepalese Rupee',
      'NZD' => 'New Zealand Dollar',
      'OMR' => 'Omani Rial',
      'PAB' => 'Panamanian Balboa',
      'PEN' => 'Peruvian Sol',
      'PGK' => 'Papua New Guinean Kina',
      'PHP' => 'Philippine Piso',
      'PKR' => 'Pakistani Rupee',
      'PLN' => 'Polish Zloty',
      'PYG' => 'Paraguayan Guarani',
      'QAR' => 'Qatari Rial',
      'RON' => 'Romanian Leu',
      'RSD' => 'Serbian Dinar',
      'RUB' => 'Russian Ruble',
      'RWF' => 'Rwandan Franc',
      'SAR' => 'Saudi Riyal',
      'SBD' => 'Solomon Islands Dollar',
      'SCR' => 'Seychellois Rupee',
      'SDG' => 'Sudanese Pound',
      'SEK' => 'Swedish Krona',
      'SGD' => 'Singapore Dollar',
      'SHP' => 'St. Helena Pound',
      'SLL' => 'Sierra Leonean Leone',
      'SOS' => 'Somali Shilling',
      'SRD' => 'Surinamese Dollar',
      'SSP' => 'South Sudanese Pound',
      'STN' => 'São Tomé & Príncipe Dobra (2018)',
      'SYP' => 'Syrian Pound',
      'SZL' => 'Swazi Lilangeni',
      'SVC' => 'Salvadoran Colón',
      'THB' => 'Thai Baht',
      'TJS' => 'Tajikistani Somoni',
      'TND' => 'Tunisian Dinar',
      'TOP' => 'Tongan Paʻanga',
      'TRY' => 'Turkish Lira',
      'TTD' => 'Trinidad & Tobago Dollar',
      'TWD' => 'New Taiwan Dollar',
      'TZS' => 'Tanzanian Shilling',
      'UAH' => 'Ukrainian Hryvnia',
      'UGX' => 'Ugandan Shilling',
      'USD' => 'US Dollar',
      'USN' => 'US Dollar (Next day)',
      'UYI' => 'Uruguayan Peso (Indexed Units)',
      'UYU' => 'Uruguayan Peso',
      'UZS' => 'Uzbekistani Som',
      'VEF' => 'Venezuelan Bolívar',
      'VND' => 'Vietnamese Dong',
      'VUV' => 'Vanuatu Vatu',
      'WST' => 'Samoan Tala',
      'XAF' => 'Central African CFA Franc',
      'XCD' => 'East Caribbean Dollar',
      'XOF' => 'West African CFA Franc',
      'XPF' => 'CFP Franc',
      'YER' => 'Yemeni Rial',
      'ZAR' => 'South African Rand',
      'ZMW' => 'Zambian Kwacha',
      'ZWL' => 'Zimbabwe Dollar'
    ]
  ],
  'DashboardTemplate' => [
    'fields' => [
      'layout' => 'Layout',
      'append' => 'Append (don\'t remove user\'s tabs)'
    ],
    'links' => [],
    'labels' => [
      'Create DashboardTemplate' => 'Create Template',
      'Deploy to Users' => 'Deploy to Users',
      'Deploy to Team' => 'Deploy to Team'
    ]
  ],
  'DashletOptions' => [
    'fields' => [
      'title' => 'Titulek',
      'dateFrom' => 'Datum od',
      'dateTo' => 'Datum do',
      'autorefreshInterval' => 'Interval automatického obnovení',
      'displayRecords' => 'Zobrazit záznamů',
      'isDoubleHeight' => 'Výška 2x',
      'mode' => 'Mód',
      'enabledScopeList' => 'What to display',
      'users' => 'Users',
      'entityType' => 'Entity Type',
      'primaryFilter' => 'Primary Filter',
      'boolFilterList' => 'Additional Filters',
      'sortBy' => 'Order (field)',
      'sortDirection' => 'Order (direction)',
      'expandedLayout' => 'Layout',
      'skipOwn' => 'Don\'t show own records',
      'url' => 'URL',
      'dateFilter' => 'Date Filter',
      'team' => 'Team',
      'futureDays' => 'Next X Days',
      'useLastStage' => 'Group by last reached stage'
    ],
    'options' => [
      'mode' => [
        'agendaWeek' => 'Týden (agenda)',
        'basicWeek' => 'Týden',
        'month' => 'Měsíc',
        'basicDay' => 'Day',
        'agendaDay' => 'Day (agenda)',
        'timeline' => 'Timeline'
      ]
    ],
    'messages' => [
      'selectEntityType' => 'Select Entity Type in dashlet options.'
    ],
    'tooltips' => [
      'skipOwn' => 'Actions made by your user account won\'t be displayed.'
    ]
  ],
  'DynamicLogic' => [
    'labels' => [
      'Field' => 'Field'
    ],
    'options' => [
      'operators' => [
        'equals' => 'Equals',
        'notEquals' => 'Not Equals',
        'greaterThan' => 'Greater Than',
        'lessThan' => 'Less Than',
        'greaterThanOrEquals' => 'Greater Than Or Equals',
        'lessThanOrEquals' => 'Less Than Or Equals',
        'in' => 'In',
        'notIn' => 'Not In',
        'inPast' => 'In Past',
        'inFuture' => 'Is Future',
        'isToday' => 'Is Today',
        'isTrue' => 'Is True',
        'isFalse' => 'Is False',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
        'contains' => 'Contains',
        'notContains' => 'Not Contains',
        'has' => 'Contains',
        'notHas' => 'Not Contains',
        'startsWith' => 'Starts With',
        'endsWith' => 'Ends With',
        'matches' => 'Matches (reg exp)'
      ]
    ]
  ],
  'Email' => [
    'fields' => [
      'name' => 'Jméno',
      'parent' => 'Rodič',
      'status' => 'Status',
      'dateSent' => 'Datum odeslání',
      'from' => 'Od',
      'to' => 'Komu',
      'cc' => 'Kopie',
      'bcc' => 'Skrytá kopie',
      'replyTo' => 'Reply To',
      'replyToString' => 'Reply To (String)',
      'personStringData' => 'Person String Data',
      'isHtml' => 'Je HTML',
      'body' => 'Tělo',
      'bodyPlain' => 'Body (Plain)',
      'subject' => 'Předmět',
      'attachments' => 'Přílohy',
      'selectTemplate' => 'Vybrat šablonu',
      'fromEmailAddress' => 'Adresa od',
      'toEmailAddresses' => 'Adresa komu',
      'emailAddress' => 'Emailová adresa',
      'deliveryDate' => 'Datum doručení',
      'account' => 'Účet',
      'users' => 'Uživatelé',
      'replied' => 'Replied',
      'replies' => 'Replies',
      'isRead' => 'Is Read',
      'isNotRead' => 'Is Not Read',
      'isImportant' => 'Is Important',
      'isReplied' => 'Is Replied',
      'isNotReplied' => 'Is Not Replied',
      'isUsers' => 'Is User\'s',
      'inTrash' => 'In Trash',
      'sentBy' => 'Sent By',
      'folder' => 'Folder',
      'inboundEmails' => 'Group Accounts',
      'emailAccounts' => 'Personal Accounts',
      'hasAttachment' => 'Has Attachment',
      'assignedUsers' => 'Assigned Users',
      'ccEmailAddresses' => 'CC Email Addresses',
      'bccEmailAddresses' => 'BCC EmailAddresses',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses',
      'messageId' => 'Message Id',
      'messageIdInternal' => 'Message Id (Internal)',
      'folderId' => 'Folder Id',
      'fromName' => 'From Name',
      'fromString' => 'From String',
      'fromAddress' => 'From Address',
      'replyToName' => 'Reply-To Name',
      'replyToAddress' => 'Reply-To Address',
      'isSystem' => 'Is System',
      'icsContents' => 'ICS Contents',
      'icsEventData' => 'ICS Event Data',
      'icsEventUid' => 'ICS Event UID',
      'createdEvent' => 'Created Event',
      'event' => 'Event',
      'icsEventDateStart' => 'ICS Event Date Start',
      'tasks' => 'Tasks'
    ],
    'links' => [
      'replied' => 'Replied',
      'replies' => 'Replies',
      'inboundEmails' => 'Group Accounts',
      'emailAccounts' => 'Personal Accounts',
      'assignedUsers' => 'Assigned Users',
      'sentBy' => 'Sent By',
      'attachments' => 'Attachments',
      'fromEmailAddress' => 'From Email Address',
      'toEmailAddresses' => 'To EmailAddresses',
      'ccEmailAddresses' => 'CC EmailAddresses',
      'bccEmailAddresses' => 'BCC EmailAddresses',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Draft',
        'Sending' => 'Sending',
        'Sent' => 'Sent',
        'Archived' => 'Archived',
        'Received' => 'Received',
        'Failed' => 'Failed'
      ],
      'Draft' => 'Koncept',
      'Sending' => 'Odesílání',
      'Sent' => 'Odesláno',
      'Archived' => 'Archivováno',
      'Received' => 'Přijato'
    ],
    'labels' => [
      'Create Email' => 'Vytvořit email',
      'Archive Email' => 'Archivovat email',
      'Compose' => 'Vytvořit',
      'Reply' => 'Odpovědět',
      'Reply to All' => 'Odpovědět všem',
      'Forward' => 'Přeposlat',
      'Insert Field' => 'Insert Field',
      'Original message' => 'Původní zpráva',
      'Forwarded message' => 'Přeposlaná zpráva',
      'Email Accounts' => 'Emailové účty',
      'Inbound Emails' => 'Group Email Accounts',
      'Email Templates' => 'Email Templates',
      'Send Test Email' => 'Poslat zkušební email',
      'Send' => 'Odeslat',
      'Email Address' => 'Emailová adresa',
      'Mark Read' => 'Označit jako přečtěné',
      'Sending...' => 'Odesílání...',
      'Save Draft' => 'Uložit koncept',
      'Mark all as read' => 'Označit vše jako přečtené',
      'Show Plain Text' => 'Zobrazit Plain Text',
      'Mark as Important' => 'Mark as Important',
      'Unmark Importance' => 'Unmark Importance',
      'Move to Trash' => 'Move to Trash',
      'Retrieve from Trash' => 'Retrieve from Trash',
      'Move to Folder' => 'Move to Folder',
      'Filters' => 'Filters',
      'Folders' => 'Folders',
      'No Subject' => 'No Subject',
      'View Users' => 'View Users',
      'Event' => 'Event',
      'Create Lead' => 'Vytvořit stopu',
      'Create Contact' => 'Vytvořit kontakt',
      'Add to Contact' => 'Add to Contact',
      'Add to Lead' => 'Add to Lead',
      'Create Task' => 'Vytvořit úkol',
      'Create Case' => 'Vytvořit událost'
    ],
    'strings' => [
      'sendingFailed' => 'Email sending failed'
    ],
    'messages' => [
      'noSmtpSetup' => 'Chybí nastavení SMTP. {link}.',
      'testEmailSent' => 'Zkušební email byl odeslán',
      'emailSent' => 'Email byl odeslán',
      'savedAsDraft' => 'Uloženo jako koncept',
      'sendConfirm' => 'Send the email?',
      'removeSelectedRecordsConfirmation' => 'Are you sure you want to remove selected emails?

They will be removed for other users too.',
      'removeRecordConfirmation' => 'Are you sure you want to remove the email?

It will be removed for other users too.',
      'confirmInsertTemplate' => 'The email body will be lost. Are you sure you want to insert the template?'
    ],
    'presetFilters' => [
      'sent' => 'Odeslané',
      'archived' => 'Archivované',
      'inbox' => 'Doručené',
      'drafts' => 'Koncepty',
      'trash' => 'Trash',
      'important' => 'Important'
    ],
    'massActions' => [
      'markAsRead' => 'Označit jako přečtené',
      'markAsNotRead' => 'Mark as Not Read',
      'markAsImportant' => 'Mark as Important',
      'markAsNotImportant' => 'Unmark Importance',
      'moveToTrash' => 'Move to Trash',
      'moveToFolder' => 'Move to Folder',
      'retrieveFromTrash' => 'Retrieve from Trash'
    ]
  ],
  'EmailAccount' => [
    'fields' => [
      'name' => 'Jméno',
      'status' => 'Status',
      'host' => 'Server',
      'username' => 'Uživatelské jméno',
      'password' => 'Heslo',
      'port' => 'Port',
      'monitoredFolders' => 'Synchronizované složky',
      'security' => 'Security',
      'fetchSince' => 'Nastaveno od',
      'emailAddress' => 'Emailová adresa',
      'sentFolder' => 'Sent Folder',
      'storeSentEmails' => 'Store Sent Emails',
      'keepFetchedEmailsUnread' => 'Keep Fetched Emails Unread',
      'emailFolder' => 'Put in Folder',
      'useImap' => 'Fetch Emails',
      'useSmtp' => 'Use SMTP',
      'smtpHost' => 'SMTP Host',
      'smtpPort' => 'SMTP Port',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Security',
      'smtpAuthMechanism' => 'SMTP Auth Mechanism',
      'smtpUsername' => 'SMTP Username',
      'smtpPassword' => 'SMTP Password',
      'ssl' => 'SSL'
    ],
    'links' => [
      'filters' => 'Filters',
      'emails' => 'Emails'
    ],
    'options' => [
      'status' => [
        'Active' => 'Aktivní',
        'Inactive' => 'Neaktivní'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'PLAIN',
        'login' => 'LOGIN',
        'crammd5' => 'CRAM-MD5'
      ]
    ],
    'labels' => [
      'Create EmailAccount' => 'Vytvořit emailový účet',
      'IMAP' => 'IMAP',
      'Main' => 'Hlavní',
      'Test Connection' => 'Test spojení',
      'Send Test Email' => 'Send Test Email',
      'SMTP' => 'SMTP'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'Nemohu se připojit k IMAP serveru',
      'connectionIsOk' => 'Spojení je OK'
    ],
    'tooltips' => [
      'useSmtp' => 'The ability to send emails.',
      'emailAddress' => 'The user record (assigned user) should have the same email address to be able to use this email account for sending.',
      'monitoredFolders' => 'Můžete přidat složku \'Odeslané\' k synchronizaci externím emailovým klientem.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server. Email Address field should match the address emails will be sent from.'
    ]
  ],
  'EmailAddress' => [
    'labels' => [
      'Primary' => 'Primární',
      'Opted Out' => 'Odhlášené',
      'Invalid' => 'Neplatné'
    ],
    'fields' => [
      'optOut' => 'Opted Out',
      'invalid' => 'Invalid'
    ],
    'presetFilters' => [
      'orphan' => 'Orphan'
    ]
  ],
  'EmailFilter' => [
    'fields' => [
      'from' => 'From',
      'to' => 'To',
      'subject' => 'Subject',
      'bodyContains' => 'Body Contains',
      'action' => 'Action',
      'isGlobal' => 'Is Global',
      'emailFolder' => 'Folder'
    ],
    'labels' => [
      'Create EmailFilter' => 'Create Email Filter',
      'Emails' => 'Emails'
    ],
    'options' => [
      'action' => [
        'Skip' => 'Ignore',
        'Move to Folder' => 'Put in Folder'
      ]
    ],
    'tooltips' => [
      'name' => 'Give the filter a descriptive name.',
      'subject' => 'Use a wildcard *: 

 * `text*` – starts with text,
 * `*text*` – contains text,
 * `*text` – ends with text.',
      'bodyContains' => 'Body of the email contains any of the specified words or phrases.',
      'from' => 'Emails being sent from the specified address. Leave empty if not needed. You can use wildcard *.',
      'to' => 'Emails being sent to the specified address. Leave empty if not needed. You can use wildcard *.',
      'isGlobal' => 'Applies this filter to all emails incoming to system.'
    ]
  ],
  'EmailFolder' => [
    'fields' => [
      'skipNotifications' => 'Skip Notifications'
    ],
    'labels' => [
      'Create EmailFolder' => 'Create Folder',
      'Manage Folders' => 'Manage Folders',
      'Emails' => 'Emails'
    ]
  ],
  'EmailTemplate' => [
    'fields' => [
      'name' => 'Jméno',
      'status' => 'Status',
      'isHtml' => 'Je HTML',
      'body' => 'Tělo',
      'subject' => 'Předmět',
      'attachments' => 'Přílohy',
      'oneOff' => 'One-off',
      'category' => 'Category',
      'insertField' => ''
    ],
    'links' => [],
    'labels' => [
      'Create EmailTemplate' => 'Vytvořit šablonu',
      'Info' => 'Info',
      'Available placeholders' => 'Available placeholders'
    ],
    'messages' => [
      'infoText' => 'Available placeholders:

{optOutUrl} &#8211; URL for an unsubscribe link;

{optOutLink} &#8211; an unsubscribe link.'
    ],
    'tooltips' => [
      'oneOff' => 'Check if you are going to use this template only once. E.g. for Mass Email.'
    ],
    'presetFilters' => [
      'actual' => 'Actual'
    ],
    'placeholderTexts' => [
      'today' => 'Today\'s date',
      'now' => 'Current date & time',
      'currentYear' => 'Current Year',
      'optOutUrl' => 'URL for an unsubscribe link',
      'optOutLink' => 'an unsubscribe link'
    ]
  ],
  'EmailTemplateCategory' => [
    'labels' => [
      'Create EmailTemplateCategory' => 'Create Category',
      'Manage Categories' => 'Manage Categories',
      'EmailTemplates' => 'Email Templates'
    ],
    'fields' => [
      'order' => 'Order',
      'childList' => 'Child List'
    ],
    'links' => [
      'emailTemplates' => 'Email Templates'
    ]
  ],
  'EntityManager' => [
    'labels' => [
      'Fields' => 'Pole',
      'Relationships' => 'Vztahy',
      'Layouts' => 'Layouts',
      'Schedule' => 'Schedule',
      'Log' => 'Log',
      'Formula' => 'Formula'
    ],
    'fields' => [
      'name' => 'Jméno',
      'type' => 'Typ',
      'labelSingular' => 'Popisek jednotného čísla',
      'labelPlural' => 'Popisek množného čísla',
      'stream' => 'Stream',
      'label' => 'Popisek',
      'linkType' => 'Typ linku',
      'entity' => 'Entity',
      'entityForeign' => 'Cizí entita',
      'linkForeign' => 'Cizí link',
      'link' => 'Link',
      'labelForeign' => 'Cizí popisek',
      'sortBy' => 'Výchozí řazení (pole)',
      'sortDirection' => 'Výchozí řazení (směr)',
      'relationName' => 'Middle Table Name',
      'linkMultipleField' => 'Link Multiple Field',
      'linkMultipleFieldForeign' => 'Foreign Link Multiple Field',
      'disabled' => 'Disabled',
      'textFilterFields' => 'Text Filter Fields',
      'audited' => 'Audited',
      'auditedForeign' => 'Foreign Audited',
      'statusField' => 'Status Field',
      'beforeSaveCustomScript' => 'Before Save Custom Script',
      'color' => 'Color',
      'kanbanViewMode' => 'Kanban View',
      'kanbanStatusIgnoreList' => 'Ignored groups in Kanban view',
      'iconClass' => 'Icon',
      'countDisabled' => 'Disable record count',
      'fullTextSearch' => 'Full-Text Search',
      'parentEntityTypeList' => 'Parent Entity Types',
      'foreignLinkEntityTypeList' => 'Foreign Links',
      'optimisticConcurrencyControl' => 'Optimistic concurrency control'
    ],
    'options' => [
      'type' => [
        '' => '',
        'Base' => 'Báze',
        'Person' => 'Osoba',
        'CategoryTree' => 'Strom kategorií',
        'Event' => 'Event',
        'BasePlus' => 'Base Plus',
        'Company' => 'Company'
      ],
      'linkType' => [
        'manyToMany' => 'N-N',
        'oneToMany' => '1-N',
        'manyToOne' => 'N-1',
        'oneToOneRight' => 'One-to-One Right',
        'oneToOneLeft' => 'One-to-One Left',
        'parentToChildren' => 'Rodič-Potomek',
        'childrenToParent' => 'Potomek-Rodič'
      ],
      'sortDirection' => [
        'asc' => 'Vzestupně',
        'desc' => 'Sestupně'
      ]
    ],
    'messages' => [
      'confirmRemove' => 'Are you sure you want to remove the entity type from the system?',
      'entityCreated' => 'Entita byla vytvořena',
      'linkAlreadyExists' => 'Konflikt: link již existuje.',
      'linkConflict' => 'Name conflict: link or field with the same name already exists.'
    ],
    'tooltips' => [
      'optimisticConcurrencyControl' => 'Prevents writing conflicts.',
      'statusField' => 'Updates of this field are logged in stream.',
      'textFilterFields' => 'Fields used by text search.',
      'stream' => 'Whether entity has a Stream.',
      'disabled' => 'Check if you don\'t need this entity in your system.',
      'linkAudited' => 'Creating related record and linking with existing record will be logged in Stream.',
      'linkMultipleField' => 'Link Multiple field provides a handy way to edit relations. Don\'t use it if you can have a large number of related records.',
      'entityType' => 'Base Plus - has Activities, History and Tasks panels.

Event - available in Calendar and Activities panel.',
      'countDisabled' => 'Total number won\'t be displayed on the list view. Can decrease loading time when the DB table is big.',
      'fullTextSearch' => 'Running rebuild is required.'
    ]
  ],
  'Export' => [
    'fields' => [
      'exportAllFields' => 'Export all fields',
      'fieldList' => 'Field List',
      'format' => 'Format',
      'status' => 'Status'
    ],
    'options' => [
      'format' => [
        'csv' => 'CSV',
        'xlsx' => 'XLSX (Excel)'
      ],
      'status' => [
        'Pending' => 'Pending',
        'Running' => 'Running',
        'Success' => 'Success',
        'Failed' => 'Failed'
      ]
    ],
    'messages' => [
      'exportProcessed' => 'Export has been processed. Download the [file]({url}).',
      'infoText' => 'The export is being processed in idle by cron. It can take some time to finish. Closing this modal dialog won\'t affect the execution process.'
    ]
  ],
  'Extension' => [
    'fields' => [
      'name' => 'Jméno',
      'version' => 'Verze',
      'description' => 'Popis',
      'isInstalled' => 'Instalováno',
      'checkVersionUrl' => 'An URL for checking new versions'
    ],
    'labels' => [
      'Uninstall' => 'Odebrat',
      'Install' => 'Nainstalovat'
    ],
    'messages' => [
      'uninstalled' => 'Rozšíření {name} bylo odebráno'
    ]
  ],
  'ExternalAccount' => [
    'labels' => [
      'Connect' => 'Připojit',
      'Disconnect' => 'Disconnect',
      'Disconnected' => 'Disconnected',
      'Connected' => 'Připojeno'
    ],
    'help' => []
  ],
  'FieldManager' => [
    'labels' => [
      'Dynamic Logic' => 'Dynamic Logic',
      'Name' => 'Name',
      'Label' => 'Label',
      'Type' => 'Type'
    ],
    'options' => [
      'dateTimeDefault' => [
        '' => 'None',
        'javascript: return this.dateTime.getNow(1);' => 'Now',
        'javascript: return this.dateTime.getNow(5);' => 'Now (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Now (15m)',
        'javascript: return this.dateTime.getNow(30);' => 'Now (30m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 hour',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 day',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 week'
      ],
      'dateDefault' => [
        '' => 'None',
        'javascript: return this.dateTime.getToday();' => 'Today',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 day',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 week',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 weeks',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 weeks',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 month',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 year'
      ],
      'barcodeType' => [
        'EAN13' => 'EAN-13',
        'EAN8' => 'EAN-8',
        'EAN5' => 'EAN-5',
        'EAN2' => 'EAN-2',
        'UPC' => 'UPC (A)',
        'UPCE' => 'UPC (E)',
        'pharmacode' => 'Pharmacode',
        'QRcode' => 'QR code'
      ],
      'globalRestrictions' => [
        'forbidden' => 'Forbidden',
        'internal' => 'Internal',
        'onlyAdmin' => 'Admin-only',
        'readOnly' => 'Read-only',
        'nonAdminReadOnly' => 'Non-admin read-only'
      ]
    ],
    'tooltips' => [
      'cutHeight' => 'A text higher then a specified value will be cut with a \'show more\' button displayed.',
      'urlStrip' => 'Strip a protocol and a trailing slash.',
      'audited' => 'Updates will be logged in stream.',
      'required' => 'Field will be mandatory. Can\'t be left empty.',
      'default' => 'Value will be set by default upon creating.',
      'min' => 'Min acceptable value.',
      'max' => 'Max acceptable value.',
      'seeMoreDisabled' => 'If not checked then long texts will be shortened.',
      'lengthOfCut' => 'How long text can be before it will be cut.',
      'maxLength' => 'Max acceptable length of text.',
      'before' => 'The date value should be before the date value of the specified field.',
      'after' => 'The date value should be after the date value of the specified field.',
      'readOnly' => 'Field value can\'t be specified by user. But can be calculated by formula.',
      'fileAccept' => 'Which file types to accept. It\'s possible to add custom items.',
      'barcodeLastChar' => 'For EAN-13 type.',
      'maxFileSize' => 'If empty or 0 then no limit.',
      'conversionDisabled' => 'The currency conversion action won\'t be applied to this field.',
      'pattern' => 'A regular expression to check a field value against. Define an expression or select a predefined one.',
      'options' => 'A list of possible values and their labels.',
      'optionsArray' => 'A list of possible values and their labels. If empty, the field will allow entering custom values.',
      'maxCount' => 'Maximum number of items allowed to be selected.',
      'displayAsList' => 'Each item in a new line.',
      'optionsVarchar' => 'A list of autocomplete values.'
    ],
    'fieldParts' => [
      'address' => [
        'street' => 'Street',
        'city' => 'City',
        'state' => 'State',
        'country' => 'Country',
        'postalCode' => 'Postal Code',
        'map' => 'Map'
      ],
      'personName' => [
        'salutation' => 'Salutation',
        'first' => 'First',
        'middle' => 'Middle',
        'last' => 'Last'
      ],
      'currency' => [
        'converted' => '(Converted)',
        'currency' => '(Currency)'
      ],
      'datetimeOptional' => [
        'date' => 'Date'
      ]
    ],
    'fieldInfo' => [
      'varchar' => 'A single-line text.',
      'enum' => 'Selectbox, only one value can be selected.',
      'text' => 'A multiline text with markdown support.',
      'date' => 'Date w/o time.',
      'datetime' => 'Date and time',
      'currency' => 'A currency value. A float number with a currency code.',
      'int' => 'A whole number.',
      'float' => 'A number with a decimal part.',
      'bool' => 'A checkbox. Two possible values: true and false.',
      'multiEnum' => 'A list of values, multiple values can be selected. The list is ordered.',
      'checklist' => 'A list of checkboxes.',
      'array' => 'A list of values, similar to Multi-Enum field.',
      'address' => 'An address with street, city, state, postal code and country.',
      'url' => 'For storing links.',
      'wysiwyg' => 'A text with HTML support.',
      'file' => 'For file uploading.',
      'image' => 'For image uploading.',
      'attachmentMultiple' => 'Allows to upload multiple files.',
      'number' => 'An auto-incrementing number of string type with a possible prefix and specific length.',
      'autoincrement' => 'A generated read-only auto-incrementing integer number.',
      'barcode' => 'A barcode. Can be printed to PDF.',
      'email' => 'A set of email addresses with their parameters: Opted-out, Invalid, Primary.',
      'phone' => 'A set of phone numbers with their parameters: Type, Opted-out, Invalid, Primary.',
      'foreign' => 'A field of a related record. Read-only.',
      'link' => 'A record related through Belongs-To (many-to-one or one-to-one) relationship.',
      'linkParent' => 'A record related through Belongs-To-Parent relationship. Can be of different entity types.',
      'linkMultiple' => 'A set of records related through Has-Many (many-to-many or one-to-many) relationship. Not all relationships have their link-multiple fields. Only those do, where Link-Multiple parameter(s) is enabled.'
    ]
  ],
  'Formula' => [
    'labels' => [
      'Check Syntax' => 'Check Syntax',
      'Run' => 'Run'
    ],
    'fields' => [
      'target' => 'Target',
      'targetType' => 'Target Type',
      'script' => 'Script',
      'output' => 'Output',
      'error' => 'Error'
    ],
    'messages' => [
      'runSuccess' => 'Executed successfully.',
      'runError' => 'Error.',
      'checkSyntaxSuccess' => 'Syntax is correct.',
      'checkSyntaxError' => 'Syntax error.',
      'emptyScript' => 'Script is empty.'
    ],
    'tooltips' => [
      'output' => 'Print values with the function `output\\printLine`.'
    ]
  ],
  'Global' => [
    'scopeNames' => [
      'Note' => 'Note',
      'Email' => 'Email',
      'User' => 'Uživatel',
      'Team' => 'Tým',
      'Role' => 'Role',
      'EmailTemplate' => 'Emailová šablona',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Emailový účet',
      'EmailAccountScope' => 'Emailový účet',
      'OutboundEmail' => 'Odchozí email',
      'ScheduledJob' => 'Naplánovaná činnost',
      'ExternalAccount' => 'Externí účet',
      'Extension' => 'Rozšíření',
      'Dashboard' => 'Nástěnka',
      'InboundEmail' => 'Účet příchozích emailů',
      'Stream' => 'Stream',
      'Import' => 'Import',
      'ImportError' => 'Import Error',
      'Template' => 'Template',
      'Job' => 'Job',
      'EmailFilter' => 'Email Filter',
      'Portal' => 'Portal',
      'PortalRole' => 'Portal Role',
      'Attachment' => 'Attachment',
      'EmailFolder' => 'Email Folder',
      'PortalUser' => 'Portal User',
      'ApiUser' => 'API User',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Record',
      'PasswordChangeRequest' => 'Password Change Request',
      'ActionHistoryRecord' => 'Action History Record',
      'AuthToken' => 'Auth Token',
      'UniqueId' => 'Unique ID',
      'LastViewed' => 'Last Viewed',
      'Settings' => 'Settings',
      'FieldManager' => 'Field Manager',
      'Integration' => 'Integration',
      'LayoutManager' => 'Layout Manager',
      'EntityManager' => 'Entity Manager',
      'Export' => 'Export',
      'DynamicLogic' => 'Dynamic Logic',
      'DashletOptions' => 'Dashlet Options',
      'Admin' => 'Admin',
      'Global' => 'Global',
      'Preferences' => 'Preferences',
      'EmailAddress' => 'Email Address',
      'PhoneNumber' => 'Phone Number',
      'AuthLogRecord' => 'Auth Log Record',
      'AuthFailLogRecord' => 'Auth Fail Log Record',
      'LeadCapture' => 'Lead Capture Entry Point',
      'LeadCaptureLogRecord' => 'Lead Capture Log Record',
      'ArrayValue' => 'Array Value',
      'DashboardTemplate' => 'Dashboard Template',
      'Currency' => 'Currency',
      'LayoutSet' => 'Layout Set',
      'Webhook' => 'Webhook',
      'Mass Action' => 'Mass Action',
      'Account' => 'Společnosti',
      'Contact' => 'Kontakt',
      'Lead' => 'Stopa',
      'Target' => 'Cíl',
      'Opportunity' => 'Případ',
      'Meeting' => 'Schůzka',
      'Calendar' => 'Kalendář',
      'Call' => 'Volání',
      'Task' => 'Úkol',
      'Case' => 'Událost',
      'Document' => 'Dokument',
      'DocumentFolder' => 'Složka dokumentů',
      'Campaign' => 'Kampaň',
      'TargetList' => 'Cílový seznam',
      'MassEmail' => 'Mass Email',
      'EmailQueueItem' => 'Email Queue Item',
      'CampaignTrackingUrl' => 'Tracking URL',
      'Activities' => 'Activities',
      'KnowledgeBaseArticle' => 'Knowledge Base Article',
      'KnowledgeBaseCategory' => 'Knowledge Base Category',
      'CampaignLogRecord' => 'Campaign Log Record',
      'TestovaciEntita' => 'TestovaciEntita',
      'ProductionPlanning' => 'Plánování výroby',
      'Warehouse' => 'Sklad',
      'OrderItem' => 'Položka objednávky',
      'Components' => 'Komponent',
      'WarehouseItem' => 'Položka skladu',
      'ProductionPlanningItem' => 'Položka plánování výroby',
      'EquipmentClassList' => 'Třída vybavení',
      'EquipmentDefinitionList' => 'Definice vybavení',
      'EquipmentClassesPropertiesElements' => 'Vlastnost třídy vybavení',
      'EqipmentDefinitionsPropertiesFromClasses' => 'Záznam vlastnosti',
      'Pokusna' => 'Pokusna',
      'MaterialClasses' => 'Třída materiálu',
      'MaterialDefinitions' => 'Definice materiálu',
      'MaterialProperties' => 'Vlastnost třídy materiálu',
      'MaterialDefinitionsPropertiesFromClasses' => 'Záznam vlastností definic materiálu',
      'EquipmentDefinitionsPropertiesFromClasses' => 'Záznam vlastností definic vybavení',
      'MaterialLots' => 'Dávka materiálu',
      'PersonnelClasses' => 'Třída personálu',
      'PersonnelDefinitions' => 'Definice personálu',
      'PersonnelProperties' => 'Vlastnost třídy personálu',
      'ProductDefinitions' => 'Definice produktu',
      'ProductSegments' => 'Segment produktu',
      'Orders' => 'Objednávka',
      'PersonnelDefinitionsPropertiesFromClasses' => 'Záznam vlastností definic personálu',
      'ProcessSegment' => 'Segment procesu',
      'ProcessSegmentEquipmentItem' => 'Položka vybavení segmentu procesu',
      'ProcessSegmentMaterialItem' => 'Položka materiálu segmentu procesu',
      'ProcessSegmentPersonnelItem' => 'Položka personálu segmentu procesu',
      'KeyPerformanceIndicator' => 'KPI',
      'ProductSegmentMaterialItem' => 'Položka materiálu',
      'ProductSegmentEquipmentItem' => 'Položka vybavení (Segment produktu)',
      'ProductSegmentPersonnelItem' => 'Položka personálu (Segment produktu)',
      'EquipmentClasses' => 'Třída vybavení',
      'EquipmentDefinitions' => 'Definice vybavení',
      'EquipmentProperties' => 'Vlastnost třídy vybavení'
    ],
    'scopeNamesPlural' => [
      'Note' => 'Notes',
      'Email' => 'Emaily',
      'User' => 'Uživatelé',
      'Team' => 'Týmy',
      'Role' => 'Role',
      'EmailTemplate' => 'Emailové šablony',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Emailové účty',
      'EmailAccountScope' => 'Emailové účty',
      'OutboundEmail' => 'Odchozí emaily',
      'ScheduledJob' => 'Naplánované činnosti',
      'ExternalAccount' => 'Externí účty',
      'Extension' => 'Rozšíření',
      'Dashboard' => 'Nástěnka',
      'InboundEmail' => 'Účty příchozích emailů',
      'EmailAddress' => 'Email Addresses',
      'PhoneNumber' => 'Phone Numbers',
      'Stream' => 'Stream',
      'Import' => 'Výsledky importu',
      'ImportError' => 'Import Errors',
      'Template' => 'Templates',
      'Job' => 'Jobs',
      'EmailFilter' => 'Email Filters',
      'Portal' => 'Portals',
      'PortalRole' => 'Portal Roles',
      'Attachment' => 'Attachments',
      'EmailFolder' => 'Email Folders',
      'PortalUser' => 'Portal Users',
      'ApiUser' => 'API Users',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Records',
      'PasswordChangeRequest' => 'Password Change Requests',
      'ActionHistoryRecord' => 'Action History',
      'AuthToken' => 'Auth Tokens',
      'UniqueId' => 'Unique IDs',
      'LastViewed' => 'Last Viewed',
      'AuthLogRecord' => 'Auth Log',
      'AuthFailLogRecord' => 'Auth Fail Log',
      'LeadCapture' => 'Lead Capture',
      'LeadCaptureLogRecord' => 'Lead Capture Log',
      'ArrayValue' => 'Array Values',
      'DashboardTemplate' => 'Dashboard Templates',
      'Currency' => 'Currency',
      'LayoutSet' => 'Layout Sets',
      'Webhook' => 'Webhooks',
      'Account' => 'Organizace',
      'Contact' => 'Kontakty',
      'Lead' => 'Stopy',
      'Target' => 'Cíle',
      'Opportunity' => 'Případy',
      'Meeting' => 'Schůzky',
      'Calendar' => 'Kalendáře',
      'Call' => 'Volání',
      'Task' => 'Úkoly',
      'Case' => 'Události',
      'Document' => 'Dokumenty',
      'DocumentFolder' => 'Složky dokumentů',
      'Campaign' => 'Kampaně',
      'TargetList' => 'Cílové seznamy',
      'MassEmail' => 'Mass Emails',
      'EmailQueueItem' => 'Email Queue Items',
      'CampaignTrackingUrl' => 'Tracking URLs',
      'Activities' => 'Activities',
      'KnowledgeBaseArticle' => 'Knowledge Base',
      'KnowledgeBaseCategory' => 'Knowledge Base Categories',
      'CampaignLogRecord' => 'Campaign Log Records',
      'TestovaciEntita' => 'TestovaciEntitas',
      'ProductionPlanning' => 'Plánování Výroby',
      'Warehouse' => 'Sklady',
      'OrderItem' => 'Položky objednávky',
      'Components' => 'Komponenty',
      'WarehouseItem' => 'Položky skladu',
      'ProductionPlanningItem' => 'Položky plánování výroby',
      'EquipmentClassList' => 'Třídy vybavení',
      'EquipmentDefinitionList' => 'Definice vybavení',
      'EquipmentClassesPropertiesElements' => 'Vlastnosti tříd vybavení',
      'EqipmentDefinitionsPropertiesFromClasses' => 'Záznamy vlastností',
      'Pokusna' => 'Pokusnas',
      'MaterialClasses' => 'Třídy materiálu',
      'MaterialDefinitions' => 'Definice materiálu',
      'MaterialProperties' => 'Vlastnosti tříd materiálů',
      'MaterialDefinitionsPropertiesFromClasses' => 'Záznamy vlastností definic materiálu',
      'EquipmentDefinitionsPropertiesFromClasses' => 'Záznamy vlastností definic vybavení',
      'MaterialLots' => 'Dávky materiálu',
      'PersonnelClasses' => 'Třídy personálu',
      'PersonnelDefinitions' => 'Definice personálu',
      'PersonnelProperties' => 'Vlastnosti tříd personálu',
      'ProductDefinitions' => 'Definice produktů',
      'ProductSegments' => 'Segmenty produktů',
      'Orders' => 'Objednávky',
      'PersonnelDefinitionsPropertiesFromClasses' => 'Záznamy vlastností definic personálu',
      'ProcessSegment' => 'Segmenty procesu',
      'ProcessSegmentEquipmentItem' => 'Položky vybavení segmentu procesu',
      'ProcessSegmentMaterialItem' => 'Položky materiálu segmentu procesu',
      'ProcessSegmentPersonnelItem' => 'Položky personálu segmentu procesu',
      'KeyPerformanceIndicator' => 'KPI',
      'ProductSegmentMaterialItem' => 'Položka materiálu',
      'ProductSegmentEquipmentItem' => 'Položky vybavení (Segment produktu)',
      'ProductSegmentPersonnelItem' => 'Položky personálu (Segment produktu)',
      'EquipmentClasses' => 'Třídy vybavení',
      'EquipmentDefinitions' => 'Definice vybavení',
      'EquipmentProperties' => 'Vlastnosti tříd vybavení'
    ],
    'labels' => [
      'Sort' => 'Sort',
      'Misc' => 'Různé',
      'Merge' => 'Sloučit',
      'None' => '-',
      'Home' => 'Home',
      'by' => 'dle',
      'Proceed' => 'Proceed',
      'Saved' => 'Uloženo',
      'Error' => 'Chyba',
      'Select' => 'Vybrat',
      'Not valid' => 'Neplatné',
      'Please wait...' => 'Prosím počkejte...',
      'Please wait' => 'Prosím počkejte',
      'Attached' => 'Attached',
      'Loading...' => 'Nahrávání...',
      'Uploading...' => 'Uploaduje se...',
      'Sending...' => 'Posíláse...',
      'Merging...' => 'Slučuje se...',
      'Merged' => 'Sloučeno',
      'Removed' => 'Odstraněno',
      'Posted' => 'Zasláno',
      'Linked' => 'Nalinkováno',
      'Unlinked' => 'Odlinkováno',
      'Done' => 'Hovoto',
      'Access denied' => 'Přístup odepřen',
      'Not found' => 'Not found',
      'Access' => 'Přístup',
      'Are you sure?' => 'Jste si jisti?',
      'Record has been removed' => 'Záznam byl odstraněn',
      'Wrong username/password' => 'Neplatné přihlašovací jméno/heslo',
      'Post cannot be empty' => 'Příspěvek nemůže být prázdný',
      'Removing...' => 'Odstraňování...',
      'Unlinking...' => 'Odlinkování...',
      'Posting...' => 'Zasílání...',
      'Username can not be empty!' => 'Přihlašovací jméno nemůže být prázdné!',
      'Cache is not enabled' => 'Cache není povolena',
      'Cache has been cleared' => 'Cache byla vyčištěna',
      'Rebuild has been done' => 'Přestavba byla dokončena',
      'Return to Application' => 'Return to Application',
      'Saving...' => 'Ukládání...',
      'Modified' => 'Modifikováno',
      'Created' => 'Vytvořeno',
      'Create' => 'Vytvořit',
      'create' => 'vytvořit',
      'Overview' => 'Přehled',
      'Details' => 'Detaily',
      'Add Field' => 'Přidat pole',
      'Add Dashlet' => 'Přidat panel',
      'Filter' => 'Filtr',
      'Edit Dashboard' => 'Upravit nástěnku',
      'Add' => 'Přidat',
      'Add Item' => 'Add Item',
      'Reset' => 'Reset',
      'Menu' => 'Menu',
      'More' => 'Více',
      'Search' => 'Hledat',
      'Only My' => 'Pouze moje',
      'Open' => 'Otevřený',
      'Admin' => 'Admin',
      'About' => 'O EspoCRM',
      'Refresh' => 'Obnovit',
      'Remove' => 'Odebrat',
      'Restore' => 'Restore',
      'Options' => 'Možnosti',
      'Username' => 'Uživatelské jméno',
      'Password' => 'heslo',
      'Login' => 'Přihlásit',
      'Log Out' => 'Odhlásit',
      'Preferences' => 'Předvolby',
      'State' => 'Kraj',
      'Street' => 'Ulice',
      'Country' => 'Země',
      'City' => 'Město',
      'PostalCode' => 'PSČ',
      'Followed' => 'Sledováno',
      'Follow' => 'Sledovat',
      'Followers' => 'Sledující',
      'Clear Local Cache' => 'Vyčistit lokální cache',
      'Actions' => 'Akce',
      'Delete' => 'Smazat',
      'Update' => 'Aktualizovat',
      'Save' => 'Uložit',
      'Edit' => 'Upravit',
      'View' => 'Zobrazit',
      'Cancel' => 'Zrušit',
      'Apply' => 'Použít',
      'Unlink' => 'Odlinkovat',
      'Mass Update' => 'Hromadný update',
      'Export' => 'Export',
      'No Data' => 'Žádná data',
      'No Access' => 'Nepřístupno',
      'All' => 'Vše',
      'Active' => 'Aktivní',
      'Inactive' => 'Neaktivní',
      'Write your comment here' => 'Napište Vás komentář',
      'Post' => 'Poslat',
      'Stream' => 'Stream',
      'Show more' => 'Ukázat více',
      'Dashlet Options' => 'Možnosti panelu',
      'Full Form' => 'Plný formulář',
      'Insert' => 'Vlořiz',
      'Person' => 'Osoba',
      'First Name' => 'Křestní jméno',
      'Last Name' => 'Příjmení',
      'Middle Name' => 'Middle Name',
      'Original' => 'Originál',
      'You' => 'Vy',
      'you' => 'vy',
      'change' => 'změna',
      'Change' => 'Změna',
      'Primary' => 'Primární',
      'Save Filter' => 'Uložit filtr',
      'Administration' => 'Administrace',
      'Run Import' => 'Spustit import',
      'Duplicate' => 'Duplikovat',
      'Notifications' => 'Upozornění',
      'Mark all read' => 'Označit jako přečtené',
      'See more' => 'Zobrazit více',
      'Today' => 'Dnes',
      'Tomorrow' => 'Zítra',
      'Yesterday' => 'Včera',
      'Submit' => 'Vložit',
      'Close' => 'Zavřít',
      'Yes' => 'Ano',
      'No' => 'Ne',
      'Select All Results' => 'Vybrat celý výsledek',
      'Value' => 'Hodnota',
      'Current version' => 'Současná verze',
      'List View' => 'Seznamový pohled',
      'Tree View' => 'Stromový pohled',
      'Unlink All' => 'Odlinkovat vše',
      'Total' => 'Celkem',
      'Print to PDF' => 'Print to PDF',
      'Default' => 'Default',
      'Number' => 'Number',
      'From' => 'From',
      'To' => 'To',
      'Create Post' => 'Create Post',
      'Previous Entry' => 'Previous Entry',
      'Next Entry' => 'Next Entry',
      'View List' => 'View List',
      'Attach File' => 'Attach File',
      'Skip' => 'Skip',
      'Attribute' => 'Attribute',
      'Function' => 'Function',
      'Self-Assign' => 'Self-Assign',
      'Self-Assigned' => 'Self-Assigned',
      'Expand' => 'Expand',
      'Collapse' => 'Collapse',
      'New notifications' => 'New notifications',
      'Manage Categories' => 'Manage Categories',
      'Manage Folders' => 'Manage Folders',
      'Convert to' => 'Convert to',
      'View Personal Data' => 'View Personal Data',
      'Personal Data' => 'Personal Data',
      'Erase' => 'Erase',
      'View Followers' => 'View Followers',
      'Convert Currency' => 'Convert Currency',
      'View on Map' => 'View on Map',
      'Preview' => 'Preview',
      'Move Over' => 'Move Over',
      'Up' => 'Up',
      'Save & Continue Editing' => 'Save & Continue Editing',
      'Save & New' => 'Save & New',
      'Field' => 'Field',
      'Resolution' => 'Resolution',
      'Resolve Conflict' => 'Resolve Conflict',
      'Download' => 'Download',
      'Scheduler' => 'Scheduler',
      'Create InboundEmail' => 'Vytvořit příchodí email',
      'Activities' => 'Aktivity',
      'History' => 'Historie',
      'Attendees' => 'Účastníci',
      'Schedule Meeting' => 'Plánovaná schůzka',
      'Schedule Call' => 'Plánované volání',
      'Compose Email' => 'Sestavit email',
      'Log Meeting' => 'Zapsat schůzku',
      'Log Call' => 'Zapsat volání',
      'Archive Email' => 'Archivovat email',
      'Create Task' => 'Vytvořit úkol',
      'Tasks' => 'Úkoly'
    ],
    'messages' => [
      'pleaseWait' => 'Prosím počkejte...',
      'posting' => 'Posting...',
      'loading' => 'Loading...',
      'saving' => 'Saving...',
      'confirmLeaveOutMessage' => 'Opravdu chcete opustit formulář?',
      'notModified' => 'Záznam nebyl upraven',
      'duplicate' => 'Vytvářený záznam je duplicitní',
      'dropToAttach' => 'Drop to attach',
      'fieldUrlExceedsMaxLength' => 'Encoded URL exceeds max length of {maxLength}',
      'fieldNotMatchingPattern' => '{field} does not match the pattern `{pattern}`',
      'fieldNotMatchingPattern$noBadCharacters' => '{field} contains not allowed characters',
      'fieldNotMatchingPattern$noAsciiSpecialCharacters' => '{field} should not contain ASCII special characters',
      'fieldNotMatchingPattern$latinLetters' => '{field} can contain only latin letters',
      'fieldNotMatchingPattern$latinLettersDigits' => '{field} can contain only latin letters and digits',
      'fieldNotMatchingPattern$latinLettersDigitsWhitespace' => '{field} can contain only latin letters, digits and whitespace',
      'fieldNotMatchingPattern$latinLettersWhitespace' => '{field} can contain only latin letters and whitespace',
      'fieldNotMatchingPattern$digits' => '{field} can contain only digits',
      'fieldInvalid' => '{field} is invalid',
      'fieldIsRequired' => '{field} je povinné',
      'fieldPhoneInvalidCharacters' => 'Only digits, latin letters and characters `-+_@:#().` are allowed',
      'fieldShouldBeEmail' => '{field} má být platný email',
      'fieldShouldBeFloat' => '{field} má být platný float',
      'fieldShouldBeInt' => '{field} má být platný integer',
      'fieldShouldBeDate' => '{field} má být platné datum',
      'fieldShouldBeDatetime' => '{field} má být platné date/time',
      'fieldShouldAfter' => '{field} má být po {otherField}',
      'fieldShouldBefore' => '{field} má být před {otherField}',
      'fieldShouldBeBetween' => '{field} má být mezi {min} a {max}',
      'fieldShouldBeLess' => '{field} má být menší než {value}',
      'fieldShouldBeGreater' => '{field} má být většá než {value}',
      'fieldBadPasswordConfirm' => '{field} není správně potvrzeno',
      'fieldMaxFileSizeError' => 'File should not exceed {max} Mb',
      'fieldValueDuplicate' => 'Duplicate value',
      'fieldIsUploading' => 'Uploading in progress',
      'fieldExceedsMaxCount' => 'Count exceeds max allowed {maxCount}',
      'arrayItemMaxLength' => 'Item shouldn\'t be longer than {max} characters',
      'resetPreferencesDone' => 'Předvolby byly resetovány na výchozí.',
      'confirmation' => 'Opravdu to chcete?',
      'unlinkAllConfirmation' => 'Opravdu chcete odlinkovat všechny související záznamy?',
      'resetPreferencesConfirmation' => 'Opravdu chcete resetovat předvolby na výchozí?',
      'removeRecordConfirmation' => 'Opravdu chcete smazat záznam?',
      'unlinkRecordConfirmation' => 'Opravdu chcete odlinkovat všechny související záznamy?',
      'removeSelectedRecordsConfirmation' => 'Opravdu chcete odebrat vybrané záznamy?',
      'unlinkSelectedRecordsConfirmation' => 'Are you sure you want to unlink selected records?',
      'massUpdateResult' => '{count} záznamů bylo upraveno',
      'massUpdateResultSingle' => '{count} záznam byl upraven',
      'recalculateFormulaConfirmation' => 'Are you sure you want to recalculate formula for selected records?',
      'noRecordsUpdated' => 'Žádné záznamy nebyly upraveny',
      'massRemoveResult' => '{count} záznamů bylo odstraněno',
      'massRemoveResultSingle' => '{count} záznam byl odstraněn',
      'noRecordsRemoved' => 'Žádné záznamy nebyly odstraněny',
      'clickToRefresh' => 'Kliknout pro obnovení',
      'writeYourCommentHere' => 'Write your comment here',
      'writeMessageToUser' => 'Write a message to {user}',
      'writeMessageToSelf' => 'Write a message on your stream',
      'typeAndPressEnter' => 'Type & press enter',
      'checkForNewNotifications' => 'Check for new notifications',
      'checkForNewNotes' => 'Check for stream updates',
      'internalPost' => 'Post will be seen only by internal users',
      'internalPostTitle' => 'Post is seen only by internal users',
      'done' => 'Done',
      'notUpdated' => 'Not updated',
      'confirmMassFollow' => 'Are you sure you want to follow selected records?',
      'confirmMassUnfollow' => 'Are you sure you want to unfollow selected records?',
      'massFollowResult' => '{count} records now are followed',
      'massUnfollowResult' => '{count} records now are not followed',
      'massFollowResultSingle' => '{count} record now is followed',
      'massUnfollowResultSingle' => '{count} record now is not followed',
      'massFollowZeroResult' => 'Nothing got followed',
      'massUnfollowZeroResult' => 'Nothing got unfollowed',
      'erasePersonalDataConfirmation' => 'Checked fields will be erased permanently. Are you sure?',
      'maintenanceMode' => 'The application currently is in maintenance mode. Only admin users have access.

Maintenance mode can be disabled at Administration → Settings.',
      'resolveSaveConflict' => 'The record has been modified. You need to resolve the conflict before you can save the record.',
      'massPrintPdfMaxCountError' => 'Can\'t print more that {maxCount} records.',
      'massActionProcessed' => 'Mass action has been processed.',
      'validationFailure' => 'Backend validation failure.

Field: `{field}`
Validation: `{type}`',
      'confirmAppRefresh' => 'The application has been updated. It is recommended to refresh the page to ensure the proper functioning.',
      'error404' => 'The url you requested can\'t be handled.',
      'error403' => 'You don\'t have an access to this area.',
      'streamPostInfo' => 'Napište <strong>@username</strong> pro zmínění uživatelů v příspěvku.

Dostupná syntaxe:
`<code>code</code>`
**<strong>tučný text</strong>**
*<em>kurzíva</em>*
~<del>smazaný text</del>~
> citace
[text](url)'
    ],
    'boolFilters' => [
      'onlyMy' => 'Pouze moje',
      'onlyMyTeam' => 'My Team',
      'followed' => 'Sledované'
    ],
    'presetFilters' => [
      'followed' => 'Sledované',
      'all' => 'All'
    ],
    'massActions' => [
      'remove' => 'Odstranit',
      'merge' => 'Sloučit',
      'update' => 'Update',
      'massUpdate' => 'Hromadně upravit',
      'unlink' => 'Unlink',
      'export' => 'Export',
      'follow' => 'Follow',
      'unfollow' => 'Unfollow',
      'convertCurrency' => 'Convert Currency',
      'recalculateFormula' => 'Recalculate Formula',
      'printPdf' => 'Print to PDF'
    ],
    'fields' => [
      'name' => 'Název',
      'firstName' => 'Křestní jméno',
      'lastName' => 'Příjmení',
      'middleName' => 'Middle Name',
      'salutationName' => 'Oslovení',
      'assignedUser' => 'Přiřazený uživatel',
      'assignedUsers' => 'Assigned Users',
      'emailAddress' => 'Email',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'assignedUserName' => 'Přiřazená uživatelská jména',
      'teams' => 'Týmy',
      'createdAt' => 'Vytvořeno',
      'modifiedAt' => 'Upraveno',
      'createdBy' => 'Vytvořil',
      'modifiedBy' => 'Upravil',
      'description' => 'Popis',
      'address' => 'Adresa',
      'phoneNumber' => 'Telefon',
      'phoneNumberMobile' => 'Telefon (Mobil)',
      'phoneNumberHome' => 'Telefon (Domácí)',
      'phoneNumberFax' => 'Telefon (Fax)',
      'phoneNumberOffice' => 'Telefon (Kancelář)',
      'phoneNumberOther' => 'Telefon (Další)',
      'phoneNumberData' => 'Phone Number Data',
      'phoneNumberIsOptedOut' => 'Phone Number is Opted-Out',
      'order' => 'Pořadí',
      'parent' => 'Rodič',
      'children' => 'Potomek',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Names',
      'types' => 'Types',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => 'Město',
      'billingAddressCountry' => 'Země',
      'billingAddressPostalCode' => 'PSČ',
      'billingAddressState' => 'Kraj',
      'billingAddressStreet' => 'Ulice',
      'billingAddressMap' => 'Map',
      'addressCity' => 'Město',
      'addressStreet' => 'Ulice',
      'addressCountry' => 'Země',
      'addressState' => 'Kraj',
      'addressPostalCode' => 'PSČ',
      'addressMap' => 'Map',
      'shippingAddressCity' => 'Město (doručovací)',
      'shippingAddressStreet' => 'Ulice (doručovací)',
      'shippingAddressCountry' => 'Země (doručovací)',
      'shippingAddressState' => 'Kraj (doručovací)',
      'shippingAddressPostalCode' => 'PSČ (doručovací)',
      'shippingAddressMap' => 'Map (Shipping)'
    ],
    'links' => [
      'assignedUser' => 'Přiřazený uživatel',
      'createdBy' => 'Vytvořil',
      'modifiedBy' => 'Upravil',
      'team' => 'Tým',
      'roles' => 'Role',
      'teams' => 'Týmy',
      'users' => 'Uživatelé',
      'parent' => 'Rodič',
      'children' => 'Potomek',
      'contacts' => 'Kontakty',
      'opportunities' => 'Případy',
      'leads' => 'Stopy',
      'meetings' => 'Schůzky',
      'calls' => 'Volání',
      'tasks' => 'Úkoly',
      'emails' => 'Emaily',
      'accounts' => 'Organizace',
      'cases' => 'Události',
      'documents' => 'Dokumenty',
      'account' => 'Organizace',
      'opportunity' => 'Případ',
      'contact' => 'Kontakt'
    ],
    'dashlets' => [
      'Stream' => 'Stream',
      'Emails' => 'My Inbox',
      'Iframe' => 'Iframe',
      'Records' => 'Record List',
      'Leads' => 'Moje stopy',
      'Opportunities' => 'Moje případy',
      'Tasks' => 'Moje úkoly',
      'Cases' => 'Moje události',
      'Calendar' => 'Kalendář',
      'Calls' => 'Moje volání',
      'Meetings' => 'Moje schůzky',
      'OpportunitiesByStage' => 'Případy podle stavu',
      'OpportunitiesByLeadSource' => 'Případy podle zdroje',
      'SalesByMonth' => 'Prodeje za měsíc',
      'SalesPipeline' => 'Prodejní pipeline',
      'Activities' => 'My Activities'
    ],
    'notificationMessages' => [
      'assign' => '{entityType} {entity} Ti byla přiřazena.',
      'emailReceived' => 'Email přijat od {from}',
      'entityRemoved' => '{user} removed {entityType} {entity}'
    ],
    'streamMessages' => [
      'post' => '{user} poslal {entityType} {entity}',
      'attach' => '{user} připojený {entityType} {entity}',
      'status' => '{user} upravil {field} k {entityType} {entity}',
      'update' => '{user} upravil {entityType} {entity}',
      'postTargetTeam' => '{user} posted to team {target}',
      'postTargetTeams' => '{user} posted to teams {target}',
      'postTargetPortal' => '{user} posted to portal {target}',
      'postTargetPortals' => '{user} posted to portals {target}',
      'postTarget' => '{user} posted to {target}',
      'postTargetYou' => '{user} posted to you',
      'postTargetYouAndOthers' => '{user} posted to {target} and you',
      'postTargetAll' => '{user} posted to all',
      'postTargetSelf' => '{user} self-posted',
      'postTargetSelfAndOthers' => '{user} posted to {target} and themself',
      'mentionInPost' => '{user} zmínil {mentioned} v {entityType} {entity}',
      'mentionYouInPost' => '{user} mentioned you in {entityType} {entity}',
      'mentionInPostTarget' => '{user} mentioned {mentioned} in post',
      'mentionYouInPostTarget' => '{user} mentioned you in post to {target}',
      'mentionYouInPostTargetAll' => '{user} mentioned you in post to all',
      'mentionYouInPostTargetNoTarget' => '{user} mentioned you in post',
      'create' => '{user} vytvořil {entityType} {entity}',
      'createThis' => '{user} vytvořil {entityType}',
      'createAssignedThis' => '{user} vytvořil {entityType} přiřazené {assignee}',
      'createAssigned' => '{user} vytvořil {entityType} {entity} přiřazené {assignee}',
      'createAssignedYou' => '{user} created {entityType} {entity} assigned to you',
      'createAssignedThisSelf' => '{user} created this {entityType} self-assigned',
      'createAssignedSelf' => '{user} created {entityType} {entity} self-assigned',
      'assign' => '{user} přiřadil {entityType} {entity} {assignee}',
      'assignThis' => '{user} přiřadil {entityType} {assignee}',
      'assignYou' => '{user} assigned {entityType} {entity} to you',
      'assignThisVoid' => '{user} unassigned this {entityType}',
      'assignVoid' => '{user} unassigned {entityType} {entity}',
      'assignThisSelf' => '{user} self-assigned this {entityType}',
      'assignSelf' => '{user} self-assigned {entityType} {entity}',
      'postThis' => '{user} poslal',
      'attachThis' => '{user} připojil',
      'statusThis' => '{user} upravil {field}',
      'updateThis' => '{user} upravil {entityType}',
      'createRelatedThis' => '{user} vytvořil {relatedEntityType} {relatedEntity} související s {entityType}',
      'createRelated' => '{user} vytvořil {relatedEntityType} {relatedEntity} související s {entityType} {entity}',
      'relate' => '{user} linked {relatedEntityType} {relatedEntity} with {entityType} {entity}',
      'relateThis' => '{user} linked {relatedEntityType} {relatedEntity} with this {entityType}',
      'emailReceivedFromThis' => 'Email přijat od {from}',
      'emailReceivedInitialFromThis' => 'Tento email byl přijat od {from}, vytvořen {entityType}',
      'emailReceivedThis' => 'Email přijat',
      'emailReceivedInitialThis' => 'Email přijat, vytvořen {entityType}',
      'emailReceivedFrom' => 'Email přijat od {from}, související s {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email přijat od {from}, vytvořeno {entityType} {entity}',
      'emailReceived' => 'Email přijat, související s {entityType} {entity}',
      'emailReceivedInitial' => 'Email přijat: {entityType} {entity} vytvořeno',
      'emailReceivedInitialFrom' => 'Email přijak od {from}, vytvořeno {entityType} {entity}',
      'emailSent' => '{by} poslal email související s {entityType} {entity}',
      'emailSentThis' => '{by} poslal email'
    ],
    'streamMessagesMale' => [
      'postTargetSelfAndOthers' => '{user} posted to {target} and himself'
    ],
    'streamMessagesFemale' => [
      'postTargetSelfAndOthers' => '{user} posted to {target} and herself'
    ],
    'lists' => [
      'monthNames' => [
        0 => 'Leden',
        1 => 'Únor',
        2 => 'Březen',
        3 => 'Duben',
        4 => 'Květen',
        5 => 'Červen',
        6 => 'červenec',
        7 => 'Srpen',
        8 => 'Září',
        9 => 'Říjen',
        10 => 'Listopad',
        11 => 'Prosinec'
      ],
      'monthNamesShort' => [
        0 => 'Led',
        1 => 'Úno',
        2 => 'Bře',
        3 => 'Dub',
        4 => 'Kvě',
        5 => 'Črv',
        6 => 'Črc',
        7 => 'Srp',
        8 => 'Zář',
        9 => 'Říj',
        10 => 'Lis',
        11 => 'Pro'
      ],
      'dayNames' => [
        0 => 'Neděle',
        1 => 'Pondělí',
        2 => 'Úterý',
        3 => 'Středa',
        4 => 'Čtvrtek',
        5 => 'Pátek',
        6 => 'Sobota'
      ],
      'dayNamesShort' => [
        0 => 'Ned',
        1 => 'Pon',
        2 => 'Úte',
        3 => 'Stř',
        4 => 'Čtv',
        5 => 'Pát',
        6 => 'Sob'
      ],
      'dayNamesMin' => [
        0 => 'Ne',
        1 => 'Po',
        2 => 'Út',
        3 => 'St',
        4 => 'Čt',
        5 => 'Pá',
        6 => 'So'
      ]
    ],
    'durationUnits' => [
      'd' => 'd',
      'h' => 'h',
      'm' => 'm',
      's' => 's'
    ],
    'options' => [
      'salutationName' => [
        'Mr.' => 'Pan',
        'Mrs.' => 'Paní',
        'Ms.' => 'Slečna',
        'Dr.' => 'Doktor(ka)'
      ],
      'language' => [
        'ar_AR' => 'Arabic',
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbaijani',
        'be_BY' => 'Belarusian',
        'bg_BG' => 'Bulgarian',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnian',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Czech',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Danish',
        'de_DE' => 'German',
        'el_GR' => 'Greek',
        'en_GB' => 'English (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonian',
        'eu_ES' => 'Basque',
        'fa_IR' => 'Persian',
        'fi_FI' => 'Finnish',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irish',
        'gl_ES' => 'Galician',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebrew',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croatian',
        'hu_HU' => 'Hungarian',
        'hy_AM' => 'Armenian',
        'id_ID' => 'Indonesian',
        'is_IS' => 'Icelandic',
        'it_IT' => 'Italian',
        'ja_JP' => 'Japanese',
        'ka_GE' => 'Georgian',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korean',
        'ku_TR' => 'Kurdish',
        'lt_LT' => 'Lithuanian',
        'lv_LV' => 'Latvian',
        'mk_MK' => 'Macedonian',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Dutch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polish',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Romanian',
        'ru_RU' => 'Russian',
        'sk_SK' => 'Slovak',
        'sl_SI' => 'Slovene',
        'sq_AL' => 'Albanian',
        'sr_RS' => 'Serbian',
        'sv_SE' => 'Swedish',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turkish',
        'uk_UA' => 'Ukrainian',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamese',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)'
      ],
      'dateSearchRanges' => [
        'on' => 'Dne',
        'notOn' => 'Jiného dne než',
        'after' => 'Po',
        'before' => 'Před',
        'between' => 'Mezi',
        'today' => 'Dnes',
        'past' => 'Minulé',
        'future' => 'Budoucí',
        'currentMonth' => 'Tento měsíc',
        'lastMonth' => 'Minulý měsíc',
        'nextMonth' => 'Next Month',
        'currentQuarter' => 'Toto kvartál',
        'lastQuarter' => 'Minulý kvartál',
        'currentYear' => 'Tento rok',
        'lastYear' => 'Minulý rok',
        'lastSevenDays' => 'Last 7 Days',
        'lastXDays' => 'Last X Days',
        'nextXDays' => 'Next X Days',
        'ever' => 'Ever',
        'isEmpty' => 'Is Empty',
        'olderThanXDays' => 'Older Than X Days',
        'afterXDays' => 'After X Days',
        'currentFiscalYear' => 'Current Fiscal Year',
        'lastFiscalYear' => 'Last Fiscal Year',
        'currentFiscalQuarter' => 'Current Fiscal Quarter',
        'lastFiscalQuarter' => 'Last Fiscal Quarter'
      ],
      'searchRanges' => [
        'is' => 'Je',
        'isEmpty' => 'Je prázdné',
        'isNotEmpty' => 'Není prázdné',
        'isOneOf' => 'Any Of',
        'isFromTeams' => 'Is From Team',
        'isNot' => 'Is Not',
        'isNotOneOf' => 'None Of',
        'anyOf' => 'Any Of',
        'allOf' => 'All Of',
        'noneOf' => 'None Of',
        'any' => 'Any'
      ],
      'varcharSearchRanges' => [
        'equals' => 'Rovná se',
        'like' => 'Is Like (%)',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => 'Začíná',
        'endsWith' => 'Ends With',
        'contains' => 'Obsahuje',
        'notContains' => 'Not Contains',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
        'notEquals' => 'Not Equals'
      ],
      'intSearchRanges' => [
        'equals' => 'Rovná se',
        'notEquals' => 'Nerovná se',
        'greaterThan' => 'Větší než',
        'lessThan' => 'Menší než',
        'greaterThanOrEquals' => 'Větší než nebo se rovná',
        'lessThanOrEquals' => 'Menší než nebo se rovná',
        'between' => 'Mezi',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty'
      ],
      'autorefreshInterval' => [
        0 => 'Není',
        '0.5' => '30 sekund',
        1 => '1 minuta',
        2 => '2 minuty',
        5 => '5 minuty',
        10 => '10 minut'
      ],
      'phoneNumber' => [
        'Mobile' => 'Mobilní',
        'Office' => 'Kancelář',
        'Fax' => 'Fax',
        'Home' => 'Domácí',
        'Other' => 'Další'
      ],
      'saveConflictResolution' => [
        'current' => 'Current',
        'actual' => 'Actual',
        'original' => 'Original'
      ],
      'reminderTypes' => [
        'Popup' => 'Vyskakovací',
        'Email' => 'Email'
      ]
    ],
    'sets' => [
      'summernote' => [
        'NOTICE' => 'You can find translation here: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => [
          'bold' => 'Tučné',
          'italic' => 'Kurzíva',
          'underline' => 'Podtržené',
          'strike' => 'Přeškrtnuté',
          'clear' => 'Odebrat styl písma',
          'height' => 'Velikost řádku',
          'name' => 'Rodina písma',
          'size' => 'Velikost písma'
        ],
        'image' => [
          'image' => 'Obrázek',
          'insert' => 'Vložit obrázek',
          'resizeFull' => 'Změna velikost 1/1',
          'resizeHalf' => 'Změna velikosti 1/2',
          'resizeQuarter' => 'Změna velikosti 1/4',
          'floatLeft' => 'Plavat vlevo',
          'floatRight' => 'Plavat vpravo',
          'floatNone' => 'Neplavat',
          'dragImageHere' => 'Přesunout obrázek sem.',
          'selectFromFiles' => 'Vybrat ze souboru',
          'url' => 'URL obrázku',
          'remove' => 'Odebrat obrázek'
        ],
        'link' => [
          'link' => 'Link',
          'insert' => 'Vložit link',
          'unlink' => 'Odebrat link',
          'edit' => 'Upravit',
          'textToDisplay' => 'Text k zobrazení',
          'url' => 'Na jaké URL má link směřovat?',
          'openInNewWindow' => 'Otevřít v novém okně'
        ],
        'video' => [
          'video' => 'Video',
          'videoLink' => 'Video link',
          'insert' => 'Vložit video',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, nebo DailyMotion)'
        ],
        'table' => [
          'table' => 'Tabulka'
        ],
        'hr' => [
          'insert' => 'Vložit horizontální čáru'
        ],
        'style' => [
          'style' => 'Styl',
          'normal' => 'Normální',
          'blockquote' => 'Citace',
          'pre' => 'Kód',
          'h1' => 'Nadpis 1',
          'h2' => 'Nadpis 2',
          'h3' => 'Nadpis 3',
          'h4' => 'Nadpis 4',
          'h5' => 'Nadpis 5',
          'h6' => 'Nadpis 6'
        ],
        'lists' => [
          'unordered' => 'Neřazený seznam',
          'ordered' => 'Řazený seznam'
        ],
        'options' => [
          'help' => 'Nápověda',
          'fullscreen' => 'Celá obrazovka',
          'codeview' => 'Zobrazit kód'
        ],
        'paragraph' => [
          'paragraph' => 'Odstavec',
          'outdent' => 'Předsadit',
          'indent' => 'Odsadit',
          'left' => 'Zarovnat vlevo',
          'center' => 'Zarovnat na střed',
          'right' => 'Zarovnat vpravo',
          'justify' => 'Zarovnat do bloku'
        ],
        'color' => [
          'recent' => 'Nedávná baarva',
          'more' => 'Víc barev',
          'background' => 'Barva pozadí',
          'foreground' => 'Barva písma',
          'transparent' => 'Průhlednost',
          'setTransparent' => 'Nastavení průhlednosti',
          'reset' => 'Resetovat',
          'resetToDefault' => 'Resetovat na výchozí'
        ],
        'shortcut' => [
          'shortcuts' => 'Klávesové zkratky',
          'close' => 'Zavřít',
          'textFormatting' => 'Formát textu',
          'action' => 'Akce',
          'paragraphFormatting' => 'Formát odstavce',
          'documentStyle' => 'Styl dokumentu'
        ],
        'history' => [
          'undo' => 'Zpět',
          'redo' => 'Znovu'
        ],
        'UPOZORNĚNÍ' => 'Překlady lze najít zde: https://github.com/HackerWins/summernote/tree/master/lang'
      ]
    ],
    'listViewModes' => [
      'list' => 'List',
      'kanban' => 'Kanban'
    ],
    'themes' => [
      'Dark' => 'Dark',
      'Espo' => 'Espo',
      'EspoRtl' => 'RTL',
      'Sakura' => 'Sakura',
      'Violet' => 'Violet',
      'Hazyblue' => 'Hazyblue',
      'Glass' => 'Glass'
    ],
    'themeNavbars' => [
      'side' => 'Side Navbar',
      'top' => 'Top Navbar'
    ],
    'fieldValidations' => [
      'required' => 'Required',
      'maxCount' => 'Max Count',
      'maxLength' => 'Max Length',
      'pattern' => 'Pattern Matching',
      'emailAddress' => 'Valid Email Address',
      'phoneNumber' => 'Valid Phone Number',
      'array' => 'Array',
      'arrayOfString' => 'Array of Strings',
      'valid' => 'Valid',
      'noEmptyString' => 'No Empty String',
      'max' => 'Max Value',
      'min' => 'Min Value'
    ]
  ],
  'Import' => [
    'labels' => [
      'New import with same params' => 'New import with same params',
      'Revert Import' => 'Reverzní import',
      'Return to Import' => 'Návrat do importu',
      'Run Import' => 'Spustit import',
      'Back' => 'Zpět',
      'Field Mapping' => 'Mapování polí',
      'Default Values' => 'Výchozí hodnoty',
      'Add Field' => 'Přidat pole',
      'Created' => 'Vytvořeno',
      'Updated' => 'Aktualizováno',
      'Result' => 'Výsledek',
      'Show records' => 'Zobrazit záznamy',
      'Remove Duplicates' => 'Odebrat duplicity',
      'importedCount' => 'Naimportováno (počet)',
      'duplicateCount' => 'Duplicity (počet)',
      'updatedCount' => 'Aktualizováno (počet)',
      'Create Only' => 'Create Only',
      'Create and Update' => 'Create & Update',
      'Update Only' => 'Update Only',
      'Update by' => 'Update by',
      'Set as Not Duplicate' => 'Set as Not Duplicate',
      'File (CSV)' => 'File (CSV)',
      'First Row Value' => 'First Row Value',
      'Skip' => 'Skip',
      'Header Row Value' => 'Header Row Value',
      'Field' => 'Field',
      'What to Import?' => 'What to Import?',
      'Entity Type' => 'Entity Type',
      'What to do?' => 'What to do?',
      'Properties' => 'Properties',
      'Header Row' => 'Header Row',
      'Person Name Format' => 'Person Name Format',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => 'Field Delimiter',
      'Date Format' => 'Date Format',
      'Decimal Mark' => 'Decimal Mark',
      'Text Qualifier' => 'Text Qualifier',
      'Time Format' => 'Time Format',
      'Currency' => 'Currency',
      'Preview' => 'Preview',
      'Next' => 'Next',
      'Step 1' => 'Step 1',
      'Step 2' => 'Step 2',
      'Double Quote' => 'Double Quote',
      'Single Quote' => 'Single Quote',
      'Imported' => 'Imported',
      'Duplicates' => 'Duplicates',
      'Skip searching for duplicates' => 'Skip searching for duplicates',
      'Timezone' => 'Timezone',
      'Remove Import Log' => 'Remove Import Log',
      'New Import' => 'New Import',
      'Import Results' => 'Import Results',
      'Run Manually' => 'Run Manually',
      'Silent Mode' => 'Silent Mode',
      'Export' => 'Export'
    ],
    'messages' => [
      'noErrors' => 'No errors.',
      'utf8' => 'Mělo by být v UTF-8 kódování',
      'duplicatesRemoved' => 'Duplicity odstraněny',
      'inIdle' => 'Execute in idle (for big data; via cron)',
      'revert' => 'This will remove all imported records permanently.',
      'removeDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates.',
      'confirmRevert' => 'This will remove all imported records permanently. Are you sure?',
      'confirmRemoveDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates. Are you sure?',
      'confirmRemoveImportLog' => 'This will remove the import log. All imported records will be kept. You won\'t be able to revert import results. Are you sure?',
      'removeImportLog' => 'This will remove the import log. All imported records will be kept. Use it if you are sure that import is fine.'
    ],
    'fields' => [
      'file' => 'Soubor',
      'entityType' => 'Typ entity',
      'imported' => 'Naimportované záznamy',
      'duplicates' => 'Duplicitní záznamy',
      'updated' => 'Aktualizované záznamy',
      'status' => 'Status'
    ],
    'links' => [
      'errors' => 'Errors'
    ],
    'options' => [
      'status' => [
        'Failed' => 'Failed',
        'Standby' => 'Standby',
        'Pending' => 'Pending',
        'In Process' => 'In Process',
        'Complete' => 'Complete'
      ],
      'personNameFormat' => [
        'f l' => 'First Last',
        'l f' => 'Last First',
        'f m l' => 'First Middle Last',
        'l f m' => 'Last First Middle',
        'l, f' => 'Last, First'
      ]
    ],
    'strings' => [
      'commandToRun' => 'Command to run (from CLI)',
      'saveAsDefault' => 'Save as default'
    ],
    'tooltips' => [
      'manualMode' => 'If checked, you will need to run import manually from CLI. Command will be shown after setting up the import.',
      'silentMode' => 'A majority of after-save scripts will be skipped, stream notes won\'t be created. Import will run faster.'
    ]
  ],
  'ImportError' => [
    'fields' => [
      'type' => 'Type',
      'validationFailures' => 'Validation Failures',
      'import' => 'Import',
      'rowIndex' => 'Row Index',
      'exportRowIndex' => 'Export Row Index',
      'lineNumber' => 'Line Number',
      'exportLineNumber' => 'Export Line Number',
      'row' => 'Row'
    ],
    'options' => [
      'type' => [
        'Validation' => 'Validation',
        'Access' => 'Access',
        'Not-Found' => 'Not-Found'
      ]
    ],
    'tooltips' => [
      'lineNumber' => 'A line number in the original CSV.',
      'exportLineNumber' => 'A line number in the export CSV.'
    ]
  ],
  'InboundEmail' => [
    'fields' => [
      'name' => 'Jméno',
      'emailAddress' => 'Email Address',
      'team' => 'Tým',
      'status' => 'Status',
      'assignToUser' => 'Přiřadit k uživateli',
      'host' => 'Server',
      'username' => 'Uživatelské jméno',
      'password' => 'Heslo',
      'port' => 'Port',
      'monitoredFolders' => 'Synchronizované složky',
      'trashFolder' => 'Koš',
      'security' => 'Security',
      'createCase' => 'Vytvořit událost',
      'reply' => 'Auto-odpověď',
      'caseDistribution' => 'Distribuce událostí',
      'replyEmailTemplate' => 'Odpověď: Šablona',
      'replyFromAddress' => 'Odpověď: Od',
      'replyToAddress' => 'Odpověď: Komu',
      'replyFromName' => 'Odpověď: Jméno',
      'targetUserPosition' => 'Pozice cílového uživatele',
      'fetchSince' => 'Fetch Since',
      'addAllTeamUsers' => 'For all team users',
      'teams' => 'Teams',
      'sentFolder' => 'Sent Folder',
      'storeSentEmails' => 'Store Sent Emails',
      'keepFetchedEmailsUnread' => 'Keep Fetched Emails Unread',
      'useImap' => 'Fetch Emails',
      'useSmtp' => 'Use SMTP',
      'smtpHost' => 'SMTP Host',
      'smtpPort' => 'SMTP Port',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Security',
      'smtpAuthMechanism' => 'SMTP Auth Mechanism',
      'smtpUsername' => 'SMTP Username',
      'smtpPassword' => 'SMTP Password',
      'fromName' => 'From Name',
      'smtpIsShared' => 'SMTP Is Shared',
      'smtpIsForMassEmail' => 'SMTP Is for Mass Email',
      'ssl' => 'SSL'
    ],
    'tooltips' => [
      'useSmtp' => 'The ability to send emails.',
      'reply' => 'Upozornit odesílatele emailů, že jejich emaily byly přijaty.

 Pro potlačení zacyklení, pouze jeden email za časové období bude poslán každému příjemci.',
      'createCase' => 'Automaticky vytvořit událost z příchozích emailů.',
      'replyToAddress' => 'Specifikovat emailovou adresu této schánky, aby sem chodily odpovědi.',
      'caseDistribution' => 'Nastavení, jak budou události přiřazovány - přímo uživateli nebo dle týmů.',
      'assignToUser' => 'Emaily/události přiřadit uživateli.',
      'team' => 'Emaily/události přiřadit týmu.',
      'teams' => 'Teams emails will be assigned to.',
      'targetUserPosition' => 'Definice pozice uživatelů, kterým budou redistribuovány události.',
      'addAllTeamUsers' => 'Emails will be appearing in Inbox of all users of specified teams.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.',
      'smtpIsShared' => 'If checked then users will be able to send emails using this SMTP. Availability is controlled by Roles through the Group Email Account permission.',
      'smtpIsForMassEmail' => 'If checked then SMTP will be available for Mass Email.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server.'
    ],
    'links' => [
      'filters' => 'Filters',
      'emails' => 'Emails',
      'assignToUser' => 'Assign to User'
    ],
    'options' => [
      'status' => [
        'Active' => 'Aktivní',
        'Inactive' => 'Neaktivní'
      ],
      'caseDistribution' => [
        '' => 'None',
        'Direct-Assignment' => 'Přímé přiřazení',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Poslední zaneprázdněný'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'PLAIN',
        'login' => 'LOGIN',
        'crammd5' => 'CRAM-MD5'
      ]
    ],
    'labels' => [
      'Create InboundEmail' => 'Vytvořit emailový účet',
      'IMAP' => 'IMAP',
      'Actions' => 'Akce',
      'Main' => 'Hlavní'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'Nelze se připojit k IMAP serveru'
    ]
  ],
  'Integration' => [
    'fields' => [
      'enabled' => 'Povoleno',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'redirectUri' => 'Přesměrování URI',
      'apiKey' => 'API Key'
    ],
    'titles' => [
      'GoogleMaps' => 'Google Maps'
    ],
    'messages' => [
      'selectIntegration' => 'Vybrat integraci z menu.',
      'noIntegrations' => 'Žádné integrace nejsou dostupné.'
    ],
    'help' => [
      'Google' => '<p><b>Obtain OAuth 2.0 credentials from the Google Developers Console.</b></p><p>Visit <a href="https://console.developers.google.com/project">Google Developers Console</a> to obtain OAuth 2.0 credentials such as a Client ID and Client Secret that are known to both Google and EspoCRM application.</p>',
      'GoogleMaps' => 'Obtain API key [here](https://developers.google.com/maps/documentation/javascript/get-api-key).'
    ]
  ],
  'Job' => [
    'fields' => [
      'status' => 'Status',
      'executeTime' => 'Execute At',
      'executedAt' => 'Executed At',
      'startedAt' => 'Started At',
      'attempts' => 'Attempts Left',
      'failedAttempts' => 'Failed Attempts',
      'serviceName' => 'Service',
      'method' => 'Method (deprecated)',
      'methodName' => 'Method',
      'scheduledJob' => 'Scheduled Job',
      'scheduledJobJob' => 'Scheduled Job Name',
      'data' => 'Data',
      'targetType' => 'Target Type',
      'targetId' => 'Target ID',
      'number' => 'Number',
      'queue' => 'Queue',
      'group' => 'Group',
      'className' => 'Class Name',
      'targetGroup' => 'Target Group',
      'job' => 'Job'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pending',
        'Success' => 'Success',
        'Running' => 'Running',
        'Failed' => 'Failed'
      ]
    ]
  ],
  'LayoutManager' => [
    'fields' => [
      'width' => 'Šířka (%)',
      'widthPx' => 'Width (px)',
      'link' => 'Link',
      'notSortable' => 'Neřaditelné',
      'align' => 'Zarovnání',
      'panelName' => 'Panel Name',
      'style' => 'Style',
      'sticked' => 'Sticked',
      'isLarge' => 'Large font size',
      'hidden' => 'Hidden',
      'noLabel' => 'No Label',
      'dynamicLogicVisible' => 'Conditions making panel visible',
      'dynamicLogicStyled' => 'Conditions making style applied',
      'tabLabel' => 'Tab Label',
      'tabBreak' => 'Tab-Break'
    ],
    'options' => [
      'align' => [
        'left' => 'Vlevo',
        'right' => 'Vpravo'
      ],
      'style' => [
        'default' => 'Default',
        'success' => 'Success',
        'danger' => 'Danger',
        'info' => 'Info',
        'warning' => 'Warning',
        'primary' => 'Primary'
      ]
    ],
    'labels' => [
      'New panel' => 'New panel',
      'Layout' => 'Layout'
    ],
    'messages' => [
      'cantBeEmpty' => 'Layout can\'t be empty.',
      'fieldsIncompatible' => 'Fields can\'t be on the layout together: {fields}.'
    ],
    'tooltips' => [
      'tabBreak' => 'A separate tab for the panel and all following panels until the next tab-break.',
      'noLabel' => 'Don\'t display a column label in the header.',
      'notSortable' => 'Disables the ability to sort by the column.',
      'width' => 'A column width in percentage. It\'s recommended to have one column with the not-set width, usually it\'s the *Name* field.',
      'widthPx' => 'A column width in pixels. Takes effect only if the (%) value is not set. Makes the column width fixed.',
      'sticked' => 'The panel will be sticked to the panel above. No gap between panels.',
      'hiddenPanel' => 'Need to click \'show more\' to see the panel.',
      'panelStyle' => 'A color of the panel.',
      'dynamicLogicVisible' => 'If set, the panel will be hidden unless the condition is met.',
      'dynamicLogicStyled' => 'A color will be applied if a specific condition is met . The color is defined by the *Style* parameter.',
      'link' => 'If checked, then a field value will be displayed as a link pointing to the detail view of the record. Usually it is used for *Name* fields.'
    ]
  ],
  'LayoutSet' => [
    'fields' => [
      'layoutList' => 'Layouts'
    ],
    'labels' => [
      'Create LayoutSet' => 'Create Layout Set',
      'Edit Layouts' => 'Edit Layouts'
    ],
    'tooltips' => []
  ],
  'LeadCapture' => [
    'fields' => [
      'name' => 'Name',
      'campaign' => 'Campaign',
      'isActive' => 'Is Active',
      'subscribeToTargetList' => 'Subscribe to Target List',
      'subscribeContactToTargetList' => 'Subscribe Contact if exists',
      'targetList' => 'Target List',
      'fieldList' => 'Payload Fields',
      'optInConfirmation' => 'Double Opt-In',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'optInConfirmationLifetime' => 'Opt-in confirmation lifetime (hours)',
      'optInConfirmationSuccessMessage' => 'Text to show after opt-in confirmation',
      'leadSource' => 'Lead Source',
      'apiKey' => 'API Key',
      'targetTeam' => 'Target Team',
      'exampleRequestMethod' => 'Method',
      'exampleRequestUrl' => 'URL',
      'exampleRequestPayload' => 'Payload',
      'exampleRequestHeaders' => 'Headers',
      'createLeadBeforeOptInConfirmation' => 'Create Lead before confirmation',
      'skipOptInConfirmationIfSubscribed' => 'Skip confirmation if lead is already in target list',
      'smtpAccount' => 'SMTP Account',
      'inboundEmail' => 'Group Email Account',
      'duplicateCheck' => 'Duplicate Check'
    ],
    'links' => [
      'targetList' => 'Target List',
      'campaign' => 'Campaign',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'targetTeam' => 'Target Team',
      'inboundEmail' => 'Group Email Account',
      'logRecords' => 'Log'
    ],
    'labels' => [
      'Create LeadCapture' => 'Create Entry Point',
      'Generate New API Key' => 'Generate New API Key',
      'Request' => 'Request',
      'Confirm Opt-In' => 'Confirm Opt-In'
    ],
    'messages' => [
      'generateApiKey' => 'Create new API Key',
      'optInConfirmationExpired' => 'Opt-in confirmation link is expired.',
      'optInIsConfirmed' => 'Opt-in is confirmed.'
    ],
    'tooltips' => [
      'optInConfirmationSuccessMessage' => 'Markdown is supported.'
    ]
  ],
  'LeadCaptureLogRecord' => [
    'fields' => [
      'number' => 'Number',
      'data' => 'Data',
      'target' => 'Target',
      'leadCapture' => 'Lead Capture',
      'createdAt' => 'Entered At',
      'isCreated' => 'Is Lead Created'
    ],
    'links' => [
      'leadCapture' => 'Lead Capture',
      'target' => 'Target'
    ]
  ],
  'MassAction' => [
    'fields' => [
      'status' => 'Status',
      'processedCount' => 'Processed Count'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pending',
        'Running' => 'Running',
        'Success' => 'Success',
        'Failed' => 'Failed'
      ]
    ],
    'messages' => [
      'infoText' => 'The mass action is being processed in idle by cron. It can take some time to finish. Closing this modal dialog won\'t affect the execution process.'
    ]
  ],
  'Note' => [
    'fields' => [
      'post' => 'Post',
      'attachments' => 'Přílohy',
      'targetType' => 'Target',
      'teams' => 'Teams',
      'users' => 'Users',
      'portals' => 'Portals',
      'type' => 'Type',
      'isGlobal' => 'Is Global',
      'isInternal' => 'Is Internal (for internal users)',
      'related' => 'Related',
      'createdByGender' => 'Created By Gender',
      'data' => 'Data',
      'number' => 'Number'
    ],
    'filters' => [
      'all' => 'All',
      'posts' => 'Posts',
      'updates' => 'Updates'
    ],
    'options' => [
      'targetType' => [
        'self' => 'to myself',
        'users' => 'to particular user(s)',
        'teams' => 'to particular team(s)',
        'all' => 'to all internal users',
        'portals' => 'to portal users'
      ],
      'type' => [
        'Post' => 'Post'
      ]
    ],
    'messages' => [
      'writeMessage' => 'Write your message here'
    ],
    'links' => [
      'superParent' => 'Super Parent',
      'related' => 'Related'
    ]
  ],
  'PhoneNumber' => [
    'fields' => [
      'type' => 'Type',
      'optOut' => 'Opted Out',
      'invalid' => 'Invalid'
    ],
    'presetFilters' => [
      'orphan' => 'Orphan'
    ]
  ],
  'Portal' => [
    'fields' => [
      'name' => 'Name',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Roles',
      'isActive' => 'Is Active',
      'isDefault' => 'Is Default',
      'tabList' => 'Tab List',
      'quickCreateList' => 'Quick Create List',
      'companyLogo' => 'Logo',
      'theme' => 'Theme',
      'language' => 'Language',
      'dashboardLayout' => 'Dashboard Layout',
      'dateFormat' => 'Date Format',
      'timeFormat' => 'Time Format',
      'timeZone' => 'Time Zone',
      'weekStart' => 'First Day of Week',
      'defaultCurrency' => 'Default Currency',
      'layoutSet' => 'Layout Set',
      'customUrl' => 'Custom URL',
      'customId' => 'Custom ID'
    ],
    'links' => [
      'users' => 'Users',
      'portalRoles' => 'Roles',
      'layoutSet' => 'Layout Set',
      'notes' => 'Notes',
      'articles' => 'Knowledge Base Articles'
    ],
    'tooltips' => [
      'layoutSet' => 'Provides the ability to have layouts that differ from standard ones.',
      'portalRoles' => 'Specified Portal Roles will be applied to all users of this portal.'
    ],
    'labels' => [
      'Create Portal' => 'Create Portal',
      'User Interface' => 'User Interface',
      'General' => 'General',
      'Settings' => 'Settings'
    ]
  ],
  'PortalRole' => [
    'fields' => [
      'exportPermission' => 'Export Permission',
      'massUpdatePermission' => 'Mass Update Permission'
    ],
    'links' => [
      'users' => 'Users'
    ],
    'labels' => [
      'Access' => 'Access',
      'Create PortalRole' => 'Create Portal Role',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level'
    ],
    'tooltips' => [
      'exportPermission' => 'Defines whether portal users have an ability to export records.',
      'massUpdatePermission' => 'Defines whether portal users have an ability to do mass update of records.'
    ]
  ],
  'PortalUser' => [
    'labels' => [
      'Create PortalUser' => 'Create Portal User'
    ]
  ],
  'Preferences' => [
    'fields' => [
      'dateFormat' => 'Formát data',
      'timeFormat' => 'Formát času',
      'timeZone' => 'Časové pásmo',
      'weekStart' => 'Začátek týdne',
      'thousandSeparator' => 'Oddělovač tisíců',
      'decimalMark' => 'Desetinný oddělovač',
      'defaultCurrency' => 'Výchozí měna',
      'currencyList' => 'Seznam měn',
      'language' => 'Jazyk',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Zabezpečení',
      'smtpUsername' => 'Username',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Heslo',
      'smtpEmailAddress' => 'Emailová adresa',
      'exportDelimiter' => 'Export Delimiter',
      'receiveAssignmentEmailNotifications' => 'Dostávat emailová upozornění dle přiřazení',
      'receiveMentionEmailNotifications' => 'Email notifications about mentions in posts',
      'receiveStreamEmailNotifications' => 'Email notifications about posts and status updates',
      'assignmentNotificationsIgnoreEntityTypeList' => 'In-app assignment notifications',
      'assignmentEmailNotificationsIgnoreEntityTypeList' => 'Email assignment notifications',
      'autoFollowEntityTypeList' => 'Auto-Follow',
      'signature' => 'Emailový podpis',
      'dashboardTabList' => 'Seznam záložek',
      'defaultReminders' => 'Výchozí upozornění',
      'theme' => 'Theme',
      'useCustomTabList' => 'Custom Tab List',
      'tabList' => 'Tab List',
      'emailReplyToAllByDefault' => 'Email Reply to all by default',
      'dashboardLayout' => 'Dashboard Layout',
      'emailReplyForceHtml' => 'Email Reply in HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Do not pre-fill assigned user on record creation',
      'followEntityOnStreamPost' => 'Auto-follow record after posting in Stream',
      'followCreatedEntities' => 'Auto-follow created records',
      'followCreatedEntityTypeList' => 'Auto-follow created records of specific entity types',
      'emailUseExternalClient' => 'Use an external email client',
      'scopeColorsDisabled' => 'Disable scope colors',
      'tabColorsDisabled' => 'Disable tab colors'
    ],
    'links' => [],
    'options' => [
      'weekStart' => [
        0 => 'Neděle',
        1 => 'Pondělí'
      ]
    ],
    'labels' => [
      'Notifications' => 'Upozornění',
      'User Interface' => 'User Interface',
      'SMTP' => 'SMTP',
      'Misc' => 'Misc',
      'Locale' => 'Locale',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default'
    ],
    'tooltips' => [
      'autoFollowEntityTypeList' => 'Uživatel bude automaticky sledovat všechny nové záznamy vybraných entit, uvidí informace ve streamu a bude dostávat upozornění.',
      'doNotFillAssignedUserIfNotRequired' => 'When create record assigned user won\'t be filled with own user unless the field is required.',
      'followCreatedEntities' => 'When create new records, they will be automatically followed even if assigned to another user.',
      'followCreatedEntityTypeList' => 'When create new records of selected entity types, they will be followed automatically even if assigned to another user.'
    ]
  ],
  'Role' => [
    'fields' => [
      'name' => 'Jméno',
      'roles' => 'Role',
      'assignmentPermission' => 'Přiřazení oprávnění',
      'userPermission' => 'Uživatelská oprávnění',
      'portalPermission' => 'Portal Permission',
      'groupEmailAccountPermission' => 'Group Email Account Permission',
      'exportPermission' => 'Export Permission',
      'massUpdatePermission' => 'Mass Update Permission',
      'followerManagementPermission' => 'Follower Management Permission',
      'dataPrivacyPermission' => 'Data Privacy Permission'
    ],
    'links' => [
      'users' => 'Uživatelé',
      'teams' => 'Týmy'
    ],
    'tooltips' => [
      'assignmentPermission' => 'Povolit omezení přiřazení záznamů ostatním uživatelům.n
vše - bez omezení

tým - povoluje přiřadit uživatelům ze svého týmu

ne - povoluje přiřadit pouze sobě',
      'userPermission' => 'Povolit omezení zobrazení aktivit ostatních uživatelů.

vše - viditelné vše

tým - viditelné u uživatelů ze svého týmu

ne - není viditelné',
      'portalPermission' => 'Defines an access to portal information, ability to post messages to portal users.',
      'groupEmailAccountPermission' => 'Defines an access to group email accounts, an ability to send emails from group SMTP.',
      'exportPermission' => 'Defines whether users have an ability to export records.',
      'massUpdatePermission' => 'Defines whether users have an ability to do mass update of records.',
      'followerManagementPermission' => 'Allows to manage followers of specific records.',
      'dataPrivacyPermission' => 'Allows to view and erase personal data.'
    ],
    'labels' => [
      'Access' => 'Přístup',
      'Create Role' => 'Vytvořit roli',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level'
    ],
    'options' => [
      'accessList' => [
        'not-set' => 'není nastaveno',
        'enabled' => 'povoleno',
        'disabled' => 'zakázáno'
      ],
      'levelList' => [
        'all' => 'vše',
        'team' => 'tým',
        'account' => 'account',
        'contact' => 'contact',
        'own' => 'vlastní',
        'no' => 'ne',
        'yes' => 'yes',
        'not-set' => 'není nastaveno'
      ]
    ],
    'actions' => [
      'read' => 'Číst',
      'edit' => 'Upravit',
      'delete' => 'Smazat',
      'stream' => 'Stream',
      'create' => 'Create'
    ],
    'messages' => [
      'changesAfterClearCache' => 'Všechny změny v nastavení ACL budou aplikovány po vyčištění cache.'
    ]
  ],
  'ScheduledJob' => [
    'fields' => [
      'name' => 'Jméno',
      'status' => 'Status',
      'job' => 'Činnost',
      'scheduling' => 'Plánování (crontab notace)'
    ],
    'links' => [
      'log' => 'Log'
    ],
    'labels' => [
      'As often as possible' => 'As often as possible',
      'Create ScheduledJob' => 'Vytvořit naplánovanou činnost'
    ],
    'options' => [
      'job' => [
        'Cleanup' => 'Vyčistit',
        'CheckInboundEmails' => 'Zkontrolovat příchozí emaily',
        'CheckEmailAccounts' => 'Zkontrolovat emaily',
        'SendEmailReminders' => 'Připomenutí emaiů k poslání',
        'AuthTokenControl' => 'Auth Token Control',
        'SendEmailNotifications' => 'Send Email Notifications',
        'CheckNewVersion' => 'Check for New Version',
        'ProcessWebhookQueue' => 'Process Webhook Queue',
        'ProcessMassEmail' => 'Send Mass Emails',
        'ControlKnowledgeBaseArticleStatus' => 'Control Knowledge Base Article Status'
      ],
      'cronSetup' => [
        'linux' => 'Poznámka: přidejte tento řádek do crontab souboru pro spuštění ESPO naplánovaných činností:',
        'mac' => 'Poznámka: přidejte tento řádek do crontab souboru pro spuštění ESPO naplánovaných činností:',
        'windows' => 'Poznánmka: Vytvořte batch soubor s následujícími příkazy pro spuštění ESPO naplánovaných činností pomocí Windows Scheduled Tasks:',
        'default' => 'Poznámka: přidejte tento příkaz do Cron Job (Scheduled Task):'
      ],
      'status' => [
        'Active' => 'Active',
        'Inactive' => 'Inactive'
      ]
    ],
    'tooltips' => [
      'scheduling' => 'Crontab notation. Defines frequency of job runs.

`*/5 * * * *` - every 5 minutes

`0 */2 * * *` - every 2 hours

`30 1 * * *` - at 01:30 once a day

`0 0 1 * *` - on the first day of the month'
    ]
  ],
  'ScheduledJobLogRecord' => [
    'fields' => [
      'status' => 'Status',
      'executionTime' => 'Čas vykonání',
      'target' => 'Target'
    ]
  ],
  'Settings' => [
    'fields' => [
      'useCache' => 'Použít cache',
      'dateFormat' => 'Formát data',
      'timeFormat' => 'Formát času',
      'timeZone' => 'Časové pásmo',
      'weekStart' => 'První den v týdnu',
      'thousandSeparator' => 'Oddělovač tisíců',
      'decimalMark' => 'Desetinný oddělovač',
      'defaultCurrency' => 'Výchozí měna',
      'baseCurrency' => 'Bázová měna',
      'currencyRates' => 'Kurzy měn',
      'currencyList' => 'Seznam měn',
      'language' => 'Jazyk',
      'companyLogo' => 'Logo společnosti',
      'smsProvider' => 'SMS Provider',
      'outboundSmsFromNumber' => 'SMS From Number',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Zabezpečení',
      'smtpUsername' => 'Uživatelské jméno',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Heslo',
      'outboundEmailFromName' => 'Od (jméno)',
      'outboundEmailFromAddress' => 'Od (adresa)',
      'outboundEmailIsShared' => 'Sdílení',
      'emailAddressLookupEntityTypeList' => 'Email address look-up scopes',
      'recordsPerPage' => 'Záznamy na stránku',
      'recordsPerPageSmall' => 'Záznamy na stránku (malý)',
      'recordsPerPageSelect' => 'Records Per Page (Select)',
      'tabList' => 'Seznam záložek',
      'quickCreateList' => 'Rychlé odkazy',
      'exportDelimiter' => 'Export Delimiter',
      'globalSearchEntityList' => 'Global Search Entity List',
      'authenticationMethod' => 'Autentizační metoda',
      'ldapHost' => 'Host',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Uživatelské jméno',
      'ldapPassword' => 'Heslo',
      'ldapBindRequiresDn' => 'Přiřazení vyžaduje Dn',
      'ldapBaseDn' => 'Bázové Dn',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Account Domain Name',
      'ldapTryUsernameSplit' => 'Zkuste rozdělit uživatelské jméno',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Vytvořit uživatele v EspoCRM',
      'ldapSecurity' => 'Zabezpečení',
      'ldapUserLoginFilter' => 'Filtr uživatelského přihlášení',
      'ldapAccountDomainNameShort' => 'Account Domain Name krátké',
      'ldapOptReferrals' => 'Opt Referrals',
      'ldapUserNameAttribute' => 'Username Attribute',
      'ldapUserObjectClass' => 'User ObjectClass',
      'ldapUserTitleAttribute' => 'User Title Attribute',
      'ldapUserFirstNameAttribute' => 'User First Name Attribute',
      'ldapUserLastNameAttribute' => 'User Last Name Attribute',
      'ldapUserEmailAddressAttribute' => 'User Email Address Attribute',
      'ldapUserTeams' => 'User Teams',
      'ldapUserDefaultTeam' => 'User Default Team',
      'ldapUserPhoneNumberAttribute' => 'User Phone Number Attribute',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => 'Disable Export (only admin is allowed)',
      'assignmentNotificationsEntityList' => 'Entity k upozornění podle přiřazení',
      'assignmentEmailNotifications' => 'Poslat emailová upozornění podle přiřazení',
      'assignmentEmailNotificationsEntityList' => 'Entity k upozornění emailem podle přiřazení',
      'streamEmailNotifications' => 'Notifications about updates in Stream for internal users',
      'portalStreamEmailNotifications' => 'Notifications about updates in Stream for portal users',
      'streamEmailNotificationsEntityList' => 'Stream email notifications scopes',
      'streamEmailNotificationsTypeList' => 'What to notify about',
      'emailNotificationsDelay' => 'Delay of email notifications (in seconds)',
      'b2cMode' => 'B2C Mode',
      'avatarsDisabled' => 'Disable Avatars',
      'followCreatedEntities' => 'Sledovat vytvořené entity',
      'displayListViewRecordCount' => 'Display Total Count (on List View)',
      'theme' => 'Theme',
      'userThemesDisabled' => 'Disable User Themes',
      'attachmentUploadMaxSize' => 'Upload Max Size (Mb)',
      'attachmentUploadChunkSize' => 'Upload Chunk Size (Mb)',
      'emailMessageMaxSize' => 'Email Max Size (Mb)',
      'massEmailMaxPerHourCount' => 'Max number of emails sent per hour',
      'personalEmailMaxPortionSize' => 'Max email portion size for personal account fetching',
      'inboundEmailMaxPortionSize' => 'Max email portion size for group account fetching',
      'maxEmailAccountCount' => 'Max number of personal email accounts per user',
      'authTokenLifetime' => 'Auth Token Lifetime (hours)',
      'authTokenMaxIdleTime' => 'Auth Token Max Idle Time (hours)',
      'dashboardLayout' => 'Dashboard Layout (default)',
      'siteUrl' => 'Site URL',
      'addressPreview' => 'Address Preview',
      'addressFormat' => 'Address Format',
      'personNameFormat' => 'Person Name Format',
      'notificationSoundsDisabled' => 'Disable Notification Sounds',
      'newNotificationCountInTitle' => 'Display new notification number in page title',
      'applicationName' => 'Application Name',
      'calendarEntityList' => 'Calendar Entity List',
      'busyRangesEntityList' => 'Free/Busy Entity List',
      'mentionEmailNotifications' => 'Send email notifications about mentions in posts',
      'massEmailDisableMandatoryOptOutLink' => 'Disable mandatory opt-out link',
      'massEmailOpenTracking' => 'Email Open Tracking',
      'massEmailVerp' => 'Use VERP',
      'activitiesEntityList' => 'Activities Entity List',
      'historyEntityList' => 'History Entity List',
      'currencyFormat' => 'Currency Format',
      'currencyDecimalPlaces' => 'Currency Decimal Places',
      'aclAllowDeleteCreated' => 'Allow to remove created records',
      'adminNotifications' => 'System notifications in administration panel',
      'adminNotificationsNewVersion' => 'Show notification when new EspoCRM version is available',
      'adminNotificationsNewExtensionVersion' => 'Show notification when new versions of extensions are available',
      'textFilterUseContainsForVarchar' => 'Use \'contains\' operator when filtering varchar fields',
      'authTokenPreventConcurrent' => 'Only one auth token per user',
      'scopeColorsDisabled' => 'Disable scope colors',
      'tabColorsDisabled' => 'Disable tab colors',
      'tabIconsDisabled' => 'Disable tab icons',
      'emailAddressIsOptedOutByDefault' => 'Mark new email addresses as opted-out',
      'outboundEmailBccAddress' => 'BCC address for external clients',
      'cleanupDeletedRecords' => 'Clean up deleted records',
      'addressCountryList' => 'Address Country Autocomplete List',
      'addressCityList' => 'Address City Autocomplete List',
      'addressStateList' => 'Address State Autocomplete List',
      'fiscalYearShift' => 'Fiscal Year Start',
      'jobRunInParallel' => 'Jobs Run in Parallel',
      'jobMaxPortion' => 'Jobs Max Portion',
      'jobPoolConcurrencyNumber' => 'Jobs Pool Concurrency Number',
      'daemonInterval' => 'Daemon Interval',
      'daemonMaxProcessNumber' => 'Daemon Max Process Number',
      'daemonProcessTimeout' => 'Daemon Process Timeout',
      'cronDisabled' => 'Disable Cron',
      'maintenanceMode' => 'Maintenance Mode',
      'useWebSocket' => 'Use WebSocket',
      'passwordRecoveryDisabled' => 'Disable password recovery',
      'passwordRecoveryForAdminDisabled' => 'Disable password recovery for admin users',
      'passwordRecoveryForInternalUsersDisabled' => 'Disable password recovery for internal users',
      'passwordRecoveryNoExposure' => 'Prevent email address exposure on password recovery form',
      'passwordGenerateLength' => 'Length of generated passwords',
      'passwordStrengthLength' => 'Minimum password length',
      'passwordStrengthLetterCount' => 'Number of letters required in password',
      'passwordStrengthNumberCount' => 'Number of digits required in password',
      'passwordStrengthBothCases' => 'Password must contain letters of both upper and lower case',
      'auth2FA' => 'Enable 2-Factor Authentication',
      'auth2FAForced' => 'Force regular users to set up 2FA',
      'auth2FAMethodList' => 'Available 2FA methods',
      'disableExport' => 'Zakázat export (povolenou pouze adminovi)',
      'disableAvatars' => 'Zakázat avatary'
    ],
    'options' => [
      'currencyFormat' => [
        1 => '10 USD',
        2 => '$10',
        3 => '10 $'
      ],
      'personNameFormat' => [
        'firstLast' => 'First Last',
        'lastFirst' => 'Last First',
        'firstMiddleLast' => 'First Middle Last',
        'lastFirstMiddle' => 'Last First Middle'
      ],
      'streamEmailNotificationsTypeList' => [
        'Post' => 'Posts',
        'Status' => 'Status updates',
        'EmailReceived' => 'Received emails'
      ],
      'auth2FAMethodList' => [
        'Totp' => 'TOTP',
        'Email' => 'Email',
        'Sms' => 'SMS'
      ],
      'weekStart' => [
        0 => 'Neděle',
        1 => 'Pondělí'
      ]
    ],
    'tooltips' => [
      'displayListViewRecordCount' => 'A total number of records will be shown on the list view.',
      'currencyList' => 'What currencies will be available in the system.',
      'activitiesEntityList' => 'What records will be available in the Activities panel.',
      'historyEntityList' => 'What records will be available in the History panel.',
      'calendarEntityList' => 'What records will be available in the Calendar.',
      'addressStateList' => 'State suggestions for address fields.',
      'addressCityList' => 'City suggestions for address fields.',
      'addressCountryList' => 'Country suggestions for address fields.',
      'exportDisabled' => 'Users won\'t be able to export records. Only admin will be allowed.',
      'globalSearchEntityList' => 'What records can be searched with Global Search.',
      'siteUrl' => 'A URL of this EspoCRM instance. You need to change it if you move to another domain.',
      'useCache' => 'Not recommended to disable, unless for development purpose.',
      'useWebSocket' => 'WebSocket enables two-way interactive communication between a server and a browser. Requires setting up the WebSocket daemon on your server. Check the documentation for more info.',
      'passwordRecoveryForInternalUsersDisabled' => 'Only portal users will be able to recover password.',
      'passwordRecoveryNoExposure' => 'It won\'t be possible to determine whether a specific email address is registered in the system.',
      'emailAddressLookupEntityTypeList' => 'For email address autocomplete.',
      'emailNotificationsDelay' => 'A message can be edited within the specified timeframe before the notification is sent.',
      'outboundEmailFromAddress' => 'The system email address.',
      'smtpServer' => 'If empty, then Group Email Account with the corresponding email address will be used.',
      'busyRangesEntityList' => 'What will be taken into account when showing busy time ranges in scheduler & timeline.',
      'massEmailVerp' => 'Variable envelope return path. For better handling of bounced messages. Make sure that your SMTP provider supports it.',
      'recordsPerPage' => 'Number of records initially displayed in list views.',
      'recordsPerPageSmall' => 'Počet záznamů v panelu vztahů.',
      'recordsPerPageSelect' => 'Number of records initially displayed when selecting records.',
      'outboundEmailIsShared' => 'Povolit posílání emailů uživatelům pomocí SMTP.',
      'followCreatedEntities' => 'Pokud uživatel vytvoří záznam, bude jej sledovat automaticky.',
      'emailMessageMaxSize' => 'All inbound emails exceeding a specified size will be fetched w/o body and attachments.',
      'authTokenLifetime' => 'Defines how long tokens can exist.
0 - means no expiration.',
      'authTokenMaxIdleTime' => 'Defines how long since the last access tokens can exist.
0 - means no expiration.',
      'userThemesDisabled' => 'If checked then users won\'t be able to select another theme.',
      'ldapUsername' => 'The full system user DN which allows to search other users. E.g. "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan".',
      'ldapPassword' => 'The password to access to LDAP server.',
      'ldapAuth' => 'Access credentials for the LDAP server.',
      'ldapUserNameAttribute' => 'The attribute to identify the user. 
E.g. "userPrincipalName" or "sAMAccountName" for Active Directory, "uid" for OpenLDAP.',
      'ldapUserObjectClass' => 'ObjectClass attribute for searching users. E.g. "person" for AD, "inetOrgPerson" for OpenLDAP.',
      'ldapAccountCanonicalForm' => 'The type of your account canonical form. There are 4 options:

- \'Dn\' - the form in the format \'CN=tester,OU=espocrm,DC=test, DC=lan\'.

- \'Username\' - the form \'tester\'.

- \'Backslash\' - the form \'COMPANY\\tester\'.

- \'Principal\' - the form \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'The option to format the username in the DN form.',
      'ldapBaseDn' => 'The default base DN used for searching users. E.g. "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'The option to split a username with the domain.',
      'ldapOptReferrals' => 'if referrals should be followed to the LDAP client.',
      'ldapPortalUserLdapAuth' => 'Allow portal users to use LDAP authentication instead of Espo authentication.',
      'ldapCreateEspoUser' => 'This option allows EspoCRM to create a user from the LDAP.',
      'ldapUserFirstNameAttribute' => 'LDAP attribute which is used to determine the user first name. E.g. "givenname".',
      'ldapUserLastNameAttribute' => 'LDAP attribute which is used to determine the user last name. E.g. "sn".',
      'ldapUserTitleAttribute' => 'LDAP attribute which is used to determine the user title. E.g. "title".',
      'ldapUserEmailAddressAttribute' => 'LDAP attribute which is used to determine the user email address. E.g. "mail".',
      'ldapUserPhoneNumberAttribute' => 'LDAP attribute which is used to determine the user phone number. E.g. "telephoneNumber".',
      'ldapUserLoginFilter' => 'The filter which allows to restrict users who able to use EspoCRM. E.g. "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'The domain which is used for authorization to LDAP server.',
      'ldapAccountDomainNameShort' => 'The short domain which is used for authorization to LDAP server.',
      'ldapUserTeams' => 'Teams for created user. For more, see user profile.',
      'ldapUserDefaultTeam' => 'Default team for created user. For more, see user profile.',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => 'By default EspoCRM is adapted for B2B. You can switch it to B2C.',
      'currencyDecimalPlaces' => 'Number of decimal places. If empty then all nonempty decimal places will be displayed.',
      'aclStrictMode' => 'Enabled: Access to scopes will be forbidden if it\'s not specified in roles.

Disabled: Access to scopes will be allowed if it\'s not specified in roles.',
      'aclAllowDeleteCreated' => 'Users will be able to remove records they created even if they don\'t have a delete access.',
      'textFilterUseContainsForVarchar' => 'If not checked then \'starts with\' operator is used. You can use the wildcard \'%\'.',
      'streamEmailNotificationsEntityList' => 'Email notifications about stream updates of followed records. Users will receive email notifications only for specified entity types.',
      'authTokenPreventConcurrent' => 'Users won\'t be able to be logged in on multiple devices simultaneously.',
      'emailAddressIsOptedOutByDefault' => 'When creating new record email addess will be marked as opted-out.',
      'cleanupDeletedRecords' => 'Removed records will be deleted from database after a while.',
      'jobRunInParallel' => 'Jobs will be executed in parallel processes.',
      'jobPoolConcurrencyNumber' => 'Max number of processes run simultaneously.',
      'jobMaxPortion' => 'Max number of jobs processed per one execution.',
      'daemonInterval' => 'Interval between process cron runs in seconds.',
      'daemonMaxProcessNumber' => 'Max number of cron processes run simultaneously.',
      'daemonProcessTimeout' => 'Max execution time (in seconds) allocated for a single cron process.',
      'cronDisabled' => 'Cron will not run.',
      'maintenanceMode' => 'Only administrators will have access to the system.'
    ],
    'labels' => [
      'Group Tab' => 'Group Tab',
      'System' => 'Systém',
      'Locale' => 'Locale',
      'Search' => 'Search',
      'Misc' => 'Misc',
      'SMTP' => 'SMTP',
      'Configuration' => 'Konfigurace',
      'In-app Notifications' => 'In-app notifikace',
      'Email Notifications' => 'Email notifikace',
      'Currency Settings' => 'Nastavení měn',
      'Currency Rates' => 'Kurzy měn',
      'Mass Email' => 'Mass Email',
      'Test Connection' => 'Test Connection',
      'Connecting' => 'Connecting...',
      'Activities' => 'Activities',
      'Admin Notifications' => 'Admin Notifications',
      'Passwords' => 'Passwords',
      '2-Factor Authentication' => '2-Factor Authentication',
      'Attachments' => 'Attachments'
    ],
    'messages' => [
      'ldapTestConnection' => 'The connection successfully established.'
    ]
  ],
  'Stream' => [
    'messages' => [
      'infoMention' => 'Type **@username** to mention user in the post.',
      'infoSyntax' => 'Available markdown syntax',
      'couldNotAddFollowerUserHasNoAccessToStream' => 'Could not add the user \'{userName}\' to the followers. The user does not have \'stream\' access to the record.'
    ],
    'syntaxItems' => [
      'code' => 'code',
      'multilineCode' => 'multiline code',
      'strongText' => 'strong text',
      'emphasizedText' => 'emphasized text',
      'deletedText' => 'deleted text',
      'blockquote' => 'blockquote',
      'link' => 'link'
    ]
  ],
  'Team' => [
    'fields' => [
      'name' => 'Jméno',
      'roles' => 'Role',
      'layoutSet' => 'Layout Set',
      'positionList' => 'Seznam pozic'
    ],
    'links' => [
      'users' => 'Uživatelé',
      'notes' => 'Notes',
      'roles' => 'Roles',
      'layoutSet' => 'Layout Set',
      'inboundEmails' => 'Group Email Accounts'
    ],
    'tooltips' => [
      'layoutSet' => 'Provides the ability to have layouts that differ from standard ones. Layout Set will be applied to users who have this team set as Default Team.',
      'roles' => 'Access Roles. Users of this team obtain access control level from selected roles.',
      'positionList' => 'Available positions in this team. E.g. Salesperson, Manager.'
    ],
    'labels' => [
      'Create Team' => 'Vytvořit tým'
    ]
  ],
  'Template' => [
    'fields' => [
      'name' => 'Name',
      'body' => 'Body',
      'entityType' => 'Entity Type',
      'header' => 'Header',
      'footer' => 'Footer',
      'leftMargin' => 'Left Margin',
      'topMargin' => 'Top Margin',
      'rightMargin' => 'Right Margin',
      'bottomMargin' => 'Bottom Margin',
      'printFooter' => 'Print Footer',
      'printHeader' => 'Print Header',
      'footerPosition' => 'Footer Position',
      'headerPosition' => 'Header Position',
      'variables' => 'Available Placeholders',
      'pageOrientation' => 'Page Orientation',
      'pageFormat' => 'Paper Format',
      'pageWidth' => 'Page Width (mm)',
      'pageHeight' => 'Page Height (mm)',
      'fontFace' => 'Font',
      'title' => 'Title'
    ],
    'links' => [],
    'labels' => [
      'Create Template' => 'Create Template'
    ],
    'options' => [
      'pageOrientation' => [
        'Portrait' => 'Portrait',
        'Landscape' => 'Landscape'
      ],
      'pageFormat' => [
        'Custom' => 'Custom'
      ],
      'placeholders' => [
        'pagebreak' => 'Page break',
        'today' => 'Today (date)',
        'now' => 'Now (date-time)'
      ],
      'fontFace' => [
        'aealarabiya' => 'AlArabiya',
        'aefurat' => 'Aefurat',
        'cid0cs' => 'CID-0 cs',
        'cid0ct' => 'CID-0 ct',
        'cid0jp' => 'CID-0 jp',
        'cid0kr' => 'CID-0 kr',
        'courier' => 'Courier',
        'dejavusans' => 'DejaVu Sans',
        'dejavusanscondensed' => 'DejaVu Sans Condensed',
        'dejavusansextralight' => 'DejaVu Sans ExtraLight',
        'dejavusansmono' => 'DejaVu Sans Mono',
        'dejavuserif' => 'DejaVu Serif',
        'dejavuserifcondensed' => 'DejaVu Serif Condensed',
        'freemono' => 'FreeMono',
        'freesans' => 'FreeSans',
        'freeserif' => 'FreeSerif',
        'helvetica' => 'Helvetica',
        'hysmyeongjostdmedium' => 'Hysmyeongjostd Medium',
        'kozgopromedium' => 'Kozgo Pro Medium',
        'kozminproregular' => 'Kozmin Pro Regular',
        'msungstdlight' => 'Msung Std Light',
        'pdfacourier' => 'PDFA Courier',
        'pdfahelvetica' => 'PDFA Helvetica',
        'pdfasymbol' => 'PDFA Symbol',
        'pdfatimes' => 'PDFA Times',
        'stsongstdlight' => 'STSong Std Light',
        'symbol' => 'Symbol',
        'times' => 'Times'
      ]
    ],
    'tooltips' => [
      'footer' => 'Use {pageNumber} to print page number.',
      'variables' => 'Copy-paste needed placeholder to Header, Body or Footer.'
    ]
  ],
  'User' => [
    'fields' => [
      'name' => 'Jméno',
      'userName' => 'Uživatelské jméno',
      'title' => 'Title',
      'type' => 'Type',
      'isAdmin' => 'Je admin',
      'defaultTeam' => 'Výchozí tým',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Telefon',
      'roles' => 'Role',
      'portals' => 'Portals',
      'portalRoles' => 'Portal Roles',
      'teamRole' => 'Pozice',
      'password' => 'Heslo',
      'currentPassword' => 'Current Password',
      'passwordConfirm' => 'Potvrzení hesla',
      'newPassword' => 'Nové heslo',
      'newPasswordConfirm' => 'Potvrzení nového hesla',
      'yourPassword' => 'Your current password',
      'avatar' => 'Avatar',
      'isActive' => 'Je aktivní',
      'isPortalUser' => 'Is Portal User',
      'contact' => 'Contact',
      'accounts' => 'Accounts',
      'account' => 'Account (Primary)',
      'sendAccessInfo' => 'Send Email with Access Info to User',
      'portal' => 'Portal',
      'gender' => 'Gender',
      'position' => 'Position in Team',
      'ipAddress' => 'IP Address',
      'passwordPreview' => 'Password Preview',
      'isSuperAdmin' => 'Is Super Admin',
      'lastAccess' => 'Last Access',
      'apiKey' => 'API Key',
      'secretKey' => 'Secret Key',
      'dashboardTemplate' => 'Dashboard Template',
      'auth2FA' => '2FA',
      'authMethod' => 'Authentication Method',
      'auth2FAEnable' => 'Enable 2-Factor Authentication',
      'auth2FAMethod' => '2FA Method',
      'auth2FATotpSecret' => '2FA TOTP Secret',
      'acceptanceStatus' => 'Acceptance Status',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
      'orders' => 'Potvrzené objendávky'
    ],
    'links' => [
      'defaultTeam' => 'Default Team',
      'teams' => 'Týmy',
      'roles' => 'Role',
      'notes' => 'Notes',
      'portals' => 'Portals',
      'portalRoles' => 'Portal Roles',
      'contact' => 'Contact',
      'accounts' => 'Accounts',
      'account' => 'Account (Primary)',
      'tasks' => 'Tasks',
      'userData' => 'User Data',
      'dashboardTemplate' => 'Dashboard Template',
      'targetLists' => 'Cílové seznamy',
      'orders' => 'Potvrzené objendávky'
    ],
    'labels' => [
      'Create User' => 'Vytvořit uživatele',
      'Generate' => 'Generovat',
      'Access' => 'Přístup',
      'Preferences' => 'Předvolby',
      'Change Password' => 'Změnit heslo',
      'Teams and Access Control' => 'Týmy a kontrola přístupu',
      'Forgot Password?' => 'Zapomenuté heslo?',
      'Password Change Request' => 'Požadavek na změnu hesla',
      'Email Address' => 'Emailová adresa',
      'External Accounts' => 'Externí účty',
      'Email Accounts' => 'Emailové účty',
      'Portal' => 'Portal',
      'Create Portal User' => 'Create Portal User',
      'Proceed w/o Contact' => 'Proceed w/o Contact',
      'Generate New API Key' => 'Generate New API Key',
      'Generate New Password' => 'Generate New Password',
      'Send Password Change Link' => 'Send Password Change Link',
      'Back to login form' => 'Back to login form',
      'Requirements' => 'Requirements',
      'Security' => 'Security',
      'Reset 2FA' => 'Reset 2FA',
      'Code' => 'Code',
      'Secret' => 'Secret',
      'Send Code' => 'Send Code'
    ],
    'tooltips' => [
      'defaultTeam' => 'All records created by this user will be related to this team by default.',
      'userName' => 'Letters a-z, numbers 0-9 and underscores are allowed.',
      'isAdmin' => 'Admin user can access everything.',
      'isActive' => 'If unchecked then user won\'t be able to login.',
      'teams' => 'Teams which this user belongs to. Access control level is inherited from team\'s roles.',
      'roles' => 'Additional access roles. Use it if user doesn\'t belong to any team or you need to extend access control level only for this user.',
      'portalRoles' => 'Additional portal roles. Use it to extend access control level exclusively for this user.',
      'portals' => 'Portals which this user has access to.'
    ],
    'messages' => [
      'sendPasswordChangeLinkConfirmation' => 'An email with a unique link will be sent to the user allowing them to change their password. The link will expire after a specific amount of time.',
      'passwordRecoverySentIfMatched' => 'Assuming the entered data matched any user account.',
      'passwordStrengthLength' => 'Must be at least {length} characters long.',
      'passwordStrengthLetterCount' => 'Must contain at least {count} letter(s).',
      'passwordStrengthNumberCount' => 'Must contain at least {count} digit(s).',
      'passwordStrengthBothCases' => 'Must contain letters of both upper and lower case.',
      'passwordWillBeSent' => 'Heslo bude posláno na emailovou adresu uživatele.',
      'passwordChanged' => 'Heslo bylo změněno',
      'userCantBeEmpty' => 'Uživatelské jméno nemůže být prázdné',
      'wrongUsernamePasword' => 'Nesprávné uživatelské jmén/heslo',
      'emailAddressCantBeEmpty' => 'Emailová adresa nemůže zůstat prázdná',
      'userNameEmailAddressNotFound' => 'Uživatelské jméno/heslo nebylo nalezeno',
      'forbidden' => 'Tato operace není povolena, prosím zkuste to později',
      'uniqueLinkHasBeenSent' => 'Unikátní link byl poslán na zadanou emailovou adresu.',
      'passwordChangedByRequest' => 'Heslo bylo změněo.',
      'setupSmtpBefore' => 'You need to setup [SMTP settings]({url}) to make the system be able to send password in email.',
      'userNameExists' => 'User Name already exists',
      'wrongCode' => 'Wrong code',
      'codeIsRequired' => 'Code is required',
      'yourAuthenticationCode' => 'Your authentication code: {code}.',
      'choose2FaSmsPhoneNumber' => 'Select a phone number that will be used for 2FA.',
      'choose2FaEmailAddress' => 'Select an email address that will be used for 2FA. It\'s highly recommended to use a non-primary email address.',
      'enterCodeSentInEmail' => 'Enter the code sent to your email address.',
      'enterCodeSentBySms' => 'Enter the code sent by SMS to your phone number.',
      'enterTotpCode' => 'Enter a code from your authenticator app.',
      'verifyTotpCode' => 'Scan the QR-code with your mobile authenticator app. If you have a trouble with scanning, you can enter the secret manually. After that you will see a 6-digit code in your application. Enter this code in the field below.',
      'generateAndSendNewPassword' => 'A new password will be generated and sent to the user\'s email address.',
      'security2FaResetConfimation' => 'Are you sure you want to reset the current 2FA settings?',
      'auth2FARequiredHeader' => '2 factor authentication required',
      'auth2FARequired' => 'You need to set up 2 factor authentication. Use an authenticator application on your mobile phone (e.g. Google Authenticator).',
      'ldapUserInEspoNotFound' => 'User is not found in EspoCRM. Contact your administrator to create the user.',
      'passwordChangeRequestNotFound' => 'The password change request is not found. It might be expired. Try to initiate a new password recovery from the [login page]({url}).'
    ],
    'options' => [
      'gender' => [
        '' => 'Not Set',
        'Male' => 'Male',
        'Female' => 'Female',
        'Neutral' => 'Neutral'
      ],
      'type' => [
        'regular' => 'Regular',
        'admin' => 'Admin',
        'portal' => 'Portal',
        'system' => 'System',
        'super-admin' => 'Super-Admin',
        'api' => 'API'
      ],
      'authMethod' => [
        'ApiKey' => 'API Key',
        'Hmac' => 'HMAC'
      ]
    ],
    'boolFilters' => [
      'onlyMyTeam' => 'Pouze můj tým'
    ],
    'presetFilters' => [
      'active' => 'Aktivní',
      'activePortal' => 'Portal Active',
      'activeApi' => 'API Active'
    ]
  ],
  'Webhook' => [
    'labels' => [
      'Create Webhook' => 'Create Webhook'
    ],
    'fields' => [
      'event' => 'Event',
      'url' => 'URL',
      'isActive' => 'Is Active',
      'user' => 'API User',
      'entityType' => 'Entity Type',
      'field' => 'Field',
      'secretKey' => 'Secret Key'
    ],
    'links' => [
      'user' => 'User'
    ]
  ],
  'Account' => [
    'fields' => [
      'name' => 'Název',
      'emailAddress' => 'Email',
      'website' => 'Web',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Fakturační adresa',
      'shippingAddress' => 'Doručovací adresa',
      'description' => 'Popis',
      'sicCode' => 'IČ',
      'industry' => 'Průmysl',
      'type' => 'Typ',
      'contactRole' => 'Pozice',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Kampaň',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
      'originalLead' => 'Original Lead',
      'orderses' => 'Orderses',
      'orders' => 'Orders'
    ],
    'links' => [
      'contacts' => 'Kontakty',
      'contactsPrimary' => 'Contacts (primary)',
      'opportunities' => 'Případy',
      'cases' => 'Události',
      'documents' => 'Dokumenty',
      'meetingsPrimary' => 'Schůzky (rozšířené)',
      'callsPrimary' => 'Volání (rozšířené)',
      'tasksPrimary' => 'Úkoly (rozšířené)',
      'emailsPrimary' => 'Emaily (rozšířené)',
      'targetLists' => 'Cílové seznamy',
      'campaignLogRecords' => 'Log kampaně',
      'campaign' => 'Kampaň',
      'portalUsers' => 'Portal Users',
      'originalLead' => 'Original Lead',
      'orderses' => 'Orderses',
      'orders' => 'Orders'
    ],
    'options' => [
      'type' => [
        'Customer' => 'Zákazník',
        'Investor' => 'Investor',
        'Partner' => 'Partner',
        'Reseller' => 'Prodejce'
      ],
      'industry' => [
        'Aerospace' => 'Aerospace',
        'Agriculture' => 'Zemědělství',
        'Advertising' => 'Reklama',
        'Apparel & Accessories' => 'Oblečení a doplňky',
        'Architecture' => 'Architecture',
        'Automotive' => 'Automotive',
        'Banking' => 'Bankovnictví',
        'Biotechnology' => 'Biotechnologie',
        'Building Materials & Equipment' => 'Building Materials & Equipment',
        'Chemical' => 'Chemie',
        'Construction' => 'Construction',
        'Computer' => 'Počítače',
        'Defense' => 'Defense',
        'Creative' => 'Creative',
        'Culture' => 'Culture',
        'Consulting' => 'Consulting',
        'Education' => 'Vzdělání',
        'Electronics' => 'Elektronika',
        'Electric Power' => 'Electric Power',
        'Energy' => 'Energy',
        'Entertainment & Leisure' => 'Zábava a volný čas',
        'Finance' => 'Finance',
        'Food & Beverage' => 'Stravování a nápoje',
        'Grocery' => 'Potraviny',
        'Hospitality' => 'Hospitality',
        'Healthcare' => 'Healthcare',
        'Insurance' => 'Pojištění',
        'Legal' => 'Právo',
        'Manufacturing' => 'Manufacturing',
        'Mass Media' => 'Mass Media',
        'Mining' => 'Mining',
        'Music' => 'Music',
        'Marketing' => 'Marketing',
        'Publishing' => 'Vydavatelství',
        'Petroleum' => 'Petroleum',
        'Real Estate' => 'Nemovitosti',
        'Retail' => 'Retail',
        'Shipping' => 'Shipping',
        'Service' => 'Služby',
        'Support' => 'Support',
        'Sports' => 'Sport',
        'Software' => 'Software',
        'Technology' => 'Technologie',
        'Telecommunications' => 'Telekomunikace',
        'Television' => 'TV',
        'Testing, Inspection & Certification' => 'Testing, Inspection & Certification',
        'Transportation' => 'Doprava',
        'Travel' => 'Travel',
        'Venture Capital' => 'Rizikový kapitál',
        'Wholesale' => 'Wholesale',
        'Water' => 'Water'
      ]
    ],
    'labels' => [
      'Create Account' => 'Vytvořit Společnosti',
      'Copy Billing' => 'Zkopírovat fakturační údaje',
      'Set Primary' => 'Set Primary'
    ],
    'presetFilters' => [
      'customers' => 'Zákazníci',
      'partners' => 'Partneři',
      'recentlyCreated' => 'Recently Created'
    ]
  ],
  'Calendar' => [
    'modes' => [
      'month' => 'Měsíc',
      'week' => 'Týden',
      'day' => 'Den',
      'agendaWeek' => 'Týden',
      'agendaDay' => 'Den',
      'timeline' => 'Timeline'
    ],
    'labels' => [
      'Today' => 'Dnes',
      'Create' => 'Vytvořit',
      'Shared' => 'Shared',
      'Add User' => 'Add User',
      'current' => 'current',
      'time' => 'time',
      'User List' => 'User List',
      'Manage Users' => 'Manage Users',
      'View Calendar' => 'View Calendar',
      'Create Shared View' => 'Create Shared View'
    ]
  ],
  'Call' => [
    'fields' => [
      'name' => 'Název',
      'parent' => 'Rodič',
      'status' => 'Status',
      'dateStart' => 'Datum zahájení',
      'dateEnd' => 'Datum ukončení',
      'direction' => 'Směr',
      'duration' => 'Trvání',
      'description' => 'Popis',
      'users' => 'Uživatelé',
      'contacts' => 'Kontakty',
      'leads' => 'Stopy',
      'reminders' => 'Připomenutí',
      'account' => 'Organizace',
      'acceptanceStatus' => 'Acceptance Status'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Plánovaný',
        'Held' => 'Uskutečněný',
        'Not Held' => 'Neuskutečněný'
      ],
      'direction' => [
        'Outbound' => 'Odchozí',
        'Inbound' => 'Příchozí'
      ],
      'acceptanceStatus' => [
        'None' => 'None',
        'Accepted' => 'Přijatý',
        'Declined' => 'Odmítnutý',
        'Tentative' => 'Předběžný'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Nastavit jako uskutečněný',
      'setNotHeld' => 'Nastavit jako neuskutečněný'
    ],
    'labels' => [
      'Create Call' => 'Vytvořit volání',
      'Set Held' => 'Nastavit jako uskutečněný',
      'Set Not Held' => 'Nastavit jako neuskutečněný',
      'Send Invitations' => 'Poslat pozvánky'
    ],
    'presetFilters' => [
      'planned' => 'Plánovaný',
      'held' => 'Uskutečněný',
      'todays' => 'Dnešní'
    ]
  ],
  'Campaign' => [
    'fields' => [
      'name' => 'Název',
      'description' => 'Popis',
      'status' => 'Status',
      'type' => 'Typ',
      'startDate' => 'Datum zahájení',
      'endDate' => 'Datum ukončení',
      'targetLists' => 'Cílové seznamy',
      'excludingTargetLists' => 'Excluding Target Lists',
      'sentCount' => 'Poslané',
      'openedCount' => 'Otevřené',
      'clickedCount' => 'Kliknuté',
      'optedOutCount' => 'Odhlášené',
      'bouncedCount' => 'Odmítnuté',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Tvrdě odmítnuté',
      'softBouncedCount' => 'Měkce odmítnuté',
      'leadCreatedCount' => 'Vytvořených stop',
      'revenue' => 'Příjem',
      'revenueConverted' => 'příjem (konvertováno)',
      'budget' => 'Budget',
      'budgetConverted' => 'Budget (converted)',
      'budgetCurrency' => 'Budget Currency',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address'
    ],
    'links' => [
      'targetLists' => 'Cílové seznamy',
      'excludingTargetLists' => 'Excluding Target Lists',
      'accounts' => 'Organizace',
      'contacts' => 'Kontakty',
      'leads' => 'Stopy',
      'opportunities' => 'Případy',
      'campaignLogRecords' => 'Log',
      'massEmails' => 'Mass Emails',
      'trackingUrls' => 'Tracking URLs',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template'
    ],
    'options' => [
      'type' => [
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'TV',
        'Radio' => 'Rádio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Email'
      ],
      'status' => [
        'Planning' => 'Plánované',
        'Active' => 'Aktivní',
        'Inactive' => 'Neaktivní',
        'Complete' => 'Kompletní'
      ]
    ],
    'labels' => [
      'Create Campaign' => 'Vytvořit kampaň',
      'Target Lists' => 'Cílové seznamy',
      'Statistics' => 'Statistiky',
      'hard' => 'těžký',
      'soft' => 'měkký',
      'Unsubscribe' => 'Unsubscribe',
      'Mass Emails' => 'Mass Emails',
      'Email Templates' => 'Email Templates',
      'Unsubscribe again' => 'Unsubscribe again',
      'Subscribe again' => 'Subscribe again',
      'Create Target List' => 'Create Target List',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF'
    ],
    'presetFilters' => [
      'active' => 'Aktivní'
    ],
    'messages' => [
      'unsubscribed' => 'You have been unsubscribed from our mailing list.',
      'subscribedAgain' => 'You are subscribed again.'
    ],
    'tooltips' => [
      'targetLists' => 'Targets that should receive messages.',
      'excludingTargetLists' => 'Targets that should not receive messages.'
    ]
  ],
  'CampaignLogRecord' => [
    'fields' => [
      'action' => 'Akce',
      'actionDate' => 'Datum',
      'data' => 'Data',
      'campaign' => 'Kampaň',
      'parent' => 'Cíl',
      'object' => 'Objekt',
      'application' => 'Aplikace',
      'queueItem' => 'Queue Item',
      'stringData' => 'String Data',
      'stringAdditionalData' => 'String Additional Data',
      'isTest' => 'Is Test'
    ],
    'links' => [
      'queueItem' => 'Queue Item',
      'parent' => 'Parent',
      'object' => 'Object',
      'campaign' => 'Campaign'
    ],
    'options' => [
      'action' => [
        'Sent' => 'Poslané',
        'Opened' => 'Otevřené',
        'Opted Out' => 'Odhlášené',
        'Bounced' => 'Odmítnuté',
        'Clicked' => 'Kliknuté',
        'Lead Created' => 'Vytvořeno stop',
        'Opted In' => 'Opted In'
      ]
    ],
    'labels' => [
      'All' => 'Vše'
    ],
    'presetFilters' => [
      'sent' => 'Sent',
      'opened' => 'Opened',
      'optedOut' => 'Opted Out',
      'optedIn' => 'Opted In',
      'bounced' => 'Bounced',
      'clicked' => 'Clicked',
      'leadCreated' => 'Lead Created'
    ]
  ],
  'CampaignTrackingUrl' => [
    'fields' => [
      'url' => 'URL',
      'action' => 'Action',
      'urlToUse' => 'Code to insert instead of URL',
      'message' => 'Message',
      'campaign' => 'Campaign'
    ],
    'links' => [
      'campaign' => 'Campaign'
    ],
    'labels' => [
      'Create CampaignTrackingUrl' => 'Create Tracking URL'
    ],
    'options' => [
      'action' => [
        'Redirect' => 'Redirect',
        'Show Message' => 'Show Message'
      ]
    ],
    'tooltips' => [
      'url' => 'The recipient will be redirected to this location after they follow the link.',
      'message' => 'The message will be shown to the recipient after they follow the link. Markdown is supported.'
    ]
  ],
  'Case' => [
    'fields' => [
      'name' => 'Název',
      'number' => 'Číslo',
      'status' => 'Status',
      'account' => 'Organizace',
      'contact' => 'Kontakt',
      'contacts' => 'Contacts',
      'priority' => 'Priorita',
      'type' => 'Typ',
      'description' => 'Popis',
      'inboundEmail' => 'Group Email Account',
      'lead' => 'Lead',
      'attachments' => 'Attachments'
    ],
    'links' => [
      'inboundEmail' => 'Group Email Account',
      'account' => 'Account',
      'contact' => 'Contact (Primary)',
      'Contacts' => 'Contacts',
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'emails' => 'Emails',
      'articles' => 'Knowledge Base Articles',
      'lead' => 'Lead',
      'attachments' => 'Attachments'
    ],
    'options' => [
      'status' => [
        'New' => 'Nový',
        'Assigned' => 'Přiřazený',
        'Pending' => 'Čekající',
        'Closed' => 'Uzavřený',
        'Rejected' => 'Odmítnutý',
        'Duplicate' => 'Duplikovaný'
      ],
      'priority' => [
        'Low' => 'Malá',
        'Normal' => 'Normální',
        'High' => 'Vysoká',
        'Urgent' => 'Urgentní'
      ],
      'type' => [
        'Question' => 'Otázka',
        'Incident' => 'Incident',
        'Problem' => 'Problém'
      ]
    ],
    'labels' => [
      'Create Case' => 'Vytvořit událost',
      'Close' => 'Close',
      'Reject' => 'Reject',
      'Closed' => 'Closed',
      'Rejected' => 'Rejected'
    ],
    'presetFilters' => [
      'open' => 'Otevřený',
      'closed' => 'Zavřený'
    ]
  ],
  'Contact' => [
    'fields' => [
      'name' => 'Název',
      'emailAddress' => 'Email',
      'title' => 'Pozice',
      'account' => 'Organizace',
      'accounts' => 'Organizace',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Typ organizace',
      'doNotCall' => 'Nevolat',
      'address' => 'Adresa',
      'opportunityRole' => 'Pozice vzhledem k případu',
      'accountRole' => 'Pozice',
      'description' => 'Popis',
      'campaign' => 'Kampaň',
      'targetLists' => 'Cílové seznamy',
      'targetList' => 'Cílový seznam',
      'portalUser' => 'Portal User',
      'hasPortalUser' => 'Has Portal User',
      'originalLead' => 'Original Lead',
      'acceptanceStatus' => 'Acceptance Status',
      'accountIsInactive' => 'Account Inactive',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)'
    ],
    'links' => [
      'opportunities' => 'Případy',
      'cases' => 'Události',
      'targetLists' => 'Cílové seznamy',
      'campaignLogRecords' => 'Log kampaně',
      'campaign' => 'Kampaň',
      'account' => 'Account (Primary)',
      'accounts' => 'Accounts',
      'casesPrimary' => 'Cases (Primary)',
      'tasksPrimary' => 'Tasks (expanded)',
      'opportunitiesPrimary' => 'Opportunities (Primary)',
      'portalUser' => 'Portal User',
      'originalLead' => 'Original Lead',
      'documents' => 'Documents'
    ],
    'labels' => [
      'Create Contact' => 'Vytvořit kontakt'
    ],
    'options' => [
      'opportunityRole' => [
        '' => '',
        'Decision Maker' => 'Rozhoduje',
        'Evaluator' => 'Hodnotí',
        'Influencer' => 'Má vliv'
      ]
    ],
    'presetFilters' => [
      'portalUsers' => 'Portal Users',
      'notPortalUsers' => 'Not Portal Users',
      'accountActive' => 'Active'
    ]
  ],
  'Document' => [
    'labels' => [
      'Create Document' => 'Vytvořit dokument',
      'Details' => 'Detaily'
    ],
    'fields' => [
      'name' => 'Název',
      'status' => 'Status',
      'file' => 'Soubor',
      'type' => 'Typ',
      'publishDate' => 'Datum publikace',
      'expirationDate' => 'Datum expirace',
      'description' => 'Popis',
      'accounts' => 'Organizace',
      'folder' => 'Složka',
      'source' => 'Zdroj'
    ],
    'links' => [
      'accounts' => 'Organizace',
      'opportunities' => 'Případy',
      'folder' => 'Složka',
      'leads' => 'Leads',
      'contacts' => 'Contacts'
    ],
    'options' => [
      'status' => [
        'Active' => 'Aktivní',
        'Draft' => 'Draft',
        'Expired' => 'Expirovaný',
        'Canceled' => 'Zrušený'
      ],
      'type' => [
        '' => '-',
        'Contract' => 'Kontrakt',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Licenční smlouva'
      ]
    ],
    'presetFilters' => [
      'active' => 'Aktivní',
      'draft' => 'Draft'
    ]
  ],
  'DocumentFolder' => [
    'labels' => [
      'Create DocumentFolder' => 'Vytvořit složku',
      'Manage Categories' => 'Spravovat složky',
      'Documents' => 'Documents',
      'documents' => 'Dokumenty'
    ],
    'links' => [
      'documents' => 'Dokumenty'
    ]
  ],
  'EmailQueueItem' => [
    'fields' => [
      'name' => 'Name',
      'status' => 'Status',
      'target' => 'Target',
      'sentAt' => 'Date Sent',
      'attemptCount' => 'Attempts',
      'emailAddress' => 'Email Address',
      'massEmail' => 'Mass Email',
      'isTest' => 'Is Test'
    ],
    'links' => [
      'target' => 'Target',
      'massEmail' => 'Mass Email'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pending',
        'Sent' => 'Sent',
        'Failed' => 'Failed',
        'Sending' => 'Sending'
      ]
    ],
    'presetFilters' => [
      'pending' => 'Pending',
      'sent' => 'Sent',
      'failed' => 'Failed'
    ]
  ],
  'KnowledgeBaseArticle' => [
    'labels' => [
      'Create KnowledgeBaseArticle' => 'Create Article',
      'Any' => 'Any',
      'Send in Email' => 'Send in Email',
      'Move Up' => 'Move Up',
      'Move Down' => 'Move Down',
      'Move to Top' => 'Move to Top',
      'Move to Bottom' => 'Move to Bottom'
    ],
    'fields' => [
      'name' => 'Name',
      'status' => 'Status',
      'type' => 'Type',
      'attachments' => 'Attachments',
      'publishDate' => 'Publish Date',
      'expirationDate' => 'Expiration Date',
      'description' => 'Description',
      'body' => 'Body',
      'categories' => 'Categories',
      'language' => 'Language',
      'portals' => 'Portals'
    ],
    'links' => [
      'cases' => 'Cases',
      'opportunities' => 'Opportunities',
      'categories' => 'Categories',
      'portals' => 'Portals'
    ],
    'options' => [
      'status' => [
        'In Review' => 'In Review',
        'Draft' => 'Draft',
        'Archived' => 'Archived',
        'Published' => 'Published'
      ],
      'type' => [
        'Article' => 'Article'
      ]
    ],
    'tooltips' => [
      'portals' => 'Article will be available only in specified portals.'
    ],
    'presetFilters' => [
      'published' => 'Published'
    ]
  ],
  'KnowledgeBaseCategory' => [
    'labels' => [
      'Create KnowledgeBaseCategory' => 'Create Category',
      'Manage Categories' => 'Manage Categories',
      'Articles' => 'Articles'
    ],
    'links' => [
      'articles' => 'Articles'
    ]
  ],
  'Lead' => [
    'labels' => [
      'Converted To' => 'Konvertováno do',
      'Create Lead' => 'Vytvořit stopu',
      'Convert' => 'Konvertovat',
      'convert' => 'konvertovat'
    ],
    'fields' => [
      'name' => 'Název',
      'emailAddress' => 'Email',
      'title' => 'Pozice',
      'website' => 'Web',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Název organizace',
      'doNotCall' => 'Nevolat',
      'address' => 'Adresa',
      'status' => 'Status',
      'source' => 'Zdroj',
      'opportunityAmount' => 'Částka případu',
      'opportunityAmountConverted' => 'Částka případu (konvertováno)',
      'description' => 'Popis',
      'createdAccount' => 'Organizace',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Případ',
      'convertedAt' => 'Converted At',
      'campaign' => 'Kampaň',
      'targetLists' => 'Cílové seznamy',
      'targetList' => 'Cílový seznam',
      'industry' => 'Industry',
      'acceptanceStatus' => 'Acceptance Status',
      'opportunityAmountCurrency' => 'Opportunity Amount Currency',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)'
    ],
    'links' => [
      'targetLists' => 'Cílové seznamy',
      'campaignLogRecords' => 'Log kampaně',
      'campaign' => 'Kampaň',
      'createdAccount' => 'Account',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Opportunity',
      'cases' => 'Cases',
      'documents' => 'Documents'
    ],
    'options' => [
      'status' => [
        'New' => 'Nový',
        'Assigned' => 'Přiřazený',
        'In Process' => 'V procesu',
        'Converted' => 'Konvertovaný',
        'Recycled' => 'Recyklovaný',
        'Dead' => 'Mrtvý'
      ],
      'source' => [
        'Call' => 'Volání',
        'Email' => 'Email',
        'Existing Customer' => 'Existující zákazník',
        'Partner' => 'Partner',
        'Public Relations' => 'Veřejné vztahy',
        'Web Site' => 'Web',
        'Campaign' => 'Kampaň',
        'Other' => 'Ostatní'
      ]
    ],
    'presetFilters' => [
      'active' => 'Aktivní',
      'actual' => 'Actual',
      'converted' => 'Konvertovaný'
    ]
  ],
  'MassEmail' => [
    'fields' => [
      'name' => 'Name',
      'status' => 'Status',
      'storeSentEmails' => 'Store Sent Emails',
      'startAt' => 'Date Start',
      'fromAddress' => 'From Address',
      'fromName' => 'From Name',
      'replyToAddress' => 'Reply-to Address',
      'replyToName' => 'Reply-to Name',
      'campaign' => 'Campaign',
      'emailTemplate' => 'Email Template',
      'inboundEmail' => 'Email Account',
      'targetLists' => 'Target Lists',
      'excludingTargetLists' => 'Excluding Target Lists',
      'optOutEntirely' => 'Opt-Out Entirely',
      'smtpAccount' => 'SMTP Account'
    ],
    'links' => [
      'targetLists' => 'Target Lists',
      'excludingTargetLists' => 'Excluding Target Lists',
      'queueItems' => 'Queue Items',
      'campaign' => 'Campaign',
      'emailTemplate' => 'Email Template',
      'inboundEmail' => 'Email Account'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Draft',
        'Pending' => 'Pending',
        'In Process' => 'In Process',
        'Complete' => 'Complete',
        'Canceled' => 'Canceled',
        'Failed' => 'Failed'
      ]
    ],
    'labels' => [
      'Create MassEmail' => 'Create Mass Email',
      'Send Test' => 'Send Test',
      'System SMTP' => 'System SMTP',
      'system' => 'system',
      'group' => 'group'
    ],
    'messages' => [
      'selectAtLeastOneTarget' => 'Select at least one target.',
      'testSent' => 'Test email(s) supposed to be sent'
    ],
    'tooltips' => [
      'optOutEntirely' => 'Email addresses of recipients that unsubscribed will be marked as opted out and they will not receive any mass emails anymore.',
      'targetLists' => 'Targets that should receive messages.',
      'excludingTargetLists' => 'Targets that should not receive messages.',
      'storeSentEmails' => 'Emails will be stored in CRM.'
    ],
    'presetFilters' => [
      'actual' => 'Actual',
      'complete' => 'Complete'
    ]
  ],
  'Meeting' => [
    'fields' => [
      'name' => 'Název',
      'parent' => 'Rodič',
      'status' => 'Status',
      'dateStart' => 'Datum zahájení',
      'dateEnd' => 'Datum ukončení',
      'duration' => 'Trvání',
      'description' => 'Popis',
      'users' => 'Uživatelé',
      'contacts' => 'Kontakty',
      'leads' => 'Stopy',
      'reminders' => 'Připomenutí',
      'account' => 'Organizace',
      'acceptanceStatus' => 'Acceptance Status',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'isAllDay' => 'Is All-Day',
      'sourceEmail' => 'Source Email',
      'Acceptance' => 'Acceptance'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Planovaný',
        'Held' => 'Uskutečněný',
        'Not Held' => 'Neuskutečněný'
      ],
      'acceptanceStatus' => [
        'None' => '-',
        'Accepted' => 'Přijatý',
        'Declined' => 'Odmítnutý',
        'Tentative' => 'Předběžný'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Nastavit jako uskutečněný',
      'setNotHeld' => 'Nastavit jako neuskutečněný'
    ],
    'labels' => [
      'Create Meeting' => 'Vytvořit schůzku',
      'Set Held' => 'Nastavit jako uskutečněný',
      'Set Not Held' => 'Nastavit jako neuskutečněný',
      'Send Invitations' => 'Odeslat pozvánky',
      'on time' => 'na čas',
      'before' => 'před',
      'All-Day' => 'All-Day'
    ],
    'presetFilters' => [
      'planned' => 'Plánovaný',
      'held' => 'Uskutečněný',
      'todays' => 'Dnešní'
    ],
    'messages' => [
      'sendInvitationsConfirmation' => 'Send invitation emails to attendees?',
      'selectAcceptanceStatus' => 'Set your acceptance status.',
      'nothingHasBeenSent' => 'Nothing were sent'
    ]
  ],
  'Opportunity' => [
    'fields' => [
      'name' => 'Název',
      'account' => 'Organizace',
      'stage' => 'Stav',
      'amount' => 'Částka',
      'probability' => 'Pravděpodobnost, %',
      'leadSource' => 'Zdrojová stopa',
      'doNotCall' => 'Nevolat',
      'closeDate' => 'Deadline',
      'contacts' => 'Kontakty',
      'contact' => 'Contact (Primary)',
      'description' => 'Popis',
      'amountConverted' => 'Částka (konvertováno)',
      'amountWeightedConverted' => 'Vážená částka',
      'campaign' => 'Kampaň',
      'originalLead' => 'Original Lead',
      'amountCurrency' => 'Amount Currency',
      'contactRole' => 'Contact Role',
      'lastStage' => 'Last Stage'
    ],
    'links' => [
      'contacts' => 'Kontakty',
      'contact' => 'Contact (Primary)',
      'documents' => 'Dokumenty',
      'campaign' => 'Kampaň',
      'originalLead' => 'Original Lead'
    ],
    'options' => [
      'stage' => [
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Qualification',
        'Proposal' => 'Proposal',
        'Negotiation' => 'Negotiation',
        'Needs Analysis' => 'Needs Analysis',
        'Value Proposition' => 'Value Proposition',
        'Id. Decision Makers' => 'Id. Decision Makers',
        'Perception Analysis' => 'Perception Analysis',
        'Proposal/Price Quote' => 'Proposal/Price Quote',
        'Negotiation/Review' => 'Negotiation/Review',
        'Closed Won' => 'Closed Won',
        'Closed Lost' => 'Closed Lost'
      ]
    ],
    'labels' => [
      'Create Opportunity' => 'Vytvořit případ'
    ],
    'presetFilters' => [
      'open' => 'Otevřený',
      'won' => 'Vyhraný',
      'lost' => 'Lost'
    ]
  ],
  'TargetList' => [
    'fields' => [
      'name' => 'Název',
      'description' => 'Popis',
      'entryCount' => 'Počet vstupů',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'Kampaně',
      'endDate' => 'Datum ukončení',
      'targetLists' => 'Cílové seznamy',
      'includingActionList' => 'Including',
      'excludingActionList' => 'Excluding',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out'
    ],
    'links' => [
      'accounts' => 'Organizace',
      'contacts' => 'Kontakty',
      'leads' => 'Stopy',
      'campaigns' => 'Kampaně',
      'massEmails' => 'Mass Emails'
    ],
    'options' => [
      'type' => [
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'TV',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter'
      ],
      'targetStatus' => [
        'Opted Out' => 'Opted Out',
        'Listed' => 'Listed'
      ]
    ],
    'labels' => [
      'Create TargetList' => 'Vytvořit cílový seznam',
      'Opted Out' => 'Odhlášené',
      'Cancel Opt-Out' => 'Cancel Opt-Out',
      'Opt-Out' => 'Opt-Out'
    ]
  ],
  'Task' => [
    'fields' => [
      'name' => 'Název',
      'parent' => 'Rodič',
      'status' => 'Status',
      'dateStart' => 'Datum zahájení',
      'dateEnd' => 'Datum dokončení',
      'dateStartDate' => 'Datum zahájení (celý den)',
      'dateEndDate' => 'Datum ukončení (celý den)',
      'priority' => 'Priorita',
      'description' => 'Popis',
      'isOverdue' => 'Je zpozděné',
      'account' => 'Organizace',
      'dateCompleted' => 'Datum dokončení',
      'attachments' => 'Přílohy',
      'reminders' => 'Reminders',
      'contact' => 'Contact'
    ],
    'links' => [
      'attachments' => 'Přílohy',
      'account' => 'Account',
      'contact' => 'Contact',
      'email' => 'Email'
    ],
    'options' => [
      'status' => [
        'Not Started' => 'Nezahájeno',
        'Started' => 'Zahájeno',
        'Completed' => 'Dokončeno',
        'Canceled' => 'Zrušeno',
        'Deferred' => 'Odloženo'
      ],
      'priority' => [
        'Low' => 'Malá',
        'Normal' => 'Normální',
        'High' => 'Vysoká',
        'Urgent' => 'Urgentní'
      ]
    ],
    'labels' => [
      'Create Task' => 'Vytvořit úkol',
      'Complete' => 'Dokončit',
      'overdue' => 'overdue'
    ],
    'presetFilters' => [
      'actual' => 'Aktuální',
      'completed' => 'Dokončené',
      'deferred' => 'Deferred',
      'todays' => 'Dnešní',
      'overdue' => 'Zpožděné'
    ],
    'nameOptions' => [
      'replyToEmail' => 'Reply to email'
    ]
  ],
  'Components' => [
    'fields' => [
      'productItem' => 'Položky produktu',
      'products' => 'Products',
      'warehouseItem' => 'Položky skladu'
    ],
    'links' => [
      'productItem' => 'Položky produktu',
      'products' => 'Products',
      'warehouseItem' => 'Položky skladu'
    ],
    'labels' => [
      'Create Components' => 'Vytvořit Komponent'
    ]
  ],
  'EquipmentClasses' => [
    'fields' => [
      'equipmentDefinitionLists' => 'Definice vybavení',
      'equipmentClassListsRight' => 'Equipment Class Lists Right',
      'equipmentClassListsLeft' => 'Equipment Class Lists Left',
      'equipmentDefinitionLists1' => 'Definice vybavení',
      'equipmentClassesPropertiesElementses' => 'Equipment Classes Properties Elementses',
      'equipmentDefinitionsPropertiesFromClasses' => 'Záznam vlastností definic vybavení',
      'productSegments' => 'Segmenty produktu',
      'processSegmentEquipmentItems' => 'Položka vybavení segmentu procesu',
      'productSegmentEquipmentItems' => 'Product Segment Equipment Items'
    ],
    'links' => [
      'equipmentDefinitionLists' => 'Definice vybavení',
      'equipmentClassListsRight' => 'Equipment Class Lists Right',
      'equipmentClassListsLeft' => 'Equipment Class Lists Left',
      'equipmentDefinitionLists1' => 'Definice vybavení',
      'equipmentClassesPropertiesElementses' => 'Equipment Classes Properties Elementses',
      'equipmentDefinitionsPropertiesFromClasses' => 'Záznam vlastností definic vybavení',
      'productSegments' => 'Segmenty produktu',
      'processSegmentEquipmentItems' => 'Položka vybavení segmentu procesu',
      'productSegmentEquipmentItems' => 'Product Segment Equipment Items'
    ],
    'labels' => [
      'Create EquipmentClassList' => 'Vytvořit Třída vybavení'
    ]
  ],
  'EquipmentDefinitions' => [
    'fields' => [
      'equipmentClassList' => 'Třída vybavení',
      'equipmentDefinitionListParent' => 'Definice vybavení (nadřazené)',
      'equipmentDefinitionLists' => 'Definice vybavení (podřazené)',
      'equipmentClassLists' => 'Třída vybavení',
      'eqipmentDefinitionsPropertiesFromClasses' => 'Eqipment Definitions Properties From Classes',
      'eqipmentDefinitionsPropertiesFromClasseses' => 'Vlastnosti',
      'productSegments' => 'Segment produktu',
      'processSegmentEquipmentItems' => 'Položka vybavení segmentu procesu',
      'productSegmentEquipmentItems' => 'Product Segment Equipment Items'
    ],
    'links' => [
      'equipmentClassList' => 'Třída vybavení',
      'equipmentDefinitionListParent' => 'Definice vybavení (nadřazené)',
      'equipmentDefinitionLists' => 'Definice vybavení (podřazené)',
      'equipmentClassLists' => 'Třída vybavení',
      'eqipmentDefinitionsPropertiesFromClasses' => 'Eqipment Definitions Properties From Classes',
      'eqipmentDefinitionsPropertiesFromClasseses' => 'Vlastnosti',
      'productSegments' => 'Segment produktu',
      'processSegmentEquipmentItems' => 'Položka vybavení segmentu procesu',
      'productSegmentEquipmentItems' => 'Product Segment Equipment Items'
    ],
    'labels' => [
      'Create EquipmentDefinitionList' => 'Vytvořit Definice vybavení'
    ]
  ],
  'EquipmentDefinitionsPropertiesFromClasses' => [
    'fields' => [
      'equipmentDefinitionList' => 'Definice vybavení',
      'equipmentClassesPropertiesElements' => 'Vlastnost třídy vybavení',
      'value' => 'Hodnota',
      'equipmentClassesPropertiesElementses' => 'Vlastnost třídy vybavení',
      'equipmentClasses' => 'Třída vybavení'
    ],
    'links' => [
      'equipmentDefinitionList' => 'Definice vybavení',
      'equipmentClassesPropertiesElements' => 'Vlastnost třídy vybavení',
      'equipmentClassesPropertiesElementses' => 'Vlastnost třídy vybavení',
      'equipmentClasses' => 'Třída vybavení'
    ],
    'labels' => [
      'Create EqipmentDefinitionsPropertiesFromClasses' => 'Vytvořit Záznam vlastnosti',
      'Create EquipmentDefinitionsPropertiesFromClasses' => 'Vytvořit Záznam vlastností definic vybavení'
    ]
  ],
  'EquipmentProperties' => [
    'fields' => [
      'valueType' => 'Typ',
      'equipmentClassLists' => 'Equipment Class Lists',
      'eqipmentDefinitionsPropertiesFromClasses' => 'Eqipment Definitions Properties From Classes',
      'eqipmentDefinitionsPropertiesFromClasseses' => 'Vlastnosti',
      'equipmentClassList' => 'Třída vybavení'
    ],
    'links' => [
      'equipmentClassLists' => 'Equipment Class Lists',
      'eqipmentDefinitionsPropertiesFromClasses' => 'Eqipment Definitions Properties From Classes',
      'eqipmentDefinitionsPropertiesFromClasseses' => 'Vlastnosti',
      'equipmentClassList' => 'Třída vybavení'
    ],
    'labels' => [
      'Create EquipmentClassesPropertiesElements' => 'Vytvořit Vlastnost třídy vybavení'
    ],
    'options' => [
      'valueType' => [
        'String' => 'String',
        'Url' => 'Url',
        'Int' => 'Int',
        'Float' => 'Float'
      ]
    ]
  ],
  'KeyPerformanceIndicator' => [
    'fields' => [],
    'links' => [],
    'labels' => [
      'Create KeyPerformanceIndicator' => 'Vytvořit KPI'
    ]
  ],
  'Machine' => [
    'fields' => [
      'test' => 'Test'
    ],
    'links' => [],
    'labels' => [
      'Create Machine' => 'Vytvořit Výrobní zařízení'
    ],
    'options' => [
      'test' => [
        1 => '1',
        2 => '2'
      ]
    ]
  ],
  'MaterialClassList' => [
    'fields' => [],
    'links' => [],
    'labels' => [
      'Create MaterialClassList' => 'Vytvořit Třída materiálu'
    ]
  ],
  'MaterialClasses' => [
    'fields' => [
      'materialProperties' => 'Vlastnosti tříd materiálu',
      'materialDefinitions' => 'Definice materiálu',
      'productSegments' => 'Segment produktu',
      'materialDefinitionsPropertiesFromClasses' => 'Záznam vlastností',
      'processSegmentMaterialItems' => 'Process Segment Material Items',
      'productSegmentMaterialItems' => 'Product Segment Material Items'
    ],
    'links' => [
      'materialProperties' => 'Vlastnosti tříd materiálu',
      'materialDefinitions' => 'Definice materiálu',
      'productSegments' => 'Segment produktu',
      'materialDefinitionsPropertiesFromClasses' => 'Záznam vlastností',
      'processSegmentMaterialItems' => 'Process Segment Material Items',
      'productSegmentMaterialItems' => 'Product Segment Material Items'
    ],
    'labels' => [
      'Create MaterialClasses' => 'Vytvořit Třída materiálu'
    ]
  ],
  'MaterialDefinitionList' => [
    'fields' => [],
    'links' => [],
    'labels' => [
      'Create MaterialDefinitionList' => 'Vytvořit Definice materiálu'
    ]
  ],
  'MaterialDefinitions' => [
    'fields' => [
      'materialClasses' => 'Třídy materiálu',
      'materialDefinitionsPropertiesFromClasseses' => 'Vlastnosti',
      'materialLots' => 'Dávka materiálu',
      'productSegments' => 'Segmenty produktů',
      'processSegmentMaterialItems' => 'Položka materiálu segmentu procesu',
      'productSegmentMaterialItems' => 'Product Segment Material Items'
    ],
    'links' => [
      'materialClasses' => 'Třídy materiálu',
      'materialDefinitionsPropertiesFromClasseses' => 'Vlastnosti',
      'materialLots' => 'Dávka materiálu',
      'productSegments' => 'Segmenty produktů',
      'processSegmentMaterialItems' => 'Položka materiálu segmentu procesu',
      'productSegmentMaterialItems' => 'Product Segment Material Items'
    ],
    'labels' => [
      'Create MaterialDefinitions' => 'Vytvořit Definice materiálu'
    ]
  ],
  'MaterialDefinitionsPropertiesFromClasses' => [
    'fields' => [
      'materialDefinitions' => 'Definice materiálu',
      'materialProperties' => 'Vlastnost materiálu',
      'value' => 'Hodnota',
      'materialClasses' => 'Třída materiálu'
    ],
    'links' => [
      'materialDefinitions' => 'Definice materiálu',
      'materialProperties' => 'Vlastnost materiálu',
      'materialClasses' => 'Třída materiálu'
    ],
    'labels' => [
      'Create MaterialDefinitionsPropertiesFromClasses' => 'Vytvořit Záznam vlastností definic materiálu'
    ]
  ],
  'MaterialLotList' => [
    'fields' => [],
    'links' => [],
    'labels' => [
      'Create MaterialLotList' => 'Vytvořit Dávka materiálu'
    ]
  ],
  'MaterialLots' => [
    'fields' => [
      'materialDefinitionses' => 'Material Definitionses',
      'storageLocation' => 'Místo uskladnění',
      'quantityUnit' => 'Jednotka',
      'quantityValue' => 'Množství',
      'materialDefinitions' => 'Definice materiálu'
    ],
    'links' => [
      'materialDefinitionses' => 'Material Definitionses',
      'materialDefinitions' => 'Definice materiálu'
    ],
    'labels' => [
      'Create MaterialLots' => 'Vytvořit Dávka materiálu'
    ],
    'tooltips' => [
      'name' => 'Pokud prázdné, tak "Dávka ... "'
    ]
  ],
  'MaterialProperties' => [
    'fields' => [
      'materialClasses' => 'Třídy materiálu',
      'materialDefinitionsPropertiesFromClasses' => 'Vlastnosti',
      'valueType' => 'Typ'
    ],
    'links' => [
      'materialClasses' => 'Třídy materiálu',
      'materialDefinitionsPropertiesFromClasses' => 'Vlastnosti'
    ],
    'labels' => [
      'Create MaterialProperties' => 'Vytvořit Vlastnost třídy materiálu'
    ],
    'options' => [
      'valueType' => [
        'String' => 'String',
        'Float' => 'Float',
        'Int' => 'Int'
      ]
    ]
  ],
  'OrderItem' => [
    'fields' => [
      'orders' => 'Objednávky',
      'products' => 'Produkty',
      'quantity' => 'Množství',
      'productDefinitions' => 'Produkt'
    ],
    'links' => [
      'orders' => 'Objednávky',
      'products' => 'Produkty',
      'productDefinitions' => 'Produkt'
    ],
    'labels' => [
      'Create OrderItem' => 'Vytvořit Položka objednávky'
    ]
  ],
  'Orders' => [
    'fields' => [
      'customerName' => 'Jméno zákazníka',
      'customerEmail' => 'Email zákazníka',
      'status' => 'Status',
      'priority' => 'Priorita (1-10)',
      'orderItems' => 'Položky objednávky',
      'number' => 'Číslo objednávky',
      'confirmed' => 'Objednávka potvrzena',
      'confirmedBy' => 'Potvrzeno',
      'finishedAt' => 'FinishedAt',
      'orderedAt' => 'Datum a čas objednání',
      'startedAt' => 'StartedAt',
      'productsFull' => 'ProductsFull',
      'state' => 'Stav'
    ],
    'links' => [
      'orderItems' => 'Položky objednávky',
      'confirmedBy' => 'Potvrzeno'
    ],
    'labels' => [
      'Create Orders' => 'Vytvořit Objednávka'
    ],
    'options' => [
      'status' => [
        'new' => 'Nová',
        'inProcess' => 'V procesu',
        'Done' => 'Hotová'
      ],
      'priority' => [
        1 => '1 (nejnižší)',
        2 => '2',
        3 => '3',
        4 => '4',
        5 => '5',
        6 => '6',
        7 => '7',
        8 => '8',
        9 => '9',
        10 => '10 (nejvyšší)'
      ]
    ]
  ],
  'PersonellClasses' => [
    'fields' => [],
    'links' => [],
    'labels' => [
      'Create PersonellClasses' => 'Vytvořit Třída personálu'
    ]
  ],
  'Personnel' => [
    'fields' => [],
    'links' => [],
    'labels' => [
      'Create Personnel' => 'Vytvořit Personál'
    ]
  ],
  'PersonnelClasses' => [
    'fields' => [
      'personnelProperties' => 'Vlastnosti tříd personálu',
      'personnelDefinitions' => 'Definice personálu',
      'personnelDefinitionsPropertiesFromClasses' => 'Záznam vlastností',
      'processSegmentPersonnelItems' => 'Položka personálu segmentu procesu',
      'productSegmentPersonnelItems' => 'Product Segment Personnel Items'
    ],
    'links' => [
      'personnelProperties' => 'Vlastnosti tříd personálu',
      'personnelDefinitions' => 'Definice personálu',
      'personnelDefinitionsPropertiesFromClasses' => 'Záznam vlastností',
      'processSegmentPersonnelItems' => 'Položka personálu segmentu procesu',
      'productSegmentPersonnelItems' => 'Product Segment Personnel Items'
    ],
    'labels' => [
      'Create PersonnelClasses' => 'Vytvořit Třída personálu'
    ]
  ],
  'PersonnelDefinitions' => [
    'fields' => [
      'personnelDefinitionsPropertiesFromClasses' => 'Vlastnosti',
      'personnelClasses' => 'Třídy personálu',
      'processSegmentPersonnelItems' => 'Položky personálu segmentu procesu',
      'productSegmentPersonnelItems' => 'Product Segment Personnel Items',
      'name' => 'Jméno'
    ],
    'links' => [
      'personnelDefinitionsPropertiesFromClasses' => 'Vlastnosti',
      'personnelClasses' => 'Třídy personálu',
      'processSegmentPersonnelItems' => 'Položky personálu segmentu procesu',
      'productSegmentPersonnelItems' => 'Product Segment Personnel Items'
    ],
    'labels' => [
      'Create PersonnelDefinitions' => 'Vytvořit Definice personálu'
    ]
  ],
  'PersonnelDefinitionsPropertiesFromClasses' => [
    'fields' => [
      'personnelDefinitions' => 'Definice personálu',
      'personnelProperties' => 'Vlastnost personálu',
      'value' => 'Hodnota',
      'personnelClasses' => 'Třída personálu'
    ],
    'links' => [
      'personnelDefinitions' => 'Definice personálu',
      'personnelProperties' => 'Vlastnost personálu',
      'personnelClasses' => 'Třída personálu'
    ],
    'labels' => [
      'Create PersonnelDefinitionsPropertiesFromClasses' => 'Vytvořit Záznam vlastností definic personálu'
    ]
  ],
  'PersonnelProperties' => [
    'fields' => [
      'personnelClasses' => 'Třídy personálu',
      'personnelDefinitionsPropertiesFromClasses' => 'Vlastnosti',
      'valueType' => 'Typ'
    ],
    'links' => [
      'personnelClasses' => 'Třídy personálu',
      'personnelDefinitionsPropertiesFromClasses' => 'Vlastnosti'
    ],
    'labels' => [
      'Create PersonnelProperties' => 'Vytvořit Vlastnost třídy personálu'
    ],
    'options' => [
      'valueType' => [
        'String' => 'String',
        'Float' => 'Float',
        'Int' => 'Int'
      ]
    ]
  ],
  'PlnovnVroby' => [
    'fields' => [],
    'links' => [],
    'labels' => [
      'Create PlnovnVroby' => 'Vytvořit Plánování výroby'
    ]
  ],
  'PokusnaDruha' => [
    'fields' => [],
    'links' => [],
    'labels' => [
      'Create Pokusna' => 'Vytvořit Pokusna'
    ]
  ],
  'ProcessSegment' => [
    'fields' => [
      'processSegmentEquipmentItems' => 'Vybavení',
      'processSegmentMaterialItems' => 'Materiál',
      'processSegmentPersonnelItems' => 'Personál'
    ],
    'links' => [
      'processSegmentEquipmentItems' => 'Vybavení',
      'processSegmentMaterialItems' => 'Materiál',
      'processSegmentPersonnelItems' => 'Personál'
    ],
    'labels' => [
      'Create ProcessSegment' => 'Vytvořit Segment procesu'
    ]
  ],
  'ProcessSegmentEquipmentItem' => [
    'fields' => [
      'equipmentClasses' => 'Třída vybavení',
      'equipmentDefinitions' => 'Definice vybavení',
      'quantity' => 'Množství',
      'processSegments' => 'Segmenty procesu'
    ],
    'links' => [
      'equipmentClasses' => 'Třída vybavení',
      'equipmentDefinitions' => 'Definice vybavení',
      'processSegments' => 'Segmenty procesu'
    ],
    'labels' => [
      'Create ProcessSegmentEquipmentItem' => 'Vytvořit Položka vybavení segmentu procesu'
    ]
  ],
  'ProcessSegmentMaterialItem' => [
    'fields' => [
      'quantity' => 'Množství',
      'materialClasses' => 'Třída',
      'materialDefinitions' => 'Definice materiálu',
      'processSegments' => 'Segment procesu'
    ],
    'links' => [
      'materialClasses' => 'Třída',
      'materialDefinitions' => 'Definice materiálu',
      'processSegments' => 'Segment procesu'
    ],
    'labels' => [
      'Create ProcessSegmentMaterialItem' => 'Vytvořit Položka materiálu segmentu procesu'
    ]
  ],
  'ProcessSegmentPersonnelItem' => [
    'fields' => [
      'quantity' => 'Množství',
      'personnelClasses' => 'Třída personálu',
      'personnelDefinitions' => 'Definice personálu',
      'processSegments' => 'Segment Procesu'
    ],
    'links' => [
      'personnelClasses' => 'Třída personálu',
      'personnelDefinitions' => 'Definice personálu',
      'processSegments' => 'Segment Procesu'
    ],
    'labels' => [
      'Create ProcessSegmentPersonnelItem' => 'Vytvořit Položka personálu segmentu procesu'
    ]
  ],
  'ProductDefinitions' => [
    'fields' => [
      'productSegments' => 'Segmenty produktu',
      'orderItems' => 'Položka objednávky'
    ],
    'links' => [
      'productSegments' => 'Segmenty produktu',
      'orderItems' => 'Položka objednávky'
    ],
    'labels' => [
      'Create ProductDefinitions' => 'Vytvořit Definice produktu'
    ]
  ],
  'ProductItem' => [
    'fields' => [
      'orders' => 'Objednávky',
      'components' => 'Komponenty',
      'quantity' => 'Množství',
      'products' => 'Produkty'
    ],
    'links' => [
      'orders' => 'Objednávky',
      'components' => 'Komponenty',
      'products' => 'Produkty'
    ],
    'labels' => [
      'Create ProductItem' => 'Vytvořit Položka produktu'
    ]
  ],
  'ProductSegmentEquipmentItem' => [
    'fields' => [
      'equipmentClasses' => 'Třída',
      'equipmentDefinitions' => 'Definice',
      'productSegmentses' => 'Segment produktu',
      'quantity' => 'Množství'
    ],
    'links' => [
      'equipmentClasses' => 'Třída',
      'equipmentDefinitions' => 'Definice',
      'productSegmentses' => 'Segment produktu'
    ],
    'labels' => [
      'Create ProductSegmentEquipmentItem' => 'Vytvořit Položka vybavení (Segment produktu)'
    ]
  ],
  'ProductSegmentMaterialItem' => [
    'fields' => [
      'materialClasses' => 'Třída',
      'materialDefinitions' => 'Definice',
      'quantity' => 'Množství',
      'productSegmentses' => 'Product Segmentses',
      'productSegments' => 'Product Segments'
    ],
    'links' => [
      'materialClasses' => 'Třída',
      'materialDefinitions' => 'Definice',
      'productSegmentses' => 'Product Segmentses',
      'productSegments' => 'Product Segments'
    ],
    'labels' => [
      'Create ProductSegmentMaterialItem' => 'Vytvořit Položka materiálu'
    ]
  ],
  'ProductSegmentPersonnelItem' => [
    'fields' => [
      'personnelClasses' => 'Třída',
      'personnelDefinitions' => 'Definice',
      'productSegmentses' => 'Product Segmentses',
      'quantity' => 'Množství'
    ],
    'links' => [
      'personnelClasses' => 'Třída',
      'personnelDefinitions' => 'Definice',
      'productSegmentses' => 'Product Segmentses'
    ],
    'labels' => [
      'Create ProductSegmentPersonnelItem' => 'Vytvořit Položka personálu (Segment produktu)'
    ]
  ],
  'ProductSegments' => [
    'fields' => [
      'materialDefinitions' => 'Materiál',
      'equipmentDefinitions' => 'Vybavení',
      'duration' => 'Doba trvání (s)',
      'productDefinitions' => 'Definice produktu',
      'materialClasses' => 'Třída materiálu',
      'equipmentClasses' => 'Třída vybavení',
      'productSegmentMaterialItems' => 'Materiál',
      'productSegmentEquipmentItems' => 'Vybavení',
      'productSegmentPersonnelItems1' => 'Personál',
      'productSegmentPersonnelItemy' => 'Personál',
      'productSegmentPersonnelItems' => 'Personál'
    ],
    'links' => [
      'materialDefinitions' => 'Materiál',
      'equipmentDefinitions' => 'Vybavení',
      'productDefinitions' => 'Definice produktu',
      'materialClasses' => 'Třída materiálu',
      'equipmentClasses' => 'Třída vybavení',
      'productSegmentMaterialItems' => 'Materiál',
      'productSegmentEquipmentItems' => 'Vybavení',
      'productSegmentPersonnelItems' => 'Personál',
      'productSegmentPersonnelItems1' => 'Personál',
      'productSegmentPersonnelItemy' => 'Personál'
    ],
    'labels' => [
      'Create ProductSegments' => 'Vytvořit Segment produktu'
    ]
  ],
  'ProductionPlanning' => [
    'fields' => [
      'priority' => 'Priorita (1-10)',
      'orderNumber' => 'Číslo objednávky',
      'productionPlanningItems' => 'Položky plánování výroby',
      'startDate' => 'Datum přesunu do výroby'
    ],
    'links' => [
      'productionPlanningItems' => 'Položky plánování výroby'
    ],
    'labels' => [
      'Create ProductionPlanning' => 'Vytvořit Plánování výroby'
    ]
  ],
  'ProductionPlanningItem' => [
    'fields' => [
      'productionPlanning' => 'Plánování výroby',
      'products' => 'Products',
      'quantity' => 'Množství'
    ],
    'links' => [
      'productionPlanning' => 'Plánování výroby',
      'products' => 'Products'
    ],
    'labels' => [
      'Create ProductionPlanningItem' => 'Vytvořit Položka plánování výroby'
    ]
  ],
  'Products' => [
    'fields' => [
      'category' => 'Kategorie',
      'weight' => 'Hmotnost (kg)',
      'orderses' => 'Orderses',
      'orderItem' => 'Položka objednávky',
      'components' => 'Components',
      'productItem' => 'Product Item',
      'productItems' => 'Položky produktu',
      'warehouseItem' => 'Warehouse Item',
      'productionPlanningItem' => 'Production Planning Item'
    ],
    'links' => [
      'orderses' => 'Orderses',
      'orderItem' => 'Položka objednávky',
      'components' => 'Components',
      'productItem' => 'Product Item',
      'productItems' => 'Položky produktu',
      'warehouseItem' => 'Warehouse Item',
      'productionPlanningItem' => 'Production Planning Item'
    ],
    'labels' => [
      'Create Products' => 'Vytvořit Produkt'
    ],
    'options' => [
      'category' => []
    ]
  ],
  'TestovaciEntita' => [
    'fields' => [],
    'links' => [],
    'labels' => [
      'Create TestovaciEntita' => 'Vytvořit TestovaciEntita'
    ]
  ],
  'TestujiDb' => [
    'fields' => [],
    'links' => [],
    'labels' => [
      'Create TestujiDb' => 'Vytvořit TestujiDb'
    ]
  ],
  'Warehouse' => [
    'fields' => [
      'warehouseItems' => 'Položky skladu'
    ],
    'links' => [
      'warehouseItems' => 'Položky skladu'
    ],
    'labels' => [
      'Create Warehouse' => 'Vytvořit Sklad'
    ]
  ],
  'WarehouseItem' => [
    'fields' => [
      'warehouse' => 'Sklad',
      'products' => 'Products',
      'quantity' => 'Množství',
      'components' => 'Komponenty'
    ],
    'links' => [
      'warehouse' => 'Sklad',
      'products' => 'Products',
      'components' => 'Komponenty'
    ],
    'labels' => [
      'Create WarehouseItem' => 'Vytvořit Položka skladu'
    ]
  ]
];
