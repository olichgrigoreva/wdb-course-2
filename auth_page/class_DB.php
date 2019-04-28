<?php
class Database
{
    private $host_db, $user_db, $pass_db, $dbname_db, $query_db;

    function __construct($host_db, $user_db, $pass_db, $dbname_db)
    {
        $this->host = $host_db;
        $this->user = $user_db;
        $this->pass = $pass_db;
        $this->database = $dbname_db;
    }
     
    function connection($query_db){
        echo "Connect to DB. Query: ";
    	$connection = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
   		echo $query_db;
        mysqli_query($connection, $query_db);
    }

    function selectFromDB($query_db){
    	$result = mysqli_fetch_assoc($this->$query_db);
    	return $result;
    }
}
?>