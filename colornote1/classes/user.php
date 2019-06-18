<?php
require_once("database.php");
class User {
   private $database;
    
   
   function add_reg_user($connect){
      $this->database = new Database();
      $this->database->connect();
      $user = $_REQUEST["pole_user"];
      $password = $_REQUEST["pole_password"];
      $email = $_REQUEST["pole_email"];
      
      $add_user = "INSERT INTO Reg_users (username, password, email) VALUES ('$user',MD5('$password'), '$email')"; 
      $this->database->query($add_user);
          
   
      // $ins_user = mysqli_query($connect, $add_user);
      // $query = mysqli_fetch_assoc($ins_user);
   
      // echo"<pre>"; 
      // print_r($query);
      // echo"<pre>"; 
   }
}

