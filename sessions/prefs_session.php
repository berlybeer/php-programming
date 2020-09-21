<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preferences Set</title>
</head>
<body>
  <?php 
    $colors = array(
      'black' => "#000000",
      'white' => "#ffffff",
      'red' => "#ff0000",
      'blue' => "#0000ff"
    );

    $bg = $colors[$_POST['background']];
    $fg = $colors[$_POST['foreground']];


    $_SESSION['bg'] = $bg;
    $_SESSION['fg'] = $fg;

  ?>
  <p>Thank you. Your preferences have been changed to: <br/>
    Background: <?php echo $_POST['background'];?><br/>
    Foreground: <?php echo $_POST['foreground'];?><br/>
  </p>

  <p>Click <a href="prefs_session_demo.php">here</a> to see the preferences in action.</p>

</body>
</html>