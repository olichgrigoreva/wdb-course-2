<?php
class database {
  private static $connection;
  private static $query;
  private static $host = "localhost";
  private static $user = "root";
  private static $password = "virtual";
  private static $databaseName = "levashov";

  public function __construct($host, $user, $password, $databaseName) {
      $this->connection = mysqli_connect($host, $user, $password, $databaseName);
        if (!$this->connection) {
          throw new Exception("Couldn't connect to database");
        }
    }
    public function write_to_database($sqlquery) {
      mysqli_query($this->connection, $sqlquery);
    }
    public function check_in_database($check_query) {
      $this->check_results = mysqli_fetch_assoc(mysqli_query($this->connection, $check_query));
      return $this->check_results;
    }
}
