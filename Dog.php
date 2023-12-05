<?php
include_once "Animal.php";

class Dog extends Animal{

    static function payAttention(){
        echo "Woof! <br>";
    }
    public function __destruct(){
        echo "$this->name is my name and I'm $this->age years old<br>";
    }
}