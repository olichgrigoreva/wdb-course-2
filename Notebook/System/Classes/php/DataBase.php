<?php
/**
 * Класс для работы с БД
 */
  class DataBase {
    private static $connection;
    private static $host   = "localhost";
    private static $user   = "root";
    private static $pass   = "virtual";
    private static $bdName = "Shargina";

    public static function connect() {
      $res = false;
      self::$connection = mysqli_connect(self::$host, self::$user, self::$pass, self::$bdName);
      if (!empty(self::$connection)) {
        $res = true;
      }
      return $res;
    }

    public static function query($strSQL) {
      if (!empty(self::$connection)) {
        $res = mysqli_query(self::$connection, $strSQL);
      }
      return $res;
    }

    public static function fetch($query) {
      $res = mysqli_fetch_assoc($query);
      return $res;
    }

    public static function disconnect() {
      mysqli_close(self::$connection);
    }
  }
?>
