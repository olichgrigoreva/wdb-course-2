<?php

$in1 = $_REQUEST["input1"];
$in2 = $_REQUEST["select1"];
$in3 = $_REQUEST["input2"];

		if ($in2==1){
			$result=$in1+$in3;
		}
		
		if ($in2==2){
			$result=$in1-$in3;
		}
			
		if ($in2==3){
			$result=$in1*$in3;
		}
		
		if ($in2==4){
			$result=$in1/$in3;
		}

echo $result;

?>