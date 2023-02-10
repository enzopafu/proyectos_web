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
	<h2>Comentarios</h2>
	<div id="comentario"> 
	<?php
		$leer_comentarios = fopen('comentario.txt', 'r');
		fpassthru($leer_comentarios);
		fclose($leer_comentarios);
	?></div>
	</section>
	<aside>
		<div class="add_class">
		<form action="unidad3.php" method="POST">
			<input type="text" name="nombre" required maxlength="15" placeholder="Nombre de Usuario">
			<input type="email" name="email" required maxlength="50" placeholder="Email">
			<textarea name="comentario" placeholder="comentario" required maxlength="255"></textarea>
			<input type="submit" name="btn" value="Enviar">
		</form></div>
		<?php if($_POST){
			echo "<p>Comentario registrado</p>";
		}
		include("comentarios.php"); ?>
		
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>