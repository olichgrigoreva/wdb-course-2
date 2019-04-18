<?php
//$connection = mysqli_connect("localhost", "user", "user", "registration_data");//host,username,password,dbname,port,socket
require("class_DB.php");
$db = new Database("localhost", "user", "user", "grigorieva");

/*по нажатию submit, если ассоциативный массив передался не пустой (все, что есть в теге form), то выполняем расчет
*/
if (!empty($_REQUEST["submit"])) {
    
     $username=$_REQUEST["username"];
     $password=$_REQUEST["password"];
     $confirm=$_REQUEST["confirm"];
     $email=$_REQUEST["email"];    
    
    if ($password !== $confirm){
                alert('Пароли не совпадают!');
    }
    else{
        $insert_query = "INSERT INTO users (usernames, passwords, confirm_pass, emails) VALUES('$username', MD5('$password'), MD5('$confirm'), '$email')";
        $db -> connection($insert_query);

        //Console.dir("<pre>"."$db"."</pre>");
        //mysqli_query($connection, $insert_query);//запись значений запроса в таблицу
        //echo $insert_query;

        /*echo "<pre>";
        print_r($db);
        echo "</pre>";*/
        //alert( "Привет" );
      
    }     
}
?>