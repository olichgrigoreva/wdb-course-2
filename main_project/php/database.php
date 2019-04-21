<?php
class Database {
    public $connection;
    private $host = "localhost";
    private $username = "root";
    private $password = "virtual";

    function Connect($dbname) {
        $this->connection = mysqli_connect(
            $this->host,
            $this->username,
            $this->password, $dbname
        );
    }
    function Query($select_query) {
        return mysqli_query($this->connection, $select_query);
    }
    function Fetch_assoc($query_result) {
        return mysqli_fetch_assoc($query_result);
    }
    function Close() {
        mysqli_close($this->connection);
    }
}
?>
