<?php

$countries = [
    "Afghanistan" => "Kabul",
    "Albania" => "Tirana",
    "Algeria" => "Algiers",
    "Andorra" => "Andorra la Vella",
    "Bangladesh" => "Dhaka",
    "Belgium" => "Brussels",
    "Canada" => "Ottawa",
    "Denmark" => "Copenhagen",
    "Egypt" => "Cairo",
    "Finland" => "Helsinki",
];

$newCountries = array_filter($countries, function($country, $capital) {
    if( $capital[0] == "A" || $capital[0] == "B" || $capital[0] == "C") {
        return true;
    }
}, ARRAY_FILTER_USE_BOTH);

print_r($newCountries);