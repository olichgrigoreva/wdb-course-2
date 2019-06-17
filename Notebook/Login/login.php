<?php
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    require_once "../PhpClasses/Data_base.php";
    require_once "../PhpClasses/Validator.php";

    if(!empty($_POST['username']) && !empty($_POST['pass'])) {

        $check = Validator::check_valid($_POST['username'], $_POST['pass']);

        if(empty($check)) {

            Data_base::connect("maymin_users");

            $user = Data_base::check_val($_POST['username']);
            $pass = MD5(Data_base::check_val($_POST['pass']));

            $data_user = Data_base::query_select("SELECT * FROM users WHERE `user_name`='$user' AND `pass`='$pass'");

            if(!empty($data_user)) {
                session_start();
                $_SESSION['user'] = $data_user[0]['user_name'];
                $_SESSION['email'] = $data_user[0]['email'];
                $_SESSION['pass'] = $data_user[0]['pass'];
                header("Location: ../Note/note.php");
            } else {
                $reject = Validator::alert_mess("Неверное имя пользователя или пароль");
            };
        }
    }
?>

<!DOCTYPE html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/style.css">

    <title>Login</title>
  </head>
  <body>
      <div class="container-fluid">
          <header class="row block-1">
              <div class="col text-center">
                  <h1>NOTEBOOK</h1>
                </div>
            </header>
            <div class="row form-row">
                <form class="col-md-6 mx-auto form-cont" method="POST">
                    <div class="card card-body">
                        <h3  id="txtHeader" class="header text-center mb-4">Login</h3>
                        <?php if(isset($reject)) echo $reject?>
                        <?php if(isset($check))foreach($check as $val): ?>
                                <?php echo $val ?>
                        <?php endforeach; ?>
                    <div class="form-group">
                        <input class="form-control input-lg" placeholder="User Name" name="username" type="text" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control input-lg" placeholder="Pasword" name="pass" type="password" required>
                    </div>
                    <input class="btn btn-primary mb-2 btn btn-lg" type="submit" name="Login">
                </form>
                    <button type="submit" onClick='location.href="../Registration/index.html"' class="btn btn-primary mb-2 btn btn-lg">Registration</button>
            </div>
        </div>
        <footer class="row block-1">
            <div class="col text-center align-self-center">
                <h4>© Copyright 2019. All rights reserved</h4>
            </div>
        </footer>
    </div>
  </body>
</html>