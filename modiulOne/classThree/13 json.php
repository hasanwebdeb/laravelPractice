<?php

$countries = [
    "Bangladesh" => "Dhaka",
    "India" => "New Delhi",
    "Pakistan" => "Islamabad",
    "Nepal" => "Kathmandu",
];

$jsonData = json_encode($countries, );

print_r($jsonData);

$json = '{"Bangladesh":"Dhaka","India":"New Delhi","Pakistan":"Islamabad","Nepal":"Kathmandu"}';

$newCountries = json_decode($json, true);

print_r($newCountries);
print_r($countries);