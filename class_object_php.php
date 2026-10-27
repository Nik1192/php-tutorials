<?php

// what  class and object in php
// class is blueprint or template for creating objects
// Object is an instance of a class 

class Car {
    public $color;

    public function start() {
        echo "car is starting!";
    }
}

$car = new Car();

$car->color = "white";

echo $car->color . "<br>";

$car->start();
?>