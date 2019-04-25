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
        public static function query($strSQL){
          if (!empty(self::$connection)){
            mysqli_query(self::$connection, $strSQL);
          }
        }
    public function fetch($query){
      mysqli_query_assoc($query);
    }
  }
?>
