<?php
return [
  'database' => [
    'driver' => 'pdo_mysql',
    'host' => '147.229.76.45',
    'port' => '3306',
    'charset' => 'utf8mb4',
    'dbname' => 'mes',
    'user' => 'martinik',
    'password' => 'martinik331206'
  ],
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'DEBUG',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false
  ],
  'restrictedMode' => false,
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'isInstalled' => true,
  'microtimeInternal' => 1679058382.961154,
  'passwordSalt' => 'd3ebc0e98664fc52',
  'cryptKey' => '41332dbea83926831db2b5def296f707',
  'hashSecretKey' => '9bade94b8fe2623d91ef27f39afa31c5',
  'actualDatabaseType' => 'mysql',
  'actualDatabaseVersion' => '8.0.28'
];
