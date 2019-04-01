<?php
 ini_set("display_errors,1");

 function calculate(){
  $number1 = $_POST['number1'];
  $action = $_POST['action'];
  $number2 = $_POST['number2'];
  if ($_POST['calculate']){
   if ($action=="+") {
    $result = $number1 + $number2;
   }
   elseif ($action=="-") {
    $result = $number1 - $number2;
   }
   elseif ($action=="*") {
    $result = $number1 * $number2;
   }
   elseif ($action=="/"){
    $result = $number1 / $number2;
   }
  return $result;
  }
 }
 if (!empty($_REQUEST["submit"])) {
  $result = calculate ($_REQUEST['number1'], $_REQUEST['action'], $_REQUEST['number2']);
  echo $result;
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
