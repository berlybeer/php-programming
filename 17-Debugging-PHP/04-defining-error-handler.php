<?php 


function displayError($error, $errorString, $filename, $line, $symbols){
	echo "<p>Error '<b>{$errorString}</b>' ocurred.<br/>";
	echo "-- in file '<i>{$filename}</i>', line $line. </p>";
}


set_error_handler('displayError');


$value = 4 / 0;



 ?>