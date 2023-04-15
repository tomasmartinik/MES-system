<?php
return [
  'ActionHistoryRecord' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'number' => [
        'type' => 'int',
        'autoincrement' => true,
        'unique' => true,
        'index' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'targetType' => [
        'type' => 'foreignType',
        'fieldType' => 'linkParent',
        'len' => 100,
        'notNull' => false,
        'index' => 'target',
        'attributeRole' => 'type',
        'dbType' => 'varchar'
      ],
      'data' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'action' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'userType' => [
        'type' => 'foreign',
        'notStorable' => true,
        'relation' => 'user',
        'foreign' => 'type',
        'fieldType' => 'foreign',
        'foreignType' => 'varchar'
      ],
      'ipAddress' => [
        'type' => 'varchar',
        'len' => '39',
        'fieldType' => 'varchar'
      ],
      'targetId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'target',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'targetName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'target',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ],
      'userId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'userName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'user',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'authTokenId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'authTokenName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'authToken',
        'foreign' => 'id',
        'foreignType' => 'id'
      ],
      'authLogRecordId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'authLogRecordName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'authLogRecord',
        'foreign' => 'id',
        'foreignType' => 'id'
      ]
    ],
    'relations' => [
      'authLogRecord' => [
        'type' => 'belongsTo',
        'entity' => 'AuthLogRecord',
        'key' => 'authLogRecordId',
        'foreignKey' => 'id',
        'foreign' => 'actionHistoryRecords'
      ],
      'authToken' => [
        'type' => 'belongsTo',
        'entity' => 'AuthToken',
        'key' => 'authTokenId',
        'foreignKey' => 'id',
        'foreign' => 'actionHistoryRecords'
      ],
      'target' => [
        'type' => 'belongsToParent',
        'key' => 'targetId',
        'foreign' => NULL
      ],
      'user' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'number' => [
        'type' => 'unique',
        'columns' => [
          0 => 'number'
        ],
        'key' => 'UNIQ_NUMBER'
      ],
      'target' => [
        'type' => 'index',
        'columns' => [
          0 => 'targetType',
          1 => 'targetId'
        ],
        'key' => 'IDX_TARGET'
      ],
      'userId' => [
        'type' => 'index',
        'columns' => [
          0 => 'userId'
        ],
        'key' => 'IDX_USER_ID'
      ],
      'authTokenId' => [
        'type' => 'index',
        'columns' => [
          0 => 'authTokenId'
        ],
        'key' => 'IDX_AUTH_TOKEN_ID'
      ],
      'authLogRecordId' => [
        'type' => 'index',
        'columns' => [
          0 => 'authLogRecordId'
        ],
        'key' => 'IDX_AUTH_LOG_RECORD_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'number',
      'order' => 'DESC'
    ]
  ],
  'ArrayValue' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'value' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'attribute' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'entityId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'entity',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'entityType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'entity',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'entityName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'entity',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ]
    ],
    'relations' => [],
    'indexes' => [
      'entityTypeValue' => [
        'columns' => [
          0 => 'entityType',
          1 => 'value'
        ],
        'key' => 'IDX_ENTITY_TYPE_VALUE'
      ],
      'entityValue' => [
        'columns' => [
          0 => 'entityType',
          1 => 'entityId',
          2 => 'value'
        ],
        'key' => 'IDX_ENTITY_VALUE'
      ],
      'entity' => [
        'type' => 'index',
        'columns' => [
          0 => 'entityId',
          1 => 'entityType'
        ],
        'key' => 'IDX_ENTITY'
      ]
    ]
  ],
  'Attachment' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'type' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'size' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'sourceId' => [
        'type' => 'varchar',
        'len' => 36,
        'index' => true,
        'fieldType' => 'varchar'
      ],
      'field' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'isBeingUploaded' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'contents' => [
        'type' => 'text',
        'notStorable' => true,
        'fieldType' => 'text'
      ],
      'role' => [
        'type' => 'varchar',
        'len' => 36,
        'fieldType' => 'varchar'
      ],
      'storage' => [
        'type' => 'varchar',
        'len' => 24,
        'default' => NULL,
        'fieldType' => 'varchar'
      ],
      'storageFilePath' => [
        'type' => 'varchar',
        'len' => 260,
        'default' => NULL,
        'fieldType' => 'varchar'
      ],
      'global' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'parentId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'parent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'parentType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'parentName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'parent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ],
      'relatedId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'related',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'relatedType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'related',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'relatedName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'related',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'related' => [
        'type' => 'belongsToParent',
        'key' => 'relatedId',
        'foreign' => NULL
      ],
      'parent' => [
        'type' => 'belongsToParent',
        'key' => 'parentId',
        'foreign' => 'attachments'
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'parent' => [
        'columns' => [
          0 => 'parentType',
          1 => 'parentId'
        ],
        'key' => 'IDX_PARENT'
      ],
      'sourceId' => [
        'type' => 'index',
        'columns' => [
          0 => 'sourceId'
        ],
        'key' => 'IDX_SOURCE_ID'
      ],
      'related' => [
        'type' => 'index',
        'columns' => [
          0 => 'relatedId',
          1 => 'relatedType'
        ],
        'key' => 'IDX_RELATED'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'AuthLogRecord' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'username' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'ipAddress' => [
        'type' => 'varchar',
        'len' => '45',
        'fieldType' => 'varchar'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'isDenied' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'denialReason' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'requestTime' => [
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float'
      ],
      'requestUrl' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'requestMethod' => [
        'type' => 'varchar',
        'len' => '15',
        'fieldType' => 'varchar'
      ],
      'authTokenIsActive' => [
        'type' => 'foreign',
        'relation' => 'authToken',
        'foreign' => 'isActive',
        'fieldType' => 'foreign',
        'foreignType' => 'bool'
      ],
      'authenticationMethod' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'portalId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'portalName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'portal',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'userId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'userName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'user',
        'foreign' => 'name'
      ],
      'authTokenId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'authTokenName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'authToken',
        'foreign' => 'id',
        'foreignType' => 'id'
      ],
      'actionHistoryRecordsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'actionHistoryRecordsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'actionHistoryRecords' => [
        'type' => 'hasMany',
        'entity' => 'ActionHistoryRecord',
        'foreignKey' => 'authLogRecordId',
        'foreign' => 'authLogRecord'
      ],
      'authToken' => [
        'type' => 'belongsTo',
        'entity' => 'AuthToken',
        'key' => 'authTokenId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'portal' => [
        'type' => 'belongsTo',
        'entity' => 'Portal',
        'key' => 'portalId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'user' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true
      ]
    ],
    'indexes' => [
      'ipAddress' => [
        'columns' => [
          0 => 'ipAddress'
        ],
        'key' => 'IDX_IP_ADDRESS'
      ],
      'ipAddressRequestTime' => [
        'columns' => [
          0 => 'ipAddress',
          1 => 'requestTime'
        ],
        'key' => 'IDX_IP_ADDRESS_REQUEST_TIME'
      ],
      'requestTime' => [
        'columns' => [
          0 => 'requestTime'
        ],
        'key' => 'IDX_REQUEST_TIME'
      ],
      'portalId' => [
        'type' => 'index',
        'columns' => [
          0 => 'portalId'
        ],
        'key' => 'IDX_PORTAL_ID'
      ],
      'userId' => [
        'type' => 'index',
        'columns' => [
          0 => 'userId'
        ],
        'key' => 'IDX_USER_ID'
      ],
      'authTokenId' => [
        'type' => 'index',
        'columns' => [
          0 => 'authTokenId'
        ],
        'key' => 'IDX_AUTH_TOKEN_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'requestTime',
      'order' => 'DESC'
    ]
  ],
  'AuthToken' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'token' => [
        'type' => 'varchar',
        'len' => '36',
        'index' => true,
        'fieldType' => 'varchar'
      ],
      'hash' => [
        'type' => 'varchar',
        'len' => 150,
        'index' => true,
        'fieldType' => 'varchar'
      ],
      'secret' => [
        'type' => 'varchar',
        'len' => '36',
        'fieldType' => 'varchar'
      ],
      'userId' => [
        'dbType' => 'varchar',
        'len' => '36',
        'type' => 'foreignId',
        'fieldType' => 'link',
        'index' => true,
        'attributeRole' => 'id',
        'notNull' => false
      ],
      'ipAddress' => [
        'type' => 'varchar',
        'len' => '45',
        'fieldType' => 'varchar'
      ],
      'isActive' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'lastAccess' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'userName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'user',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'portalId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'portalName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'portal',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'actionHistoryRecordsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'actionHistoryRecordsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'actionHistoryRecords' => [
        'type' => 'hasMany',
        'entity' => 'ActionHistoryRecord',
        'foreignKey' => 'authTokenId',
        'foreign' => 'authToken'
      ],
      'portal' => [
        'type' => 'belongsTo',
        'entity' => 'Portal',
        'key' => 'portalId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'user' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'token' => [
        'columns' => [
          0 => 'token',
          1 => 'deleted'
        ],
        'key' => 'IDX_TOKEN'
      ],
      'hash' => [
        'type' => 'index',
        'columns' => [
          0 => 'hash'
        ],
        'key' => 'IDX_HASH'
      ],
      'userId' => [
        'type' => 'index',
        'columns' => [
          0 => 'userId'
        ],
        'key' => 'IDX_USER_ID'
      ],
      'portalId' => [
        'type' => 'index',
        'columns' => [
          0 => 'portalId'
        ],
        'key' => 'IDX_PORTAL_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'lastAccess',
      'order' => 'DESC'
    ]
  ],
  'Autofollow' => [
    'fields' => [
      'id' => [
        'type' => 'id',
        'dbType' => 'int',
        'autoincrement' => true,
        'fieldType' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'entityType' => [
        'type' => 'varchar',
        'len' => 100,
        'index' => true,
        'fieldType' => 'varchar'
      ],
      'userId' => [
        'type' => 'varchar',
        'len' => 24,
        'index' => true,
        'fieldType' => 'varchar'
      ]
    ],
    'relations' => [],
    'indexes' => [
      'entityType' => [
        'type' => 'index',
        'columns' => [
          0 => 'entityType'
        ],
        'key' => 'IDX_ENTITY_TYPE'
      ],
      'userId' => [
        'type' => 'index',
        'columns' => [
          0 => 'userId'
        ],
        'key' => 'IDX_USER_ID'
      ]
    ]
  ],
  'Currency' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'rate' => [
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float'
      ]
    ],
    'relations' => []
  ],
  'DashboardTemplate' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'layout' => [
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray'
      ],
      'dashletsOptions' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'name',
      'order' => 'ASC'
    ]
  ],
  'Email' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'subject' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'fromName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'fromAddress' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'fromString' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'replyToString' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'replyToName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'replyToAddress' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'addressNameMap' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'from' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'to' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'cc' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'bcc' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'replyTo' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'personStringData' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'isRead' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'isNotRead' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'isReplied' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'isNotReplied' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'isImportant' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'inTrash' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'folderId' => [
        'dbType' => 'varchar',
        'len' => 255,
        'type' => 'foreignId',
        'notStorable' => true,
        'default' => NULL,
        'fieldType' => 'link',
        'index' => 'folder',
        'attributeRole' => 'id',
        'notNull' => false
      ],
      'isUsers' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'nameHash' => [
        'type' => 'text',
        'notStorable' => true,
        'fieldType' => 'text'
      ],
      'typeHash' => [
        'type' => 'text',
        'notStorable' => true,
        'fieldType' => 'text'
      ],
      'idHash' => [
        'type' => 'text',
        'notStorable' => true,
        'fieldType' => 'text'
      ],
      'messageId' => [
        'type' => 'varchar',
        'len' => 255,
        'index' => true,
        'fieldType' => 'varchar'
      ],
      'messageIdInternal' => [
        'type' => 'varchar',
        'len' => 300,
        'fieldType' => 'varchar'
      ],
      'emailAddress' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'base'
      ],
      'bodyPlain' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'body' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'isHtml' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'status' => [
        'type' => 'varchar',
        'default' => 'Archived',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'hasAttachment' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'dateSent' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'deliveryDate' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'isSystem' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'isJustSent' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'isBeingImported' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'icsContents' => [
        'type' => 'text',
        'dbType' => 'text',
        'fieldType' => 'text'
      ],
      'icsEventData' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'fieldType' => 'jsonObject'
      ],
      'icsEventUid' => [
        'type' => 'varchar',
        'len' => 255,
        'index' => true,
        'fieldType' => 'varchar'
      ],
      'icsEventDateStart' => [
        'type' => 'datetime',
        'notNull' => false,
        'notStorable' => true,
        'fieldType' => 'datetime'
      ],
      'createEvent' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'base'
      ],
      'icsEventDateStartDate' => [
        'type' => 'date',
        'notNull' => false,
        'notStorable' => true,
        'fieldType' => 'date'
      ],
      'folderName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link'
      ],
      'fromEmailAddressId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'fromEmailAddressName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'fromEmailAddress',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'toEmailAddressesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'toEmailAddresses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'toEmailAddressesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'ccEmailAddressesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'ccEmailAddresses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'ccEmailAddressesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'replyToEmailAddressesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'replyToEmailAddresses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'replyToEmailAddressesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'attachmentsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'orderBy' => [
          0 => [
            0 => 'createdAt',
            1 => 'ASC'
          ],
          1 => [
            0 => 'name',
            1 => 'ASC'
          ]
        ],
        'isLinkMultipleIdList' => true,
        'relation' => 'attachments',
        'isLinkStub' => false
      ],
      'attachmentsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'isLinkStub' => false
      ],
      'parentId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'parent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'parentType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'parentName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'parent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'sentById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'sentByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'sentBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'repliedId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'repliedName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'replied',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'repliesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'replies',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'dateSent',
        'isLinkStub' => false
      ],
      'repliesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'repliesColumns' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => [
          'status' => 'status'
        ],
        'attributeRole' => 'columnsMap'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'usersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'users',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'usersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'usersColumns' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => [
          'inTrash' => 'inTrash',
          'folderId' => 'folderId'
        ],
        'attributeRole' => 'columnsMap'
      ],
      'assignedUsersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'assignedUsers',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'assignedUsersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'inboundEmailsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'inboundEmails',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'inboundEmailsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'emailAccountsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'emailAccounts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'emailAccountsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'createdEventId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'createdEvent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'createdEventType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'createdEvent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'createdEventName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'createdEvent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ],
      'accountId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'accountName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'tasksIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'tasks',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'tasksNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'tasksColumns' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => [
          'status' => 'status'
        ],
        'attributeRole' => 'columnsMap'
      ],
      'bccEmailAddressesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'bccEmailAddressesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'attachmentsTypes' => [
        'type' => 'jsonObject',
        'notStorable' => true
      ]
    ],
    'relations' => [
      'tasks' => [
        'type' => 'hasMany',
        'entity' => 'Task',
        'foreignKey' => 'emailId',
        'foreign' => 'email'
      ],
      'account' => [
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdEvent' => [
        'type' => 'belongsToParent',
        'key' => 'createdEventId',
        'foreign' => NULL
      ],
      'emailAccounts' => [
        'type' => 'manyMany',
        'entity' => 'EmailAccount',
        'relationName' => 'emailEmailAccount',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'emailId',
          1 => 'emailAccountId'
        ],
        'foreign' => 'emails'
      ],
      'inboundEmails' => [
        'type' => 'manyMany',
        'entity' => 'InboundEmail',
        'relationName' => 'emailInboundEmail',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'emailId',
          1 => 'inboundEmailId'
        ],
        'foreign' => 'emails'
      ],
      'replyToEmailAddresses' => [
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'midKeys' => [
          0 => 'emailId',
          1 => 'emailAddressId'
        ],
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
      'bccEmailAddresses' => [
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'midKeys' => [
          0 => 'emailId',
          1 => 'emailAddressId'
        ],
        'relationName' => 'emailEmailAddress',
        'conditions' => [
          'addressType' => 'bcc'
        ],
        'additionalColumns' => [
          'addressType' => [
            'type' => 'varchar',
            'len' => '4'
          ]
        ]
      ],
      'ccEmailAddresses' => [
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'midKeys' => [
          0 => 'emailId',
          1 => 'emailAddressId'
        ],
        'relationName' => 'emailEmailAddress',
        'conditions' => [
          'addressType' => 'cc'
        ],
        'additionalColumns' => [
          'addressType' => [
            'type' => 'varchar',
            'len' => '4'
          ]
        ]
      ],
      'toEmailAddresses' => [
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'midKeys' => [
          0 => 'emailId',
          1 => 'emailAddressId'
        ],
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
      'fromEmailAddress' => [
        'type' => 'belongsTo',
        'entity' => 'EmailAddress',
        'key' => 'fromEmailAddressId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'replies' => [
        'type' => 'hasMany',
        'entity' => 'Email',
        'foreignKey' => 'repliedId',
        'foreign' => 'replied'
      ],
      'replied' => [
        'type' => 'belongsTo',
        'entity' => 'Email',
        'key' => 'repliedId',
        'foreignKey' => 'id',
        'foreign' => 'replies'
      ],
      'parent' => [
        'type' => 'belongsToParent',
        'key' => 'parentId',
        'foreign' => 'emails'
      ],
      'sentBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'sentById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'users' => [
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'emailUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'emailId',
          1 => 'userId'
        ],
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
      'assignedUsers' => [
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'entityUser',
        'midKeys' => [
          0 => 'entityId',
          1 => 'userId'
        ],
        'conditions' => [
          'entityType' => 'Email'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'Email'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'attachments' => [
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
        'conditions' => [
          'OR' => [
            0 => [
              'field' => NULL
            ],
            1 => [
              'field' => 'attachments'
            ]
          ]
        ],
        'relationName' => 'attachments'
      ]
    ],
    'indexes' => [
      'createdById' => [
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'dateSent' => [
        'columns' => [
          0 => 'dateSent',
          1 => 'deleted'
        ],
        'key' => 'IDX_DATE_SENT'
      ],
      'dateSentStatus' => [
        'columns' => [
          0 => 'dateSent',
          1 => 'status',
          2 => 'deleted'
        ],
        'key' => 'IDX_DATE_SENT_STATUS'
      ],
      'system_fullTextSearch' => [
        'columns' => [
          0 => 'name',
          1 => 'bodyPlain',
          2 => 'body'
        ],
        'flags' => [
          0 => 'fulltext'
        ],
        'key' => 'IDX_SYSTEM_FULL_TEXT_SEARCH'
      ],
      'messageId' => [
        'type' => 'index',
        'columns' => [
          0 => 'messageId'
        ],
        'key' => 'IDX_MESSAGE_ID'
      ],
      'icsEventUid' => [
        'type' => 'index',
        'columns' => [
          0 => 'icsEventUid'
        ],
        'key' => 'IDX_ICS_EVENT_UID'
      ],
      'fromEmailAddressId' => [
        'type' => 'index',
        'columns' => [
          0 => 'fromEmailAddressId'
        ],
        'key' => 'IDX_FROM_EMAIL_ADDRESS_ID'
      ],
      'parent' => [
        'type' => 'index',
        'columns' => [
          0 => 'parentId',
          1 => 'parentType'
        ],
        'key' => 'IDX_PARENT'
      ],
      'sentById' => [
        'type' => 'index',
        'columns' => [
          0 => 'sentById'
        ],
        'key' => 'IDX_SENT_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'repliedId' => [
        'type' => 'index',
        'columns' => [
          0 => 'repliedId'
        ],
        'key' => 'IDX_REPLIED_ID'
      ],
      'createdEvent' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdEventId',
          1 => 'createdEventType'
        ],
        'key' => 'IDX_CREATED_EVENT'
      ],
      'accountId' => [
        'type' => 'index',
        'columns' => [
          0 => 'accountId'
        ],
        'key' => 'IDX_ACCOUNT_ID'
      ]
    ],
    'fullTextSearchColumnList' => [
      0 => 'name',
      1 => 'bodyPlain',
      2 => 'body'
    ],
    'collection' => [
      'orderBy' => 'dateSent',
      'order' => 'DESC'
    ]
  ],
  'EmailAccount' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'emailAddress' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'status' => [
        'type' => 'varchar',
        'default' => 'Active',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'host' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'port' => [
        'type' => 'int',
        'default' => 993,
        'fieldType' => 'int',
        'len' => 11
      ],
      'security' => [
        'type' => 'varchar',
        'default' => 'SSL',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'username' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'password' => [
        'type' => 'password',
        'fieldType' => 'password'
      ],
      'monitoredFolders' => [
        'type' => 'jsonArray',
        'default' => [
          0 => 'INBOX'
        ],
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'sentFolder' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'storeSentEmails' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'keepFetchedEmailsUnread' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'fetchSince' => [
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date'
      ],
      'fetchData' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'useImap' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'useSmtp' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'smtpHost' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'smtpPort' => [
        'type' => 'int',
        'default' => 587,
        'fieldType' => 'int',
        'len' => 11
      ],
      'smtpAuth' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'smtpSecurity' => [
        'type' => 'varchar',
        'default' => 'TLS',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'smtpUsername' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'smtpPassword' => [
        'type' => 'password',
        'fieldType' => 'password'
      ],
      'smtpAuthMechanism' => [
        'type' => 'varchar',
        'default' => 'login',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'imapHandler' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'smtpHandler' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'emailFolderId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'emailFolderName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'emailFolder',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'emailsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'emailsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'filtersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'filtersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'emailFolder' => [
        'type' => 'belongsTo',
        'entity' => 'EmailFolder',
        'key' => 'emailFolderId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'emails' => [
        'type' => 'manyMany',
        'entity' => 'Email',
        'relationName' => 'emailEmailAccount',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'emailAccountId',
          1 => 'emailId'
        ],
        'foreign' => 'emailAccounts'
      ],
      'filters' => [
        'type' => 'hasChildren',
        'entity' => 'EmailFilter',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'emailFolderId' => [
        'type' => 'index',
        'columns' => [
          0 => 'emailFolderId'
        ],
        'key' => 'IDX_EMAIL_FOLDER_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'name',
      'order' => 'ASC'
    ]
  ],
  'EmailAddress' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'lower' => [
        'type' => 'varchar',
        'index' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'invalid' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'optOut' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'primary' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false
      ]
    ],
    'relations' => [],
    'indexes' => [
      'lower' => [
        'type' => 'index',
        'columns' => [
          0 => 'lower'
        ],
        'key' => 'IDX_LOWER'
      ]
    ],
    'collection' => [
      'orderBy' => 'name',
      'order' => 'ASC'
    ]
  ],
  'EmailFilter' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'from' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'to' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'subject' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'bodyContains' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'isGlobal' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'action' => [
        'type' => 'varchar',
        'default' => 'Skip',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'parentId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'parent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'parentType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'parentName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'parent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ],
      'emailFolderId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'emailFolderName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'emailFolder',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'emailFolder' => [
        'type' => 'belongsTo',
        'entity' => 'EmailFolder',
        'key' => 'emailFolderId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'parent' => [
        'type' => 'belongsToParent',
        'key' => 'parentId',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'parent' => [
        'type' => 'index',
        'columns' => [
          0 => 'parentId',
          1 => 'parentType'
        ],
        'key' => 'IDX_PARENT'
      ],
      'emailFolderId' => [
        'type' => 'index',
        'columns' => [
          0 => 'emailFolderId'
        ],
        'key' => 'IDX_EMAIL_FOLDER_ID'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'EmailFolder' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'len' => 64,
        'fieldType' => 'varchar'
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'order' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'skipNotifications' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'order',
      'order' => 'ASC'
    ]
  ],
  'EmailTemplate' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'subject' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'body' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'isHtml' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'oneOff' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'attachmentsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'orderBy' => [
          0 => [
            0 => 'createdAt',
            1 => 'ASC'
          ],
          1 => [
            0 => 'name',
            1 => 'ASC'
          ]
        ],
        'isLinkMultipleIdList' => true,
        'relation' => 'attachments',
        'isLinkStub' => false
      ],
      'attachmentsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'isLinkStub' => false
      ],
      'categoryId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'categoryName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'category',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'versionNumber' => [
        'type' => 'int',
        'dbType' => 'bigint',
        'notExportable' => true
      ],
      'attachmentsTypes' => [
        'type' => 'jsonObject',
        'notStorable' => true
      ]
    ],
    'relations' => [
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'EmailTemplate'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'category' => [
        'type' => 'belongsTo',
        'entity' => 'EmailTemplateCategory',
        'key' => 'categoryId',
        'foreignKey' => 'id',
        'foreign' => 'emailTemplates'
      ],
      'attachments' => [
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
        'conditions' => [
          'OR' => [
            0 => [
              'field' => NULL
            ],
            1 => [
              'field' => 'attachments'
            ]
          ]
        ]
      ]
    ],
    'indexes' => [
      'categoryId' => [
        'type' => 'index',
        'columns' => [
          0 => 'categoryId'
        ],
        'key' => 'IDX_CATEGORY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'EmailTemplateCategory' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'order' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'childList' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'parentId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'parentName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'parent',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'emailTemplatesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'emailTemplatesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'childrenIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'childrenNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'emailTemplates' => [
        'type' => 'hasMany',
        'entity' => 'EmailTemplate',
        'foreignKey' => 'categoryId',
        'foreign' => 'category'
      ],
      'children' => [
        'type' => 'hasMany',
        'entity' => 'EmailTemplateCategory',
        'foreignKey' => 'parentId',
        'foreign' => 'parent'
      ],
      'parent' => [
        'type' => 'belongsTo',
        'entity' => 'EmailTemplateCategory',
        'key' => 'parentId',
        'foreignKey' => 'id',
        'foreign' => 'children'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'EmailTemplateCategory'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
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
    ],
    'indexes' => [
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'parentId' => [
        'type' => 'index',
        'columns' => [
          0 => 'parentId'
        ],
        'key' => 'IDX_PARENT_ID'
      ]
    ],
    'collection' => [
      'order' => 'ASC'
    ]
  ],
  'Export' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'status' => [
        'type' => 'varchar',
        'default' => 'Pending',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'params' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'notifyOnFinish' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'attachmentId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'attachment',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'attachmentName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link'
      ]
    ],
    'relations' => [
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'attachment' => [
        'type' => 'index',
        'columns' => [
          0 => 'attachmentId'
        ],
        'key' => 'IDX_ATTACHMENT'
      ]
    ]
  ],
  'Extension' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'version' => [
        'type' => 'varchar',
        'len' => 50,
        'fieldType' => 'varchar'
      ],
      'fileList' => [
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray'
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'isInstalled' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'checkVersionUrl' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'ExternalAccount' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 64,
        'type' => 'id',
        'fieldType' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'data' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'enabled' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'isLocked' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ]
    ],
    'relations' => []
  ],
  'Import' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'entityType' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'status' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'importedCount' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'duplicateCount' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'updatedCount' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'lastIndex' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'params' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'attributeList' => [
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'fileId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => false,
        'notNull' => false
      ],
      'fileName' => [
        'type' => 'foreign',
        'relation' => 'file',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'errorsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'errorsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'file' => [
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'fileId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'errors' => [
        'type' => 'hasMany',
        'entity' => 'ImportError',
        'foreignKey' => 'importId',
        'foreign' => 'import'
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'ImportEntity' => [
    'fields' => [
      'id' => [
        'dbType' => 'bigint',
        'len' => 24,
        'type' => 'id',
        'autoincrement' => true,
        'fieldType' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'entityId' => [
        'type' => 'varchar',
        'len' => 24,
        'index' => 'entity',
        'fieldType' => 'varchar'
      ],
      'entityType' => [
        'type' => 'varchar',
        'len' => 100,
        'index' => 'entity',
        'fieldType' => 'varchar'
      ],
      'importId' => [
        'type' => 'varchar',
        'len' => 24,
        'index' => true,
        'fieldType' => 'varchar'
      ],
      'isImported' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'isUpdated' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'isDuplicate' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ]
    ],
    'relations' => [],
    'indexes' => [
      'entityImport' => [
        'columns' => [
          0 => 'importId',
          1 => 'entityType'
        ],
        'key' => 'IDX_ENTITY_IMPORT'
      ],
      'entity' => [
        'type' => 'index',
        'columns' => [
          0 => 'entityId',
          1 => 'entityType'
        ],
        'key' => 'IDX_ENTITY'
      ],
      'importId' => [
        'type' => 'index',
        'columns' => [
          0 => 'importId'
        ],
        'key' => 'IDX_IMPORT_ID'
      ]
    ]
  ],
  'ImportError' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'rowIndex' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'exportRowIndex' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'lineNumber' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'exportLineNumber' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'type' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'validationFailures' => [
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray'
      ],
      'row' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'importId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'importName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'import',
        'foreign' => 'id',
        'foreignType' => 'id'
      ]
    ],
    'relations' => [
      'import' => [
        'type' => 'belongsTo',
        'entity' => 'Import',
        'key' => 'importId',
        'foreignKey' => 'id',
        'foreign' => 'errors'
      ]
    ],
    'indexes' => [
      'rowIndex' => [
        'columns' => [
          0 => 'rowIndex'
        ],
        'key' => 'IDX_ROW_INDEX'
      ],
      'importRowIndex' => [
        'columns' => [
          0 => 'importId',
          1 => 'rowIndex'
        ],
        'key' => 'IDX_IMPORT_ROW_INDEX'
      ],
      'importId' => [
        'type' => 'index',
        'columns' => [
          0 => 'importId'
        ],
        'key' => 'IDX_IMPORT_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'rowIndex',
      'order' => 'ASC'
    ]
  ],
  'InboundEmail' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'emailAddress' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'status' => [
        'type' => 'varchar',
        'default' => 'Active',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'host' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'port' => [
        'type' => 'int',
        'default' => 993,
        'fieldType' => 'int',
        'len' => 11
      ],
      'security' => [
        'type' => 'varchar',
        'default' => 'SSL',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'username' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'password' => [
        'type' => 'password',
        'fieldType' => 'password'
      ],
      'monitoredFolders' => [
        'type' => 'jsonArray',
        'default' => [
          0 => 'INBOX'
        ],
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'fetchSince' => [
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date'
      ],
      'fetchData' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'addAllTeamUsers' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'sentFolder' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'storeSentEmails' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'keepFetchedEmailsUnread' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'useImap' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'useSmtp' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'smtpIsShared' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'smtpIsForMassEmail' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'smtpHost' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'smtpPort' => [
        'type' => 'int',
        'default' => 587,
        'fieldType' => 'int',
        'len' => 11
      ],
      'smtpAuth' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'smtpSecurity' => [
        'type' => 'varchar',
        'default' => 'TLS',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'smtpUsername' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'smtpPassword' => [
        'type' => 'password',
        'fieldType' => 'password'
      ],
      'smtpAuthMechanism' => [
        'type' => 'varchar',
        'default' => 'login',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'createCase' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'caseDistribution' => [
        'type' => 'varchar',
        'default' => 'Direct-Assignment',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'targetUserPosition' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'reply' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'replyFromAddress' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'replyToAddress' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'replyFromName' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'fromName' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'imapHandler' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'smtpHandler' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'assignToUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignToUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignToUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'teamName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'team',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'replyEmailTemplateId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'replyEmailTemplateName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'replyEmailTemplate',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'emailsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'emailsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'filtersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'filtersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'emails' => [
        'type' => 'manyMany',
        'entity' => 'Email',
        'relationName' => 'emailInboundEmail',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'inboundEmailId',
          1 => 'emailId'
        ],
        'foreign' => 'inboundEmails'
      ],
      'filters' => [
        'type' => 'hasChildren',
        'entity' => 'EmailFilter',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'replyEmailTemplate' => [
        'type' => 'belongsTo',
        'entity' => 'EmailTemplate',
        'key' => 'replyEmailTemplateId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'team' => [
        'type' => 'belongsTo',
        'entity' => 'Team',
        'key' => 'teamId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'assignToUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignToUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'inboundEmailTeam',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'inboundEmailId',
          1 => 'teamId'
        ],
        'foreign' => 'inboundEmails'
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'assignToUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignToUserId'
        ],
        'key' => 'IDX_ASSIGN_TO_USER_ID'
      ],
      'teamId' => [
        'type' => 'index',
        'columns' => [
          0 => 'teamId'
        ],
        'key' => 'IDX_TEAM_ID'
      ],
      'replyEmailTemplateId' => [
        'type' => 'index',
        'columns' => [
          0 => 'replyEmailTemplateId'
        ],
        'key' => 'IDX_REPLY_EMAIL_TEMPLATE_ID'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'name',
      'order' => 'ASC'
    ]
  ],
  'Integration' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'data' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'enabled' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ]
    ],
    'relations' => []
  ],
  'Job' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'status' => [
        'type' => 'varchar',
        'len' => 16,
        'default' => 'Pending',
        'fieldType' => 'varchar'
      ],
      'executeTime' => [
        'type' => 'datetime',
        'fieldType' => 'datetime'
      ],
      'number' => [
        'type' => 'int',
        'dbType' => 'bigint',
        'autoincrement' => true,
        'unique' => true,
        'index' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'className' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'serviceName' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'methodName' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'job' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'data' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'scheduledJobJob' => [
        'type' => 'foreign',
        'relation' => 'scheduledJob',
        'foreign' => 'job',
        'fieldType' => 'foreign',
        'foreignType' => 'varchar'
      ],
      'queue' => [
        'type' => 'varchar',
        'len' => 36,
        'default' => NULL,
        'fieldType' => 'varchar'
      ],
      'group' => [
        'type' => 'varchar',
        'len' => 128,
        'default' => NULL,
        'fieldType' => 'varchar'
      ],
      'targetGroup' => [
        'type' => 'varchar',
        'len' => 128,
        'default' => NULL,
        'fieldType' => 'varchar'
      ],
      'startedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'executedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'pid' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'attempts' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'targetId' => [
        'type' => 'varchar',
        'len' => 48,
        'fieldType' => 'varchar'
      ],
      'targetType' => [
        'type' => 'varchar',
        'len' => 64,
        'fieldType' => 'varchar'
      ],
      'failedAttempts' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'scheduledJobId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'scheduledJobName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'scheduledJob',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'scheduledJob' => [
        'type' => 'belongsTo',
        'entity' => 'ScheduledJob',
        'key' => 'scheduledJobId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'executeTime' => [
        'columns' => [
          0 => 'status',
          1 => 'executeTime'
        ],
        'key' => 'IDX_EXECUTE_TIME'
      ],
      'status' => [
        'columns' => [
          0 => 'status',
          1 => 'deleted'
        ],
        'key' => 'IDX_STATUS'
      ],
      'statusScheduledJobId' => [
        'columns' => [
          0 => 'status',
          1 => 'scheduledJobId'
        ],
        'key' => 'IDX_STATUS_SCHEDULED_JOB_ID'
      ],
      'number' => [
        'type' => 'unique',
        'columns' => [
          0 => 'number'
        ],
        'key' => 'UNIQ_NUMBER'
      ],
      'scheduledJobId' => [
        'type' => 'index',
        'columns' => [
          0 => 'scheduledJobId'
        ],
        'key' => 'IDX_SCHEDULED_JOB_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'number',
      'order' => 'DESC'
    ]
  ],
  'KanbanOrder' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'order' => [
        'type' => 'int',
        'dbType' => 'smallint',
        'fieldType' => 'int',
        'len' => 11
      ],
      'group' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'userId' => [
        'type' => 'varchar',
        'len' => 24,
        'fieldType' => 'varchar'
      ],
      'entityId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'entity',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'entityType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'entity',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'entityName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'entity',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ]
    ],
    'relations' => [
      'entity' => [
        'type' => 'belongsToParent',
        'key' => 'entityId',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'entityUserId' => [
        'columns' => [
          0 => 'entityType',
          1 => 'entityId',
          2 => 'userId'
        ],
        'key' => 'IDX_ENTITY_USER_ID'
      ],
      'entityType' => [
        'columns' => [
          0 => 'entityType'
        ],
        'key' => 'IDX_ENTITY_TYPE'
      ],
      'entityTypeUserId' => [
        'columns' => [
          0 => 'entityType',
          1 => 'userId'
        ],
        'key' => 'IDX_ENTITY_TYPE_USER_ID'
      ],
      'entity' => [
        'type' => 'index',
        'columns' => [
          0 => 'entityId',
          1 => 'entityType'
        ],
        'key' => 'IDX_ENTITY'
      ]
    ]
  ],
  'LayoutRecord' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'data' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'layoutSetId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'layoutSetName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'layoutSet',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'layoutSet' => [
        'type' => 'belongsTo',
        'entity' => 'LayoutSet',
        'key' => 'layoutSetId',
        'foreignKey' => 'id',
        'foreign' => 'layoutRecords'
      ]
    ],
    'indexes' => [
      'nameLayoutSetId' => [
        'columns' => [
          0 => 'name',
          1 => 'layoutSetId'
        ],
        'key' => 'IDX_NAME_LAYOUT_SET_ID'
      ],
      'layoutSetId' => [
        'type' => 'index',
        'columns' => [
          0 => 'layoutSetId'
        ],
        'key' => 'IDX_LAYOUT_SET_ID'
      ]
    ]
  ],
  'LayoutSet' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'layoutList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'portalsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'portalsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'layoutRecordsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'layoutRecordsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'portals' => [
        'type' => 'hasMany',
        'entity' => 'Portal',
        'foreignKey' => 'layoutSetId',
        'foreign' => 'layoutSet'
      ],
      'teams' => [
        'type' => 'hasMany',
        'entity' => 'Team',
        'foreignKey' => 'layoutSetId',
        'foreign' => 'layoutSet'
      ],
      'layoutRecords' => [
        'type' => 'hasMany',
        'entity' => 'LayoutRecord',
        'foreignKey' => 'layoutSetId',
        'foreign' => 'layoutSet'
      ]
    ],
    'collection' => [
      'orderBy' => 'name',
      'order' => 'ASC'
    ]
  ],
  'LeadCapture' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'isActive' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'subscribeToTargetList' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'subscribeContactToTargetList' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'fieldList' => [
        'type' => 'jsonArray',
        'default' => [
          0 => 'firstName',
          1 => 'lastName',
          2 => 'emailAddress'
        ],
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'duplicateCheck' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'optInConfirmation' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'optInConfirmationLifetime' => [
        'type' => 'int',
        'default' => 48,
        'fieldType' => 'int',
        'len' => 11
      ],
      'optInConfirmationSuccessMessage' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createLeadBeforeOptInConfirmation' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'skipOptInConfirmationIfSubscribed' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'leadSource' => [
        'type' => 'varchar',
        'default' => 'Web Site',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'apiKey' => [
        'type' => 'varchar',
        'len' => 36,
        'fieldType' => 'varchar'
      ],
      'exampleRequestUrl' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'exampleRequestMethod' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'exampleRequestPayload' => [
        'type' => 'text',
        'notStorable' => true,
        'fieldType' => 'text'
      ],
      'exampleRequestHeaders' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'smtpAccount' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'base'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'campaignId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'campaignName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'campaign',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'targetListId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'targetListName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'targetList',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'optInConfirmationEmailTemplateId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'optInConfirmationEmailTemplateName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'optInConfirmationEmailTemplate',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'targetTeamId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'targetTeamName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'targetTeam',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'inboundEmailId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'inboundEmailName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'inboundEmail',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'logRecordsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'logRecordsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'logRecords' => [
        'type' => 'hasMany',
        'entity' => 'LeadCaptureLogRecord',
        'foreignKey' => 'leadCaptureId',
        'foreign' => 'leadCapture'
      ],
      'optInConfirmationEmailTemplate' => [
        'type' => 'belongsTo',
        'entity' => 'EmailTemplate',
        'key' => 'optInConfirmationEmailTemplateId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'inboundEmail' => [
        'type' => 'belongsTo',
        'entity' => 'InboundEmail',
        'key' => 'inboundEmailId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'targetTeam' => [
        'type' => 'belongsTo',
        'entity' => 'Team',
        'key' => 'targetTeamId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'campaign' => [
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'targetList' => [
        'type' => 'belongsTo',
        'entity' => 'TargetList',
        'key' => 'targetListId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'campaignId' => [
        'type' => 'index',
        'columns' => [
          0 => 'campaignId'
        ],
        'key' => 'IDX_CAMPAIGN_ID'
      ],
      'targetListId' => [
        'type' => 'index',
        'columns' => [
          0 => 'targetListId'
        ],
        'key' => 'IDX_TARGET_LIST_ID'
      ],
      'optInConfirmationEmailTemplateId' => [
        'type' => 'index',
        'columns' => [
          0 => 'optInConfirmationEmailTemplateId'
        ],
        'key' => 'IDX_OPT_IN_CONFIRMATION_EMAIL_TEMPLATE_ID'
      ],
      'targetTeamId' => [
        'type' => 'index',
        'columns' => [
          0 => 'targetTeamId'
        ],
        'key' => 'IDX_TARGET_TEAM_ID'
      ],
      'inboundEmailId' => [
        'type' => 'index',
        'columns' => [
          0 => 'inboundEmailId'
        ],
        'key' => 'IDX_INBOUND_EMAIL_ID'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'name',
      'order' => 'ASC'
    ]
  ],
  'LeadCaptureLogRecord' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'number' => [
        'type' => 'int',
        'autoincrement' => true,
        'unique' => true,
        'index' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'data' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'isCreated' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'leadCaptureId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'leadCaptureName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'leadCapture',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'targetId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'target',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'targetType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'target',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'targetName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'target',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ]
    ],
    'relations' => [
      'target' => [
        'type' => 'belongsToParent',
        'key' => 'targetId',
        'foreign' => NULL
      ],
      'leadCapture' => [
        'type' => 'belongsTo',
        'entity' => 'LeadCapture',
        'key' => 'leadCaptureId',
        'foreignKey' => 'id',
        'foreign' => 'logRecords'
      ]
    ],
    'indexes' => [
      'number' => [
        'type' => 'unique',
        'columns' => [
          0 => 'number'
        ],
        'key' => 'UNIQ_NUMBER'
      ],
      'leadCaptureId' => [
        'type' => 'index',
        'columns' => [
          0 => 'leadCaptureId'
        ],
        'key' => 'IDX_LEAD_CAPTURE_ID'
      ],
      'target' => [
        'type' => 'index',
        'columns' => [
          0 => 'targetId',
          1 => 'targetType'
        ],
        'key' => 'IDX_TARGET'
      ]
    ],
    'collection' => [
      'orderBy' => 'number',
      'order' => 'DESC'
    ]
  ],
  'MassAction' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'entityType' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'action' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'status' => [
        'type' => 'varchar',
        'default' => 'Pending',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'data' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'params' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'processedCount' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'notifyOnFinish' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ]
    ]
  ],
  'NextNumber' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'entityType' => [
        'type' => 'varchar',
        'len' => 100,
        'index' => true,
        'fieldType' => 'varchar'
      ],
      'fieldName' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'value' => [
        'type' => 'int',
        'default' => 1,
        'fieldType' => 'int',
        'len' => 11
      ]
    ],
    'relations' => [],
    'indexes' => [
      'entityTypeFieldName' => [
        'columns' => [
          0 => 'entityType',
          1 => 'fieldName'
        ],
        'key' => 'IDX_ENTITY_TYPE_FIELD_NAME'
      ],
      'entityType' => [
        'type' => 'index',
        'columns' => [
          0 => 'entityType'
        ],
        'key' => 'IDX_ENTITY_TYPE'
      ]
    ]
  ],
  'Note' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'post' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'data' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'type' => [
        'type' => 'varchar',
        'default' => 'Post',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'targetType' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'number' => [
        'type' => 'int',
        'dbType' => 'bigint',
        'autoincrement' => true,
        'unique' => true,
        'index' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'isGlobal' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'createdByGender' => [
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 'gender',
        'fieldType' => 'foreign',
        'foreignType' => 'varchar'
      ],
      'notifiedUserIdList' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray'
      ],
      'isInternal' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'parentId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'parent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'parentType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'parentName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'parent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ],
      'relatedId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'related',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'relatedType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'related',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'relatedName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'related',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ],
      'attachmentsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'orderBy' => [
          0 => [
            0 => 'createdAt',
            1 => 'ASC'
          ],
          1 => [
            0 => 'name',
            1 => 'ASC'
          ]
        ],
        'isLinkMultipleIdList' => true,
        'relation' => 'attachments',
        'isLinkStub' => false
      ],
      'attachmentsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'isLinkStub' => false
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'portalsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'portals',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'portalsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'usersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'users',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'usersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'superParentId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'superParent',
        'notNull' => false
      ],
      'superParentType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'superParent',
        'len' => 100,
        'dbType' => 'varchar'
      ],
      'superParentName' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'attachmentsTypes' => [
        'type' => 'jsonObject',
        'notStorable' => true
      ]
    ],
    'relations' => [
      'users' => [
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'noteUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'noteId',
          1 => 'userId'
        ],
        'foreign' => 'notes'
      ],
      'portals' => [
        'type' => 'manyMany',
        'entity' => 'Portal',
        'relationName' => 'notePortal',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'noteId',
          1 => 'portalId'
        ],
        'foreign' => 'notes'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'noteTeam',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'noteId',
          1 => 'teamId'
        ],
        'foreign' => 'notes'
      ],
      'related' => [
        'type' => 'belongsToParent',
        'key' => 'relatedId',
        'foreign' => NULL
      ],
      'superParent' => [
        'type' => 'belongsToParent',
        'key' => 'superParentId',
        'foreign' => NULL
      ],
      'parent' => [
        'type' => 'belongsToParent',
        'key' => 'parentId',
        'foreign' => 'notes'
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'attachments' => [
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
        'conditions' => [
          'OR' => [
            0 => [
              'field' => NULL
            ],
            1 => [
              'field' => 'attachments'
            ]
          ]
        ],
        'relationName' => 'attachments'
      ]
    ],
    'indexes' => [
      'createdAt' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdAt'
        ],
        'key' => 'IDX_CREATED_AT'
      ],
      'parent' => [
        'type' => 'index',
        'columns' => [
          0 => 'parentId',
          1 => 'parentType'
        ],
        'key' => 'IDX_PARENT'
      ],
      'parentAndSuperParent' => [
        'type' => 'index',
        'columns' => [
          0 => 'parentId',
          1 => 'parentType',
          2 => 'superParentId',
          3 => 'superParentType'
        ],
        'key' => 'IDX_PARENT_AND_SUPER_PARENT'
      ],
      'createdByNumber' => [
        'columns' => [
          0 => 'createdById',
          1 => 'number'
        ],
        'key' => 'IDX_CREATED_BY_NUMBER'
      ],
      'number' => [
        'type' => 'unique',
        'columns' => [
          0 => 'number'
        ],
        'key' => 'UNIQ_NUMBER'
      ],
      'related' => [
        'type' => 'index',
        'columns' => [
          0 => 'relatedId',
          1 => 'relatedType'
        ],
        'key' => 'IDX_RELATED'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'superParent' => [
        'type' => 'index',
        'columns' => [
          0 => 'superParentId',
          1 => 'superParentType'
        ],
        'key' => 'IDX_SUPER_PARENT'
      ]
    ],
    'collection' => [
      'orderBy' => 'number',
      'order' => 'DESC'
    ]
  ],
  'Notification' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'number' => [
        'type' => 'int',
        'dbType' => 'bigint',
        'autoincrement' => true,
        'unique' => true,
        'index' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'data' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'noteData' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'fieldType' => 'jsonObject'
      ],
      'type' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'read' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'emailIsProcessed' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'message' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'userId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'userName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'user',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'relatedId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'related',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'relatedType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'related',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'relatedName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'related',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ],
      'relatedParentId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'relatedParent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'relatedParentType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'relatedParent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'relatedParentName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'relatedParent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ]
    ],
    'relations' => [
      'relatedParent' => [
        'type' => 'belongsToParent',
        'key' => 'relatedParentId',
        'foreign' => NULL
      ],
      'related' => [
        'type' => 'belongsToParent',
        'key' => 'relatedId',
        'foreign' => NULL
      ],
      'user' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'createdAt' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdAt'
        ],
        'key' => 'IDX_CREATED_AT'
      ],
      'user' => [
        'type' => 'index',
        'columns' => [
          0 => 'userId',
          1 => 'createdAt'
        ],
        'key' => 'IDX_USER'
      ],
      'number' => [
        'type' => 'unique',
        'columns' => [
          0 => 'number'
        ],
        'key' => 'UNIQ_NUMBER'
      ],
      'userId' => [
        'type' => 'index',
        'columns' => [
          0 => 'userId'
        ],
        'key' => 'IDX_USER_ID'
      ],
      'related' => [
        'type' => 'index',
        'columns' => [
          0 => 'relatedId',
          1 => 'relatedType'
        ],
        'key' => 'IDX_RELATED'
      ],
      'relatedParent' => [
        'type' => 'index',
        'columns' => [
          0 => 'relatedParentId',
          1 => 'relatedParentType'
        ],
        'key' => 'IDX_RELATED_PARENT'
      ]
    ],
    'collection' => [
      'orderBy' => 'number',
      'order' => 'DESC'
    ]
  ],
  'PasswordChangeRequest' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'requestId' => [
        'type' => 'varchar',
        'len' => 64,
        'index' => true,
        'fieldType' => 'varchar'
      ],
      'url' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'userId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'userName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'user',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'user' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'requestId' => [
        'type' => 'index',
        'columns' => [
          0 => 'requestId'
        ],
        'key' => 'IDX_REQUEST_ID'
      ],
      'userId' => [
        'type' => 'index',
        'columns' => [
          0 => 'userId'
        ],
        'key' => 'IDX_USER_ID'
      ]
    ]
  ],
  'PhoneNumber' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'len' => 36,
        'index' => true,
        'fieldType' => 'varchar'
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'type' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'numeric' => [
        'type' => 'varchar',
        'len' => 36,
        'index' => true,
        'fieldType' => 'varchar'
      ],
      'invalid' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'optOut' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'primary' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false
      ]
    ],
    'relations' => [],
    'indexes' => [
      'name' => [
        'type' => 'index',
        'columns' => [
          0 => 'name'
        ],
        'key' => 'IDX_NAME'
      ],
      'numeric' => [
        'type' => 'index',
        'columns' => [
          0 => 'numeric'
        ],
        'key' => 'IDX_NUMERIC'
      ]
    ],
    'collection' => [
      'orderBy' => 'name',
      'order' => 'ASC'
    ]
  ],
  'Portal' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'url' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'customId' => [
        'type' => 'varchar',
        'len' => 36,
        'index' => true,
        'fieldType' => 'varchar'
      ],
      'isActive' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'isDefault' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'tabList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'quickCreateList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'theme' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'themeParams' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'language' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'timeZone' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'dateFormat' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'timeFormat' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'weekStart' => [
        'type' => 'int',
        'default' => -1,
        'fieldType' => 'int',
        'len' => 11
      ],
      'defaultCurrency' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'dashboardLayout' => [
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray'
      ],
      'dashletsOptions' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'customUrl' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'logoId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => false,
        'notNull' => false
      ],
      'logoName' => [
        'type' => 'foreign',
        'relation' => 'logo',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'portalRolesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'portalRoles',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'portalRolesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'companyLogoId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => false,
        'notNull' => false
      ],
      'companyLogoName' => [
        'type' => 'foreign',
        'relation' => 'companyLogo',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'layoutSetId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'layoutSetName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'layoutSet',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'articlesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'articlesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'notesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'notesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'usersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'usersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'logo' => [
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'logoId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'companyLogo' => [
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'companyLogoId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'articles' => [
        'type' => 'manyMany',
        'entity' => 'KnowledgeBaseArticle',
        'relationName' => 'knowledgeBaseArticlePortal',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'portalId',
          1 => 'knowledgeBaseArticleId'
        ],
        'foreign' => 'portals'
      ],
      'layoutSet' => [
        'type' => 'belongsTo',
        'entity' => 'LayoutSet',
        'key' => 'layoutSetId',
        'foreignKey' => 'id',
        'foreign' => 'portals'
      ],
      'notes' => [
        'type' => 'manyMany',
        'entity' => 'Note',
        'relationName' => 'notePortal',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'portalId',
          1 => 'noteId'
        ],
        'foreign' => 'portals'
      ],
      'portalRoles' => [
        'type' => 'manyMany',
        'entity' => 'PortalRole',
        'relationName' => 'portalPortalRole',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'portalId',
          1 => 'portalRoleId'
        ],
        'foreign' => 'portals'
      ],
      'users' => [
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'portalUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'portalId',
          1 => 'userId'
        ],
        'foreign' => 'portals'
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'customId' => [
        'type' => 'index',
        'columns' => [
          0 => 'customId'
        ],
        'key' => 'IDX_CUSTOM_ID'
      ],
      'layoutSetId' => [
        'type' => 'index',
        'columns' => [
          0 => 'layoutSetId'
        ],
        'key' => 'IDX_LAYOUT_SET_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'name',
      'order' => 'ASC'
    ]
  ],
  'PortalRole' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'len' => 150,
        'fieldType' => 'varchar'
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'data' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'fieldData' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'exportPermission' => [
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'massUpdatePermission' => [
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'portalsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'portalsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'usersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'usersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'portals' => [
        'type' => 'manyMany',
        'entity' => 'Portal',
        'relationName' => 'portalPortalRole',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'portalRoleId',
          1 => 'portalId'
        ],
        'foreign' => 'portalRoles'
      ],
      'users' => [
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'portalRoleUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'portalRoleId',
          1 => 'userId'
        ],
        'foreign' => 'portalRoles'
      ]
    ],
    'collection' => [
      'orderBy' => 'name',
      'order' => 'ASC'
    ]
  ],
  'Preferences' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'timeZone' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'dateFormat' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'timeFormat' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'weekStart' => [
        'type' => 'int',
        'default' => -1,
        'fieldType' => 'int',
        'len' => 11
      ],
      'defaultCurrency' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'thousandSeparator' => [
        'type' => 'varchar',
        'len' => 1,
        'default' => ',',
        'fieldType' => 'varchar'
      ],
      'decimalMark' => [
        'type' => 'varchar',
        'len' => 1,
        'default' => '.',
        'fieldType' => 'varchar'
      ],
      'dashboardLayout' => [
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray'
      ],
      'dashletsOptions' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'importParams' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'sharedCalendarUserList' => [
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray'
      ],
      'calendarViewDataList' => [
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray'
      ],
      'presetFilters' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'smtpEmailAddress' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'smtpServer' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'smtpPort' => [
        'type' => 'int',
        'default' => 25,
        'fieldType' => 'int',
        'len' => 11
      ],
      'smtpAuth' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'smtpSecurity' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'smtpUsername' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'smtpPassword' => [
        'type' => 'password',
        'fieldType' => 'password'
      ],
      'language' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'exportDelimiter' => [
        'type' => 'varchar',
        'len' => 1,
        'default' => ',',
        'fieldType' => 'varchar'
      ],
      'receiveAssignmentEmailNotifications' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'receiveMentionEmailNotifications' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'receiveStreamEmailNotifications' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'assignmentNotificationsIgnoreEntityTypeList' => [
        'type' => 'jsonArray',
        'default' => [],
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'assignmentEmailNotificationsIgnoreEntityTypeList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'autoFollowEntityTypeList' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'signature' => [
        'type' => 'text',
        'default' => '',
        'fieldType' => 'text'
      ],
      'defaultReminders' => [
        'type' => 'jsonArray',
        'default' => [],
        'fieldType' => 'jsonArray'
      ],
      'theme' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'themeParams' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'useCustomTabList' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'tabList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'emailReplyToAllByDefault' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'emailReplyForceHtml' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'isPortalUser' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'doNotFillAssignedUserIfNotRequired' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'followEntityOnStreamPost' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'followCreatedEntities' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'followCreatedEntityTypeList' => [
        'type' => 'jsonArray',
        'default' => [],
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'emailUseExternalClient' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'scopeColorsDisabled' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'tabColorsDisabled' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ]
    ],
    'relations' => []
  ],
  'Role' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'len' => 150,
        'fieldType' => 'varchar'
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'assignmentPermission' => [
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'userPermission' => [
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'portalPermission' => [
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'groupEmailAccountPermission' => [
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'exportPermission' => [
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'massUpdatePermission' => [
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'dataPrivacyPermission' => [
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'followerManagementPermission' => [
        'type' => 'varchar',
        'default' => 'not-set',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'data' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'fieldData' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'usersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'usersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'roleTeam',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'roleId',
          1 => 'teamId'
        ],
        'foreign' => 'roles'
      ],
      'users' => [
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'roleUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'roleId',
          1 => 'userId'
        ],
        'foreign' => 'roles'
      ]
    ],
    'collection' => [
      'orderBy' => 'name',
      'order' => 'ASC'
    ]
  ],
  'ScheduledJob' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'job' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'status' => [
        'type' => 'varchar',
        'default' => 'Active',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'scheduling' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'lastRun' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'isInternal' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'logIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'logNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'log' => [
        'type' => 'hasMany',
        'entity' => 'ScheduledJobLogRecord',
        'foreignKey' => 'scheduledJobId',
        'foreign' => 'scheduledJob'
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'name',
      'order' => 'ASC'
    ]
  ],
  'ScheduledJobLogRecord' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'status' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'executionTime' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'scheduledJobId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'scheduledJobName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'scheduledJob',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'targetId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'target',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'targetType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'target',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'targetName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'target',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ]
    ],
    'relations' => [
      'scheduledJob' => [
        'type' => 'belongsTo',
        'entity' => 'ScheduledJob',
        'key' => 'scheduledJobId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'scheduledJobIdExecutionTime' => [
        'type' => 'index',
        'columns' => [
          0 => 'scheduledJobId',
          1 => 'executionTime'
        ],
        'key' => 'IDX_SCHEDULED_JOB_ID_EXECUTION_TIME'
      ],
      'scheduledJobId' => [
        'type' => 'index',
        'columns' => [
          0 => 'scheduledJobId'
        ],
        'key' => 'IDX_SCHEDULED_JOB_ID'
      ],
      'target' => [
        'type' => 'index',
        'columns' => [
          0 => 'targetId',
          1 => 'targetType'
        ],
        'key' => 'IDX_TARGET'
      ]
    ],
    'collection' => [
      'orderBy' => 'executionTime',
      'order' => 'DESC'
    ]
  ],
  'Settings' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'useCache' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'recordsPerPage' => [
        'type' => 'int',
        'default' => 20,
        'fieldType' => 'int',
        'len' => 11
      ],
      'recordsPerPageSmall' => [
        'type' => 'int',
        'default' => 5,
        'fieldType' => 'int',
        'len' => 11
      ],
      'recordsPerPageSelect' => [
        'type' => 'int',
        'default' => 10,
        'fieldType' => 'int',
        'len' => 11
      ],
      'timeZone' => [
        'type' => 'varchar',
        'default' => 'UTC',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'dateFormat' => [
        'type' => 'varchar',
        'default' => 'DD.MM.YYYY',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'timeFormat' => [
        'type' => 'varchar',
        'default' => 'HH:mm',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'weekStart' => [
        'type' => 'int',
        'default' => 0,
        'fieldType' => 'int',
        'len' => 11
      ],
      'fiscalYearShift' => [
        'type' => 'int',
        'default' => 0,
        'fieldType' => 'int',
        'len' => 11
      ],
      'thousandSeparator' => [
        'type' => 'varchar',
        'len' => 1,
        'default' => ',',
        'fieldType' => 'varchar'
      ],
      'decimalMark' => [
        'type' => 'varchar',
        'len' => 1,
        'default' => '.',
        'fieldType' => 'varchar'
      ],
      'currencyList' => [
        'type' => 'jsonArray',
        'default' => [
          0 => 'USD',
          1 => 'EUR'
        ],
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'defaultCurrency' => [
        'type' => 'varchar',
        'default' => 'USD',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'baseCurrency' => [
        'type' => 'varchar',
        'default' => 'USD',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'currencyRates' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'base'
      ],
      'outboundEmailIsShared' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'outboundEmailFromName' => [
        'type' => 'varchar',
        'default' => 'EspoCRM',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'outboundEmailFromAddress' => [
        'type' => 'varchar',
        'default' => 'crm@example.com',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'emailAddressLookupEntityTypeList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'smtpServer' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'smtpPort' => [
        'type' => 'int',
        'default' => 587,
        'fieldType' => 'int',
        'len' => 11
      ],
      'smtpAuth' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'smtpSecurity' => [
        'type' => 'varchar',
        'default' => 'TLS',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'smtpUsername' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'smtpPassword' => [
        'type' => 'password',
        'fieldType' => 'password'
      ],
      'tabList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'quickCreateList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'language' => [
        'type' => 'varchar',
        'default' => 'en_US',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'globalSearchEntityList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'exportDelimiter' => [
        'type' => 'varchar',
        'len' => 1,
        'default' => ',',
        'fieldType' => 'varchar'
      ],
      'authenticationMethod' => [
        'type' => 'varchar',
        'default' => 'Espo',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'auth2FA' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'auth2FAMethodList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'auth2FAForced' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'passwordRecoveryDisabled' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'passwordRecoveryForAdminDisabled' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'passwordRecoveryForInternalUsersDisabled' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'passwordRecoveryNoExposure' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'passwordGenerateLength' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'passwordStrengthLength' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'passwordStrengthLetterCount' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'passwordStrengthNumberCount' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'passwordStrengthBothCases' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'ldapHost' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'ldapPort' => [
        'type' => 'varchar',
        'default' => 389,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'ldapSecurity' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'ldapAuth' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'ldapUsername' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'ldapPassword' => [
        'type' => 'password',
        'fieldType' => 'password'
      ],
      'ldapBindRequiresDn' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'ldapUserLoginFilter' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'ldapBaseDn' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'ldapAccountCanonicalForm' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'ldapAccountDomainName' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'ldapAccountDomainNameShort' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'ldapAccountFilterFormat' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'ldapTryUsernameSplit' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'ldapOptReferrals' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'ldapPortalUserLdapAuth' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'ldapCreateEspoUser' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'ldapUserNameAttribute' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'ldapUserObjectClass' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'ldapUserFirstNameAttribute' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'ldapUserLastNameAttribute' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'ldapUserTitleAttribute' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'ldapUserEmailAddressAttribute' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'ldapUserPhoneNumberAttribute' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'exportDisabled' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'emailNotificationsDelay' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'assignmentEmailNotifications' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'assignmentEmailNotificationsEntityList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'assignmentNotificationsEntityList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'postEmailNotifications' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'updateEmailNotifications' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'mentionEmailNotifications' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'streamEmailNotifications' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'portalStreamEmailNotifications' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'streamEmailNotificationsEntityList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'streamEmailNotificationsTypeList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'newNotificationCountInTitle' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'b2cMode' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'avatarsDisabled' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'followCreatedEntities' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'adminPanelIframeUrl' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'displayListViewRecordCount' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'userThemesDisabled' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'theme' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'themeParams' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'attachmentUploadMaxSize' => [
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float'
      ],
      'attachmentUploadChunkSize' => [
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float'
      ],
      'emailMessageMaxSize' => [
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float'
      ],
      'inboundEmailMaxPortionSize' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'personalEmailMaxPortionSize' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'maxEmailAccountCount' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'massEmailMaxPerHourCount' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'massEmailVerp' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'authTokenLifetime' => [
        'type' => 'float',
        'notNull' => false,
        'default' => 0,
        'fieldType' => 'float'
      ],
      'authTokenMaxIdleTime' => [
        'type' => 'float',
        'notNull' => false,
        'default' => 0,
        'fieldType' => 'float'
      ],
      'authTokenPreventConcurrent' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'dashboardLayout' => [
        'type' => 'jsonArray',
        'fieldType' => 'jsonArray'
      ],
      'dashletsOptions' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'siteUrl' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'applicationName' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'readableDateFormatDisabled' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'addressFormat' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'personNameFormat' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'currencyFormat' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'currencyDecimalPlaces' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'notificationSoundsDisabled' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'calendarEntityList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'activitiesEntityList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'historyEntityList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'busyRangesEntityList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'googleMapsApiKey' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'massEmailDisableMandatoryOptOutLink' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'massEmailOpenTracking' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'aclAllowDeleteCreated' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'lastViewedCount' => [
        'type' => 'int',
        'default' => 20,
        'fieldType' => 'int',
        'len' => 11
      ],
      'adminNotifications' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'adminNotificationsNewVersion' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'adminNotificationsNewExtensionVersion' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'textFilterUseContainsForVarchar' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'scopeColorsDisabled' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'tabColorsDisabled' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'tabIconsDisabled' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'emailAddressIsOptedOutByDefault' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'outboundEmailBccAddress' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'cleanupDeletedRecords' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'addressCountryList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'addressCityList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'addressStateList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'jobRunInParallel' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'jobMaxPortion' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'jobPoolConcurrencyNumber' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'daemonInterval' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'daemonMaxProcessNumber' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'daemonProcessTimeout' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'cronDisabled' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'maintenanceMode' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'useWebSocket' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'awsS3Storage' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'outboundSmsFromNumber' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'smsProvider' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'addressPreviewStreet' => [
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'notStorable' => true,
        'fieldType' => 'text'
      ],
      'addressPreviewCity' => [
        'type' => 'varchar',
        'len' => 255,
        'notStorable' => true,
        'fieldType' => 'varchar'
      ],
      'addressPreviewState' => [
        'type' => 'varchar',
        'len' => 255,
        'notStorable' => true,
        'fieldType' => 'varchar'
      ],
      'addressPreviewCountry' => [
        'type' => 'varchar',
        'len' => 255,
        'notStorable' => true,
        'fieldType' => 'varchar'
      ],
      'addressPreviewPostalCode' => [
        'type' => 'varchar',
        'len' => 40,
        'notStorable' => true,
        'fieldType' => 'varchar'
      ],
      'addressPreviewMap' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map'
      ],
      'companyLogoId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => false,
        'notNull' => false
      ],
      'companyLogoName' => [
        'type' => 'foreign',
        'relation' => 'companyLogo',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'ldapUserDefaultTeamId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'ldapUserDefaultTeam',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'ldapUserDefaultTeamName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link'
      ],
      'ldapUserTeamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'ldapUserTeams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'ldapUserTeamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'ldapPortalUserPortalsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'ldapPortalUserPortals',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'ldapPortalUserPortalsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'ldapPortalUserRolesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'ldapPortalUserRoles',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'ldapPortalUserRolesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ]
    ],
    'relations' => [
      'companyLogo' => [
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'companyLogoId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'ldapUserDefaultTeam' => [
        'type' => 'index',
        'columns' => [
          0 => 'ldapUserDefaultTeamId'
        ],
        'key' => 'IDX_LDAP_USER_DEFAULT_TEAM'
      ]
    ]
  ],
  'Sms' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'from' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'fromName' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'to' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'body' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'status' => [
        'type' => 'varchar',
        'default' => 'Archived',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'dateSent' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'fromPhoneNumberId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'fromPhoneNumberName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'fromPhoneNumber',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'toPhoneNumbersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'toPhoneNumbers',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'toPhoneNumbersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'parentId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'parent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'parentType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'parentName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'parent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'repliedId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'repliedName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'replied',
        'foreign' => 'id',
        'foreignType' => 'id'
      ],
      'repliesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'replies',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'dateSent',
        'isLinkStub' => false
      ],
      'repliesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ]
    ],
    'relations' => [
      'toPhoneNumbers' => [
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'midKeys' => [
          0 => 'smsId',
          1 => 'phoneNumberId'
        ],
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
      ],
      'fromPhoneNumber' => [
        'type' => 'belongsTo',
        'entity' => 'PhoneNumber',
        'key' => 'fromPhoneNumberId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'replies' => [
        'type' => 'hasMany',
        'entity' => 'Sms',
        'foreignKey' => 'repliedId',
        'foreign' => 'replied'
      ],
      'replied' => [
        'type' => 'belongsTo',
        'entity' => 'Sms',
        'key' => 'repliedId',
        'foreignKey' => 'id',
        'foreign' => 'replies'
      ],
      'parent' => [
        'type' => 'belongsToParent',
        'key' => 'parentId',
        'foreign' => 'emails'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'Sms'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'dateSent' => [
        'columns' => [
          0 => 'dateSent',
          1 => 'deleted'
        ],
        'key' => 'IDX_DATE_SENT'
      ],
      'dateSentStatus' => [
        'columns' => [
          0 => 'dateSent',
          1 => 'status',
          2 => 'deleted'
        ],
        'key' => 'IDX_DATE_SENT_STATUS'
      ],
      'fromPhoneNumberId' => [
        'type' => 'index',
        'columns' => [
          0 => 'fromPhoneNumberId'
        ],
        'key' => 'IDX_FROM_PHONE_NUMBER_ID'
      ],
      'parent' => [
        'type' => 'index',
        'columns' => [
          0 => 'parentId',
          1 => 'parentType'
        ],
        'key' => 'IDX_PARENT'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'repliedId' => [
        'type' => 'index',
        'columns' => [
          0 => 'repliedId'
        ],
        'key' => 'IDX_REPLIED_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'dateSent',
      'order' => 'DESC'
    ]
  ],
  'Subscription' => [
    'fields' => [
      'id' => [
        'type' => 'id',
        'dbType' => 'int',
        'autoincrement' => true,
        'fieldType' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'entityId' => [
        'type' => 'varchar',
        'len' => 24,
        'index' => 'entity',
        'fieldType' => 'varchar'
      ],
      'entityType' => [
        'type' => 'varchar',
        'len' => 100,
        'index' => 'entity',
        'fieldType' => 'varchar'
      ],
      'userId' => [
        'type' => 'varchar',
        'len' => 24,
        'index' => true,
        'fieldType' => 'varchar'
      ]
    ],
    'relations' => [],
    'indexes' => [
      'userEntity' => [
        'columns' => [
          0 => 'userId',
          1 => 'entityId',
          2 => 'entityType'
        ],
        'key' => 'IDX_USER_ENTITY'
      ],
      'entity' => [
        'type' => 'index',
        'columns' => [
          0 => 'entityId',
          1 => 'entityType'
        ],
        'key' => 'IDX_ENTITY'
      ],
      'userId' => [
        'type' => 'index',
        'columns' => [
          0 => 'userId'
        ],
        'key' => 'IDX_USER_ID'
      ]
    ]
  ],
  'Team' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'positionList' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'userRole' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'rolesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'roles',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'rolesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'layoutSetId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'layoutSetName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'layoutSet',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'inboundEmailsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'inboundEmailsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'notesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'notesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'usersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'usersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'layoutSet' => [
        'type' => 'belongsTo',
        'entity' => 'LayoutSet',
        'key' => 'layoutSetId',
        'foreignKey' => 'id',
        'foreign' => 'teams'
      ],
      'inboundEmails' => [
        'type' => 'manyMany',
        'entity' => 'InboundEmail',
        'relationName' => 'inboundEmailTeam',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'teamId',
          1 => 'inboundEmailId'
        ],
        'foreign' => 'teams'
      ],
      'notes' => [
        'type' => 'manyMany',
        'entity' => 'Note',
        'relationName' => 'noteTeam',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'teamId',
          1 => 'noteId'
        ],
        'foreign' => 'teams'
      ],
      'roles' => [
        'type' => 'manyMany',
        'entity' => 'Role',
        'relationName' => 'roleTeam',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'teamId',
          1 => 'roleId'
        ],
        'foreign' => 'teams'
      ],
      'users' => [
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'teamUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'teamId',
          1 => 'userId'
        ],
        'foreign' => 'teams',
        'columnAttributeMap' => [
          'role' => 'userRole'
        ],
        'additionalColumns' => [
          'role' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ]
    ],
    'indexes' => [
      'layoutSetId' => [
        'type' => 'index',
        'columns' => [
          0 => 'layoutSetId'
        ],
        'key' => 'IDX_LAYOUT_SET_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'name',
      'order' => 'ASC'
    ]
  ],
  'Template' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'body' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'header' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'footer' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'entityType' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'leftMargin' => [
        'type' => 'float',
        'notNull' => false,
        'default' => 10,
        'fieldType' => 'float'
      ],
      'rightMargin' => [
        'type' => 'float',
        'notNull' => false,
        'default' => 10,
        'fieldType' => 'float'
      ],
      'topMargin' => [
        'type' => 'float',
        'notNull' => false,
        'default' => 10,
        'fieldType' => 'float'
      ],
      'bottomMargin' => [
        'type' => 'float',
        'notNull' => false,
        'default' => 25,
        'fieldType' => 'float'
      ],
      'printFooter' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'printHeader' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'footerPosition' => [
        'type' => 'float',
        'notNull' => false,
        'default' => 15,
        'fieldType' => 'float'
      ],
      'headerPosition' => [
        'type' => 'float',
        'notNull' => false,
        'default' => 10,
        'fieldType' => 'float'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'variables' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'base'
      ],
      'pageOrientation' => [
        'type' => 'varchar',
        'default' => 'Portrait',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'pageFormat' => [
        'type' => 'varchar',
        'default' => 'A4',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'pageWidth' => [
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float'
      ],
      'pageHeight' => [
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float'
      ],
      'fontFace' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'title' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'versionNumber' => [
        'type' => 'int',
        'dbType' => 'bigint',
        'notExportable' => true
      ]
    ],
    'relations' => [
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'Template'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ]
    ],
    'indexes' => [
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'name',
      'order' => 'ASC'
    ]
  ],
  'TwoFactorCode' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'code' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'method' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'attemptsLeft' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'isActive' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'userId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'notNull' => false
      ],
      'userName' => [
        'type' => 'foreign',
        'relation' => 'user',
        'foreign' => 'name',
        'notStorable' => false,
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'user' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'createdAt' => [
        'columns' => [
          0 => 'createdAt'
        ],
        'key' => 'IDX_CREATED_AT'
      ],
      'userIdMethod' => [
        'columns' => [
          0 => 'userId',
          1 => 'method'
        ],
        'key' => 'IDX_USER_ID_METHOD'
      ],
      'userIdMethodIsActive' => [
        'columns' => [
          0 => 'userId',
          1 => 'method',
          2 => 'isActive'
        ],
        'key' => 'IDX_USER_ID_METHOD_IS_ACTIVE'
      ],
      'userIdMethodCreatedAt' => [
        'columns' => [
          0 => 'userId',
          1 => 'method',
          2 => 'createdAt'
        ],
        'key' => 'IDX_USER_ID_METHOD_CREATED_AT'
      ],
      'userId' => [
        'type' => 'index',
        'columns' => [
          0 => 'userId'
        ],
        'key' => 'IDX_USER_ID'
      ]
    ]
  ],
  'UniqueId' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'index' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'data' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'terminateAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'targetId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'target',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'targetType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'target',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'targetName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'target',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ]
    ],
    'relations' => [
      'target' => [
        'type' => 'belongsToParent',
        'key' => 'targetId',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'type' => 'index',
        'columns' => [
          0 => 'name'
        ],
        'key' => 'IDX_NAME'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'target' => [
        'type' => 'index',
        'columns' => [
          0 => 'targetId',
          1 => 'targetType'
        ],
        'key' => 'IDX_TARGET'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'User' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'dependeeAttributeList' => [
          0 => 'userName'
        ],
        'fieldType' => 'personName',
        'select' => [
          'select' => 'NULLIF:(TRIM:(CONCAT:(IFNULL:(firstName, \'\'), \' \', IFNULL:(lastName, \'\'))), \'\')'
        ],
        'selectForeign' => [
          'select' => 'NULLIF:(TRIM:(CONCAT:(IFNULL:({alias}.firstName, \'\'), \' \', IFNULL:({alias}.lastName, \'\'))), \'\')'
        ],
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'OR' => [
                'firstName*' => '{value}',
                'lastName*' => '{value}',
                'CONCAT:(firstName, \' \', lastName)*' => '{value}',
                'CONCAT:(lastName, \' \', firstName)*' => '{value}'
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'AND' => [
                'firstName!*' => '{value}',
                'lastName!*' => '{value}',
                'CONCAT:(firstName, \' \', lastName)!*' => '{value}',
                'CONCAT:(lastName, \' \', firstName)!*' => '{value}'
              ]
            ]
          ],
          '=' => [
            'whereClause' => [
              'OR' => [
                'firstName' => '{value}',
                'lastName' => '{value}',
                'CONCAT:(firstName, \' \', lastName)' => '{value}',
                'CONCAT:(lastName, \' \', firstName)' => '{value}'
              ]
            ]
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'firstName',
              1 => '{direction}'
            ],
            1 => [
              0 => 'lastName',
              1 => '{direction}'
            ]
          ]
        ]
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'userName' => [
        'type' => 'varchar',
        'len' => 50,
        'fieldType' => 'varchar'
      ],
      'type' => [
        'type' => 'varchar',
        'len' => 24,
        'index' => true,
        'default' => 'regular',
        'fieldType' => 'varchar'
      ],
      'password' => [
        'type' => 'password',
        'len' => 150,
        'fieldType' => 'password'
      ],
      'passwordConfirm' => [
        'type' => 'password',
        'len' => 150,
        'notStorable' => true,
        'fieldType' => 'password'
      ],
      'authMethod' => [
        'type' => 'varchar',
        'len' => 24,
        'fieldType' => 'varchar'
      ],
      'apiKey' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'secretKey' => [
        'type' => 'varchar',
        'len' => 100,
        'notStorable' => true,
        'fieldType' => 'varchar'
      ],
      'salutationName' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'firstName' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'lastName' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'isActive' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'title' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'position' => [
        'type' => 'varchar',
        'len' => 100,
        'notExportable' => true,
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
        'fieldType' => 'varchar'
      ],
      'emailAddress' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'email',
        'select' => [
          'select' => 'emailAddresses.name',
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'emailAddressUser{alias}Foreign.name',
          'leftJoins' => [
            0 => [
              0 => 'EntityEmailAddress',
              1 => 'emailAddressUser{alias}ForeignMiddle',
              2 => [
                'emailAddressUser{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'emailAddressUser{alias}ForeignMiddle.primary' => 1,
                'emailAddressUser{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'EmailAddress',
              1 => 'emailAddressUser{alias}Foreign',
              2 => [
                'emailAddressUser{alias}Foreign.id:' => 'emailAddressUser{alias}ForeignMiddle.emailAddressId',
                'emailAddressUser{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'id=s' => [
                'from' => 'EntityEmailAddress',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'emailAddress',
                    1 => 'emailAddress',
                    2 => [
                      'emailAddress.id:' => 'emailAddressId',
                      'emailAddress.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'User',
                  'emailAddress.lower*' => '{value}'
                ]
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'id!=s' => [
                'from' => 'EntityEmailAddress',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'emailAddress',
                    1 => 'emailAddress',
                    2 => [
                      'emailAddress.id:' => 'emailAddressId',
                      'emailAddress.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'User',
                  'emailAddress.lower*' => '{value}'
                ]
              ]
            ]
          ],
          '=' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower=' => '{value}'
            ],
            'distinct' => true
          ],
          '<>' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IN' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower=' => '{value}'
            ],
            'distinct' => true
          ],
          'NOT IN' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IS NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower=' => NULL
            ],
            'distinct' => true
          ],
          'IS NOT NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower!=' => NULL
            ],
            'distinct' => true
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'emailAddresses.lower',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'emailAddresses.lower'
          ]
        ]
      ],
      'phoneNumber' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'phone',
        'select' => [
          'select' => 'phoneNumbers.name',
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'phoneNumberUser{alias}Foreign.name',
          'leftJoins' => [
            0 => [
              0 => 'EntityPhoneNumber',
              1 => 'phoneNumberUser{alias}ForeignMiddle',
              2 => [
                'phoneNumberUser{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'phoneNumberUser{alias}ForeignMiddle.primary' => 1,
                'phoneNumberUser{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'PhoneNumber',
              1 => 'phoneNumberUser{alias}Foreign',
              2 => [
                'phoneNumberUser{alias}Foreign.id:' => 'phoneNumberUser{alias}ForeignMiddle.phoneNumberId',
                'phoneNumberUser{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'id=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'User',
                  'phoneNumber.name*' => '{value}'
                ]
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'id!=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'User',
                  'phoneNumber.name*' => '{value}'
                ]
              ]
            ]
          ],
          '=' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name=' => '{value}'
            ],
            'distinct' => true
          ],
          '<>' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name=' => '{value}'
            ],
            'distinct' => true
          ],
          'NOT IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IS NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name=' => NULL
            ],
            'distinct' => true
          ],
          'IS NOT NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name!=' => NULL
            ],
            'distinct' => true
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'phoneNumbers.name',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'phoneNumbers.name'
          ]
        ]
      ],
      'token' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'authTokenId' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'authLogRecordId' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'ipAddress' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'acceptanceStatus' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'acceptanceStatusMeetings' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'relation' => 'meetings',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'acceptanceStatusCalls' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'relation' => 'calls',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'teamRole' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'sendAccessInfo' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'gender' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'auth2FA' => [
        'type' => 'foreign',
        'relation' => 'userData',
        'foreign' => 'auth2FA',
        'fieldType' => 'foreign',
        'foreignType' => 'bool'
      ],
      'lastAccess' => [
        'type' => 'datetime',
        'notNull' => false,
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'datetime'
      ],
      'targetListIsOptedOut' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'middleName' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'emailAddressIsOptedOut' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => [
          'select' => 'emailAddresses.optOut',
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'emailAddressUser{alias}Foreign.optOut',
          'leftJoins' => [
            0 => [
              0 => 'EntityEmailAddress',
              1 => 'emailAddressUser{alias}ForeignMiddle',
              2 => [
                'emailAddressUser{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'emailAddressUser{alias}ForeignMiddle.primary' => 1,
                'emailAddressUser{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'EmailAddress',
              1 => 'emailAddressUser{alias}Foreign',
              2 => [
                'emailAddressUser{alias}Foreign.id:' => 'emailAddressUser{alias}ForeignMiddle.emailAddressId',
                'emailAddressUser{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          '= TRUE' => [
            'whereClause' => [
              0 => [
                'emailAddresses.optOut=' => true
              ],
              1 => [
                'emailAddresses.optOut!=' => NULL
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ],
          '= FALSE' => [
            'whereClause' => [
              'OR' => [
                0 => [
                  'emailAddresses.optOut=' => false
                ],
                1 => [
                  'emailAddresses.optOut=' => NULL
                ]
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'emailAddresses.optOut',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'emailAddresses.optOut'
          ]
        ],
        'default' => false
      ],
      'phoneNumberIsOptedOut' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => [
          'select' => 'phoneNumbers.optOut',
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'phoneNumberUser{alias}Foreign.optOut',
          'leftJoins' => [
            0 => [
              0 => 'EntityPhoneNumber',
              1 => 'phoneNumberUser{alias}ForeignMiddle',
              2 => [
                'phoneNumberUser{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'phoneNumberUser{alias}ForeignMiddle.primary' => 1,
                'phoneNumberUser{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'PhoneNumber',
              1 => 'phoneNumberUser{alias}Foreign',
              2 => [
                'phoneNumberUser{alias}Foreign.id:' => 'phoneNumberUser{alias}ForeignMiddle.phoneNumberId',
                'phoneNumberUser{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          '= TRUE' => [
            'whereClause' => [
              0 => [
                'phoneNumbers.optOut=' => true
              ],
              1 => [
                'phoneNumbers.optOut!=' => NULL
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ],
          '= FALSE' => [
            'whereClause' => [
              'OR' => [
                0 => [
                  'phoneNumbers.optOut=' => false
                ],
                1 => [
                  'phoneNumbers.optOut=' => NULL
                ]
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'phoneNumbers.optOut',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'phoneNumbers.optOut'
          ]
        ],
        'default' => false
      ],
      'emailAddressData' => [
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true
      ],
      'phoneNumberData' => [
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true
      ],
      'phoneNumberNumeric' => [
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'id=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'User',
                  'phoneNumber.numeric*' => '{value}'
                ]
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'id!=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'User',
                  'phoneNumber.numeric*' => '{value}'
                ]
              ]
            ]
          ],
          '=' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric=' => '{value}'
            ],
            'distinct' => true
          ],
          '<>' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric=' => '{value}'
            ],
            'distinct' => true
          ],
          'NOT IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IS NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric=' => NULL
            ],
            'distinct' => true
          ],
          'IS NOT NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric!=' => NULL
            ],
            'distinct' => true
          ]
        ]
      ],
      'defaultTeamId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'defaultTeamName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'defaultTeam',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'teamsColumns' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => [
          'role' => 'userRole'
        ],
        'attributeRole' => 'columnsMap'
      ],
      'rolesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'roles',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'rolesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'portalsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'portals',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'portalsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'portalRolesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'portalRoles',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'portalRolesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'contactId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'contactName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'contact',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'accountsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'accounts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'accountsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'accountId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'account',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notStorable' => true,
        'notNull' => false
      ],
      'accountName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link'
      ],
      'portalId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'portal',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notStorable' => true,
        'notNull' => false
      ],
      'portalName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link'
      ],
      'avatarId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => false,
        'notNull' => false
      ],
      'avatarName' => [
        'type' => 'foreign',
        'relation' => 'avatar',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'dashboardTemplateId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'dashboardTemplateName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'dashboardTemplate',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'userDataId' => [
        'type' => 'foreign',
        'notStorable' => true,
        'attributeRole' => 'id',
        'fieldType' => 'linkOne',
        'relation' => 'userData',
        'foreign' => 'id',
        'foreignType' => 'id'
      ],
      'userDataName' => [
        'type' => 'foreign',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkOne',
        'relation' => 'userData',
        'foreign' => 'id',
        'foreignType' => 'id'
      ],
      'ordersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'orders',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'ordersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'targetListsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'targetListsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'tasksIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'tasksNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'notesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'notesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'emailsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'emailsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'callsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'callsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'meetingsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'meetingsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'preferencesId' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'preferences',
        'foreign' => 'id'
      ],
      'preferencesName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'preferences',
        'foreign' => 'name'
      ]
    ],
    'relations' => [
      'emailAddresses' => [
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => [
          0 => 'entityId',
          1 => 'emailAddressId'
        ],
        'conditions' => [
          'entityType' => 'User'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ],
          'primary' => [
            'type' => 'bool',
            'default' => false
          ]
        ]
      ],
      'phoneNumbers' => [
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => [
          0 => 'entityId',
          1 => 'phoneNumberId'
        ],
        'conditions' => [
          'entityType' => 'User'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ],
          'primary' => [
            'type' => 'bool',
            'default' => false
          ]
        ]
      ],
      'avatar' => [
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'avatarId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'orders' => [
        'type' => 'hasMany',
        'entity' => 'Orders',
        'foreignKey' => 'confirmedById',
        'foreign' => 'confirmedBy'
      ],
      'targetLists' => [
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'targetListUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'userId',
          1 => 'targetListId'
        ],
        'foreign' => 'users',
        'columnAttributeMap' => [
          'optedOut' => 'targetListIsOptedOut'
        ],
        'additionalColumns' => [
          'optedOut' => [
            'type' => 'bool'
          ]
        ]
      ],
      'tasks' => [
        'type' => 'hasMany',
        'entity' => 'Task',
        'foreignKey' => 'assignedUserId',
        'foreign' => 'assignedUser'
      ],
      'accounts' => [
        'type' => 'manyMany',
        'entity' => 'Account',
        'relationName' => 'AccountPortalUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'userId',
          1 => 'accountId'
        ],
        'foreign' => 'portalUsers'
      ],
      'contact' => [
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'contactId',
        'foreignKey' => 'id',
        'foreign' => 'portalUser'
      ],
      'notes' => [
        'type' => 'manyMany',
        'entity' => 'Note',
        'relationName' => 'noteUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'userId',
          1 => 'noteId'
        ],
        'foreign' => 'users'
      ],
      'emails' => [
        'type' => 'manyMany',
        'entity' => 'Email',
        'relationName' => 'emailUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'userId',
          1 => 'emailId'
        ],
        'foreign' => 'users',
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
      'calls' => [
        'type' => 'manyMany',
        'entity' => 'Call',
        'relationName' => 'callUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'userId',
          1 => 'callId'
        ],
        'foreign' => 'users',
        'columnAttributeMap' => [
          'status' => 'acceptanceStatus'
        ],
        'additionalColumns' => [
          'status' => [
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None'
          ]
        ]
      ],
      'meetings' => [
        'type' => 'manyMany',
        'entity' => 'Meeting',
        'relationName' => 'meetingUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'userId',
          1 => 'meetingId'
        ],
        'foreign' => 'users',
        'columnAttributeMap' => [
          'status' => 'acceptanceStatus'
        ],
        'additionalColumns' => [
          'status' => [
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None'
          ]
        ]
      ],
      'userData' => [
        'type' => 'hasOne',
        'entity' => 'UserData',
        'foreignKey' => 'userId',
        'foreign' => 'user'
      ],
      'preferences' => [
        'type' => 'hasOne',
        'entity' => 'Preferences',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true
      ],
      'dashboardTemplate' => [
        'type' => 'belongsTo',
        'entity' => 'DashboardTemplate',
        'key' => 'dashboardTemplateId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'portalRoles' => [
        'type' => 'manyMany',
        'entity' => 'PortalRole',
        'relationName' => 'portalRoleUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'userId',
          1 => 'portalRoleId'
        ],
        'foreign' => 'users'
      ],
      'portals' => [
        'type' => 'manyMany',
        'entity' => 'Portal',
        'relationName' => 'portalUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'userId',
          1 => 'portalId'
        ],
        'foreign' => 'users'
      ],
      'roles' => [
        'type' => 'manyMany',
        'entity' => 'Role',
        'relationName' => 'roleUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'userId',
          1 => 'roleId'
        ],
        'foreign' => 'users'
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'teamUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'userId',
          1 => 'teamId'
        ],
        'foreign' => 'users',
        'columnAttributeMap' => [
          'role' => 'teamRole'
        ],
        'additionalColumns' => [
          'role' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'defaultTeam' => [
        'type' => 'belongsTo',
        'entity' => 'Team',
        'key' => 'defaultTeamId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'type' => [
        'type' => 'index',
        'columns' => [
          0 => 'type'
        ],
        'key' => 'IDX_TYPE'
      ],
      'defaultTeamId' => [
        'type' => 'index',
        'columns' => [
          0 => 'defaultTeamId'
        ],
        'key' => 'IDX_DEFAULT_TEAM_ID'
      ],
      'contactId' => [
        'type' => 'index',
        'columns' => [
          0 => 'contactId'
        ],
        'key' => 'IDX_CONTACT_ID'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'dashboardTemplateId' => [
        'type' => 'index',
        'columns' => [
          0 => 'dashboardTemplateId'
        ],
        'key' => 'IDX_DASHBOARD_TEMPLATE_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'userName',
      'order' => 'ASC'
    ]
  ],
  'UserData' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'imapHandlers' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'smtpHandlers' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'auth2FA' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'auth2FAMethod' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'auth2FATotpSecret' => [
        'type' => 'varchar',
        'len' => 32,
        'fieldType' => 'varchar'
      ],
      'auth2FAEmailAddress' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'userId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'notNull' => false
      ],
      'userName' => [
        'type' => 'foreign',
        'relation' => 'user',
        'foreign' => 'name',
        'notStorable' => false,
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'user' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'userId' => [
        'type' => 'index',
        'columns' => [
          0 => 'userId'
        ],
        'key' => 'IDX_USER_ID'
      ]
    ]
  ],
  'Webhook' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'event' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'url' => [
        'type' => 'varchar',
        'len' => 512,
        'fieldType' => 'varchar'
      ],
      'isActive' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'entityType' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'type' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'field' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'secretKey' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'userId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'userName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'user',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'user' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'event' => [
        'columns' => [
          0 => 'event'
        ],
        'key' => 'IDX_EVENT'
      ],
      'entityTypeType' => [
        'columns' => [
          0 => 'entityType',
          1 => 'type'
        ],
        'key' => 'IDX_ENTITY_TYPE_TYPE'
      ],
      'entityTypeField' => [
        'columns' => [
          0 => 'entityType',
          1 => 'field'
        ],
        'key' => 'IDX_ENTITY_TYPE_FIELD'
      ],
      'userId' => [
        'type' => 'index',
        'columns' => [
          0 => 'userId'
        ],
        'key' => 'IDX_USER_ID'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'WebhookEventQueueItem' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'number' => [
        'type' => 'int',
        'dbType' => 'bigint',
        'autoincrement' => true,
        'unique' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'event' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'data' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'isProcessed' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'targetId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'target',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'targetType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'target',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'targetName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'target',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ]
    ],
    'relations' => [],
    'indexes' => [
      'number' => [
        'type' => 'unique',
        'columns' => [
          0 => 'number'
        ],
        'key' => 'UNIQ_NUMBER'
      ],
      'target' => [
        'type' => 'index',
        'columns' => [
          0 => 'targetId',
          1 => 'targetType'
        ],
        'key' => 'IDX_TARGET'
      ]
    ],
    'collection' => [
      'orderBy' => 'number',
      'order' => 'DESC'
    ]
  ],
  'WebhookQueueItem' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'number' => [
        'type' => 'int',
        'dbType' => 'bigint',
        'autoincrement' => true,
        'unique' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'event' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'data' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'status' => [
        'type' => 'varchar',
        'len' => 15,
        'default' => 'Pending',
        'fieldType' => 'varchar'
      ],
      'processedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'attempts' => [
        'type' => 'int',
        'default' => 0,
        'fieldType' => 'int',
        'len' => 11
      ],
      'processAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'webhookId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'webhookName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'webhook',
        'foreign' => 'id',
        'foreignType' => 'id'
      ],
      'targetId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'target',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'targetType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'target',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'targetName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'target',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ]
    ],
    'relations' => [
      'webhook' => [
        'type' => 'belongsTo',
        'entity' => 'Webhook',
        'key' => 'webhookId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'number' => [
        'type' => 'unique',
        'columns' => [
          0 => 'number'
        ],
        'key' => 'UNIQ_NUMBER'
      ],
      'webhookId' => [
        'type' => 'index',
        'columns' => [
          0 => 'webhookId'
        ],
        'key' => 'IDX_WEBHOOK_ID'
      ],
      'target' => [
        'type' => 'index',
        'columns' => [
          0 => 'targetId',
          1 => 'targetType'
        ],
        'key' => 'IDX_TARGET'
      ]
    ],
    'collection' => [
      'orderBy' => 'number',
      'order' => 'DESC'
    ]
  ],
  'Account' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'len' => 249,
        'fieldType' => 'varchar'
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'website' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'emailAddress' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'email',
        'select' => [
          'select' => 'emailAddresses.name',
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'emailAddressAccount{alias}Foreign.name',
          'leftJoins' => [
            0 => [
              0 => 'EntityEmailAddress',
              1 => 'emailAddressAccount{alias}ForeignMiddle',
              2 => [
                'emailAddressAccount{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'emailAddressAccount{alias}ForeignMiddle.primary' => 1,
                'emailAddressAccount{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'EmailAddress',
              1 => 'emailAddressAccount{alias}Foreign',
              2 => [
                'emailAddressAccount{alias}Foreign.id:' => 'emailAddressAccount{alias}ForeignMiddle.emailAddressId',
                'emailAddressAccount{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'id=s' => [
                'from' => 'EntityEmailAddress',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'emailAddress',
                    1 => 'emailAddress',
                    2 => [
                      'emailAddress.id:' => 'emailAddressId',
                      'emailAddress.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Account',
                  'emailAddress.lower*' => '{value}'
                ]
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'id!=s' => [
                'from' => 'EntityEmailAddress',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'emailAddress',
                    1 => 'emailAddress',
                    2 => [
                      'emailAddress.id:' => 'emailAddressId',
                      'emailAddress.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Account',
                  'emailAddress.lower*' => '{value}'
                ]
              ]
            ]
          ],
          '=' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower=' => '{value}'
            ],
            'distinct' => true
          ],
          '<>' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IN' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower=' => '{value}'
            ],
            'distinct' => true
          ],
          'NOT IN' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IS NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower=' => NULL
            ],
            'distinct' => true
          ],
          'IS NOT NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower!=' => NULL
            ],
            'distinct' => true
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'emailAddresses.lower',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'emailAddresses.lower'
          ]
        ]
      ],
      'phoneNumber' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'phone',
        'select' => [
          'select' => 'phoneNumbers.name',
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'phoneNumberAccount{alias}Foreign.name',
          'leftJoins' => [
            0 => [
              0 => 'EntityPhoneNumber',
              1 => 'phoneNumberAccount{alias}ForeignMiddle',
              2 => [
                'phoneNumberAccount{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'phoneNumberAccount{alias}ForeignMiddle.primary' => 1,
                'phoneNumberAccount{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'PhoneNumber',
              1 => 'phoneNumberAccount{alias}Foreign',
              2 => [
                'phoneNumberAccount{alias}Foreign.id:' => 'phoneNumberAccount{alias}ForeignMiddle.phoneNumberId',
                'phoneNumberAccount{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'id=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Account',
                  'phoneNumber.name*' => '{value}'
                ]
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'id!=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Account',
                  'phoneNumber.name*' => '{value}'
                ]
              ]
            ]
          ],
          '=' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name=' => '{value}'
            ],
            'distinct' => true
          ],
          '<>' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name=' => '{value}'
            ],
            'distinct' => true
          ],
          'NOT IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IS NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name=' => NULL
            ],
            'distinct' => true
          ],
          'IS NOT NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name!=' => NULL
            ],
            'distinct' => true
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'phoneNumbers.name',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'phoneNumbers.name'
          ]
        ]
      ],
      'type' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'industry' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'sicCode' => [
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar'
      ],
      'contactRole' => [
        'type' => 'varchar',
        'len' => 100,
        'notStorable' => true,
        'fieldType' => 'varchar'
      ],
      'contactIsInactive' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'billingAddressStreet' => [
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text'
      ],
      'billingAddressCity' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'billingAddressState' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'billingAddressCountry' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'billingAddressPostalCode' => [
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar'
      ],
      'shippingAddressStreet' => [
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text'
      ],
      'shippingAddressCity' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'shippingAddressState' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'shippingAddressCountry' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'shippingAddressPostalCode' => [
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar'
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'targetListIsOptedOut' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'emailAddressIsOptedOut' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => [
          'select' => 'emailAddresses.optOut',
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'emailAddressAccount{alias}Foreign.optOut',
          'leftJoins' => [
            0 => [
              0 => 'EntityEmailAddress',
              1 => 'emailAddressAccount{alias}ForeignMiddle',
              2 => [
                'emailAddressAccount{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'emailAddressAccount{alias}ForeignMiddle.primary' => 1,
                'emailAddressAccount{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'EmailAddress',
              1 => 'emailAddressAccount{alias}Foreign',
              2 => [
                'emailAddressAccount{alias}Foreign.id:' => 'emailAddressAccount{alias}ForeignMiddle.emailAddressId',
                'emailAddressAccount{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          '= TRUE' => [
            'whereClause' => [
              0 => [
                'emailAddresses.optOut=' => true
              ],
              1 => [
                'emailAddresses.optOut!=' => NULL
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ],
          '= FALSE' => [
            'whereClause' => [
              'OR' => [
                0 => [
                  'emailAddresses.optOut=' => false
                ],
                1 => [
                  'emailAddresses.optOut=' => NULL
                ]
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'emailAddresses.optOut',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'emailAddresses.optOut'
          ]
        ],
        'default' => false
      ],
      'phoneNumberIsOptedOut' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => [
          'select' => 'phoneNumbers.optOut',
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'phoneNumberAccount{alias}Foreign.optOut',
          'leftJoins' => [
            0 => [
              0 => 'EntityPhoneNumber',
              1 => 'phoneNumberAccount{alias}ForeignMiddle',
              2 => [
                'phoneNumberAccount{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'phoneNumberAccount{alias}ForeignMiddle.primary' => 1,
                'phoneNumberAccount{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'PhoneNumber',
              1 => 'phoneNumberAccount{alias}Foreign',
              2 => [
                'phoneNumberAccount{alias}Foreign.id:' => 'phoneNumberAccount{alias}ForeignMiddle.phoneNumberId',
                'phoneNumberAccount{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          '= TRUE' => [
            'whereClause' => [
              0 => [
                'phoneNumbers.optOut=' => true
              ],
              1 => [
                'phoneNumbers.optOut!=' => NULL
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ],
          '= FALSE' => [
            'whereClause' => [
              'OR' => [
                0 => [
                  'phoneNumbers.optOut=' => false
                ],
                1 => [
                  'phoneNumbers.optOut=' => NULL
                ]
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'phoneNumbers.optOut',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'phoneNumbers.optOut'
          ]
        ],
        'default' => false
      ],
      'billingAddressMap' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map'
      ],
      'shippingAddressMap' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map'
      ],
      'emailAddressData' => [
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true
      ],
      'phoneNumberData' => [
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true
      ],
      'phoneNumberNumeric' => [
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'id=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Account',
                  'phoneNumber.numeric*' => '{value}'
                ]
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'id!=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Account',
                  'phoneNumber.numeric*' => '{value}'
                ]
              ]
            ]
          ],
          '=' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric=' => '{value}'
            ],
            'distinct' => true
          ],
          '<>' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric=' => '{value}'
            ],
            'distinct' => true
          ],
          'NOT IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IS NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric=' => NULL
            ],
            'distinct' => true
          ],
          'IS NOT NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric!=' => NULL
            ],
            'distinct' => true
          ]
        ]
      ],
      'campaignId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'campaignName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'campaign',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'targetListsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'targetLists',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'targetListsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'targetListId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'targetList',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notStorable' => true,
        'notNull' => false
      ],
      'targetListName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link'
      ],
      'originalLeadId' => [
        'type' => 'foreign',
        'notStorable' => true,
        'attributeRole' => 'id',
        'fieldType' => 'linkOne',
        'relation' => 'originalLead',
        'foreign' => 'id',
        'foreignType' => 'id'
      ],
      'originalLeadName' => [
        'type' => 'foreign',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkOne',
        'relation' => 'originalLead',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'isFollowed' => [
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true
      ],
      'followersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'notExportable' => true
      ],
      'followersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'notExportable' => true
      ],
      'portalUsersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'portalUsersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'campaignLogRecordsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'campaignLogRecordsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'emailsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'emailsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'tasksIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'tasksNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'callsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'callsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'meetingsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'meetingsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'tasksPrimaryIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'tasksPrimaryNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'callsPrimaryIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'callsPrimaryNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'emailsPrimaryIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'emailsPrimaryNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'meetingsPrimaryIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'meetingsPrimaryNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'documentsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'documentsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'casesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'casesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'opportunitiesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'opportunitiesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'contactsPrimaryIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'contactsPrimaryNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'contactsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'contactsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'emailAddresses' => [
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => [
          0 => 'entityId',
          1 => 'emailAddressId'
        ],
        'conditions' => [
          'entityType' => 'Account'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ],
          'primary' => [
            'type' => 'bool',
            'default' => false
          ]
        ]
      ],
      'phoneNumbers' => [
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => [
          0 => 'entityId',
          1 => 'phoneNumberId'
        ],
        'conditions' => [
          'entityType' => 'Account'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ],
          'primary' => [
            'type' => 'bool',
            'default' => false
          ]
        ]
      ],
      'originalLead' => [
        'type' => 'hasOne',
        'entity' => 'Lead',
        'foreignKey' => 'createdAccountId',
        'foreign' => 'createdAccount'
      ],
      'portalUsers' => [
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'AccountPortalUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'accountId',
          1 => 'userId'
        ],
        'foreign' => 'accounts'
      ],
      'targetLists' => [
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'accountTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'accountId',
          1 => 'targetListId'
        ],
        'foreign' => 'accounts',
        'columnAttributeMap' => [
          'optedOut' => 'targetListIsOptedOut'
        ],
        'additionalColumns' => [
          'optedOut' => [
            'type' => 'bool'
          ]
        ]
      ],
      'campaignLogRecords' => [
        'type' => 'hasChildren',
        'entity' => 'CampaignLogRecord',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'campaign' => [
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'foreign' => 'accounts'
      ],
      'emails' => [
        'type' => 'hasChildren',
        'entity' => 'Email',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'tasks' => [
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'calls' => [
        'type' => 'hasChildren',
        'entity' => 'Call',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'meetings' => [
        'type' => 'hasChildren',
        'entity' => 'Meeting',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'tasksPrimary' => [
        'type' => 'hasMany',
        'entity' => 'Task',
        'foreignKey' => 'accountId',
        'foreign' => 'account'
      ],
      'callsPrimary' => [
        'type' => 'hasMany',
        'entity' => 'Call',
        'foreignKey' => 'accountId',
        'foreign' => 'account'
      ],
      'emailsPrimary' => [
        'type' => 'hasMany',
        'entity' => 'Email',
        'foreignKey' => 'accountId',
        'foreign' => 'account'
      ],
      'meetingsPrimary' => [
        'type' => 'hasMany',
        'entity' => 'Meeting',
        'foreignKey' => 'accountId',
        'foreign' => 'account'
      ],
      'documents' => [
        'type' => 'manyMany',
        'entity' => 'Document',
        'relationName' => 'accountDocument',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'accountId',
          1 => 'documentId'
        ],
        'foreign' => 'accounts'
      ],
      'cases' => [
        'type' => 'hasMany',
        'entity' => 'Case',
        'foreignKey' => 'accountId',
        'foreign' => 'account'
      ],
      'opportunities' => [
        'type' => 'hasMany',
        'entity' => 'Opportunity',
        'foreignKey' => 'accountId',
        'foreign' => 'account'
      ],
      'contactsPrimary' => [
        'type' => 'hasMany',
        'entity' => 'Contact',
        'foreignKey' => 'accountId',
        'foreign' => 'account'
      ],
      'contacts' => [
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'accountContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'accountId',
          1 => 'contactId'
        ],
        'foreign' => 'accounts',
        'columnAttributeMap' => [
          'role' => 'contactRole',
          'isInactive' => 'contactIsInactive'
        ],
        'additionalColumns' => [
          'role' => [
            'type' => 'varchar',
            'len' => 100
          ],
          'isInactive' => [
            'type' => 'bool',
            'default' => false
          ]
        ]
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'Account'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'createdAt' => [
        'columns' => [
          0 => 'createdAt',
          1 => 'deleted'
        ],
        'key' => 'IDX_CREATED_AT'
      ],
      'createdAtId' => [
        'unique' => true,
        'columns' => [
          0 => 'createdAt',
          1 => 'id'
        ],
        'key' => 'UNIQ_CREATED_AT_ID'
      ],
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'campaignId' => [
        'type' => 'index',
        'columns' => [
          0 => 'campaignId'
        ],
        'key' => 'IDX_CAMPAIGN_ID'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'Call' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'status' => [
        'type' => 'varchar',
        'default' => 'Planned',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'dateStart' => [
        'type' => 'datetime',
        'fieldType' => 'datetime'
      ],
      'dateEnd' => [
        'type' => 'datetime',
        'fieldType' => 'datetime'
      ],
      'duration' => [
        'type' => 'int',
        'notStorable' => true,
        'default' => 300,
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
        ],
        'fieldType' => 'int',
        'len' => 11
      ],
      'reminders' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray'
      ],
      'direction' => [
        'type' => 'varchar',
        'default' => 'Outbound',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'acceptanceStatus' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
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
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'phoneNumbersMap' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'fieldType' => 'jsonObject'
      ],
      'parentId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'parent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'parentType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'parentName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'parent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ],
      'accountId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'accountName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'usersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'users',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'name',
        'isLinkStub' => false
      ],
      'usersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'usersColumns' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => [
          'status' => 'acceptanceStatus'
        ],
        'attributeRole' => 'columnsMap'
      ],
      'contactsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'contacts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'name',
        'isLinkStub' => false
      ],
      'contactsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'contactsColumns' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => [
          'status' => 'acceptanceStatus'
        ],
        'attributeRole' => 'columnsMap'
      ],
      'leadsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'leads',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'name',
        'isLinkStub' => false
      ],
      'leadsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'leadsColumns' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => [
          'status' => 'acceptanceStatus'
        ],
        'attributeRole' => 'columnsMap'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ]
    ],
    'relations' => [
      'parent' => [
        'type' => 'belongsToParent',
        'key' => 'parentId',
        'foreign' => 'calls'
      ],
      'leads' => [
        'type' => 'manyMany',
        'entity' => 'Lead',
        'relationName' => 'callLead',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'callId',
          1 => 'leadId'
        ],
        'foreign' => 'calls',
        'columnAttributeMap' => [
          'status' => 'acceptanceStatus'
        ],
        'additionalColumns' => [
          'status' => [
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None'
          ]
        ]
      ],
      'contacts' => [
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'callContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'callId',
          1 => 'contactId'
        ],
        'foreign' => 'calls',
        'columnAttributeMap' => [
          'status' => 'acceptanceStatus'
        ],
        'additionalColumns' => [
          'status' => [
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None'
          ]
        ]
      ],
      'users' => [
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'callUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'callId',
          1 => 'userId'
        ],
        'foreign' => 'calls',
        'columnAttributeMap' => [
          'status' => 'acceptanceStatus'
        ],
        'additionalColumns' => [
          'status' => [
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None'
          ]
        ]
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'Call'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'account' => [
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'dateStartStatus' => [
        'columns' => [
          0 => 'dateStart',
          1 => 'status'
        ],
        'key' => 'IDX_DATE_START_STATUS'
      ],
      'dateStart' => [
        'columns' => [
          0 => 'dateStart',
          1 => 'deleted'
        ],
        'key' => 'IDX_DATE_START'
      ],
      'status' => [
        'columns' => [
          0 => 'status',
          1 => 'deleted'
        ],
        'key' => 'IDX_STATUS'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'assignedUserStatus' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'status'
        ],
        'key' => 'IDX_ASSIGNED_USER_STATUS'
      ],
      'parent' => [
        'type' => 'index',
        'columns' => [
          0 => 'parentId',
          1 => 'parentType'
        ],
        'key' => 'IDX_PARENT'
      ],
      'accountId' => [
        'type' => 'index',
        'columns' => [
          0 => 'accountId'
        ],
        'key' => 'IDX_ACCOUNT_ID'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'dateStart',
      'order' => 'DESC'
    ]
  ],
  'Campaign' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'status' => [
        'type' => 'varchar',
        'default' => 'Planning',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'type' => [
        'type' => 'varchar',
        'default' => 'Email',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'startDate' => [
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date'
      ],
      'endDate' => [
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date'
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'sentCount' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'openedCount' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'clickedCount' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'optedInCount' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'optedOutCount' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'bouncedCount' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'hardBouncedCount' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'softBouncedCount' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'leadCreatedCount' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'openedPercentage' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'clickedPercentage' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'optedOutPercentage' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'bouncedPercentage' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'revenue' => [
        'type' => 'float',
        'notStorable' => true,
        'fieldType' => 'currency',
        'attributeRole' => 'value'
      ],
      'budget' => [
        'type' => 'float',
        'fieldType' => 'currency',
        'order' => [
          'order' => [
            0 => [
              0 => 'MUL:(budget, budgetCurrencyRate.rate)',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'Currency',
              1 => 'budgetCurrencyRate',
              2 => [
                'budgetCurrencyRate.id:' => 'budgetCurrency'
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'budgetCurrencyRate.rate'
          ]
        ],
        'attributeRole' => 'value'
      ],
      'mailMergeOnlyWithAddress' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => true,
        'fieldType' => 'bool'
      ],
      'revenueCurrency' => [
        'type' => 'varchar',
        'len' => 6,
        'notStorable' => true,
        'fieldType' => 'currency',
        'attributeRole' => 'currency'
      ],
      'budgetCurrency' => [
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'targetListsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'targetLists',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'targetListsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'excludingTargetListsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'excludingTargetLists',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'excludingTargetListsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'budgetConverted' => [
        'type' => 'float',
        'select' => [
          'select' => 'MUL:(budget, budgetCurrencyRate.rate)',
          'leftJoins' => [
            0 => [
              0 => 'Currency',
              1 => 'budgetCurrencyRate',
              2 => [
                'budgetCurrencyRate.id:' => 'budgetCurrency'
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'MUL:({alias}.budget, budgetCurrencyRateCampaign{alias}Foreign.rate)',
          'leftJoins' => [
            0 => [
              0 => 'Currency',
              1 => 'budgetCurrencyRateCampaign{alias}Foreign',
              2 => [
                'budgetCurrencyRateCampaign{alias}Foreign.id:' => '{alias}.budgetCurrency'
              ]
            ]
          ]
        ],
        'where' => [
          '=' => [
            'whereClause' => [
              'MUL:(budget, budgetCurrencyRate.rate)=' => '{value}'
            ],
            'leftJoins' => [
              0 => [
                0 => 'Currency',
                1 => 'budgetCurrencyRate',
                2 => [
                  'budgetCurrencyRate.id:' => 'budgetCurrency'
                ]
              ]
            ]
          ],
          '>' => [
            'whereClause' => [
              'MUL:(budget, budgetCurrencyRate.rate)>' => '{value}'
            ],
            'leftJoins' => [
              0 => [
                0 => 'Currency',
                1 => 'budgetCurrencyRate',
                2 => [
                  'budgetCurrencyRate.id:' => 'budgetCurrency'
                ]
              ]
            ]
          ],
          '<' => [
            'whereClause' => [
              'MUL:(budget, budgetCurrencyRate.rate)<' => '{value}'
            ],
            'leftJoins' => [
              0 => [
                0 => 'Currency',
                1 => 'budgetCurrencyRate',
                2 => [
                  'budgetCurrencyRate.id:' => 'budgetCurrency'
                ]
              ]
            ]
          ],
          '>=' => [
            'whereClause' => [
              'MUL:(budget, budgetCurrencyRate.rate)>=' => '{value}'
            ],
            'leftJoins' => [
              0 => [
                0 => 'Currency',
                1 => 'budgetCurrencyRate',
                2 => [
                  'budgetCurrencyRate.id:' => 'budgetCurrency'
                ]
              ]
            ]
          ],
          '<=' => [
            'whereClause' => [
              'MUL:(budget, budgetCurrencyRate.rate)<=' => '{value}'
            ],
            'leftJoins' => [
              0 => [
                0 => 'Currency',
                1 => 'budgetCurrencyRate',
                2 => [
                  'budgetCurrencyRate.id:' => 'budgetCurrency'
                ]
              ]
            ]
          ],
          '<>' => [
            'whereClause' => [
              'MUL:(budget, budgetCurrencyRate.rate)!=' => '{value}'
            ],
            'leftJoins' => [
              0 => [
                0 => 'Currency',
                1 => 'budgetCurrencyRate',
                2 => [
                  'budgetCurrencyRate.id:' => 'budgetCurrency'
                ]
              ]
            ]
          ],
          'IS NULL' => [
            'whereClause' => [
              'budget=' => NULL
            ]
          ],
          'IS NOT NULL' => [
            'whereClause' => [
              'budget!=' => NULL
            ]
          ]
        ],
        'notStorable' => true,
        'order' => [
          'order' => [
            0 => [
              0 => 'MUL:(budget, budgetCurrencyRate.rate)',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'Currency',
              1 => 'budgetCurrencyRate',
              2 => [
                'budgetCurrencyRate.id:' => 'budgetCurrency'
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'budgetCurrencyRate.rate'
          ]
        ],
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency'
      ],
      'contactsTemplateId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'contactsTemplateName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'contactsTemplate',
        'foreign' => 'name'
      ],
      'leadsTemplateId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'leadsTemplateName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'leadsTemplate',
        'foreign' => 'name'
      ],
      'accountsTemplateId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'accountsTemplateName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'accountsTemplate',
        'foreign' => 'name'
      ],
      'usersTemplateId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'usersTemplateName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'usersTemplate',
        'foreign' => 'name'
      ],
      'massEmailsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'massEmailsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'trackingUrlsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'trackingUrlsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'campaignLogRecordsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'campaignLogRecordsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'opportunitiesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'opportunitiesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'leadsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'leadsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'contactsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'contactsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'accountsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'accountsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'usersTemplate' => [
        'type' => 'belongsTo',
        'entity' => 'Template',
        'key' => 'usersTemplateId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true
      ],
      'accountsTemplate' => [
        'type' => 'belongsTo',
        'entity' => 'Template',
        'key' => 'accountsTemplateId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true
      ],
      'leadsTemplate' => [
        'type' => 'belongsTo',
        'entity' => 'Template',
        'key' => 'leadsTemplateId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true
      ],
      'contactsTemplate' => [
        'type' => 'belongsTo',
        'entity' => 'Template',
        'key' => 'contactsTemplateId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true
      ],
      'massEmails' => [
        'type' => 'hasMany',
        'entity' => 'MassEmail',
        'foreignKey' => 'campaignId',
        'foreign' => 'campaign'
      ],
      'trackingUrls' => [
        'type' => 'hasMany',
        'entity' => 'CampaignTrackingUrl',
        'foreignKey' => 'campaignId',
        'foreign' => 'campaign'
      ],
      'campaignLogRecords' => [
        'type' => 'hasMany',
        'entity' => 'CampaignLogRecord',
        'foreignKey' => 'campaignId',
        'foreign' => 'campaign'
      ],
      'opportunities' => [
        'type' => 'hasMany',
        'entity' => 'Opportunity',
        'foreignKey' => 'campaignId',
        'foreign' => 'campaign'
      ],
      'leads' => [
        'type' => 'hasMany',
        'entity' => 'Lead',
        'foreignKey' => 'campaignId',
        'foreign' => 'campaign'
      ],
      'contacts' => [
        'type' => 'hasMany',
        'entity' => 'Contact',
        'foreignKey' => 'campaignId',
        'foreign' => 'campaign'
      ],
      'accounts' => [
        'type' => 'hasMany',
        'entity' => 'Account',
        'foreignKey' => 'campaignId',
        'foreign' => 'campaign'
      ],
      'excludingTargetLists' => [
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'campaignTargetListExcluding',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'campaignId',
          1 => 'targetListId'
        ],
        'foreign' => 'campaignsExcluding'
      ],
      'targetLists' => [
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'campaignTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'campaignId',
          1 => 'targetListId'
        ],
        'foreign' => 'campaigns'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'Campaign'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'createdAt' => [
        'columns' => [
          0 => 'createdAt',
          1 => 'deleted'
        ],
        'key' => 'IDX_CREATED_AT'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'contactsTemplateId' => [
        'type' => 'index',
        'columns' => [
          0 => 'contactsTemplateId'
        ],
        'key' => 'IDX_CONTACTS_TEMPLATE_ID'
      ],
      'leadsTemplateId' => [
        'type' => 'index',
        'columns' => [
          0 => 'leadsTemplateId'
        ],
        'key' => 'IDX_LEADS_TEMPLATE_ID'
      ],
      'accountsTemplateId' => [
        'type' => 'index',
        'columns' => [
          0 => 'accountsTemplateId'
        ],
        'key' => 'IDX_ACCOUNTS_TEMPLATE_ID'
      ],
      'usersTemplateId' => [
        'type' => 'index',
        'columns' => [
          0 => 'usersTemplateId'
        ],
        'key' => 'IDX_USERS_TEMPLATE_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'CampaignLogRecord' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'action' => [
        'type' => 'varchar',
        'len' => 50,
        'fieldType' => 'varchar'
      ],
      'actionDate' => [
        'type' => 'datetime',
        'fieldType' => 'datetime'
      ],
      'data' => [
        'type' => 'jsonObject',
        'fieldType' => 'jsonObject'
      ],
      'stringData' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'stringAdditionalData' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'application' => [
        'type' => 'varchar',
        'len' => 36,
        'default' => 'Espo',
        'fieldType' => 'varchar'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'isTest' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'campaignId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'campaignName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'campaign',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'parentId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'parent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'parentType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'parentName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'parent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ],
      'objectId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'object',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'objectType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'object',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'objectName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'object',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ],
      'queueItemId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'queueItemName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'queueItem',
        'foreign' => 'name'
      ]
    ],
    'relations' => [
      'object' => [
        'type' => 'belongsToParent',
        'key' => 'objectId',
        'foreign' => NULL
      ],
      'parent' => [
        'type' => 'belongsToParent',
        'key' => 'parentId',
        'foreign' => NULL
      ],
      'queueItem' => [
        'type' => 'belongsTo',
        'entity' => 'EmailQueueItem',
        'key' => 'queueItemId',
        'foreignKey' => 'id',
        'foreign' => NULL,
        'noJoin' => true
      ],
      'campaign' => [
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'foreign' => 'campaignLogRecords'
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'actionDate' => [
        'columns' => [
          0 => 'actionDate',
          1 => 'deleted'
        ],
        'key' => 'IDX_ACTION_DATE'
      ],
      'action' => [
        'columns' => [
          0 => 'action',
          1 => 'deleted'
        ],
        'key' => 'IDX_ACTION'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'campaignId' => [
        'type' => 'index',
        'columns' => [
          0 => 'campaignId'
        ],
        'key' => 'IDX_CAMPAIGN_ID'
      ],
      'parent' => [
        'type' => 'index',
        'columns' => [
          0 => 'parentId',
          1 => 'parentType'
        ],
        'key' => 'IDX_PARENT'
      ],
      'object' => [
        'type' => 'index',
        'columns' => [
          0 => 'objectId',
          1 => 'objectType'
        ],
        'key' => 'IDX_OBJECT'
      ],
      'queueItemId' => [
        'type' => 'index',
        'columns' => [
          0 => 'queueItemId'
        ],
        'key' => 'IDX_QUEUE_ITEM_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'CampaignTrackingUrl' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'url' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'urlToUse' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'action' => [
        'type' => 'varchar',
        'default' => 'Redirect',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'message' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'campaignId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'campaignName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'campaign',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'campaign' => [
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'foreign' => 'trackingUrls'
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'campaignId' => [
        'type' => 'index',
        'columns' => [
          0 => 'campaignId'
        ],
        'key' => 'IDX_CAMPAIGN_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'name',
      'order' => 'ASC'
    ]
  ],
  'Case' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'number' => [
        'type' => 'int',
        'autoincrement' => true,
        'unique' => true,
        'index' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'status' => [
        'type' => 'varchar',
        'default' => 'New',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'priority' => [
        'type' => 'varchar',
        'default' => 'Normal',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'type' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'accountId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'accountName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'leadId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'leadName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'lead',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'contactId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'contactName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'contact',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'contactsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'contacts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'name',
        'isLinkStub' => false
      ],
      'contactsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'inboundEmailId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'inboundEmailName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'inboundEmail',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'attachmentsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'orderBy' => [
          0 => [
            0 => 'createdAt',
            1 => 'ASC'
          ],
          1 => [
            0 => 'name',
            1 => 'ASC'
          ]
        ],
        'isLinkMultipleIdList' => true,
        'relation' => 'attachments',
        'isLinkStub' => false
      ],
      'attachmentsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'isLinkStub' => false
      ],
      'isFollowed' => [
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true
      ],
      'followersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'notExportable' => true
      ],
      'followersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'notExportable' => true
      ],
      'articlesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'articlesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'emailsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'emailsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'tasksIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'tasksNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'callsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'callsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'meetingsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'meetingsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'attachmentsTypes' => [
        'type' => 'jsonObject',
        'notStorable' => true
      ]
    ],
    'relations' => [
      'articles' => [
        'type' => 'manyMany',
        'entity' => 'KnowledgeBaseArticle',
        'relationName' => 'caseKnowledgeBaseArticle',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'caseId',
          1 => 'knowledgeBaseArticleId'
        ],
        'foreign' => 'cases'
      ],
      'emails' => [
        'type' => 'hasChildren',
        'entity' => 'Email',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'tasks' => [
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'calls' => [
        'type' => 'hasChildren',
        'entity' => 'Call',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'meetings' => [
        'type' => 'hasChildren',
        'entity' => 'Meeting',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'contacts' => [
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'caseContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'caseId',
          1 => 'contactId'
        ],
        'foreign' => 'cases'
      ],
      'contact' => [
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'contactId',
        'foreignKey' => 'id',
        'foreign' => 'casesPrimary'
      ],
      'lead' => [
        'type' => 'belongsTo',
        'entity' => 'Lead',
        'key' => 'leadId',
        'foreignKey' => 'id',
        'foreign' => 'cases'
      ],
      'account' => [
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => 'cases'
      ],
      'inboundEmail' => [
        'type' => 'belongsTo',
        'entity' => 'InboundEmail',
        'key' => 'inboundEmailId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'Case'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'attachments' => [
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
        'conditions' => [
          'OR' => [
            0 => [
              'field' => NULL
            ],
            1 => [
              'field' => 'attachments'
            ]
          ]
        ]
      ]
    ],
    'indexes' => [
      'status' => [
        'columns' => [
          0 => 'status',
          1 => 'deleted'
        ],
        'key' => 'IDX_STATUS'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'assignedUserStatus' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'status'
        ],
        'key' => 'IDX_ASSIGNED_USER_STATUS'
      ],
      'number' => [
        'type' => 'unique',
        'columns' => [
          0 => 'number'
        ],
        'key' => 'UNIQ_NUMBER'
      ],
      'accountId' => [
        'type' => 'index',
        'columns' => [
          0 => 'accountId'
        ],
        'key' => 'IDX_ACCOUNT_ID'
      ],
      'leadId' => [
        'type' => 'index',
        'columns' => [
          0 => 'leadId'
        ],
        'key' => 'IDX_LEAD_ID'
      ],
      'contactId' => [
        'type' => 'index',
        'columns' => [
          0 => 'contactId'
        ],
        'key' => 'IDX_CONTACT_ID'
      ],
      'inboundEmailId' => [
        'type' => 'index',
        'columns' => [
          0 => 'inboundEmailId'
        ],
        'key' => 'IDX_INBOUND_EMAIL_ID'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'number',
      'order' => 'DESC'
    ]
  ],
  'Contact' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'personName',
        'select' => [
          'select' => 'NULLIF:(TRIM:(CONCAT:(IFNULL:(firstName, \'\'), \' \', IFNULL:(lastName, \'\'))), \'\')'
        ],
        'selectForeign' => [
          'select' => 'NULLIF:(TRIM:(CONCAT:(IFNULL:({alias}.firstName, \'\'), \' \', IFNULL:({alias}.lastName, \'\'))), \'\')'
        ],
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'OR' => [
                'firstName*' => '{value}',
                'lastName*' => '{value}',
                'CONCAT:(firstName, \' \', lastName)*' => '{value}',
                'CONCAT:(lastName, \' \', firstName)*' => '{value}'
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'AND' => [
                'firstName!*' => '{value}',
                'lastName!*' => '{value}',
                'CONCAT:(firstName, \' \', lastName)!*' => '{value}',
                'CONCAT:(lastName, \' \', firstName)!*' => '{value}'
              ]
            ]
          ],
          '=' => [
            'whereClause' => [
              'OR' => [
                'firstName' => '{value}',
                'lastName' => '{value}',
                'CONCAT:(firstName, \' \', lastName)' => '{value}',
                'CONCAT:(lastName, \' \', firstName)' => '{value}'
              ]
            ]
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'firstName',
              1 => '{direction}'
            ],
            1 => [
              0 => 'lastName',
              1 => '{direction}'
            ]
          ]
        ]
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'salutationName' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'firstName' => [
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
        'fieldType' => 'varchar'
      ],
      'lastName' => [
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
        'fieldType' => 'varchar'
      ],
      'accountAnyId' => [
        'type' => 'varchar',
        'notStorable' => true,
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
        ],
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'title' => [
        'type' => 'varchar',
        'len' => 100,
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
        'fieldType' => 'varchar'
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'emailAddress' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'email',
        'select' => [
          'select' => 'emailAddresses.name',
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'emailAddressContact{alias}Foreign.name',
          'leftJoins' => [
            0 => [
              0 => 'EntityEmailAddress',
              1 => 'emailAddressContact{alias}ForeignMiddle',
              2 => [
                'emailAddressContact{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'emailAddressContact{alias}ForeignMiddle.primary' => 1,
                'emailAddressContact{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'EmailAddress',
              1 => 'emailAddressContact{alias}Foreign',
              2 => [
                'emailAddressContact{alias}Foreign.id:' => 'emailAddressContact{alias}ForeignMiddle.emailAddressId',
                'emailAddressContact{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'id=s' => [
                'from' => 'EntityEmailAddress',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'emailAddress',
                    1 => 'emailAddress',
                    2 => [
                      'emailAddress.id:' => 'emailAddressId',
                      'emailAddress.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Contact',
                  'emailAddress.lower*' => '{value}'
                ]
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'id!=s' => [
                'from' => 'EntityEmailAddress',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'emailAddress',
                    1 => 'emailAddress',
                    2 => [
                      'emailAddress.id:' => 'emailAddressId',
                      'emailAddress.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Contact',
                  'emailAddress.lower*' => '{value}'
                ]
              ]
            ]
          ],
          '=' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower=' => '{value}'
            ],
            'distinct' => true
          ],
          '<>' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IN' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower=' => '{value}'
            ],
            'distinct' => true
          ],
          'NOT IN' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IS NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower=' => NULL
            ],
            'distinct' => true
          ],
          'IS NOT NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower!=' => NULL
            ],
            'distinct' => true
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'emailAddresses.lower',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'emailAddresses.lower'
          ]
        ]
      ],
      'phoneNumber' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'phone',
        'select' => [
          'select' => 'phoneNumbers.name',
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'phoneNumberContact{alias}Foreign.name',
          'leftJoins' => [
            0 => [
              0 => 'EntityPhoneNumber',
              1 => 'phoneNumberContact{alias}ForeignMiddle',
              2 => [
                'phoneNumberContact{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'phoneNumberContact{alias}ForeignMiddle.primary' => 1,
                'phoneNumberContact{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'PhoneNumber',
              1 => 'phoneNumberContact{alias}Foreign',
              2 => [
                'phoneNumberContact{alias}Foreign.id:' => 'phoneNumberContact{alias}ForeignMiddle.phoneNumberId',
                'phoneNumberContact{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'id=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Contact',
                  'phoneNumber.name*' => '{value}'
                ]
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'id!=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Contact',
                  'phoneNumber.name*' => '{value}'
                ]
              ]
            ]
          ],
          '=' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name=' => '{value}'
            ],
            'distinct' => true
          ],
          '<>' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name=' => '{value}'
            ],
            'distinct' => true
          ],
          'NOT IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IS NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name=' => NULL
            ],
            'distinct' => true
          ],
          'IS NOT NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name!=' => NULL
            ],
            'distinct' => true
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'phoneNumbers.name',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'phoneNumbers.name'
          ]
        ]
      ],
      'doNotCall' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'addressStreet' => [
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text'
      ],
      'addressCity' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'addressState' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'addressCountry' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'addressPostalCode' => [
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar'
      ],
      'accountRole' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'accountIsInactive' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
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
        'fieldType' => 'bool',
        'default' => false
      ],
      'accountType' => [
        'type' => 'foreign',
        'relation' => 'account',
        'foreign' => 'type',
        'fieldType' => 'foreign',
        'foreignType' => 'varchar'
      ],
      'opportunityRole' => [
        'type' => 'varchar',
        'notStorable' => true,
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
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'acceptanceStatus' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'acceptanceStatusMeetings' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'relation' => 'meetings',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'acceptanceStatusCalls' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'relation' => 'calls',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'hasPortalUser' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'select' => [
          'select' => 'IS_NOT_NULL:(portalUser.id)',
          'leftJoins' => [
            0 => [
              0 => 'portalUser',
              1 => 'portalUser'
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
        'fieldType' => 'bool',
        'default' => false
      ],
      'targetListIsOptedOut' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'middleName' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'emailAddressIsOptedOut' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => [
          'select' => 'emailAddresses.optOut',
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'emailAddressContact{alias}Foreign.optOut',
          'leftJoins' => [
            0 => [
              0 => 'EntityEmailAddress',
              1 => 'emailAddressContact{alias}ForeignMiddle',
              2 => [
                'emailAddressContact{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'emailAddressContact{alias}ForeignMiddle.primary' => 1,
                'emailAddressContact{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'EmailAddress',
              1 => 'emailAddressContact{alias}Foreign',
              2 => [
                'emailAddressContact{alias}Foreign.id:' => 'emailAddressContact{alias}ForeignMiddle.emailAddressId',
                'emailAddressContact{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          '= TRUE' => [
            'whereClause' => [
              0 => [
                'emailAddresses.optOut=' => true
              ],
              1 => [
                'emailAddresses.optOut!=' => NULL
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ],
          '= FALSE' => [
            'whereClause' => [
              'OR' => [
                0 => [
                  'emailAddresses.optOut=' => false
                ],
                1 => [
                  'emailAddresses.optOut=' => NULL
                ]
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'emailAddresses.optOut',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'emailAddresses.optOut'
          ]
        ],
        'default' => false
      ],
      'phoneNumberIsOptedOut' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => [
          'select' => 'phoneNumbers.optOut',
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'phoneNumberContact{alias}Foreign.optOut',
          'leftJoins' => [
            0 => [
              0 => 'EntityPhoneNumber',
              1 => 'phoneNumberContact{alias}ForeignMiddle',
              2 => [
                'phoneNumberContact{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'phoneNumberContact{alias}ForeignMiddle.primary' => 1,
                'phoneNumberContact{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'PhoneNumber',
              1 => 'phoneNumberContact{alias}Foreign',
              2 => [
                'phoneNumberContact{alias}Foreign.id:' => 'phoneNumberContact{alias}ForeignMiddle.phoneNumberId',
                'phoneNumberContact{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          '= TRUE' => [
            'whereClause' => [
              0 => [
                'phoneNumbers.optOut=' => true
              ],
              1 => [
                'phoneNumbers.optOut!=' => NULL
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ],
          '= FALSE' => [
            'whereClause' => [
              'OR' => [
                0 => [
                  'phoneNumbers.optOut=' => false
                ],
                1 => [
                  'phoneNumbers.optOut=' => NULL
                ]
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'phoneNumbers.optOut',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'phoneNumbers.optOut'
          ]
        ],
        'default' => false
      ],
      'addressMap' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map'
      ],
      'emailAddressData' => [
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true
      ],
      'phoneNumberData' => [
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true
      ],
      'phoneNumberNumeric' => [
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'id=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Contact',
                  'phoneNumber.numeric*' => '{value}'
                ]
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'id!=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Contact',
                  'phoneNumber.numeric*' => '{value}'
                ]
              ]
            ]
          ],
          '=' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric=' => '{value}'
            ],
            'distinct' => true
          ],
          '<>' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric=' => '{value}'
            ],
            'distinct' => true
          ],
          'NOT IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IS NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric=' => NULL
            ],
            'distinct' => true
          ],
          'IS NOT NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric!=' => NULL
            ],
            'distinct' => true
          ]
        ]
      ],
      'accountId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'accountName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'accountsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'accounts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'name',
        'isLinkStub' => false
      ],
      'accountsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'accountsColumns' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => [
          'role' => 'contactRole',
          'isInactive' => 'contactIsInactive'
        ],
        'attributeRole' => 'columnsMap'
      ],
      'campaignId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'campaignName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'campaign',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'targetListsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'targetLists',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'targetListsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'targetListId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'targetList',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notStorable' => true,
        'notNull' => false
      ],
      'targetListName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link'
      ],
      'portalUserId' => [
        'type' => 'foreign',
        'notStorable' => true,
        'attributeRole' => 'id',
        'fieldType' => 'linkOne',
        'relation' => 'portalUser',
        'foreign' => 'id',
        'foreignType' => 'id'
      ],
      'portalUserName' => [
        'type' => 'foreign',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkOne',
        'relation' => 'portalUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'originalLeadId' => [
        'type' => 'foreign',
        'notStorable' => true,
        'attributeRole' => 'id',
        'fieldType' => 'linkOne',
        'relation' => 'originalLead',
        'foreign' => 'id',
        'foreignType' => 'id'
      ],
      'originalLeadName' => [
        'type' => 'foreign',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkOne',
        'relation' => 'originalLead',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'isFollowed' => [
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true
      ],
      'followersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'notExportable' => true
      ],
      'followersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'notExportable' => true
      ],
      'tasksPrimaryIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'tasksPrimaryNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'documentsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'documentsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'campaignLogRecordsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'campaignLogRecordsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'emailsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'emailsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'tasksIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'tasksNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'callsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'callsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'meetingsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'meetingsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'casesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'casesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'casesPrimaryIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'casesPrimaryNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'opportunitiesPrimaryIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'opportunitiesPrimaryNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'opportunitiesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'opportunitiesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'emailAddresses' => [
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => [
          0 => 'entityId',
          1 => 'emailAddressId'
        ],
        'conditions' => [
          'entityType' => 'Contact'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ],
          'primary' => [
            'type' => 'bool',
            'default' => false
          ]
        ]
      ],
      'phoneNumbers' => [
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => [
          0 => 'entityId',
          1 => 'phoneNumberId'
        ],
        'conditions' => [
          'entityType' => 'Contact'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ],
          'primary' => [
            'type' => 'bool',
            'default' => false
          ]
        ]
      ],
      'tasksPrimary' => [
        'type' => 'hasMany',
        'entity' => 'Task',
        'foreignKey' => 'contactId',
        'foreign' => 'contact'
      ],
      'documents' => [
        'type' => 'manyMany',
        'entity' => 'Document',
        'relationName' => 'contactDocument',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'contactId',
          1 => 'documentId'
        ],
        'foreign' => 'contacts'
      ],
      'originalLead' => [
        'type' => 'hasOne',
        'entity' => 'Lead',
        'foreignKey' => 'createdContactId',
        'foreign' => 'createdContact'
      ],
      'portalUser' => [
        'type' => 'hasOne',
        'entity' => 'User',
        'foreignKey' => 'contactId',
        'foreign' => 'contact'
      ],
      'targetLists' => [
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'contactTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'contactId',
          1 => 'targetListId'
        ],
        'foreign' => 'contacts',
        'columnAttributeMap' => [
          'optedOut' => 'targetListIsOptedOut'
        ],
        'additionalColumns' => [
          'optedOut' => [
            'type' => 'bool'
          ]
        ]
      ],
      'campaignLogRecords' => [
        'type' => 'hasChildren',
        'entity' => 'CampaignLogRecord',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'campaign' => [
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'foreign' => 'contacts'
      ],
      'emails' => [
        'type' => 'hasChildren',
        'entity' => 'Email',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'tasks' => [
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'calls' => [
        'type' => 'manyMany',
        'entity' => 'Call',
        'relationName' => 'callContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'contactId',
          1 => 'callId'
        ],
        'foreign' => 'contacts',
        'columnAttributeMap' => [
          'status' => 'acceptanceStatus'
        ],
        'additionalColumns' => [
          'status' => [
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None'
          ]
        ]
      ],
      'meetings' => [
        'type' => 'manyMany',
        'entity' => 'Meeting',
        'relationName' => 'contactMeeting',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'contactId',
          1 => 'meetingId'
        ],
        'foreign' => 'contacts',
        'columnAttributeMap' => [
          'status' => 'acceptanceStatus'
        ],
        'additionalColumns' => [
          'status' => [
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None'
          ]
        ]
      ],
      'cases' => [
        'type' => 'manyMany',
        'entity' => 'Case',
        'relationName' => 'caseContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'contactId',
          1 => 'caseId'
        ],
        'foreign' => 'contacts'
      ],
      'casesPrimary' => [
        'type' => 'hasMany',
        'entity' => 'Case',
        'foreignKey' => 'contactId',
        'foreign' => 'contact'
      ],
      'opportunitiesPrimary' => [
        'type' => 'hasMany',
        'entity' => 'Opportunity',
        'foreignKey' => 'contactId',
        'foreign' => 'contact'
      ],
      'opportunities' => [
        'type' => 'manyMany',
        'entity' => 'Opportunity',
        'relationName' => 'contactOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'contactId',
          1 => 'opportunityId'
        ],
        'foreign' => 'contacts',
        'columnAttributeMap' => [
          'role' => 'opportunityRole'
        ],
        'additionalColumns' => [
          'role' => [
            'type' => 'varchar',
            'len' => 50
          ]
        ]
      ],
      'accounts' => [
        'type' => 'manyMany',
        'entity' => 'Account',
        'relationName' => 'accountContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'contactId',
          1 => 'accountId'
        ],
        'foreign' => 'contacts',
        'columnAttributeMap' => [
          'role' => 'accountRole',
          'isInactive' => 'accountIsInactive'
        ],
        'additionalColumns' => [
          'role' => [
            'type' => 'varchar',
            'len' => 100
          ],
          'isInactive' => [
            'type' => 'bool',
            'default' => false
          ]
        ]
      ],
      'account' => [
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'Contact'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'createdAt' => [
        'columns' => [
          0 => 'createdAt',
          1 => 'deleted'
        ],
        'key' => 'IDX_CREATED_AT'
      ],
      'createdAtId' => [
        'unique' => true,
        'columns' => [
          0 => 'createdAt',
          1 => 'id'
        ],
        'key' => 'UNIQ_CREATED_AT_ID'
      ],
      'firstName' => [
        'columns' => [
          0 => 'firstName',
          1 => 'deleted'
        ],
        'key' => 'IDX_FIRST_NAME'
      ],
      'name' => [
        'columns' => [
          0 => 'firstName',
          1 => 'lastName'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'accountId' => [
        'type' => 'index',
        'columns' => [
          0 => 'accountId'
        ],
        'key' => 'IDX_ACCOUNT_ID'
      ],
      'campaignId' => [
        'type' => 'index',
        'columns' => [
          0 => 'campaignId'
        ],
        'key' => 'IDX_CAMPAIGN_ID'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'Document' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'status' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'type' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'publishDate' => [
        'type' => 'date',
        'fieldType' => 'date'
      ],
      'expirationDate' => [
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date'
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'fileId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => false,
        'notNull' => false
      ],
      'fileName' => [
        'type' => 'foreign',
        'relation' => 'file',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'accountsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'accounts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'accountsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'folderId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'folderName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'folder',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'contactsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'contactsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'leadsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'leadsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'opportunitiesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'opportunitiesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'file' => [
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'fileId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'folder' => [
        'type' => 'belongsTo',
        'entity' => 'DocumentFolder',
        'key' => 'folderId',
        'foreignKey' => 'id',
        'foreign' => 'documents'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'Document'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'contacts' => [
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'contactDocument',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'documentId',
          1 => 'contactId'
        ],
        'foreign' => 'documents'
      ],
      'leads' => [
        'type' => 'manyMany',
        'entity' => 'Lead',
        'relationName' => 'documentLead',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'documentId',
          1 => 'leadId'
        ],
        'foreign' => 'documents'
      ],
      'opportunities' => [
        'type' => 'manyMany',
        'entity' => 'Opportunity',
        'relationName' => 'documentOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'documentId',
          1 => 'opportunityId'
        ],
        'foreign' => 'documents'
      ],
      'accounts' => [
        'type' => 'manyMany',
        'entity' => 'Account',
        'relationName' => 'accountDocument',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'documentId',
          1 => 'accountId'
        ],
        'foreign' => 'documents'
      ]
    ],
    'indexes' => [
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'folderId' => [
        'type' => 'index',
        'columns' => [
          0 => 'folderId'
        ],
        'key' => 'IDX_FOLDER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'DocumentFolder' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'childList' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'parentId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'parentName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'parent',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'documentsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'documentsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'childrenIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'childrenNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'documents' => [
        'type' => 'hasMany',
        'entity' => 'Document',
        'foreignKey' => 'folderId',
        'foreign' => 'folder'
      ],
      'children' => [
        'type' => 'hasMany',
        'entity' => 'DocumentFolder',
        'foreignKey' => 'parentId',
        'foreign' => 'parent'
      ],
      'parent' => [
        'type' => 'belongsTo',
        'entity' => 'DocumentFolder',
        'key' => 'parentId',
        'foreignKey' => 'id',
        'foreign' => 'children'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'DocumentFolder'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
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
    ],
    'indexes' => [
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'parentId' => [
        'type' => 'index',
        'columns' => [
          0 => 'parentId'
        ],
        'key' => 'IDX_PARENT_ID'
      ]
    ],
    'collection' => [
      'order' => 'ASC'
    ]
  ],
  'EmailQueueItem' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'status' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'attemptCount' => [
        'type' => 'int',
        'default' => 0,
        'fieldType' => 'int',
        'len' => 11
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'sentAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'emailAddress' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'isTest' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'massEmailId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'massEmailName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'massEmail',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'targetId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'target',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'targetType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'target',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'targetName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'target',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ]
    ],
    'relations' => [
      'target' => [
        'type' => 'belongsToParent',
        'key' => 'targetId',
        'foreign' => NULL
      ],
      'massEmail' => [
        'type' => 'belongsTo',
        'entity' => 'MassEmail',
        'key' => 'massEmailId',
        'foreignKey' => 'id',
        'foreign' => 'queueItems'
      ]
    ],
    'indexes' => [
      'massEmailId' => [
        'type' => 'index',
        'columns' => [
          0 => 'massEmailId'
        ],
        'key' => 'IDX_MASS_EMAIL_ID'
      ],
      'target' => [
        'type' => 'index',
        'columns' => [
          0 => 'targetId',
          1 => 'targetType'
        ],
        'key' => 'IDX_TARGET'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'KnowledgeBaseArticle' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'status' => [
        'type' => 'varchar',
        'default' => 'Draft',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'language' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'type' => [
        'type' => 'varchar',
        'default' => 'Article',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'publishDate' => [
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date'
      ],
      'expirationDate' => [
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date'
      ],
      'order' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'body' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'portalsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'portals',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'portalsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'categoriesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'categories',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'categoriesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'attachmentsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'orderBy' => [
          0 => [
            0 => 'createdAt',
            1 => 'ASC'
          ],
          1 => [
            0 => 'name',
            1 => 'ASC'
          ]
        ],
        'isLinkMultipleIdList' => true,
        'relation' => 'attachments',
        'isLinkStub' => false
      ],
      'attachmentsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'isLinkStub' => false
      ],
      'versionNumber' => [
        'type' => 'int',
        'dbType' => 'bigint',
        'notExportable' => true
      ],
      'casesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'casesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'attachmentsTypes' => [
        'type' => 'jsonObject',
        'notStorable' => true
      ]
    ],
    'relations' => [
      'categories' => [
        'type' => 'manyMany',
        'entity' => 'KnowledgeBaseCategory',
        'relationName' => 'knowledgeBaseArticleKnowledgeBaseCategory',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'knowledgeBaseArticleId',
          1 => 'knowledgeBaseCategoryId'
        ],
        'foreign' => 'articles'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'KnowledgeBaseArticle'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'portals' => [
        'type' => 'manyMany',
        'entity' => 'Portal',
        'relationName' => 'knowledgeBaseArticlePortal',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'knowledgeBaseArticleId',
          1 => 'portalId'
        ],
        'foreign' => 'articles'
      ],
      'cases' => [
        'type' => 'manyMany',
        'entity' => 'Case',
        'relationName' => 'caseKnowledgeBaseArticle',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'knowledgeBaseArticleId',
          1 => 'caseId'
        ],
        'foreign' => 'articles'
      ],
      'attachments' => [
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
        'conditions' => [
          'OR' => [
            0 => [
              'field' => NULL
            ],
            1 => [
              'field' => 'attachments'
            ]
          ]
        ]
      ]
    ],
    'indexes' => [
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'order',
      'order' => 'ASC'
    ]
  ],
  'KnowledgeBaseCategory' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'order' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'childList' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'parentId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'parentName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'parent',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'articlesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'articlesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'childrenIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'childrenNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'articles' => [
        'type' => 'manyMany',
        'entity' => 'KnowledgeBaseArticle',
        'relationName' => 'knowledgeBaseArticleKnowledgeBaseCategory',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'knowledgeBaseCategoryId',
          1 => 'knowledgeBaseArticleId'
        ],
        'foreign' => 'categories'
      ],
      'children' => [
        'type' => 'hasMany',
        'entity' => 'KnowledgeBaseCategory',
        'foreignKey' => 'parentId',
        'foreign' => 'parent'
      ],
      'parent' => [
        'type' => 'belongsTo',
        'entity' => 'KnowledgeBaseCategory',
        'key' => 'parentId',
        'foreignKey' => 'id',
        'foreign' => 'children'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'KnowledgeBaseCategory'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
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
    ],
    'indexes' => [
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'parentId' => [
        'type' => 'index',
        'columns' => [
          0 => 'parentId'
        ],
        'key' => 'IDX_PARENT_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'parentId',
      'order' => 'ASC'
    ]
  ],
  'Lead' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'dependeeAttributeList' => [
          0 => 'emailAddress',
          1 => 'phoneNumber',
          2 => 'accountName'
        ],
        'fieldType' => 'personName',
        'select' => [
          'select' => 'NULLIF:(TRIM:(CONCAT:(IFNULL:(firstName, \'\'), \' \', IFNULL:(lastName, \'\'))), \'\')'
        ],
        'selectForeign' => [
          'select' => 'NULLIF:(TRIM:(CONCAT:(IFNULL:({alias}.firstName, \'\'), \' \', IFNULL:({alias}.lastName, \'\'))), \'\')'
        ],
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'OR' => [
                'firstName*' => '{value}',
                'lastName*' => '{value}',
                'CONCAT:(firstName, \' \', lastName)*' => '{value}',
                'CONCAT:(lastName, \' \', firstName)*' => '{value}'
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'AND' => [
                'firstName!*' => '{value}',
                'lastName!*' => '{value}',
                'CONCAT:(firstName, \' \', lastName)!*' => '{value}',
                'CONCAT:(lastName, \' \', firstName)!*' => '{value}'
              ]
            ]
          ],
          '=' => [
            'whereClause' => [
              'OR' => [
                'firstName' => '{value}',
                'lastName' => '{value}',
                'CONCAT:(firstName, \' \', lastName)' => '{value}',
                'CONCAT:(lastName, \' \', firstName)' => '{value}'
              ]
            ]
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'firstName',
              1 => '{direction}'
            ],
            1 => [
              0 => 'lastName',
              1 => '{direction}'
            ]
          ]
        ]
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'salutationName' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'firstName' => [
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
        'fieldType' => 'varchar'
      ],
      'lastName' => [
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
        'fieldType' => 'varchar'
      ],
      'title' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'status' => [
        'type' => 'varchar',
        'default' => 'New',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'source' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'industry' => [
        'type' => 'varchar',
        'default' => NULL,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'opportunityAmount' => [
        'type' => 'float',
        'fieldType' => 'currency',
        'order' => [
          'order' => [
            0 => [
              0 => 'MUL:(opportunityAmount, opportunityAmountCurrencyRate.rate)',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'Currency',
              1 => 'opportunityAmountCurrencyRate',
              2 => [
                'opportunityAmountCurrencyRate.id:' => 'opportunityAmountCurrency'
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'opportunityAmountCurrencyRate.rate'
          ]
        ],
        'attributeRole' => 'value'
      ],
      'website' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'addressStreet' => [
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text'
      ],
      'addressCity' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'addressState' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'addressCountry' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'addressPostalCode' => [
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar'
      ],
      'emailAddress' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'email',
        'select' => [
          'select' => 'emailAddresses.name',
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'emailAddressLead{alias}Foreign.name',
          'leftJoins' => [
            0 => [
              0 => 'EntityEmailAddress',
              1 => 'emailAddressLead{alias}ForeignMiddle',
              2 => [
                'emailAddressLead{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'emailAddressLead{alias}ForeignMiddle.primary' => 1,
                'emailAddressLead{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'EmailAddress',
              1 => 'emailAddressLead{alias}Foreign',
              2 => [
                'emailAddressLead{alias}Foreign.id:' => 'emailAddressLead{alias}ForeignMiddle.emailAddressId',
                'emailAddressLead{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'id=s' => [
                'from' => 'EntityEmailAddress',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'emailAddress',
                    1 => 'emailAddress',
                    2 => [
                      'emailAddress.id:' => 'emailAddressId',
                      'emailAddress.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Lead',
                  'emailAddress.lower*' => '{value}'
                ]
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'id!=s' => [
                'from' => 'EntityEmailAddress',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'emailAddress',
                    1 => 'emailAddress',
                    2 => [
                      'emailAddress.id:' => 'emailAddressId',
                      'emailAddress.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Lead',
                  'emailAddress.lower*' => '{value}'
                ]
              ]
            ]
          ],
          '=' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower=' => '{value}'
            ],
            'distinct' => true
          ],
          '<>' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IN' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower=' => '{value}'
            ],
            'distinct' => true
          ],
          'NOT IN' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IS NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower=' => NULL
            ],
            'distinct' => true
          ],
          'IS NOT NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower!=' => NULL
            ],
            'distinct' => true
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'emailAddresses.lower',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'emailAddresses.lower'
          ]
        ]
      ],
      'phoneNumber' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'phone',
        'select' => [
          'select' => 'phoneNumbers.name',
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'phoneNumberLead{alias}Foreign.name',
          'leftJoins' => [
            0 => [
              0 => 'EntityPhoneNumber',
              1 => 'phoneNumberLead{alias}ForeignMiddle',
              2 => [
                'phoneNumberLead{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'phoneNumberLead{alias}ForeignMiddle.primary' => 1,
                'phoneNumberLead{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'PhoneNumber',
              1 => 'phoneNumberLead{alias}Foreign',
              2 => [
                'phoneNumberLead{alias}Foreign.id:' => 'phoneNumberLead{alias}ForeignMiddle.phoneNumberId',
                'phoneNumberLead{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'id=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Lead',
                  'phoneNumber.name*' => '{value}'
                ]
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'id!=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Lead',
                  'phoneNumber.name*' => '{value}'
                ]
              ]
            ]
          ],
          '=' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name=' => '{value}'
            ],
            'distinct' => true
          ],
          '<>' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name=' => '{value}'
            ],
            'distinct' => true
          ],
          'NOT IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IS NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name=' => NULL
            ],
            'distinct' => true
          ],
          'IS NOT NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name!=' => NULL
            ],
            'distinct' => true
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'phoneNumbers.name',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'phoneNumbers.name'
          ]
        ]
      ],
      'doNotCall' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'convertedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'accountName' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'acceptanceStatus' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'acceptanceStatusMeetings' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'relation' => 'meetings',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'acceptanceStatusCalls' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'relation' => 'calls',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'targetListIsOptedOut' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'middleName' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'opportunityAmountCurrency' => [
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency'
      ],
      'addressMap' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map'
      ],
      'emailAddressIsOptedOut' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => [
          'select' => 'emailAddresses.optOut',
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'emailAddressLead{alias}Foreign.optOut',
          'leftJoins' => [
            0 => [
              0 => 'EntityEmailAddress',
              1 => 'emailAddressLead{alias}ForeignMiddle',
              2 => [
                'emailAddressLead{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'emailAddressLead{alias}ForeignMiddle.primary' => 1,
                'emailAddressLead{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'EmailAddress',
              1 => 'emailAddressLead{alias}Foreign',
              2 => [
                'emailAddressLead{alias}Foreign.id:' => 'emailAddressLead{alias}ForeignMiddle.emailAddressId',
                'emailAddressLead{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          '= TRUE' => [
            'whereClause' => [
              0 => [
                'emailAddresses.optOut=' => true
              ],
              1 => [
                'emailAddresses.optOut!=' => NULL
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ],
          '= FALSE' => [
            'whereClause' => [
              'OR' => [
                0 => [
                  'emailAddresses.optOut=' => false
                ],
                1 => [
                  'emailAddresses.optOut=' => NULL
                ]
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'emailAddresses.optOut',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'emailAddresses.optOut'
          ]
        ],
        'default' => false
      ],
      'phoneNumberIsOptedOut' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => [
          'select' => 'phoneNumbers.optOut',
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'phoneNumberLead{alias}Foreign.optOut',
          'leftJoins' => [
            0 => [
              0 => 'EntityPhoneNumber',
              1 => 'phoneNumberLead{alias}ForeignMiddle',
              2 => [
                'phoneNumberLead{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'phoneNumberLead{alias}ForeignMiddle.primary' => 1,
                'phoneNumberLead{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'PhoneNumber',
              1 => 'phoneNumberLead{alias}Foreign',
              2 => [
                'phoneNumberLead{alias}Foreign.id:' => 'phoneNumberLead{alias}ForeignMiddle.phoneNumberId',
                'phoneNumberLead{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          '= TRUE' => [
            'whereClause' => [
              0 => [
                'phoneNumbers.optOut=' => true
              ],
              1 => [
                'phoneNumbers.optOut!=' => NULL
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ],
          '= FALSE' => [
            'whereClause' => [
              'OR' => [
                0 => [
                  'phoneNumbers.optOut=' => false
                ],
                1 => [
                  'phoneNumbers.optOut=' => NULL
                ]
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'phoneNumbers.optOut',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'phoneNumbers.optOut'
          ]
        ],
        'default' => false
      ],
      'opportunityAmountConverted' => [
        'type' => 'float',
        'select' => [
          'select' => 'MUL:(opportunityAmount, opportunityAmountCurrencyRate.rate)',
          'leftJoins' => [
            0 => [
              0 => 'Currency',
              1 => 'opportunityAmountCurrencyRate',
              2 => [
                'opportunityAmountCurrencyRate.id:' => 'opportunityAmountCurrency'
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'MUL:({alias}.opportunityAmount, opportunityAmountCurrencyRateLead{alias}Foreign.rate)',
          'leftJoins' => [
            0 => [
              0 => 'Currency',
              1 => 'opportunityAmountCurrencyRateLead{alias}Foreign',
              2 => [
                'opportunityAmountCurrencyRateLead{alias}Foreign.id:' => '{alias}.opportunityAmountCurrency'
              ]
            ]
          ]
        ],
        'where' => [
          '=' => [
            'whereClause' => [
              'MUL:(opportunityAmount, opportunityAmountCurrencyRate.rate)=' => '{value}'
            ],
            'leftJoins' => [
              0 => [
                0 => 'Currency',
                1 => 'opportunityAmountCurrencyRate',
                2 => [
                  'opportunityAmountCurrencyRate.id:' => 'opportunityAmountCurrency'
                ]
              ]
            ]
          ],
          '>' => [
            'whereClause' => [
              'MUL:(opportunityAmount, opportunityAmountCurrencyRate.rate)>' => '{value}'
            ],
            'leftJoins' => [
              0 => [
                0 => 'Currency',
                1 => 'opportunityAmountCurrencyRate',
                2 => [
                  'opportunityAmountCurrencyRate.id:' => 'opportunityAmountCurrency'
                ]
              ]
            ]
          ],
          '<' => [
            'whereClause' => [
              'MUL:(opportunityAmount, opportunityAmountCurrencyRate.rate)<' => '{value}'
            ],
            'leftJoins' => [
              0 => [
                0 => 'Currency',
                1 => 'opportunityAmountCurrencyRate',
                2 => [
                  'opportunityAmountCurrencyRate.id:' => 'opportunityAmountCurrency'
                ]
              ]
            ]
          ],
          '>=' => [
            'whereClause' => [
              'MUL:(opportunityAmount, opportunityAmountCurrencyRate.rate)>=' => '{value}'
            ],
            'leftJoins' => [
              0 => [
                0 => 'Currency',
                1 => 'opportunityAmountCurrencyRate',
                2 => [
                  'opportunityAmountCurrencyRate.id:' => 'opportunityAmountCurrency'
                ]
              ]
            ]
          ],
          '<=' => [
            'whereClause' => [
              'MUL:(opportunityAmount, opportunityAmountCurrencyRate.rate)<=' => '{value}'
            ],
            'leftJoins' => [
              0 => [
                0 => 'Currency',
                1 => 'opportunityAmountCurrencyRate',
                2 => [
                  'opportunityAmountCurrencyRate.id:' => 'opportunityAmountCurrency'
                ]
              ]
            ]
          ],
          '<>' => [
            'whereClause' => [
              'MUL:(opportunityAmount, opportunityAmountCurrencyRate.rate)!=' => '{value}'
            ],
            'leftJoins' => [
              0 => [
                0 => 'Currency',
                1 => 'opportunityAmountCurrencyRate',
                2 => [
                  'opportunityAmountCurrencyRate.id:' => 'opportunityAmountCurrency'
                ]
              ]
            ]
          ],
          'IS NULL' => [
            'whereClause' => [
              'opportunityAmount=' => NULL
            ]
          ],
          'IS NOT NULL' => [
            'whereClause' => [
              'opportunityAmount!=' => NULL
            ]
          ]
        ],
        'notStorable' => true,
        'order' => [
          'order' => [
            0 => [
              0 => 'MUL:(opportunityAmount, opportunityAmountCurrencyRate.rate)',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'Currency',
              1 => 'opportunityAmountCurrencyRate',
              2 => [
                'opportunityAmountCurrencyRate.id:' => 'opportunityAmountCurrency'
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'opportunityAmountCurrencyRate.rate'
          ]
        ],
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency'
      ],
      'emailAddressData' => [
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true
      ],
      'phoneNumberData' => [
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true
      ],
      'phoneNumberNumeric' => [
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'id=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Lead',
                  'phoneNumber.numeric*' => '{value}'
                ]
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'id!=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Lead',
                  'phoneNumber.numeric*' => '{value}'
                ]
              ]
            ]
          ],
          '=' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric=' => '{value}'
            ],
            'distinct' => true
          ],
          '<>' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric=' => '{value}'
            ],
            'distinct' => true
          ],
          'NOT IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IS NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric=' => NULL
            ],
            'distinct' => true
          ],
          'IS NOT NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric!=' => NULL
            ],
            'distinct' => true
          ]
        ]
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'campaignId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'campaignName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'campaign',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdAccountId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdAccountName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdAccount',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdContactId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdContactName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdContact',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdOpportunityId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdOpportunityName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdOpportunity',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'targetListsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'targetLists',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'targetListsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'targetListId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'targetList',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notStorable' => true,
        'notNull' => false
      ],
      'targetListName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link'
      ],
      'isFollowed' => [
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true
      ],
      'followersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'notExportable' => true
      ],
      'followersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'notExportable' => true
      ],
      'documentsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'documentsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'campaignLogRecordsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'campaignLogRecordsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'emailsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'emailsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'casesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'casesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'tasksIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'tasksNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'callsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'callsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'meetingsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'meetingsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'emailAddresses' => [
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => [
          0 => 'entityId',
          1 => 'emailAddressId'
        ],
        'conditions' => [
          'entityType' => 'Lead'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ],
          'primary' => [
            'type' => 'bool',
            'default' => false
          ]
        ]
      ],
      'phoneNumbers' => [
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => [
          0 => 'entityId',
          1 => 'phoneNumberId'
        ],
        'conditions' => [
          'entityType' => 'Lead'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ],
          'primary' => [
            'type' => 'bool',
            'default' => false
          ]
        ]
      ],
      'documents' => [
        'type' => 'manyMany',
        'entity' => 'Document',
        'relationName' => 'documentLead',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'leadId',
          1 => 'documentId'
        ],
        'foreign' => 'leads'
      ],
      'targetLists' => [
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'leadTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'leadId',
          1 => 'targetListId'
        ],
        'foreign' => 'leads',
        'columnAttributeMap' => [
          'optedOut' => 'targetListIsOptedOut'
        ],
        'additionalColumns' => [
          'optedOut' => [
            'type' => 'bool'
          ]
        ]
      ],
      'campaignLogRecords' => [
        'type' => 'hasChildren',
        'entity' => 'CampaignLogRecord',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'campaign' => [
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'foreign' => 'leads'
      ],
      'createdOpportunity' => [
        'type' => 'belongsTo',
        'entity' => 'Opportunity',
        'key' => 'createdOpportunityId',
        'foreignKey' => 'id',
        'foreign' => 'originalLead'
      ],
      'createdContact' => [
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'createdContactId',
        'foreignKey' => 'id',
        'foreign' => 'originalLead'
      ],
      'createdAccount' => [
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'createdAccountId',
        'foreignKey' => 'id',
        'foreign' => 'originalLead'
      ],
      'emails' => [
        'type' => 'hasChildren',
        'entity' => 'Email',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'cases' => [
        'type' => 'hasMany',
        'entity' => 'Case',
        'foreignKey' => 'leadId',
        'foreign' => 'lead'
      ],
      'tasks' => [
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'calls' => [
        'type' => 'manyMany',
        'entity' => 'Call',
        'relationName' => 'callLead',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'leadId',
          1 => 'callId'
        ],
        'foreign' => 'leads',
        'columnAttributeMap' => [
          'status' => 'acceptanceStatus'
        ],
        'additionalColumns' => [
          'status' => [
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None'
          ]
        ]
      ],
      'meetings' => [
        'type' => 'manyMany',
        'entity' => 'Meeting',
        'relationName' => 'leadMeeting',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'leadId',
          1 => 'meetingId'
        ],
        'foreign' => 'leads',
        'columnAttributeMap' => [
          'status' => 'acceptanceStatus'
        ],
        'additionalColumns' => [
          'status' => [
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None'
          ]
        ]
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'Lead'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'firstName' => [
        'columns' => [
          0 => 'firstName',
          1 => 'deleted'
        ],
        'key' => 'IDX_FIRST_NAME'
      ],
      'name' => [
        'columns' => [
          0 => 'firstName',
          1 => 'lastName'
        ],
        'key' => 'IDX_NAME'
      ],
      'status' => [
        'columns' => [
          0 => 'status',
          1 => 'deleted'
        ],
        'key' => 'IDX_STATUS'
      ],
      'createdAt' => [
        'columns' => [
          0 => 'createdAt',
          1 => 'deleted'
        ],
        'key' => 'IDX_CREATED_AT'
      ],
      'createdAtStatus' => [
        'columns' => [
          0 => 'createdAt',
          1 => 'status'
        ],
        'key' => 'IDX_CREATED_AT_STATUS'
      ],
      'createdAtId' => [
        'unique' => true,
        'columns' => [
          0 => 'createdAt',
          1 => 'id'
        ],
        'key' => 'UNIQ_CREATED_AT_ID'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'assignedUserStatus' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'status'
        ],
        'key' => 'IDX_ASSIGNED_USER_STATUS'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'campaignId' => [
        'type' => 'index',
        'columns' => [
          0 => 'campaignId'
        ],
        'key' => 'IDX_CAMPAIGN_ID'
      ],
      'createdAccountId' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdAccountId'
        ],
        'key' => 'IDX_CREATED_ACCOUNT_ID'
      ],
      'createdContactId' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdContactId'
        ],
        'key' => 'IDX_CREATED_CONTACT_ID'
      ],
      'createdOpportunityId' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdOpportunityId'
        ],
        'key' => 'IDX_CREATED_OPPORTUNITY_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'MassEmail' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'status' => [
        'type' => 'varchar',
        'default' => 'Pending',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'storeSentEmails' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'optOutEntirely' => [
        'type' => 'bool',
        'notNull' => true,
        'default' => false,
        'fieldType' => 'bool'
      ],
      'fromAddress' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'fromName' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'replyToAddress' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'replyToName' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'startAt' => [
        'type' => 'datetime',
        'fieldType' => 'datetime'
      ],
      'smtpAccount' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'base'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'emailTemplateId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'emailTemplateName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'emailTemplate',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'campaignId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'campaignName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'campaign',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'targetListsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'targetLists',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'targetListsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'excludingTargetListsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'excludingTargetLists',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'excludingTargetListsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'inboundEmailId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'inboundEmailName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'inboundEmail',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'queueItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'queueItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'queueItems' => [
        'type' => 'hasMany',
        'entity' => 'EmailQueueItem',
        'foreignKey' => 'massEmailId',
        'foreign' => 'massEmail'
      ],
      'inboundEmail' => [
        'type' => 'belongsTo',
        'entity' => 'InboundEmail',
        'key' => 'inboundEmailId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'excludingTargetLists' => [
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'massEmailTargetListExcluding',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'massEmailId',
          1 => 'targetListId'
        ],
        'foreign' => 'massEmailsExcluding'
      ],
      'targetLists' => [
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'massEmailTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'massEmailId',
          1 => 'targetListId'
        ],
        'foreign' => 'massEmails'
      ],
      'campaign' => [
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'foreign' => 'massEmails'
      ],
      'emailTemplate' => [
        'type' => 'belongsTo',
        'entity' => 'EmailTemplate',
        'key' => 'emailTemplateId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'emailTemplateId' => [
        'type' => 'index',
        'columns' => [
          0 => 'emailTemplateId'
        ],
        'key' => 'IDX_EMAIL_TEMPLATE_ID'
      ],
      'campaignId' => [
        'type' => 'index',
        'columns' => [
          0 => 'campaignId'
        ],
        'key' => 'IDX_CAMPAIGN_ID'
      ],
      'inboundEmailId' => [
        'type' => 'index',
        'columns' => [
          0 => 'inboundEmailId'
        ],
        'key' => 'IDX_INBOUND_EMAIL_ID'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'Meeting' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'status' => [
        'type' => 'varchar',
        'default' => 'Planned',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'dateStart' => [
        'type' => 'datetime',
        'fieldType' => 'datetime'
      ],
      'dateEnd' => [
        'type' => 'datetime',
        'fieldType' => 'datetime'
      ],
      'isAllDay' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'duration' => [
        'type' => 'int',
        'notStorable' => true,
        'default' => 3600,
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
        ],
        'fieldType' => 'int',
        'len' => 11
      ],
      'reminders' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray'
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'acceptanceStatus' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
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
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'dateStartDate' => [
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date'
      ],
      'dateEndDate' => [
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date'
      ],
      'parentId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'parent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'parentType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'parentName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'parent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ],
      'accountId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'accountName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'usersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'users',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'name',
        'isLinkStub' => false
      ],
      'usersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'usersColumns' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => [
          'status' => 'acceptanceStatus'
        ],
        'attributeRole' => 'columnsMap'
      ],
      'contactsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'contacts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'name',
        'isLinkStub' => false
      ],
      'contactsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'contactsColumns' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => [
          'status' => 'acceptanceStatus'
        ],
        'attributeRole' => 'columnsMap'
      ],
      'leadsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'leads',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'name',
        'isLinkStub' => false
      ],
      'leadsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'leadsColumns' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => [
          'status' => 'acceptanceStatus'
        ],
        'attributeRole' => 'columnsMap'
      ],
      'sourceEmailId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'sourceEmail',
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notStorable' => true,
        'notNull' => false
      ],
      'sourceEmailName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'link'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ]
    ],
    'relations' => [
      'parent' => [
        'type' => 'belongsToParent',
        'key' => 'parentId',
        'foreign' => 'meetings'
      ],
      'leads' => [
        'type' => 'manyMany',
        'entity' => 'Lead',
        'relationName' => 'leadMeeting',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'meetingId',
          1 => 'leadId'
        ],
        'foreign' => 'meetings',
        'columnAttributeMap' => [
          'status' => 'acceptanceStatus'
        ],
        'additionalColumns' => [
          'status' => [
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None'
          ]
        ]
      ],
      'contacts' => [
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'contactMeeting',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'meetingId',
          1 => 'contactId'
        ],
        'foreign' => 'meetings',
        'columnAttributeMap' => [
          'status' => 'acceptanceStatus'
        ],
        'additionalColumns' => [
          'status' => [
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None'
          ]
        ]
      ],
      'users' => [
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'meetingUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'meetingId',
          1 => 'userId'
        ],
        'foreign' => 'meetings',
        'columnAttributeMap' => [
          'status' => 'acceptanceStatus'
        ],
        'additionalColumns' => [
          'status' => [
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None'
          ]
        ]
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'Meeting'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'account' => [
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'dateStartStatus' => [
        'columns' => [
          0 => 'dateStart',
          1 => 'status'
        ],
        'key' => 'IDX_DATE_START_STATUS'
      ],
      'dateStart' => [
        'columns' => [
          0 => 'dateStart',
          1 => 'deleted'
        ],
        'key' => 'IDX_DATE_START'
      ],
      'status' => [
        'columns' => [
          0 => 'status',
          1 => 'deleted'
        ],
        'key' => 'IDX_STATUS'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'assignedUserStatus' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'status'
        ],
        'key' => 'IDX_ASSIGNED_USER_STATUS'
      ],
      'parent' => [
        'type' => 'index',
        'columns' => [
          0 => 'parentId',
          1 => 'parentType'
        ],
        'key' => 'IDX_PARENT'
      ],
      'accountId' => [
        'type' => 'index',
        'columns' => [
          0 => 'accountId'
        ],
        'key' => 'IDX_ACCOUNT_ID'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'dateStart',
      'order' => 'DESC'
    ]
  ],
  'Opportunity' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'amount' => [
        'type' => 'float',
        'fieldType' => 'currency',
        'order' => [
          'order' => [
            0 => [
              0 => 'MUL:(amount, amountCurrencyRate.rate)',
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
          ],
          'additionalSelect' => [
            0 => 'amountCurrencyRate.rate'
          ]
        ],
        'attributeRole' => 'value'
      ],
      'amountWeightedConverted' => [
        'type' => 'float',
        'notNull' => false,
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
        'fieldType' => 'float'
      ],
      'stage' => [
        'type' => 'varchar',
        'default' => 'Prospecting',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'lastStage' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'probability' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'leadSource' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'closeDate' => [
        'type' => 'date',
        'fieldType' => 'date'
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'contactRole' => [
        'type' => 'varchar',
        'notStorable' => true,
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
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'amountCurrency' => [
        'type' => 'varchar',
        'len' => 6,
        'fieldType' => 'currency',
        'attributeRole' => 'currency'
      ],
      'amountConverted' => [
        'type' => 'float',
        'select' => [
          'select' => 'MUL:(amount, amountCurrencyRate.rate)',
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
        'selectForeign' => [
          'select' => 'MUL:({alias}.amount, amountCurrencyRateOpportunity{alias}Foreign.rate)',
          'leftJoins' => [
            0 => [
              0 => 'Currency',
              1 => 'amountCurrencyRateOpportunity{alias}Foreign',
              2 => [
                'amountCurrencyRateOpportunity{alias}Foreign.id:' => '{alias}.amountCurrency'
              ]
            ]
          ]
        ],
        'where' => [
          '=' => [
            'whereClause' => [
              'MUL:(amount, amountCurrencyRate.rate)=' => '{value}'
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
              'MUL:(amount, amountCurrencyRate.rate)>' => '{value}'
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
              'MUL:(amount, amountCurrencyRate.rate)<' => '{value}'
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
              'MUL:(amount, amountCurrencyRate.rate)>=' => '{value}'
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
              'MUL:(amount, amountCurrencyRate.rate)<=' => '{value}'
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
              'MUL:(amount, amountCurrencyRate.rate)!=' => '{value}'
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
              'amount=' => NULL
            ]
          ],
          'IS NOT NULL' => [
            'whereClause' => [
              'amount!=' => NULL
            ]
          ]
        ],
        'notStorable' => true,
        'order' => [
          'order' => [
            0 => [
              0 => 'MUL:(amount, amountCurrencyRate.rate)',
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
          ],
          'additionalSelect' => [
            0 => 'amountCurrencyRate.rate'
          ]
        ],
        'attributeRole' => 'valueConverted',
        'fieldType' => 'currency'
      ],
      'accountId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'accountName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'contactsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'contacts',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'orderBy' => 'name',
        'isLinkStub' => false
      ],
      'contactsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'contactsColumns' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'columns' => [
          'role' => 'opportunityRole'
        ],
        'attributeRole' => 'columnsMap'
      ],
      'contactId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'contactName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'contact',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'campaignId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'campaignName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'campaign',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'originalLeadId' => [
        'type' => 'foreign',
        'notStorable' => true,
        'attributeRole' => 'id',
        'fieldType' => 'linkOne',
        'relation' => 'originalLead',
        'foreign' => 'id',
        'foreignType' => 'id'
      ],
      'originalLeadName' => [
        'type' => 'foreign',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkOne',
        'relation' => 'originalLead',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'isFollowed' => [
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true
      ],
      'followersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'notExportable' => true
      ],
      'followersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'notExportable' => true
      ],
      'documentsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'documentsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'emailsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'emailsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'tasksIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'tasksNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'callsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'callsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'meetingsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'meetingsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'originalLead' => [
        'type' => 'hasOne',
        'entity' => 'Lead',
        'foreignKey' => 'createdOpportunityId',
        'foreign' => 'createdOpportunity'
      ],
      'campaign' => [
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'foreign' => 'opportunities'
      ],
      'documents' => [
        'type' => 'manyMany',
        'entity' => 'Document',
        'relationName' => 'documentOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'opportunityId',
          1 => 'documentId'
        ],
        'foreign' => 'opportunities'
      ],
      'emails' => [
        'type' => 'hasChildren',
        'entity' => 'Email',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'tasks' => [
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'calls' => [
        'type' => 'hasChildren',
        'entity' => 'Call',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'meetings' => [
        'type' => 'hasChildren',
        'entity' => 'Meeting',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent'
      ],
      'contact' => [
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'contactId',
        'foreignKey' => 'id',
        'foreign' => 'opportunitiesPrimary'
      ],
      'contacts' => [
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'contactOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'opportunityId',
          1 => 'contactId'
        ],
        'foreign' => 'opportunities',
        'columnAttributeMap' => [
          'role' => 'contactRole'
        ],
        'additionalColumns' => [
          'role' => [
            'type' => 'varchar',
            'len' => 50
          ]
        ]
      ],
      'account' => [
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => 'opportunities'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'Opportunity'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'stage' => [
        'columns' => [
          0 => 'stage',
          1 => 'deleted'
        ],
        'key' => 'IDX_STAGE'
      ],
      'lastStage' => [
        'columns' => [
          0 => 'lastStage'
        ],
        'key' => 'IDX_LAST_STAGE'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdAt' => [
        'columns' => [
          0 => 'createdAt',
          1 => 'deleted'
        ],
        'key' => 'IDX_CREATED_AT'
      ],
      'createdAtStage' => [
        'columns' => [
          0 => 'createdAt',
          1 => 'stage'
        ],
        'key' => 'IDX_CREATED_AT_STAGE'
      ],
      'createdAtId' => [
        'unique' => true,
        'columns' => [
          0 => 'createdAt',
          1 => 'id'
        ],
        'key' => 'UNIQ_CREATED_AT_ID'
      ],
      'assignedUserStage' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'stage'
        ],
        'key' => 'IDX_ASSIGNED_USER_STAGE'
      ],
      'accountId' => [
        'type' => 'index',
        'columns' => [
          0 => 'accountId'
        ],
        'key' => 'IDX_ACCOUNT_ID'
      ],
      'contactId' => [
        'type' => 'index',
        'columns' => [
          0 => 'contactId'
        ],
        'key' => 'IDX_CONTACT_ID'
      ],
      'campaignId' => [
        'type' => 'index',
        'columns' => [
          0 => 'campaignId'
        ],
        'key' => 'IDX_CAMPAIGN_ID'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'Reminder' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'notStorable' => true
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'remindAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'index' => true,
        'fieldType' => 'datetime'
      ],
      'startAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'index' => true,
        'fieldType' => 'datetime'
      ],
      'type' => [
        'type' => 'varchar',
        'len' => 36,
        'index' => true,
        'default' => 'Popup',
        'fieldType' => 'varchar'
      ],
      'seconds' => [
        'type' => 'int',
        'default' => 0,
        'fieldType' => 'int',
        'len' => 11
      ],
      'entityType' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'entityId' => [
        'type' => 'varchar',
        'len' => 50,
        'fieldType' => 'varchar'
      ],
      'userId' => [
        'type' => 'varchar',
        'len' => 50,
        'fieldType' => 'varchar'
      ],
      'isSubmitted' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ]
    ],
    'relations' => [],
    'indexes' => [
      'remindAt' => [
        'type' => 'index',
        'columns' => [
          0 => 'remindAt'
        ],
        'key' => 'IDX_REMIND_AT'
      ],
      'startAt' => [
        'type' => 'index',
        'columns' => [
          0 => 'startAt'
        ],
        'key' => 'IDX_START_AT'
      ],
      'type' => [
        'type' => 'index',
        'columns' => [
          0 => 'type'
        ],
        'key' => 'IDX_TYPE'
      ]
    ],
    'collection' => [
      'orderBy' => 'remindAt',
      'order' => 'DESC'
    ]
  ],
  'Target' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'personName',
        'select' => [
          'select' => 'NULLIF:(TRIM:(CONCAT:(IFNULL:(firstName, \'\'), \' \', IFNULL:(lastName, \'\'))), \'\')'
        ],
        'selectForeign' => [
          'select' => 'NULLIF:(TRIM:(CONCAT:(IFNULL:({alias}.firstName, \'\'), \' \', IFNULL:({alias}.lastName, \'\'))), \'\')'
        ],
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'OR' => [
                'firstName*' => '{value}',
                'lastName*' => '{value}',
                'CONCAT:(firstName, \' \', lastName)*' => '{value}',
                'CONCAT:(lastName, \' \', firstName)*' => '{value}'
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'AND' => [
                'firstName!*' => '{value}',
                'lastName!*' => '{value}',
                'CONCAT:(firstName, \' \', lastName)!*' => '{value}',
                'CONCAT:(lastName, \' \', firstName)!*' => '{value}'
              ]
            ]
          ],
          '=' => [
            'whereClause' => [
              'OR' => [
                'firstName' => '{value}',
                'lastName' => '{value}',
                'CONCAT:(firstName, \' \', lastName)' => '{value}',
                'CONCAT:(lastName, \' \', firstName)' => '{value}'
              ]
            ]
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'firstName',
              1 => '{direction}'
            ],
            1 => [
              0 => 'lastName',
              1 => '{direction}'
            ]
          ]
        ]
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'salutationName' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'firstName' => [
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
        'fieldType' => 'varchar'
      ],
      'lastName' => [
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
        'fieldType' => 'varchar'
      ],
      'title' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'accountName' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'website' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'addressStreet' => [
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
        'fieldType' => 'text'
      ],
      'addressCity' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'addressState' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'addressCountry' => [
        'type' => 'varchar',
        'len' => 255,
        'fieldType' => 'varchar'
      ],
      'addressPostalCode' => [
        'type' => 'varchar',
        'len' => 40,
        'fieldType' => 'varchar'
      ],
      'emailAddress' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'email',
        'select' => [
          'select' => 'emailAddresses.name',
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'emailAddressTarget{alias}Foreign.name',
          'leftJoins' => [
            0 => [
              0 => 'EntityEmailAddress',
              1 => 'emailAddressTarget{alias}ForeignMiddle',
              2 => [
                'emailAddressTarget{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'emailAddressTarget{alias}ForeignMiddle.primary' => 1,
                'emailAddressTarget{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'EmailAddress',
              1 => 'emailAddressTarget{alias}Foreign',
              2 => [
                'emailAddressTarget{alias}Foreign.id:' => 'emailAddressTarget{alias}ForeignMiddle.emailAddressId',
                'emailAddressTarget{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'id=s' => [
                'from' => 'EntityEmailAddress',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'emailAddress',
                    1 => 'emailAddress',
                    2 => [
                      'emailAddress.id:' => 'emailAddressId',
                      'emailAddress.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Target',
                  'emailAddress.lower*' => '{value}'
                ]
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'id!=s' => [
                'from' => 'EntityEmailAddress',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'emailAddress',
                    1 => 'emailAddress',
                    2 => [
                      'emailAddress.id:' => 'emailAddressId',
                      'emailAddress.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Target',
                  'emailAddress.lower*' => '{value}'
                ]
              ]
            ]
          ],
          '=' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower=' => '{value}'
            ],
            'distinct' => true
          ],
          '<>' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IN' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower=' => '{value}'
            ],
            'distinct' => true
          ],
          'NOT IN' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IS NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower=' => NULL
            ],
            'distinct' => true
          ],
          'IS NOT NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddressesMultiple'
              ]
            ],
            'whereClause' => [
              'emailAddressesMultiple.lower!=' => NULL
            ],
            'distinct' => true
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'emailAddresses.lower',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'emailAddresses.lower'
          ]
        ]
      ],
      'phoneNumber' => [
        'type' => 'varchar',
        'notStorable' => true,
        'fieldType' => 'phone',
        'select' => [
          'select' => 'phoneNumbers.name',
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'phoneNumberTarget{alias}Foreign.name',
          'leftJoins' => [
            0 => [
              0 => 'EntityPhoneNumber',
              1 => 'phoneNumberTarget{alias}ForeignMiddle',
              2 => [
                'phoneNumberTarget{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'phoneNumberTarget{alias}ForeignMiddle.primary' => 1,
                'phoneNumberTarget{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'PhoneNumber',
              1 => 'phoneNumberTarget{alias}Foreign',
              2 => [
                'phoneNumberTarget{alias}Foreign.id:' => 'phoneNumberTarget{alias}ForeignMiddle.phoneNumberId',
                'phoneNumberTarget{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'id=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Target',
                  'phoneNumber.name*' => '{value}'
                ]
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'id!=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Target',
                  'phoneNumber.name*' => '{value}'
                ]
              ]
            ]
          ],
          '=' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name=' => '{value}'
            ],
            'distinct' => true
          ],
          '<>' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name=' => '{value}'
            ],
            'distinct' => true
          ],
          'NOT IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IS NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name=' => NULL
            ],
            'distinct' => true
          ],
          'IS NOT NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.name!=' => NULL
            ],
            'distinct' => true
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'phoneNumbers.name',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'phoneNumbers.name'
          ]
        ]
      ],
      'doNotCall' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'middleName' => [
        'type' => 'varchar',
        'len' => 100,
        'fieldType' => 'varchar'
      ],
      'addressMap' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'map'
      ],
      'emailAddressIsOptedOut' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => [
          'select' => 'emailAddresses.optOut',
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'emailAddressTarget{alias}Foreign.optOut',
          'leftJoins' => [
            0 => [
              0 => 'EntityEmailAddress',
              1 => 'emailAddressTarget{alias}ForeignMiddle',
              2 => [
                'emailAddressTarget{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'emailAddressTarget{alias}ForeignMiddle.primary' => 1,
                'emailAddressTarget{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'EmailAddress',
              1 => 'emailAddressTarget{alias}Foreign',
              2 => [
                'emailAddressTarget{alias}Foreign.id:' => 'emailAddressTarget{alias}ForeignMiddle.emailAddressId',
                'emailAddressTarget{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          '= TRUE' => [
            'whereClause' => [
              0 => [
                'emailAddresses.optOut=' => true
              ],
              1 => [
                'emailAddresses.optOut!=' => NULL
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ],
          '= FALSE' => [
            'whereClause' => [
              'OR' => [
                0 => [
                  'emailAddresses.optOut=' => false
                ],
                1 => [
                  'emailAddresses.optOut=' => NULL
                ]
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'emailAddresses',
                1 => 'emailAddresses',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'emailAddresses.optOut',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'emailAddresses',
              1 => 'emailAddresses',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'emailAddresses.optOut'
          ]
        ],
        'default' => false
      ],
      'phoneNumberIsOptedOut' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'select' => [
          'select' => 'phoneNumbers.optOut',
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ]
        ],
        'selectForeign' => [
          'select' => 'phoneNumberTarget{alias}Foreign.optOut',
          'leftJoins' => [
            0 => [
              0 => 'EntityPhoneNumber',
              1 => 'phoneNumberTarget{alias}ForeignMiddle',
              2 => [
                'phoneNumberTarget{alias}ForeignMiddle.entityId:' => '{alias}.id',
                'phoneNumberTarget{alias}ForeignMiddle.primary' => 1,
                'phoneNumberTarget{alias}ForeignMiddle.deleted' => 0
              ]
            ],
            1 => [
              0 => 'PhoneNumber',
              1 => 'phoneNumberTarget{alias}Foreign',
              2 => [
                'phoneNumberTarget{alias}Foreign.id:' => 'phoneNumberTarget{alias}ForeignMiddle.phoneNumberId',
                'phoneNumberTarget{alias}Foreign.deleted' => 0
              ]
            ]
          ]
        ],
        'where' => [
          '= TRUE' => [
            'whereClause' => [
              0 => [
                'phoneNumbers.optOut=' => true
              ],
              1 => [
                'phoneNumbers.optOut!=' => NULL
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ],
          '= FALSE' => [
            'whereClause' => [
              'OR' => [
                0 => [
                  'phoneNumbers.optOut=' => false
                ],
                1 => [
                  'phoneNumbers.optOut=' => NULL
                ]
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbers',
                2 => [
                  'primary' => 1
                ]
              ]
            ]
          ]
        ],
        'order' => [
          'order' => [
            0 => [
              0 => 'phoneNumbers.optOut',
              1 => '{direction}'
            ]
          ],
          'leftJoins' => [
            0 => [
              0 => 'phoneNumbers',
              1 => 'phoneNumbers',
              2 => [
                'primary' => 1
              ]
            ]
          ],
          'additionalSelect' => [
            0 => 'phoneNumbers.optOut'
          ]
        ],
        'default' => false
      ],
      'emailAddressData' => [
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true
      ],
      'phoneNumberData' => [
        'type' => 'text',
        'notStorable' => true,
        'notExportable' => true
      ],
      'phoneNumberNumeric' => [
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true,
        'where' => [
          'LIKE' => [
            'whereClause' => [
              'id=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Target',
                  'phoneNumber.numeric*' => '{value}'
                ]
              ]
            ]
          ],
          'NOT LIKE' => [
            'whereClause' => [
              'id!=s' => [
                'from' => 'EntityPhoneNumber',
                'select' => [
                  0 => 'entityId'
                ],
                'joins' => [
                  0 => [
                    0 => 'phoneNumber',
                    1 => 'phoneNumber',
                    2 => [
                      'phoneNumber.id:' => 'phoneNumberId',
                      'phoneNumber.deleted' => false
                    ]
                  ]
                ],
                'whereClause' => [
                  'deleted' => false,
                  'entityType' => 'Target',
                  'phoneNumber.numeric*' => '{value}'
                ]
              ]
            ]
          ],
          '=' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric=' => '{value}'
            ],
            'distinct' => true
          ],
          '<>' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric=' => '{value}'
            ],
            'distinct' => true
          ],
          'NOT IN' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric!=' => '{value}'
            ],
            'distinct' => true
          ],
          'IS NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric=' => NULL
            ],
            'distinct' => true
          ],
          'IS NOT NULL' => [
            'leftJoins' => [
              0 => [
                0 => 'phoneNumbers',
                1 => 'phoneNumbersMultiple'
              ]
            ],
            'whereClause' => [
              'phoneNumbersMultiple.numeric!=' => NULL
            ],
            'distinct' => true
          ]
        ]
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ]
    ],
    'relations' => [
      'emailAddresses' => [
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => [
          0 => 'entityId',
          1 => 'emailAddressId'
        ],
        'conditions' => [
          'entityType' => 'Target'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ],
          'primary' => [
            'type' => 'bool',
            'default' => false
          ]
        ]
      ],
      'phoneNumbers' => [
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => [
          0 => 'entityId',
          1 => 'phoneNumberId'
        ],
        'conditions' => [
          'entityType' => 'Target'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ],
          'primary' => [
            'type' => 'bool',
            'default' => false
          ]
        ]
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'Target'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'firstName' => [
        'columns' => [
          0 => 'firstName',
          1 => 'deleted'
        ],
        'key' => 'IDX_FIRST_NAME'
      ],
      'name' => [
        'columns' => [
          0 => 'firstName',
          1 => 'lastName'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'TargetList' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'entryCount' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'optedOutCount' => [
        'type' => 'int',
        'notStorable' => true,
        'fieldType' => 'int',
        'len' => 11
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'includingActionList' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'excludingActionList' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'storeArrayValues' => true,
        'fieldType' => 'jsonArray'
      ],
      'targetStatus' => [
        'type' => 'varchar',
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'isOptedOut' => [
        'type' => 'bool',
        'notNull' => true,
        'notExportable' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'usersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'usersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'leadsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'leadsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'contactsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'contactsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'accountsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'accountsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'massEmailsExcludingIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'massEmailsExcludingNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'campaignsExcludingIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'campaignsExcludingNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'massEmailsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'massEmailsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'campaignsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkStub' => true
      ],
      'campaignsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkStub' => true
      ]
    ],
    'relations' => [
      'users' => [
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'targetListUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'targetListId',
          1 => 'userId'
        ],
        'foreign' => 'targetLists',
        'columnAttributeMap' => [
          'optedOut' => 'isOptedOut'
        ],
        'additionalColumns' => [
          'optedOut' => [
            'type' => 'bool'
          ]
        ]
      ],
      'leads' => [
        'type' => 'manyMany',
        'entity' => 'Lead',
        'relationName' => 'leadTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'targetListId',
          1 => 'leadId'
        ],
        'foreign' => 'targetLists',
        'columnAttributeMap' => [
          'optedOut' => 'isOptedOut'
        ],
        'additionalColumns' => [
          'optedOut' => [
            'type' => 'bool'
          ]
        ]
      ],
      'contacts' => [
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'contactTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'targetListId',
          1 => 'contactId'
        ],
        'foreign' => 'targetLists',
        'columnAttributeMap' => [
          'optedOut' => 'isOptedOut'
        ],
        'additionalColumns' => [
          'optedOut' => [
            'type' => 'bool'
          ]
        ]
      ],
      'accounts' => [
        'type' => 'manyMany',
        'entity' => 'Account',
        'relationName' => 'accountTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'targetListId',
          1 => 'accountId'
        ],
        'foreign' => 'targetLists',
        'columnAttributeMap' => [
          'optedOut' => 'isOptedOut'
        ],
        'additionalColumns' => [
          'optedOut' => [
            'type' => 'bool'
          ]
        ]
      ],
      'massEmailsExcluding' => [
        'type' => 'manyMany',
        'entity' => 'MassEmail',
        'relationName' => 'massEmailTargetListExcluding',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'targetListId',
          1 => 'massEmailId'
        ],
        'foreign' => 'excludingTargetLists'
      ],
      'campaignsExcluding' => [
        'type' => 'manyMany',
        'entity' => 'Campaign',
        'relationName' => 'campaignTargetListExcluding',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'targetListId',
          1 => 'campaignId'
        ],
        'foreign' => 'excludingTargetLists'
      ],
      'massEmails' => [
        'type' => 'manyMany',
        'entity' => 'MassEmail',
        'relationName' => 'massEmailTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'targetListId',
          1 => 'massEmailId'
        ],
        'foreign' => 'targetLists'
      ],
      'campaigns' => [
        'type' => 'manyMany',
        'entity' => 'Campaign',
        'relationName' => 'campaignTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'targetListId',
          1 => 'campaignId'
        ],
        'foreign' => 'targetLists'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'TargetList'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'createdAt' => [
        'columns' => [
          0 => 'createdAt',
          1 => 'deleted'
        ],
        'key' => 'IDX_CREATED_AT'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'Task' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'status' => [
        'type' => 'varchar',
        'default' => 'Not Started',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'priority' => [
        'type' => 'varchar',
        'default' => 'Normal',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'dateStart' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'dateEnd' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'dateStartDate' => [
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date'
      ],
      'dateEndDate' => [
        'type' => 'date',
        'notNull' => false,
        'fieldType' => 'date'
      ],
      'dateCompleted' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'isOverdue' => [
        'type' => 'bool',
        'notNull' => true,
        'notStorable' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'reminders' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'fieldType' => 'jsonArray'
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'parentId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => 'parent',
        'attributeRole' => 'id',
        'fieldType' => 'linkParent',
        'notNull' => false
      ],
      'parentType' => [
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'attributeRole' => 'type',
        'fieldType' => 'linkParent',
        'dbType' => 'varchar'
      ],
      'parentName' => [
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'parent',
        'isParentName' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkParent'
      ],
      'accountId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'accountName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'account',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'contactId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'contactName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'contact',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'attachmentsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'orderBy' => [
          0 => [
            0 => 'createdAt',
            1 => 'ASC'
          ],
          1 => [
            0 => 'name',
            1 => 'ASC'
          ]
        ],
        'isLinkMultipleIdList' => true,
        'relation' => 'attachments',
        'isLinkStub' => false
      ],
      'attachmentsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'isLinkStub' => false
      ],
      'isFollowed' => [
        'type' => 'varchar',
        'notStorable' => true,
        'notExportable' => true
      ],
      'followersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'notExportable' => true
      ],
      'followersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'notExportable' => true
      ],
      'emailId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'notNull' => false
      ],
      'emailName' => [
        'type' => 'foreign',
        'relation' => 'email',
        'foreign' => 'name',
        'notStorable' => false,
        'foreignType' => 'varchar'
      ],
      'attachmentsTypes' => [
        'type' => 'jsonObject',
        'notStorable' => true
      ]
    ],
    'relations' => [
      'email' => [
        'type' => 'belongsTo',
        'entity' => 'Email',
        'key' => 'emailId',
        'foreignKey' => 'id',
        'foreign' => 'tasks'
      ],
      'contact' => [
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'contactId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'account' => [
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'parent' => [
        'type' => 'belongsToParent',
        'key' => 'parentId',
        'foreign' => 'tasks'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'Task'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => 'tasks'
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'attachments' => [
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'foreign' => 'parent',
        'conditions' => [
          'OR' => [
            0 => [
              'field' => NULL
            ],
            1 => [
              'field' => 'attachments'
            ]
          ]
        ]
      ]
    ],
    'indexes' => [
      'dateStartStatus' => [
        'columns' => [
          0 => 'dateStart',
          1 => 'status'
        ],
        'key' => 'IDX_DATE_START_STATUS'
      ],
      'dateEndStatus' => [
        'columns' => [
          0 => 'dateEnd',
          1 => 'status'
        ],
        'key' => 'IDX_DATE_END_STATUS'
      ],
      'dateStart' => [
        'columns' => [
          0 => 'dateStart',
          1 => 'deleted'
        ],
        'key' => 'IDX_DATE_START'
      ],
      'status' => [
        'columns' => [
          0 => 'status',
          1 => 'deleted'
        ],
        'key' => 'IDX_STATUS'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'assignedUserStatus' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'status'
        ],
        'key' => 'IDX_ASSIGNED_USER_STATUS'
      ],
      'parent' => [
        'type' => 'index',
        'columns' => [
          0 => 'parentId',
          1 => 'parentType'
        ],
        'key' => 'IDX_PARENT'
      ],
      'accountId' => [
        'type' => 'index',
        'columns' => [
          0 => 'accountId'
        ],
        'key' => 'IDX_ACCOUNT_ID'
      ],
      'contactId' => [
        'type' => 'index',
        'columns' => [
          0 => 'contactId'
        ],
        'key' => 'IDX_CONTACT_ID'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'emailId' => [
        'type' => 'index',
        'columns' => [
          0 => 'emailId'
        ],
        'key' => 'IDX_EMAIL_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'Components' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'warehouseItemId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'warehouseItemName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'warehouseItem',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'warehouseItem' => [
        'type' => 'belongsTo',
        'entity' => 'WarehouseItem',
        'key' => 'warehouseItemId',
        'foreignKey' => 'id',
        'foreign' => 'components'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'Components'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'warehouseItemId' => [
        'type' => 'index',
        'columns' => [
          0 => 'warehouseItemId'
        ],
        'key' => 'IDX_WAREHOUSE_ITEM_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'EquipmentClasses' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'equipmentDefinitionLists1Ids' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'equipmentDefinitionLists1',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'equipmentDefinitionLists1Names' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'equipmentClassesPropertiesElementsesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'equipmentClassesPropertiesElementses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'equipmentClassesPropertiesElementsesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'equipmentDefinitionsPropertiesFromClassesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'equipmentDefinitionsPropertiesFromClasses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'equipmentDefinitionsPropertiesFromClassesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'processSegmentEquipmentItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'processSegmentEquipmentItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'processSegmentEquipmentItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentEquipmentItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'productSegmentEquipmentItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentEquipmentItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'productSegmentEquipmentItems' => [
        'type' => 'hasMany',
        'entity' => 'ProductSegmentEquipmentItem',
        'foreignKey' => 'equipmentClassesId',
        'foreign' => 'equipmentClasses'
      ],
      'processSegmentEquipmentItems' => [
        'type' => 'hasMany',
        'entity' => 'ProcessSegmentEquipmentItem',
        'foreignKey' => 'equipmentClassesId',
        'foreign' => 'equipmentClasses'
      ],
      'equipmentDefinitionsPropertiesFromClasses' => [
        'type' => 'hasMany',
        'entity' => 'EquipmentDefinitionsPropertiesFromClasses',
        'foreignKey' => 'equipmentClassesId',
        'foreign' => 'equipmentClasses'
      ],
      'equipmentClassesPropertiesElementses' => [
        'type' => 'manyMany',
        'entity' => 'EquipmentProperties',
        'relationName' => 'equipmentClassListEquipmentClassesPropertiesElements',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'equipmentClassesId',
          1 => 'equipmentPropertiesId'
        ],
        'foreign' => 'equipmentClassLists'
      ],
      'equipmentDefinitionLists1' => [
        'type' => 'manyMany',
        'entity' => 'EquipmentDefinitions',
        'relationName' => 'equipmentClassListEquipmentDefinitionList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'equipmentClassesId',
          1 => 'equipmentDefinitionsId'
        ],
        'foreign' => 'equipmentClassLists'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'EquipmentClasses'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'ASC'
    ]
  ],
  'EquipmentDefinitions' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'equipmentDefinitionListParentId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'equipmentDefinitionListParentName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'equipmentDefinitionListParent',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'equipmentDefinitionListsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'equipmentDefinitionLists',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'equipmentDefinitionListsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'equipmentClassListsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'equipmentClassLists',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'equipmentClassListsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'eqipmentDefinitionsPropertiesFromClassesesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'eqipmentDefinitionsPropertiesFromClasseses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'eqipmentDefinitionsPropertiesFromClassesesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'processSegmentEquipmentItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'processSegmentEquipmentItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'processSegmentEquipmentItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentEquipmentItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'productSegmentEquipmentItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentEquipmentItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'productSegmentEquipmentItems' => [
        'type' => 'hasMany',
        'entity' => 'ProductSegmentEquipmentItem',
        'foreignKey' => 'equipmentDefinitionsId',
        'foreign' => 'equipmentDefinitions'
      ],
      'processSegmentEquipmentItems' => [
        'type' => 'hasMany',
        'entity' => 'ProcessSegmentEquipmentItem',
        'foreignKey' => 'equipmentDefinitionsId',
        'foreign' => 'equipmentDefinitions'
      ],
      'eqipmentDefinitionsPropertiesFromClasseses' => [
        'type' => 'hasMany',
        'entity' => 'EquipmentDefinitionsPropertiesFromClasses',
        'foreignKey' => 'equipmentDefinitionListId',
        'foreign' => 'equipmentDefinitionList'
      ],
      'equipmentClassLists' => [
        'type' => 'manyMany',
        'entity' => 'EquipmentClasses',
        'relationName' => 'equipmentClassListEquipmentDefinitionList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'equipmentDefinitionsId',
          1 => 'equipmentClassesId'
        ],
        'foreign' => 'equipmentDefinitionLists1'
      ],
      'equipmentDefinitionLists' => [
        'type' => 'hasMany',
        'entity' => 'EquipmentDefinitions',
        'foreignKey' => 'equipmentDefinitionListParentId',
        'foreign' => 'equipmentDefinitionListParent'
      ],
      'equipmentDefinitionListParent' => [
        'type' => 'belongsTo',
        'entity' => 'EquipmentDefinitions',
        'key' => 'equipmentDefinitionListParentId',
        'foreignKey' => 'id',
        'foreign' => 'equipmentDefinitionLists'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'EquipmentDefinitions'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'equipmentDefinitionListParentId' => [
        'type' => 'index',
        'columns' => [
          0 => 'equipmentDefinitionListParentId'
        ],
        'key' => 'IDX_EQUIPMENT_DEFINITION_LIST_PARENT_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'ASC'
    ]
  ],
  'EquipmentDefinitionsPropertiesFromClasses' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'value' => [
        'type' => 'varchar',
        'len' => 150,
        'fieldType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'equipmentDefinitionListId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'equipmentDefinitionListName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'equipmentDefinitionList',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'equipmentClassesPropertiesElementsId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'equipmentClassesPropertiesElementsName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'equipmentClassesPropertiesElements',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'equipmentClassesId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'equipmentClassesName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'equipmentClasses',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'equipmentClasses' => [
        'type' => 'belongsTo',
        'entity' => 'EquipmentClasses',
        'key' => 'equipmentClassesId',
        'foreignKey' => 'id',
        'foreign' => 'equipmentDefinitionsPropertiesFromClasses'
      ],
      'equipmentClassesPropertiesElements' => [
        'type' => 'belongsTo',
        'entity' => 'EquipmentProperties',
        'key' => 'equipmentClassesPropertiesElementsId',
        'foreignKey' => 'id',
        'foreign' => 'eqipmentDefinitionsPropertiesFromClasseses'
      ],
      'equipmentDefinitionList' => [
        'type' => 'belongsTo',
        'entity' => 'EquipmentDefinitions',
        'key' => 'equipmentDefinitionListId',
        'foreignKey' => 'id',
        'foreign' => 'eqipmentDefinitionsPropertiesFromClasseses'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'EquipmentDefinitionsPropertiesFromClasses'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'equipmentDefinitionListId' => [
        'type' => 'index',
        'columns' => [
          0 => 'equipmentDefinitionListId'
        ],
        'key' => 'IDX_EQUIPMENT_DEFINITION_LIST_ID'
      ],
      'equipmentClassesPropertiesElementsId' => [
        'type' => 'index',
        'columns' => [
          0 => 'equipmentClassesPropertiesElementsId'
        ],
        'key' => 'IDX_EQUIPMENT_CLASSES_PROPERTIES_ELEMENTS_ID'
      ],
      'equipmentClassesId' => [
        'type' => 'index',
        'columns' => [
          0 => 'equipmentClassesId'
        ],
        'key' => 'IDX_EQUIPMENT_CLASSES_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'EquipmentProperties' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'valueType' => [
        'type' => 'varchar',
        'default' => 'String',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'eqipmentDefinitionsPropertiesFromClassesesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'eqipmentDefinitionsPropertiesFromClasseses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'eqipmentDefinitionsPropertiesFromClassesesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'equipmentClassListsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'equipmentClassLists',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'equipmentClassListsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'equipmentClassLists' => [
        'type' => 'manyMany',
        'entity' => 'EquipmentClasses',
        'relationName' => 'equipmentClassListEquipmentClassesPropertiesElements',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'equipmentPropertiesId',
          1 => 'equipmentClassesId'
        ],
        'foreign' => 'equipmentClassesPropertiesElementses'
      ],
      'eqipmentDefinitionsPropertiesFromClasseses' => [
        'type' => 'hasMany',
        'entity' => 'EquipmentDefinitionsPropertiesFromClasses',
        'foreignKey' => 'equipmentClassesPropertiesElementsId',
        'foreign' => 'equipmentClassesPropertiesElements'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'EquipmentProperties'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'KeyPerformanceIndicator' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ]
    ],
    'relations' => [
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'KeyPerformanceIndicator'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'MaterialClasses' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'materialPropertiesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'materialProperties',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'materialPropertiesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'materialDefinitionsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'materialDefinitions',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'materialDefinitionsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'materialDefinitionsPropertiesFromClassesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'materialDefinitionsPropertiesFromClasses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'materialDefinitionsPropertiesFromClassesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'processSegmentMaterialItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'processSegmentMaterialItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'processSegmentMaterialItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentMaterialItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'productSegmentMaterialItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentMaterialItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'productSegmentMaterialItems' => [
        'type' => 'hasMany',
        'entity' => 'ProductSegmentMaterialItem',
        'foreignKey' => 'materialClassesId',
        'foreign' => 'materialClasses'
      ],
      'processSegmentMaterialItems' => [
        'type' => 'hasMany',
        'entity' => 'ProcessSegmentMaterialItem',
        'foreignKey' => 'materialClassesId',
        'foreign' => 'materialClasses'
      ],
      'materialDefinitionsPropertiesFromClasses' => [
        'type' => 'hasMany',
        'entity' => 'MaterialDefinitionsPropertiesFromClasses',
        'foreignKey' => 'materialClassesId',
        'foreign' => 'materialClasses'
      ],
      'materialDefinitions' => [
        'type' => 'manyMany',
        'entity' => 'MaterialDefinitions',
        'relationName' => 'materialDefinitionsClasses',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'materialClassesId',
          1 => 'materialDefinitionsId'
        ],
        'foreign' => 'materialClasses'
      ],
      'materialProperties' => [
        'type' => 'manyMany',
        'entity' => 'MaterialProperties',
        'relationName' => 'materialClassesProperties',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'materialClassesId',
          1 => 'materialPropertiesId'
        ],
        'foreign' => 'materialClasses'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'MaterialClasses'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'ASC'
    ]
  ],
  'MaterialDefinitions' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'materialClassesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'materialClasses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'materialClassesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'materialDefinitionsPropertiesFromClassesesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'materialDefinitionsPropertiesFromClasseses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'materialDefinitionsPropertiesFromClassesesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'materialLotsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'materialLots',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'materialLotsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'processSegmentMaterialItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'processSegmentMaterialItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'processSegmentMaterialItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentMaterialItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'productSegmentMaterialItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentMaterialItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'productSegmentMaterialItems' => [
        'type' => 'hasMany',
        'entity' => 'ProductSegmentMaterialItem',
        'foreignKey' => 'materialDefinitionsId',
        'foreign' => 'materialDefinitions'
      ],
      'processSegmentMaterialItems' => [
        'type' => 'hasMany',
        'entity' => 'ProcessSegmentMaterialItem',
        'foreignKey' => 'materialDefinitionsId',
        'foreign' => 'materialDefinitions'
      ],
      'materialLots' => [
        'type' => 'hasMany',
        'entity' => 'MaterialLots',
        'foreignKey' => 'materialDefinitionsId',
        'foreign' => 'materialDefinitions'
      ],
      'materialDefinitionsPropertiesFromClasseses' => [
        'type' => 'hasMany',
        'entity' => 'MaterialDefinitionsPropertiesFromClasses',
        'foreignKey' => 'materialDefinitionsId',
        'foreign' => 'materialDefinitions'
      ],
      'materialClasses' => [
        'type' => 'manyMany',
        'entity' => 'MaterialClasses',
        'relationName' => 'materialDefinitionsClasses',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'materialDefinitionsId',
          1 => 'materialClassesId'
        ],
        'foreign' => 'materialDefinitions'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'MaterialDefinitions'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'ASC'
    ]
  ],
  'MaterialDefinitionsPropertiesFromClasses' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'value' => [
        'type' => 'varchar',
        'len' => 150,
        'fieldType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'materialDefinitionsId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'materialDefinitionsName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'materialDefinitions',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'materialPropertiesId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'materialPropertiesName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'materialProperties',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'materialClassesId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'materialClassesName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'materialClasses',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'materialClasses' => [
        'type' => 'belongsTo',
        'entity' => 'MaterialClasses',
        'key' => 'materialClassesId',
        'foreignKey' => 'id',
        'foreign' => 'materialDefinitionsPropertiesFromClasses'
      ],
      'materialProperties' => [
        'type' => 'belongsTo',
        'entity' => 'MaterialProperties',
        'key' => 'materialPropertiesId',
        'foreignKey' => 'id',
        'foreign' => 'materialDefinitionsPropertiesFromClasses'
      ],
      'materialDefinitions' => [
        'type' => 'belongsTo',
        'entity' => 'MaterialDefinitions',
        'key' => 'materialDefinitionsId',
        'foreignKey' => 'id',
        'foreign' => 'materialDefinitionsPropertiesFromClasseses'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'MaterialDefinitionsPropertiesFromClasses'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'materialDefinitionsId' => [
        'type' => 'index',
        'columns' => [
          0 => 'materialDefinitionsId'
        ],
        'key' => 'IDX_MATERIAL_DEFINITIONS_ID'
      ],
      'materialPropertiesId' => [
        'type' => 'index',
        'columns' => [
          0 => 'materialPropertiesId'
        ],
        'key' => 'IDX_MATERIAL_PROPERTIES_ID'
      ],
      'materialClassesId' => [
        'type' => 'index',
        'columns' => [
          0 => 'materialClassesId'
        ],
        'key' => 'IDX_MATERIAL_CLASSES_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'MaterialLots' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'storageLocation' => [
        'type' => 'varchar',
        'len' => 150,
        'fieldType' => 'varchar'
      ],
      'quantityUnit' => [
        'type' => 'varchar',
        'len' => 150,
        'fieldType' => 'varchar'
      ],
      'quantityValue' => [
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'materialDefinitionsId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'materialDefinitionsName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'materialDefinitions',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'materialDefinitions' => [
        'type' => 'belongsTo',
        'entity' => 'MaterialDefinitions',
        'key' => 'materialDefinitionsId',
        'foreignKey' => 'id',
        'foreign' => 'materialLots'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'MaterialLots'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'materialDefinitionsId' => [
        'type' => 'index',
        'columns' => [
          0 => 'materialDefinitionsId'
        ],
        'key' => 'IDX_MATERIAL_DEFINITIONS_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'name',
      'order' => 'ASC'
    ]
  ],
  'MaterialProperties' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'valueType' => [
        'type' => 'varchar',
        'default' => 'String',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'materialClassesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'materialClasses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'materialClassesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'materialDefinitionsPropertiesFromClassesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'materialDefinitionsPropertiesFromClasses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'materialDefinitionsPropertiesFromClassesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'materialDefinitionsPropertiesFromClasses' => [
        'type' => 'hasMany',
        'entity' => 'MaterialDefinitionsPropertiesFromClasses',
        'foreignKey' => 'materialPropertiesId',
        'foreign' => 'materialProperties'
      ],
      'materialClasses' => [
        'type' => 'manyMany',
        'entity' => 'MaterialClasses',
        'relationName' => 'materialClassesProperties',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'materialPropertiesId',
          1 => 'materialClassesId'
        ],
        'foreign' => 'materialProperties'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'MaterialProperties'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'ASC'
    ]
  ],
  'OrderItem' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'quantity' => [
        'type' => 'int',
        'default' => 1,
        'fieldType' => 'int',
        'len' => 11
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'ordersIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'orders',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'ordersNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productDefinitionsId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'productDefinitionsName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'productDefinitions',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'productDefinitions' => [
        'type' => 'belongsTo',
        'entity' => 'ProductDefinitions',
        'key' => 'productDefinitionsId',
        'foreignKey' => 'id',
        'foreign' => 'orderItems'
      ],
      'orders' => [
        'type' => 'manyMany',
        'entity' => 'Orders',
        'relationName' => 'orderProducts',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'orderItemId',
          1 => 'ordersId'
        ],
        'foreign' => 'orderItems'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'OrderItem'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'productDefinitionsId' => [
        'type' => 'index',
        'columns' => [
          0 => 'productDefinitionsId'
        ],
        'key' => 'IDX_PRODUCT_DEFINITIONS_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'Orders' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'customerName' => [
        'type' => 'varchar',
        'len' => 150,
        'fieldType' => 'varchar'
      ],
      'customerEmail' => [
        'type' => 'varchar',
        'len' => 150,
        'fieldType' => 'varchar'
      ],
      'status' => [
        'type' => 'varchar',
        'default' => 'new',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'priority' => [
        'type' => 'varchar',
        'default' => '1',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'number' => [
        'type' => 'varchar',
        'len' => 36,
        'notNull' => false,
        'unique' => false,
        'fieldType' => 'varchar'
      ],
      'confirmed' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'finishedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'orderedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'startedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'productsFull' => [
        'type' => 'bool',
        'notNull' => true,
        'fieldType' => 'bool',
        'default' => false
      ],
      'state' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'orderItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'orderItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'orderItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'confirmedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'confirmedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'confirmedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'confirmedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'confirmedById',
        'foreignKey' => 'id',
        'foreign' => 'orders'
      ],
      'orderItems' => [
        'type' => 'manyMany',
        'entity' => 'OrderItem',
        'relationName' => 'orderProducts',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'ordersId',
          1 => 'orderItemId'
        ],
        'foreign' => 'orders'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'Orders'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'confirmedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'confirmedById'
        ],
        'key' => 'IDX_CONFIRMED_BY_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'PersonnelClasses' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'personnelPropertiesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'personnelProperties',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'personnelPropertiesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'personnelDefinitionsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'personnelDefinitions',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'personnelDefinitionsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'personnelDefinitionsPropertiesFromClassesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'personnelDefinitionsPropertiesFromClasses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'personnelDefinitionsPropertiesFromClassesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'processSegmentPersonnelItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'processSegmentPersonnelItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'processSegmentPersonnelItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentPersonnelItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'productSegmentPersonnelItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentPersonnelItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'productSegmentPersonnelItems' => [
        'type' => 'hasMany',
        'entity' => 'ProductSegmentPersonnelItem',
        'foreignKey' => 'personnelClassesId',
        'foreign' => 'personnelClasses'
      ],
      'processSegmentPersonnelItems' => [
        'type' => 'hasMany',
        'entity' => 'ProcessSegmentPersonnelItem',
        'foreignKey' => 'personnelClassesId',
        'foreign' => 'personnelClasses'
      ],
      'personnelDefinitionsPropertiesFromClasses' => [
        'type' => 'hasMany',
        'entity' => 'PersonnelDefinitionsPropertiesFromClasses',
        'foreignKey' => 'personnelClassesId',
        'foreign' => 'personnelClasses'
      ],
      'personnelDefinitions' => [
        'type' => 'manyMany',
        'entity' => 'PersonnelDefinitions',
        'relationName' => 'personnelClassesPersonnelDefinitions',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'personnelClassesId',
          1 => 'personnelDefinitionsId'
        ],
        'foreign' => 'personnelClasses'
      ],
      'personnelProperties' => [
        'type' => 'manyMany',
        'entity' => 'PersonnelProperties',
        'relationName' => 'personnelClassesProperties',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'personnelClassesId',
          1 => 'personnelPropertiesId'
        ],
        'foreign' => 'personnelClasses'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'PersonnelClasses'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'PersonnelDefinitions' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'personnelDefinitionsPropertiesFromClassesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'personnelDefinitionsPropertiesFromClasses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'personnelDefinitionsPropertiesFromClassesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'personnelClassesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'personnelClasses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'personnelClassesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'processSegmentPersonnelItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'processSegmentPersonnelItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'processSegmentPersonnelItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentPersonnelItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'productSegmentPersonnelItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentPersonnelItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'productSegmentPersonnelItems' => [
        'type' => 'hasMany',
        'entity' => 'ProductSegmentPersonnelItem',
        'foreignKey' => 'personnelDefinitionsId',
        'foreign' => 'personnelDefinitions'
      ],
      'processSegmentPersonnelItems' => [
        'type' => 'hasMany',
        'entity' => 'ProcessSegmentPersonnelItem',
        'foreignKey' => 'personnelDefinitionsId',
        'foreign' => 'personnelDefinitions'
      ],
      'personnelClasses' => [
        'type' => 'manyMany',
        'entity' => 'PersonnelClasses',
        'relationName' => 'personnelClassesPersonnelDefinitions',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'personnelDefinitionsId',
          1 => 'personnelClassesId'
        ],
        'foreign' => 'personnelDefinitions'
      ],
      'personnelDefinitionsPropertiesFromClasses' => [
        'type' => 'hasMany',
        'entity' => 'PersonnelDefinitionsPropertiesFromClasses',
        'foreignKey' => 'personnelDefinitionsId',
        'foreign' => 'personnelDefinitions'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'PersonnelDefinitions'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'PersonnelDefinitionsPropertiesFromClasses' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'value' => [
        'type' => 'varchar',
        'len' => 150,
        'fieldType' => 'varchar'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'personnelDefinitionsId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'personnelDefinitionsName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'personnelDefinitions',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'personnelPropertiesId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'personnelPropertiesName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'personnelProperties',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'personnelClassesId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'personnelClassesName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'personnelClasses',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'personnelClasses' => [
        'type' => 'belongsTo',
        'entity' => 'PersonnelClasses',
        'key' => 'personnelClassesId',
        'foreignKey' => 'id',
        'foreign' => 'personnelDefinitionsPropertiesFromClasses'
      ],
      'personnelProperties' => [
        'type' => 'belongsTo',
        'entity' => 'PersonnelProperties',
        'key' => 'personnelPropertiesId',
        'foreignKey' => 'id',
        'foreign' => 'personnelDefinitionsPropertiesFromClasses'
      ],
      'personnelDefinitions' => [
        'type' => 'belongsTo',
        'entity' => 'PersonnelDefinitions',
        'key' => 'personnelDefinitionsId',
        'foreignKey' => 'id',
        'foreign' => 'personnelDefinitionsPropertiesFromClasses'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'PersonnelDefinitionsPropertiesFromClasses'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'personnelDefinitionsId' => [
        'type' => 'index',
        'columns' => [
          0 => 'personnelDefinitionsId'
        ],
        'key' => 'IDX_PERSONNEL_DEFINITIONS_ID'
      ],
      'personnelPropertiesId' => [
        'type' => 'index',
        'columns' => [
          0 => 'personnelPropertiesId'
        ],
        'key' => 'IDX_PERSONNEL_PROPERTIES_ID'
      ],
      'personnelClassesId' => [
        'type' => 'index',
        'columns' => [
          0 => 'personnelClassesId'
        ],
        'key' => 'IDX_PERSONNEL_CLASSES_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'PersonnelProperties' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'valueType' => [
        'type' => 'varchar',
        'default' => 'String',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'personnelClassesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'personnelClasses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'personnelClassesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'personnelDefinitionsPropertiesFromClassesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'personnelDefinitionsPropertiesFromClasses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'personnelDefinitionsPropertiesFromClassesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'personnelDefinitionsPropertiesFromClasses' => [
        'type' => 'hasMany',
        'entity' => 'PersonnelDefinitionsPropertiesFromClasses',
        'foreignKey' => 'personnelPropertiesId',
        'foreign' => 'personnelProperties'
      ],
      'personnelClasses' => [
        'type' => 'manyMany',
        'entity' => 'PersonnelClasses',
        'relationName' => 'personnelClassesProperties',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'personnelPropertiesId',
          1 => 'personnelClassesId'
        ],
        'foreign' => 'personnelProperties'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'PersonnelProperties'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'ProcessSegment' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'processSegmentEquipmentItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'processSegmentEquipmentItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'processSegmentEquipmentItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'processSegmentPersonnelItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'processSegmentPersonnelItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'processSegmentPersonnelItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'processSegmentPersonnelItems' => [
        'type' => 'manyMany',
        'entity' => 'ProcessSegmentPersonnelItem',
        'relationName' => 'processSegmentPersonnel',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'processSegmentId',
          1 => 'processSegmentPersonnelItemId'
        ],
        'foreign' => 'processSegments'
      ],
      'processSegmentEquipmentItems' => [
        'type' => 'manyMany',
        'entity' => 'ProcessSegmentEquipmentItem',
        'relationName' => 'processSegmenEquipment',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'processSegmentId',
          1 => 'processSegmentEquipmentItemId'
        ],
        'foreign' => 'processSegments'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'ProcessSegment'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'ASC'
    ]
  ],
  'ProcessSegmentEquipmentItem' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'quantity' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'equipmentClassesId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'equipmentClassesName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'equipmentClasses',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'equipmentDefinitionsId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'equipmentDefinitionsName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'equipmentDefinitions',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'processSegmentsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'processSegments',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'processSegmentsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'processSegments' => [
        'type' => 'manyMany',
        'entity' => 'ProcessSegment',
        'relationName' => 'processSegmenEquipment',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'processSegmentEquipmentItemId',
          1 => 'processSegmentId'
        ],
        'foreign' => 'processSegmentEquipmentItems'
      ],
      'equipmentDefinitions' => [
        'type' => 'belongsTo',
        'entity' => 'EquipmentDefinitions',
        'key' => 'equipmentDefinitionsId',
        'foreignKey' => 'id',
        'foreign' => 'processSegmentEquipmentItems'
      ],
      'equipmentClasses' => [
        'type' => 'belongsTo',
        'entity' => 'EquipmentClasses',
        'key' => 'equipmentClassesId',
        'foreignKey' => 'id',
        'foreign' => 'processSegmentEquipmentItems'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'ProcessSegmentEquipmentItem'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'equipmentClassesId' => [
        'type' => 'index',
        'columns' => [
          0 => 'equipmentClassesId'
        ],
        'key' => 'IDX_EQUIPMENT_CLASSES_ID'
      ],
      'equipmentDefinitionsId' => [
        'type' => 'index',
        'columns' => [
          0 => 'equipmentDefinitionsId'
        ],
        'key' => 'IDX_EQUIPMENT_DEFINITIONS_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'ProcessSegmentMaterialItem' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'quantity' => [
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'materialDefinitionsId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'materialDefinitionsName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'materialDefinitions',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'materialClassesId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'materialClassesName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'materialClasses',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'materialClasses' => [
        'type' => 'belongsTo',
        'entity' => 'MaterialClasses',
        'key' => 'materialClassesId',
        'foreignKey' => 'id',
        'foreign' => 'processSegmentMaterialItems'
      ],
      'materialDefinitions' => [
        'type' => 'belongsTo',
        'entity' => 'MaterialDefinitions',
        'key' => 'materialDefinitionsId',
        'foreignKey' => 'id',
        'foreign' => 'processSegmentMaterialItems'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'ProcessSegmentMaterialItem'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'materialDefinitionsId' => [
        'type' => 'index',
        'columns' => [
          0 => 'materialDefinitionsId'
        ],
        'key' => 'IDX_MATERIAL_DEFINITIONS_ID'
      ],
      'materialClassesId' => [
        'type' => 'index',
        'columns' => [
          0 => 'materialClassesId'
        ],
        'key' => 'IDX_MATERIAL_CLASSES_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'ProcessSegmentPersonnelItem' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'quantity' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'personnelClassesId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'personnelClassesName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'personnelClasses',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'personnelDefinitionsId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'personnelDefinitionsName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'personnelDefinitions',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'processSegmentsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'processSegments',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'processSegmentsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'processSegments' => [
        'type' => 'manyMany',
        'entity' => 'ProcessSegment',
        'relationName' => 'processSegmentPersonnel',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'processSegmentPersonnelItemId',
          1 => 'processSegmentId'
        ],
        'foreign' => 'processSegmentPersonnelItems'
      ],
      'personnelDefinitions' => [
        'type' => 'belongsTo',
        'entity' => 'PersonnelDefinitions',
        'key' => 'personnelDefinitionsId',
        'foreignKey' => 'id',
        'foreign' => 'processSegmentPersonnelItems'
      ],
      'personnelClasses' => [
        'type' => 'belongsTo',
        'entity' => 'PersonnelClasses',
        'key' => 'personnelClassesId',
        'foreignKey' => 'id',
        'foreign' => 'processSegmentPersonnelItems'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'ProcessSegmentPersonnelItem'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'personnelClassesId' => [
        'type' => 'index',
        'columns' => [
          0 => 'personnelClassesId'
        ],
        'key' => 'IDX_PERSONNEL_CLASSES_ID'
      ],
      'personnelDefinitionsId' => [
        'type' => 'index',
        'columns' => [
          0 => 'personnelDefinitionsId'
        ],
        'key' => 'IDX_PERSONNEL_DEFINITIONS_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'ProductDefinitions' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'productSegmentsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'productSegments',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'orderItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'orderItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'orderItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'orderItems' => [
        'type' => 'hasMany',
        'entity' => 'OrderItem',
        'foreignKey' => 'productDefinitionsId',
        'foreign' => 'productDefinitions'
      ],
      'productSegments' => [
        'type' => 'manyMany',
        'entity' => 'ProductSegments',
        'relationName' => 'productSegmentsProductDefinitions',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'productDefinitionsId',
          1 => 'productSegmentsId'
        ],
        'foreign' => 'productDefinitions'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'ProductDefinitions'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'ASC'
    ]
  ],
  'ProductSegmentEquipmentItem' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'quantity' => [
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'equipmentClassesId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'equipmentClassesName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'equipmentClasses',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'equipmentDefinitionsId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'equipmentDefinitionsName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'equipmentDefinitions',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'productSegmentsesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'productSegmentses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentsesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'productSegmentses' => [
        'type' => 'manyMany',
        'entity' => 'ProductSegments',
        'relationName' => 'productSegmentEquipment',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'productSegmentEquipmentItemId',
          1 => 'productSegmentsId'
        ],
        'foreign' => 'productSegmentEquipmentItems'
      ],
      'equipmentDefinitions' => [
        'type' => 'belongsTo',
        'entity' => 'EquipmentDefinitions',
        'key' => 'equipmentDefinitionsId',
        'foreignKey' => 'id',
        'foreign' => 'productSegmentEquipmentItems'
      ],
      'equipmentClasses' => [
        'type' => 'belongsTo',
        'entity' => 'EquipmentClasses',
        'key' => 'equipmentClassesId',
        'foreignKey' => 'id',
        'foreign' => 'productSegmentEquipmentItems'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'ProductSegmentEquipmentItem'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'equipmentClassesId' => [
        'type' => 'index',
        'columns' => [
          0 => 'equipmentClassesId'
        ],
        'key' => 'IDX_EQUIPMENT_CLASSES_ID'
      ],
      'equipmentDefinitionsId' => [
        'type' => 'index',
        'columns' => [
          0 => 'equipmentDefinitionsId'
        ],
        'key' => 'IDX_EQUIPMENT_DEFINITIONS_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'ProductSegmentMaterialItem' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'quantity' => [
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'materialClassesId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'materialClassesName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'materialClasses',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'materialDefinitionsId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'materialDefinitionsName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'materialDefinitions',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'productSegmentsesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'productSegmentses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentsesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'productSegmentses' => [
        'type' => 'manyMany',
        'entity' => 'ProductSegments',
        'relationName' => 'productSegmentMaterial',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'productSegmentMaterialItemId',
          1 => 'productSegmentsId'
        ],
        'foreign' => 'productSegmentMaterialItems'
      ],
      'materialDefinitions' => [
        'type' => 'belongsTo',
        'entity' => 'MaterialDefinitions',
        'key' => 'materialDefinitionsId',
        'foreignKey' => 'id',
        'foreign' => 'productSegmentMaterialItems'
      ],
      'materialClasses' => [
        'type' => 'belongsTo',
        'entity' => 'MaterialClasses',
        'key' => 'materialClassesId',
        'foreignKey' => 'id',
        'foreign' => 'productSegmentMaterialItems'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'ProductSegmentMaterialItem'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'materialClassesId' => [
        'type' => 'index',
        'columns' => [
          0 => 'materialClassesId'
        ],
        'key' => 'IDX_MATERIAL_CLASSES_ID'
      ],
      'materialDefinitionsId' => [
        'type' => 'index',
        'columns' => [
          0 => 'materialDefinitionsId'
        ],
        'key' => 'IDX_MATERIAL_DEFINITIONS_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'ProductSegmentPersonnelItem' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'quantity' => [
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'personnelClassesId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'personnelClassesName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'personnelClasses',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'personnelDefinitionsId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'personnelDefinitionsName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'personnelDefinitions',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'productSegmentsesIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'productSegmentses',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentsesNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'productSegmentses' => [
        'type' => 'manyMany',
        'entity' => 'ProductSegments',
        'relationName' => 'productSegmentPersonnel',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'productSegmentPersonnelItemId',
          1 => 'productSegmentsId'
        ],
        'foreign' => 'productSegmentPersonnelItems'
      ],
      'personnelDefinitions' => [
        'type' => 'belongsTo',
        'entity' => 'PersonnelDefinitions',
        'key' => 'personnelDefinitionsId',
        'foreignKey' => 'id',
        'foreign' => 'productSegmentPersonnelItems'
      ],
      'personnelClasses' => [
        'type' => 'belongsTo',
        'entity' => 'PersonnelClasses',
        'key' => 'personnelClassesId',
        'foreignKey' => 'id',
        'foreign' => 'productSegmentPersonnelItems'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'ProductSegmentPersonnelItem'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'personnelClassesId' => [
        'type' => 'index',
        'columns' => [
          0 => 'personnelClassesId'
        ],
        'key' => 'IDX_PERSONNEL_CLASSES_ID'
      ],
      'personnelDefinitionsId' => [
        'type' => 'index',
        'columns' => [
          0 => 'personnelDefinitionsId'
        ],
        'key' => 'IDX_PERSONNEL_DEFINITIONS_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'ProductSegments' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'duration' => [
        'type' => 'float',
        'notNull' => false,
        'fieldType' => 'float'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'productDefinitionsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'productDefinitions',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productDefinitionsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentEquipmentItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'productSegmentEquipmentItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentEquipmentItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentMaterialItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'productSegmentMaterialItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentMaterialItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentPersonnelItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'productSegmentPersonnelItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productSegmentPersonnelItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'productSegmentPersonnelItems' => [
        'type' => 'manyMany',
        'entity' => 'ProductSegmentPersonnelItem',
        'relationName' => 'productSegmentPersonnel',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'productSegmentsId',
          1 => 'productSegmentPersonnelItemId'
        ],
        'foreign' => 'productSegmentses'
      ],
      'productSegmentMaterialItems' => [
        'type' => 'manyMany',
        'entity' => 'ProductSegmentMaterialItem',
        'relationName' => 'productSegmentMaterial',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'productSegmentsId',
          1 => 'productSegmentMaterialItemId'
        ],
        'foreign' => 'productSegmentses'
      ],
      'productSegmentEquipmentItems' => [
        'type' => 'manyMany',
        'entity' => 'ProductSegmentEquipmentItem',
        'relationName' => 'productSegmentEquipment',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'productSegmentsId',
          1 => 'productSegmentEquipmentItemId'
        ],
        'foreign' => 'productSegmentses'
      ],
      'productDefinitions' => [
        'type' => 'manyMany',
        'entity' => 'ProductDefinitions',
        'relationName' => 'productSegmentsProductDefinitions',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => [
          0 => 'productSegmentsId',
          1 => 'productDefinitionsId'
        ],
        'foreign' => 'productSegments'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'ProductSegments'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'system_fullTextSearch' => [
        'columns' => [
          0 => 'name'
        ],
        'flags' => [
          0 => 'fulltext'
        ],
        'key' => 'IDX_SYSTEM_FULL_TEXT_SEARCH'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'fullTextSearchColumnList' => [
      0 => 'name'
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'ASC'
    ]
  ],
  'ProductionPlanning' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'priority' => [
        'type' => 'int',
        'default' => 5,
        'fieldType' => 'int',
        'len' => 11
      ],
      'orderNumber' => [
        'type' => 'varchar',
        'len' => 150,
        'fieldType' => 'varchar'
      ],
      'startDate' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'productionPlanningItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'productionPlanningItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'productionPlanningItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'productionPlanningItems' => [
        'type' => 'hasMany',
        'entity' => 'ProductionPlanningItem',
        'foreignKey' => 'productionPlanningId',
        'foreign' => 'productionPlanning'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'ProductionPlanning'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'ProductionPlanningItem' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'quantity' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'productionPlanningId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'productionPlanningName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'productionPlanning',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'productionPlanning' => [
        'type' => 'belongsTo',
        'entity' => 'ProductionPlanning',
        'key' => 'productionPlanningId',
        'foreignKey' => 'id',
        'foreign' => 'productionPlanningItems'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'ProductionPlanningItem'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'productionPlanningId' => [
        'type' => 'index',
        'columns' => [
          0 => 'productionPlanningId'
        ],
        'key' => 'IDX_PRODUCTION_PLANNING_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'TestovaciEntita' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ]
    ],
    'relations' => [
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'TestovaciEntita'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'Warehouse' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'warehouseItemsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'warehouseItems',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ],
      'warehouseItemsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple',
        'isLinkStub' => false
      ]
    ],
    'relations' => [
      'warehouseItems' => [
        'type' => 'hasMany',
        'entity' => 'WarehouseItem',
        'foreignKey' => 'warehouseId',
        'foreign' => 'warehouse'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'Warehouse'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'WarehouseItem' => [
    'fields' => [
      'id' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'id'
      ],
      'name' => [
        'type' => 'varchar',
        'fieldType' => 'varchar',
        'len' => 255
      ],
      'deleted' => [
        'type' => 'bool',
        'default' => false
      ],
      'description' => [
        'type' => 'text',
        'fieldType' => 'text'
      ],
      'createdAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'modifiedAt' => [
        'type' => 'datetime',
        'notNull' => false,
        'fieldType' => 'datetime'
      ],
      'quantity' => [
        'type' => 'int',
        'fieldType' => 'int',
        'len' => 11
      ],
      'createdById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'createdByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'createdBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'modifiedById' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'modifiedByName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'modifiedBy',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'assignedUserId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'assignedUserName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'assignedUser',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'teamsIds' => [
        'type' => 'jsonArray',
        'notStorable' => true,
        'isLinkMultipleIdList' => true,
        'relation' => 'teams',
        'isUnordered' => true,
        'attributeRole' => 'idList',
        'fieldType' => 'linkMultiple'
      ],
      'teamsNames' => [
        'type' => 'jsonObject',
        'notStorable' => true,
        'isLinkMultipleNameMap' => true,
        'attributeRole' => 'nameMap',
        'fieldType' => 'linkMultiple'
      ],
      'warehouseId' => [
        'dbType' => 'varchar',
        'len' => 24,
        'type' => 'foreignId',
        'index' => true,
        'attributeRole' => 'id',
        'fieldType' => 'link',
        'notNull' => false
      ],
      'warehouseName' => [
        'type' => 'foreign',
        'notStorable' => false,
        'attributeRole' => 'name',
        'fieldType' => 'link',
        'relation' => 'warehouse',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ],
      'componentsId' => [
        'type' => 'foreign',
        'notStorable' => true,
        'attributeRole' => 'id',
        'fieldType' => 'linkOne',
        'relation' => 'components',
        'foreign' => 'id',
        'foreignType' => 'id'
      ],
      'componentsName' => [
        'type' => 'foreign',
        'notStorable' => true,
        'attributeRole' => 'name',
        'fieldType' => 'linkOne',
        'relation' => 'components',
        'foreign' => 'name',
        'foreignType' => 'varchar'
      ]
    ],
    'relations' => [
      'components' => [
        'type' => 'hasOne',
        'entity' => 'Components',
        'foreignKey' => 'warehouseItemId',
        'foreign' => 'warehouseItem'
      ],
      'warehouse' => [
        'type' => 'belongsTo',
        'entity' => 'Warehouse',
        'key' => 'warehouseId',
        'foreignKey' => 'id',
        'foreign' => 'warehouseItems'
      ],
      'teams' => [
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'EntityTeam',
        'midKeys' => [
          0 => 'entityId',
          1 => 'teamId'
        ],
        'conditions' => [
          'entityType' => 'WarehouseItem'
        ],
        'additionalColumns' => [
          'entityType' => [
            'type' => 'varchar',
            'len' => 100
          ]
        ]
      ],
      'assignedUser' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'modifiedBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ],
      'createdBy' => [
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
        'foreign' => NULL
      ]
    ],
    'indexes' => [
      'name' => [
        'columns' => [
          0 => 'name',
          1 => 'deleted'
        ],
        'key' => 'IDX_NAME'
      ],
      'assignedUser' => [
        'columns' => [
          0 => 'assignedUserId',
          1 => 'deleted'
        ],
        'key' => 'IDX_ASSIGNED_USER'
      ],
      'createdById' => [
        'type' => 'index',
        'columns' => [
          0 => 'createdById'
        ],
        'key' => 'IDX_CREATED_BY_ID'
      ],
      'modifiedById' => [
        'type' => 'index',
        'columns' => [
          0 => 'modifiedById'
        ],
        'key' => 'IDX_MODIFIED_BY_ID'
      ],
      'assignedUserId' => [
        'type' => 'index',
        'columns' => [
          0 => 'assignedUserId'
        ],
        'key' => 'IDX_ASSIGNED_USER_ID'
      ],
      'warehouseId' => [
        'type' => 'index',
        'columns' => [
          0 => 'warehouseId'
        ],
        'key' => 'IDX_WAREHOUSE_ID'
      ]
    ],
    'collection' => [
      'orderBy' => 'createdAt',
      'order' => 'DESC'
    ]
  ],
  'EmailEmailAccount' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'emailId' => [
        'type' => 'foreignId'
      ],
      'emailAccountId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'EmailInboundEmail' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'emailId' => [
        'type' => 'foreignId'
      ],
      'inboundEmailId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'EmailEmailAddress' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'emailId' => [
        'type' => 'foreignId'
      ],
      'emailAddressId' => [
        'type' => 'foreignId'
      ],
      'addressType' => [
        'type' => 'varchar'
      ]
    ]
  ],
  'EmailUser' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'emailId' => [
        'type' => 'foreignId'
      ],
      'userId' => [
        'type' => 'foreignId'
      ],
      'isRead' => [
        'type' => 'bool'
      ],
      'isImportant' => [
        'type' => 'bool'
      ],
      'inTrash' => [
        'type' => 'bool'
      ],
      'folderId' => [
        'type' => 'varchar'
      ]
    ]
  ],
  'EntityUser' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'entityId' => [
        'type' => 'foreignId'
      ],
      'userId' => [
        'type' => 'foreignId'
      ],
      'entityType' => [
        'type' => 'varchar'
      ]
    ]
  ],
  'EntityTeam' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'entityId' => [
        'type' => 'foreignId'
      ],
      'teamId' => [
        'type' => 'foreignId'
      ],
      'entityType' => [
        'type' => 'varchar'
      ]
    ]
  ],
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
  ],
  'InboundEmailTeam' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'inboundEmailId' => [
        'type' => 'foreignId'
      ],
      'teamId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'NoteUser' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'noteId' => [
        'type' => 'foreignId'
      ],
      'userId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'NotePortal' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'noteId' => [
        'type' => 'foreignId'
      ],
      'portalId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'NoteTeam' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'noteId' => [
        'type' => 'foreignId'
      ],
      'teamId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'KnowledgeBaseArticlePortal' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'portalId' => [
        'type' => 'foreignId'
      ],
      'knowledgeBaseArticleId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'PortalPortalRole' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'portalId' => [
        'type' => 'foreignId'
      ],
      'portalRoleId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'PortalUser' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'portalId' => [
        'type' => 'foreignId'
      ],
      'userId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'PortalRoleUser' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'portalRoleId' => [
        'type' => 'foreignId'
      ],
      'userId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'RoleTeam' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'roleId' => [
        'type' => 'foreignId'
      ],
      'teamId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'RoleUser' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'roleId' => [
        'type' => 'foreignId'
      ],
      'userId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'SmsPhoneNumber' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'smsId' => [
        'type' => 'foreignId'
      ],
      'phoneNumberId' => [
        'type' => 'foreignId'
      ],
      'addressType' => [
        'type' => 'varchar'
      ]
    ]
  ],
  'TeamUser' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'teamId' => [
        'type' => 'foreignId'
      ],
      'userId' => [
        'type' => 'foreignId'
      ],
      'role' => [
        'type' => 'varchar'
      ]
    ]
  ],
  'EntityEmailAddress' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'entityId' => [
        'type' => 'foreignId'
      ],
      'emailAddressId' => [
        'type' => 'foreignId'
      ],
      'entityType' => [
        'type' => 'varchar'
      ],
      'primary' => [
        'type' => 'bool'
      ]
    ]
  ],
  'EntityPhoneNumber' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'entityId' => [
        'type' => 'foreignId'
      ],
      'phoneNumberId' => [
        'type' => 'foreignId'
      ],
      'entityType' => [
        'type' => 'varchar'
      ],
      'primary' => [
        'type' => 'bool'
      ]
    ]
  ],
  'TargetListUser' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'userId' => [
        'type' => 'foreignId'
      ],
      'targetListId' => [
        'type' => 'foreignId'
      ],
      'optedOut' => [
        'type' => 'bool'
      ]
    ]
  ],
  'AccountPortalUser' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'userId' => [
        'type' => 'foreignId'
      ],
      'accountId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'CallUser' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'userId' => [
        'type' => 'foreignId'
      ],
      'callId' => [
        'type' => 'foreignId'
      ],
      'status' => [
        'type' => 'varchar'
      ]
    ]
  ],
  'MeetingUser' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'userId' => [
        'type' => 'foreignId'
      ],
      'meetingId' => [
        'type' => 'foreignId'
      ],
      'status' => [
        'type' => 'varchar'
      ]
    ]
  ],
  'AccountTargetList' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'accountId' => [
        'type' => 'foreignId'
      ],
      'targetListId' => [
        'type' => 'foreignId'
      ],
      'optedOut' => [
        'type' => 'bool'
      ]
    ]
  ],
  'AccountDocument' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'accountId' => [
        'type' => 'foreignId'
      ],
      'documentId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'AccountContact' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'accountId' => [
        'type' => 'foreignId'
      ],
      'contactId' => [
        'type' => 'foreignId'
      ],
      'role' => [
        'type' => 'varchar'
      ],
      'isInactive' => [
        'type' => 'bool'
      ]
    ]
  ],
  'CallLead' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'callId' => [
        'type' => 'foreignId'
      ],
      'leadId' => [
        'type' => 'foreignId'
      ],
      'status' => [
        'type' => 'varchar'
      ]
    ]
  ],
  'CallContact' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'callId' => [
        'type' => 'foreignId'
      ],
      'contactId' => [
        'type' => 'foreignId'
      ],
      'status' => [
        'type' => 'varchar'
      ]
    ]
  ],
  'CampaignTargetListExcluding' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'campaignId' => [
        'type' => 'foreignId'
      ],
      'targetListId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'CampaignTargetList' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'campaignId' => [
        'type' => 'foreignId'
      ],
      'targetListId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'CaseKnowledgeBaseArticle' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'caseId' => [
        'type' => 'foreignId'
      ],
      'knowledgeBaseArticleId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'CaseContact' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'caseId' => [
        'type' => 'foreignId'
      ],
      'contactId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'ContactDocument' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'contactId' => [
        'type' => 'foreignId'
      ],
      'documentId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'ContactTargetList' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'contactId' => [
        'type' => 'foreignId'
      ],
      'targetListId' => [
        'type' => 'foreignId'
      ],
      'optedOut' => [
        'type' => 'bool'
      ]
    ]
  ],
  'ContactMeeting' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'contactId' => [
        'type' => 'foreignId'
      ],
      'meetingId' => [
        'type' => 'foreignId'
      ],
      'status' => [
        'type' => 'varchar'
      ]
    ]
  ],
  'ContactOpportunity' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'contactId' => [
        'type' => 'foreignId'
      ],
      'opportunityId' => [
        'type' => 'foreignId'
      ],
      'role' => [
        'type' => 'varchar'
      ]
    ]
  ],
  'DocumentLead' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'documentId' => [
        'type' => 'foreignId'
      ],
      'leadId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'DocumentOpportunity' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'documentId' => [
        'type' => 'foreignId'
      ],
      'opportunityId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
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
  ],
  'KnowledgeBaseArticleKnowledgeBaseCategory' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'knowledgeBaseArticleId' => [
        'type' => 'foreignId'
      ],
      'knowledgeBaseCategoryId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
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
  ],
  'LeadTargetList' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'leadId' => [
        'type' => 'foreignId'
      ],
      'targetListId' => [
        'type' => 'foreignId'
      ],
      'optedOut' => [
        'type' => 'bool'
      ]
    ]
  ],
  'LeadMeeting' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'leadId' => [
        'type' => 'foreignId'
      ],
      'meetingId' => [
        'type' => 'foreignId'
      ],
      'status' => [
        'type' => 'varchar'
      ]
    ]
  ],
  'MassEmailTargetListExcluding' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'massEmailId' => [
        'type' => 'foreignId'
      ],
      'targetListId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'MassEmailTargetList' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'massEmailId' => [
        'type' => 'foreignId'
      ],
      'targetListId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'EquipmentClassListEquipmentClassesPropertiesElements' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'equipmentClassesId' => [
        'type' => 'foreignId'
      ],
      'equipmentPropertiesId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'EquipmentClassListEquipmentDefinitionList' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'equipmentClassesId' => [
        'type' => 'foreignId'
      ],
      'equipmentDefinitionsId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'MaterialDefinitionsClasses' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'materialClassesId' => [
        'type' => 'foreignId'
      ],
      'materialDefinitionsId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'MaterialClassesProperties' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'materialClassesId' => [
        'type' => 'foreignId'
      ],
      'materialPropertiesId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'OrderProducts' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'orderItemId' => [
        'type' => 'foreignId'
      ],
      'ordersId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'PersonnelClassesPersonnelDefinitions' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'personnelClassesId' => [
        'type' => 'foreignId'
      ],
      'personnelDefinitionsId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'PersonnelClassesProperties' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'personnelClassesId' => [
        'type' => 'foreignId'
      ],
      'personnelPropertiesId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'ProcessSegmentPersonnel' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'processSegmentId' => [
        'type' => 'foreignId'
      ],
      'processSegmentPersonnelItemId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'ProcessSegmenEquipment' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'processSegmentId' => [
        'type' => 'foreignId'
      ],
      'processSegmentEquipmentItemId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'ProductSegmentsProductDefinitions' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'productDefinitionsId' => [
        'type' => 'foreignId'
      ],
      'productSegmentsId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'ProductSegmentEquipment' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'productSegmentEquipmentItemId' => [
        'type' => 'foreignId'
      ],
      'productSegmentsId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'ProductSegmentMaterial' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'productSegmentMaterialItemId' => [
        'type' => 'foreignId'
      ],
      'productSegmentsId' => [
        'type' => 'foreignId'
      ]
    ]
  ],
  'ProductSegmentPersonnel' => [
    'skipRebuild' => true,
    'fields' => [
      'id' => [
        'type' => 'id',
        'autoincrement' => true,
        'dbType' => 'bigint'
      ],
      'deleted' => [
        'type' => 'bool'
      ],
      'productSegmentPersonnelItemId' => [
        'type' => 'foreignId'
      ],
      'productSegmentsId' => [
        'type' => 'foreignId'
      ]
    ]
  ]
];
