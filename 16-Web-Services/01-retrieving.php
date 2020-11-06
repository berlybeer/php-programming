<?php 

$authorID = "ktatroe";

$url = "http://example.com/api/authors/{$authorID}";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);

$response = curl_exec($ch);

$resultInfo = curl_getinfo($ch);

curl_close($ch);

$authorJSON = json_decode($response);
$author = ResourceFactory::authorFromJSON($authorJSON);


 ?>