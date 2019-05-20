<?php
  include_once(__DIR__.'/../../../SYSTEM/PHP/CLASSES/session.php');
  $session = new authorize;
  $session->open();
  if (!$session->checkEq()) die;
  $session::changeID();

  require_once(__DIR__.'/../../../SYSTEM/PHP/CLASSES/db.php');
  $SQL = new dbSQL(dbNAME);
  $connectResult = $SQL::connect();
  if ($connectResult == true) {
      if (!empty($_REQUEST["login"])) { // login button
          if ($SQL::ValidateLogin($_REQUEST["username"], MD5($_REQUEST["pass1"])) == 'LOGIN OK') {
              include_once __DIR__.'/../../../PAGES/NOTEBOOK/PHP/notebook.php';
                die;
          } else {
//                echo('<script type="text/javascript" src="/PAGES/LOGIN/JS/login_error.js"></script>');
              echo('<script>alert("Login or Password not correct");</script>');
          }
      } else
        if (!empty($_REQUEST["register"])) { // register button
/*
            $strRequest  =__DIR__.'/../../REGISTER/PHP/register.php';
            $strRequest .='?username='.$_REQUEST["username"];
            $strRequest .=',pass1='.$_REQUEST["pass1"];
            echo($strRequest);
            include_once ($strRequest);
*/
            include_once (__DIR__.'/../../REGISTER/PHP/register.php');
            die;
        }
  } else die('DB_CONNECT_ERROR'); // if ($SQL::connect())

  require __DIR__.'/../../../THEMES/PHP/header.php';
  require __DIR__.'/../../../PAGES/LOGIN/PHP/loginForm.php';
  require __DIR__.'/../../../THEMES/PHP/footer.php';
