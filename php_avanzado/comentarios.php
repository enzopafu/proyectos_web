
<?php
if($_POST){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fecha = date('d-m-Y   H:i:s');
    $contenido = "<p>".$nombre."</p><p> Email: ".$email."</p><h5>Comentario: </h5><p>".$comentario."</p><h6>".$fecha."</h6><hr/>";
    $file = fopen('comentario.txt','a+') or die("Error");
    fputs($file,$contenido);
    fclose($file);
    header("Location: unidad3.php");
  }
?>