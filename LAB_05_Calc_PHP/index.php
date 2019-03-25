<?php
  ini_set("display_errors", 1);
  error_reporting(E_ALL);
  $calcResult = "Abc";

  function calc($val1, $val2, $operation) {
    $result=0;
      switch($operation) {
        case "+":
          $result = $val1 + $val2;
          break;
        case "-":          
          $result = $val1 - $val2;
          break;
        case "*":
          $result = $val1 * $val2;
          break;
        case "/":
          if ($val2 != 0) {
              $result = $val1 / $val2;
            }
          else
            $result = "Not allow zero dizion!";
          break;
      } //switch($operation)
    return ($result);
  }

  function fMain() {    
    if (!empty($_REQUEST["submit"])) {
      $tmpRes = calc($_REQUEST["val1"], $_REQUEST["val2"], $_REQUEST["operation"]);
    } else $tmpRes = "BANANA";
    return $tmpRes;
  }

  $calcResult = fMain();
?>

<html>
  <head>
    <title>Calc</title>
    <style type="text/css">
      .value_inp {
      font-size:24px;
      width:150px;
    }

    .operationType {
      font-size:24px;
      background:transparent;
      border:none;
      outline:0;
      -webkit-appearance: none;
      -moz-appearance: none;
      -ms-appearance: none;
      appearance: none !important;  
    }

    .operationType:hover {
      border: solid;
    }

    .result {
      font-size:24px;
    }

    </style>

  </head>

  <body>
    <form method="POST">
      <input type="text" maxlength=5 class="value_inp" name = "val1" value="<? echo $_REQUEST["val1"] ?>" >
      <select class="operationType" name="operation">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">*</option>
          <option value="/">/</option>
      </select>      
      <input type="text" maxlength=5 class="value_inp" name="val2" value="<? echo $_REQUEST["val2"] ?>" >
      <a class="value_inp">  = </a>
      <a class="result value_inp"><?php echo $calcResult; ?>
      </a>
      <input type="submit" class="value_inp" name="submit" value="Calculate">
    </form>
  </body>
</html>