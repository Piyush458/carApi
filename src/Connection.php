<?php

class Connection
{
    
    private $connection = null; 
    public function __construct()
    {
        $this->connection = mysqli_connect("localhost", "root", "root", "car-rental");
    }

    public function getConnection()
    {
        return $this->connection;
    }
}