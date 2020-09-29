<?php 


$font = __DIR__ . "/IndieFlower.ttf";
$size = isset($_GET['size']) ? $_GET['size'] : 12;
$text = isset($_GET['text']) ? $_GET['text'] : 'Some text';
$encode = urlencode($text);

$path = "tmp/buttons";


if($bytes = @filesize("{$path}/button.png")){
		header("Content-Type: image/png");
	header("Content-Length: {$bytes}");
	readfile("{$path}/button.png");
	exit;
}


$image = imagecreatefrompng("button.png");
$black = imagecolorallocate($image, 0,0,0);

if($text){

$tsize = imagettfbbox($size, 0, $font, $text);
$dx = abs($tsize[2] - $tsize[0]);
$dy = abs($tsize[5] - $tsize[3]);

$x = (imagesx($image) - $dx)/2;
$y = (imagesy($image) - $dy)/2 + $dy;

imagettftext($image, $size, 0, $x, $y, $black, $font, $text);

imagepng($image, "{$path}/button.png");




}


header("Content-Type: image/png");
imagepng($image);
 ?>
