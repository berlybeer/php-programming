<?php 


//Element handlers
function startElement($parser, $name, $attributes){
	$outputAttributes = array();

	if(count($attributes)){
		foreach($attributes as $key => $value){
			$outputAttributes[] = "<font color=\"gray\">{$key}=\"{$value}\"</font>";
		}
	}


	echo "&lt;<b>{$name}</b>" . join(' ', $outputAttributes) . '&gt;';
}


function endElement($parser, $name){
	echo "&lt;<b>/{$name}</b>&gt;";
}

//character data handler
function characterData($parser, $data){
	echo $data;
}


//processing instructions
function processing_instruction($parser, $target, $code){
	if($target === 'php'){
		eval($code);
	}
}


//external entity reference handler
function externalEntityReference($parser, $names, $base, $systemID, $publicID){
	if($systemID){
		if(!list($parser, $fp) = createParser($systemID)){
			echo "Error opening external entity {$systemID}\n";
			return false;
		}

		return parse($parser, $fp);
	}

	return false;
}


 ?>
