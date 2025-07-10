<?php
declare(strict_types=1); // Enforce strict type checking
$countries = [
    "bangladesh" => "Dhaka",
    "india" => "New Delhi",
    "pakistan" => "Islamabad",
    "nepal" => "thmandu",
    "bhutan" => "Thimphu",
    "sri_lanka" => "Colombo",
]; // Associative array with country names as keys and capitals as values.
print_r($countries); // Outputs the associative array
echo PHP_EOL;
// Accessing elements in an associative array
echo $countries["bangladesh"]; // Outputs: Dhaka
echo PHP_EOL;
echo $countries["india"]; // Outputs: New Delhi
echo PHP_EOL;
// Modifying an element in an associative array
$countries["nepal"] = "Kathmandu"; // Change the capital of Nepal
print_r($countries); // Outputs the modified associative array
echo PHP_EOL;
//counting elements in an associative array
