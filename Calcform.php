<?php

$in1 = $_REQUEST["sel1int"];
$in2 = $_REQUEST["sel2"];
$in3 = $_REQUEST["sel3int"];

		if ($in2==1){
			$result=$in1+$in3;
		}
		
		if ($in2==2){
			$result=$in1-$in3;
		}
			
		if ($in2==3){
			$result=$in1*$in3;
		}
		
		if ($in2==4){
			$result=$in1/$in3;
		}

//echo $result;

?>

<html>
<head>
        <meta charset="utf-8" />
<title>Калькулятор с использованием форм</title>

<!-- отключение стрелок в поле ввода -->
	<style>

	 
	.raz { 
              -moz-appearance: textfield;
	     }
            .raz::-webkit-inner-spin-button { 
  	    display: none;
	    }
	</style>


<body>
<form method="POST">

<!--Поле ввода первого числа-->
<input type="number" class="raz" name="sel1int" step="any"><text> Число 1 <br></text>
<br>
<!--Выпадающий список с выбором математическооперации-->
<select name="sel2">
<option value="0"> </option>
<option value="1">Сумма </option>
<option value="2">Разность </option>
<option value="3">Произведение </option>
<option value="4">Деление </option>
</select>
<br>
<text> <br></text>

<!--Поле ввода второго числа-->
<input type="number" class="raz" name="sel3int" step="any"><text> Число 2 <br></text>
<br>

<!--кнопка выполнить-->
	<input type="submit" value="Вычислить" name="sub"/>
	<br>
	<br>
	<?php echo '<input type="number" class="raz" value="'.$result.'">';?>
</form>	
</body>