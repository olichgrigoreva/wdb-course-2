<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

  class database {
    public static $connection;
    public static function connect($name) {
      self::$connection = mysqli_connect("localhost", "root", "virtual", "notebook");

      if(mysqli_connect_error()) {
          echo mysqli_connect_error();
        die();
      }
    }
      public static function check_val($val) {
        return mysqli_real_escape_string(self::$connection, $val);
      }
        public static function query($sql_query) {
          mysqli_query(self::$connection, $sql_query);
          echo (self::$connection->error);
        }
          public static function query_select($sql_query) {
            $query = mysqli_query(self::$connection, $sql_query);
            $data = [];
            while($row = mysqli_fetch_assoc($query)) {
              $data[] = $row;
            }
      return $data;
    }
  }
