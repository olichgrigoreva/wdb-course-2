<?php
 ini_set("display_errors", 1);
 error_reporting(E_ALL);

 require_once ("../common/validator.php");
 require_once ("../common/database.php");
 require_once ("../common/session.php");

 if (!empty($_POST["submit"])){
   if (Validator::validate_login()){
     Database::connect();
     $sql_command = "SELECT username, password FROM users WHERE username = '{$username}' AND password = MD5'{$password}' LIMIT 1";
     $result = Database::query($sql_command);

     if (!empty($result)){
       $user = $result[0]['username'];
       Session::set('user', $user);
       header("location:/notebook/index.html");
     }
     else {
       echo "Такого пользователя не существует";
     }
   };
   else {
     echo "Проверьте правильность заполнения полей";
   }
 }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Notebook</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  SUPER NOTEBOOK
</header>
<form method="post">
  <input type="text" name="username" id="username" placeholder="Username" />
  <input type="text" name="password" id="password" placeholder="Password" />
  <input type="submit" name="submit" id="submit" value="Login" />
  <input type="button" name="button" id="button" value="Register" onclick="location.href = '../register/index.html'"/>
</form>
<footer>
  Copyright by ..., 2016
</footer>
</body>
</html>
