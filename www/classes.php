<?php
class BaseConnection {

    var $connection;
    var $query;

    function write_to_DataBase() {
        mysqli_query($connection, $query);
        }

    function read_from_DataBase() {
        while($query_results = mysqli_fetch_assoc($query)) {
            echo "<pre>";
            print_r($query_results);
            echo "</pre>";        
          }
    }
}
