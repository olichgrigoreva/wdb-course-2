<?php 

    require_once "../Php/Header.php";
    require_once "../Php/PhpClasses/data_base.php";
    session_start();

    $data = file_get_contents('php://input');
    $data_decode = json_decode($data);
 
    if(!empty($_SESSION) && !empty($data)) {

        $id = $data_decode->id;
        $label = $data_decode->label;
        $text = $data_decode->text;
        $date = $data_decode->date;
 
        Data_base::connect("maymin_users");
         
        Data_base::query("UPDATE `notes` SET `label` = '$label', `text` = '$text', `date` = '$date' WHERE `id` = '$id'");
    }