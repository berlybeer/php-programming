<?php 


function divider($a, $b){
	assert($b != 0, '$b cannot be 0');

	return($a/$b);
}

echo divider(200, 3);
echo divider(10, 0);



// class DividerParameterException extends AssertionException{

// }


// function divider($a, $b){
// 	assert($b != 0, new DividerParameterException('$b cannot b 0'));

// 	return($a/$b);
// }



 ?>