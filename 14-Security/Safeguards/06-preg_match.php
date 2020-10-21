<?php 

$clean = array();

if(preg_match("/[^A-Za-z\'\-]/", $_POST['last_name'])){
echo "username was not established ";
}else{
	$clean['last_name'] = $_POST['last_name'];
	echo "username was established ";
}


 ?>