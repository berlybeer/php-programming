<?php 

$bindings["DESTINATION"] = $_SERVER["PHP_SELF"];
$name = $_GET["name"];

if(!empty($name)){

	$template = "03-thankyou-template.php";
	$bindings["NAME"] = $name;
}

else{
	$template = "02-user-input-template.php";
}

echo fillTemplate($template, $bindings);

 ?>