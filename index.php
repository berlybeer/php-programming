<?php

function validBraces($braces){


  $tracer = [];
    for($i=0; $i < strlen($braces); $i++){
      if ( $braces[$i] === "(" || $braces[$i] === "{" || $braces[$i] === "["){
        array_push($tracer, $braces[$i]);
      } else{
        if(count($tracer) === 0){
          return false;
        } 
        $lastValue = $tracer[count($tracer)-1];
        if( ($braces[$i] === ']' && $lastValue === '[') || ($braces[$i] === '}' && $lastValue === '{') || ($braces[$i] === ')' && $lastValue === '('))
        {
        array_pop($tracer);
        } else {
        break;
        }
    }
}
return count($tracer) === 0;
  

}

$a = ['[',']'];

echo count($a)."<br>";
echo validBraces("([]b)");