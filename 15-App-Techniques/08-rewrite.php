<?php 

function rewrite($text){

	return str_replace("http://www.yoursite.com/", "http://www.mysite.com/", $text);
}


ob_start("rewrite");

 ?>

 Visit <a href="http://www.yoursite.com/foo/bar">our site</a> now!
 Visit <a href="http://www.mysite.com/foo/bar">our site</a> now!