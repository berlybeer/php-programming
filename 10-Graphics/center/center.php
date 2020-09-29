<?php 

$img = imagecreatefromjpeg("billboard.jpg");
$white = imagecolorallocate($img, 0,0, 0);


$font= __DIR__.'/BRUSHSCI.ttf';


$txt = "Hello world";


//IMAGE SIZE

$width = imagesx($img);

$height = imagesy($img);

//TEXT SIZE

$text_size = imagettfbbox(24, 0, $font, $txt);  //Font size, angle, font text


$text_width = max([$text_size[2], $text_size[4]]) - min([$text_size[0], $text_size[6]]);


$text_height = max([$text_size[5], $text_size[7]]) - min([$text_size[1], $text_size[3]]);




//center text on IMG

$centerX = CEIL(($width - $text_width)/2);


$centerY = CEIL(($height - $text_height)/2);

$centerX = $centerX <0 ? 0: $centerX;
$centerY = $centerY <0 ? 0: $centerY;



//write text to img

imagettftext(
	$img, //Image Object
	24, //Font Size
	0, //Angle
	$centerX, $centerY, // X + Y Coordinates
	$white, //Color
	$font, //Font to use
	$txt //Text to write
);


// Ouput image to browser

header("Content-type: image/jpeg");
imagejpeg($img);


// imagejpeg($img, "TEXT-ADDED.JPG", 100);

 ?>