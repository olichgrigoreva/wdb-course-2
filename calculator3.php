<?php
 function calculate(){
  $number1 = $_POST['number1'];
  $action = $_POST['action'];
  $number2 = $_POST['number2'];
  if ($_POST['calculate']){
   if (action=="+") {
    $result = $number1 + $number2;
   }
   if (action=="-") {
    $result = $number1 - $number2;
   }
   if (action=="*") {
    $result = $number1 * $number2;
   }
   if (action=="/"){
    $result = $number1 / $number2;
   }
  $result = 'Результат: ' + result;
  }
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
   <input type="number" id="number1">
   <select id="action">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
   </select>
   <input type="number" id="number2">
   <input type="submit" name="submit" value="calculate">
  </form>
  <?php echo $result;?>
 <body>
</html>
