<?php 

$mysql = array(
	'username' =>mysqli_real_escape_string($clean['username']),
);

$sql = "SELECT * FROM profile WHERE username = '{$mysql['username']}'";

$result = mysql_query($sql);

 ?>