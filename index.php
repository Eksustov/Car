<?php

include "Car.php";
include "Train.php";
include "Dog.php";
include "Cat.php";
include "Math.php";
/*

$car1 = new Car("Skoda", 256);
$car2 = new Car("Bugartu", 267);

$car2->increaseMileage(240);

echo $car1::$describe."<br>";

$car1 = new Car("Skoda", 1241451);
echo $car1::$describe;
Car::makeNoise();

echo "<br>";

$train1 = new Train("Brokh", 1435, 145215);
$train2 = new Train("Adidas", 1435, 521362);

//$train2->increaseMilage(240000);
Train::makeNoise();*/

$newDog1 = new Dog("Reksis", 6);
$newDog1::payAttention();

$newCat1 = new Cat("Mincis", 2);
$newCat1::payAttention();
$newCat2 = new Cat("Brincis", 3);
$newCat2::payAttention();

Math::addTwo(9,4);
Math::factorial(10);
Math::sum([6,1,9,45,15,24]);
Math::average([8,5,2,9,5,0,7]);
Math::max([6,321,78,3,5,2,31,2,76,12,6,1,321,4,5]);

?>