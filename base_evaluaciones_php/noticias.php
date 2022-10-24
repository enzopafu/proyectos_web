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
    <h2>Noticias - Unidad VI</h2>
    <div class = "caja_noticia">
    <?php 
        $noti = array(
            array('titulo' => 'Caso Cristina', 'parrafo' => 'La Justicia determinó que el plan para intentar matar a Cristina Kirchner arrancó en abril. El plan criminal que diseñaron Fernando Sabag Montiel y Brenda Uliarte fue uno de los capítulos del procesamiento firmado por la jueza federal María Eugenia Capuchetti en el que los acusó por el delito de homicidio calificado, agravado por el empleo de armas de fuego, alevosía, premeditación en grado de tentativa. ', 'imagen' => 'imagen1.jpg'),
            array('titulo' => 'Argentina Campeon de tango', 'parrafo' => 'Ante las miradas vigilantes del Obelisco y de una multitud, se realizó este sábado la gala de las finales de la 19° edición del Mundial de Baile de Tango. Una competencia protagonizada por 55 parejas dispuestas a quedarse con el título de campeones en la categoría de Tango de Pista, en la de Tango Escenario o en ambas.
            ', 'imagen' => 'imagen2.jpg'),
            array('titulo' => 'Basta de humo', 'parrafo' => 'Miles de personas se convocaron esta tarde en la cabecera del puente que une las ciudades de Rosario y Victoria (Entre Ríos) para pedir que cesen las quemas en las islas del Delta del río Paraná, que desde principios de 2020 hasta ahora ya se devoraron un millón de hectáreas, cerca de la mitad de la superficie de este valioso ecosistema, afectando gravemente al ambiente y generando problemas severos de salud pública.', 'imagen' => 'imagen3.jpg'),
            array('titulo' => 'Indignación Britanica', 'parrafo' => 'El presidente de Franciay Brigitte habían pedido movilizarse en Londres “por su cuenta”. Alguien los fotografió el 18 de septiembre yendo a Westminster, caminando entre la gente, vestidos “de incógnito” con anteojos negros, look casual y zapatillas. Redes y medios se hicieron eco de la “vergüenza diplomática”.', 'imagen' => 'imagen4.jpg'),
        );
    for ($i=0; $i<count($noti); $i++){
    ?>

    <div id = "_4noticias">
        <img src="imagenes/<?php echo $noti [$i] ['imagen']; ?>" alt="">
        <h3> <?php echo $noti [$i] ['titulo'] ?> </h3>
        <p id = "parrafo_noti"> <?php echo $noti [$i] ['parrafo'] ?>  </p>
    </div>

   <?php } ?>
</div>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>