<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

$connection = mysqli_connect("localhost", "root", "virtual", "wdb");
// or die("Connection not available");
if (!empty($connection)) {
$username = "Ivan";
$password = "123";
// $insert_query =
// "INSERT INTO users(username, password) VALUES('"
// . $username .
// "', '"
// . $password.
// "')"
// ;
$insert_query =
"INSERT INTO users(username, password) VALUES('$username', MD5('$password'))";
// echo $insert_query;
mysqli_query($connection, $insert_query);

$update_query =
"UPDATE users SET username = 'Ivan1' WHERE id = 7";
mysqli_query($connection, $update_query);

$delete_query = "DELETE FROM users WHERE id = 7";
mysqli_query($connection, $delete_query);

$query = mysqli_query($connection, "SELECT * FROM users");
while($user = mysqli_fetch_assoc($query)) {
echo "<pre>";
print_r($user);
echo "</pre>";
}

// $user = mysqli_fetch_assoc($query);
// while(!empty($user)) {
// echo "<pre>";
// print_r($user);
// echo "</pre>";
// $user = mysqli_fetch_assoc($query);
// }

// $user = mysqli_fetch_assoc($query);
// echo "1<pre>";
// print_r($user);
// echo "</pre>";
// $user = mysqli_fetch_assoc($query);
// echo "2<pre>";
// print_r($user);
// echo "</pre>";
// $user = mysqli_fetch_assoc($query);
// echo "3<pre>";
// print_r($user);
// echo "</pre>";

}