<?php
$numbers = [20, 10, 30, 50, 40]; 

// Finding the maximum value in the array
$maxValue = max($numbers); // Returns the maximum value 
echo "Maximum value: " . $maxValue . PHP_EOL; // Outputs: Maximum value: 50

// Finding the minimum value in the array
$minValue = min($numbers); // Returns the minimum value
echo "Minimum value: " . $minValue . PHP_EOL; // Outputs: Minimum value: 10

// finding specific value in the array
$found = in_array(30, $numbers); // Checks if 30 is in the array
if ($found) {
    echo "30 is found in the array." . PHP_EOL; // Outputs: 30 is found in the array.
} else {
    echo "30 is not found in the array." . PHP_EOL;
}

// Finding the position of a specific value in the array
$position = array_search(40, $numbers); // Returns the index of 40
if ($position !== false) {
    echo "40 is found at index: " . $position . PHP_EOL; // Outputs: 40 is found at index: 4
} else {
    echo "40 is not found in the array." . PHP_EOL;
}

// second way to find the position of a specific value

if ($position = array_search(20, $numbers) !== false) {
    echo "20 is found at $position.";
} 

else {
    echo "20 is not found in the array.";
}

echo PHP_EOL;

// search in associative array
$countries = [
    "Bangladesh" => "Dhaka",
    "India" => "New Delhi",
    "Pakistan" => "Islamabad",
    "Nepal" => "Kathmandu",
    "Bhutan" => "Thimphu"
];

// searching for value in associative array

if (array_search("Dhaka", $countries)) {
    echo "Dhaka is found in the countries array." . PHP_EOL; // Outputs: Dhaka is found in the countries array.
} else {
    echo "Dhaka is not found in the countries array." . PHP_EOL;
}

// searching for key in associative array
if (array_key_exists("Nepal", $countries) !== false) {
    echo "Nepal is a key in the countries array. \n"; // Outputs: Nepal is a key in the countries array.
}

