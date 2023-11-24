<?php

class Bird {
    public $name;
    private $age;

    public function __construct($cName, $cAge) {
        $this->name = $cName;
        $this->age = $cAge;
    }

    public function __destruct(){
        echo $this->name . " tika pardots.";
    }

    public function fly(){
        echo "hug all ".$this->name;
    }
}
?>