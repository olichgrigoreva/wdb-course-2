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

/*$select_query = "SELECT id FROM users WHERE usernames='$username' AND passwords=MD5('$password')";
$select_result = $db -> selectFromDB($select_query);
$id = $select_result["id"];*/

//Валидация данных
require_once("class_validateInfo.php");
$needValidData = new ValidateInfo($username, $password);
print_r($needValidData);


$valid_fields = (($needValidData -> validUser()) * ($needValidData -> validPass()));
echo "Show valid test: "."$valid_fields";

if ($valid_fields == 1) {
  echo "Send SELECT query to server. ";
  $select_query = "SELECT id FROM users WHERE usernames='$username' AND passwords=MD5('$password')";
  $num_rows = $db -> isUsedinDB($select_query);

	if ($num_rows == 0) {
		echo "Undefined user ";
		//print_r($db);
	}
	else{
    echo "User is authorized ";
    echo "<script type='text/javascript'> alert( 'Привет ); </script>";
    $select_result = $db -> selectFromDB($select_query);
    $id = $select_result["id"];
	}
}

else {
 	echo "\nFail valid test";
}
