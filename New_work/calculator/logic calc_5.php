<?php
$db=new Database(calculator_5);

$val_1=$_REQUEST["val1"];
$val_2=$_REQUEST["val2"];
$operation = $_REQUEST[""];

$calc_5 = new Calc_5();

if ($operation == "+"){
    return $calculator_5-> push_plus($val_1,$val_2);
}














?>