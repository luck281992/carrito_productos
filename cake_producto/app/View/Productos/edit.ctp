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
echo $this->Form->input('filename', array('type' => 'file'));
echo $this->Form->input('categoria_id');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Guardar Producto');

echo $this->Html->link('regresar a productos', array('action' => 'add'));

?>

</body>
</html>