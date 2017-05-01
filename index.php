<?php

//3.1 - mul function
function mul(&$a, $b){
    $a *= $b;    
}
echo 'mul function:<br>';
$integer = 8;
$multiplier = 12;
echo "$integer  * $multiplier = ";
mul($integer,$multiplier);
echo $integer;

//3.2 - averageVar function
function averageVal(...$arr){
    $result = 0;
    foreach($arr as $int){
        $result += $int;
    }
    $result /= count($arr);
    return $result;
}
echo '<br><br>averageVar Function:<br>';
echo 'average of 0,1,2,3,4,5,6,7,8,9,10 = ';
echo averageVal(0,1,2,3,4,5,6,7,8,9,10);

//3.3 force Function
function getForce($m){
    global $g;
    return $g*$m;
}
$g=9.8;
$m = 7;
echo '<br><br>getForce Function:<br>';
echo "F=mg<br>F=$m*$g<br>F=".getForce($m).'N';
