<?php
 ini_set("display_errors", 1);
 error_reporting(E_ALL);

 if (!empty($_POST)) {
  $username = $_POST["username"];
  $password = $_POST["pass"];
  $confirm_pass = $_POST["conf_pass"];
  $e_mail = $_POST["mail"];
 }

 require_once ("../validator.php");
 require_once ("../database.php");
 require_once ("../session.php");
 ?>
