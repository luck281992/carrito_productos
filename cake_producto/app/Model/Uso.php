<?php
class Uso extends AppModel {
       var $name= 'Uso';
        var $belongsTo =array('Producto');
 
    public $validate = array(
        'nombres' => array(
            'rule' => 'notEmpty'
        ),
         'producto_id' => array(
            'rule' => 'notEmpty'
        )      
    );

}

?>