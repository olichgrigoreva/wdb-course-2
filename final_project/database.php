<?php
 class Database {
   private static $connection;
   private static $host = 'localhost';
   private static $user = 'root';
   private static $pass = 'virtual';
   private static $dbname = 'ziazova';

   public static function connect(){
     return self::$connection = mysqli_connect(self::$host, self::$user, self::$pass, self::$dbname);
   }

   public static function query($sql_command){
     return self::$query = mysqli_query(self::$connection, $sql_command);
   }
 }
