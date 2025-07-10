<?php
// Note: The array_pop function removes the last element from the array
$lastFruit = array_pop($fruits); // Remove the last fruit from the indexed array    
echo "Removed fruit: $lastFruit"; // Outputs: Removed fruit: grape


// Note: The array_shift function removes the first element from the array
$firstFruit = array_shift($fruits); // Remove the first fruit from the indexed array    
echo "Removed fruit: $firstFruit"; // Outputs: Removed fruit: kiwi
echo PHP_EOL;

// Note: adding elements to an associative array
$countries["sri_lanka"] = "Colombo"; // Add a new country and its capital to the associative array
print_r($countries); 


//note deleting elements from an indexed array

unset($fruits[2]); // Remove the element at index 2 (cherry) from the indexed array
print_r($fruits); 

//deleting items from indexed array with array_splice
$removeItems = array_splice($fruits, 1, 4); 
print_r($fruits);

echo PHP_EOL; // Outputs: Array ( [0] => apple [1] => date [2] => elderberry [3] => fig )
print_r($removeItems); 

echo  PHP_EOL;

// Merging two arrays
$vegetables = ["carrot", "broccoli", "spinach"]; // Indexed array
$mergedArray = array_merge($fruits, $vegetables); // Merge the indexed array of fruits with the indexed array of vegetables
print_r($mergedArray); 
echo PHP_EOL; // Outputs: Array ( [0] => apple [1] => date [2] => elderberry [3] => fig [4] => carrot [5] => broccoli [6] => spinach )

// deleting elements from an associative array
unset($countries["bhutan"]); // Remove the key-value pair for Bhutan from the associative array 
print_r($countries); // Outputs the modified associative array
echo PHP_EOL; // Outputs: Array ( [bangladesh] => Dhaka [india] => New Delhi [pakistan] => Islamabad [nepal] => Kathmandu [sri_lanka] => Colombo )