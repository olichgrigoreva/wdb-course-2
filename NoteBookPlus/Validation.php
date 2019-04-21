<?php
class Validation {

  function check_username($username) {

    $lenght_username = strlen($username);
    $symbol_massiv = "1234567890QqWwEeRrTtYyUuIiOoPpAaSsDdFfGgHhJjKkLlZzXxCcVvBbNnMm._-";
    $length_symbol_massiv = strlen($symbol_massiv);
    $sootv_name = 0;

    if ($lenght_username > 2) {
      for ($m = 0; $m < $lenght_username; $m++) {
        for ($n = 0; $n < $length_symbol_massiv; $n++) {
          if ($username{$m} == $symbol_massiv{$n}) {
            $sootv_name = $sootv_name+1;
          }
        }
      }
    }

    if ($lenght_username > 2 AND $lenght_username < 33 AND $sootv_name == $lenght_username) {
      return "";
    }

    else {
      return "Введите корректное имя пользователя. ";
    }

  }



  function check_email($email) {
    $lenght_email = strlen($email);
    for ($i=0; $i <$lenght_email; $i++) {
      if ($email{$i} == "@") {
      $sobaka = 1;
      }
    }

    if ($lenght_email > 2 AND $sobaka == 1) {
    return "";
    }
    else {
    return "Введите корректный e-mail. ";
    }

  }



  function check_password($password) {

    $lenght_password = strlen($password);
    $symbol_massiv_pass = "1234567890QqWwEeRrTtYyUuIiOoPpAaSsDdFfGgHhJjKkLlZzXxCcVvBbNnMm";
    $length_symbol_massiv_pass = strlen($symbol_massiv_pass);
    $sootv_password = 0;

    if ($lenght_password > 5) {
      for ($m = 0; $m < $lenght_password; $m++) {
        for ($n = 0; $n < $length_symbol_massiv_pass; $n++) {
          if ($password{$m} == $symbol_massiv_pass{$n}) {
            $sootv_password = $sootv_password+1;
          }
        }
      }
    }

    if ($lenght_password > 5 AND $lenght_password < 33 AND $sootv_password == $lenght_password) {
      return "";
    }

    else {
      return "Введите корректный пароль. ";
    }

  }



  function check_confirm_password($password, $confirm_password) {
    if ($password != $confirm_password) {
      return "Поле ПОДТВЕРДИТЕ ПАРОЛЬ должно совпадать с полем ПАРОЛЬ.";
    }
  }

}
?>
