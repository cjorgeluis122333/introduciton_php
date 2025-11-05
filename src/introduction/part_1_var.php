<?php

//Print values
echo "Hello world\n";

//Variables
$firstName = "Jorge Luis";
$lastName = "Castillo";

//Concat values to the print you should use .
echo "Hello". " " . $firstName . " " . $lastName . "\n";

//Know the data type of the var (gettype)
echo gettype($firstName)." \n"; //string

//The language is weakly type
$firstName = 3;
echo gettype($firstName)." \n";  //integer
$firstName = "Jorge Luis";

//If you want to update de value of the var you have to reassign the var
$myInt = 10;
$myInt = $myInt + 1; //myInt = 11
echo ($myInt+1)." \n"; //12 but myInt keep by 11
echo $myInt." \n"; //11

//If you use ++ after of before the var is like you reassign the var
echo (++$myInt) ."\n";  //Is like $myInt = $myInt + 1
echo $myInt ."\n";

$myInt = 10;

echo ($myInt++) ."\n";
echo $myInt ."\n";






