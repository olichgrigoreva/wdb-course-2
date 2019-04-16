<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

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
$connection = mysqli_connect("localhost", "root", "virtual", "calc");
if (!empty($connection)) {
$insert_query = "INSERT INTO calc(number1, number2, result) VALUES('$in1', '$in3', '$result')";
mysqli_query($connection, $insert_query);
}

echo $result;
?>