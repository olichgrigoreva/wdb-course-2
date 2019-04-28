<?php
  session_start();

  if(!empty($_POST)) {
    print_r($_POST);
    session_destroy();
    header("Location: ../LoginPage/login.php");
  };
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Notebook</title>
  <style>
      h1 {
        text-align: center;
        font-weight: 700;
        font-size: 80px;
    }

    input {
      display: block;
      margin: 0 auto;
    }

    .container {
        width: 300px; 
        padding: 10px; 
        margin: auto; 
    }
  </style>
</head>
<body>
<div class="container">
  <h1>Welcome <?php print_r($_SESSION['user']) ?></h1>
  <form  method="POST">
    <input type="submit" name="Logout" value="Logout">
  </form>
</div>
</body>
</html>