<?php
class connection {
  private $connection;
  private $query;
  private $host = "localhost";
  private $user = "root";
  private $pass = "virtual";
  private $dbname = "levashov";

    protected function connection() {
      $this->host = "localhost";
      $this->user = "root";
      $this->pass = "virtual";
      $this->dbname = "levashov";
        $connection = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
          return $connection;
    }
      /*public function __construct($dbname) {
        $this->connection = mysqli_connect(
        $this->host,
        $this->user,
        $this->pass,
        $this->$dbname
        );
      }*/
    function write_to_DataBase() {
      mysqli_query($this->connection, $query);
    }
      function read_from_DataBase() {
        while($query_results = mysqli_fetch_assoc($query)) {
          echo "<pre>";
          print_r($query_results);
          echo "</pre>";
        }
      }
}
