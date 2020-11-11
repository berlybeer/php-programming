<?php 


$word = new COM("word.application") or die("Unable to stat Word app");

echo "Found and Loaded Word, version {$word->Version}\n";

$word->Documents->add();

$word->Selection->typeText("Hello World");
$word->Documents[1]->saveAs("c:/php_com_test.doc");

 $word->quit();

 $word = null;

 echo "all done!";


 ?>