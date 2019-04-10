<?php
  ini_set("display_errors", 1);
  error_reporting(E_ALL);  

  function calc($val1, $val2, $operation) {
    $result="not definitions";
      switch($operation) {
        case "+":
          $result = $val1 + $val2;
          break;
        case "-":          
          $result = $val1 - $val2;
          break;
        case "*":
          $result = $val1 * $val2;
          break;
        case "/":
          if ($val2 != 0) {
              $result = $val1 / $val2;
            }
          else
            $result = "Not allow zero dizion!";
          break;
      } //switch($operation)
    return ($result);
  }

  echo calc($_REQUEST["value1"], $_REQUEST["value2"], $_REQUEST["operation"]);
?>