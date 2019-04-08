<?php
	ini_set("display_errors", 1);
	error_reporting(E_ALL);
	$connection = mysqli_connect("localhost", "root", "virtual", "calculator_select");

	function calculate($num1, $operation, $num2){
    		switch ($operation){
        	case "+":
            		$result=$num1+$num2;
            		break;
        		case "-":
            			$result=$num1-$num2;
            			break;
       				case "*":
             				$result=$num1*$num2;
            				break;
        				case "/": 
            					if ($num2==0){
                				$result= "false";  
            					}
            					else{
                 				$result=$num1/$num2;
            					}
            					break;        
       							default:
            						$result="false";
            						break;
    		}
    		return $result;
	}
	if (!empty($_REQUEST["submit"])) {
	$num1 = $_REQUEST["num1"];
	$operation = $_REQUEST["operation"];
    	$num2 = $_REQUEST["num2"];
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
        		<form>
			<input name = "num1" placeholder = "first_number" type = "number"/>
            		<select required name = "operation">               
                	<option value = "">Select_operation</option>
                	<option value = "+">+</option>
               		<option value = "-">-</option>
                	<option value = "*">*</option>
                	<option value = "/">/</option>
           		</select>
            		<input name = "num2" placeholder = "first_number" type = "number" />
            		<input name = "submit" type = "submit" value = "Calculate">
			<hr>
			<p><output name = "result"><?php echo $result;?></output></p>
           		<?php 
                	if (!empty($_REQUEST["submit"])) {
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