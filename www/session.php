<?php
class Session {
// Открытие сессии PHP
    session_start();

    // Устанавливаем переменные сессии
    $_SESSION["userID"] = "php_user";
    $_SESSION["password"] = "tutorials";
    echo "<br>Сессия PHP начата и переменные сессии заданы!";


    session_unset();
    print_r($_SESSION);
    // удаляем сессию PHP
    session_destroy();
}