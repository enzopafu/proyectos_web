<?php
include('conexion.php');
$clave = $_POST['clave'];

$usuario = $_POST['usuario'];

$consulta = mysqli_query($datos_bd, "SELECT clave FROM usuarios WHERE usuario = '$usuario'");

$codificado = mysqli_fetch_assoc($consulta);
$verificar = password_verify($clave, $codificado['clave']);

if($verificar){
    header("Location: unidad8.php?pass_ok");
}else{
    header("Location: unidad8.php?pass_error");
}
?>