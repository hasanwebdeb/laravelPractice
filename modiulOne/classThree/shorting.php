<?php 
$numbers = [5, 3, 8, 1, 2]; // Unsorted array of numbers

sort($numbers); // Sorts the array in ascending order
print_r($numbers); // Outputs the sorted array 

// reversing the sorted array
rsort($numbers); // Sorts the array in descending order
print_r($numbers); // Outputs the reversed sorted array

$cities = [
    "Dhaka" => "Bangladesh",
    "New Delhi" => "India",
    "Islamabad" => "Pakistan",
    "Kathmandu" => "Nepal",
    "Thimphu" => "Bhutan",
    "Colombo" => "Sri Lanka",
]; // Associative array with capitals as keys and country names as values.

// shorting associative arrays by keys  
ksort($cities); // Sorts the array by keys in ascending order


print_r($cities); 
echo PHP_EOL;

//reversing the sorted associative array by keys
krsort($cities); // Sorts the array by keys in descending order

print_r($cities);
echo PHP_EOL;


// shorting associative arrays by values
asort($cities); // Sorts the array by values in ascending order
print_r($cities); 
echo PHP_EOL;

// reversing the sorted associative array by values
arsort($cities); // Sorts the array by values in descending order

print_r($cities); // Outputs the reversed sorted associative array by values
echo PHP_EOL;
