<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);


$connection = mysqli_connect("localhost", "root", "virtual", "Calc");

if(!empty($connection)) {

    if(!empty($_REQUEST)) {
        $resultOfCulc = calc($_REQUEST["firstOperant"], $_REQUEST["secondOperant"], $_REQUEST["operation"]);
    
        $insert_query = mysqli_query($connection, "INSERT INTO `calc_res`(`res`) VALUES ('$resultOfCulc')");
    }

    $query = mysqli_query($connection, "SELECT * FROM `calc_res` ORDER BY id DESC LIMIT 5");

    while($row = mysqli_fetch_assoc($query)) {
        echo($row['res']);
        echo '<br>';
    }
}

function check($a, $b) {
  if(!is_numeric($a) || !is_numeric($b) || is_nan($a) 
  || is_nan($b)) {
      return false;
  }
}

function calc($firstNum, $secondNum, $operation) {
  $res = 0;

  if(check($firstNum, $secondNum) === false) {
       return 'Enter the correct number!';
  } else {

      if($operation === '+') {
          $res = $firstNum + $secondNum;
      } else if ($operation === '-') {
          $res = $firstNum - $secondNum;
      } else if ($operation === '*') {
          $res = $firstNum * $secondNum;
      } else {
          $res = ($secondNum === '0' )? 'Cannot divide by zero':$firstNum / $secondNum;
      }

    }
    return $res;
}
