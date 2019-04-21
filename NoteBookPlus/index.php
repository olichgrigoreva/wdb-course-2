<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();
// echo session_id();
if(!isset($_SESSION['logged_in_user_name'])){
     header("Location: authorization_body.php");
     die;
 }


?>

Блокнот. пользователь: <?php echo $_SESSION['logged_in_user_name'] ?>
