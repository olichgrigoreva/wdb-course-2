<?php
ini_set ("display_errors, 1");
error_reporting(E_ALL);

  require_once("Database.php");
    $add_new_user_connet = new Database("localhost", "root", "virtual", "levashov");
    $username=$_REQUEST['username'];
    $user_password=$_REQUEST['password'];
    $email=$_REQUEST['e_mail'];

    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $check_results = $add_new_user_connect->check_in_DataBase($check_query);

      if($check_results == "") {
        $insert_query = "INSERT INTO users(username, password, email) VALUES ('$username', '$password', '$email')";
        $add_new_user_connet->write_to_Database($insert_query);
        echo "User is created";
      }
        else {
          echo "This login has already use";
        }
