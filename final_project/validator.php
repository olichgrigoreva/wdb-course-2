<?php
 class Validator {
   public static function clean($value = ""){
     $value = trim($value); //для удаления пробелов с начала и конца строки
     $value = stripslashes($value); //для удаления экранированных символов
     $value = strip_tags($value); //для удаления HTML и PHP тегов
     $value = htmlspecialchars($value); //для преобразования спецсимволов в HTML-сущности

     return $value;
   }

   public static function check_register(){
     return !empty($username) && !empty($password) && !empty($confirm_pass) && !empty($email);
   }

   public static function check_email($value = ""){
     return filter_var($value, FILTER_VALIDATE_EMAIL); //для проверки корректности email
   }

   public static function passwords_match($password, $confirm_pass){
     return $password == $confirm_pass;
   }
 }
 //   $validate_register = Validator::check_register() && Validator::check_email($email) && Validator::passwords_match();
