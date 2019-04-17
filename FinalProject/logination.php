<?php
$connection=mysqli_connect("localhost", "root", "virual", "SuperNoteBook");

$login=$_REQUEST["field_login"];
$password=md5($REQUEST["field_password"]);

$insert_query="INSERT INTO Users (login, password) VALUES ('$login', 'password')";

?>
