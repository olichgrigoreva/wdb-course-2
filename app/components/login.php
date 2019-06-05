<?php
session_start();
ini_set("display_errors", 1);
error_reporting(E_ALL);

//Данные поступающие из формы
$user_login = $_REQUEST["user_login"];
$user_password = $_REQUEST["user_password"];

//Соединение с базой данных
$db_host = "localhost";
$db_admin_user_name = "root";
$db_admin_user_passw = "virtual";
$db_name = "kandrakhinusers";
$connection = mysqli_connect($db_host, $db_admin_user_name, $db_admin_user_passw, $db_name);

if (isset($_POST['user_login']) && isset($_POST['user_password'])){
    $login = ($_POST['user_login']);
    $password = md5($_POST['user_password']);

    // делаем запрос к БД
    // и ищем зарегистрированного пользователя с таким почтовым ящиком и паролем

    $request_query = "SELECT `user_id`
            FROM `kandrakhinusers`
            WHERE `user_email`='{$login}' AND `user_password`='{$password}'
            LIMIT 1";
    $sql = mysqli_query($connection, $request_query) or die(mysqli_error());

    // если такой пользователь нашелся
    if (mysqli_num_rows($sql) == 1) {
        // устанавливаем об этом метку в сессии (устанавливается ID пользователя)

        $row = mysqli_fetch_assoc($sql);
        //$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['auth'] = true;
		//session_start();
		//var_dump ($_SESSION);

        //для работы с сессионными данными в каждом скрипте должно присутствовать session_start();
    }
    else {
        die('false');
    }
}
?>