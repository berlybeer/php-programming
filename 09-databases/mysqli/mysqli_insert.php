<?php 

require "config.php";
$db = new mysqli("localhost", $username, $password, "testdb");


$sql = "INSERT INTO users (name, password, email) VALUES ('pipo2', '123456', 'pipo@pipo2.com')";

if($db->query($sql)){
	echo "User data saved successfully.";
}else{
	echo "INSERT attempt failed, please try again later, or call tech support";
}

$db->close();







 ?>