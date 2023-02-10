
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
<?php
include('clases/base_datos.php');
include('clases/carrito.php');
include('clases/producto.php');
include('constante.php');

$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
$comp = new Producto($base);

$comprar = $comp->seleccionarProducto($_GET['codigo']);
?>
<div class="add_class">
  <form action="comp_ok.php" method="POST" id="agregar_prod">
			      <input type="text" name="producto" value="<?php echo $comprar[0]['producto']; ?>" maxlength="30" readonly>
            <input type="text" name="codigo" value="<?php echo $comprar[0]['codigo']; ?>" maxlength="10" readonly>
            <input type="text" name="descripcion" value="<?php echo $comprar[0]['descripcion']; ?>" maxlength="255" readonly>
            <input type="text" name="precio" value="<?php echo $comprar[0]['precio']; ?>" maxlength="5,2" readonly>
            <input type="submit" value="Confirmar compra">
        </form>
</div>
</body>