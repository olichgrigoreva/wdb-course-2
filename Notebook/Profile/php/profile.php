<?php

    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    require_once "../../PhpClasses/data_base.php";

    session_start();
    $user = $_SESSION['user'];
    $pass = $_SESSION['pass'];

    Data_base::connect("maymin_users");

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
        $old_data_user = Data_base::query_select("SELECT * FROM users WHERE `user_name`='$user' AND `pass`='$pass'");
    
        $old_data_user_id = $old_data_user[0]['id'];
        
        Data_base::query("UPDATE `users` SET `user_name` = '$update_user_name', `email` = '$update_email', `pass` = '$update_pass'  WHERE `users`.`id` = '$old_data_user_id'");
    
        $_SESSION['user'] = $update_user_name;
        $_SESSION['pass'] = $update_pass;
    }


