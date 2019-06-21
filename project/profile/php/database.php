<?php
class database {
  private $connection;

  public function __construct($host, $user, $pass, $dbname) {
    $this->connection = mysqli_connect($host, $user, $pass, $dbname);
      if (!$this->connection) {
        throw new Exception("Cannot to connect to database");
      }
  }
  public function write_to_DataBase($sqlquery) {
    mysqli_query($this->connection, $sqlquery);
  }
  public function check_in_DataBase($check_query) {
    $this->check_results = mysqli_fetch_assoc(mysqli_query($this->connection, $check_query));
    return $this->check_results;
  }
}
