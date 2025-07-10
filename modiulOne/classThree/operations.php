<?php
//indexed array
declare(strict_types=1); // Enforce strict type checking
$fruits = ["apple", "banana", "cherry", "date"]; // Indexed array of fruits

//associative array
$countries = [
    "bangladesh" => "Dhaka",
    "india" => "New Delhi",
    "pakistan" => "Islamabad",
    "nepal" => "Kathmandu",
    "bhutan" => "Thimphu",
    
]; // Associative array with country names as keys and capitals as values.

// count elements in an indexed array

$items = count($fruits); // Count the number of elements in the indexed array
echo "Number of fruits: " . $items;
 PHP_EOL; // Outputs: Number of fruits: 4

 $fruits[] = "elderberry"; // Add a new fruit to the indexed array
print_r($fruits); // Outputs the updated indexed array
echo PHP_EOL; // Outputs: Array ( [0] => apple [1] => banana [2] => cherry [3] => date [4] => elderberry )  
 

array_push($fruits, "fig", "grape"); // Note: The array_push function adds elements to the end of the array
print_r($fruits); 
echo PHP_EOL; // Outputs: Array ( [0] => apple [1] => banana [2] => cherry [3] => date [4] => elderberry [5] => fig [6] => grape )


// Note: The array_unshift function adds elements to the beginning of the array
array_unshift($fruits, "kiwi", "lemon"); // Add two new fruits to the beginning of the indexed array
print_r($fruits);   // Outputs: Array ( [0] => kiwi [1] => lemon [2] => apple [3] => banana [4] => cherry [5] => date [6] => elderberry [7] => fig [8] => grape )
echo PHP_EOL;