<?php 

$image = imagecreate(70, 350);
$white = imagecolorallocate($image, 255, 255,255);
$black = imagecolorallocate($image, 0, 0, 0);

$fontname = __DIR__ . "/IndieFlower.ttf";

imagettftext($image, 20, 270, 28, 10, $black, $fontname, "The Quick Brown Fox");

header("Content-Type: image/png");
imagepng($image);

 ?>