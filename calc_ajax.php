<?php
 function calculate(){
  $number1 = $_POST['number1'];
  $action = $_POST['action'];
  $number2 = $_POST['number2'];

  if ($action=="+") {
   $result = $number1 + $number2;
  }
  elseif ($action=="-") {
   $result = $number1 - $number2;
  }
  elseif ($action=="*") {
   $result = $number1 * $number2;
  }
  elseif ($action=="/"){
   $result = $number1 / $number2;
  }
  return $result;
 }
?>
