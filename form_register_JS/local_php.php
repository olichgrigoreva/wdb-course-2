<?php
	ini_set("display_errors", 1);
	error_reporting(E_ALL);
	$connection = mysqli_connect("localhost", "root", "virtual", "Registration");
	if(!empty($_REQUEST["submit"])){
		echo $username = $_REQUEST["username"];
		echo $password = $_REQUEST["password"];
		echo $confirm_password = $_REQUEST["confirm_password"];
		echo $email = $_REQUSET["email"];
			$insert_query = "INSERT INTO Users (username, password, confirm_password, email) VALUES ('$username', MD5('$password'), MD5('$confirm_password'), '$email')";
				mysqli_query($connection, $insert_query);					
				echo $insert_query;				
	}
?>