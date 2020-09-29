
<?php 



if(isset($_POST['name'])){
	$image =  imagecreatefromjpeg("certificate.jpg");
	$color = imagecolorallocate($image, 19, 21, 22);
	$font = __DIR__ . "/BRUSHSCI.ttf";
	$font2 = __DIR__ . "/AGENCYR.TTF";

	$name = $_POST['name'];
	imagettftext($image, 50,0,320,420, $color, $font, $name);
	$date = date('d F, Y');
	imagettftext($image, 20,0,450,590, $color, $font2, $date);
	$file=time();
	// header('content-type:image/jpeg');
	imagejpeg($image, "download/" . $file. ".jpg");
	imagedestroy($image);
	}
	

 ?>


<!-- <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" > -->

<form action="" method="post">
 	<input type="textbox" name="name">
 	<input type="submit">
 </form>