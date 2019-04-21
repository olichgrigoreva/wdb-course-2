    <?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
    <html>
    <head>
    <title>Главная страница</title>
    <link rel="stylesheet" href="main.css">
    </head>
    <body>
       <div class="container">
        <div class="header_second">SUPER NOTEBOOK</div>

        </div>
        <header></header>
        <div class="footer">Copyright by ..., 2016</div>
   <?php
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
    </body>
    </html>