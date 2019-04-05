<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

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
    $result = calculator($_REQUEST["first_field"],$_REQUEST["operation"],$_REQUEST["second_field"]);
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
	echo $result 
	?>

</body>
</html>