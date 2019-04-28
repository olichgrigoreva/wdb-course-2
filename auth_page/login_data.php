<?php
require("class_DB.php");
$db = new Database("localhost", "user", "user", "registration_data");


/*по нажатию submit, если ассоциативный массив передался не пустой (все, что есть в теге form), то выполняем расчет
*/
if (!empty($_REQUEST["submit"])) {
    
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];
    
    
        $select_query = "SELECT * FROM registration_data WHERE users = '$username' AND passwords = 'password' ";
        $db -> selectFromDB($select_query);


        if ($password !== $db['passwords']){
                alert('Пароли не совпадают!');
    }

        
    }     

?>