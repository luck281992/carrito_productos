<html>
<head>
 <title>
 </title>
</head>
<body>
   <header>

                  <img src="/img/logobebe.jpg" id="logo">

                        <a href="#" title="ver carrito de compras">
                            <img src="/img/carrito.png" id="carrito"></a>
                    </header>

        

<div id="cuerpocarrito">

 <center><h2  id="registro"><a href="">micarrito</a>

 <input type="text" id="carri"   /></h2></center>

 <br>

 <br>
<?php
$genero="";
       if($productos['Producto']['genero']==1){

      $genero="hombre";

     }

     if($productos['Producto']['genero']==2){

      $genero="mujer";

     }

     if($productos['Producto']['genero']==3){

      $genero="unisex";
    
     }
     ?>

	    <div class="producto">

        <a href="#"><img id="im" src="/img/uploads/producto/filename/<?php echo $productos['Producto']['filename'] ?>" width="200px" heigth="200px" /></a>

         </div>  

        <div id="datos">

        <br>

        <p id="s1"><label>sku</label><?php echo $productos['Producto']['sku'];?></p>

        <p id="s1"><label>nombre producto</label><?php echo $productos['Producto']['nombre'];?></p>

        <p id="s1"><label>precio</label><?php echo $productos['Producto']['precio'];?></p>

        <p id="s1"><label>existencia</label><input type="text" disabled value="<?php echo $productos['Producto']['existencia'];?>" /></p>

        <p id="s1"><label>descripcion</label><?php echo $productos['Producto']['descripcion'];?></p>

        <p id="s1"><label>genero</label><?php echo $genero;?></p>

          <?php
        $nomb_categoria="";
          //saco la posicion de categorias para imprimir nomb 
          foreach ($productos as $key => $value) {
            if($key=='Categoria'){
                foreach ($value as $indice => $categoria) {
                   if($indice=='nomb'){
                     $nomb_categoria=$value['nomb'];
                   }
                }
              }
          }

          ?>
        <p id="sm"><label>nombre categoria</label><?php echo $nomb_categoria; ?></p>
        <p><label>Usos</label>
    <?php foreach ($productos as $key => $valor) {
                if ($key =='Uso'){
            foreach ($valor as $indice => $comentario) {
         ?>
           <?php echo $valor[$indice]['nombres'];
           echo ","?>
        <?php 
                  }
              } 
            }

          ?></p>

        <br>

           </div>

  
 <?php echo $this->Html->link('añadir a carrito', array('action' => 'view_carrito'));?> <pre></pre>
 <?php echo $this->Html->link('regresar a catalogos', array('action' => 'view_productos'));?>

  <br>

</div>


</body>

</html>



