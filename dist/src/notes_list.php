<?php
ini_set("display_errors", "on");
error_reporting(E_ALL);

$connection = mysqli_connect("localhost", "root", "virtual", "wdb");

// echo "<pre>";
// echo mysqli_errno();
// print_r(mysqli_error());
// print_r(mysqli_connect_error())
// echo "</pre>";

mysqli_set_charset($connection, "utf8");
$query = mysqli_query($connection, "SELECT * FROM notes");
$notes = [];
while ($row = mysqli_fetch_assoc($query)) {
  $notes[] = $row;
}
mysqli_close($connection);
echo json_encode($notes);
