<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

$in1 = $_REQUEST["input1"];
$in2 = $_REQUEST["select1"];
$in3 = $_REQUEST["input2"];
		if ($in2==1){
			$result=$in1+$in3;
			$operationdescr="+";
		}
		
		if ($in2==2){
			$result=$in1-$in3;
			$operationdescr="-";
		}
			
		if ($in2==3){
			$result=$in1*$in3;
			$operationdescr="*";
		}
		
		if ($in2==4){
			$result=$in1/$in3;
			$operationdescr="/";
		}
$connection = mysqli_connect("localhost", "root", "virtual", "kandrakhin");
if (!empty($connection)) {
$insert_query = "INSERT INTO kandrakhin(number1, operation ,number2, result) VALUES('$in1', '$operationdescr', '$in3', '$result')";
mysqli_query($connection, $insert_query);

$report = mysqli_query($connection, "SELECT * FROM kandrakhin ORDER BY id DESC limit 1");
for ($data = []; $row = mysqli_fetch_assoc($report); $data[] = $row);

}
$numbers='{"id": 138, "number1": 34, "operation": "+", "number2": 1, "result": 35}';
//$numbers = json_encode($data);
//echo $numbers;
//var_dump($numbers);
//print_r($numbers);
echo $numbers;
?>