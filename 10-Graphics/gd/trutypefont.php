<?php 

$image = imagecreate(350, 70);

$white = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$black = imagecolorallocate($image, 0x00, 0x00,0x00);

$fontname = __DIR__ . "/IndieFlower.ttf";

imagettftext($image, 20, 0, 10, 40, $black, $fontname, "The Quick Brown Fox");

header("Content-Type: image/png");
imagepng($image);

 ?>