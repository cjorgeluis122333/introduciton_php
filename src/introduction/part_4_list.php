<?php
//============================= ARRAY
$my_array = ["Jorge",24,'M'];
echo   "Show array\n";
print_r($my_array);

//Get the position [i]
echo $my_array[0] . "\n";

//Append a value to the array
$my_array2 = ["Value 1"]; // length 1
array_push($my_array2, "Value 2");  //length 2
array_push($my_array2, "Value 2");  //length 2

echo   "Show array with  values repeat\n";
print_r($my_array2);

//Show unique values in the array
echo   "Show array with any value repeat\n";
print_r(array_unique($my_array2));
//=============================== MAP
//You have to define key => value but the key can repeat
//If you repeat the key is like you resigned the value
$myMap = array("key1" => "value1", 2 => "value2", "key3" => "value3", "key1"=> "value4"); //    [key1] => value4, 2 => value2 [key3] => value3

print_r($myMap);

//Set value
$myMap[2] = "value1 modifier";
echo $myMap["key1"] . "\n";


