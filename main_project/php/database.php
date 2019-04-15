<?php
class Database {
    var $host = "localhost";
    var $username = "root";
    var $password = "virtual";
    var $name = "wdb";
    function Connect() {
        return mysqli_connect($this->host, $this->username, $this->password, $this->name);
    }
    function Query($query) {
        return mysqli_query($this->Connect(), $query);
    }
}
$db = new Database();
?>
