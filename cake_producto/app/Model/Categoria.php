<?php
class Categoria extends AppModel {
       var $name= 'Categoria';
        var $hasMany = array('Producto');
 
    public $validate = array(
        'nomb' => array(
            'rule' => 'notEmpty'
        )      
    );

}

?>