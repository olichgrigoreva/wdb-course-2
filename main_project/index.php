<?php
if ((!empty($_REQUEST["username"]))&&(!empty($_REQUEST["password"]))) {
    require_once("php/database.php");
    require_once("php/login.php");

    echo "<pre>";
    print_r($result);
    echo "<pre>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Привет</title>
    <style>
        .header {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            /* background-color: lightgray; */
            text-align: center;
            padding: 30px;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom:0;
            right:0;
            background-color: lightgray;
            text-align: center;
            padding: 10px;
        }
        .form {
            position: relative;
            margin-top: 200px;
            margin-bottom: 10px;
        }
        .input {
            margin-bottom: 8px;
            padding: 8px;
            width: 20%;
            border-radius: 5px;
        }
        .button {
            width: 20%;
            color: white;
            padding: 8px;
            background-color: #0075ff;
            border-radius: 8px;
            margin-top: 10px;
        }
        .button_reg {
            width: 20%;
            color: white;
            padding: 8px;
            background-color: #0075ff;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="header">Header</div>
    <div align="center">
        <form  class="form" action="">
            <input name="username" class="input" type="text" placeholder="USERNAME" required><br>
            <input name="password" class="input" type="password" placeholder="PASSWORD" required><br>
            <button class="button" type="submit">LOGIN</button>
        </form>
        <button class="button_reg" onclick="document.location='reg_page/index.html'" type="">REGISTRATION</button>
    </div>
    <div class="footer">Footer</div>
</body>
</html>
