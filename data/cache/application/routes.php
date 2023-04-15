<?php
return [
  0 => [
    'route' => '/Activities/{scope}/{id}/{name}',
    'method' => 'get',
    'params' => [
      'controller' => 'Activities',
      'action' => 'list',
      'scope' => ':scope',
      'id' => ':id',
      'name' => ':name'
    ]
  ],
  1 => [
    'route' => '/Activities',
    'method' => 'get',
    'params' => [
      'controller' => 'Activities',
      'action' => 'listCalendarEvents'
    ]
  ],
  2 => [
    'route' => '/Timeline',
    'method' => 'get',
    'params' => [
      'controller' => 'Activities',
      'action' => 'getTimeline'
    ]
  ],
  3 => [
    'route' => '/Activities/{scope}/{id}/{name}/list/{entityType}',
    'method' => 'get',
    'params' => [
      'controller' => 'Activities',
      'action' => 'entityTypeList',
      'scope' => ':scope',
      'id' => ':id',
      'name' => ':name',
      'entityType' => ':entityType'
    ]
  ],
  4 => [
    'route' => '/',
    'method' => 'get',
    'params' => [
      'controller' => 'ApiIndex',
      'action' => 'index'
    ]
  ],
  5 => [
    'route' => '/App/user',
    'method' => 'get',
    'params' => [
      'controller' => 'App',
      'action' => 'user'
    ]
  ],
  6 => [
    'route' => '/Metadata',
    'method' => 'get',
    'params' => [
      'controller' => 'Metadata'
    ]
  ],
  7 => [
    'route' => '/I18n',
    'method' => 'get',
    'params' => [
      'controller' => 'I18n'
    ],
    'noAuth' => true
  ],
  8 => [
    'route' => '/Settings',
    'method' => 'get',
    'params' => [
      'controller' => 'Settings'
    ],
    'noAuth' => true
  ],
  9 => [
    'route' => '/Settings',
    'method' => 'patch',
    'params' => [
      'controller' => 'Settings'
    ]
  ],
  10 => [
    'route' => '/Settings',
    'method' => 'put',
    'params' => [
      'controller' => 'Settings'
    ]
  ],
  11 => [
    'route' => '/User/passwordChangeRequest',
    'method' => 'post',
    'params' => [
      'controller' => 'User',
      'action' => 'passwordChangeRequest'
    ],
    'noAuth' => true
  ],
  12 => [
    'route' => '/User/changePasswordByRequest',
    'method' => 'post',
    'params' => [
      'controller' => 'User',
      'action' => 'changePasswordByRequest'
    ],
    'noAuth' => true
  ],
  13 => [
    'route' => '/Stream',
    'method' => 'get',
    'params' => [
      'controller' => 'Stream',
      'action' => 'list',
      'scope' => 'User'
    ]
  ],
  14 => [
    'route' => '/GlobalSearch',
    'method' => 'get',
    'params' => [
      'controller' => 'GlobalSearch',
      'action' => 'search'
    ]
  ],
  15 => [
    'route' => '/LeadCapture/{apiKey}',
    'method' => 'post',
    'params' => [
      'controller' => 'LeadCapture',
      'action' => 'leadCapture',
      'apiKey' => ':apiKey'
    ],
    'noAuth' => true
  ],
  16 => [
    'route' => '/LeadCapture/{apiKey}',
    'method' => 'options',
    'params' => [
      'controller' => 'LeadCapture',
      'action' => 'leadCapture',
      'apiKey' => ':apiKey'
    ],
    'noAuth' => true
  ],
  17 => [
    'route' => '/{controller}/action/{action}',
    'method' => 'post',
    'params' => [
      'controller' => ':controller',
      'action' => ':action'
    ]
  ],
  18 => [
    'route' => '/{controller}/action/{action}',
    'method' => 'put',
    'params' => [
      'controller' => ':controller',
      'action' => ':action'
    ]
  ],
  19 => [
    'route' => '/{controller}/action/{action}',
    'method' => 'get',
    'params' => [
      'controller' => ':controller',
      'action' => ':action'
    ]
  ],
  20 => [
    'route' => '/{controller}/layout/{name}',
    'method' => 'get',
    'params' => [
      'controller' => 'Layout',
      'scope' => ':controller'
    ]
  ],
  21 => [
    'route' => '/{controller}/layout/{name}',
    'method' => 'put',
    'params' => [
      'controller' => 'Layout',
      'scope' => ':controller'
    ]
  ],
  22 => [
    'route' => '/{controller}/layout/{name}/{setId}',
    'method' => 'put',
    'params' => [
      'controller' => 'Layout',
      'scope' => ':controller'
    ]
  ],
  23 => [
    'route' => '/Admin/rebuild',
    'method' => 'post',
    'params' => [
      'controller' => 'Admin',
      'action' => 'rebuild'
    ]
  ],
  24 => [
    'route' => '/Admin/clearCache',
    'method' => 'post',
    'params' => [
      'controller' => 'Admin',
      'action' => 'clearCache'
    ]
  ],
  25 => [
    'route' => '/Admin/jobs',
    'method' => 'get',
    'params' => [
      'controller' => 'Admin',
      'action' => 'jobs'
    ]
  ],
  26 => [
    'route' => '/Admin/fieldManager/{scope}/{name}',
    'method' => 'get',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'read',
      'scope' => ':scope',
      'name' => ':name'
    ]
  ],
  27 => [
    'route' => '/Admin/fieldManager/{scope}',
    'method' => 'post',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'create',
      'scope' => ':scope'
    ]
  ],
  28 => [
    'route' => '/Admin/fieldManager/{scope}/{name}',
    'method' => 'put',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'update',
      'scope' => ':scope',
      'name' => ':name'
    ]
  ],
  29 => [
    'route' => '/Admin/fieldManager/{scope}/{name}',
    'method' => 'patch',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'update',
      'scope' => ':scope',
      'name' => ':name'
    ]
  ],
  30 => [
    'route' => '/Admin/fieldManager/{scope}/{name}',
    'method' => 'delete',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'delete',
      'scope' => ':scope',
      'name' => ':name'
    ]
  ],
  31 => [
    'route' => '/CurrencyRate',
    'method' => 'put',
    'params' => [
      'controller' => 'CurrencyRate',
      'action' => 'update'
    ]
  ],
  32 => [
    'route' => '/Action',
    'method' => 'post',
    'params' => [
      'controller' => 'Action',
      'action' => 'process'
    ]
  ],
  33 => [
    'route' => '/MassAction',
    'method' => 'post',
    'params' => [
      'controller' => 'MassAction',
      'action' => 'process'
    ]
  ],
  34 => [
    'route' => '/Export',
    'method' => 'post',
    'params' => [
      'controller' => 'Export',
      'action' => 'process'
    ]
  ],
  35 => [
    'route' => '/Kanban/{entityType}',
    'method' => 'get',
    'params' => [
      'controller' => 'Kanban',
      'action' => 'getData'
    ]
  ],
  36 => [
    'route' => '/Attachment/file/{id}',
    'method' => 'get',
    'params' => [
      'controller' => 'Attachment',
      'action' => 'file'
    ]
  ],
  37 => [
    'route' => '/Attachment/chunk/{id}',
    'method' => 'post',
    'params' => [
      'controller' => 'Attachment',
      'action' => 'chunk'
    ]
  ],
  38 => [
    'route' => '/{controller}/{id}',
    'method' => 'get',
    'params' => [
      'controller' => ':controller',
      'action' => 'read',
      'id' => ':id'
    ]
  ],
  39 => [
    'route' => '/{controller}',
    'method' => 'get',
    'params' => [
      'controller' => ':controller',
      'action' => 'index'
    ]
  ],
  40 => [
    'route' => '/{controller}',
    'method' => 'post',
    'params' => [
      'controller' => ':controller',
      'action' => 'create'
    ]
  ],
  41 => [
    'route' => '/{controller}/{id}',
    'method' => 'put',
    'params' => [
      'controller' => ':controller',
      'action' => 'update',
      'id' => ':id'
    ]
  ],
  42 => [
    'route' => '/{controller}/{id}',
    'method' => 'patch',
    'params' => [
      'controller' => ':controller',
      'action' => 'update',
      'id' => ':id'
    ]
  ],
  43 => [
    'route' => '/{controller}/{id}',
    'method' => 'delete',
    'params' => [
      'controller' => ':controller',
      'action' => 'delete',
      'id' => ':id'
    ]
  ],
  44 => [
    'route' => '/{controller}/{id}/stream',
    'method' => 'get',
    'params' => [
      'controller' => 'Stream',
      'action' => 'list',
      'id' => ':id',
      'scope' => ':controller'
    ]
  ],
  45 => [
    'route' => '/{controller}/{id}/posts',
    'method' => 'get',
    'params' => [
      'controller' => 'Stream',
      'action' => 'listPosts',
      'id' => ':id',
      'scope' => ':controller'
    ]
  ],
  46 => [
    'route' => '/{controller}/{id}/subscription',
    'method' => 'put',
    'params' => [
      'controller' => ':controller',
      'id' => ':id',
      'action' => 'follow'
    ]
  ],
  47 => [
    'route' => '/{controller}/{id}/subscription',
    'method' => 'delete',
    'params' => [
      'controller' => ':controller',
      'id' => ':id',
      'action' => 'unfollow'
    ]
  ],
  48 => [
    'route' => '/{controller}/{id}/{link}',
    'method' => 'get',
    'params' => [
      'controller' => ':controller',
      'action' => 'listLinked',
      'id' => ':id',
      'link' => ':link'
    ]
  ],
  49 => [
    'route' => '/{controller}/{id}/{link}',
    'method' => 'post',
    'params' => [
      'controller' => ':controller',
      'action' => 'createLink',
      'id' => ':id',
      'link' => ':link'
    ]
  ],
  50 => [
    'route' => '/{controller}/{id}/{link}',
    'method' => 'delete',
    'params' => [
      'controller' => ':controller',
      'action' => 'removeLink',
      'id' => ':id',
      'link' => ':link'
    ]
  ]
];
