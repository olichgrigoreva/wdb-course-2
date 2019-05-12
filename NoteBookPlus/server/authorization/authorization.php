<?php
// ini_set("display_errors", 1);
// error_reporting(E_ALL);

session_start();

require_once($_SERVER['DOCUMENT_ROOT']. "/NoteBookPlus/server/common/Validation.php");
require_once($_SERVER['DOCUMENT_ROOT']. "/NoteBookPlus/server/common/Database.php");

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];

$validation = new Validation();
$result_validation = $validation->check_username($username).$validation->check_password($password);
if ($result_validation != "") {
  $_SESSION['info_message'] = "<script>alert(\"Введены не правильные данные.\");</script>";
  header("Location: /NoteBookPlus/client/authorization_page/authorization.php");
  die;
}

$auth_user = new Database();
$user = $auth_user->auth_user($username, $password);
if ($user == "true") {
  $_SESSION['logged_in_user_name'] = $username;
  header("Location: /NoteBookPlus/index.php");
  die;
}
else {
  header("Location: /NoteBookPlus/client/authorization_page/authorization.php");
  $_SESSION['info_message'] = "<script>alert(\"Введены не правильные данные.\");</script>";
}

?>
