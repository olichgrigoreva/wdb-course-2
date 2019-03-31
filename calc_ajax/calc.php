<?php

$operand1=$_REQUEST["operand1"];
$operation=$_REQUEST["operation"];
$operand2=$_REQUEST["operand2"];

if (($operand1!=NULL) AND ($operand2!=NULL)) {

	switch ($operation) {
		case '+':
			$result=$operand1+$operand2;
		break;

		case '-':
			$result=$operand1-$operand2;
		break;

		case '*':
			$result=$operand1*$operand2;
		break;

		case '/':
			if ($operand2!=0) {
				$result=$operand1/$operand2;	
			}
			else{
				$result="Деление на ноль!";
			}		
		break;
	}
}
else{
	$result="Введите числа для расчета";
}
echo $result;
?>