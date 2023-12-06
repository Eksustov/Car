<?php
 class Math{
    static function addTwo($one, $two){
        echo $one." + ".$two." = ".$two+$one."<br>";
    }
    static function factorial($num){
        $sum = 1;
        for($i = 1; $i <= $num; $i++){
            $sum = $i * $sum;
            echo "$sum : ";
        }
        echo "<br>";
    }
    static function sum($array){
        $sum = 0;
        foreach($array as $number){
            $sum = $sum + $number;
        }
        echo "Sum: $sum <br>";
    }
    static function average($array){
        $sum = 0;
        $times = 0;
        foreach($array as $number){
            $times++;
            $sum = $sum + $number;
        }
        echo "Average: ".$sum/$times."<br>";
    }
    static function max($array){
        $biggest = 0;
        foreach($array as $number){
            if($number > $biggest){
                $biggest = $number;
            }
        }
        echo "Max: $biggest <br>";
    }
}