<?php
 ini_set("display_errors,1");
 error_reporting(E-ALL);

 require_once ("database.php");

 function Login(){

 }

 function Registr(){

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
  <input type="submit" name="submit" id="submit" value="Register" />
</form>
<footer>
  Copyright by ..., 2016
</footer>
</body>
</html>
