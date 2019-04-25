<?php
	//ini_set("display_errors", 1);
	//error_reporting(E_ALL);
		require_once("database.php");
		require_once("session.php");
		$username = $_REQUEST["username"];
		$password = $_REQUEST["password"];
		$login = $_REQUEST["login"];
		$register = $_REQUEST["register"];
			if(!empty($_REQUEST["button_login"])){
				database::connect();
				$username	= database::select_query($_POST["username"], $_POST["password"]);
					if(!empty($username)){
						session::save_session($_POST["username"], $_POST["password"]);
					}
			}
						if(!empty($_REQUEST["button_register"])){
							database::connect();
}
?>
<html>
	<head>
	<style>
	</style>
	<link rel = "stylesheet" href = "style.css">
	<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "anonymous">
	</head>
	<body>
		<div class = "header" id = "header">NOTEBOOK
		</div>
		<form class = "container form group" id = "container" method = "POST">
			<div class = "form-group">
			<input type = "text" class = "form-control" id = "exampleInputUsername" name = "username" placeholder = "Username">
			</div>
			<div class = "form-group">
			<input type = "password" class = "form-control" id = "exampleInputPassword" name = "password" placeholder = "Password">
			</div>
			<button type = "submit" class = "btn btn-primary" name = "login" id = "button_login" value = "Login">Login</button>
			<button type = "submit" class = "btn btn-primary" name = "register" id = "button_register" value = "Register">Register</button>
		</form>
		<script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous"></script>
       		<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity = "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin = "anonymous"></script>
       		<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity = "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin = "anonymous"></script>
		<div class = "footer" id = "footer">Copyright by ... 2019
            	</div>
	</body>
</html>
