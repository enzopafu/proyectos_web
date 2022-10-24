<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Programador web con PHP y MySQL</title>
    <link href="estilos.css" rel="stylesheet" />
</head>

<body>
    <section id="contenedor">
        <header>
            <nav id="botonera_principal">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="catalogo.php">Catálogo</a></li>
                    <li><a href="noticias.php">Noticias</a></li>
                    <li><a href="clientes.php">Clientes</a></li>
                    <li><a href="contacto.php">Contáctenos</a></li>
                </ul>
            </nav>
            <div id="marca">
                <h1>Programador Web con PHP y MySQL<br />Nivel Intermedio</h1>
            </div>
        </header>
        <section id="contenido">
            <h2>Unidad IV - Introducción a PHP</h2>
            <div id="uni4_1">
                <?php
                echo "<h2>No te preocupes si no funciona bien. Si todo estuviera correcto, serías despedido de tu trabajo
            -- Ley de Mosher de la Ingeniería del Software</h2>";
                echo "<mark>Primero resuelve el problema. Entonces, escribe el código
            -- John Johnson</mark>";
                echo "<p>Lo mejor de los booleanos es que si te equivocas estás a un sólo bit de la solución correcta
            -- Anónimo</p>";
                ?>
            </div>
            <div id="uni4_2">
                <?php
                echo "<p>EVALUACIÓN</p>";
                echo "<p>INTEGRADORA</p>";
                echo "<p>PHP y MySQL</p>";
                ?>
            </div>
            <div id="uni4_3">
                <?php
                $nombre = 'don pepe';
                $edad = 30;
                $boolean = TRUE;

                echo "<h3> Bienvenido " . $nombre . ".</h3>";
                echo "<p> Edad: " . $edad . ".</p>";
                echo "<h2> Boolean:" . $boolean . ".</h2>";
                ?>
            </div>
            <div id="uni4_4">
                <?php
                $NUMERO1 = 24;
                $NUMERO2 = 4;
                $NUMERO3 = 2;

                echo "<p> El 1° numero es: " . $NUMERO1 . ".</p>";
                echo "<p> El 2° numero es: " . $NUMERO2 . ".</p>";
                echo "<p> El 3° numero es: " . $NUMERO3 . ".</p>";
                echo "<p> Si al primer numero(" . $NUMERO1 . ") le restamos el segundo(" . $NUMERO2 . ") el resultado es: " . ($NUMERO1 - $NUMERO2) . ".</p>";
                echo "<p> Y si al resultado anterio lo dividimos por el tercero(" . $NUMERO3 . ") el resultado es: " . (($NUMERO1 - $NUMERO2) / $NUMERO3) . ".</p>";
                ?>
            </div>
        </section>

        <footer>
            <p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p>
        </footer>
    </section>
</body>

</html>