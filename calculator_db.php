<?php
 ini_set("display_errors", 1);
 error_reporting(E_ALL);
 
 $connection = mysqli_connect("localhost", "root", "virtual", "wdb");

 if (!empty ($connection)){
  $query = mysqli_query ($connection, "SELECT number1, action, number2, result FROM results ORDER BY created DESC LIMIT 5");
  while ($operation = mysqli_fetch_assoc ($query)){
   echo "<pre>";
   print_r ($operation);
   echo "</pre>";
  }
 }

 function calculate($number1, $action, $number2){
  if ($action=="+") {
   $result = $number1 + $number2;
  }
  elseif ($action=="-") {
   $result = $number1 - $number2;
  }
  elseif ($action=="*") {
   $result = $number1 * $number2;
  }
  elseif ($action=="/") {
   $result = $number1 / $number2;
  }
  return $result;
 }

 if (!empty($_REQUEST["submit"])) {
  $number1 = $_REQUEST['number1'];
  $action = $_REQUEST['action'];
  $number2 = $_REQUEST['number2'];
  $result = calculate ($number1, $action, $number2);
  $insert_query = mysqli_query ($connection, "INSERT INTO results(number1, action, number2, result) VALUES ('$number1', '$action', '$number2', '$result')");
 }
?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Калькулятор</title>
 </head>
 <body>
  <form method="POST">
   <input type="number" name="number1">
   <select name="action">
    <option>+</option>
    <option>-</option>
    <option>*</option>
    <option>/</option>
   </select>
   <input type="number" name="number2">
   <input type="submit" name="submit" value="calculate">
  </form>
  <?php echo $result;?>
 <body>
</html>
