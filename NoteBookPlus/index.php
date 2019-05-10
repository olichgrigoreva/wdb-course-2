<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();
// echo session_id();
if(!isset($_SESSION['logged_in_user_name'])){
     header("Location: /NoteBookPlus/client/authorization_page/authorization.php");
     die;
 }


?>

<?php
header("Location: /NoteBookPlus/client/notebook/public/index.html");
die;
// Блокнот. пользователь: <?php echo $_SESSION['logged_in_user_name']
?>
