<?php
namespace Controller;
use Controller\AppController;

class ClientController extends AppController
{
    public function index()
    {
        $statement = $this->database->execute('SELECT * FROM clients');

        $listUsers = array();
        while($row = $statement->fetch('assoc')) {
            array_push($listUsers, $row);
        }
    
        $this->view->render($this->response, '/views/client/index.twig', [
            'clients' => $listUsers
        ]);
    }
}
