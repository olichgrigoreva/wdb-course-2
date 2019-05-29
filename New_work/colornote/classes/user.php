<?php
require_once("database.php");
class User {
   $database = new database(connect);
   
   
   
   
   
   $user = $_REQUEST["username"];
   $password = $_REQUEST["password"];
   $email = $_REQUEST["email"];
   
   
   function add_reg_user($connect){
      $add_user = "INSERT INTO Reg_users (username, password, email) VALUES ('$user', '$password', '$email')"; 
      $query($add_user);
      $fetch_assoc($query);
     
      // $ins_user = mysqli_query($connect, $add_user);
      // $query = mysqli_fetch_assoc($ins_user);
   
      echo"<pre>"; 
      print_r($query);
      echo"<pre>"; 
   }
}
?>
