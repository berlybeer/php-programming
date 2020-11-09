<?php 

$filename = $_POST['username'];
$vetted = basename(realpath($filename));

if($filename !== $vetted){
	die("{$filename} is not a good username");
}


 ?>