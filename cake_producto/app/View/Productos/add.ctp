<html>
<title></title>
<head>
</head>
<body>
	<header>

	    <img src="../img/logobebe.jpg" id="logo">

	</header>
    <nav class="menu2">

                      <menu>

                        <li><a href="/admin" class="">admin</a></li>

                        <li><a href="/Productos" class="">Productos</a></li>

                        <li><a href="/Categorias" class="">Categorias</a></li>

                        <li><a href="/Usos" class="">Usos</a></li>
                        <li><a href="/usuario" class="">Usuarios</a></li>

                        <li><a href="/logout" class="">logout</a></li>


                      </menu>

                    </nav>

<div id="cuerpo">
 
<legend>Nuevo Producto</legend>

<?php
echo $this->Form->create('Producto', array('type' => 'file'));
echo $this->Form->input('sku');
echo $this->Form->input('nombre');
echo $this->Form->input('descripcion', array('rows' => '3'));
echo $this->Form->input('existencia');
echo $this->Form->input('precio');
echo $this->Form->input('status', array(
            'options' => array('1' => 'no activo', '2' => 'activo')
        ));
echo $this->Form->input('genero', array(
            'options' => array('1' => 'hombre', '2' => 'mujer', '3'=>'unisex')
        ));
echo $this->Form->input('filename',array('type' => 'file'));
echo $this->Form->input('categoria_id');
echo $this->Form->end('Guardar Producto');

?>
  <table id="table1" border="0px" width="100%">  

    <tr>
 
      <td>sku</td>
      <td>Nombre</td>
      <td>descripcion</td>
      <td>exstencia</td>
      <td>precio</td>
      <td>status</td>
      <td>genero</td>
      <td>editar</td>
      <td>borrar</td>
       
     

    </tr> 
    <?php

     foreach ($productos as $post): 
   
         

        $genero=$post['Producto']['genero'];
        $status=$post['Producto']['status'];
         if($genero==1){
            $genero="hombre";
         }
         if($genero==2){
            $genero="mujer";
         }
         if($genero==3){
            $genero="unisex";
         }
         if($status==1){
            $status="inactivo";
         }
         if($status==2){
            $status="activo";
         }
      ?>
                <tr>
                  <td><?php echo $post['Producto']['sku']; ?></td>
                  <td><?php echo $post['Producto']['nombre']; ?></td>
                  <td><?php echo $post['Producto']['descripcion']; ?></td>
                  <td><?php echo $post['Producto']['existencia']; ?></td>
                  <td><?php echo $post['Producto']['precio']; ?></td>
                  <td><?php echo $status; ?></td>
                  <td><?php echo $genero; ?></td>
                  <td><?php echo $this->Form->postLink(
                    'borrar',
                    array('action' => 'delete', $post['Producto']['id']),
                    array('confirm' => 'estas seguro que deseas borrar?'));
                    ?></td>
                  <td><?php echo $this->Html->link('Editar', array('action' => 'edit', $post['Producto']['id']),array('confirm' => 'estas seguro que deseas editar?'));?></td>
              
                </tr>
    <?php endforeach;
?></table> 

</div>
</body>
</html>