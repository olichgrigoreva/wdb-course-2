<?php
  ini_set("display_errors", 1);
  error_reporting(E_ALL);

  require_once("./System/Classes/php/Validator.php");
  require_once("./System/Classes/php/DataBase.php");

  function find_user($userName, $password) {
    if (DataBase::connect()) {
      $strSQL = "SELECT * FROM List_users WHERE Name = '".$userName."' AND Password = '".$password."' ORDER BY Name";
      $query = DataBase::query($strSQL);

      if ($rec = DataBase::fetch($query))  {
        $res = "Пользователь найден в БД пользователей!";
      }
      else { $res = "Неверный логин или пароль!"; }

      return $res;
    }
  }

  if (!empty($_REQUEST["buttLogin"])) {
    $res_text = "";
    if (Validator::not_empty($_REQUEST["userName"], $_REQUEST["password"])) {
      $res_text = find_user($_REQUEST["userName"], MD5($_REQUEST["password"]));
    }
    else { $res_text="Ошибка ввода данных!"; }

    //echo "<pre>";
  //  print_r($res_text);
  //  echo "</pre>";

  }

  if (!empty($_REQUEST["buttRegister"])) {
    header("Location: Modules/Register/html/Register.html");
    exit;
  }
?>
<html>
<head>
  <link href="Modules/Bootstrap/css/bootstrap.css" rel="stylesheet">
  <script src="Modules/Bootstrap/js/bootstrap.js"> </script>
  <meta charset="utf-8">

  <title> Notebook </title>
  <style>
    .header_text {
      background-color: #E0E0E0;
      font: bold 16px Arial;
      padding: 25px;
      text-align: center;
      display: flex;
      width: 100%;
      justify-content: center;
    }
    .space {
      padding: 10px;
    }
    #container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .input_text {
      font: 16px Arial;
      flex: 0 1 auto;
      padding: 10px;
      margin: 10px;
      width: 200;
    }
    .footer_text {
      position: fixed;
      left: 0;
      bottom: 0;
      padding: 15px;
      background-color: #E0E0E0;
      font: 14px Arial;
      display: flex;
      width: 100%;
      justify-content: center;
    }
    </style>
</head>

<body>
  <div class="header_text">
    SUPER NOTEBOOK
  </div>

  <form id="container">
    <input type="text" class="input_text" name="userName" placeholder="Username" value="<?php if (isset($_REQUEST["userName"])) { echo $_REQUEST["userName"]; } else { echo ""; } ?>">
    <input type="password" class="input_text" name="password" placeholder="Password" value="<?php if (isset($_REQUEST["Password"])) { echo $_REQUEST["Password"]; } else { echo ""; } ?>">
    <input type="submit" class="input_text btn btn-primary" name="buttLogin"    value="Login">
    <input type="submit" class="input_text btn btn-primary" name="buttRegister" value="Register">
    <a class="input_text" name="outRes"> <?php if (isset ($res_text)) { echo $res_text; } else { echo ""; } ?> </a>
  </form>

  <div class="footer_text">
    Copyright by Rumka, 2019
  </div>
</body>
</html>
