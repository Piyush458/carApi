<?php
include('./src/Car.php');
include('components/header.php');
$car = new Car();
$cars = $car->get($_GET['id']);
$name = null;
$brand = null;
$price = null;
$discount = null;

$image = array();
$color = array();
$numbers = array();
$cdids = array();
$count = 0;
while($cardetail = mysqli_fetch_array($cars)){
    // print_r($cardetail);
    if($count==0){
        $name = $cardetail['name'];
        $brand = $cardetail['brand'];
        $price = $cardetail['price'];
        $discount = $cardetail['discount'];
       
        $count = 1;
    }
    $image[] = $cardetail['c_img'];
    $color[] = $cardetail['color'];
    $numbers[] = $cardetail['number'];
    $cdids[] = $cardetail['id'];
    // print_r($cardetail['id']);

}
// print_r($cdids);

?>

    <section class="main-container">

        <div class="main-container-child">
            <div class="container-section">
            <div class="big-car-img">
                <img id="big-img" src="<?=$image[0]?>" alt="car">
                </div>

                <div class="img-options">

                   
                <?php 
                        foreach ($image as $key=>$ima) {
                           ?> 
                                <div class="img-option">
                                    <img onClick="changeImage(this.src,'<?=$numbers[$key]?>','<?=$color[$key]?>','<?=$cdids[$key]?>')" src="<?=$ima?>" alt="car">
                                </div>

                                <?php
                        }
                    ?>
                       
                    
                   

                </div>

                <div class="color-options">
               
                <?php 
                        foreach ($color as $key=>$col) {
                           ?> 
                    <div style="cursor: pointer;" onclick="changeImage('<?=$image[$key]?>','<?=$number[$key]?>','<?=$color[$key]?>','<?=$cdids[$key]?>')" class="color-option">
                        <p style="background-color: <?=$color?>;"></p>
                    </div>
                            <?php
                        }
                        ?>
                
                   
                </div>

            </div>
            <div class="container-section">
                <h1><?=$name?><?=$brand?></h1>
                <h2>Rs<?=$price?></h2>
                <p>Available</p>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <h2 id="numbers"><?=$numbers[0]?></h2>
                <a id=bookingurl href="http://localhost:8888/php_basics/bookings.php?cdid=<?=$cdids[0]?>">
                <button class="btn btn-primary" >Book Now</button>
                </a>
            </div>
        </div>

    </section>



<?php
include('components/footer.php');
?>