<?php
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class User extends AppModel {
        public $name = 'User';

                 public $validate = array(
       
         'email' => array(
            'rule' => 'notEmpty'
        ),
        'nombre' => array(
            'rule' => 'notEmpty'
        ),     
        'direccion' => array(
            'rule' => 'notEmpty'
        ),     
        'ciudad' => array(
            'rule' => 'notEmpty'
        ),
        'estado' => array(
              'rule' => 'notEmpty'
        ),    
        'telefono' => array(
            'rule' => 'notEmpty'
        ),
         'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );                


    public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $passwordHasher = new SimplePasswordHasher();
        $this->data[$this->alias]['password'] = $passwordHasher->hash(
            $this->data[$this->alias]['password']
        );
    }
    return true;
    }
}
?>