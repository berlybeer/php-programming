<?php 

$uploadFilepath = $_FILES['uploaded']['tmp_name'];

if(is_uploaded_file($uploadFilepath)){
	$fp = fopen($uploadFilepath, 'r');

	if($fp){
		$text = fread($fp, filesize($uploadFilepath));
		fclose($fp);
		
	}
}


 ?>