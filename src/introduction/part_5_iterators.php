<?php

$list = [1, 2, 3, 4, 5];
//For
for ($index = 1; $index < 10; $index++)
    echo $index . " ";

echo "\n";
//Foreach
foreach ($list as $item) {
    echo $item . " ";
}
echo "\n";

//While
$index = 0;
while($index < sizeof($list)) { //While index are less than sizeof $list
    echo $index++ . " ";
}

if (sizeof($list) == 1) {
    echo "Just has one element" . " \n";
}else if (sizeof($list)>1){
    echo "My list has a lot element" . "\n";
} else{
    echo "My list is empty" . "\n";
}