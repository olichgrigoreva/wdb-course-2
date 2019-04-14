<?php
  class Data_base {
    private $connection;

    public function __construct($name) {
      $this->connection = mysqli_connect("localhost", "root", "virtual", $name);
      
      if(mysqli_connect_error()) {
        echo mysqli_connect_error();
        die();
      }
      
    }
    
    public function query($sql_query) {
      mysqli_query($this->connection, "$sql_query;");
      echo ($this->connection->error);
    }

    public function query_select($sql_query) {
      $query = mysqli_query($this->connection, $sql_query);
      $data = [];

      while($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
      }

      return $data;
    }

  }