<?php 


// $mongo = new MongoDB\Client();
// $db = $mongo->library;
// $authors = $db->authors;

// $author = array('authorid' => 1, 'name' => "J.R.R. Tolkien");
// $authors->insert($author);

// $author = array('authorid' => 2, 'name' => "Alex Haley");
// $authors->insert($author);

// $author = array('authorid' => 3, 'name' => "Tom Clancy");
// $authors->save($author);

// $author = array('authorid' => 4, 'name' => "Isacc Asimov");
// $authors->save($author);




	$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");

	$document = [
					'authorid' => 1,
					'name' => "J.R.R. Tolkien",
				];

	$bulk = new \MongoDB\Driver\BulkWrite;
	$_id1 = $bulk->insert($document);
	$result = $mng->executeBulkWrite('library.authors', $bulk);

	print_r($result);



 ?>