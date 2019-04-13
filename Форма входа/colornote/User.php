<?php
require_once(DataBase);

$user = $_REQUEST["username"];
$password = $_REQUEST["password"];

function add_reg_user($connect){
   $add_user = "INSERT INTO Reg_users (username, password)VALUES ('$user', '$password')"; 
   $ins_user = mysqli_query($connect, $add_user);
   $query = mysqli_fetch_assoc($ins_user);

   echo"<pre>"; 
   print_r($query);
   echo"<pre>"; 
}

?>