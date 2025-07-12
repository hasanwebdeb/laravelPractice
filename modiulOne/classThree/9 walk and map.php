<?php 

$numbers = [2, 5, 3, 6, 20, 47, 32, 51, 12, 46, 53];

//walk through the array and square each number

array_walk($numbers, function($number){
    echo "the current number is: $number\n";
});

$square = array_map(function($number) {
    return $number * $number;
}, $numbers);
 
print_r($square);

// Square each number in the original array using foreach

foreach ($numbers as $number) {
    $squared[] = $number * $number;
};

print_r($squared);
