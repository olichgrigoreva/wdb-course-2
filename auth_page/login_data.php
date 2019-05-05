<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once("class_DB.php");
$db = new Database("localhost", "user", "user", "grigorieva");
    
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


	//header('Location: /login.html');
}
else {
 	echo "\nFail valid test";      
}