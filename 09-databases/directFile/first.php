<?php 

session_start();



$folder = $_SESSION['folder'];

$filename = $folder ."/question1.txt";

$file_handle = fopen($filename, "a+");

$comments = file_get_contents($filename);

fclose($file_handle);


if(!empty($_POST['posted'])){
	$question1 = $_POST['question1'];
	$file_handle = fopen($filename, "w+");

	if(flock($file_handle, LOCK_EX)){
		if(fwrite($file_handle, $question1) == FALSE){
			echo "Cannot write to file($filename)";
		}
		flock($file_handle, LOCK_UN);
	}

	fclose($file_handle);
	header("Location: second.php");

}else{ ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Files & folders - On-line Survey</title>
</head>
<body>
	<h1>First Question</h1>
	<table border="0">
	<tr>
		<td>Please enter your response to the following survey question:</td>
	</tr>
	<tr bgcolor=lightblue>
		<td>
			What is your opinion on the state of the world economy?<br/>
			Can you help us fix it?
		</td>
	</tr>
	<tr>
		<td>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				<input type="hidden" name="posted" value="1"><br/>
				<textarea name="question1" rows=12 cols="35"><?= $comments ?></textarea>
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="submit" value="Submit"></form>
		</td>
	</tr>
	</table>
<?php } ?>
</body>
</html>

