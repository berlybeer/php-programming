<?php 

$xml = simplexml_load_file('data.xml'); //object

for($i = 0; $i< count($xml->topic); $i++){
	$data = $xml->topic[$i]->name;
	echo $data . "<br>";
}

echo "<br>";

$data = $xml->topic;

foreach ($data as $showname) {
	foreach($showname->name as $names){
		echo "$names" . "<br>";
	}
}



 ?>