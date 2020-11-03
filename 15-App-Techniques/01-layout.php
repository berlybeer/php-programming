<?php 



 ?>


 <html>
 	<head>
 		<title>User Information</title>
 	</head>


 	<body>
 		<?php if(!empty($_GET['name'])) {

 		?>

 		<p><font face="helvetica,arial">Thank you for filling out the form, <?php echo $_GET['name'] ?>.</font></p>

 	<?php } else { ?>
 		<p><font face="helvetica,arial">Please enter the following information: </font></p>

 		<form action="<?php echo $_SERVER['PHP_SELF'] ?>">
 			<table>
 				<tr>
 					<td>Name:</td>
 					<td>
 						<input type="text" name="name"/>
 						<input type="submit"/>
 					</td>
 				</tr>
 			</table>
 		</form>
 	<?php } ?>

 	</body>
 </html>