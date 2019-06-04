<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
require_once("../client/Database.php");

$add_user = new Database("localhost", "root", "virtual", "levashov");
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$email=$_REQUEST['e_mail'];

$check_query = "SELECT * FROM users WHERE username = '$username'";
$check_results = $add_user->check_in_DataBase($check_query);

function debug($data) {
  echo '<pre>' . print_r($data, 1) . '</pre>';
}

if($check_results == "") {
    $insert_query = "INSERT INTO users(username, password, email) VALUES('$username', '$password', '$email')";
    $add_user->write_to_DataBase($insert_query);
    echo "User created";
}
else {
    echo "This login has already used";
}
