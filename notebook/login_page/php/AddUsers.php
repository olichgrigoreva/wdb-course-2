<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

  require_once("Database.php");
    $add_new_user = new Database("localhost", "root", "virtual", "levashov");

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $confirm_password = $_REQUEST["confirm_password"];
    $email = $_REQUEST["e_mail"];
