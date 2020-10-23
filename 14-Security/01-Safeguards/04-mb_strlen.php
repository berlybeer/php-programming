<?php 

$clean = array();

$length = mb_strlen($_POST['username']);

if(ctype_alnum($_POST['username']) && ($length > 0) && ($length <= 5)){
	$clean['username'] = $_POST['username'];
	echo "username was established ";
}

else{
	echo "username was not established ";
}



 ?>