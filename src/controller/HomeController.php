<?php
namespace Controller;

use Controller\AppController;

class HomeController extends AppController
{
    public function index()
    {
        $this->view->render('/views/home/index.twig');
    }
}
