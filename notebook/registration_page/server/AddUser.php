<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
require_once("../client/Database.php");
  function debug($data){
      echo '<pre>' . print_r($data, 1) . '</pre>';
  }
    $add_new_user_connect = new Database("localhost", "root", "virtual", "levashov");
    $username=$_REQUEST['username_field'];
    $user_password=$_REQUEST['password_field'];
    $email=$_REQUEST['e_mail_field'];
    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $check_results = $add_new_user_connect->check_in_DataBase($check_query);

      if($check_results == "") {
          $insert_query = "INSERT INTO users(username, password, email) VALUES('$username', '$user_password', '$email')";
          $add_new_user_connect->write_to_DataBase($insert_query);
          echo "User created";
      }
        else {
            echo "This login has already use";
        }
