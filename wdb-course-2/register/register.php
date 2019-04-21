<?php
ini_set("display_errors",1);
error_reporting(E_ALL);

$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Confirm_Password = $_POST['Confirm_Password'];
$EMail = $_POST['EMail'];
$Username = clean($Username);
$Password = clean($Password);
$EMail = clean($EMail);
$Confirm_Password = clean($Confirm_Password);

//функциz для очистки данных от HTML и PHP тегов:
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;}

// функциz для проверки длинны строки:
function check_length($value = "", $min, $max) {
$result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
return !$result;}

// прогоняем переменные через эти функции
 if(!empty($Username) && !empty($Password) && !empty($EMail) && !empty($Confirm_Password)) {
		$EMail_validate = filter_var($EMail, FILTER_VALIDATE_EMAIL);
		          if(check_length($Username, 2, 25) && ($Password == $Confirm_Password) && $EMail_validate) {
             echo "Приветствую, дорогой друг!!!";
    } else {echo "Упс! Где-то ошибка, попробуй ещё раз, дорогой друг!!!";
    }
} else {
	echo "Заполни пустые поля, дорогой друг!";
}
?>