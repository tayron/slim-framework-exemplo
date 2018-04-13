<?php
use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/', function (Request $request, Response $response) use ($app) {
    $controller = new \Controller\ClientController($app, $request, $response, $this->get('view'));
    $controller->index();
});