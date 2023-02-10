<?php 
session_start();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$clave = $_POST['clave'];
$consulta = $_POST['consulta'];

include("conexion.php");

if($clave == $_SESSION['captcha']){
    mysqli_query($datos_bd, "INSERT INTO consultas VALUES ( '$nombre','$apellido', '$email', '$consulta')");
    header("Location: unidad5.php?ok");
}else{
    header("Location: unidad5.php?error");
}
?>