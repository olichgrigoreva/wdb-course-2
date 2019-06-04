<?php
ini_set("display_errors", "on");
error_reporting(E_ALL);

$connection = mysqli_connect("localhost", "root", "virtual", "wdb");

// echo "<pre>";
// echo mysqli_errno();
// print_r(mysqli_error());
// print_r(mysqli_connect_error())
// echo "</pre>";

$query = mysqli_query($connection, "SELECT * FROM `123`");
$notes = [];
while ($row = mysqli_fetch_assoc($query)) {
  $notes[] = $row;
}

echo json_encode($notes);
