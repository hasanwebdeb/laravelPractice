<?php
$temperatureInCelcius  = 30; // Temperature in Celsius
$temperatureInFahrenheit = ($temperatureInCelcius * 9/5) + 32; // Convert Celsius to Fahrenheit
// $temperatureInKelvin = $temperatureInCelcius + 273.15; // Convert Celsius to Kelvin
echo "Temperature in Fahrenheit: $temperatureInFahrenheit °F\n";

$temperatureInFahrenheit = 86; // Example Fahrenheit value
$temperatureInCelcius = ($temperatureInFahrenheit - 32) * 5/9; // Convert Fahrenheit to Celsius
echo "Temperature in Celsius: $temperatureInCelcius °C\n"; // Output: Temperature in Celsius: 32.22222222222222 °C