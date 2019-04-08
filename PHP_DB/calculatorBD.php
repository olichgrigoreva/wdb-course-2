<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
$connection = mysqli_connect("localhost", "root", "virtual", "wdb") ;
//or die("Connection not available");
function calculator($first_digit, $operation, $second_digit){
	if($operation == "+"){
	$resulstat = $first_digit+$second_digit;
	}
	if($operation == "-"){
	$resulstat = $first_digit-$second_digit;
	}
	if($operation == "*"){
	$resulstat = $first_digit*$second_digit;
	}
	if($operation == "/"){
		if($second_digit == 0){
			$resulstat = "На ноль делить нельзя";
		}
		else{$resulstat = $first_digit/$second_digit;
		}
	}	
	return $resulstat;
}
if (!empty($_REQUEST["count_up"])) {
	$first_field = $_REQUEST["first_field"];
	$operation = $_REQUEST["operation"];
	$second_field = $_REQUEST["second_field"];
    $result = calculator($first_field, $operation, $second_field);
	
	mysqli_query($connection, "INSERT INTO operations(first, operation, second, result) VALUES('$first_field' ,'$operation' ,'$second_field' ,'$result')")	;	
		
    $select_query = mysqli_query($connection, "SELECT first, operation, second, result FROM operations ORDER BY id DESC LIMIT 5");
	//echo "!!!!!<pre>";
	//print_r($select_query);
	//echo "</pre>";
	while($five_result = mysqli_fetch_assoc($select_query)) {
        echo "<pre>";
        print_r($five_result);
        echo "</pre>";
        }
		
	//$five_users = mysqli_fetch_assoc($select_query);
	//echo "<pre>";
	//print_r($five_users);
	//echo "</pre>";
	}
?>

<html>
<head>
	<meta charset="utf-8"/>
    <title>Калькулятор на PHP</title>
</head>
<body>

	<form method = "POST">
	<input name = "first_field" type = "number" placeholder = "Введите первое число">
	<select name = "operation">
        <option value = "">Выберите действие</option>
        <option value = "+">Сложение</option>
        <option value = "-">Вычитание</option>
        <option value = "*">Умножение</option>
        <option value = "/">Деление</option>
	</select>
	<input name = "second_field" type = "number" placeholder = "Введите второе число">
	<input name="count_up" type="submit" value="Посчитать">
	</form>
	<?php 
	echo $result;
	?>

</body>
</html>