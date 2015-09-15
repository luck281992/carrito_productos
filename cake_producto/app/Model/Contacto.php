<?php
class Contacto extends AppModel {
  var $name = 'Contacto'; 
       
                public $validate = array(
       
         'titulo' => array(
            'rule' => 'notEmpty'
        ),
        'comentario' => array(
            'rule' => 'notEmpty'
        ),
        'email' => array(
            'rule' => 'notEmpty'
        )
    );


   public function isOwnedBy($post, $user) {
    return $this->field('id', array('id' => $post, 'user_id' => $user)) === $post;
}
}

?>