<?php
 class Database {
   private static $connection;

   public static function connect (){
     self::$connection = mysqli_connect("localhost", "root", "virtual", "wdb");
   }

   public static function query (){
     self::$query = mysqli_query ($connection, "SELECT number1, action, number2, result FROM results ORDER BY created DESC LIMIT 5");
     while ($operation = mysqli_fetch_assoc ($query)){
      echo "<pre>";
      print_r ($operation);
      echo "</pre>";
    }
  }

   public static function insert_query (){
     self::$insert_query = mysqli_query ($connection, "INSERT INTO results(number1, action, number2, result) VALUES ('$number1', '$action', '$number2', '$result')");
   }
?>
