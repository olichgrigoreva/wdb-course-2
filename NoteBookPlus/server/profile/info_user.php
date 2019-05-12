<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();

require_once($_SERVER['DOCUMENT_ROOT']. "/NoteBookPlus/server/common/Database.php");

$info_user_email = new Database();
$info_user_email = $info_user_email->info_user_email($_SESSION['logged_in_user_name']);


$info_user = [
  "info_user_name" => $_SESSION['logged_in_user_name'],
  "info_user_email" => $info_user_email
];

$info_user = json_encode($info_user);

echo $info_user;
