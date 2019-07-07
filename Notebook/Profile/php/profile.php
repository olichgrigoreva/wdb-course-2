<?php

    require_once "../../Php/PhpClasses/data_base.php";

    session_start();
        
    Data_base::connect("maymin_users");

    $user_id = $_SESSION['id'];
    $user = Data_base::query_select("SELECT `user_name` FROM users WHERE `id`='$user_id'")[0]['user_name'];
    $pass = Data_base::query_select("SELECT `pass` FROM users WHERE `id`='$user_id'")[0]['pass'];

    $update_user_name = Data_base::check_val($_REQUEST['username']);
    $update_email = Data_base::check_val($_REQUEST['email']);
    $update_pass = MD5(Data_base::check_val($_REQUEST['password']));

    $check_uniqe_user = Data_base::query_select("SELECT `user_name` FROM users WHERE `user_name`='$update_user_name'");
    $check_uniqe_email = Data_base::query_select("SELECT `email` FROM users WHERE `email`='$update_email'");

        
    if(!empty($check_uniqe_user) && !empty($check_uniqe_email)) {
        echo 'user and mail false';
    } else if(!empty($check_uniqe_email)) {
        echo 'mail false';
    } else if(!empty($check_uniqe_user)) {
        echo 'user false';
    } else {
        Data_base::query("UPDATE `users` SET `user_name` = '$update_user_name', `email` = '$update_email', `pass` = '$update_pass'  WHERE `users`.`id` = '$user_id'");
    }


