<?php
function check($a, $b) {
  if(!is_numeric($a) || !is_numeric($b) || is_nan($a) 
  || is_nan($b)) {
      return false;
  }
}

function calc($firstNum, $secondNum, $operation) {
  $res = 0;

  if(check($firstNum, $secondNum) === false) {
       echo 'Enter the correct number!';
  } else {

      if($operation === '+') {
          $res = $firstNum + $secondNum;
      } else if ($operation === '-') {
          $res = $firstNum - $secondNum;
      } else if ($operation === '*') {
          $res = $firstNum * $secondNum;
      } else {
          $res = $firstNum / $secondNum;
      }

      echo (is_infinite($res)) ? "Сannot be divided by zero":$res;
  }
}

calc($_REQUEST["firstOperant"], $_REQUEST["secondOperant"], $_REQUEST["operation"]);
?>