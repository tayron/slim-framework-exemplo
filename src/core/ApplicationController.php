<?php
namespace Core;

use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Router;

use Core\Logger;
use Core\View;

abstract class ApplicationController
{
    /**
     * @var Request
     */    
    protected $request;
    /**
     * @var Response
     */     
    protected $response;
    
    /**
     * @var View
     */    
    protected $view;

    /**
     * @var Router
     */    
    protected $router;
    
    /**
     * @var Logger
     */
    protected $logger;

    public function __construct(Request $request, Response $response, View $view, Router $router, Logger $logger) 
    {
        $this->request = $request;
        $this->response = $response;
        $this->view = $view;
        $this->logger = $logger;
        $this->router = $router;
        
        $this->view->setResponse($response);
    }
}