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

     $connection = Database::connect();
     /*echo "<pre>";
     print_r ($connection);
     echo "</pre>";
     echo "<pre>";
     print_r (mysqli_connect_error());
     echo "</pre>";
     echo "<pre>";
     echo mysqli_errno($connection);
     echo "</pre>";
     echo "<pre>";
     print_r (mysqli_error($connection));
     echo "</pre>";*/
     $sql_command = "SELECT * FROM users_ziazova WHERE username='".$username."' ORDER BY username";
     //echo $sql_command;
     $query = Database::query($sql_command);
     $user  = Database::fetch_assoc($query);

     if (empty($user)){
       $sql_command = "INSERT into users_ziazova (username, password, email) VALUES ('".$username."', md5 '".$password', '$email')";
       $query = Database::query($sql_command);

       /*if (!empty($query)){
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
     }*/
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
