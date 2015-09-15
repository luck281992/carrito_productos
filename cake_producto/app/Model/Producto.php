<?php
class Producto extends AppModel {
  var $name = 'Producto'; 
        //para subir imagen 
        var $actsAs = array(
        'MeioUpload' => array('filename')
         );

        //relacion pertenece a categorias
        var $belongsTo =array('Categoria');
        // tiene muchos usos
        var $hasMany = array('Uso');

          public $validate = array(
       
         'sku' => array(
            'rule' => 'notEmpty'
        ),
        'nombre' => array(
            'rule' => 'notEmpty'
        ),     
        'descripcion' => array(
            'rule' => 'notEmpty'
        ),     
        'existencia' => array(
            'rule' => 'notEmpty'
        ),
        'precio' => array(
            'rule' => array('decimal',2),
            'message' => 'favor de poner precio, de 2 decimales'
            
        ),     
        'destacados' => array(
            'rule' => 'notEmpty'
        ),    
        'status' => array(
            'rule' => 'notEmpty'
        ),     
        'genero' => array(
            'rule' => 'notEmpty'
        ),    
        'filename' => array(
            'rule' => 'notEmpty'
        ),
        'uso_id' => array(
            'rule' => 'notEmpty'
        ),
        'categoria_id' => array(
            'rule' => 'notEmpty'
        )             
    );


   public function isOwnedBy($post, $user) {
    return $this->field('id', array('id' => $post, 'user_id' => $user)) === $post;
}
}

?>