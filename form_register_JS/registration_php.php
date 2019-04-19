<?php
	ini_set("display_errors", 1);
	error_reporting(E_ALL);
	$connection = mysqli_connect("localhost", "root", "virtual", "levashov");
	if(!empty($_REQUEST["submit"])){
		$username = $_REQUEST["username"];
		$password = $_REQUEST["password"];
		$confirm_password = $_REQUEST["confirm_password"];
		$email = $_REQUEST["email"];
			$insert_query = "INSERT INTO users (username, password, confirm_password, email) VALUES ('$username', MD5('$password'), MD5('$confirm_password'), '$email')";
				mysqli_query($connection, $insert_query);					
				echo $insert_query;				
	}
?>