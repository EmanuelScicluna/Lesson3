<?php

//Question 7.1      
echo "<b>Question 7.1</b><br>";
$language = array(
    'hello' => Ciao,
    'Goodmorning' => BuonGiorno,
    'Goodevening' => BounaSerata
);

function translate($input) {
    //???
}

;

//translate (hello);

//Question 7.2      ???
echo "<br><br><b>Question 7.2</b><br>";

//Question 7.3
echo "<br><br><b>Question 7.3</b><br>";
$number = array (1,2,3,4,5,6,7,8,9);
function multiplier ($number, $i ) {
    foreach ($number as $value) {
       echo $i * $value .'<br>';
        
    }
 //var_dump($number);
}
multiplier ($number, 2);

?>