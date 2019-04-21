<?php
ini_set("display_errors",1);
    error_reporting(E_ALL);
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $EMail = $_POST['EMail'];
//    $Username = clean($Username);
//    $Password = clean($Password);
//    $EMail = clean($EMail);
//    $Confirm_Password = clean($Confirm_Password);

    session_start();//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
if (isset($_POST['EMail'])) { $EMail = $_POST['EMail']; if ($EMail == '') { unset($EMail);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['Password'])) { $Password=$_POST['Password']; if ($Password =='') { unset($Password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($EMail) or empty($Password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали
    $EMail = stripslashes($EMail);
    $EMail = htmlspecialchars($EMail);
    $Password = stripslashes($Password);
    $Password = htmlspecialchars($Password);
//удаляем лишние пробелы
    $EMail = trim($EMail);
    $Password = trim($Password);
// подключаемся к базе
    include ("db.php");

    $result=mysqli_query($db, "SELECT * FROM users WHERE EMail='$EMail'"); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow=mysqli_fetch_array($result);
    if (empty($myrow['Password']))
    {
    //если пользователя с введенным логином не существует
    exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {
    //если существует, то сверяем пароли
    if ($myrow['Password']==$Password) {
    //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
    $_SESSION['EMail']=$myrow['EMail'];
    $_SESSION['id']=$myrow['id'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
    echo "Вы успешно вошли на сайт! <a href='index1.php'>Главная страница</a>";
    }
 else {
    //если пароли не сошлись

    exit ("Извините, введённый вами login или пароль неверный.");
    }
    }
    ?>