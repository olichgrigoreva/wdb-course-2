<?php
 function calculate(){
  $number1 = $_POST['number1'];
  $action = $_POST['action'];
  $number2 = $_POST['number2'];
  if ($_POST['calculate']){
   if (action=="+") {
    $result = $number1 + $number2;
   }
   if (action=="-") {
    $result = $number1 - $number2;
   }
   if (action=="*") {
    $result = $number1 * $number2;
   }
   if (action=="/"){
    $result = $number1 / $number2;
   }
  $result = 'Результат: ' + result;
  }
 }
?>
