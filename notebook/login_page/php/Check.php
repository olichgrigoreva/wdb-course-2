<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

  require_once("Database.php");
    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $check_results = $add_new_user->check_in_Database($check_query);
      if(check_results == "") {
        $insert_query = "INSERT INTO users(username, password, email) VALUES('$username', '$password', '$email')";
        $add_new_user->write_to_Database($insert_query);
        echo "User created";
      }
          else {
            echo "This login has already use";
          }
