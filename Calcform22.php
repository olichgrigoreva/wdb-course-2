<?php

$in1 = $_REQUEST["input1"];
$in2 = $_REQUEST["select1"];
$in3 = $_REQUEST["input2"];

		if ($in2==1){
			$result=$in1+$in3;
			$resultstring='сложение';
		}
		
		if ($in2==2){
			$result=$in1-$in3;
			$resultstring='вычитание';
		}
			
		if ($in2==3){
			$result=$in1*$in3;
			$resultstring='умножение';
		}
		
		if ($in2==4){
			$result=$in1/$in3;
			$resultstring='деление';
		}

//echo $result;
echo '<div>Введенное первое число:</div>
	  <input type="number" class="raz" value="'.$in1.'">
	  <div>Выбранная математическая операция:</div>
	  <input type="text" value="'.$resultstring.'">
	  <br>
	  <div>Введенное второе число:</div>
	  <input type="number" class="raz" value="'.$in3.'">
      <div>Результат вычисления:</div>
	  <input type="number" class="raz" value="'.$result.'">
	  <br>
	  <input type="button" value="Сбросить результат вычисления" onclick="redirect ()"/>';
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
	
	<script>
	function redirect(){
	window.location.href = 'calcform22.htm';
	}
	</script>
