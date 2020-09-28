<?php 

$mng = new MongoDb\Driver\Manager("mongodb://localhost:27017");


$options = ['limit' => 1];
$filter = ['_id' => new \MongoDB\BSON\ObjectID('5f6ffca537710000700030a7')];

$query = new \MongoDB\Driver\Query($filter, $options);

$cursor = $mng->executeQuery('library.authors', $query);

$cursorArray = $cursor->toArray();

echo "Generated Primary Key: {$cursorArray[0]->_id}<br />";
echo "Author name: {$cursorArray[0]->name}<br />";
echo "2nd Book info - ISBN: {$cursorArray[0]->books[1]->ISBN}<br />";
echo "2nd Book info - Title: {$cursorArray[0]->books[1]->title}<br />";




 ?>