<?php
 class Validator {
   private static $username;
   private static $password;
   private static $confirm_pass;
   private static $email;

   function __construct(){
     self::$username     = $_POST["username"];
     self::$password     = $_POST["password"];
     self::$confirm_pass = $_POST["confirm_pass"];
     self::$email        = $_POST["email"];
   }

   public static function validate_login(){
    return !empty(self::$username) && !empty(self::$password);
   }

   public static function passwords_match(){
     return self::$password == self::$confirm_pass;
   }

   public static function check_email(){
     return filter_var(self::$email, FILTER_VALIDATE_EMAIL);
   }

   public static function validate_register(){
     return !empty(self::$username) && !empty(self::$password) && !empty(self::$confirm_pass) && !empty(self::$email) && self::passwords_match() && self::check_email();
   }
 }
