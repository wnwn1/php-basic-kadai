<?php
class User{
  //property
  public $name;

  //constructor
  public function __construct($name){
    $this->name = $name;
  }

  //method
  public function sayName(){
    echo "Hello $this->name !";
  }
}

class Car{
  //property
  public $speed;

  //constructor
  public function __construct(){
    $this->speed = 300;
  }

  //method
  public function get_speed(){
    echo "時速 $this->speed km!";
  }
}

class SuperCar extends Car{
  //method
  public function get_speed(){
    $speed = $this->speed * 2;
    echo "時速 $speed km!";
  }
}

class SuperCar2 extends Car{
  //method
  public function get_speed(){
    $speed = $this->speed * 3;
    echo "時速 $speed km!";
  }
}

// $kenta = new User("kenta");
// echo $kenta->name;
// echo PHP_EOL;
// echo $kenta->sayName();
// echo PHP_EOL;

// $tarou = new User("tarou");
// echo $tarou->name;
// echo PHP_EOL;
// echo $tarou->sayName();
// echo PHP_EOL;

$car = new Car();
echo $car->get_speed();
echo PHP_EOL;

$super_car = new SuperCar();
echo $super_car->get_speed();
echo PHP_EOL;

$super_car2 = new SuperCar2();
echo $super_car2->get_speed();
echo PHP_EOL;