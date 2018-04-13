<?php
namespace Controller;
use Controller\AppController;
use Cake\ORM\TableRegistry;

class ClientController extends AppController
{
    public function index()
    {
        $clients = TableRegistry::get('Clients');
        $this->view->render($this->response, '/views/client/index.twig', [
            'clients' => $clients->find()
        ]);
    }
    
    public function add()
    {
        $this->view->render($this->response, '/views/client/add.twig');        
    }
}
