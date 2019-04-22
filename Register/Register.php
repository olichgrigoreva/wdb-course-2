<?php
  ini_set("display_errors", 1);
  error_reporting(E_ALL);

  require_once("DataBase.php");

  function addBD($name, $pass, $email) {
    DataBase::connect();
    $strSQL = "INSERT INTO List_users(Name, Password, EMAil) VALUES ('$name', '$pass', '$email')";

//      echo "<pre>";
//      print_r($strSQL);
//      echo "</pre>";

    DataBase::query($strSQL);
  }

//  $result = "1";
  $result = addBD($_REQUEST["userName"], MD5($_REQUEST["password"]), $_REQUEST["email"]);
  echo $result;
?>
