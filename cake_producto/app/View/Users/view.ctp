<html>
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
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
<center>
<table id="table1" border="0px" width="100%">  

    <tr>
      <td>email</td>
      <td>Nombre</td>
      <td>direccion</td>
      <td>ciudad</td>
      <td>estado</td>
      <td>telefono</td>
      <td>username</td>
      <td>password</td>
      <td>status</td>
      <td>role</td>
      <td>borrar</td>
      <td>editar</td>
       
     

    </tr> 
    <?php

     foreach ($users as $post): 
      ?>
                <tr>
                  <td><?php echo $post['User']['email']; ?></td>
                  <td><?php echo $post['User']['nombre']; ?></td>
                  <td><?php echo $post['User']['direccion']; ?></td>
                  <td><?php echo $post['User']['ciudad']; ?></td>
                  <td><?php echo $post['User']['estado']; ?></td>
                  <td><?php echo $post['User']['telefono']; ?></td>
                  <td><?php echo $post['User']['username']; ?></td>
                  <td><?php echo $post['User']['password']; ?></td>
                  <td><?php echo $post['User']['status']; ?></td>
                  <td><?php echo $post['User']['role']; ?></td>
                 
                  <td><?php echo $this->Form->postLink(
                    'borrar',
                    array('action' => 'delete', $post['User']['id']),
                    array('confirm' => 'estas seguro que deseas borrar?'));
                    ?></td>
                  <td><?php echo $this->Html->link('Editar', array('action' => 'edit', $post['User']['id']),array('confirm' => 'estas seguro que deseas editar?'));?></td>
              
                </tr>
    <?php endforeach;
?></table>
</center> 
</body>
</html>