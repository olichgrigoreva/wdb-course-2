<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

function result($operand_1, $operand_2, $operator) {
  switch ($operator) {
    case "+": return $operand_1 + $operand_2;
    case "-": return $operand_1 - $operand_2;
    case "*": return $operand_1 * $operand_2;
    case "/": return $operand_1 / $operand_2;
  }
}
$operand_1 = $_POST["operand_1"];
$operand_2 = $_POST["operand_2"];
$operator = $_POST["operator"];
if ($operand_1 && $operand_2) {
  $operationResult = result($_REQUEST["operand_1"], $_REQUEST["operand_2"], $_REQUEST["operator"]);
  echo "Ответ: " . $operationResult . "<br>";
  echo "<br>";

  $host = "localhost";
  $user = "root";
  $password = "virtual";
  $database = "wdb";

  $link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));
  //Заносим данные операции в базу
  $query = "INSERT INTO calculator (operand_1, operator, operand_2, operationResult)
  VALUES ('$operand_1','$operator','$operand_2','$operationResult')";
  $result = mysqli_query ($link, $query)
    or die("Ошибка " . mysqli_error($link));
  //Забираем данные о предыдущих операциях
  $query = "SELECT operand_1, operator, operand_2, operationResult
  FROM calculator
  ORDER BY id DESC LIMIT 5";
  $result = mysqli_query ($link, $query) or die("Ошибка " . mysqli_error($link));
    if ($result) {
    echo "Предыдущие операции:";
    for ($i = 0 ; $i < 5 ; $i++) {
      $row = mysqli_fetch_row ($result); //Функция выбора строки из mysqli_query
        echo "<li>";
        for ($j = 0 ;$j < 3 ;$j++) echo $row[$j];
        if ($j == 3) echo "=" . $row[$j];
        echo "</li>";
      }
    }
  mysqli_close($link);
}
?>
