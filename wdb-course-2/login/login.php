<?php
//ini_set("display_errors",1);
//error_reporting(E_ALL);

$Username = $_POST['$Username'];
$Password = $_POST['Password'];
$Confirm_Password = $_POST['Confirm_Password'];
$EMail = $_POST['$EMail'];

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
$Username = clean($Username);
$Password = clean($Password);
$EMail = clean($EMail);
$Confirm_Password = clean($Confirm_Password);
    if(!empty($Username) && !empty($Password) && !empty($EMail) && !empty($Confirm_Password)) {
            if(check_length($Username, 2, 4) && ($Password = $Confirm_Password) && $EMail != 0) {
                    echo "Спасибо за сообщение";}
                        else { echo "УПС";}
                        }
?>