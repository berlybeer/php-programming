<?php 

function fillTemplate($name, $values = array(), $unhandled = "delete"){

	$templateFile = "{$_SERVER['DOCUMENT_ROOT']}/templates/{$name}";

	if($file = fopen($templateFile, 'r')){
		$template = fread($file, filesize($templateFile));
		fclose($file);
	}

	$keys = array_keys($values);

	foreach($keys as $key){

		$template = str_replace("{{$key}}", $values[$key], $template);
	}

	if($unhandled == "delete"){
		$template = preg_replace("{[^ }]*}/i", "", $template);
	}

	else if($unhandled == "comment"){
		$template = preg_replace("{([^ }]*)}/i", "<!-- \\1 undefinded -->", $template);
	}

	return $template;
}


 ?>