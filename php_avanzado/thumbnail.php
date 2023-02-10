<?php 

$imagen_principal = "imagenes/unidad4.jpg";
$ext = substr($imagen_principal, -3);
$ext = strtolower($ext);

switch ($ext){
    case 'gif':
        $img = imagecreatefromgif($imagen_principal);
        break;

      case 'png':
             $img = imagecreatefrompng($imagen_principal);
             break;

      case 'jpg':
               $img = imagecreatefromjpeg($imagen_principal);
             break;

      default:
        //code..
         break;
 }

$alto = 150;
$ancho = 150;
$dst_img = imagecreatetruecolor($ancho,$alto);
$imagen = imagecreate($ancho,$alto);
imagecopyresized($dst_img,$img,0,0,0,0,$ancho,$alto,imagesx($img),imagesy($img));
imagejpeg($dst_img, "imagenes/unidad4_thumb.jpg");
imagedestroy($dst_img);
?>