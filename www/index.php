<?php
session_start();

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once("Database.php");

function alert($msg) {
    //echo "<script type='text/javascript'>alert('$msg');</script>";
    $alert_div = "<div class='alert alert-primary alert-dismissible fade show' role='alert'>$msg<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
    echo $alert_div;
}


$username=$_REQUEST["username"];
$user_password=$_REQUEST["password"];

//Проверка на пустые поля
if ($username !== "" && $user_password !== "") {
    $add_new_user_connect = new Database("localhost", "root", "virtual", "cherepanov");
    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $check_results = $add_new_user_connect->check_in_DataBase($check_query);
    //echo "<script>alert('есть данные в полях');</script>";
    //alert("есть данные в полях");
}

else {
   // echo "<script>alert('заполните поля');</script>";
   alert("заполните поля");
}
//проверка что логин-пароль существуют и вход в систему
//        $loginconnect = new BaseConnection("notebook");
//        $loginconnect->read_from_DataBase();



?>
<!DOCTYPE html>
<html lang="ru">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--My CSS-->
    <link rel="stylesheet" href="register.css">

    <script>
        window.setTimeout(function(){
        $(".alert").alert('close');
    },5000);
    </script>

</head>
    
<body>
    <nav class="navbar"> <h3><small>Super Notebook</small></h3></nav>
    <form class="container form-group" method="POST">
        <input name="username" type="text" class="reg_fields" placeholder="Username" >
        <input name="password" type="text" class="reg_fields" placeholder="Password">
        <input type="submit" class="btn-primary register_button" value="Login">
        <input type="button" class="btn-primary register_button" value="Register" onclick= "window.location.href='./register.html'">
    </form>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
 </body>

 <footer class="page-footer font-small blue">
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">Copyright by "Software-2", 2019
            </div>
</footer>
</html>
