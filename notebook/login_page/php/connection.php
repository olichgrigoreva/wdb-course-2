<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

  class Connection {
    private $connection;
    private $query;
    private $host         = "localhost";
    private $username     = "root";
    private $password     = "virtual";
    private $databaseName = "levashov";

        public function __construct($databaseName) {
          $this->connection = mysqli_connect(
            $this->host,
            $this->username,
            $this->password,
            $databaseName
          );
        }

          function write_to_Database() {
            mysqli_query($this->connection, $query);
          }
          function read_from_Database() {
            while($query_results = mysqli_fetch_assoc($query)) {
              echo "<pre>";
              print_r($query_results);
              echo "</pre>";
            }
          }
  }
