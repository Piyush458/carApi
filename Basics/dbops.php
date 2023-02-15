<?php

$conn = mysqli_connect("localhost", "root", "root", "car-rental");
if(!$conn)
{
    echo "some problem while making connection";
}
else{
    echo "dbops works!";
}

// $query = "select * from users";
// $response=mysqli_query($conn, $query);
// // $data = mysqli_fetch_assoc($response);
// // echo mysqli_query($conn, $query);
// // print_r($data);
// while($data = mysqli_fetch_row($response))
// {
//     print_r($data[3]);
// }
// if(!$response)
// {
//     echo "Some Problem!<br>";
//     echo mysqli_error($conn);
//     // echo mysqli_errno();
// }
// else{
//     echo "dbops works!";
// }
// if(!mysqli_query($conn, $query))
// {
//     echo "Some Problem!<br>";
//     echo mysqli_error($conn);
//     // echo mysqli_errno();
// }
// else{
//     echo "<br>dbops working!";
// }
// echo"<br><hr>";
// $a = "Piyush";
// function doSomething(){
//     print_r($GLOBALS);
// }
// doSomething();
// echo"<br><br>";
// print_r($_GET['a']);
// echo"<br><hr>";
$name = $_POST['name'];
$username = $_POST['username'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$password=sha1($_POST['password']) ;

$query = "insert into users(name,username,email,contact,password) values 
('$name','$username','$email',$contact,'$password')";
$response=mysqli_query($conn, $query);
print_r($response);


?>