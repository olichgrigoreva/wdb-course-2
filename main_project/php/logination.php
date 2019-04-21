<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];

$db = new Database();
$db->Connect("wdb");
if (!empty($db->connection)) {
    $select_query = $db->Query(
        "SELECT id, username, password
         FROM users
         WHERE username = '$username'"
    );
    $result = $db->Fetch_assoc($select_query);
    if (!empty($result)&&(($result["password"]) == md5($password))) {
        echo "login successfully!";
    }
    else echo "invalid login or password!";
    $db->Close();
}
?>
