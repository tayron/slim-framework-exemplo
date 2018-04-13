<?php

$settings = [];

// Database settings
$settings['db']['host'] = '127.0.0.1';
$settings['db']['username'] = 'root';
$settings['db']['password'] = '123456';
$settings['db']['database'] = 'slim';

// Slim settings
$settings['displayErrorDetails'] = true;
$settings['determineRouteBeforeAppMiddleware'] = true;

// Path settings
$settings['root'] = dirname(__DIR__);
$settings['temp'] = $settings['root'] . '/tmp';
$settings['public'] = $settings['root'] . '/public';

// General
$settings['timezone'] = 'America/Sao_Paulo';

// Logger settings
$settings['logger']['name'] = 'Application Error';
$settings['logger']['file'] = $settings['root'] . '/log/error.log';
$settings['logger']['level'] = 400;

// View settings
$settings['twig'] = [
    'path' => $settings['root'] . '/templates',
    'cache_enabled' =>false,
    'cache_path' =>  $settings['temp'] . '/twig-cache'
];

return $settings;