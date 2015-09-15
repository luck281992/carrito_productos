<html>
<head>
<title></title>
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
<div id="cuerpo">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('nueva contraseña'); ?></legend>
        <?php 
        echo $this->Form->input('email');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Generar password')); ?>
</div>
</body>
</html>