<?php 

$document = simplexml_load_file("books.xml");
echo "<br> Titles <br>";

foreach($document->book as $book){
	echo $book->title . "\r\n" . "<br>";
}

echo "<br> Attrubutes <br>";

foreach($document->book as $node){
	foreach($node->attributes() as $attribute){
		echo "{$attribute}\n";
	}
}

echo "<br> asXML <br>";

foreach($document->children() as $book){
	$book->title = "New Title";
}

file_put_contents("books.xml", $document->asXML()); 

 ?>