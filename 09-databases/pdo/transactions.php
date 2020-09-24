<?php


require "config.php";

try {
  $db = new PDO("mysql:host=localhost;dbname=pdotest", $username, $password);
} catch (Exception $error) {
  die("Connection failed: " . $error->getMessage());
}

try {
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->beginTransaction();

  $db->exec("insert into accounts(account_id, amount) values (23, '5000')");
  $db->exec("insert into accounts (account_id, amount) values (27, '-5000')");

  $db->commit();
} catch (Exception $error) {
  $db->rollback();
  echo "Transaction no completed: " . $error->getMessage();
}
