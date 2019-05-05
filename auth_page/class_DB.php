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
     
    function connection(){
        echo "\nConnect to DB.";
    	$connection = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        return $connection;
    }

    function insertToDB($insert_query){
        echo "\nINSERT to DB. Query: ";
        echo $insert_query;
        mysqli_query($this -> connection(), $insert_query);
    }

    function isUsedinDB($isusedemail_query){
        echo "\nIs this name/email used in DB. Query: ";
        echo $isusedemail_query;        
    	$result = mysqli_query($this -> connection(), $isusedemail_query);
        $row = mysqli_fetch_row($result);
        echo "Response: ";
        print_r($row);
    	return $row;
    }

    function selectFromDB($select_query){
        echo "\nSELECT from DB. Query: ";
        echo $select_query;        
        $result = mysqli_query($this -> connection(), $select_query);
        $row = mysqli_fetch_row($result);
        echo "Response: ";
        print_r($row);
        return $row;
    }    
}
?>