<?php
//header( 'Location: http://google.ru/search?q=redirect' );
ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once("class_DB.php");
$db = new Database("localhost", "user", "user", "grigorieva");

// if (!empty($_REQUEST["submit"])) {
    
$username=$_REQUEST["username"];
$password=$_REQUEST["password"];    
$confirm=$_REQUEST["confirm"];
$email=$_REQUEST["email"];

/*$host=$_SERVER['SERVER_ADDR'];
$port=$_SERVER['SERVER_PORT'];

print_r($host);
print_r($port);*/

require_once("class_validateInfo.php");
$needValidData = new ValidateInfo($username, $password, $email);
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