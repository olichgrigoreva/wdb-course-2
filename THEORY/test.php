<?php

  include_once('config.php');

  ini_set("display_errors", 1);
  error_reporting(E_ALL);

  if (!empty($_REQUEST["submit"])) {
    $submit=$_REQUEST["submit"];
    $userName=$_REQUEST["username"];
    $userPassword=md5($_REQUEST["pass1"]);
    $mysqli = mysqli_init();
    $connection = mysqli_connect(dbHOST, dbUSER, dbPASS, dbNAME);
    $strResult="Not connect to database";

    if(!empty($connection)) {
      $queryStr="SELECT * FROM  `".dbTABLE."` WHERE  `login` LIKE  '".$userName."'";
      $query=mysqli_query($connection, $queryStr);

      if ($submit == 'LOGIN') {
        if ($query->num_rows == 0) {$strResult="login error";}
        else {
          $queryResult=mysqli_fetch_assoc($query);
          if ($userPassword == $queryResult['password']) $strResult="login OK";
          else $strResult="password error";
        }
      } // if ($submit == 'LOGIN')

      if ($submit == 'REGISTER') {
        $userEmail=$_REQUEST["email"];
        if ($query->num_rows>0) {$strResult="Login already register";}
        else {
            $queryStr="SELECT * FROM  `".dbTABLE."` WHERE  `email` LIKE  '".$userEmail."'";
            $query=mysqli_query($connection, $queryStr);
            if ($query->num_rows>0) $strResult="email already register";
            else {
                $queryStr="INSERT INTO ".dbTABLE."(`login`, `password`, `email`) VALUES ('";
                $queryStr.=$userName."', '";
                $queryStr.=$userPassword."', '";
                $queryStr.=$userEmail."')";
                $query=mysqli_query($connection, $queryStr);
                $queryResult = mysqli_query($connection, $query);
                if ($query == 1) $strResult="Register OK";
            }
        }
      } // if ($submit == 'REGISTER')

    } // if(!empty($connection))
    echo($strResult);
    die;
  } // if (!empty($_REQUEST["submit"]))
  else {
    session_start();
    $_SESSION["id"]= SITE_SESSION;
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Notebook Web Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .textHeader {
            padding:10px;
            font-size:16px;
            background:silver;
            text-align:center;
        }
        .textFooter {
            position:fixed;
            bottom:0px;
            margin:10px 0px;
            padding:10px;
            font-size:16px;
            background:silver;
            text-align:center;
            width: 100%;
        }
        .container {
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .formInput {
            margin:10px 0px;
            border-radius:0px!important;
            -webkit-border-radius:0px!important;
            -moz-border-radius:0px!important;
        }
    </style>

    <script>
        function toggleForm(yToLogin) {
            let formLogin = document.getElementById('login');
            let formRegister = document.getElementById('register');
            if (yToLogin=='true') {
                formLogin.style.display="none";
                formRegister.style.display="block";
            } else {
                formLogin.style.display="block";
                formRegister.style.display="none";
            }
        }

        function doFormSubmit(event) {
            let formObj = event.target.closest("form");
            let submitObj = formObj.elements.submit;
            for(var i = 0; i < formObj.elements.length-2; i++){
                el = formObj.elements[i];
                if (!el.value || !el.validity.valid) return false; // submit need to display setValidity, return needed
            }
            event.preventDefault();
            if (formObj.id == 'login') submitObj.value="LOGIN";
            else submitObj.value="REGISTER";

            fetch("/index.php", {
                           method: "POST",
                           body: new FormData(formObj)
                       }).then(response => {
                           return response.text();
                       }).then(text => {
                           console.log(text)
                       });
        } // function buttonLogin(event)

    </script>
</head>

<body>
<div class="textHeader">SUPER NOTEBOOK
</div>

<div class="container">
    <form class="form-signin" id="login" action="/login.php" method=post>
        <div class="text-right">
            <div class="btn-group">
                <a class="btn btn-outline-primary btn-sm active" name="btnLogin">LOGIN</a>
                <a class="btn btn-block btn-sm notActive" onclick="toggleForm('true')">REGISTER</a>
            </div>
        </div>
        <input type="text" name="username" class="form-control formInput" placeholder="Username" autofocus required>
        <input type="password" name="pass1" class="form-control formInput" placeholder="Password" required>
        <input type="hidden" name="submit">
        <button class="btn btn-lg btn-primary btn-block" onclick="doFormSubmit(event)">LOGIN</button>
    </form>

    <form class="form-signin" id="register" action="/register.php" method=post style="display:none"
          oninput='pass2.setCustomValidity(pass1.value != pass2.value ? "Passwords do not match." : "")'>
        <div class="text-right">
            <div class="btn-group">
                <a class="btn btn-block btn-sm notActive" name="btnLogin" onclick="toggleForm('false')" >LOGIN</a>
                <a class="btn btn-outline-primary btn-sm active">REGISTER</a>
            </div>
        </div>
        <input type="text" class="form-control formInput" placeholder="Username" required autofocus name="username">
        <input type="password" class="form-control formInput" placeholder="Password" name=pass1 required >
        <input type="password" class="form-control formInput" placeholder="Confirm password" name=pass2 required >
        <input type="email" class="form-control formInput" placeholder="EMail" required name="email">
        <input type="hidden" name="submit">
        <button class="btn btn-lg btn-primary btn-block" onclick="doFormSubmit(event)">REGISTER</button>
    </form>

</div> <!-- /container -->

<div class="textFooter">Copyrigth by Maslennikov, 2019
</div>

</body>
</html>