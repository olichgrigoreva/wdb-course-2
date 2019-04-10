<?php

  const dbHOST = 'localhost';
  const dbUSER = 'aleks';
  const dbPASS = '123';
  const dbNAME = 'aleks';
  const dbTABLE = 'users';
  const CNT_RECORD_DISPLAY=5;

  ini_set("display_errors", 1);
  error_reporting(E_ALL);

  echo("login.php with request: ");
  echo($_REQUEST["submitLogin"]."<br>");
  if (!empty($_REQUEST["submitLogin"])) {
    echo("submit ok <br>");
    $userName=$_REQUEST["usernameLogin"];
    $userPassword=$_REQUEST["passwordLogin"];
    $mysqli = mysqli_init();
    $connection = mysqli_connect(dbHOST, dbUSER, dbPASS, dbNAME);
    if(!empty($connection)) {
      $query=mysqli_query($connection, "SELECT * FROM ".dbTABLE."WHERE 'login' = ".$userName);
      echo("query: <pre>");
      echo $query;
      echo("</pre><br>");
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="CP1251">
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

        .notActive{
        //  color: black;
            color: #3276b1;
            background-color: #fff;
        }
    </style>
    <script>
        console.log("FORM LOADED, WAITING!!!");
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

        function buttonLogin(event) {
            console.log("login button press <br>");
            let formLogin = event.target.closest("form");
            for(var i = 0; i < formLogin.elements.length-2; i++){
                el = formLogin.elements[i];
                if (!el.value) return;
            }
            let submitLogin = document.getElementsByName("submitLogin")[0];
            submitLogin.value="LOGIN";
            event.preventDefault();
            fetch("/login.php", {
                           method: "POST",
                           body: new FormData(formLogin)
                       }).then(response => {
                           return response.text();
                       }).then(text => {
                           console.log(text);
                       });
        } // function buttonLogin(event)

        function buttonRegister(event) {
            console.log("register button press <br>");
            let formRegister = event.target.closest("form");
            for(var i = 0; i < formRegister.elements.length-2; i++){
                el = formRegister.elements[i];
                if (!el.value) return;
            }
            let submitRegister = document.getElementsByName("submitRegister")[0];
            submitRegister.value="REGISTER";
            event.preventDefault();
            fetch("/register.php", {
                        method: "POST",
                        body: new FormData(formRegister)
                    }).then(response => {
                        return response.text();
                    }).then(text => {
                        console.log(text);
                    });
        } // function buttonRegister(event)
    </script>
</head>

<body>
<div class="textHeader">SUPER NOTEBOOK
</div>

<div class="container">
    <form class="form-signin" id="login" action="/login.php" method=post>
        <div class="text-right">
            <div class="btn-group">
                <a class="btn btn-outline-primary btn-sm active">LOGIN</a>
                <a class="btn btn-block btn-sm notActive" onclick="toggleForm('true')">REGISTER</a>
            </div>
        </div>
        <input type="text" name="usernameLogin" class="form-control formInput" placeholder="Username" autofocus required>
        <input type="password" name="passwordLogin" class="form-control formInput" placeholder="Password" required>
        <input type="hidden" name="submitLogin">
        <button class="btn btn-lg btn-primary btn-block" onclick="buttonLogin(event)">LOGIN</button>
    </form>

    <form class="form-signin" id="register" action="/register.php" method=post style="display:none"
          oninput='pass2.setCustomValidity(pass1.value != pass2.value ? "Passwords do not match." : "")'>
        <div class="text-right">
            <div class="btn-group">
                <a class="btn btn-block btn-sm notActive" onclick="toggleForm('false')" >LOGIN</a>
                <a class="btn btn-outline-primary btn-sm active">REGISTER</a>
            </div>
        </div>
        <input type="text" class="form-control formInput" placeholder="Username" required autofocus name="username">
        <input type="password" class="form-control formInput" placeholder="Password" required name=pass1>
        <input type="password" class="form-control formInput" placeholder="Confirm password" required name=pass2>
        <input type="email" class="form-control formInput" placeholder="EMail" required name="email">
        <input type="hidden" name="submitRegister">
        <button class="btn btn-lg btn-primary btn-block" onclick="buttonRegister(event)">REGISTER</button>
    </form>

</div> <!-- /container -->

<div class="textFooter">Copyrigth by Maslennikov, 2019
</div>

</body>
</html>