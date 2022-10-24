<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
<script languague="javascript">
        function mostrar() {
            div = document.getElementById('flotante');
            div.style.display = '';
        }

        function cerrar() {
            div = document.getElementById('flotante');
            div.style.display = 'none';
        }
</script>
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
    <h2>Contáctenos - Unidad VIII</h2>
    <div id="form_contac">
        <form action="enviar_consulta.php" method = "POST">
            <input type="text" name="nombre" placeholder="Nombre" class = "input1">
            <input type="text" name="apellido" placeholder="Apellido" class = "input1">
            <input type="email" name="email" placeholder="Correo Electronico" id = "input2">
            <!--<input type="text" name="consulta" placeholder="Por favor escriba su consulta" id = "input3"> -->
            <textarea name="consulta" id="input3" cols="30" rows="10" placeholder="Por favor escriba su consulta"></textarea>
            <button type="submit" id="btn">Enviar</button>
        </form>
    </div>
    <div id="consulta_msjok">
        <?php
            include("conexion.php");
            $ver = mysqli_query($datos_bd, "SELECT * FROM consultas");
            while($listar_cons = mysqli_fetch_assoc($ver)){
        ?><!--mysqli_fetch_assoc asociativo, mysqli_fetch_row indexado -->
        <!-- <p><a href="javascript:mostrar();">Mostrar</a></p>
<div id="flotante" style="display:none;">
     <div id="close"><a href="javascript:cerrar();">cerrar</a></div>
     Este es un div ocultar
</div> -->
        <p><a href="javascript:mostrar();">Mostrar</a></p>  
        <div id="flotante" style="display:none;">
        <div id="close"><a href="javascript:cerrar();">cerrar</a></div>
                <h6><?php echo $listar_cons['id_consulta'],"|" , $listar_cons['nombre'],"|", $listar_cons['apellido'],"|",$listar_cons['email'] ?></h6>
        </div>
        <?php  } ?>

        <?php
        if(isset($_GET['ok_bd'])){
            echo "<p>Consulta Enviada</p>";
        }
        ?>
        </div>
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>