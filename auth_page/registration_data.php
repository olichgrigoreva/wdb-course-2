<?php
session_start();
$session_id = session_id('Hello world!');
echo "Session key: " . $session_id;
$_SESSION["id"] = "Hello";
print_r($_SESSION);
/*если закомментить сессию, то приходит response в консоли хрома*/

//header( 'Location: login.html' );

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
$needValidData = new ValidateInfo($username, $password);
print_r($needValidData);


$valid_fields = ($needValidData -> validUser()) * ($needValidData -> validPass()) * ($needValidData -> confirmPass($confirm)) * ($needValidData -> validEmail($email));
echo "Show valid test: "."$valid_fields";

if ($valid_fields == 1) {
	$select_query = "SELECT usernames, emails FROM users WHERE usernames='$username' OR emails='$email'";
	$num_rows = $db -> isUsedinDB($select_query);

	if ($num_rows == 0) {
		echo "В БД нет такой записи! ";
		print_r($db);
		echo "Отправка запроса INSERT на сервер. ";
		$insert_query = "INSERT INTO users (usernames, passwords, confirm_pass, emails) VALUES('$username', MD5('$password'), MD5('$confirm'), '$email')";
  		$db -> insertToDB($insert_query);
	}
	else{
		echo "В БД такая запись существует! ";
	}
}
else {
 	echo "\nFail valid test";
}
