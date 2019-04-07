<?php
session_start();
if(!isset($_SESSION['logged_user'])){
     header("Location: login.php");
     exit;
 }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Калькулятор</title>
    <script>
      function reset(event) {
        event.preventDefault();
        document.querySelector(".operand_1").value="";
        document.querySelector(".operand_2").value="";
        document.querySelector(".result").innerHTML="Результат.";
      }

      function calculate(event) {
        event.preventDefault();
        let form_1 = document.querySelector(".form_1");
        fetch("calc.php", {
          method: "POST",
          body: new FormData(form_1)
        })
        .then(response => {
          return response.text();
        })
        .then(text => {
          document.querySelector(".result").innerHTML=text;
        })
      }

      function exit_calc() {
        <?php

        $_SESSION = array();
        session_destroy();
        ?>
        document.location='login.php';

      }


    </script>
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
      <button class="btn btn-primary" onclick="exit_calc()" data-placement title="Нажмите чтобы выйти">Выход</button>
    </div>
  </div>
  <form class="form_1">
    <div class="row no-gutters">
      <div class="col-5">
        <input name="operand_1" type="text" class="operand_1 input_1 form-control" placeholder="Первое число" data-placement title="введите первое число">
      </div>
      <div class="col-2">
        <select name="operator_1" class="operator_1 select_1 custom-select" data-placement title="выберите операцию">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">*</option>
          <option value="/">/</option>
        </select>
      </div>
      <div class="col-5">
        <input name="operand_2" type="text" class="operand_2 input_1 form-control" placeholder="Второе число" data-placement title="введите второе число">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="alert alert-primary result centr_1" role="alert" data-placement title="поле с результатом">
          Результат.
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col centr_1">
        <button class="btn btn-success" onclick="calculate(event)" data-placement title="нажмите чтобы посчитать">Вычислить</button>
        <button class="btn btn-secondary" onclick="reset(event)" data-placement title="нажмите чтобы очистить поля">Очистить</button>
      </div>
    </div>
</form>
</div>
</body>
</html>
