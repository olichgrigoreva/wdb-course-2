<meta charset="utf-8">
<?php
$host = 'localhost';
$database = 'katasonova';
$user = 'root';
$password = 'virtual';
 // подключаемся к серверу
$link = mysqli_connect("localhost", "root", "virtual", "katasonova")
    or die("Ошибка1 " . mysqli_error($link));

// ВСТАВКА
// $query ="INSERT INTO users (Username, Password, EMail) VALUES ('Marya', '8888', 'katasonova_masa@mail.ru')";
// $result = mysqli_query($link, $query) or die("Ошибка2 " . mysqli_error($link));
// if($result)
// {
//     echo "Выполнение запроса прошло успешно1 ";
// }
// ОБНОВЛЕНИЕ
//$query ="UPDATE users SET username = 'Nady' WHERE id = '2'";
//  $result = mysqli_query($link, $query) or die("Ошибка3 " . mysqli_error($link));
//  if($result)
//  {
//  echo "Выполнение запроса прошло успешно2 ";
//   }
// ПОИСК
// $query ="SELECT * FROM users";
// $result = mysqli_query($link, $query) or die("Ошибка4 " . mysqli_error($link));
// if ($result = mysqli_query($link, $query))
// {
//      while ($row = mysqli_fetch_assoc($result))
//      printf ($row["username"], $row["password"]);

// echo " Выполнение запроса прошло успешно3 ";
// }
// УДАЛЕНИЕ
//  $query ="DELETE FROM users WHERE id = '5'";
//  $result = mysqli_query($link, $query) or die("Ошибка5 " . mysqli_error($link));
//  if($result)
//  {
// echo "Выполнение запроса прошло успешно4 ";
//  }


session_start();
include_once('connect.php');
if (isset($_POST['EMail'])){
    $email = $_POST['EMail'];
    if ($EMail == '') {
        unset($EMail);
        exit ("Введите пожалуйста EMail!");
    }
}
if (isset($_POST['Password'])){
    $password = $_POST['Password'];
    if ($Password == '') {
        unset($Password);
        exit ("Введите пароль");
    }
}
$EMail = stripslashes($EMail);
$EMail = htmlspecialchars($EMail);
$Password = stripslashes($Password);
$Password = htmlspecialchars($Password);

$EMail = trim($EMail);
$Password = trim($Password);
$Password = md5($Password);
$user = mysql_query("SELECT id FROM user WHERE email='$EMail' AND Password='$Password' AND status='1'");
$res=mysql_query("SELECT * FROM user WHERE EMail='".$_SESSION['EMail']."'");
$id_user = mysql_fetch_array($Username);
if (empty($id_user['id'])){
    if (isset($_POST['logeout']))
    {
    session_destroy();
    header('Location: /Proekt/index.php');
    }
    exit ("Извините, введённый вами логин или пароль неверный.");
}
else {
    $r=mysql_fetch_array($res);
    $_SESSION['Password'] = $Password;
    $_SESSION['EMail'] = $EMail;
    $_SESSION['id'] = $id_user['id'];
    $_SESSION['Username']=$r['Username'];
 }
header('localhost/root/codio/project/loginn.php');
mysql_close();

// session_start();
// include_once('login.php');
// if (isset($_POST['email'])){
//     $email = $_POST['email'];
//     if ($email == '') {
//         unset($email);
//         exit ("Введите пожалуйста email!");
//     }
// }
// if (isset($_POST['password'])){
//     $password = $_POST['password'];
//     if ($password == '') {
//         unset($password);
//         exit ("Введите пароль");
//     }
// }


//     $query_user = mysqli_query("SELECT id FROM users WHERE (username = $_POST['eMail'] && password = $_POST['password']) AND status='1'");
//     echo $query_user;
// }
//  session_start();
// include_once('login.php');
// echo $_POST['eMail'];
// echo $_POST['password'];
// //    $query_user = mysql_query("SELECT id FROM users WHERE (email = $_POST['eMail'] AND password = $_POST['password']) AND status='1'");
// $user = mysql_query("SELECT id FROM user WHERE email= '$_POST['eMail']' AND password= '$_POST['password']' AND status='1'");
// echo $user;
//  if (isset($_POST['email'])){
//    $email = $_POST['email'];
//     if ($email == '') {
//         unset($email);
//         exit ("Введите пожалуйста email!");
//     }
// }
// if (isset($_POST['password'])){
//     $password = $_POST['password'];
//     if ($password == '') {
//         unset($password);
//         exit ("Введите пароль");
//     }
// }
// $email = stripslashes($email);
// $email = htmlspecialchars($email);
// $password = stripslashes($password);
// $password = htmlspecialchars($password);

// $email = trim($email);
// $password = trim($password);
// $password = md5($password);
// //$query_user = mysqli_query("SELECT id FROM users WHERE (username = $_POST['email'] && password = $_POST['password']) AND status='1'");
// $user = mysql_query("SELECT id FROM user WHERE email='$email' AND password='$password' AND status='1'");
// $id_user = mysql_fetch_array($user);
// if (empty($id_user['id'])){
//     exit ("Извините, введённый ваmи логин или пароль неверный.");
// }
// else {
//     $_SESSION['password'] = $password;
//     $_SESSION['email'] = $email;
//     $_SESSION['id'] = $id_user['id'];
// }
// $row=mysql_fetch_array($user);
// echo "Вы успешно зашли ".$row['name'];
// header('localhost/root/codio/project/loginn.php');
// $_SESSION['name'];
// if (isset($_POST['logeout'])) {
//     unset($_SESSION['name']);
//     session_destroy();
// }


// закрываем подключение

// закрываем подключение
mysqli_close($link);
?>