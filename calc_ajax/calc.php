<?php
// ini_set("display_errors", 1);
// error_reporting(E_ALL);

if($_REQUEST["operator_1"]=='+') {
  $rezultat=$_REQUEST["operand_1"]+$_REQUEST["operand_2"];
}

if($_REQUEST["operator_1"]=='-') {
  $rezultat=$_REQUEST["operand_1"]-$_REQUEST["operand_2"];
}

if($_REQUEST["operator_1"]=='*') {
  $rezultat=$_REQUEST["operand_1"]*$_REQUEST["operand_2"];
}

if($_REQUEST["operator_1"]=='/') {
  $rezultat=$_REQUEST["operand_1"]/$_REQUEST["operand_2"];
}

if($_REQUEST["operand_1"]==NULL OR $_REQUEST["operand_2"]==NULL) {
  $rezultat="Введите оба значения";
}

if($_REQUEST["operand_2"]=="0" AND $_REQUEST["operator_1"]=="/") {
  $rezultat="Введите второе значение отличное от нуля";
}

echo $rezultat;
?>
