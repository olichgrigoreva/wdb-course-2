<?php
  require "data_base.php";

  $val = "'{$_REQUEST['username']}', '{$_REQUEST['email']}', MD5('{$_REQUEST['password']}'), MD5('{$_REQUEST['passwordconf']}')";

  $base = new Data_base("Registration");

  $base->query("INSERT INTO `users` (`username`, `email`, `password`, `passwordconf`) VALUES ($val)");