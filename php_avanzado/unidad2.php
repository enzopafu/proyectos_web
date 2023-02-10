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
	
		<h2>Eventos</h2>
		<?php
	include("calculo_fecha.php");
		?>
	</section>
	<aside>
	<form action="unidad2.php" method="POST">
			<input type="number" name="dia" placeholder="Dia" required max="31" min="1">
			<input type="number" name="mes" placeholder="Mes" required max="12" min="1">
			<input type="number" name="anio" placeholder="Año" required max="2970" min="2000">
			<input type="submit" name="calcular" value="Calcular">
		</form>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>