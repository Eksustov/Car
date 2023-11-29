<?php

class Tire {
    public $size;
    public $type;
    private $quality;

    public function __construct($s, $t, $q){
        $this->size = $s;
        $this->type = $t;
        $this->quality = $q;
    }

    public function __destruct(){
        echo "Boom!<br>";
    }

}

?>