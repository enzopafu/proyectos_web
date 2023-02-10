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
		<h2>Agenda de clases</h2>
		<div class="add_class">
               <form action="insertar_clases.php" method="POST">
                   <input type="text" name="unidad" placeholder="Nombre de la unidad" maxlength="30" required>
                   <input type="date" name="fecha" placeholder="fecha" required>
                   <button type="submit">Enviar</button>
               </form>
           

		<?php if(isset($_GET['ok'])){
			echo "<h3>Clase Agregada</h3>";
		} ?>
		</div>
	</section>
	<aside>
	<div>
    	<?php include('ver_clases.php'); ?>
	</div>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>