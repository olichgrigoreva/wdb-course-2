<?php
 class Database {
   private static $connection;

   public static function connect(){
     self::$connection = mysqli_connect("localhost", "root", "virtual", "ziazova");
   }

   public static function insert_query(){
     self::$insert_query = mysqli_query($connection, "INSERT INTO users(username,password) VALUES ('$username', MD5('$password'))");
   }

   public static function select_query(){
     self::$select_query = mysqli_query($connection, "SELECT username, password FROM users");
   }
 }
 ?>
