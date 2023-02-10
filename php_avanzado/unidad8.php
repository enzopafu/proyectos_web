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
		<h2>Registro</h2>
	<div class="add_class">
		<form action="codificar.php" method="post">
			<label for="usuario">Usuario</label>  
			<input type="text" name="usuario" placeholder="Usuario" required>
			<label for="password">Contraseña</label>
			<input type="password" name="password" placeholder="Contraseña" required>
			<input type="submit" value="Registrar">
		</form>
	</div>
		<?php if(isset($_GET['reg_ok'])){
	        echo "<h3>Usuario creado</h3>";
			}?>
	</section>
	<aside>
		<h2>Iniciar Sesión</h2>
		<div class="add_class">
		<form action="verificar.php" method="post">
		<label for="usuario">Usuario</label> 
		<input type="text" name="usuario" placeholder="Usuario" required>
		<label for="password">Contraseña</label>
		<input type="password" name="clave" placeholder="Contraseña" required>
		<input type="submit" value="Ingresar">
		</form>
		</div>
		<?php if(isset($_GET['pass_ok'])) { echo "<h3>Usuario Verificado</h3>";}?>
		<?php if(isset($_GET['pass_error'])) { echo "<h3>Usuario inexistente/Contraseña incorrecta</h3>";}?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>