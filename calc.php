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

?>

<!-- Тело калькулятора -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Калькулятор</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-reboot.min.css">
    <style media="screen">
      .width_1 {
        width: 500px;
      }
      .text_1 {
        font-size: 30px;
        color: #208ee8;
      }
      .centr_1 {
        text-align: center;
      }
    </style>
  </head>
<body>
<div class="container width_1">
  <div class="row">
    <div class="col text_1 centr_1">
      Калькулятор
    </div>
  </div>
  <form class="" action="calc.php" method="post">
  <div class="row no-gutters">
    <div class="col-5">
      <input name="operand_1" type="text" class="operand_1 input_1 form-control" value="" placeholder="Первое число" data-placement title="введите первое число">
    </div>
    <div class="col-2">
      <select class="operator_1 select_1 custom-select" name="operator_1" data-placement title="выберите операцию">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>
    </div>
    <div class="col-5">
      <input name="operand_2" type="text" class="operand_2 input_1 form-control" value="" placeholder="Второе число" data-placement title="введите второе число">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="alert alert-primary result centr_1" role="alert" data-placement title="поле с результатом">
        <?php echo $rezultat; ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col centr_1">
      <button type="submit" class="btn btn-success" onclick="calculate()" data-placement title="нажмите чтобы посчитать">Вычислить</button>
      <button type="reset" class="btn btn-danger" onclick="reset()" data-placement title="нажмите чтобы очистить поля">Очистить</button>
    </div>
  </div>
</form>
</div>
</body>
</html>
