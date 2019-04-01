<?php
  ini_set("display_errors", 1);
  error_reporting(E_ALL);

  $calcRes = "";
  $num1 = "";
  $num2 = "";

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

  function funcCalc() {
    if (!empty($_REQUEST["submit"])) {
      $res = Calc($_REQUEST["num1"], $_REQUEST["oper"], $_REQUEST["num2"]);
    }
    else { $res = "";}
    return $res;
  }

  $calcRes = funcCalc();
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
      <input type="text" class="inputText" name="num1" value="<?php echo $_REQUEST["num1"]; ?>">
      <select class="inputText" name="oper" class="OperLi">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>
      <input type="text" class="inputText" name="num2" value="<?php echo $_REQUEST["num2"]; ?>">
      <input type="submit" class="inputText" name="submit" value=" = ">
      <a class="outputText"> <?php echo $calcRes ?> </a>
    </form>
  </body>
</html>
