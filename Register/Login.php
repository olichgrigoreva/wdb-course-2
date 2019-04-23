<?php
  if (!empty($_REQUEST["buttRegister"])) {
    header("Location: Register.html");
    exit;
  }
?>
<html>
<head>
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <script src="bootstrap/js/bootstrap.js"> </script>
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
    <input type="text" class="input_text" name="password" placeholder="Password" value="<?php if (isset($_REQUEST["Password"])) { echo $_REQUEST["Password"]; } else { echo ""; } ?>">
    <input type="submit" class="input_text btn btn-primary" name="buttLogin"    value="Login">
    <input type="submit" class="input_text btn btn-primary" name="buttRegister" value="Register">
  </form>

  <div class="footer_text">
    Copyright by Rumka, 2019
  </div>
</body>
</html>
