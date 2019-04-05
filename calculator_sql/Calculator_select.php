<?php
	ini_set("display_errors", 1);
	error_reporting(E_ALL);
	
	function calculator($num1, $num2, $operation, $result){
		if ($operation=="+"){
		$result=$num1+$num2;
		}
		if ($operation=="-"){
		$result=$num1-$num2;
		}
		if ($operation=="*"){
		$result=$num1*$num2;
		}
		if ($operation=="/"){
			if ($num2=="0"){
			$result = "False";
			}
				else{
				$result=$num1/$num2;
		}
		}
		return $result;
	}		
	if (!empty($_REQUEST["calculate_button"])){
     	$result = calculator($_REQUEST["num1"], $_REQUEST["num2"], $_REQUEST["operation"]);
	}

	function DB($num1, $operation, $num2, $result){
	$connection = mysqli_connect("localhost", "root", "virtual", "calculator_select");
		if (!empty($connection)){
			$strSQL = "INSERT INTO calculator_result (first_number, operation, second_number, result) VALUES ('$num1', '$operation', '$num2', '$result')";
      	mysqli_query($connection, $strSQL);
    		}
 	}
	
	function communication(){
	$connection = mysqli_connect("localhost", "root", "virtual", "calculator_select");
	$query = mysqli_query($connection, "SELECT * FROM calculator_result ORDER BY id DESC LIMIT 5");
		while($calculator_result = mysqli_fetch_assoc($query)){
	echo "<pre>";
	print_r($calculator_result);
	echo "</pre>";
		}
	}
?>
<html>
	<head>
	</head>
	<body>
		<form method = "POST">
			<p>First number:</br>
			<input type = "number" class = "first_number" name = "num1"/></p>
			<select name = "operation">
				<option value = "">Select operation</option>
                		<option value = "+">+</option>
                		<option value = "-">-</option>
                		<option value = "*">*</option>
                		<option value = "/">/</option>
			</select>
			<p>Second number:</br>
			<input type = "number" class = "second_number" name = "num2"/></p>
				<input name = "calculate_button" type = "submit" value = "Calculate">
		</form>
				<hr>
				<p><output name = "result"><?php echo $result;?></output></p>
				<hr>
				<div class = "bd_text" "space"><p><?php $communication = communication(); ?></p></div>
	</body>
</html>