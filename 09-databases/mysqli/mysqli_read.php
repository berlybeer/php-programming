<?php 


require "config.php";

$db = new mysqli("localhost", $username, $password, "testdb");

$sql = "SELECT a.name, b.category FROM products b, users a WHERE a.id=b.user_id";

$result = $db->query($sql);






while($row = $result->fetch_assoc()){

	
	echo "{$row['name']} is the author of: {$row['category']}<br/>";
}

$result->close();
$db->close();


 ?>