<?php
namespace Controller;

use Controller\AppController;
use Model\Entity\Client;
use Cake\ORM\TableRegistry;
use Cake\Database\Expression\QueryExpression;
use Cake\ORM\Query;


class ClientController extends AppController
{
    public function index()
    {
        $clients = TableRegistry::get('Clients');
        
        $listClients = $clients->find('all')
            ->where(function (QueryExpression $exp, Query $q) {
                $search = $this->request->getQueryParam('search');        
                return $exp->like('name', "%$search%");
        });
            
        $this->view->render('/views/client/index.twig', [
            'clients' => $listClients,
            'success' => $this->request->getQueryParam('success'),
            'error' => $this->request->getQueryParam('error')
        ]);
    }
    
    public function add()
    {        
        $client = new Client();
        $success = '';
        $error = '';  
        $fieldsErros = '';
        
        if($this->request->isPost()){
            try {                
                $clientTable = TableRegistry::get('Clients');
                $client = $clientTable->patchEntity($client, $this->request->getParams());

                if ($client->getErrors()) {
                    $fieldsErros = $client->getErrors();
                    throw new \Exception('Please correct the fields below');
                }
            
                $clientTable->save($client);
                $success = 'Record inserted successfully';
            } catch (\Exception $e) {
                $error = $e->getMessage();
            }   
        }       
        
        $this->view->render('/views/client/add.twig', [
            'client' => $client,
            'success' => $success,
            'error' => $error,
            'fieldsErros' => $fieldsErros            
        ]);        
    }
    
    public function edit($id)
    {
        $success = '';
        $error = '';    
        $fieldsErros = '';
        
        $clientTable = TableRegistry::get('Clients');
        
        $client = $clientTable->get($id);

        if($this->request->isPost()){
            try {
                $client = $clientTable->patchEntity($client, $this->request->getParams());

                if ($client->getErrors()) {
                    $fieldsErros = $client->getErrors();
                    throw new \Exception('Please correct the fields below');
                }
            
                $clientTable->save($client);
                $success = 'Record inserted successfully';
            } catch (\Exception $e) {
                $error = $e->getMessage();
            }   
        }       

        $this->view->render('/views/client/edit.twig', [
            'client' => $client,
            'success' => $success,
            'error' => $error,
            'fieldsErros' => $fieldsErros            
        ]);          
    }
    
    public function delete($id)
    {
        $clients = TableRegistry::get('Clients');        
        
        try {
            $client = $clients->get($id);        
            $clients->delete($client);
            return $this->response->withRedirect('/clients/index?success=Record was deleted successfully');
        } catch (\Exception $e) {
            return $this->response->withRedirect('/clients/index?error=' . $e->getMessage());
        }           
    }    
}
