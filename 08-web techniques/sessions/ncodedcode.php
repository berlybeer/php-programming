
<?php 

session_start();


$_SESSION["product_code"] = "2222";
$_SESSION["logged_in"] = "yes";
print "<pre>";
print_r($_SESSION);
print "</pre>";
$enc_session = session_encode();


print "<b> Encoded Session data: </br></br>";
print $enc_session . "<br/><br/>";


$_SESSION['product_code'] = "2000";
$_SESSION["logged_in"] = "no";


print "<b> SESSION Array: <br/></b>";
print "<pre>";
print_r($_SESSION);
print "</pre>";
session_decode($enc_session);

print "<b>Reloaded SESSION Array:<br/></b>";
print "<pre>";
print_r($_SESSION);
print "</pre>";



?>

