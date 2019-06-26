<?php
require_once("database.php");
class User {
   private $database;
    
   
   function add_reg_user(){
      $this->database = new Database();
      $this->database->connect();
      $user = $_REQUEST["pole_user"];
      $password = $_REQUEST["pole_password"];
      $email = $_REQUEST["pole_email"];
      
      $add_user = "INSERT INTO Reg_users (username, password, email) VALUES ('$user',MD5('$password'), '$email')"; 
      echo $add_user;
      $this->database->query($add_user);
      // echo "user + $user + ";   
   
      // echo"<pre>"; 
      // print_r($query);
      // echo"<pre>"; 
   }

   function select_user($user, $password){
      $this -> database = new Databse();
      $this -> database -> connect();
      $user = $_REQUEST["pole_user"];
      $password = $_REQUEST["pole_password"];
      $sel_user = "SELECT * FROM Req_users WHERE username = '$user' AND password = MD5('$password')";
      echo $sel_user;
      $query = $this -> database -> query($sel_user);
      
      while($row =  mysqli_fetch_assoc($query)){
         return $row;  
      }
   }


}

