<?php
// ini_set("display_errors", 1);
// error_reporting(E_ALL);

 session_start();

 $db_host = "localhost";
 $db_user = "register";
 $db_password = "register";
 $db_base = "register_form";
 $db_table = "users";

 $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

 if ($mysqli->connect_error) {
     die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
 }

 $massiv_users=$mysqli->query("SELECT * FROM ".$db_table);
 while ($stroki_user=mysqli_fetch_assoc($massiv_users)) {

   if($_REQUEST["user"]==$stroki_user["user_name"] && MD5($_REQUEST["password"])==$stroki_user["password"]) {

            $_SESSION['logged_user'] = $stroki_user["user_name"];
            header("Location: index.php");
            exit;
    }
 }

 $_SESSION['info_error']="Логин или пароль не верны";
 header("Location: login.php");

 ?>
