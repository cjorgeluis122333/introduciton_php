<?php

$number1 = 10;
$number2 = 3;

//Like is weakly type do not have the problem of divided an integer with a double
$result = $number1 + $number2;
echo $result . "\n";  //13

$result = $number1 / $number2;
echo $result . "\n"; //3.333333

$result = $number2 / $number1;
echo $result . "\n"; //0.3

//Boolean operators
$myBoolTrue = true; //1
$myBoolFalse = false; //0

echo "If is true -> $myBoolTrue \nIf is false ->  $myBoolFalse \n"; //1 and nosing if false but is like 0

//Ternary operator like java
$condition = $number1 > $number2 ? "Is True" : "Is False";
echo $condition . "\n";

//If you want concat numeric var with the string you do not have to use .
echo "Number 1 -> $number1\n  Number 2 -> $number2\n";

