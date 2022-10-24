<?php 
$nombreCliente = $_POST['nombre'];
$apellidoCliente = $_POST['apellido'];
$correoCliente = $_POST['email'];
$consultaCliente = $_POST['consulta'];

include("conexion.php");

mysqli_query($datos_bd, "INSERT INTO consultas VALUES(DEFAULT, '$nombreCliente', '$apellidoCliente','$correoCliente', '$consultaCliente')");

header("Location: contacto.php?ok_bd");
?>