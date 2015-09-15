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
<!-- Script Slider -->
	<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('.box_skitter_large').skitter({
				theme: 'clean',
				numbers_align: 'center',
				progressbar: false, 
				dots: true, 
				preview: false,
				show_randomly: true,
				stop_over: true,
				label: false
			});
		});
	</script>
	
<CENTER>
	<h1>Bienvenido Usuario</h1>
 			<div id="slider">
			<div class="border_box">
			<div class="box_skitter box_skitter_large">
				<ul>
				<li><img src="img/logobebe.jpg" class="cube" /><div class="label_text"><p>Item 1</p></div></li>
                <li><img src="img/logo1.png" class="cubeRandom" /><div class="label_text"><p>Item 2</p></div></li>
                <li><img src="img/logo.jpg" class="block" /><div class="label_text"><p>Item 3</p></div></li>
                <li><img src="img/somos.jpg" class="cubeStop" /><div class="label_text"><p>Item 4</p></div></li>  	
				</ul>
			</div>
		</div>

		<br />

			<div id="servicios2">
				<?php
			     foreach ($productos as $post): ?>
			                <div id="servi2">
			        
			                    <CENTER>
			                    <p><?php echo $post['Producto']['nombre']?></p>
			                    <p><?php echo $post['Producto']['descripcion']?></p>
			                    <p><?php echo $post['Producto']['existencia']?></p>
			                    <p>$<?php echo $post['Producto']['precio']?></p>
			                   
			                   <a href="#"><img id="im" src="/img/uploads/producto/filename/<?php echo $post['Producto']['filename'] ?>" width="200px" heigth="200px" /></a>
			                   </CENTER>   
			                </div>  
			    <?php endforeach;?>
			</div>
  <div id="imgen">
    <a href="" target="_blank"><img src="./img/logo1.png" height="300" width="300"></a>
  </div>
	<div id="contenido1">
		<h4>somos una empresa seria y responsable, trabajamos en equipo para darles
			el mejor producto que la gente pueda tener, tenemos muchos valores en 
			equipo tales como: responsabillidad, respeto, trabajo en equipo, amistad
		   solidaridad </h4>
	</div>

	 
</CENTER>

</body>
</html>

