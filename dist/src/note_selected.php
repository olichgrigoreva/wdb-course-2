<?php
ini_set("display_errors", "on");
error_reporting(E_ALL);

$json = json_decode(file_get_contents("php://input"),true);
$id = $json["id"];
// echo ($json["id"]);
$connection = mysqli_connect("localhost", "root", "virtual", "wdb");
if (!empty($connection)) {
  mysqli_set_charset($connection, "utf8");
  $query = mysqli_query($connection, "SELECT * FROM notes WHERE id='$id'");
  $result = mysqli_fetch_assoc($query);
  mysqli_close($connection);
}
echo json_encode($result);
