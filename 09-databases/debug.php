<?php

require "config.php";

$db = new PDO("mysql:host=localhost;dbname=testdb", $username, $password);
$statement = $db->prepare("SELECT name FROM users WHERE id = ?");
$user_id = 2;
$statement->bindParam(1, $user_id, PDO::PARAM_INT);
$statement->execute();

// print("PDO::FETCH_ASSOC: ");
// print("Return next row as an array indexed by column name \n");
// $result = $statement->fetch(PDO::FETCH_ASSOC);

// print_r($result);
// print("\n");


// print("PDO::FETCH_BOTH: ");
// print("return next row as an array indexed by both column name and number \n");
// $result2 = $statement->fetch(PDO::FETCH_BOTH);
// print_r($result2);
// print("\n");

// print("PDO::FETCH_LAZY: ");
// print("Return next row as an anonymous object with column names as properties\n");
// $result = $statement->fetch(PDO::FETCH_LAZY);
// print_r($result);
// print("\n");


print("PDO::FETCH_OBJ: ");
print("Return next row as an anonymous object with column names as properties\n");
$result = $statement->fetch(PDO::FETCH_OBJ);
print $result->name;
print("\n");


echo "<pre>";
$statement->debugDumpParams();
