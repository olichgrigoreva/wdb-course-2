<?php
session_set_cookie_params(60);
session_start();

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once("Database.php");

function alert($msg) {

/*     $alert_div = "<div class='alert alert-primary alert-dismissible fade show' role='alert'>$msg<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
    echo $alert_div; */

 
    echo "<script type='text/javascript'>
    document.addEventListener('DOMContentLoaded', loaded);
    function loaded(event){
    let myalert = document.createElement('div');
    myalert.className='alert alert-warning alert-dismissible fade show';
    myalert.role = 'alert';
    myalert.innerHTML = '<strong>'+'$msg'+'</strong>';
        let myalert_close_btn = document.createElement('button');
        myalert_close_btn.type = 'button';
        myalert_close_btn.className='close';
        myalert_close_btn.setAttribute('data-dismiss', 'alert');
        myalert_close_btn.setAttribute('aria-label', 'Close');
            let cross = document.createElement('span');
            cross.setAttribute('aria-hidden', 'true');
            cross.innerHTML = '&times;';
        myalert_close_btn.appendChild(cross);
    myalert.appendChild(myalert_close_btn);
    document.querySelector('.container').append(myalert);
    }
    </script>";
}

$username=$_REQUEST["username"];
$user_password=$_REQUEST["password"];

//Проверка на пустые поля
if ($username !== "" && $user_password !== "") {
    $add_new_user_connect = new Database("localhost", "root", "virtual", "cherepanov");
    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $check_results = $add_new_user_connect->check_in_DataBase($check_query);

    if ($check_results["username"] == $username && $check_results["password"] == $user_password) {
        $_SESSION['login'] = $username;
        //header('Location: /www/note.html'); exit;
        alert("успешный вход");
        header('Refresh: 1; URL=/www/note.html');
    }

    else{
        alert("не верный логин или пароль");
    }
}

else {
   alert("заполните все поля");
}
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
        //event.preventDefault();

        window.setTimeout(function(){
        $(".alert").alert('close');
    },5000);
    </script>

</head>
    
<body>
    <nav class="navbar d-flex justify-content-center"> <h3><small>Super Notebook</small></h3></nav>
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
