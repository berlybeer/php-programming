<?php 


$source = imagecreatefromjpeg("logo_1998.jpg");

$width = imagesx($source);

$height = imagesy($source);

$x = $width / 8;
$y = $height / 8;

$destination = imagecreatetruecolor($x, $y);

imagecopyresampled($destination, $source, 0, 0, 0, 0, $x, $y, $width, $height);

header("Content-Type: image/jpeg");
imagejpeg($destination, "logo-tiny.jpg");

 ?>