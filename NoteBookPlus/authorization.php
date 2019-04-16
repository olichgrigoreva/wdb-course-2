<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once("Validation.php");
require_once("Database.php");

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];


$validation = new Validation();
$result_validation = $validation -> check_username($username).$validation -> check_password($password);
if ($result_validation != "") {
  echo "введены неверные данные";
// отправить на страницу логинации с выводом соотв сообщения

  die;
}

// проверить соответствие данных пользователя с базой данных

// если верно открыть сессию

// если не верно выдать сообщ об ошибке и вернуть на страницу логинации

?>
