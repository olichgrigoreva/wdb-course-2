<?php
  class DataBase {
    private $connection;
    private $host   = "localhost";
    private $user   = "root";
    private $pass   = "virtual";
    private $bdName = "Users";

    public function connection() {
      $this->connection = mysqli_connect($this->host, $this->user, $this->pass, $this->bdName);
    }

    public function query($strSQL) {
      if (!empty($this->connection)) {
        mysqli_query($this->connection, $strSQL);
      }
    }

    public function fetch($query) {
      mysqli_fetch_assoc($query);
    }
  }
?>
