<?php
class Database {
    private $connection;
    private $host = "localhost"; 
    private $user = "root";
    private $password = "";
    private $calculator_5 = "calculator_5";
    
    public function __construct($calculator_5){
        $this-> connection = mysqli_connect(
            $this->host,
            $this->user,
            $this->password,
            $this ->calculator_5
            );
    }
    
    public function query($sql){
        mysqli_query ($this->connection, $sql);
        
    }
 
    
    
}



?>