<?php
use Slim\Http\Request;
use Slim\Http\Response;
use Core\Factory\ControllerFactory;

// Router to Home Controller
$app->get('/', function (Request $request, Response $response) { 
    $controller = ControllerFactory::create('Home', $request, $response, $this);
    return $controller->index();
});

// Router to Client Controller
$app->group('/clients', function() use ($app) {
    
    $app->map(['GET', 'POST'], '/add', function (Request $request, Response $response) {
        $controller = ControllerFactory::create('Client', $request, $response, $this);
        return $controller->add();
    });
    
    $app->map(['GET', 'POST'], '/edit/{id:[0-9]+}', function (Request $request, Response $response, array $args) {
        $controller = ControllerFactory::create('Client', $request, $response, $this);
        return $controller->edit($args['id']);        
    });

    $app->get('/', function (Request $request, Response $response){    
        $controller = ControllerFactory::create('Client', $request, $response, $this);
        return $controller->index();
    });
    
    $app->get('/index', function (Request $request, Response $response){    
        $controller = ControllerFactory::create('Client', $request, $response, $this);
        return $controller->index();
    });
    
    $app->post('/delete/{id:[0-9]+}', function (Request $request, Response $response, array $args) {
        $controller = ControllerFactory::create('Client', $request, $response, $this);
        return $controller->delete($args['id']);        
    });    
});

