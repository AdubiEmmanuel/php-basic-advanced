<?php
// echo "hello world";
// oop class, properties, methods, constructors, getters, setters, objects
// if statements - conditionals 
// loop - for loop, while loop, foreach loop, dowhile loop
// functions

// classes 
class Car{
    public $brand;
    public $color;
    public $speed;

    function __construct($brand, $color, $speed){
        $this->brand=$brand;
        $this->color=$color;
        $this->speed=$speed;
    }

    function carInfo(){
        return "The car is a ".$this->brand." brand, It is ".$this->color." and can run as fast as ".$this->speed;
    }

    function setCar($brand, $color, $speed){
        $this->brand = $brand;
        $this->color = $color;
        $this->speed = $speed;
    }
}

$car01 = new Car("BMW", "Yellow", "2000hpw");
echo $car01->setCar("Ford", "Orange", "1.2millimph");
echo $car01->carInfo()."  :  ";

// if conditions
$name = "Jude";
if($name == "Jude"){
    echo "Yo, your name is ".$name."  :  ";
}else{
    echo "Yo, your name cannot be determined"."  :  ";
}

// Loops foreach
$names = array("Tosin", "kehinde", "biodun", "John");
foreach($names as $name){
    echo $name.","."  :  ";
}

// for loop
for($x =0; $x < 5; $x++){
    echo "The value ".$x;
}

// functions  
function add_nums($num1, $num2){
    return $num1 + $num2;
}

echo "Result: ".add_nums(53,32);
