<?php 

$img = imagecreatefromjpeg("billboard.jpg");
$white = imagecolorallocate($img, 0,0, 0);


$fontfile= __DIR__.'/BRUSHSCI.ttf';

$txt = "Hello WorlD";

imagettftext(
	$img, //Image Object
	24, //Font Size
	0, //Angle
	5, 24, // X + Y Coordinates
	$white, //Color
	$fontfile, //Font to use
	$txt //Text to write
);




// Ouput image to browser

header("Content-type: image/jpeg");
imagejpeg($img);


// imagejpeg($img, "TEXT-ADDED.JPG", 100);