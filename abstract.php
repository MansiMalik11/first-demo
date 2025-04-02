<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

//---------------sinhle  inheritance without construct
// class Fruit{
//     public $apple;

//     public function show($c,$s){
//         $result = $this->c + $this->s;
//         return $result; 
//         return "get Apple ";
//     }
// }

// class Apple extends Fruit{
//     public $data;
// }

// $obj = new Apple();
// $obj->apple = "apple fruit"; //access base class property
// echo $obj->apple;
// $obj->c = 5; //access function parameters
// $obj->s = 10;
// echo $obj->show($obj->c,$obj->s);
// $obj->data = "class Apple"; //excess derived class
// echo $obj->data;

//------------multilevel inheritance with constructor magic function

// class Fruit{
//     public $apple;
// }

// class Apple extends Fruit{
//     public $data;
//     public function __construct($data,$apple){
//         $this->data = $data;
//         $this->apple = $apple;
//     }
// }

// class Grapes extends Apple{
//     public function displaydata(){
//         return "Please check ". $this->data;
//     }
// }
// $obj2 = new Grapes("here is my data", "grapes are to sweet");
// $result = $obj2->displaydata();
// echo $obj2->apple ."</br>". $result;

//------------hierarchical inheritance [multiple child classs inherit single parent class]

// class Fruit{
//     public $myfruit;
//     public function __construct($myfruit){
//         $this->myfruit = $myfruit;
//     }
//     public function showtaste()
//     {
//         return "Myfruit is sweet";
//     }
// }

// class Apple extends Fruit{
//     public function applecolor(){
//         return "red";
//     }
// }

// class Grapes extends Fruit{
//     public function grapecolor(){
//         return "green";
//     }
// }

// $obj_apple = new Apple("apples are also tasty");
// $parent2 = $obj_apple->showtaste();
// $child2 = $obj_apple->applecolor();

// echo $obj_apple->myfruit;
// echo $parent2 ." ". $child2;

// $obj_grapes = new Grapes("grapes are to sweet");
// $parent1 = $obj_grapes->showtaste();
// $child1 = $obj_grapes->grapecolor();

// echo $parent1 ." ". $child1;
// echo $obj_grapes->myfruit;


//-----------multilevel inheritance [class inheriting properties and methods from more than one parent class. PHP does not support multiple inheritance with classes directly but allows it through interfaces.]
// used by traits and interfaces

// trait Driveable {
//     public function drive() {
//        echo "Driving the car";
//     }
//  }
//  trait Flyable {
//     public function fly() {
//        echo "Flying the plane";
//     }
//  }
//  class Vehicle {
//     use Driveable, Flyable;
//  }
//  $vehicle = new Vehicle();
//  $vehicle->drive();
//  $vehicle->fly();

//multiple inheritance by interfaces

// interface Driveable{
//     public function drive();
// }

// interface Flyable{
//     public function fly();
// }

// class Child implements Driveable, Flyable {
//     public function drive(){
//         echo "entered";
//     }
//     public function fly(){
//         echo "hello data";
//     }
// }

// $obj = new Child();
// echo $obj->drive();
// echo $obj->fly();

//hybrid inheritance [combination of multiple types of inhertannce that contains both classes and interfaces]

// interface Driveable{
//     public function drive();
// }

// class Myparent{
//     public function parentclass(){
//         echo "my parent class";
//     }
// }

// class Mychild extends Myparent implements Driveable{
//     public function drive(){
//         echo "i love driving";
//     }

// }

// $obj = new Mychild();
// echo $obj->drive();
// echo $obj->parentclass();

//dummy questions fibonaaci 0 1 1 2 3 5 8 ... num = (num-1) + (num-2)
function number($n){
    $a = 0;
    $b = 1;
    for($i = 0; $i<=$n; $i++){
        echo $a . " ";
        $c = $b + $a;
        $a = $b;
        $b = $c;
    }
}
number(10);