<?php 


$db = new SQLite3("testdb.sqlite");

// require "authors.php";

$sql = "CREATE TABLE 'books' ('bookid' INTEGER PRIMARY KEY, 
	'authorid' INTEGER,
	'title' TEXT,
	'ISBN' TEXT,
	'pub_year' INTEGER,
	'available' INTEGER)";


if(!$db->exec($sql)){
	echo "Create Failure <br/>";
}else{
	echo "Table Books was created<br/>";
}

$sql = <<<SQL
INSERT INTO books ('authorid', 'title', 'ISBN', 'pub_year', 'available') VALUES (1, 'The two Towers', '0-261-10236-2', 1854, 1);

INSERT INTO books ('authorid', 'title', 'ISBN', 'pub_year', 'available') VALUES (2, 'The Return of The king', '0-261-10237-0', 1955, 1);

INSERT INTO books ('authorid', 'title', 'ISBN', 'pub_year', 'available') VALUES (3, 'Roots', '0-440-17464-3', 1974, 1);

INSERT INTO books ('authorid', 'title', 'ISBN', 'pub_year', 'available') VALUES (4, 'Foundation', '0-261-10236-2', 1854, 1);
INSERT INTO books ('authorid', 'title', 'ISBN', 'pub_year', 'available') VALUES (5, 'The boy who lived', '0-553-80371-9', 1951, 1);
SQL;

if(!$db->exec($sql)){
	echo "Insert Failure<br/>";
}else{
	echo "INSERT to books -ok <br/>";
}




 ?>