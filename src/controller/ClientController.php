<?php
namespace Controller;
use Controller\AppController;
use Cake\ORM\TableRegistry;

class ClientController extends AppController
{
    public function index()
    {
        $clients = TableRegistry::get('Clients');
        $query = $clients->find();
    
        $this->view->render($this->response, '/views/client/index.twig', [
            'clients' => $clients->find()
        ]);
    }
}