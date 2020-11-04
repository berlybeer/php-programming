<?php 

ob_start();

 ?>


 Visit <a href="http://www.yoursite.com/foo/bar">our site</a> now!

 <?php 
$contents = ob_get_contents();
ob_end_clean();


echo str_replace("http://www.yoursite.com/", "http://www.mysite.com/", $contents);

  ?>

  Visit <a href="http://www.mysite.com/foo/bar">our site</a> now!