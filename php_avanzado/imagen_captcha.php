<?php
session_start();
header("Content-type: image/jpeg");
$img = imagecreate(150, 30);
$color_fondo = imagecolorallocate($img,100,200,255);
$color_texto = imagecolorallocate($img,61,0,153);
imagestring($img, 5, 10, 10, $_SESSION['captcha'], $color_texto);
imagejpeg($img);
?>