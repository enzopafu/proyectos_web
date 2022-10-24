<?php
session_start();
$usuario_session = $_POST['usuario'];
$contraseña_session = $_POST['password'];

if($usuario_session=='cliente@gmail.com' && $contraseña_session=='phpintermedio'){
$_SESSION['admin'] = $usuario_session;
header("Location: clientes.php?ok#contenido");
}else{
    header("Location: clientes.php?error_S#contenido");
}
?>