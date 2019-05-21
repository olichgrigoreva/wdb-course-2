    <?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    SESSION_START();
            // Проверяем, пусты ли переменные логина и id пользователя
      if (empty($_SESSION['Username']) or empty($_SESSION['id']))
        {
        // Если пусты, то мы не выводим ссылку
     echo "Вы вошли на сайт, как гость";
        }
     else
        {

        // Если не пусты, то мы выводим ссылку
    echo "Вы вошли на сайт, как ".$_SESSION['Username'];
        }
        ?>
    <html>
    <head>
    <title>Главная страница</title>
    <link rel="stylesheet" href="main.css">
    </head>
    <body>
       <div class="container">
        <div class="header_second">SUPER NOTEBOOK</div>
        <form name="valu" action="testreg.php" method="post">
            <input class="Username" type="text" name="Username" placeholder="Username">
            <input class="Password" type="password" name="Password" placeholder="Password">
            <input class="Confirm_Password" type="Confirm_Password" name="Confirm_Password" placeholder="Confirm_Password">
            <input class="EMail" type="text" name="EMail" placeholder="EMail">
            <input class="register" type="submit" value="Войти">
            <input value="Зарегистрироваться" type="button" onclick="location.href='reg.php'" />
        </form>
        </div>
        <header></header>
        <div class="footer">Copyright by ..., 2016</div>

    </body>
    </html>