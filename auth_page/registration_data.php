<?php
//$connection = mysqli_connect("localhost", "user", "user", "registration_data");//host,username,password,dbname,port,socket
ini_set("display_errors", 1);
error_reporting(E_ALL);
require_once("class_DB.php");
$db = new Database("localhost", "user", "user", "grigorieva");

// if (!empty($_REQUEST["submit"])) {
    
$username=$_REQUEST["username"];
$password=$_REQUEST["password"];    
$confirm=$_REQUEST["confirm"];
$email=$_REQUEST["email"];

require_once("class_validateInfo.php");
$needValidData = new ValidateInfo($username, $password, $email);

echo "\nValidateInfo construct completed ";
print_r($needValidData);


$valid_fields = ($needValidData -> validUser()) * ($needValidData -> validPass()) * ($needValidData -> confirmPass($confirm)) * ($needValidData -> validEmail());
echo "Show valid test: "."$valid_fields";

if ($valid_fields == 1) {
  $insert_query = "INSERT INTO users (usernames, passwords, confirm_pass, emails) VALUES('$username', MD5('$password'), MD5('$confirm'), '$email')";
  $db -> connection($insert_query);
  //header('Location: /auth_page/login.html');
}
else {
  echo "\nfail test";      
}