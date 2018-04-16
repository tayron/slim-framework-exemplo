<?php
use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/', function (Request $request, Response $response) use ($app) {    
    $controller = new \Controller\HomeController(
        $request, 
        $response, 
        $this->get('view'), 
        $this->get('router'), 
        $this->get('logger')
    );
    return $controller->index();
});

$app->get('/clients', function (Request $request, Response $response) use ($app) {    
    $controller = new \Controller\ClientController(
        $request, 
        $response, 
        $this->get('view'),  
        $this->get('router'), 
        $this->get('logger')
    );
    return $controller->index();
});

$app->get('/clients/list', function (Request $request, Response $response) use ($app) {    
    $controller = new \Controller\ClientController(
        $request, 
        $response, 
        $this->get('view'), 
        $this->get('router'), 
        $this->get('logger')
    );
    return $controller->index();
});

$app->get('/clients/add', function (Request $request, Response $response) use ($app) {    
    $controller = new \Controller\ClientController(
        $request, 
        $response, 
        $this->get('view'), 
        $this->get('router'), 
        $this->get('logger')
    );
    return $controller->add();
});

$app->post('/clients/add', function (Request $request, Response $response) use ($app) {    
    $controller = new \Controller\ClientController(
        $request, 
        $response, 
        $this->get('view'), 
        $this->get('router'), 
        $this->get('logger')
    );
    return $controller->add();
});