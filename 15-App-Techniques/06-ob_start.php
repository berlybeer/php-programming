<?php 

ob_start();
phpinfo();

$phpinfo = ob_get_contents();

ob_end_clean();

if(strpos($phpinfo, "module_gd") === false){
	echo "You do not have GD Graphics support in your PHP, sorry.";
}

else{
	echo "Congratulations, you have GD Graphics support!";
}


if(function_exists("imagecreate")){
	echo "The imagecreate function exist";
}



 ?>
 
