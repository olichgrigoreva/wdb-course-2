<?php
  ini_set("display_errors", 1);
  error_reporting(E_ALL);

  $calcRes = "?";
  echo 1;
  exit();
  function Calc($n1, $op, $n2) {
    $res = "";
    if ((!(empty($n1))) && (!(empty($n2)))) {
      if ($op=="+") {
        $res=parseFloat($n1)+parseFloat($n2);
      }
      else {
        if ($op=="-") {
          $res=parseFloat($n1)-parseFloat($n2);
        }
        else {
          if ($op=="*") {
            $res=parseFloat($n1)*parseFloat($n2);
          }
          else {
            if (parseFloat($n2)==0) {
              $res="На ноль не делится!";
            }
            else {
              $res=parseFloat($n1)/parseFloat($n2);
            }
          }
        }
      }
    }
    else {
      $res="Ошибка ввода числа";
    }
    return $res;
  }

  if (!empty($_REQUEST["submit"])) {
    $calc_Res = Calc($_REQUEST["num1"], $_REQUEST["oper"], $_REQUEST["num2"]);
    //echo $result;
  //   return $result;
  }
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
      .space {
        padding: 10px;
      }
    </style>

    <title> Caculater </title>

  </head>
  <body>
    <?php
    echo 1;
    exit();
    ?>
    <div class="topic_text" "space">
      Калькулятор
      <hr>
    </div>
    <form method="POST">
      <input type="text" class="inputText" name="num1" value="<?php echo $_REQUEST["num1"]; ?>">
      <select name="oper" class="OperLi">
        <option value="+" selected="selected">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>
      <input type="text" class="inputText" name="num2" value="<?php echo $_REQUEST["num2"]; ?>">
      <input type="submit" name="submit" value=" = ">

      <a class="inputText" value="<?php echo $calcRes ?>" >
      </a>
    </form>
  </body>
</html>
