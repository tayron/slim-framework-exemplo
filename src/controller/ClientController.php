<?php
namespace Controller;
use Controller\AppController;
use Cake\ORM\TableRegistry;
use Model\Entity\Client;

class ClientController extends AppController
{
    public function index()
    {
        $clients = TableRegistry::get('Clients');
        $this->view->render('/views/client/index.twig', [
            'clients' => $clients->find()
        ]);
    }
    
    public function add()
    {        
        $client = new Client();
        $success = '';
        $erro = '';        
        
        if($this->request->isPost()){
            $name = $this->request->getParam('name');
            $phone = $this->request->getParam('phone');
            
            $client->set('name', $this->request->getParam('name'));
            $client->set('phone', $this->request->getParam('phone'));
            
            $clientTable = TableRegistry::get('Clients');
            
            try {
                $clientTable->save($client);
                $success = 'Record inserted successfully';
            } catch (\Exception $e) {
                $erro = $e->getMessage();
            }   
        }       
        
        $this->view->render('/views/client/add.twig', [
            'client' => $client,
            'success' => $success,
            'erro' => $erro            
        ]);        
    }
    
    public function edit($id)
    {
        $success = '';
        $erro = '';        
        
        $clients = TableRegistry::get('Clients');
        
        $client = $clients->get($id);

        if($this->request->isPost()){
            $name = $this->request->getParam('name');
            $phone = $this->request->getParam('phone');
            
            $client->set('name', $this->request->getParam('name'));
            $client->set('phone', $this->request->getParam('phone'));
            
            $clientTable = TableRegistry::get('Clients');
            
            try {
                $clientTable->save($client);
                $success = 'Record inserted successfully';
            } catch (\Exception $e) {
                $erro = $e->getMessage();
            }   
        }       
        
        $this->view->render('/views/client/edit.twig', [
            'client' => $client,
            'success' => $success,
            'erro' => $erro            
        ]);          
    }
}
