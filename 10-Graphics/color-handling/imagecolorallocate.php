<?php 


$width = 128;

$height = 256;

$image = imagecreate($width, $height);
$white = imagecolorallocate($image, 0xFF,0xFF, 0xFF);


header("Content-Type: image/png");
imagepng($image);

 ?>