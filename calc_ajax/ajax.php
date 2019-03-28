<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
function result($number_1, $number_2, $operator) {
  switch ($operator) {
    case "+": return $number_1 + $number_2;
    case "-": return $number_1 - $number_2;
    case "*": return $number_1 * $number_2;
    case "/": return $number_1 / $number_2;
  }
}
echo result($_REQUEST["number_1"], $_REQUEST["number_2"], $_REQUEST["operator"]);
?>
