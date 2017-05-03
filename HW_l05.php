<?php
//Question 5.1
echo "Question 5.1<br>";
$date = date("Y/m/d");
echo <<<heredoc
Today is $date.
heredoc;

//Question 5.2
echo "<br><br>Question 5.2<br>";
function pad_output ($number, $length) {
    printf( "%04d", $number);                       // ?????
}
pad_output (10, 4);

//Question 5.3
echo "<br><br>Question 5.3<br>";
function _string ($s) {
    $new = implode(' ', str_split($s));
    //echo $new;
    printf ( "%s", $new);
}
_string ( "icemalta");

//Question 5.4
echo "<br><br>Question 5.4<br>";
$pages = array ("lessons", "classroom", "teaching");



?>


