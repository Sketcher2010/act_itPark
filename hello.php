<?php

$hello = "Hello world!";    // String
$one = 1;                   // Integer
$half = 0.5;                // Float/Double
$true = true;               // Boolean

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10); // Array
$numbers = array();

for($i = 0; $i < 10; $i++) {
    $numbers[$i] = rand();
}

$numbers = bubbleSort($numbers);

foreach($numbers as $number) {
    echo $number."\n";
}

function bubbleSort($arr) {
    for($i = 0; $i < count($arr) - 1; $i++) {
        for($j = 0; $j < count($arr) - $i - 1; $j++) {
            if($arr[$j] > $arr[$j + 1]) {
                $number = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $number;
            }
        }
    }
    return $arr;
}
