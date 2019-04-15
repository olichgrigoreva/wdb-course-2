<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];

$connection = $db->Connect();
if (!empty($connection)) {
    $verify_query = $db->Query("SELECT username, password FROM users WHERE username = '$username'");
    $result = mysqli_fetch_assoc($verify_query);
    if (!empty($result)&&(($result["password"]) == md5($password))) {
        echo "login successfully!";
    }
    else echo "invalid login or password!";
    mysqli_close($connection);
}
?>
