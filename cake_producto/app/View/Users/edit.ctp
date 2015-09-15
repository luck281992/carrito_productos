<html>
<title></title>
<head>
</head>
<body>
	<header>

	    <img src="/img/logobebe.jpg" id="logo">

	</header>
<CENTER><h1>Editar Usuario</h1></CENTER>
<div id="cuerpo">
	<fieldset>
      <?php
echo $this->Form->create('User', array('type' => 'file'));
       ?><legend><?php echo __('registrar Usuario'); ?></legend>
        <?php 
        echo $this->Form->input('email');
        echo $this->Form->input('nombre');
        echo $this->Form->input('direccion');
        echo $this->Form->input('ciudad');
        echo $this->Form->input('estado');
        echo $this->Form->input('telefono');
        echo $this->Form->input('username');
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
<br/>
<?php echo $this->Html->link('regresar a usuario', array('controller'=>'users','action' => 'view'));?>
</body>
</html>