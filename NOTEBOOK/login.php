<?php
  include_once('session.php');
  $session = new authorize;
  $session->open();
  if (!$session->checkEq()) die;
  $session::changeID();

  require_once("db.php");
  $SQL = new dbSQL(dbNAME);
  $connectResult = $SQL::connect();
  if ($connectResult == true) {
      if (!empty($_REQUEST["login"])) { // login button
          if ($SQL::ValidateLogin($_REQUEST["username"], MD5($_REQUEST["pass1"])) == 'LOGIN OK') {
              include('conStart.php'); echo('Login OK'); include('conEnd.php');
              include_once('notebook.php');
                die;
          } else {
              include('conStart.php'); echo('Login or Password not correct'); include('conEnd.php');
              include_once('index.php');
              echo('<script>alert("Login or Password not correct");</script>');
              die;
          }
      } else
        if (!empty($_REQUEST["register"])) { // register button
            include_once('register.php');
            die;
        } else die('empty request');
  } else die('DB_CONNECT_ERROR'); // if ($SQL::connect())
?>