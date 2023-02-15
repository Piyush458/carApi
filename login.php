<?php

include('./src/User.php');
include('./Components/header.php');


$message = null;
if($_SERVER['REQUEST_METHOD'] ==="POST"){




$username = $_POST['username'];

$password=sha1($_POST['password']) ;

$user = new User();

$response=$user->login($username,$password);
if($response['success']===true)
{
    $message = "success";
        $_SESSION['car-user'] = $username;
    $_SESSION['car-user-id'] = $response['userid'];
        header('location:index.php');
}
else{
        $message = "Wrong username";
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>First Php</title>
</head>
<body style="background-color: lightgrey;">
    <h1>Users Form</h1>
    <form class="col-md-4 border" method="post" action="">
        <div class="mb-3">
            </div><label for="username" required class="form-label">Username</label>
          <input type="text" class="form-control" name="username" placehoder="Username please..."></div>
          <div class="mb-3">
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" required class="form-control" name="password" placeholder="password please...">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

        <?php
          if ($message!==null)
          {
            ?>
            <div class="alert alert-success">
              <?php
                echo $message;
              ?>  
            </div> 
            <?php   
          }
            ?>
        
      </form>
</body>
</html>