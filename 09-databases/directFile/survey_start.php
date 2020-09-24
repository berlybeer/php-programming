<?php 


session_start();




if(!empty($_POST['posted']) && !empty($_POST['email'])){
	$folder = "survey/" . strtolower($_POST['email']);

	$_SESSION['folder'] = $folder;

	if(!file_exists($folder)){
		mkdir($folder, 0777, true);
	}


	header("Location: first.php");

}else{



 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Files & folders - On-line Survey</title>
 </head>

 <body>
 	<h1>Survey Form</h1>
 	<p>Please enter your e-mail address to start recording your comments</p>

 	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
 		<input type="hidden" name="posted" value="1">
 		Email address: <input type="text" name="email" size="45"/>
 		<br/>
 		<br/>
 		<input type="submit" name="submit" value="Submit">
 	</form>


 </body>





 </html>

 <?php }; ?>