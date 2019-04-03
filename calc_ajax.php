<?php
 function calculate(){
  $number1 = $_REQUEST['number1'];
  $action = $_REQUEST['action'];
  $number2 = $_REQUEST['number2'];

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
