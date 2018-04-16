<?php
namespace Core\Factory;

use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

class ControllerFactory 
{
    static function create($name, Request $request, Response $response, Container $container)
    {
        $controller = "Controller\\" . $name . "Controller";
        
        return new $controller(
            $request, 
            $response, 
            $container->get('view'),
            $container->get('router'),
            $container->get('logger')
        );
    }
}
