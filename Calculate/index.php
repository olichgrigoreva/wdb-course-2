<?php
//вывод ошибок
/*ini_set("display_errors", 1);
error_reporting(E_ALL);*/

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
            $calc_result="";
            break;
    }
    //вывод полученных символов и результата
    return $calc_result;
}

$result = "";//определение переменных
$a = "";
$operation = "";
$b = "";

//по нажатию submit, если ассоциативный массив передался не пустой (все, что есть в теге form), то выполняем расчет
if (!empty($_REQUEST["submit"])) {
    
    $a=$_REQUEST["a"];
    $operation=$_REQUEST["operation"];
    $b=$_REQUEST["b"];
    
    $result=calc($a,$operation,$b);
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
    </head>
    <body>
        <form>

            <div class="p-3">   
        
            <h3>Калькулятор</h3>   
            
            <!--обязательные для заполнения поля (required)-->
            <input required name="a" class="form-control mb-3" placeholder="Введите число" type="number" >
            <select required name="operation" class="form-control mb-3">
                <!--<option disabled selected>Выберите действие</option>-->
                <option value="">Выберите действие</option>
                <option value="+">Сложить</option>
                <option value="-">Вычесть</option>
                <option value="*">Умножить</option>
                <option value="/">Делить</option>
            </select>
            <input required name="b" class="form-control mb-3" placeholder="Введите число" type="text" />
            <input class="btn btn-info" name="submit" type="submit" value="Рассчитать">
            <?php echo '<br> Входные данные: ' . $a . $operation . $b;//склеивание: перенос строки и вывод результата
                echo '<br> Результат: ' . $result;
            ?> 
            </div>
        </form>
    </body>
</html>