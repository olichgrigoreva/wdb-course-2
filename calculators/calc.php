<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

$result = "";
function result ($a, $b, $sigh) {
  switch ($sigh) {
    case "+": return $a + $b;
    case "-": return $a - $b;
    case "*": return $a * $b;
    case "/": return $a / $b;
  }
}
// function result ($sigh, $value1, $value2){
//   if ($sigh == "+") {$result = $value1 + $value2;}
//   if ($sigh == "-") {$result = $value1 - $value2;}
//   if ($sigh == "*") {$result = $value1 * $value2;}
//   if ($sigh == "/") {$result = $value1 / $value2;}
//   return $result;
// }
if (!empty($_REQUEST["sigh"]) and !empty($_REQUEST["operand1"]) and !empty($_REQUEST["operand2"])) {
  // $result = "Ответ: " . result ($_REQUEST["sigh"], (int)$_REQUEST["operand1"], (int)$_REQUEST["operand2"]);
  $result = "Ответ: " . result ((int)$_REQUEST["operand1"], (int)$_REQUEST["operand2"], $_REQUEST["sigh"]);
}
?>
<html>
<head>
</head>
<body>
  <form>
  <div>
    <input name=operand1 type="number" placeholder="1 число">
    <input name=operand2 type="number" placeholder="2 число">
  </div>
  <p><select size="5" name="sigh">
    <option disabled>Выберите действие</option>
    <option value="+">сложить</option>
    <option value="-">вычесть</option>
    <option value="*">умножить</option>
    <option value="/">разделить</option>
  </select></p>
  <p><input type="submit" value="Вычислить"></p>
  <p><?php echo $result ?></p>
  </form>
</body>
</html>
