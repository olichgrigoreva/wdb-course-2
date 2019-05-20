<?php
class Session {
// Открытие сессии PHP
    function create_session($username) {
    session_start();
    // Устанавливаем переменные сессии
    $_SESSION['login'] = $username;
    //$_SESSION["password"] = "tutorials";
    //echo "<br>Сессия PHP начата и переменные сессии заданы!";
    }

    function close_session() {
    session_unset();
    // удаляем сессию PHP
    session_destroy();
    }
}