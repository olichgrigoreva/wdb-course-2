<?php
require_once("../../../core/php/Session.php");
$session = new Session();
if (!empty($_REQUEST["username"]) && !empty($_REQUEST["password"])) {
    require_once("../../../core/php/Database.php");
    require_once("auth.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Логинация</title>
    <style>
    </style>
    <link rel= "stylesheet" href="../css/login.css">
</head>
<body>
    <div class="header">Header</div>
    <div align="center">
        <form  class="form" method="POST" action="">
            <input name="username" class="input" type="text" placeholder="USERNAME" required><br>
            <input name="password" class="input" type="password" placeholder="PASSWORD" required><br>
            <button class="button" type="submit">LOGIN</button>
        </form>
        <button class="button_reg" onclick="document.location='/main_project/pages/register/index.html'" type="">REGISTRATION</button>
    </div>
    <div class="footer">Footer</div>
</body>
</html>
