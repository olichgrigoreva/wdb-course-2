<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();

require_once("../classes/validation.php");
require_once("../classes/user.php");

$user_name = $_REQUEST["pole_user"];
$user_pass = $_REQUEST["pole_password"];
$user_conf_pass = $_REQUEST["pole_confirm_password"]
$user_email = $_REQUEST["pole_email"];


$validation = new validation;

$check_name = $validation -> check_username ($user_name);
$check_pass = $validation -> check_password ($user_pass);
$check_conf_pass = $validation -> check_conf_password ($user_conf_pass );
$user_email = $validation -> check_email ($user_email);


if(!empty($check_name)) echo $check_name