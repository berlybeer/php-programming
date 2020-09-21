<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Set your preferences</title>
</head>
<body>
  <form action="prefs.php" method="post">
    <p>Background:
      <select name="background" id="">
        <option value="black">Black</option>
        <option value="white">White</option>
        <option value="red">Red</option>
        <option value="blue">Blue</option>
      </select>
      <br>

      Foreground:
      <select name="foreground" id="">
        <option value="black">Black</option>
        <option value="white">White</option>
        <option value="red">Red</option>
        <option value="blue">Blue</option>
      </select>
      
    </p>
    <input type="submit" value="Change Preferences">
  </form>
</body>
</html>