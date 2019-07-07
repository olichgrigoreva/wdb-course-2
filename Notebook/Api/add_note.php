<?php
 
    require_once "../Php/Header.php";
    require_once "../Php/PhpClasses/data_base.php";
    session_start();

    $data = file_get_contents('php://input');
    $data_decode = json_decode($data);
    
    if(!empty($_SESSION) && !empty($data)) {

        $label = $data_decode->label;
        $text = $data_decode->text;
        $date = $data_decode->date;
    
        Data_base::connect("maymin_users");
            
        $user_id = $_SESSION['id'];

        Data_base::query("INSERT INTO `notes` (`label`, `text`, `user_id`, `date`) VALUES ('$label', '$text','$user_id', '$date')");
    }
