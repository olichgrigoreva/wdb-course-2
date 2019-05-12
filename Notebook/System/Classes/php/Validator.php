<?php
  /**
   * Класс для проверки вводимой информации
   */
  class Validator {

    private static function countSubstr($substr, $str) {
      $count = 0;
      $pos = strpos($str, $substr);
      while ($pos > -1) {
        $count++;
        $pos = strpos($str, $substr, $pos+1);
      }
      return $count;
    }

    public static function not_empty($val1, $val2) {
      $res = false;
      if (!empty($val1) && !empty($val2)) {
        $res = true;
      }
      return $res;
    }

    public static function equal_password($pass, $conf_pass) {
      $res = false;
      if ($pass == $conf_pass) {
        $res = true;
      }
      return $res;
    }

    public static function correct_email($email) {
      $res = false;
      if (self::countSubstr('@', $email) == 1) {
        $res = true;
      }
      return $res;
    }

    public static function find_user_pass($name, $pass) {
      $res = "";
      if (DataBase::connect()) {
        $strSQL = "SELECT * FROM List_users WHERE Name = '".$name."' AND Password = '".$pass."' ORDER BY Name";
        $query  = DataBase::query($strSQL);
        if ($rec = DataBase::fetch($query)) {
          $res = $rec;
        };
      }
      return $res;
    }

    public static function find_user_email($name, $email) {
      $res = "";
      if (DataBase::connect()) {
        $strSQL = "SELECT * FROM List_users WHERE Name = '".$name."' OR EMail = '".$email."' ORDER BY Name";
        $query  = DataBase::query($strSQL);
        if ($rec = DataBase::fetch($query)) {
          $res = $rec;
        };
      }
      return $res;
    }
  }
?>
