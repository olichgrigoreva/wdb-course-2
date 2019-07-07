<?php

    require_once "../Php/Header.php";
    require_once "../Php/PhpClasses/data_base.php";
    session_start();
    
    if(!empty($_SESSION)) {
    
        Data_base::connect("maymin_users");
            
        $user_id = $_SESSION['id'];

        $user_notes = Data_base::query_select("SELECT `id`, `label`, `text`, `date` FROM `notes` WHERE `user_id`='$user_id'");
    
        print_r(json_encode($user_notes));
    }
