<?php

include_once "Vehicle.php";

class Train extends Vehicle{
public function __construct(
    $brand,
    $mileage,
    public $trackGauge, 
    ){
        parent::__construct($brand, $mileage);
        $this->trackGauge=$trackGauge;
    }

static function makeNoise(){
    echo "Chuka chuka chuka Choo Choo <br>";
}
}
?>