<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$connection = mysqli_connect("localhost", "root", "virtual", "wdb");
if (!empty($connection)) {
    $username_query ="SELECT * FROM users WHERE username = '$username'";
    $username_verify = mysqli_fetch_assoc(mysqli_query($connection, $username_query));
    if ($username_verify) {echo "Login already exist";}
    else {
        $userNew = mysqli_query($connection, "INSERT INTO users(username, email, password) VALUES('$username', '$email', MD5('$password')) ");
        echo "Registration successfully!";
        }
mysqli_close($connection);
}
?>
