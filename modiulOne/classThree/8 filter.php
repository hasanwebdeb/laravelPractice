<?php 
$numbers = [2, 5, 3, 6, 20, 47, 32, 51, 12, 46, 53];

// Using filter to get numbers greater than 20
$filteredNumbers = array_filter($numbers, function($number) {
    return $number > 20 && $number < 50;
});
print_r($filteredNumbers);


// even and odd numbers using array_filter

$evenNumbers = array_filter($numbers, function($number) {
    return $number % 2 == 0;

});

$oddNumbers = array_filter($numbers, function($number) {
    return $number % 2 != 0;
});

print_r($evenNumbers);
print_r($oddNumbers);


// even numbers and odd numbers using foreach


$evenNumbers = [];
$oddNumbers = [];

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $evenNumbers[] = $number;
    } else {
        $oddNumbers[] = $number;
    }
}

print_r($evenNumbers);
print_r($oddNumbers);