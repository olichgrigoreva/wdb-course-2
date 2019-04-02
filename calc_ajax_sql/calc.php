<?php
// ini_set("display_errors", 1);
// error_reporting(E_ALL);

$operand_1=$_REQUEST["operand_1"];
$operand_2=$_REQUEST["operand_2"];
$operator_1=$_REQUEST["operator_1"];


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

$db_host = "localhost";
$db_user = "register";
$db_password = "register";
$db_base = "register_form";
$db_table = "calc";

$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$mysqli->query("INSERT INTO ".$db_table." (operand_1, operand_2, operator_1, resultat) VALUES ('$operand_1','$operand_2','$operator_1','$rezultat')");

$rezultat="";

$massiv_result=$mysqli->query("SELECT * FROM ".$db_table." ORDER BY id DESC LIMIT 5");
while ($stroki_result=mysqli_fetch_assoc($massiv_result)) {
$rezultat="</br>".$stroki_result["operand_1"].$stroki_result["operator_1"].$stroki_result["operand_2"]."=".$stroki_result["resultat"].$rezultat;
}

echo $rezultat;

?>
