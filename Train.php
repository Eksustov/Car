<?php
class Train{
public function __construct(public $brand, public $trackGauge, private $mileage ){
}

public function __destruct(){
    echo "$this->brand is dead at mileage $this->mileage m<br>";
}

public function increaseMileage($amount){
    $this->mileage = $this->mileage + $amount;
}

static function makeNoise(){
    echo "Chuka chuka chuka Choo Choo <br>";
}
}
?>