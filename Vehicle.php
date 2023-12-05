<?php

abstract class Vehicle {
    public $brand;
    protected $mileage;
    static $describe = "car car";

    public function __construct($b, $m){
        $this->brand = $b;
        $this->mileage =$m;
    }

    public function increaseMileage($amount){
        $this->mileage = $this->mileage + $amount;
    }

    public function __destruct(){
        echo "$this->brand is dead at mileage $this->mileage km<br>";
    }

    abstract static function makeNoise();
}
?>