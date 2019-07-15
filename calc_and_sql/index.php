<?php
//вывод ошибок
ini_set("display_errors", 1);
error_reporting(E_ALL);

$connection = mysqli_connect("localhost", "user", "user", "calc_operations");//host,username,password,dbname,port,socket

//функция расчета
function calc($calc_a,$calc_operation,$calc_b) {
    switch ($calc_operation) { //поиск допустимого символа для операции
        case "+": //если +, то складываем числа
            $calc_result=$calc_a+$calc_b;
            break;
        case "-":
            $calc_result=$calc_a-$calc_b;
            break;
        case "*":
            $calc_result=$calc_a*$calc_b;
            break;
        case "/": 
            if ($calc_b==0){ //если получен знак деления и число b=0
                $calc_result= "На ноль делить нельзя!";     
            }
            else{
                $calc_result=$calc_a/$calc_b; //выполняем деление
            }
            break;        
        default: //если получен неизвестный символ
            $calc_result="Неизвестная операция";
            break;
    }
    //вывод полученных символов и результата
    return $calc_result;
}

//определение переменных
$result = "";
$calc_num1 = "";
$operation = "";
$calc_num2 = "";
//$last_result = "";

//по нажатию submit, если ассоциативный массив передался не пустой (все, что есть в теге form), то выполняем расчет
if (!empty($_REQUEST["submit"])) {
    
    $calc_num1=$_REQUEST["num1"];
    $operation=$_REQUEST["operation"];
    $calc_num2=$_REQUEST["num2"];
    
    $result=calc($calc_num1,$operation,$calc_num2);
    
    //запрос на вставку данных в таблицу
    $insert_query = "INSERT INTO calc_table (first_operands, operations, second_operands, results) VALUES('$calc_num1' , '$operation' , '$calc_num2' , '$result')";
    echo $insert_query;
    
    //подключение к БД и передача запросса на запись результата в таблицу
    mysqli_query($connection, $insert_query);    
    
    //запрос на вывод 5 последних записей из таблицы
    $select_query = mysqli_query($connection, "SELECT * FROM calc_table ORDER BY id DESC LIMIT 5");
}
?>

<html>
    <head>
        <meta charset="utf8">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
    </head>
    <body>
        <form>

            <div class="p-3">   
        
            <h3>Калькулятор</h3>   
            
            <!--обязательные для заполнения поля (required)-->
            <input required name="num1" class="form-control mb-3" placeholder="Введите число" type="number" >
            <select required name="operation" class="form-control mb-3">
                <!--<option disabled selected>Выберите действие</option>-->
                <option value="">Выберите действие</option>
                <option value="+">Сложить</option>
                <option value="-">Вычесть</option>
                <option value="*">Умножить</option>
                <option value="/">Делить</option>
            </select>
            <input required name="num2" class="form-control mb-3" placeholder="Введите число" type="text" />
            <input class="btn btn-info" name="submit" type="submit" value="Рассчитать">
            
            <?php 
                if (!empty($_REQUEST["submit"])) {
                    echo '<br> Входные данные: ' . $calc_num1 . $operation . $calc_num2;//склеивание: перенос строки и вывод результата
                    echo '<br> Результат: ' . $result;
                    echo '<br> Последние 5 записей БД:<br>';
                    
                    /*вывод данных из таблицы mysqli_fetch_assoc($select_query) извлекает из таблицы по одной записи
                    пока last_result не пустой, выводим записи*/
                    while($last_result = mysqli_fetch_assoc($select_query)) {
                        echo $last_result['first_operands'] . $last_result['operations'] . $last_result['second_operands'] . "=" . $last_result['results'] . "<br>";
                        //print_r($last_result);
                    }
                }
            ?>

            </div>
        </form>
    </body>
</html>