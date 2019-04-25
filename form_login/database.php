<?php
class database{
  private static $connection;
  private static $host = "localhost";
  private static $user = "root";
  private static $password = "virtual";
  private static $databaseName = "levashov";
    public static function connect(){
      self::$connection = mysqli_connect(self::$host, self::$user, self::$password, self::$databaseName);
    }
        public static function insert_query($insert_query){
            return self::$insert_query = mysqli_query($connection, "INSERT INTO users (username, password) VALUES ('$username', MD5('$password'))");
        }
    public function select_query($query){
     return self::$select_query = mysqli_query($connection, "SELECT username, password FROM users");
    }
  }
?>
