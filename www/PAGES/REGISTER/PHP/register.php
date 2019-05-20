<?php
  include_once(__DIR__.'/../../../SYSTEM/PHP/CLASSES/session.php');
  $session = new authorize;
  $session->open();
  if (!$session->checkEq()) die;
  $session::changeID();

      if ($submit == 'REGISTER') {
        echo('_Register_');
        die;
        $userEmail=$_REQUEST["email"];
        if ($query->num_rows>0) {$strResult="Login already register";}
        else {
            $queryStr="SELECT * FROM  `".dbTABLE."` WHERE  `email` LIKE  '".$userEmail."'";
            $query=mysqli_query($connection, $queryStr);
            if ($query->num_rows>0) $strResult="email already register";
            else {
                $queryStr="INSERT INTO ".dbTABLE."(`login`, `password`, `email`) VALUES ('";
                $queryStr.=$userName."', '";
                $queryStr.=$userPassword."', '";
                $queryStr.=$userEmail."')";
                $query=mysqli_query($connection, $queryStr);
                $queryResult = mysqli_query($connection, $query);
                if ($query == 1) $strResult="Register OK";
                die;
            }
        }
      } // if ($submit == 'REGISTER')



    require __DIR__.'/../../../THEMES/PHP/header.php';

    echo('<script type="text/javascript" src="/PAGES/REGISTER/JS/register.js"></script>');
    $str = '<script>'.'regFormJS.createPage('.$_REQUEST["username"].','.$_REQUEST["pass1"].');</script>';
    echo($str);
    require __DIR__.'/../../../THEMES/PHP/footer.php';

    die;