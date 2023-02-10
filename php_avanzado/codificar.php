<?php
$password = password_hash($_POST['password'], PASSWORD_DEFAULT, array('cost' => 4));

$usuario = $_POST['usuario'];
include('conexion.php');

mysqli_query($datos_bd, "INSERT INTO usuarios VALUE ('$usuario', '$password') ");

header("Location: unidad8.php?reg_ok");
?>