<?php
  const dbHOST = '127.0.0.1';
  const dbUSER = 'aleks';
  const dbPASS = '123';
  const dbNAME = 'aleks';
  const CNT_RECORD_DISPLAY=5;

  ini_set("display_errors", 1);
  error_reporting(E_ALL);

  $calcResult = "";
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

  if (!empty($_REQUEST["submit"])) {
    $val1=$_REQUEST["val1"];
    $val2=$_REQUEST["val2"];
    $op=$_REQUEST["operation"];
    $calcResult = calc($val1, $val2, $op);

    $mysqli = mysqli_init();
    $connection = mysqli_connect(dbHOST, dbUSER, dbPASS, dbNAME);
    if(!empty($connection)) {
      $insertQuery=mysqli_query($connection, "INSERT INTO calc(value1, value2, operation, result) 
        VALUES('$val1', '$val2', '$op', '$calcResult')");
      mysqli_query($connection, $insertQuery);

    $query=mysqli_query($connection, "SELECT * FROM calc ORDER BY id DESC LIMIT 1".CNT_RECORD_DISPLAY);
    $queryResult=mysqli_fetch_assoc($query); // assoc - associated massive
//    echo($query->num_rows);
    $i=0;
    while (!empty($queryResult) && $i<CNT_RECORD_DISPLAY) {
      $resultString=$queryResult['value1']." ";
      $resultString.=$queryResult['operation']." ";
      $resultString.=$queryResult['value2']." ";
      $resultString.="= ";
      $resultString.=$queryResult['result'];
//      $resultString.="  created: ";
//      $resultString.=$queryResult['created'];

      $lastDBRecords[$i]=$resultString;
      $lastDBRecordsDates[$i]=$queryResult['created'];
      $i++;
      $queryResult=mysqli_fetch_assoc($query);
    }


    }
  } else {
    $calcResult = "";
    $_REQUEST["val1"]="";
    $_REQUEST["val2"]="";
  }
?>

<html>
  <head>
    <title>Calc</title>
    <style type="text/css">
      .value_inp {
      font-family:Arial; 
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
      font-family:Arial;
      font-size:24px;
    }
    
    .dateCreated {
      font-family:Arial;
      font-size:12px;
      margin: 0px 30px 0px 30px;
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
    <a class="result value_inp">
      <?php 
        $i=0;        
        while($i<count($lastDBRecords)) {            
            echo("<span class='dateCreated'>".$lastDBRecordsDates[$i]."</span>");
            echo($lastDBRecords[$i]."<br>");
          $i++;
        }
      ?>
  </body>
</html>
 