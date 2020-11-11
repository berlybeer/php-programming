<?php 

if(PHP_OS == 'WIN32' || PHP_OS == 'WINNT'){
	echo "You are on a Windows System";
}
else{
	echo "You are NOT on a Windows System";
}


echo "<pre>";
print_r($_SERVER);
 ?>