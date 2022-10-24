<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Catálogo - Unidad V</h2>
    <nav id="unidad5">
        <ul>
            <li><a href="catalogo.php?idproducto=sillon#contenido">Sillón Capri</a></li>
            <li><a href="catalogo.php?idproducto=mesa#contenido">Mesa Ipanema</a></li>
            <li><a href="catalogo.php?idproducto=banco#contenido">Banco Venecia</a></li>
        </ul>
    </nav>
    <?php
    if($_GET){
        switch($_GET['idproducto']){
            case 'sillon':
                $producto = 'Sillón Capri';
                $precio = '$ 345.00';
                $caracteristicas = ' Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.';
                $imagen = 'sillon.jpg';
            break;

            case 'mesa':
                $producto = 'Mesa Ipanema';
                $precio = '$ 500.00';
                $caracteristicas = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
                $imagen = 'mesa.jpg';
                break;

            case 'banco':
                $producto = 'Banco Venecia';
                $precio = '$ 450.00';
                $caracteristicas = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
                $imagen = 'banco.jpg';
            break;
        default; 
            }    
    }
    ?>
   <div id="venta">
        <?php
        if($_GET) {
            ?>
        <article id="txt_img">
            <h4><?php echo "<h3>Producto: ".$producto ?></h4>
            <p><?php echo "Precio: ".$precio ?></p>
            <p><?php echo "Descripción: ".$caracteristicas ?></p>
        </article>
        <div id="vnt_img">
            <img src="imagenes/<?php echo $imagen ?>" alt="">
        </div>
        <?php } ?>
   </div>
    </section>
<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>