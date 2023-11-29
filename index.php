<?php

/*include "Bird.php";

$bird1 = new Bird("Ralijs", 2);
echo "$bird1->name <br>";
$bird1->fly();
echo "<br>";

$bird2 = new Bird("Matis", 52);
echo "$bird2->name <br>";*/

include "Car.php";
include "Tire.php";

$car1 = new Car("Skoda", 256);
$car2 = new Car("Bugartu", 267);

$car2->increaseMileage(240);

$tire1 = new Tire(25, "Winter", "Battle-scarred");
echo "<br>Size: $tire1->size <br> Type: $tire1->type <br>";
?>