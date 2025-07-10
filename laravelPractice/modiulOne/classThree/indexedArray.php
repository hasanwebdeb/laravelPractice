<?php
$numbers = array(1, 2, 3, 4, 5); // Indexed array 

$moreNumbers = [6, 7, 8, 9, 10]; // Indexed array with short syntax

$fruits = ["apple", "banana", "cherry", "mango"]; // Another indexed array,


print_r($numbers); //Array output function is print_r

echo PHP_EOL; 

print_r($moreNumbers); //Array output function is print_r

// Accessing elements in an indexed array
echo $numbers[0]; // Outputs: 1

echo PHP_EOL;

echo $moreNumbers[3]; // Outputs: 9

echo PHP_EOL;
// Modifying an element in an indexed array
$numbers[2] = 30; // Change the value at index 2
print_r($numbers); 

