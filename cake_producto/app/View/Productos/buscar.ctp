<html>
<title></title>
<head>
</head>
<body>
   <header>

          <img src="../img/logobebe.jpg" id="logo">

            <a href="#" title="ver carrito de compras">
              <img src="./img/carrito.png" id="carrito"></a>
          </header>

          <nav class="menu2">
          <menu>
          <li><a href="./clientes" class="">Inicio</a></li>
          <li><a href="./conocenos" class="">conocenos</a></li>
          <li><a href="./localizanos" class="">localizanos</a></li>
          <li><a href="./contactanos" class="">contactanos</a></li>
            <li><a href="./catalogo" class="">catalogo</a></li>
            <li><a href="./login" class="">login</a></li>
            <li><a href="/logout" class="">logout</a></li>
          </menu>
        </nav>

<div id="cuerpo1">
<?php $paginator=$this->Paginator;

echo $this->Form->create('Producto', array('action' => 'buscar'));
echo $this->Form->input('nombre');
echo $this->Form->end('buscar producto');

?>

<center><h1 id="center">Catalogo completo de productos</h1></center>
  <table id="table1" border="0px" width="100%">  

    <tr>

      <td>imagen</td>
      <td>sku</td>
      <td>Nombre</td>
      <td>Precio</td>
      <td>Detalle</td>

    </tr> 
    <?php

     foreach ($productos as $post): ?>
                <tr>
                  <td>
                  <?php
                  echo  $this->Html->link($this->Html->image("/img/uploads/producto/filename/".$post['Producto']['filename'], array( "alt"  => "productos", "width"=>"150", "height"=>"150")), array('action' => 'detalle_producto', $post['Producto']['id']), array('escape' =>  false ));?></td>
           
                   <td>
              <?php echo $this->Html->link($post['Producto']['sku'], array('action' => 'detalle_producto', $post['Producto']['id']));?></td>
                     <td>
              <?php echo $this->Html->link($post['Producto']['nombre'], array('action' => 'detalle_producto', $post['Producto']['id']));?></td>
                     <td>
              <?php echo $this->Html->link("$".$post['Producto']['precio'], array('action' => 'detalle_producto', $post['Producto']['id']));?></td>
                <td>
                <?php echo $this->Html->link('Ver mas', array('action' => 'detalle_producto', $post['Producto']['id']));?></td>
              
                </tr>
    <?php endforeach;
?></table> 
  <?php  // pagination section
    echo "<div class='paging'>";

        echo $paginator->first("Primera");

        if($paginator->hasPrev()){
            echo $paginator->prev("Anterior");
        }
        
        // the 'number' page buttons
        echo $paginator->numbers(array('modulus' => 2));
        
        // for the 'next' button
        if($paginator->hasNext()){
            echo $paginator->next("Siguiente");
        }
        
        // the 'last' page button
        echo $paginator->last("Ultima");
    
    echo "</div>";
    
?>
</div>
</body>
</html>