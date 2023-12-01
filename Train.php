<?php

include_once "Vehicle.php";

class Train extends Vehicle{
public function __construct(
    $brand,
    $mileage,
    public $trackGauge, 
    ){
        $this->brand=$brand;
        $this->mileage=$mileage;
    }

static function makeNoise(){
    echo "Chuka chuka chuka Choo Choo <br>";
}
}
?>