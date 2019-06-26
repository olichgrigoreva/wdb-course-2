<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();
// $_SESSION['user_id'] = $user_id;

require_once("../../classes/validation.php");
require_once("../../classes/user.php");


    if(!empty($check_name) && !empty($check_pass) && !empty($check_user_email)) {
        
        $user = new Auth;

        $user -> registr( $_REQUEST["pole_user"], $_REQUEST["pole_password"], $_REQUEST["pole_email"] );

    }

    else{ 
        echo "вы где-то накосячили!";
    }


$validation = new validation;

    $check_name = $validation -> check_username ($_REQUEST["pole_user"]);
    $check_pass = $validation -> check_password ($_REQUEST["pole_password"]);
    $check_conf_pass = $validation -> check_conf_password ($_REQUEST["pole_password"], $_REQUEST["pole_confirm_password"] );
    $check_user_email = $validation -> check_email ($_REQUEST["pole_email"]);



