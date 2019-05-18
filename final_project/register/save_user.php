<?php
 ini_set("display_errors", 1);
 error_reporting(E_ALL);

 require_once ("../common/validator.php");
 require_once ("../common/database.php");
 require_once ("../common/session.php");

 if (!empty($_POST)) {
   $username     = $_POST['username'];
   $password     = $_POST['password'];
   $confirm_pass = $_POST['confirm_pass'];
   $email        = $_POST['email'];

   $username     = Validator::clean($username);
   $password     = Validator::clean($password);
   $confirm_pass = Validator::clean($confirm_pass);
   $email        = Validator::clean($email);

   if (!empty($username) && !empty($password) && !empty($confirm_pass) && !empty($email) && Validator::passwords_match($password, $confirm_pass)){
     $email = Validator::check_email($email);

     Database::connect();
     $sql_command = "SELECT * FROM users WHERE username = '$username'";
     $query = "";
     Database::query($sql_command);
     Database::fetch_assoc();

     if (empty($user)){
       $sql_command = "INSERT into users (username, password, email) VALUES ('$username', md5 '$password', '$email')";
       Database::query($sql_command);

       if (!empty($query)){
         Session::set('username', $username);
         if (!empty($_SESSION('username'))){
           $result = ;
         }
       }

       else {
         return false;
       }
     }

     else {
       return false;
     }
   }

   else {
     return false;
   }
 }

 else {
   exit ("Проверьте правильность заполнения полей.");
 }

 //echo $username."<br />".$password."<br />".$confirm_pass."<br />".$email."<br />";
 ?>
