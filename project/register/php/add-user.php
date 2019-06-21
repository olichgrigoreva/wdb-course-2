<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
require_once("database.php");

$add_user = new database("localhost", "root", "virtual", "levashov");
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$confirm_password=$_REQUEST['confirm_password'];
$email=$_REQUEST['e_mail'];

//$query = "INSERT INTO users (username, password, confirm_password, email) VALUES ( 'second', '123', '123', 'second@yandex.ru')";
//echo "$query";

$check_query = "SELECT * FROM users WHERE username = '$username'";
$check_results = $add_user->check_in_DataBase($check_query);

  function debug($data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
  }
    if($check_results == "") {
        $insert_query = "INSERT INTO users(username, password, confirm_password, email) VALUES('$username', MD5('$password'), MD5('$confirm_password'), '$email')";
        $add_user->write_to_DataBase($insert_query);
          echo "User created";
          }
            else {
              echo "This login has already used";
            }
