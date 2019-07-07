<?php

    require_once "../../Php/PhpClasses/data_base.php";

    Data_base::connect("maymin_users");

    $user_name = Data_base::check_val($_REQUEST['username']);
    $email = Data_base::check_val($_REQUEST['email']);
    $pass = MD5(Data_base::check_val($_REQUEST['password']));

    Data_base::query("INSERT INTO `users` (`user_name`, `email`, `pass`) VALUES ('$user_name', '$email', '$pass')");

    $user_id = Data_base::query_select("SELECT `id` FROM users WHERE `user_name`='$user_name'")[0]['id'];
    session_start();
    $_SESSION['id'] = $user_id;