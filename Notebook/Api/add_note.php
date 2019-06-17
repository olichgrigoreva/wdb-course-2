<?php 
    /*
    require_once "../PhpClasses/data_base.php";
    session_start();

    Data_base::connect("maymin_users");

    Data_base::query("INSERT INTO `notes` (`user_name`, `email`, `pass`) VALUES ('$user_name', '$email', '$pass')");
    */

    //$data_back = json_decode(file_get_contents('php://input'), true);
/*
    header("Content-Type: application/json");
    // build a PHP variable from JSON sent using POST method
    $v = json_decode(stripslashes(file_get_contents("php://input")));
    // build a PHP variable from JSON sent using GET method
    $v = json_decode(stripslashes($_GET["data"]));
    // encode the PHP variable to JSON and send it back on client-side
    echo json_encode($v);
*/
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    $data = file_get_contents('php://input');
    echo $data;

    $json = file_get_contents('php://input'); 
    $obj = json_decode($json);

    var_dump($obj);