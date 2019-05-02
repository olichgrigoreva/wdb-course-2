<?php
	ini_set("display_errors", 1);
	error_reporting(E_ALL);
	
	function calculator($num1, $num2, $operation){
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
?>
<html>
	<head>
	</head>
	<body>
		<form method = "POST">
			<p>First number:</br>
			<input type = "number" class = "first_number" name = "num1"/></p>
			<p>Second number:</br>
			<input type = "number" class = "second_number" name = "num2"/></p>
			<select name = "operation">
				<option value = "">Select operation</option>
                		<option value = "+">+</option>
                		<option value = "-">-</option>
                		<option value = "*">*</option>
                		<option value = "/">/</option>
				<input name = "calculate_button" type = "submit" value = "Calculate">
			</select>
		</form>	
				<hr>
        			<p><output name = "result"><?php echo $result;?></output></p>
		</body>
</html>