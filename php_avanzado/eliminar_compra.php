<?php
include('clases/base_datos.php');
include('clases/carrito.php');
include('constante.php');

$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
$comp = new Compra($base);

$comp->eliminarCompra($_GET['id_compra']);

header("Location:unidad7.php");
?>