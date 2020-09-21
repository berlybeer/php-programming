<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preferences set</title>
</head>
<body>
  <?php 
    $colors = array(
      'black' => "#000000",
      'white' => "#ffffff",
      'red' => "#ff0000",
      'blue' => "#0000ff",
    );

    $backgroundName = $_POST['background'];
    $foregroundName = $_POST['foreground'];

    setcookie('bg', $colors[$backgroundName]);
    setcookie('fg', $colors[$foregroundName]);
  
  ?>


<p>Thank you. Your preferences have been changed to: </br>
    Background: <?php echo $backgroundName; ?><br/>
    Foreground: <?php echo $foregroundName; ?>
</p>

<p>Click <a href="prefs_demo.php">here</a> to see the preferences in action
</p>
  
</body>
</html>