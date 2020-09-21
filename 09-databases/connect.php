<?php

require("config.php");

// $connection = new PDO("mysql:host=localhost; dbname=pdotest", $username, $password);
// $connection->query("UPDATE users SET NAME = 'Luisito Comunica' WHERE id=4");


$db = new PDO("mysql:host=localhost; dbname=testdb", $username, $password);

// $statement = $db->prepare("SELECT * FROM users");
// $statement->execute();

// while ($row = $statement->fetch()) {
//   print_r($row);
// }

// $statement = null;

$statement = $db->prepare("INSERT INTO users(name, password, email) VALUES (:name, :password, :email)");
$statement->execute(array(
  'name' => "Monkey Luffy",
  'password' => 123456,
  'email' => "monkey@onepiece.com",
))

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php ?>

<body>

</body>

</html>