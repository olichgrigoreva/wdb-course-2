<?php

$connection = mysqli_connect("localhost", "user", "user", "calc_operations");

$operand1=$_REQUEST["operand1"];
$operation=$_REQUEST["operation"];
$operand2=$_REQUEST["operand2"];

if (($operand1!=NULL) AND ($operand2!=NULL)) {

	switch ($operation) {
		case '+':
			$result=$operand1+$operand2;
		break;

		case '-':
			$result=$operand1-$operand2;
		break;

		case '*':
			$result=$operand1*$operand2;
		break;

		case '/':
			if ($operand2!=0) {
				$result=$operand1/$operand2;	
			}
			else{
				$result="Деление на ноль!";
			}		
		break;
	}
}
else{
	$result="Введите числа для расчета";
}
//echo $result;

$insert_query = "INSERT INTO calc_table (first_operands, operations, second_operands, results) VALUES('$operand1' , '$operation' , '$operand2' , '$result')";
    //echo $insert_query;
    
    //подключение к БД и передача запросса на запись результата в таблицу
    mysqli_query($connection, $insert_query);

$select_query = mysqli_query($connection, "SELECT * FROM calc_table ORDER BY id DESC LIMIT 5");

                    echo '<br> Входные данные: ' . $operand1 . $operation . $operand2;//склеивание: перенос строки и вывод результата
                    echo '<br> Результат: ' . $result;
                    echo '<br> Последние 5 записей БД:<br>';
                    
                    /*вывод данных из таблицы mysqli_fetch_assoc($select_query) извлекает из таблицы по одной записи
                    пока last_result не пустой, выводим записи*/
                    while($last_result = mysqli_fetch_assoc($select_query)) {
                        echo $last_result['first_operands'] . $last_result['operations'] . $last_result['second_operands'] . "=" . $last_result['results'] . "<br>";
                        //print_r($last_result);
                    }
               

//echo $result;
?>