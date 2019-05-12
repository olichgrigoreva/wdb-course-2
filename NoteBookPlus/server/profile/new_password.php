<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();

require_once($_SERVER['DOCUMENT_ROOT']. "/NoteBookPlus/server/common/Validation.php");
require_once($_SERVER['DOCUMENT_ROOT']. "/NoteBookPlus/server/common/Database.php");

$password = $_REQUEST["password"];
$confirm_password = $_REQUEST["confirm_password"];

$validation = new Validation();
$result_validation = $validation->check_password($password).$validation->check_confirm_password($password, $confirm_password);
if ($result_validation != "") {
  echo $result_validation;
  die;
}

$new_password = new Database();
$new_password->new_password($_SESSION['logged_in_user_name'], $password);
echo "Пароль изменен.";
die;

?>
