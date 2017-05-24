<?php


//Question 6.1
echo "<b>Question 6.1</b><br>";
function userId ($url) {
$bits = parse_url($url);
//var_dump($bits);
$id = $bits[path];
echo $id;
}
userId ('http://student/754816/');

//Question 6.2
echo "<br><br><b>Question 6.2</b><br>";
function concat_parts (...$args) {
    foreach ($args as $arg) {
        echo $arg . ':';
    }
}
concat_parts ('a', 'b', 'c', 'd');

//Question 6.3
echo "<br><br><b>Question 6.3</b><br>";
function date_translate ($ukDate) {
    list($day, $month, $year) = explode('/', $ukDate);
    $usDate = $month . '/' . $day . '/' . $year;
    echo $usDate;
    //preg_replace($pattern, $replacement, $usDate);   ?????
    //echo $usDate;
}
date_translate ('15/03/1989');

//Question 6.4
echo "<br><br><b>Question 6.4</b><br>";
function newString ($string1) {
$string1 = str_replace(" ","",$string1);
if (preg_match('/^070(\d{8})$/', $string1) or preg_match('/^090(\d{8})$/', $string1) ) 
    {echo 'true';
    } else {
    echo 'false';
        }
}
newString ('this is my phone number 09012345678');
?>

