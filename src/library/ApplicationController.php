<?php
namespace Library;

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Twig;
use Monolog\Logger;

abstract class ApplicationController
{
    /**
     * @var App
     */
    protected $app;
    /**
     * @var Twig
     */    
    protected $view;
    /**
     * @var Request
     */    
    protected $request;
    /**
     * @var Response
     */     
    protected $response;
    
    /**
     * @var Logger
     */
    protected $logger;

    public function __construct(App $slim, Request $request, Response $response, Twig $view, Logger $logger) 
    {
        $this->app = $slim;
        $this->request = $request;
        $this->response = $response;
        $this->view = $view;
        $this->logger = $logger;
    }
}