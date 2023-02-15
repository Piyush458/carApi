<?php
include('Components/header.php');
include('src/Car.php');

if(!isset($_SESSION['car-user']))
{
    header('location:login.php');
}


$car = new Car();
$response = $car->getSingleCarDetails($_GET['cdid']);
// print_r($response);
// echo $_GET['cdid'];
$carDetails = mysqli_fetch_assoc($response);

// print_r($carDetails);

?>
<head>
    
</head>


<section class="main-container">

<div class="main-container-child">
    <div class="booking-section">
        <div class="booking-section-img">
            <img src="<?=$carDetails['c_img']?>" alt="car">
        </div>
        <div class="booking-details">
            <h1><?=$carDetails['brand']?> <?=$carDetails['name']?></h1>

            <h2>Rs <?=$carDetails['price']?></h2>

            <h4><?=$carDetails['number']?></h4>

            <p><?=$carDetails['is_available']?"Available":"Unavailable" ?></p>
        </div>
    </div>
    <div class="booking-section">

        <h1>Fill Booking Details</h1>

        <div>
        <p>Start Date</p>
        <input type="date" name="start_date"/>
        </div>

        <div>
        <p>End Date</p>
        <input type="date" name="end_date"/>
        </div>

        <h2>

        To Be Paid : 5000 (10% discount)

        </h2>

        <button class="btn btn-primary">Confirm Booking</button>

    </div>
</div>

</section>





<?php
include('./Components/footer.php');


?>