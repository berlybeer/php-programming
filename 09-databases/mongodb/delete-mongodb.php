<?php 

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$bulk = new \MongoDB\Driver\BulkWrite;

$filter = ['_id' => new \MongoDB\BSON\ObjectID('5f6ffca537710000700030a7')];

$bulk->delete($filter);

$result = $manager->executeBulkWrite('library.authors', $bulk);

 ?>