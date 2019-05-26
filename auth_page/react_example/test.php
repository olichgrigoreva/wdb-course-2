<?php
$connection = mysqli_connect("localhost", "user", "user", "grigorieva");
$user_id = $_REQUEST["user_id"];
$title = $_REQUEST["title"];
$text = $_REQUEST["text"];
mysqli_query($connection, "INSERT INTO notes(users_id, titles, texts) VALUES ('$user_id', '$title', '$text')");

echo "Note created";
