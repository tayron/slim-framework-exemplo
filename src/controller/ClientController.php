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
        
        if($this->request->isPost()){
            $name = $this->request->getParam('name');
            $phone = $this->request->getParam('phone');
            
            $client->set('name', $this->request->getParam('name'));
            $client->set('phone', $this->request->getParam('phone'));
            
            $clientTable = TableRegistry::get('Clients');
            
            if($clientTable->save($client)){
                header("Location:  /clients/list");
//                return $this->response->withRedirect('/'); 
            }else{
                echo 'Deu merda';
            }
                
        }       
        
        $this->view->render('/views/client/add.twig', ['client' => $client]);        
    }
}
