<?php 

$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$qry = new MongoDB\Driver\Query([]);

$rows = $mng->executeQuery("library.authors", $qry);



	foreach($rows as $row){
		echo nl2br("$row->_id : $row->authorid : $row->name ");
	}

	

 ?>