<?php 

session_start();




$folder = $_SESSION['folder'];
$filename = $folder . "/question2.txt";


$file_handle = fopen($filename, "a+");

if(filesize($filename) > 0){
	$comments = fread($file_handle, filesize($filename));
}else{
	$comments = '';
}


fclose($file_handle);

if(!empty($_POST['posted'])){
	$question2 = $_POST['question2'];

	$file_handle = fopen($filename, "w+");

	if(flock($file_handle, LOCK_EX)){
		if(fwrite($file_handle, $question2) == FALSE){
			echo "Cannot write to file($filename)";
		}
		flock($file_handle, LOCK_UN);
	}

	fclose($file_handle);

	header("Location: last_page.php");
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
	<h1>Second Question</h1>
	<table border="0">
		<tr>
			<td>
				Please enter your comments to the following survey statement:
			</td>
		</tr>
		<tr bgcolor="lightblue">
			<td>It's a funny thing freedom. I mean how can any of us <br/>
			be really free when we still have personal possessions.<br/>
			How do you respond to the previous statement?</td>
		</tr>


		<tr>
			<td>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method=POST>
					<input type="hidden" name="posted" value="1"><br/>
					<textarea name="question2" cols="35" rows="12"> <?= $comments ?></textarea>
				
			</td>
		</tr>



		<tr>
			<td><input type="submit" name="submit" value="Submit"></form></td>
		</tr>
	</table>

	<?php } ?>
</body>
</html>
