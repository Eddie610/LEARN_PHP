<?php
echo "using if else statement";
echo "<br>";
$a=12;
$b=15;
if($a==$b){
echo "YES $a is equal to $b";
}
else{
    echo "NO $a is not equal to $b"; 
}
echo "<br>";
echo "<hr>";
echo "using == and != on if statement";
echo "<br>";
$g=12;
$h=15;
if($g==$h){
echo "YES $a is equal to $b";
}

if($g!=$h){
    echo "No $g is  not equal to $h";
    }
echo "<br>";
echo "<hr>";
echo "Checkinh if they are Identical";
echo "<br>";
$c=12;
$d="12";
if($c===$d){
echo "YES $c is equal to $d";
}
else{
    echo "NO $c is not equal to $d because there are not of the same data type"; 
}
echo "<br>";
echo "<hr>";
echo "Using greater sign";
echo "<br>";
$e=12;
$f=12;
if($e>$f){
echo "YES $e is greater than $f";
}
else{
    echo "NO $e is not greater than $f "; 
}
echo "<br>";
echo "<hr>";
echo "Using less than sign";
echo "<br>";
$e=12;
$f=12;
if($e<$f){
echo "YES $e is less than $f";
}
else{
    echo "NO $e is not less than $f "; 
}