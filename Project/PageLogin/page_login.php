<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once("class.php");
$session = new Session;
$session->session_init();

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];
$register = $_REQUEST["register"];
$login = $_REQUEST["login"];

$db = new Database();

$connect = $db->connect();

// echo "<pre>";
// print_r ($connect);
// print_r ($db1);

// echo "</pre>";

if (isset($login)) {
    $login = $_REQUEST["login"];
    $select_query = "SELECT * FROM `users` WHERE `username`= '$username'";
    $query_s = mysqli_fetch_assoc($db->select_query($select_query));
    echo "<pre>";
    print_r($select_query);
    echo "</pre>";
    echo "<pre>";
    print_r($query_s);
    echo "</pre>";
    // echo "Вы нажали Login";
}

if (isset($register)) {
    $login = $_REQUEST["login"];
    echo "Вы нажали Register"; // В дальнейшем, нужно будет выполнить переход на страницу регистрации!
} else {
    echo "Надо лучше работать";
}

// echo "<pre>";
// print_r ($_REQUEST);
// echo "</pre>";
