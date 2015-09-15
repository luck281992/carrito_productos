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
echo $this->Form->create('Categoria', array('action' => 'edit'));
echo $this->Form->input('nomb');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('modificar Categoria');

echo $this->Html->link('regresar a categorias', array('action' => 'add'));
?>

</body>
</html>