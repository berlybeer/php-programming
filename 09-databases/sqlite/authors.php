<?php 


$ver = SQLite3::version();
echo $ver['versionString']."\n";
echo $ver['versionString']."\n";


$db=new SQLite3("testdb.sqlite");

// $db = new SQLiteDatabase("testdb.sqlite");

$sql = "CREATE TABLE 'authors' ('authorid' INTEGER PRIMARY KEY, 'name' TEXT)";

if(!$db->exec($sql)){
	echo "Create Failure<br/>";
}else{
	echo "Table Authors was created <br/>";
}

$sql = <<<SQL
INSERT INTO 'authors' ('name') VALUES ('J.R.R. Tolkien');
INSERT INTO 'authors' ('name') VALUES ('Alex Haley');
INSERT INTO 'authors' ('name') VALUES ('Tom Clancy');
INSERT INTO 'authors' ('name') VALUES ('Isaac Asimov');
SQL;

if(!$db->exec($sql)){
	echo "Insert Failure<br/>";
}else{
	echo "INSERT to Authors - OK<br/>";
}




 ?>