<?php 


$image =  imagecreatefromjpeg("certificate.jpg");
$color = imagecolorallocate($image, 19, 21, 22);
$font = __DIR__ . "/BRUSHSCI.ttf";
$font2 = __DIR__ . "/AGENCYR.TTF";
$name = "Lotte Hofmeester";

imagettftext($image, 50,0,320,420, $color, $font, $name);

$data = "6th may 2020";
imagettftext($image, 20,0,450,590, $color, $font2, $data);
header('content-type:image/jpeg');
imagejpeg($image);
imagedestroy($image);

 ?>