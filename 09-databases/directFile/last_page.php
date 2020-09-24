<?php 

session_start();




$folder = $_SESSION['folder'];
$filename = $folder . "/question1.txt";


$file_handle = fopen($filename, "a+");
$comments = fread($file_handle, filesize($filename));
fclose($file_handle);


$filename2 = $folder . "/question2.txt";
$file_handle2 = fopen($filename2, "a+");
$comments2 = fread($file_handle2, filesize($filename2));




 ?>


 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Responses</title>
</head>
<body>
	<table border="0">
		<tr>
			<td>
				<h1>Here are your answers</h1>
			</td>
		</tr>
		

		<tr bgcolor=lightblue>
		<td>
			What is your opinion on the state of the world economy?<br/>
			Can you help us fix it?
		</td>
		</tr>
		<tr>
			<td>
				
					<input type="hidden" name="posted" value="1"><br/>
					<textarea name="question1" rows=12 cols="35"><?php echo $comments ?></textarea>
			</td>
		</tr>

		<tr bgcolor="lightblue">
			<td>It's a funny thing freedom. I mean how can any of us <br/>
			be really free when we still have personal possessions.<br/>
			How do you respond to the previous statement?</td>
		</tr>


		<tr>
			<td>
									<input type="hidden" name="posted" value="1"><br/>
					<textarea name="question2" cols="35" rows="12"><?php echo $comments2 ?></textarea>
				
			</td>
		</tr>

	</table>

	 <a href="survey_start.php">Start again</a>


</body>
</html>
