<?php
// ini_set("display_errors", 1);
// error_reporting(E_ALL);

session_start();

require_once($_SERVER['DOCUMENT_ROOT']. "/NoteBookPlus/server/common/Validation.php");
require_once($_SERVER['DOCUMENT_ROOT']. "/NoteBookPlus/server/common/Database.php");

$username = $_REQUEST["username"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];
$confirm_password = $_REQUEST["confirm_password"];

$validation = new Validation();
$result_validation = $validation->check_username($username).$validation->check_email($email).$validation->check_password($password).$validation->check_confirm_password($password, $confirm_password);
if ($result_validation != "") {
  echo $result_validation;
  die;
}

$new_user = new Database();
$user = $new_user->new_user($username, $email, $password);
  echo "Вы успешно зарегистрированы!";


?>
