<?php
  ini_set("display_errors", 1);
  error_reporting(E_ALL);

  require_once("../../../System/Classes/php/Validator.php");
  require_once("../../../System/Classes/php/DataBase.php");

  function addBD($name, $pass, $email) {
    DataBase::connect();
    $strSQL = "INSERT INTO List_users(Name, Password, EMAil) VALUES ('$name', '$pass', '$email')";

//      echo "<pre>";
//      print_r($strSQL);
//      echo "</pre>";

    DataBase::query($strSQL);

    return "Пользователь добавлен!";
  }

  function regUser($name, $pass, $conf_pass, $email) {

    if ( (Validator::not_empty($name, $pass)) &&
         (Validator::not_empty($conf_pass, $email)) &&
         (Validator::correct_email($email))) {

      if (Validator::equal_password($pass, $conf_pass)) {

        if ($rec = Validator::find_user_email($name, $email))  {
          $res = "Пользователь уже существует!";
        }
        else {
          $res = addBD($name, MD5($pass), $email);
        }

      }
      else { $res = "Пароли не совпадают!";}

    }
    else { $res = "Ошибка ввода данных!"; }

    return $res;
  }

  $result = regUser($_REQUEST["userName"], $_REQUEST["password"], $_REQUEST["confPassword"], $_REQUEST["email"]);
  echo $result;
?>
