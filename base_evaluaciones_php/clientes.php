<?php session_start(); ?>
<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Clientes - Unidad VII</h2>
        <h4>Inicio de sesion</h4>
        <div id="formulario">
        <form action="validar_cliente.php" method = "POST">
            <input type="email" name="usuario" placeholder="Usuario/Correo">
            <input type="password" name="password" placeholder="Contraseña">
            <!--<input type="submit" value="Ingresar">-->
            <button type="submit" id="btn">Ingresar</button>
        </form></div>
        <?php if(isset($_SESSION['admin'])){ ?>
            <?php include('contenido_clientes.php'); ?>
        <?php }elseif (isset($_GET['error_S'])){ ?>
            <?php echo "<h5>Error al ingresar usuario/contraseña</h5>" ?>
        <?php }?>
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>