<?php
	ini_set("display_errors", 1);
	error_reporting(E_ALL);
	$connection = mysqli_connect("localhost", "root", "virtual", "calculator_select");
	function calculate($num1, $num2, $operation, $result){
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
     	$result = calculate($_REQUEST["num1"], $_REQUEST["num2"], $_REQUEST["operation"]);
	}

	$connection = mysqli_connect("localhost", "root", "virtual", "calculator_select");
	if (!empty($_REQUEST["submit"])) {
   	$num1=$_REQUEST["num1"];
    	$operation=$_REQUEST["operation"];
    	$num2=$_REQUEST["num2"];
   	$result=calculate($num1, $operation, $num2);
    	$insert_query = "INSERT INTO calculator_result (first_number, operation, second_number, result) VALUES('$num1' , '$operation' , '$num2' , '$result')";
    	echo $insert_query;
    	mysqli_query($connection, $insert_query);    
    	$select_query = mysqli_query($connection, "SELECT * FROM calculator_result ORDER BY id DESC LIMIT 5");
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
	
				<hr>
				<p><output name = "result"><?php echo $result;?></output></p>
				<hr>
				<?php 
                		if (!empty($_REQUEST["submit"])){
                    		echo '<br> Input_data: ' . $num1 . $operation . $num2;
                    		echo '<br> Result: ' . $result;
                    		echo '<br> Last 5 records:<br>';
                    		while($last_result = mysqli_fetch_assoc($select_query)) {
                        	echo $last_result['first_number'] . $last_result['operation'] . $last_result['second_number'] . "=" . $last_result['result'] . "<br>";
                   			}
                		}
            			?>
		</form>
	</body>
</html>