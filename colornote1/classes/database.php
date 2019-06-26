<?php

class Database {
     
    private $connection;
        
    public function connect (){
        
        $this-> connection = mysqli_connect("localhost","root","virtual","Korotkov");
        
        // $this-> query = mysqli_query(connect);
        
        // $this-> fetch_assoc = mysqli_fetch_assoc(query);
    }

    public function query ($sql){
         
        return mysqli_query($this-> connection, $sql);
        //$sql="INSERT INTO Reg_users (username, password, email...
    }
      
   
    public function fetch ($query){
         
        return mysqli_fetch_assoc($query);
    }
  

}


