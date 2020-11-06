<?php 


$authorID = "ktatroe";
$bookID = "ProgrammingPHP";

$url = "http://example.com/api/authors/{$authorID}/books/{$bookID}";

$ch = curl_init();
curl_setot($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

$result = curl_exec($ch);
$resulInfo = curl_getinfo($ch);

curl_close($ch);



 ?>