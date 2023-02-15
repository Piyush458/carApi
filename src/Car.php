<?php
include("Connection.php");
    class Car{
    private $conn = null;
    public function __construct()
    {
        $this->conn= new Connection();
    }

    public function index()
    {
        $query="select * from cars";

        if ($result = mysqli_query($this->conn->getConnection(), $query)) {
            return $result;
        }    
    }
    public function get($id){
        $query = "select * from cars c,car_details cd where c.id = cd.cid and c.id = $id";
        if($result = mysqli_query($this->conn->getConnection(),$query)){
            return $result;
        }
    }
    public function getSingleCarDetails($id)
    {
        $query = "select * from car_details cd, cars c where cd.cid=c.id and cd.id=$id";
        if ($result = mysqli_query($this->conn->getConnection(), $query)) {
            return $result;
        }

    }


    }

?>