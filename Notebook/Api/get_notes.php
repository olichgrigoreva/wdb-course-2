<?php
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Expose-Headers: X-Auth-Token");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, X-Auth-Token, Content-Type, Accept, Credentials");
    header('Content-Type: application/json');
    
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
        exit(0);
    }
    
    require_once "../PhpClasses/data_base.php";
    session_start();
    
    if(!empty($_SESSION)) {
    
        Data_base::connect("maymin_users");
            
        $user = $_SESSION['user'];
        $user_data =  Data_base::query_select("SELECT * FROM users WHERE `user_name`='$user'");
        $user_id = $user_data[0]['id'];

        $user_notes = Data_base::query_select("SELECT `id`, `label`, `text`, `date` FROM `notes` WHERE `user_id`='$user_id'");
    
        print_r(json_encode($user_notes));
    }
