<?php
  require_once "../../PhpClasses/data_base.php";

  Data_base::connect("maymin_users");

  $user_name = Data_base::check_val($_REQUEST['username']);
  $email = Data_base::check_val($_REQUEST['email']);
  $pass = MD5(Data_base::check_val($_REQUEST['password']));

  session_start();
  $_SESSION['user'] = $user_name;
  $_SESSION['email'] = $email;
  $_SESSION['pass'] = $pass;

 Data_base::query("INSERT INTO `users` (`user_name`, `email`, `pass`) VALUES ('$user_name', '$email', '$pass')");