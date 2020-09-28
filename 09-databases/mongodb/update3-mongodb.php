<?php 

$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$filter = ['_id' => new \MongoDB\BSON\ObjectID('5f6ffca537710000700030a7')];


$bookData = array(
 array(
 "ISBN" => "0-553-29337-0",
 "title" => "Foundation",
 "pub_year" => 1951,
 "available" => 1,
 ),
 array(
 "ISBN" => "0-553-29438-5",
 "title" => "I, Robot",
 "pub_year" => 1950,
 "available" => 1,
 ),
 array(
 "ISBN" => "0-517-546671",
 "title" => "Exploring the Earth and the Cosmos",
 "pub_year" => 1982,
 "available" => 1,
 ),
 array(
 "ISBN" => "0-553-29336-2",
 "title" => "Second Foundation",
 "pub_year" => 1953,
 "available" => 1,
 ),
);



$document = [
			'authorid' => 1,
			'books' => $bookData,
			'name' => "J.R.R. Tolkien",
		];


$bulk = new \MongoDB\Driver\BulkWrite;

$bulk->update($filter, $document);

$result = $mng->executeBulkWrite('library.authors', $bulk);

print_r($result);



 ?>