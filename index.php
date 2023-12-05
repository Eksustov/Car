<?php

include "Bird.php";
include "Car.php";
include "Tire.php";
include "Train.php";
include "Dog.php";
include "Cat.php";
/*

$bird1 = new Bird("Ralijs", 2);
echo "$bird1->name <br>";
$bird1->fly();
echo "<br>";

$bird2 = new Bird("Matis", 52);
echo "$bird2->name <br>";

$car1 = new Car("Skoda", 256);
$car2 = new Car("Bugartu", 267);

$car2->increaseMileage(240);

echo $car1::$describe."<br>";

/*$tire1 = new Tire(25, "Winter", "Battle-scarred");
echo "<br>Size: $tire1->size <br> Type: $tire1->type <br>";

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

?>