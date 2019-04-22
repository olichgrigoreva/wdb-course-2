<?php
 class Session {
   public static session_start();

   public static function save_session(){
     self::$_SESSION["username"] = $_POST["username"];
     self::$_SESSION["password"] = $_POST["password"];
   }
 }
 ?>
