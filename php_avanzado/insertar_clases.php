    
<?php 
$nombreclase = $_POST['unidad'];
$fecha = $_POST['fecha'];


include("conexion.php");

mysqli_query($datos_bd, "INSERT INTO clases VALUES (DEFAULT, '$nombreclase','$fecha')");

header("Location: ver_clases.php?ok");
?>