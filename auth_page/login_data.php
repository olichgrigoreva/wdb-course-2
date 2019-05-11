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