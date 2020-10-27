<?php 

echo $_POST['username'];


$html = array(
	'username' => htmlentities($_POST['username'], ENT_QUOTES, "UTF-8"),
);


echo $html['username'];




 ?>