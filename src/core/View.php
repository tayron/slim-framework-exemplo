<?php
namespace Core;

use Slim\Views\Twig;
use Slim\Http\Response;

class View 
{
    /**
     *
     * @var Twig
     */
    private $template;
    
    /**
     *
     * @var Response
     */
    private $response;
    
    public function __construct(Twig $template)
    {
        $this->template = $template;
    }
    
    public function setResponse(Response $response)
    {
        $this->response = $response;
    }
    
    public function render($template, array $data = array())
    {
        $this->template->render($this->response, $template, $data);
    }
}
