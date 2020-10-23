<?php 

print_r($_POST['username']);

$clean = array();
$clean['username'] = $_POST['username'];


$html = array();
$html['username'] = htmlentities($clean['username'], ENT_QUOTES, 'UTF-8');

echo "<p>Welcome back, {$html['username']}.</p>";

$value = "ok";

 ?>

 <a href="http://host/script.php?var={$value}">Click Here</a>