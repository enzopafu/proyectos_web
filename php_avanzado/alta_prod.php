<?php
include('clases/base_datos.php');
include('clases/producto.php');
include('constante.php');

$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
$prod = new Producto($base);

$prod->InsenterProducto($_POST['producto'], $_POST['codigo'], $_POST['descripcion'], $_POST['precio']);

header("Location: unidad7.php?ok_prod#agregar_prod");

?>