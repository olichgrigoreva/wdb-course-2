<?php
//session_start();
//print_r($_SESSION);
/*session_start();
$session_id = session_id();
echo "Session key: " . $session_id;*/


ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once("class_DB.php");
$db = new Database("localhost", "user", "user", "grigorieva");
    
$username=$_REQUEST["username"];
$password=$_REQUEST["password"];    

$select_query = "SELECT id FROM users WHERE usernames='$username' AND passwords=MD5('$password')";
	$select_result = $db -> selectFromDB($select_query);
	$id = $select_result["id"];
	//print_r($id);
	//$_SESSION["id"] = $id;

	
	//print_r($_SESSION);
	
	/*if ($num_rows == 0) {
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
}*/