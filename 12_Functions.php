<?php

function name(){
    echo "Edward";
}
name();

echo "<br>";
echo "<hr>";
print("<b>Argumented Functions</b> </br>");
function Add($x,$y){
    $z=$x+$y;
    return $z;
}
print("<b>passing arguments by value</b> </br>");
echo $Ans=Add(5,10);
echo "<br>";
echo "<br>";
print("<b>passing arguments by variable</b> </br>");
$a=15;
$b=15;
echo $Calculation=Add($a,$b);
echo "<br>";
echo "<hr>";

function percent_cal($num,$max){
    
}



/*function sum($x, $y) {
    $z = $x + $y;
    return $z;
  }
  @calling function using the dot operator@
  echo "5 + 10 = " . sum(5, 10) . "<br>";
  echo "7 + 13 = " . sum(7, 13) . "<br>";
  echo "2 + 4 = " . sum(2, 4);*/