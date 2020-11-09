<?php 


for($j = 0; $j < 10; $j++){
	$sample[] = $j * 12;

	if($j == 2){
		echo $sample[2];
	}
}

echo "<br>";
for ($j = 0; $j <10; $j++){
	$sample[] = $j * 12;
}

echo "<br>";
echo "<pre>";

var_dump($sample);



for($j = 0; $j <10; $j++){
	$sample[] = $j * 12;
}

echo "<br>";
echo "<pre>";
print_r($sample);



 ?>