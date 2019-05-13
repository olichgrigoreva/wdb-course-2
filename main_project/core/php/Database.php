<?php
class Database {
    public static $connection;
    private static $host = "localhost";
    private static $username = "root";
    private static $password = "virtual";

    public static function connect($dbname) {
        self::$connection = mysqli_connect(
            self::$host,
            self::$username,
            self::$password, $dbname
        );
    }
    public static function query($select_query) {
        return mysqli_query(self::$connection, $select_query);
    }
    public static function fetch_assoc($query_result) {
        return mysqli_fetch_assoc($query_result);
    }
    public static function close() {
        mysqli_close(self::$connection);
    }
}
?>
