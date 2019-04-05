<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

function calculator($first_digit, $operation, $second_digit){
	if($operation == "+"){
	$resulstat = $first_digit+$second_digit;
	}
	if($operation == "-"){
	$resulstat = $first_digit-$second_digit;
	}
	if($operation == "*"){
	$resulstat = $first_digit*$second_digit;
	}
	if($operation == "/"){
		if($second_digit == 0){
			$resulstat = "На ноль делить нельзя";
		}
		else{$resulstat = $first_digit/$second_digit;
		}
	}	
	return $resulstat;
}

if (!empty($_REQUEST["count_up"])) {
    $result = calculator($_REQUEST["first_field"],$_REQUEST["operation"],$_REQUEST["second_field"]);
    }
echo $result
?>