<?php

//Question 8.1
echo "<b>Question 8.1<b><br>";
$a = array("192.168.1.1", "190.175.3.2", "2.2.2.2");

function ip_sort (&$array) {
    natsort ($array);
 var_dump($array);
}
ip_sort($a);
//Question 8.2
echo "<br><br><b>Question 8.2<b><br>";
$numbers = array(1, 2, 3, 6, 12, 15, 18, 20, 21);

function even($array) {
    $even = array();
    foreach ($array as $value) {
        if (($value % 2) == 0) {
            $even[] = $value;
        }
    }
    return $even;
}

$evenNumbers = even($numbers);
var_dump($evenNumbers);

//Question 8.3
echo "<br><br><b>Question 8.3<b><br>";
$dates = array('15/03/1989', '12/02/1996', '19/02/1549');

function date_translate($ukDate) {
    $translatedDates = array();
    foreach ($ukDate as $value) {
        list($day, $month, $year) = explode('/', $value);
        $usDate = $month . '/' . $day . '/' . $year;
        $translatedDates[] = $usDate;
        //preg_replace($pattern, $replacement, $usDate);  
        //echo $usDate;
    }
    return $translatedDates;
}

$translatedDates = date_translate($dates);
var_dump($translatedDates);
?>