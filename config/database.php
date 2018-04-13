<?php
use Cake\Datasource\ConnectionManager;
use Cake\Cache\Engine\FileEngine;
use Cake\Cache\Cache;


$settings = $container->get('settings');
ConnectionManager::setConfig('default', [
	'className' => 'Cake\Database\Connection',
	'driver' => 'Cake\Database\Driver\Mysql',
	'database' => $settings['db']['database'],
	'username' => $settings['db']['username'],
	'password' => $settings['db']['password'],
	'cacheMetadata' => true,
	'quoteIdentifiers' => false,
]);

$cacheConfig = [
   'className' => FileEngine::class,
   'duration' => '+1 year',
   'serialize' => true,
   'prefix'    => 'orm_',
];
Cache::setConfig('_cake_model_', $cacheConfig);