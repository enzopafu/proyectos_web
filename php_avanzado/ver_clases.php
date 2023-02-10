<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
    <div id="ver_clases")>
    <?php if(isset($_GET['ok'])){
			echo "<h4>Clase Agregada!!!</h4>";
		} ?>
    	<h3>Lista de Clases</h3>
      <a href="ver_clases.php">Ver clases</a>
      <a href="unidad1.php">Volver</a>
    <?php
    include("conexion.php");
    $ver = mysqli_query($datos_bd, "SELECT * FROM clases");
    while($listar_class = mysqli_fetch_assoc($ver)){
    ?>
    <div id="mostrar_clases">
      <p>Clase n°: <?php echo $listar_class['id_clase'] ?> </p>
      <p>Nombre unidad: <?php echo $listar_class['unidad'] ?></p>
      <p>Fecha: <?php echo $listar_class['fecha'] ?></p>
    </div>
      <?php } ?>
      </div>

</body>

</html>
