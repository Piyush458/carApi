<?php
include("Connection.php");
class User
{
    public $conn=null;
    public function __construct()
    {
        $this->conn= new Connection();
    }
    public function create($name,$username,$email,$contact,$password)
    {
        $query = "insert into users(name,username,email,contact,password) values 
        ('$name','$username','$email',$contact,'$password')";
        if($result=mysqli_query($this->conn->getConnection(),$query)) //getter setter use krke function call hua hai
        {
            return $result;
        }
        else{
            echo mysqli_error($this->conn->getConnection());
            
        }
    }

    public function login($username,$password)
    {
        $query = "select * from users where username='$username' and password='$password' ";
        $result = mysqli_query($this->conn->getConnection(), $query);
        if(mysqli_num_rows($result)===1) //getter setter use krke function call hua hai
        {
            $row=mysqli_fetch_assoc($result);
            return array("success"=>true,"userid"=>$row["id"]);
        }
        else{
            return array("success"=>false);
        }
    }
    
}
?>