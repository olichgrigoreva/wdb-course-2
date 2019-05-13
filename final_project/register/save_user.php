<?php
 ini_set("display_errors", 1);
 error_reporting(E_ALL);

 require_once ("../common/validator.php");
 require_once ("../common/database.php");
 require_once ("../common/session.php");

 if (!empty($_POST)) {
   if (Validator::validate_register()){
     Database::connect();
     $sql_command = "SELECT * FROM users WHERE username = '{$username}'";
     $result = Database::query($sql_command);

     if (!empty($result)){
       echo "Пользователь с таким ником уже существует. Попробуйте ещё раз";
     }
     else{
       $sql_command = "INSERT INTO users (username, password, e-mail) VALUES ('$username', MD5'$password', '$email')";
       $result = Database::query($sql_command);

       $user = $result[0]['username'];
       Session::set('user', $user);
       header("location:/notebook/index.html");
     }
    else {
      echo "Проверьте правильность заполнения полей";
    }
   }
 }
 ?>
