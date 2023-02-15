<?php   //declare(strict_types=1)
// echo "<h1><u>06th Feb, 2023</u></h1><br>";
// $num1= 16;
// echo "Hello everyone, $num1 <br>" .$num1 ; 

// $num2 = 20;
// // var_dump($num2);

// if($num1>19){
//     echo "Sahi hai bhai <br>";
// } else {
//     echo "$num2<br>";
// }

// loop ko ghumate ni hai, wo uska feature hai ghumna. usko rookte hai hm 

// $i=1;
// while($i<10)
// {
//     echo "Hello<br>";
//     $i += 1;
// } 

// do {
//     echo "<br>".$i ; 
//     $i++;
// }
// while($i<10)

// for ($i = 1;$i<=10;$i++){
//     echo "<br>".$i;
// }

// $nums = array(23, 45, 67, 78, 80);
// $temp = 0;
// for ($i = 0; $i < count($nums); $i++) {
//     for($j=$i+1;$j<count($nums);$j++){
//         if ($nums[$i]<$nums[$j]){
//             $temp = $nums[$j];
//             $nums[$j] = $nums[$i];
//             $nums[$i] = $temp;

//         }
        
//     }
//     echo " ".$nums[$i];
// }
// $avengers = array("thor" => 1500, "ironman" => 45, "hulk" => 43);
// // print_r($avengers);
// echo "<br>";
// foreach($avengers as $key=>$value)
// {
//     echo " ".$value;
// }

// $avengers['hawkeye'] = 2000;
// echo "<br>";
// rsort($nums);    //ksort, krsort, sort
// print_r($nums);

// function doSomething($name){
//     echo "hello bhai! <br>";
//     echo $name."<br>";
//     // return 23; //return print hoga bas echo likhne ke baad!
// }

// echo doSomething("Piyush");
// $nums = 16;
// echo $nums ** 1 / 2.;
// echo "<br>";

// echo "<h1><u>Object Oriented Programing</u></h1>";

// class Demo{
//     public $game = "Valo";
//     public $age;  //declaring variables inside a class.  
//     public function __construct($age){
//         echo "default hai ..ye print hoga hi saath mei. <br>";
//         $this->age = $age;
//     }

//     // public function getAge():string | int{
//     //     return $this->age;
//     // }
//     public function doSomething($name){
//         echo "I am a function inside a class. My name is ".$name."!<br>";
//         echo "The game is " . $this->game.". This is my ".$this->age; //variable access krne ke liye 'this' ka use krte hai 
//     }
// }
// $d = new Demo(25); //demo is a constructor. new is a memory allocator.
// $d->doSomething("Captain America");

// echo "<h1>Inheritance</h1><br>";

// class child extends Demo{

// }

// $c = new child(23);
// $c->doSomething("Beyonder");

echo "<h2>07th feb, 2023</h2><br>";
// final laga do class ke pehele. uske baad class inherite nahi ho sakta 

trait details{
    function getuserdetails(){
        echo "get users details<br>";
    }
    function getadmindetails(){
        echo "get admin details<br>";
    }
}

class Child1{
    use details;
}
$d = new Child1();
$d->getuserdetails();

$d->getadmindetails();

//static variable is a global variable for all the objects in the class.
echo "<hr>";
class demo {
    public static string $name = "car rental";
    public string $normal = "thor";
    public function changedetail(){
        self::$name = "car rental3";
        $this->normal="odin";

    }
    public function printDetail(){
        echo "some value<br>";
        echo "hello <br>";
        echo self::$name."<br>";
        echo $this->normal."<br>";
    }
}

$d2= new demo();
$d2->changedetail();
$d2->printDetail();

$d1 = new demo();
$d1->printDetail();

// demo::$name = "car rental2<br>";
// echo demo::$name;

?>