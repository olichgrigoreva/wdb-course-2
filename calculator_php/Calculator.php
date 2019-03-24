<?php
	ini_set("display_errors", 1); 
	error_reporting(E_ALL);
	
	function calculator($num1, $num2, $radio){

	$num1=$_REQUEST["num1"];
	$num2=$_REQUEST["num2"];
	$radio=$_REQUEST["radio"];
	
		if ($_REQUEST["radio"] == "+"){
		$result = $num1 + $num;
		echo "$result = $num1 + $num2";
		}
			if ($_REQUEST["radio"] == "-"){
			$result = $num1 - $num;
			echo "$result = $num1 - $num2";
			}
				if ($_REQUEST["radio"] == "*"){
				$result = $num1 * $num;
				echo "$result = $num1 * $num2";
				}
					if ($_REQUEST["radio"] == "/"){
					$result = $num1 / $num;
					echo "$result = $num1 / $num2";
					}	
	return $result;
	}		
	if (!empty($_REQUEST["submit"])) {
     	$calculator = calculator($_REQUEST["num1"], $_REQUEST["num2"], $_REQUEST["radio"]);
	}
?>
<html>
	<head>
	</head>
	<body>
		<?php echo $result;?>	
		<form method = "POST">
			<p>First number:</br>
			<input type = "number" id = "num1" name = "num1"/></p>
			<p>Second number:</br>
			<input type = "number" id = "num2" name = "num2"/></p>
				<input type = "button" name = "radio" placeholder = "plus" value = "+"/>
				<input type = "button" name = "radio" placeholder = "minus" value = "-"/>
				<input type = "button" name = "radio" placeholder = "multiplication" value = "*"/>
				<input type = "button" name = "radio" placeholder = "division" value = "/"/>
				<button type = "submit" name = "result" id= "result" value = "Result"/>Calculator</button>

		</form>	
	</body>
</html>