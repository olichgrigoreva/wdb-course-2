<?php
	function check($num1, $num2) {
 	if(!is_numeric($num1) || !is_numeric($num2) || is_nan($num1) || is_nan($num2)){
      	return false;
	}
	}
	function calculator($num1, $num2, $sign){
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
	}		
     	calculator = ($_REQUEST["num1"], $_REQUEST["num2"], $_REQUEST["plus_button"]);
     	calculator = ($_REQUEST["num1"], $_REQUEST["num2"], $_REQUEST["minus_button"]);
     	calculator = ($_REQUEST["num1"], $_REQUEST["num2"], $_REQUEST["multiplication_button"]);
     	calculator = ($_REQUEST["num1"], $_REQUEST["num2"], $_REQUEST["division_button"]);
?>