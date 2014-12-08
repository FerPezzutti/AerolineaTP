<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all">
<link rel="shortcut icon" href="images/favicon.ico">
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jqueryui.js"></script>
<script type="text/javascript" src="js/validaciones.js"></script>

<!-- Supersized slider background -->
<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>
<script type="text/javascript">
	jQuery(function($){
		$.supersized({
			// Functionality
			slide_interval          :   3000,		// Length between transitions
			transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
			transition_speed		:	700,		// Speed of transition
												   
			// Components							
			slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
			slides 					:  	[			// Slideshow Images
												{image : 'images/bg_img1.jpg'},  
												{image : 'images/bg_img2.jpg'}, 
												{image : 'images/bg_img3.jpg'},
												{image : 'images/bg_img4.jpg'}, 
												{image : 'images/bg_img5.jpg'}, 
												{image : 'images/bg_img6.jpg'},  
										]
		});
    });
</script>
<!-- END Supersized -->
<script>
$(function() {
$( ".datepicker" ).datepicker();
});
</script>
<title>Aerolinea Universitaria</title>	
</head>
<body>
	<div id="header">
		<div class="wrapper">
			<a href="index.php"><div id="logo"></div></a>
			<div class="navbar">
				<ul id="menu">
					<li id="menu_active"><a href="index.php">Home</a></li>
					<li><a href="flota.html">Nuestra Flota</a></li>
					<li><a href="destinos.html">Destinos</a></li>
					<li><a href="checkinn.php">Check inn</a></li>
					<li><a href="contacto.html">Contacto</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="wrapper">
		<div id="formlista">
			<div id="formdatos">
				<form name="datosusuario" action="reserva_fin.php" method="post" id="datosusuario" onSubmit="return validar_datos()">
					<?php
						$id_vuelo = $_POST['id_vuelo'];
						$id_categorias = $_POST['id_categorias'];
						$idaovuelta = $_POST['idaovuelta'];
						$fechaida = $_POST['fechaida'];
						$fechavuelta = $_POST['fechavuelta'];
					?>
					<label>Nombre y apellido:</label>
					<input type="text" name="nombre" id="nombre"/>
					<br/><br/>
					<label>Numero de documento:</label>
					<input type="text" name="dni" id="dni"/>
					<br/><br/>
					<label>Fecha de Nacimiento:</label>
					<input type="text" class="datepicker" name="fecha" class="fecha" id="fecha" />
					<br/><br/>
					<label>Correo electronico:</label>
					<input type="text" name="correo" id="correo"/>
					<input type="hidden" id="id_vuelo" name="id_vuelo" value="<?= $id_vuelo ?>" />
					<input type="hidden" id="id_categorias" name="id_categorias" value="<?= $id_categorias ?>" />
					<input type="hidden" id="idaovuelta" name="idaovuelta" value="<?= $idaovuelta ?>" />
					<input type="hidden" id="categoria" name="categoria" value="<?= $categoria ?>" />
					<input type="hidden" id="fechaida" name="fechaida" value="<?= $fechaida ?>" />
					<input type="hidden" id="fechavuelta" name="fechavuelta" value="<?= $fechavuelta ?>" />
					<input type="submit" value="Reservar" id="botonreserva" />
				</form>
			</div>
		</div>
	</div>
</body>
</html>