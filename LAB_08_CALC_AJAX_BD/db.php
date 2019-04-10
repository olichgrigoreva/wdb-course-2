<?php
  const CNT_RECORD_DISPLAY=5;
  function getLastRecord() {
  $mysqli = mysqli_init();
  $connection=mysqli_connect('127.0.0.1', 'aleks', '123', 'aleks');
  if(!empty($connection)) {
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


  if (!empty($_REQUEST["submit"])) {
    $val1=$_REQUEST["val1"];
    $val2=$_REQUEST["val2"];
    $op=$_REQUEST["operation"];

    $calcResult = calc($val1, $val2, $op);
    if(!empty($connection)) {
      $insertQuery=mysqli_query($connection, "INSERT INTO calc(value1, value2, operation, result) 
        VALUES('$val1', '$val2', '$op', '$calcResult')");
      mysqli_query($connection, $insertQuery);
    }
  } else {
    $calcResult = "";
    $_REQUEST["val1"]="";
    $_REQUEST["val2"]="";
  }
?>
 