<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

// $username = $_REQUEST["username"];
$username = trim($_REQUEST["username"], " "); //убираем пробелы в начале и конце
if ((preg_match("/\W+/", $username)) == TRUE) {
    echo "норм" . "<br>";
}
else {echo "плохо" . "<br>";}

$password = $_REQUEST["password"];

Database::connect("wdb");
if (!empty(Database::$connection)) {
    $query_username_match = Database::query(
        "SELECT id, username, password
         FROM users
         WHERE username = '$username'"
    );
    $query_row = Database::fetch_assoc($query_username_match);
    $loginpassFoundAndCorrect= $query_row && ($query_row["password"] == md5($password));
    if (!empty($loginpassFoundAndCorrect)) {
        $_SESSION["id"] = $query_row["id"];
        echo "login " . $username . " successfully!";
    }
    else {echo "invalid login or password!";}
    Database::close();
}
?>
