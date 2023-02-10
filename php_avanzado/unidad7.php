<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
        <h2>Agregar producto a la venta</h2>
		<div class="add_class">
        <form action="alta_prod.php" method="POST" id="agregar_prod">
			<input type="text" name="producto" placeholder="Producto" maxlength="30" required>
            <input type="text" name="codigo" placeholder="Codigo del producto" maxlength="10" required>
            <input type="text" name="descripcion" placeholder="Descripción del producto" maxlength="255" required>
            <input type="text" name="precio" placeholder="Precio del producto" maxlength="5,2" required>
            <input type="submit" value="Cargar producto">
        </form>
		</div>
		<?php
			if(isset($_GET['ok_prod'])){
	        echo "<p>producto cargado</p>";
			}
		?>
		<h2>Productos en venta:</h2>
			<?php
				include('clases/base_datos.php');
				include('constante.php');
				$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);

				include('clases/producto.php');
				$prod = new Producto($base);

            $mostrar_productos = $prod->Listar_Productos();
			?>
			<div class="tablas">
			<table>
				<tr>
				<th>Productos</th>
				<th>Codigo</th>
				<th>Descripción</th>
				<th>Precio</th>
				<th></th>
				</tr>
				
					<?php
                    for ($i = 0; $i < count($mostrar_productos); $i++) {?>
				<tr>
					<td><?php echo $mostrar_productos[$i]['producto'] ?></td>
					<td><?php echo $mostrar_productos[$i]['codigo'] ?></td>
					<td><?php echo $mostrar_productos[$i]['descripcion'] ?></td>
					<td><?php echo $mostrar_productos[$i]['precio'] ?></td>
					<td><a href="alta_comp.php?codigo=<?php echo $mostrar_productos[$i]['codigo'];?>">comprar</a></td>
				</tr>
					<?php }?>
					<?php
					if(isset($_GET['ok_comp'])){
					echo "<p>compra realizada</p>";
					}
				?>
			</table></div>
		<h2>Compras</h2>

		<?php 
			include('clases/carrito.php');
			$compra = new Compra($base);

			$mostrar_compra = $compra->listarCompras();
		?>
<div class="tablas">
			<table>
				<thead>Lista de compra</thead>
				<tr>
				<th>ID Compra</th>
				<th>Productos</th>
				<th>Codigo</th>
				<th>Descripción</th>
				<th>Precio</th>
				<th></th>
				</tr>
				<?php
                    for ($i = 0; $i < count($mostrar_compra ); $i++) {?>
				<tr>
					<td><?php echo $mostrar_compra [$i]['id_compra'] ?></td>
					<td><?php echo $mostrar_compra [$i]['producto'] ?></td>
					<td><?php echo $mostrar_compra [$i]['codigo'] ?></td>
					<td><?php echo $mostrar_compra [$i]['descripcion'] ?></td>
					<td><?php echo $mostrar_compra [$i]['precio'] ?></td>
					<td><a href="eliminar_compra.php?id_compra=<?php echo $mostrar_compra [$i]['id_compra']?>">eliminar</a></td>
				</tr></div>
					<?php }?>
		</table>
	</section>
	<aside>
    </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>