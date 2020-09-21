
<?php 

session_start();
$tag = $_SESSION["tagName"];
echo "Welcome to $tag world";
session_destroy();
echo $_SESSION["tagName"];
unset($_SESSION["tagName"]);
echo $_SESSION["tagName"];

?>