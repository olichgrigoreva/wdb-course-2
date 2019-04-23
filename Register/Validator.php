<?php
  /**
   * Класс для проверки вводимой информации
   */
  class Validator {

    public function countSubstr($substr, $str) {
      $count = 0;
      $pos = str.indexOf($substr);
      while ($pos > -1) {
        $count++;
        $pos = str.indexOf($substr, $pos+1);
      }
      return $count;
    }

    public function not_empty($name, $pass) {
      $res = false;
      if ((!empty($name)) && (!empty($pass))) {
        $res = true;
      }
      return $res;
    }

    public function equal_password($pass, $conf_pass) {
      $res = false;
      if (pass == conf_pass) {
        $res = true;
      }
      return $res;
    }

    public function correct_email($email) {
      $res = false;
      if (self::countSubstr('@', $email) == 1) {
        $res = true;
      }
      return $res;
    }
  }
?>
