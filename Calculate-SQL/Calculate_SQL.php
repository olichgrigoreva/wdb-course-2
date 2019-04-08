<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

$operand1 = $_REQUEST["operand1"];
$operand2 = $_REQUEST["operand2"];
$operation = $_REQUEST["operation"];

if ($_REQUEST["operand1"] == NULL) {
  $result = "Fill in all the fields";
} else if ($_REQUEST["operation"] = NULL) {
  $result = "Fill in all the fields";
} else if ($_REQUEST["operand2"] == NULL) {
  $result = "Fill in all the fields";
} else if ($operation == "+") {
  $result = $operand1 + $operand2;
} else if ($operation == "-") {
  $result = $operand1 - $operand2;
} else if ($operation == "*") {
  $result = $operand1 * $operand2;
} else if ($operation == "/") {
  if ($operand2 == 0) {
    $result = "Invalid operation with zero";
  } else {
    $result = $operand1 / $operand2;
  }
}

echo $result;

$connection = mysqli_connect("localhost", "root", "virtual", "wdb");
if (!empty($connection)) {

  $insert_query =
    "INSERT INTO Calculator (operand_1, operation, operand_2, result) VALUES('$operand1', '$operation', '$operand2', '$result')";
  $query = mysqli_query($connection, $insert_query);

  $select_query = mysqli_query($connection, "SELECT operand_1, operation, operand_2, result FROM Calculator ORDER BY id DESC LIMIT 5");
  while ($total = mysqli_fetch_assoc($select_query)) {
    echo "<pre>";
    print_r($total);
    echo "</pre>";
  }
}
