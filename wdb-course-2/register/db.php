<?php
$db = mysqli_connect("localhost", "root", "virtual","katasonova");
?>
class Database {
  private static $connection;
  private static  function_connect(){
  self::connection=mysqli_connect;
     }
  }
  $host = "localhost";
  private $user = "root";
  private $pass = "virtual";

  public function __construct($dbname) {
    $this->connection = mysqli_connect(
      $this->host,
      $this->user,
      $this->pass,
      $dbname
    );
  }

  private function query($sql) {
    mysqli_query($this->connection, $sql);
  }
}