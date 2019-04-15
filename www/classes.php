<?php
class BaseConnection {

    var $connection;
    var $insert_query;

    function write_to_DataBase() {
        mysqli_query($connection, $insert_query);
        }

    function read_from_DataBase() {

            $this->loggedIn = false;

          }
        
    
    
}