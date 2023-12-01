<?php

abstract class Vehicle {
    public $brand;
    protected $mileage;

    public function increaseMileage($amount){
        $this->mileage = $this->mileage + $amount;
    }

    public function __destruct(){
        echo "$this->brand is dead at mileage $this->mileage km<br>";
    }

    abstract static function makeNoise();
}
?>