<?php
  ini_set("display_errors", 1);
  error_reporting(E_ALL);

  function Calc($n1, $op, $n2) {
    $res = "";
    if ((!(empty($n1))) && (!(empty($n2)))) {
      if ($op=="+") { $res=floatval($n1)+floatval($n2); }
      else {
        if ($op=="-") { $res=floatval($n1)-floatval($n2); }
        else {
          if ($op=="*") { $res=floatval($n1)*floatval($n2); }
          else {
            if (floatval($n2)==0) { $res="На ноль не делится!"; }
            else { $res=floatval($n1)/floatval($n2); }
          }
        }
      }
    }
    else { $res="Ошибка ввода числа"; }
    return $res;
  }

  function insertBD($n1, $op, $n2, $res) {
    $connection = mysqli_connect("localhost", "root", "virtual", "CalculatorRecords");
    if (!empty($connection)) {
      $strSQL = "INSERT INTO Records(number1, operation, number2, result) VALUES ('$n1', '$op', '$n2', $res)";
      mysqli_query($connection, $strSQL);
    }
  }

  function displayBD() {
    $connection = mysqli_connect("localhost", "root", "virtual", "CalculatorRecords");
    if (!empty($connection)) {
      $query = mysqli_query($connection, "SELECT * FROM Records ORDER BY id DESC LIMIT 5");
      // БД отсортирована по id в обратном порядке и взяты 5 первых записей
      while($rec = mysqli_fetch_assoc($query)) {
        echo "<pre>";
        print_r($rec);
        echo "</pre>";
      }
    }
  }

  if (!empty($_REQUEST["submit"])) {
    $calcRes = Calc($_REQUEST["num1"], $_REQUEST["oper"], $_REQUEST["num2"]);
    $insBD = insertBD($_REQUEST["num1"], $_REQUEST["oper"], $_REQUEST["num2"], $calcRes);
  }
  else { $calcRes = ""; }
?>

<html>
  <head>
    <meta charset="utf-8">
    <style>
      .topic_text {
        background-color: #CCCCCC;
        font-size: 32px;
        font-style: italic;
        color: red;
        padding-top: 10px;
        text-align: center;
      }
      .bd_text {
        background-color: #CCCCCC;
        font-size: 12px;
        font-style: italic;
        padding-top: 10px;
      }
      .inputText {
        padding: 2px;
        font-size:18px;
      }
      .outputText {
        padding: 2px;
        font-size:22px;
      }
      .space {
        padding: 10px;
      }
    </style>

    <title> Calculator </title>

  </head>
  <body>
    <div class="topic_text" "space">
      Калькулятор
      <hr>
    </div>
    <form method="POST">
      <input type="text" class="inputText" name="num1" value="<?php if (!empty($_REQUEST["num1"])) { echo $_REQUEST["num1"]; } else { echo ""; } ?>">
      <select class="inputText" class="OperLi" name="oper">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>
      <input type="text" class="inputText" name="num2" value="<?php if (!empty($_REQUEST["num2"])) { echo $_REQUEST["num2"]; } else { echo ""; } ?>">
      <input type="submit" class="inputText" name="submit" value=" = ">
      <a class="outputText"> <?php echo $calcRes ?> </a>
    </form>
    <div class="bd_text" "space">
      Последние 5 записей из БД
      <?php $dispBD = displayBD(); ?>
    </div>
  </body>
</html>
