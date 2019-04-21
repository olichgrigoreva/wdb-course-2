<?php
    ini_set("display_errors",1);
    error_reporting(E_ALL);

        if (isset($_POST['Username'])) { $Username = $_POST['Username']; if ($Username == '') { unset($Username);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
        if (isset($_POST['Password'])) { $Password=$_POST['Password']; if ($Password =='') { unset($Password);} }
        if (isset($_POST['EMail'])) { $EMail=$_POST['EMail']; if ($EMail =='') { unset($EMail);} }
        //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
     if (empty($Username) or empty($Password) or empty($EMail)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
        {
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
        }
        //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
        $Username = stripslashes($Username);
        $Username = htmlspecialchars($Username);
        $Password = stripslashes($Password);
        $Password = htmlspecialchars($Password);
        $EMail = stripslashes($EMail);
        $EMail = htmlspecialchars($EMail);
     //удаляем лишние пробелы
        $Username = trim($Username);
        $Password = trim($Password);
        $EMail = trim($EMail);
     // подключаемся к базе
        include ("db.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
     // проверка на существование пользователя с таким же логином
        $result=mysqli_query($db, "SELECT * FROM users WHERE Username='$Username'");
        $myrow=mysqli_fetch_array($result);
        if (!empty($myrow['id'])) {
        exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
        }
     // если такого нет, то сохраняем данные

        $result2=mysqli_query($db, "INSERT INTO users(Username,Password,EMail)
        VALUES ('$Username', '$Password', '$EMail')");
        // Проверяем, есть ли ошибки
        if ($result2=='TRUE')
        {
        echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
        }
     else {
        echo "Ошибка! Вы не зарегистрированы.";
        }
        ?>
