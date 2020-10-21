<?php 

$clean = array();

if(ctype_alnum($_POST['username'])){
	$clean['username'] = $_POST['username'];
}
else{
	/*ERROR*/
}

var_dump($clean);


$strings = array('Hello123', "####");

foreach ($strings as $string) {

	if(ctype_alnum($string)){
		echo "This is a alphanumeric string <br>";
	}
	else{
		echo "This is a nonalphanumeric string <br>";
	}
	# code...
}






 ?>