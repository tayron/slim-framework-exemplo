<?php
namespace Library;

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

abstract class ApplicationController
{
    /**
     *
     * @var App
     */
    protected $app;
    protected $view;
    protected $database;
    protected $request;
    protected $response;

    public function __construct(App $slim, Request $request, Response $response, $view, $database) 
    {
        $this->app = $slim;
        $this->request = $request;
        $this->response = $response;
        $this->view = $view;
        $this->database = $database;
    }
}