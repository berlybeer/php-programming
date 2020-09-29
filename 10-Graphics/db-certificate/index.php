<?php 


$con = mysqli_connect("localhost", "root", "root","testdb");
$res=mysqli_query($con, "select * from students where status=0 limit 1");


if(mysqli_num_rows($res)> 0){

	$image =  imagecreatefromjpeg("certificate.jpg");
	$color = imagecolorallocate($image, 19, 21, 22);
	$font = __DIR__ . "/BRUSHSCI.ttf";
	$font2 = __DIR__ . "/AGENCYR.TTF";
	while($row=mysqli_fetch_assoc($res)){

		$name = $row['name'];
		imagettftext($image, 50,0,320,420, $color, $font, $name);
		$date = date('d F, Y');
		imagettftext($image, 20,0,450,590, $color, $font2, $date);
		$file=time().'_'.$row['id'];
		header('content-type:image/jpeg');
		imagejpeg($image, "download/" . $file. ".jpg");
		imagedestroy($image);
		mysqli_query($con, "update students set status=1 where id='" . $row['id'] . "'");
	}
	
}



 ?>