<?php 

$db = new SQLite3("testdb.sqlite");

// require "books.php";

$sql = "SELECT a.name, b.title FROM books b, authors a WHERE a.authorid=b.authorid";

$result = $db->query($sql);

while ($row = $result->fetchArray()){
	echo "{$row['name']} is the author of: {$row['title']}<br/>";
}

 ?>