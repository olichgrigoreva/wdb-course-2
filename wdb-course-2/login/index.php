<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Notebook</title>
    <script defer src= "index.js"></script>
</head>
<body>
<?php
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['Username']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку
    echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
    }
    else
    {

    // Если не пусты, то мы выводим ссылку
    echo "Вы вошли на сайт, как ".$_SESSION['Username']."<br><a  href='http://tvpavlovsk.sk6.ru/'>Эта ссылка доступна только  зарегистрированным пользователям</a>";
    }
    ?>
</body>
</html>