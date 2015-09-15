<html>
<title></title>
<head>
</head>
<body>
	<header>

	     <img src="/img/logobebe.jpg" id="logo">


	</header>
<CENTER><h1>Editar</h1></CENTER>
<div id="cuerpo">
      <?php
echo $this->Form->create('Uso', array('action' => 'edit'));
echo $this->Form->input('nombres');
echo $this->Form->input('producto_id');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('modificar Usos');


echo $this->Html->link('regresar a usos', array('action' => 'add'));
?>


</body>
</html>