<?php 

$jsonData = "[1,2, [3,4], \"five\"]";
$data = json_decode($jsonData);
print_r($data);


 ?>