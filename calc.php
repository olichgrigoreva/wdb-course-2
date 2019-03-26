<?php
// ini_set("display_errors", 1);
// error_reporting(E_ALL);

function check($a, $b) {
    if(!is_numeric($a) || !is_numeric($b) || is_nan($a) 
    || is_nan($b)) {
        return false;
    }
}

function calc($firstNum, $secondNum, $operation) {
    $res = 0;

    // $firstNum = $_REQUEST["firstOperant"];
    // $secondNum = $_REQUEST["secondOperant"];
    // $operation = $_REQUEST["operation"];

    if(check($firstNum, $secondNum) === false) {
        return 'Enter the correct number!';
    }

    if($operation === '+') {
        $res = $firstNum + $secondNum;
    } else if ($operation === '-') {
        $res = $firstNum - $secondNum;
    } else if ($operation === '*') {
        $res = $firstNum * $secondNum;
    } else {
        $res = $firstNum / $secondNum;
    }

    return (is_infinite($res)) ? "Сannot be divided by zero":$res;
}

  calc($_REQUEST["firstOperant"], $_REQUEST["secondOperant"], $_REQUEST["operation"]);

?>