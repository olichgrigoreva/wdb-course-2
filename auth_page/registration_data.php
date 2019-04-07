<?php
//echo "ghbdtn";
ini_set("display_errors", 1);
error_reporting(E_ALL);

//соединение с БД
$connection = mysqli_connect("localhost", "user", "user", "registration_data");//host,username,password,dbname,port,socket

/*по нажатию submit, если ассоциативный массив передался не пустой (все, что есть в теге form), то выполняем расчет
*/
if (!empty($_REQUEST["submit"])) {
    
    echo $username=$_REQUEST["username"];
    echo $password=$_REQUEST["password"];
    echo $confirm=$_REQUEST["confirm"];
    echo $email=$_REQUEST["email"];    
    
    if ($password !== $confirm){
                alert('Пароли не совпадают!');
    }
    else{
        $insert_query = "INSERT INTO users (usernames, passwords, confirm_pass, emails) VALUES('$username', MD5('$password'), MD5('$confirm'), '$email')";
        mysqli_query($connection, $insert_query);//запись значений запроса в таблицу
        echo $insert_query;
    }     
}
?>