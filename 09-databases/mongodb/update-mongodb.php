<?php 

$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$filter = ['_id' => new \MongoDB\BSON\ObjectID('5f6ffca537710000700030a7')];
$document = [
					'authorid' => 1,
					'name' => "John Ronald Reuel Tolkien",
			];

$bulk = new \MongoDB\Driver\BulkWrite;

$bulk->update($filter, $document);

$result = $mng->executeBulkWrite('library.authors', $bulk);

print_r($result);

 ?>