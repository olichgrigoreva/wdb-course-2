<?php

 class Database {
     
    private $connection;
    private $query;
    private $fetch_assoc;
    
    public function connect (){
        
        $this-> connection = msqli_connect("localhost","root","","Korotkov");
        
        $this-> query = mysqli_query(connect);
        
        $this-> fetch_assoc = mysqli_fetch_assoc(query);
    }
      
    // public function fetch (){
         
    //     $this-> fetch_assoc = mysqli_fetch_assoc(query);
    // }
     
     

    // $connect = mysqli_connect("localhost","root","","Korotkov");
    // $query = msqli_query ($connect);
    

 }


