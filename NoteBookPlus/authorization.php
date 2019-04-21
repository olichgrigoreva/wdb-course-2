<?php
// ini_set("display_errors", 1);
// error_reporting(E_ALL);

session_start();

require_once("Validation.php");
require_once("Database.php");

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];

$validation = new Validation();
$result_validation = $validation->check_username($username).$validation->check_password($password);
if ($result_validation != "") {
  $_SESSION['info_message'] = "<script>alert(\"Введены не правильные данные.\");</script>";
  header("Location: authorization_body.php");
  die;
}

$auth_user = new Database();
$user = $auth_user->auth_user($username, $password);
if ($user == "true") {
  $_SESSION['logged_in_user_name'] = $username;
  header("Location: index.php");
  die;
}
else {
  header("Location: authorization_body.php");
  $_SESSION['info_message'] = "<script>alert(\"Введены не правильные данные.\");</script>";
}

?>
