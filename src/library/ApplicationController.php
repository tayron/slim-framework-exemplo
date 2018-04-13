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

    public function __construct(Request $request, Response $response, Twig $view, Logger $logger) 
    {
        $this->request = $request;
        $this->response = $response;
        $this->view = $view;
        $this->logger = $logger;
    }
}