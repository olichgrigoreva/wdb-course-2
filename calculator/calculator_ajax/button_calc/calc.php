<?php
	ini_set("display_errors", 1);
  	error_reporting(E_ALL); 
	function calculate($num1, $num2, $sign){
		if ($sign=="+"){
		$result=$num1+$num2;
		}
		if ($sign=="-"){
		$result=$num1-$num2;
		}
		if ($sign=="*"){
		$result=$num1*$num2;
		}
		if ($sign=="/"){
			if ($num2=="0"){
			$result = "False";
			}
				else{
				$result=$num1/$num2;
		}
		}
		return $result;
	}		
     	echo calculate($_REQUEST["num1"], $_REQUEST["num2"], $_REQUEST["plus_button"]);
     	echo calculate($_REQUEST["num1"], $_REQUEST["num2"], $_REQUEST["minus_button"]);
     	echo calculate($_REQUEST["num1"], $_REQUEST["num2"], $_REQUEST["multiplication_button"]);
     	echo calculate($_REQUEST["num1"], $_REQUEST["num2"], $_REQUEST["division_button"]);

	function check($num1, $num2) {
 		if(!is_numeric($num1) || !is_numeric($num2) || is_nan($num1) || is_nan($num2)){
      		return false;
		}
			else {
	$result = calcualete ($_REQUEST["num1"],$_REQUEST["num2"],$_REQUEST["plus_button"]);
	$result = calcualete ($_REQUEST["num1"],$_REQUEST["num2"],$_REQUEST["minus_button"]);
	$result = calcualete ($_REQUEST["num1"],$_REQUEST["num2"],$_REQUEST["multiplication_button"]);
	$result = calcualete ($_REQUEST["num1"],$_REQUEST["num2"],$_REQUEST["division_button"]);
    	echo $result;
			}
	}
?>