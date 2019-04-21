<?php
$connection = mysqli_connect("localhost", "root", "virtual", "cherepanov");
$username=$_REQUEST['username_field'];
$user_password=$_REQUEST['pass_field'];
$email=$_REQUEST['email_field'];


$insert_query = "INSERT INTO users(username, password, email) VALUES('$username', '$user_password', '$email')";
mysqli_query($connection, $insert_query);

echo "User is created";

?>