<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Front Door</title>
</head>

<?php 
  $backgroundName = $_COOKIE['bg'];
  $foregroundName = $_COOKIE['fg'];

?>
<body bgcolor="<?php echo $backgroundName; ?>" text="<?php echo $foregroundName; ?>">

<h1>Welcome to the Store</h1>
<p>
  We have many fine products for you to view. Please feel free to browse the aisles and stop an assistant at any time.
  But remember, you break it you bought it!
</p>
<p>Would you like to <a href="colors.php">Change your preferences?</a></p>  
</body>
</html>