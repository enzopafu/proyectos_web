<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
	<h2>Consultas</h2>
	<div class="add_class" id="margin_bottom">
		<form action="cargar.php" method="POST">
			<input type="text" name="nombre" required maxlength="30" placeholder="Nombre: ">
			<input type="text" name="apellido" required maxlength="30" placeholder="Apellido: ">
			<input type="email" name="email" required maxlength="30" placeholder="Email">
			<textarea name="consulta" placeholder="Consulta" required maxlength="255"></textarea>
			<img src="imagen_captcha.php">
			<input type="text" name="clave" required placeholder="Ingrese la clave">
			<input type="submit" name="btn" value="Enviar">
		</form> 
	</div>
	<?php
    function contenido_captcha(){
    $pattern = "1234567890abcdefghijklmnopqrstuvwxyz#$%/";
    $clave ="";

    for($i = 0; $i <8; $i++){
        $clave.=$pattern[rand(0,39)];
    }
    return $clave;
	}
	$_SESSION['captcha'] = contenido_captcha();

	?>
	</section>
	<aside>
	<?php
	 if(isset($_GET['error'])){
			echo "captcha mal ingresado!";
		} elseif(isset($_GET['ok'])){
			echo "consutal enviada!";
		} ?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>