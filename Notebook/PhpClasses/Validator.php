<?php

class Validator {
  private static $reg_username = '/^[a-zа-я0-9_ -]{3,20}$/iu';
  private static $reg_pass = '/^[a-zа-я0-9_-]{3,}$/iu';

  public static function alert_mess($mess) {
      $alert_msg ="<div id='alert' class='alert alert-warning alert-dismissible fade show' role='alert'>
                  <span>{$mess}</span> 
                  </div>";

      return $alert_msg;
  }

  public static function check_valid($user, $pass) {
      $error = [];

      if(!preg_match_all(self::$reg_username, $user, $matches)) {
          $error[] = self::alert_mess("Введите корректное имя пользователя");
      }

      if(!preg_match_all(self::$reg_pass, $pass, $matches)) {
          $error[] = self::alert_mess("Введите корректный пароль");
      }

      return $error;
  }

  public static function check_email($mail) {
      $error = [];

      if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
          $error[] = self::alert_mess("Введите верный email");
      }

      return $error;
  }
}