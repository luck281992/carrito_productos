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
  <?php
  
echo $this->Form->create('Categoria', array('action' => 'add'));
echo $this->Form->input('nomb');
echo $this->Form->end('Guardar categoria');
?>
 <table id="table1" border="0px" width="100%">  

    <tr>

      <td>Nombre</td>
      <td>editar</td>
      <td>borrar</td>
       
     

    </tr> 
    <?php

     foreach ($categorias as $post): 
   
      ?>
                <tr>
                  <td><?php echo $post['Categoria']['nomb']; ?></td>
                  
                  <td><?php echo $this->Form->postLink(
                    'borrar',
                    array('action' => 'delete', $post['Categoria']['id']),
                    array('confirm' => 'estas seguro que deseas borrar?'));
                    ?></td>
                  <td><?php echo $this->Html->link('Editar', array('action' => 'edit', $post['Categoria']['id']),array('confirm' => 'estas seguro que deseas editar?'));?></td>
              
                </tr>
    <?php endforeach;
?></table> 

</div>
</body>
</html>