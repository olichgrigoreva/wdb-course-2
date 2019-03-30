<?php

$in1 = $_REQUEST["sel1int"];
$in2 = $_REQUEST["sel2"];
$in3 = $_REQUEST["sel3int"];

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