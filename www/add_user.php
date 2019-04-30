<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once("Database.php");

$add_new_user_connect = new Database("localhost", "root", "virtual", "cherepanov");

$username=$_REQUEST['username_field'];
$user_password=$_REQUEST['pass_field'];
$email=$_REQUEST['email_field'];

//проверка что юзер существует
$check_query = "SELECT COUNT(username) FROM users WHERE username = '$username'";

$add_new_user_connect->check_in_DataBase($check_query);
$check_results = $add_new_user_connect->check_in_DataBase($check_query);

echo $check_results;

if($check_results == 0) {
    $insert_query = "INSERT INTO users(username, password, email) VALUES('$username', '$user_password', '$email')";
    $add_new_user_connect->write_to_DataBase($insert_query);
    echo "User is created";
}
else{
    echo "User exist";
}


