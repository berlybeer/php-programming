<?php 

	
	if(check_auth($_POST['username'], $_POST['password'])){
		$_SESSION['auth'] = TRUE;
		session_regenerate_id(TRUE);
	}


 ?>


 <a href="http://host/login.php?PHPSESSID=1234">Log In</a>