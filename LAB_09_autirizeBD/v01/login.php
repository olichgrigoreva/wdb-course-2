<?php

  const dbHOST = 'localhost';
  const dbUSER = 'aleks';
  const dbPASS = '123';
  const dbNAME = 'aleks';
  const dbTABLE = 'users';

  ini_set("display_errors", 1);
  error_reporting(E_ALL);

  $loginResult="Not connect to database";
  if (!empty($_REQUEST["submitLogin"])) {
    $userName=$_REQUEST["usernameLogin"];
    $userPassword=md5($_REQUEST["passwordLogin"]);
    $mysqli = mysqli_init();
    $connection = mysqli_connect(dbHOST, dbUSER, dbPASS, dbNAME);
    if(!empty($connection)) {
      $queryStr="SELECT * FROM  `".dbTABLE."` WHERE  `login` LIKE  '".$userName."'";
      $query=mysqli_query($connection, $queryStr);
      if (!empty($query)) {
        $queryResult=mysqli_fetch_assoc($query);
        if ($userName == $queryResult['login']) $loginResult="OK";
          else $loginResult="password error";
        } //if (!empty($query))
        else $loginResult="login error";
      } // if(!empty($connection))
    } // if (!empty($_REQUEST["submitLogin"]))
    echo($loginResult);
?>
