<?php 


//create a subdirectory
 // /Programming-PHP/10-Graphics/buttons/tmp/buttons/


//Make sure of edit your Apache htt.conf with this block


	// <Location /Programming-PHP/10-Graphics/buttons/tmp/buttons/>
	//  ErrorDocument 404 /Programming-PHP/10-Graphics/buttons/button.php
	// </Location>




//bring in redirected URL parameters, if any

if(isset($_SERVER['REDIRECT_QUERY_STRING'])){
	parse_str($_SERVER['REDIRECT_QUERY_STRING'], $output);
}


$cacheDir = "/Programming-PHP/10-Graphics/buttons/tmp/buttons/";
$url = $_SERVER['REDIRECT_URL'];

//pick out the extension
$extension = substr($url, strrpos($url, '.'));



//remove directory and extension from $url string
$file = substr($url, strlen($cacheDir), -strlen($extension));

//Security - don't allow '..' in filename
$file = str_replace('..', '', $file);

//text to display in button
$text = urldecode($file);
$size = 12;

$font = __DIR__ . "/IndieFlower.ttf";

//build it, cache it, and return it
$image = imagecreatefrompng("button.png");

$black = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);


if($text){
	$tsize = imagettfbbox($size, 0, $font, $text);

	$dx = abs($tsize[2] - $tsize[0]);
	$dy = abs($tsize[5] - $tsize[3]);

	$x= (imagesx($image) - $dx)/ 2;
	$y = (imagesy($image) - $dy)/ 2 + $dy;

	//draw text
	imagettftext($image, $size, 0, $x, $y, $black, $font, $text);

	//save image to file
	imagepng($image, "{$_SERVER['DOCUMENT_ROOT']}{$cacheDir}{$file}.png");

}

header("Content-Type: image/png");
imagepng($image);


echo "<pre>";
print_r($_SERVER);


 ?>