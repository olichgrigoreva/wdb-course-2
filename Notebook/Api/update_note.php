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