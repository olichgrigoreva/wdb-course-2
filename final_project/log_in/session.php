<?php
 class Session {
   public static session_start();

   public static function save_session(){
     return self::$_SESSION["username"] = $_POST["username"];
     return self::$_SESSION["password"] = $_POST["password"];
   }
 }
 ?>
