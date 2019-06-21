<?php
//ini_set("display_errors", 1);
//error_reporting(E_ALL);

require_once("php/connection.php");
require_once("php/database.php");
require_once("php/session.php");

  function alert($message) {
    echo "<script type='text/javascript'>
      document.addEventListener('DOMContentLoaded', loaded);
      function loaded(event) {
      let myalert = document.createElement('div');
      myalert.className='alert alert-warning alert-dismissible fade show';
      myalert.role = 'alert';
      myalert.innerHTML = '<strong>'+'$message'+'</strong>';
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
if(isset($_REQUEST["login"])) {
$username=$_REQUEST["username"];
$user_password=$_REQUEST["password"];

  if($username !== "" && $user_password !== "") {
    $add_new_user_connect = new database("localhost", "root", "virtual", "levashov");
    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $check_results = $add_new_user_connect->check_in_DataBase($check_query);

      if($check_results["username"] == $username && $check_results["password"] == $user_password) {
        session_set_cookie_params(300);
        session_start();
        $_SESSION['login'] = $username;
          $message = "Success";
          header('Refresh: 5; URL=/www/notebook.html');
      }
        else {
          $message = "Wrong password or login";
        }
  }
    else {
      $message = "You can fill the fields";
  }
}

 ?>
 <html lang="en" dir="ltr">
 <head>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
    <?php if (isset($message)) {alert($message);} ?>
    <script>
        window.setTimeout(function() {
        $(".alert").alert('close');
    },5000);
    </script>
 </head>
   <body>
     <div class="header" id="header">NOTEBOOK
 		</div>
 			<form class="container form group" id ="container" method="POST">
 				<div class = "form-group">
 					<input type="text" class="form-control" id="exampleInputUsername" name="username" placeholder="Username">
 				</div>
 				<div class="form-group">
 					<input type="password" class="form-control" id="exampleInputPassword" name="password" placeholder="Password">
 				</div>
 					<button type="submit" class="btn btn-primary" name="login" id="button_login" value="Login">Login</button>
 					<button type="submit" class="btn btn-primary" name="register" id="button_register" value="Register" onclick="window.location.href='(../register/index.html')">Register</button>
 			</form>
 		<div class="footer" id="footer">© Copyright 2019. All rights reserved
     </div>
 			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 </html>
