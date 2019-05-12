<?php
// ini_set("display_errors", 1);
// error_reporting(E_ALL);


$user = $_REQUEST["user"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];
$confirm_password = $_REQUEST["confirm_password"];

$lenght_user_name = strlen($user);
$lenght_email = strlen($email);
$lenght_password = strlen($password);
$lenght_confirm_password = strlen($confirm_password);

$symbol_massiv="1234567890QqWwEeRrTtYyUuIiOoPpAaSsDdFfGgHhJjKkLlZzXxCcVvBbNnMm._-";
$length_symbol_massiv = strlen($symbol_massiv);
$sootv_name = 0;

if ($lenght_user_name>2) {
  for ($k = 0; $k<$lenght_user_name; $k++) {
    for ($l=0; $l<$length_symbol_massiv; $l++) {
      if ($user{$k} == $symbol_massiv{$l}) {
        $sootv_name = $sootv_name+1;
      }
    }
  }
}

if ($lenght_user_name > 2 AND $lenght_user_name < 33 AND $sootv_name == $lenght_user_name) {
  $message = "";
}

else {
  $message = "Введите корректное имя пользователя. ";
}

for ($i=0; $i <$lenght_email; $i++) {
  if ($email{$i} == "@") {
    $sobaka = 1;
  }
}

if ($lenght_email > 2 AND $sobaka == 1) {
  $message = $message."";
}
else {
  $message = $message."Введите корректный e-mail. ";
}

$symbol_massiv_pass="1234567890QqWwEeRrTtYyUuIiOoPpAaSsDdFfGgHhJjKkLlZzXxCcVvBbNnMm";
$length_symbol_massiv_pass = strlen($symbol_massiv_pass);
$sootv_password = 0;

if ($lenght_password>5) {
  for ($m = 0; $m<$lenght_password; $m++) {
    for ($n=0; $n<$length_symbol_massiv_pass; $n++) {
      if ($password{$m} == $symbol_massiv_pass{$n}) {
        $sootv_password = $sootv_password+1;
      }
    }
  }
}

if ($lenght_password > 5 AND $lenght_password < 33 AND $sootv_password == $lenght_password) {
  $message = $message."";
}

else {
  $message = $message."Введите корректный пароль. ";
}

if ($password == $confirm_password) {
  $message = $message."";
}
else {
  $message = $message."Поле ПОДТВЕРДИТЕ ПАРОЛЬ должно совпадать с полем ПАРОЛЬ.";
}

$length_message = strlen($message);

if ($length_message > 0) {
  $message = $message." (нажмите чтобы закрыть)";
  echo $message;
  die;
}


$db_host = "localhost";
$db_user = "register";
$db_password = "register";
$db_base = "register_form";
$db_table = "users";

$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$result = $mysqli->query("INSERT INTO ".$db_table." (user_name, e_mail, password) VALUES ('$user','$email',MD5('$password'))");

if ($result == true){
	echo "Информация занесена в базу данных. (нажмите чтобы закрыть)";
}else{
	echo "Информация не занесена в базу данных. Имя пользователя или e-mail уже заняты. (нажмите чтобы закрыть)";
}

?>
