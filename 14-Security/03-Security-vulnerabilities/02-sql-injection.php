<?php 

$mysql = array();

$hash = hash($_POST['password']);

$mysql['username'] = mysql_real_escape_string($clean['username']);


$sql = "SELECT count(*) FROM users WHERE username = '{$mysql['username']}' AND password = '{$hash}'";

$result = mysql_query($sql);





 ?>