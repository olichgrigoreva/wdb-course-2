<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

  require_once("Database.php");
    function check_empty_fields(){
      if(isset($_REQUEST["login"])) {
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];

          if($username !== "" && $password !== "") {
            $add_new_user = new Database("localhost", "root", "virtual", "levashov");
            $check_query = "SELECT * FROM users WHERE username = '$username'";
            $check_results = $add_new_user->check_in_Database($check_query);

              if($check_results["username"] == $username && check_results["password"] == $password) {
                session_set_cookie_params(300);
                session_start();
                $_SESSION['login'] = $username;

                alert("Success");
                //header('Refresh: 5; URL=(../page/index.html)');
              }
                  else {
                    alert("Wrong login or password");
                  }
          }
                else {
                  alert("You left a few fields blank");
                }
      }
    }
