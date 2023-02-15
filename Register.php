<?php

include('./src/User.php');


$message = null;
if($_SERVER['REQUEST_METHOD'] ==="POST"){



$name = $_POST['name'];
$username = $_POST['username'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$password=sha1($_POST['password']) ;

$user = new User();

$response=$user->create($name,$username,$email,$contact,$password);
if($response)
{
  $message = "User Registered!";
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
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placehoder="Name please..."></div>
            <div class="mb-3">
            </div><label for="username" required class="form-label">Username</label>
          <input type="text" class="form-control" name="username" placehoder="Username please..."></div>
          <div class="mb-3">
          </div><label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" placehoder="Email please..">
          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contact</label>
            <input type="integer" class="form-control" name="contact" placeholder="contact please...">
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" required class="form-control" name="password" placeholder="password please...">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
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