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
        <legend><?php echo __('registrar Usuario'); ?></legend>
        <?php 
        echo $this->Form->input('email');
        echo $this->Form->input('nombre');
        echo $this->Form->input('direccion');
        echo $this->Form->input('ciudad');
        echo $this->Form->input('estado');
        echo $this->Form->input('telefono');
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</body>
</html>