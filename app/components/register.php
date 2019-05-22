<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

//Данные поступающие из формы
$added_user_login = $_REQUEST["username"];
$added_user_password = $_REQUEST["password"];
$added_user_email = $_REQUEST["email"];

//Соединение с базой данных
$db_host = "localhost";
$db_admin_user_name = "root";
$db_admin_user_passw = "virtual";
$db_name = "kandrakhinusers";
$connection = mysqli_connect($db_host, $db_admin_user_name, $db_admin_user_passw, $db_name);
/*if (!empty($connection)) {
$insert_query = "INSERT INTO $db_name (user_login, user_password, user_email) VALUES('$added_user_login', MD5('$added_user_password'), '$added_user_email')";
mysqli_query($connection, $insert_query);
}*/


$conformity_query_login = "SELECT * FROM $db_name WHERE `user_login` LIKE '$added_user_login'";
$conformity_query_email = "SELECT * FROM $db_name WHERE `user_email` LIKE '$added_user_email'";
// проверка уже существующего имени
//тоже работает
/*$report_login = mysqli_query($connection, $conformity_query_login);
	if (mysqli_num_rows($report_login)){
		echo "0";
	}
	else{
		echo "1";
	}
*/

//работает
// проверка уже существующего адреса электронной почты
$report_email = mysqli_query($connection, $conformity_query_email);
	if (mysqli_num_rows($report_email)){
		echo "0";
	}
	else {
	$insert_new_account_query = "INSERT INTO $db_name (user_login, user_password, user_email) VALUES('$added_user_login', MD5('$added_user_password'), '$added_user_email')";
	mysqli_query($connection, $insert_new_account_query);
	}

//echo $report;
//var_dump($report);
?>