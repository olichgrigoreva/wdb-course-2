<?php

    require_once "../Php/Header.php";
    require_once "../Php/PhpClasses/data_base.php";
    session_start();

    $data = file_get_contents('php://input');
    $data_decode = json_decode($data);

    if(!empty($_SESSION) && !empty($data)) {

        $id = $data_decode->id;
    
        Data_base::connect("maymin_users");

        Data_base::query("DELETE FROM `notes` WHERE `id` = '$id'");
    }