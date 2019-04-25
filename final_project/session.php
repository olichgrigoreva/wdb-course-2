<?php
 session_start();

 class Session {
   public static function save_session(){
     return self::$_SESSION["username"] = $_POST["username"];
     return self::$_SESSION["password"] = $_POST["password"];
   }
 }
