<?php
include('clases/base_datos.php');
include('clases/carrito.php');
include('clases/producto.php');
include('constante.php');

$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
$comp = new Compra($base);

$comp->InsenterCompra( $_POST['producto'], $_POST['codigo'], $_POST['precio'], $_POST['descripcion']);

header("Location: unidad7.php?ok_comp#agregar_comp");

?>