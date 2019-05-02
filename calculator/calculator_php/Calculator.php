<?php
	ini_set("display_errors", 1);
	error_reporting(E_ALL);
	
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
		return $result;
	}		
	if (!empty($_REQUEST["plus_button"])){
     	$result = calculator($_REQUEST["num1"], $_REQUEST["num2"], $_REQUEST["plus_button"]);
	}
	if (!empty($_REQUEST["minus_button"])){
     	$result = calculator($_REQUEST["num1"], $_REQUEST["num2"], $_REQUEST["minus_button"]);
	}
	if (!empty($_REQUEST["multiplication_button"])){
     	$result = calculator($_REQUEST["num1"], $_REQUEST["num2"], $_REQUEST["multiplication_button"]);
	}
	if (!empty($_REQUEST["division_button"])){
     	$result = calculator($_REQUEST["num1"], $_REQUEST["num2"], $_REQUEST["division_button"]);
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
				<input name = "plus_button" type = "submit" value = "+"/>
				<input name = "minus_button" type = "submit" value = "-"/>
				<input name = "multiplication_button" type = "submit" value = "*"/>
				<input name = "division_button" type = "submit" value = "/"/>
		</form>	
				<fieldset>
        			<legend><h2>Calculated result</h2></legend>
        			<output name = "result"><?php echo $result;?></output>
      				</fieldset>
	<body>
</html>