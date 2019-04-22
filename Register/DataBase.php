<?php
  class DataBase {
    private static $connection;
    private static $host   = "localhost";
    private static $user   = "root";
    private static $pass   = "virtual";
    private static $bdName = "Shargina";

    public static function connect() {
      self::$connection = mysqli_connect(self::$host, self::$user, self::$pass, self::$bdName);
    }

    public static function query($strSQL) {
      if (!empty(self::$connection)) {
        mysqli_query(self::$connection, $strSQL);
      }
    }

    public function fetch($query) {
      mysqli_fetch_assoc($query);
    }
  }
?>
