<?php

include("./src/Car.php");
include('./Components/header.php');
$car = new Car();
$cars = $car->index();



?>




  
  <!-- cars  -->
  
  <section class="main-container">
  
      <div class="main-container-child">
    <?php
      if($cars){
        while($row=mysqli_fetch_assoc($cars)){
    ?>
          <div class="car">
          <a href="http://localhost:8888/php_basics/car.php?id=<?=$row['id']?>">
              <div class="car-img">
                <img src="<?=$row['image']?>" alt="car">
              </div>
            </a>
  
              <div class="car-details">
                  <h1><?=$row['brand']?> <?=$row['name']?></h1>
                  <div class="colors">
                    <p style="background-color: black;"></p>
                    <p style="background-color: red;"></p>
                  </div>
  
                  <h2><i class="fa-solid fa-indian-rupee-sign"></i> <?=$row['price']?> </h2>
  
                  <h2><?=$row['discount']?>% OFF</h2>
  
                  <h2>Available</h2>
                  
  
              </div>
  
              
  
          </div>
  <?php
        }
      }
      ?>
      </div>
  
  </section>

  <?php
include('./Components/Footer.php');

?>

