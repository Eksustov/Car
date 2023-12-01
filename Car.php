<?php

include_once "Vehicle.php";

class Car extends Vehicle{
    static $describe;
    public static $value = 3.14159;
    
    static function makeNoise() {
        echo "Beep, Beep!";
    }

        public function __construct($b, $m){
        $this->brand = $b;
        $this->mileage =$m;
    }

}
?>