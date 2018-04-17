<?php
namespace Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ClientsTable extends Table
{
    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('name', 'create', 'The field name is required')
            ->notEmpty('name', 'The field name can´t be empty');

        $validator
            ->requirePresence('phone', 'create', 'The field phone is required')
            ->notEmpty('phone', 'The field phone can´t be empty');
        
        return $validator;
    }    
}
