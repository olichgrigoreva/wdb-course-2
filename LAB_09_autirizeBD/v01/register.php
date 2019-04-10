<?php

  const dbHOST = 'localhost';
  const dbUSER = 'aleks';
  const dbPASS = '123';
  const dbNAME = 'aleks';
  const dbTABLE = 'users';

  ini_set("display_errors", 1);
  error_reporting(E_ALL);

  $registerResult="Not connect to database";
  if (!empty($_REQUEST["submitRegister"])) {
    $userName=$_REQUEST["username"];
    $userPassword=md5($_REQUEST["pass1"]);
    $userEmail=$_REQUEST["email"];
        echo(" _submit ok_ ");
        echo(" _".$userName." -user_ ");
        echo(" _".$userPassword." -pass_ ");
        echo(" _".$userEmail." -mail_ ");
    $mysqli = mysqli_init();
    $connection = mysqli_connect(dbHOST, dbUSER, dbPASS, dbNAME);
    if(!empty($connection)) {
      $queryStr="SELECT * FROM  `".dbTABLE."` WHERE  `login` LIKE  '".$userName."'";
      $query=mysqli_query($connection, $queryStr);
      if ($query->num_rows>0) {$registerResult="Login already register";}
      else {
        $queryStr="SELECT * FROM  `".dbTABLE."` WHERE  `email` LIKE  '".$userEmail."'";
        $query=mysqli_query($connection, $queryStr);
        echo($queryStr."-query_ ");
        echo("<pre>");print_r($query);echo("</pre>");
        echo($query->num_rows);
        if ($query->num_rows>0) $registerResult="email already register";
        else {
            $queryStr="INSERT INTO ".dbTABLE."(`login`, `password`, `email`) VALUES ('";
            $queryStr.=$userName."', '";
            $queryStr.=$userPassword."', '";
            $queryStr.=$userEmail."')";
            echo($queryStr);
            $query=mysqli_query($connection, $queryStr);
            if (mysqli_query($connection, $query)==1) $registerResult="Register OK";
            print_r($query);
        }
      }
    }
  }
  echo($registerResult);
?>
