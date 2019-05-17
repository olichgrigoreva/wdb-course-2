<?php
  class session{
      public static function save_session(){
        return self::$_SESSION["username"] = $_POST["username"];
        return self::$_SESSION["password"] = $_POST["password"];
      }
      public static function session_start(){
        $_SESSION["userID"] = "user";
        $_SESSION["password"] = "example";
          echo "<br>Conneting is complete";
          session_unset();
          print_r($_SESSION);
          session_destroy();
      }
  }
