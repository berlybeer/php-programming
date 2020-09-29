<?php 


$font = __DIR__ . "/IndieFlower.ttf";
$size = isset($_GET['size']) ? $_GET['size'] : 45;
$text = isset($_GET['text']) ? $_GET['text'] : 'some text';

$image = imagecreatefrompng("button.png");
$black = imagecolorallocate($image, 0xFF , 0xFF, 0xFF);

if($text){
	$tsize = imagettfbbox($size, 0, $font, $text);
	$dx = abs($tsize[2] - $tsize[0]);

	$dy = abs($tsize[5] - $tsize[3]);

	$x = (imagesx($image) - $dx) /2;
	$y = (imagesy($image) - $dy) /2 + $dy;

	imagettftext($image, $size, 0, $x, $y, $black, $font, $text);
}

//header("Content-Type: image/png");
imagepng($image);


 ?>



 