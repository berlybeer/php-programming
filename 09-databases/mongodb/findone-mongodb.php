<?php 

$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$options = ['limit' => 1];
$filter = ['_id' => new \MongoDB\BSON\ObjectID('5f6ffca537710000700030a7')];

$query = new \MongoDB\Driver\Query($filter, $options);

$cursor = $mng->executeQuery('library.authors', $query);

$cursorArray = $cursor->toArray();

if(isset($cursorArray[0])){
	var_dump($cursorArray[0]);
}

 ?>