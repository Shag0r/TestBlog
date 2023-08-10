<?php

class Connection{
    
    protected $conn;

    public function __construct(){
    

       $this->conn = new Mysqli("localhost","root","","testblog");






        
    }

    
}




?>