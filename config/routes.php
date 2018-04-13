<?php
use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/', function (Request $request, Response $response) use ($app) {    
    $controller = new \Controller\ClientController($request, $response, $this->get('view'), $this->get('logger'));
    $controller->index();
});

$app->get('/clients', function (Request $request, Response $response) use ($app) {    
    $controller = new \Controller\ClientController($request, $response, $this->get('view'), $this->get('logger'));
    $controller->index();
});