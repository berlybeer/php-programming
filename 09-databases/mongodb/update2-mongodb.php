<?php 

$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$filter = ['_id' => new \MongoDB\BSON\ObjectID('5f6ffca537710000700030a7')];

$document = [array('name' => "Isaac Asimov"), array('set' => array('books' =>array("0-425-17034-9" => "Foundation",
 			"0-261-10236-2" => "I, Robot",
 			"0-440-17464-3" => "Second Foundation",
 			"0-425-13354-0" => "Pebble In The Sky")))];

$bulk = new \MongoDB\Driver\BulkWrite;

$bulk->update($filter, $document);

$result = $mng->executeBulkWrite('library.authors', $bulk);

print_r($result);

 ?>

