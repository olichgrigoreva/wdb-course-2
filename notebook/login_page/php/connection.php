<?php
class connection {
  private static $connection;
  private static $query;
  private static $host = "localhost";
  private static $user = "root";
  private static $pass = "virtual";

    public function __construct($databaseName) {
      $this->connection = mysqli_connect(
      $this->host,
      $this->user,
      $this->$password,
      $databaseName,
      );
    }
      function write_to_database() {
          mysqli_query($this->connection, $query);
      }
      function read_from_database() {
          while($query_results = mysqli_fetch_assoc($query)) {
              echo "<pre>";
              print_r($query_results);
              echo "</pre>";
          }
    }
}
