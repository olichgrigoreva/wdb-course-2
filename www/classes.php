<?php
class BaseConnection {
    private $connection;
    private $query;
    private $host = "localhost";
    private $user = "root";
    private $pass = "virtual";

    public function __construct($dbname) {
        $this->connection = mysqli_connect(
          $this->host,
          $this->user,
          $this->pass,
          $dbname
        );

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
