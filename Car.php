<?php

class Car {
    public $brand;
    private $mileage;
    public static $value = 3.14159;
    
    public static function makeNoise() {
        echo "Beep, Beep!";
    }

    public function __construct($b, $m){
        $this->brand = $b;
        $this->mileage =$m;
    }

    public function __destruct(){
        echo "$this->brand is dead at mileage $this->mileage km<br>";
    }

    public function increaseMileage($amount){
        $this->mileage = $this->mileage + $amount;
    }
}
?>