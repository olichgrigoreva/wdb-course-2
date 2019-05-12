<?php
class Database
{
    public $connection;
    private $host = "localhost";
    private $user = "root";
    private $password = "virtual";
    private $database_name = "miroshkin";

    public function connect()
    {
        $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->database_name);
        return $this->connection;
    }

    public function insert_query($insert_query)
    {
        $query_i = mysqli_query($this->connection, $insert_query);
        return $query_i;
        
    }
    public function select_query($select_query)
    {
        $query_s = mysqli_query($this->connection, $select_query);
        return $query_s;
    }
}

class Session
{
    public function session_init()
    {
        session_start();
    }

    public function session_open($username)
    {
        $_SESSION["username"] = $username;
    }

    public function session_check()
    {
        if (isset($_SESSION["username"])){
            return true;
        } else return false;
    }

    public function session_close($username)
    {
        session_destroy();
        // unset($_SESSION["username"]);
    }
}
