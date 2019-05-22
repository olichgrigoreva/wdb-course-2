<?php
	ini_set("display_errors", 1);
	error_reporting(E_ALL);
	require_once("Database.php");
		function additionDB($username, $password, $confirm_password, $e_mail){
			$username = $_REQUEST["username"];
			$password = $_REQUEST["password"];
			$confirm_password = $_REQUEST["confirm_password"];
			$e_mail = $_REQUEST["e_mail"];
			database::connect();
				$strSQL = "INSERT INTO users (username, password, confirm_password, email) VALUES ('$username', MD5('$password'), MD5('$confirm_password'), '$e_mail')";
				database::query($strSQL);
		}
				$insert_query = additionDB($_REQUEST["username"], MD5($_REQUEST["password"]), MD5($_REQUEST["confirm_password"]), $_REQUEST["e_mail"]);
		echo $insert_query;
		/*$connection = mysqli_connect("localhost", "root", "virtual", "levashov");
			//if(!empty($_REQUEST["submit"])){
				$username = $_REQUEST["username"];
				$password = $_REQUEST["password"];
				$confirm_password = $_REQUEST["confirm_password"];
				$e_mail = $_REQUEST["e_mail"];
					$insert_query = "INSERT INTO users (username, password, confirm_password, email) VALUES ('$username', MD5('$password'), MD5('$confirm_password'), '$e_mail')";
						mysqli_query($connection, $insert_query);
						echo $insert_query;
			}*/
