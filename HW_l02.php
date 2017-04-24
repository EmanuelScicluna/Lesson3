<?php
// Question 2.1 
echo '<strong> Question 2.1<br>';
$table = 8;             //<= ENTER TABLE

    for ($i = 1; $i <= 10; $i++) {
        echo "$i x $table = " . $table * $i. '<br>';
    }
  echo '  <br>';  
//Question 2.4 
echo '<strong> Question 2.4<br>';
$x = 1;    
    do {  
        echo "$x x $table = " . $table * $x. '<br>';
        $x++;
    }       while ($x <= 10);
    
  echo '  <br>';
  
//Question 2.5 
echo '<strong> Question 2.5<br>';
$dayOfMonth = 2;               //<= ENTER MONTH DATE
switch ($dayOfMonth) {
    case '1' :
    case '21' :
    case '31' :
        echo "$dayOfMonth<sup>st</sup>";
        break;
    case '2':
    case '22':
        echo "$dayOfMonth<sup>nd</sup>";
        break;
    default :
        echo "$dayOfMonth<sup>th</sup>";
        break;
}

  echo '  <br>'; 
  echo '  <br>';
  
//Question 2.6 
echo '<strong> Question 2.6<br>';
$a = 2;                         //<= ENTER VARIABLES $a & $b
$b = 2;
$c = ( $a > $b) ? '1' : ($a < $b) ? '-1' : '0';
echo $c;

  echo '  <br>';
  echo '  <br>';
  
//Question 2.7 
echo '<strong> Question 2.7<br>';
$multiplier = 1;
for ($i=1; $i<=10; $i++) {
    echo $multiplier << $i;
    echo "<br>";
}
?>
