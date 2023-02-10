<?php 

$imagen_principal = "imagenes/espacio.jpg";
$marca_agua = "imagenes/marca.png";
$image = imagecreatefrompng($marca_agua);
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

imagecopy($img, $image, (imagesx($img)/1.5), (imagesy($img)/1.8), 0, 0, imagesx($image), imagesy($image));
header("conten-type: image/jpeg");
imagejpeg($img);
imagedestroy($img);
imagedestroy($image);
?>