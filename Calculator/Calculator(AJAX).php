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

  $result = Calc($_REQUEST["num1"], $_REQUEST["oper"], $_REQUEST["num2"]);
  echo $result;
?>
