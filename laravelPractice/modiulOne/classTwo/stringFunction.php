<?php
$name = "John Doe";

echo strlen($name); // Outputs the length of the string "John Doe"
echo PHP_EOL; // Outputs a newline character
echo str_word_count($name); // Outputs the number of words in the string "John Doe"
echo PHP_EOL; // Outputs a newline character
echo strrev($name); // Outputs the string in reverse order "eoD nhoJ"
echo PHP_EOL; // Outputs a newline character
echo strtoupper($name); // Outputs the string in uppercase "JOHN DOE"
echo PHP_EOL; // Outputs a newline character    
echo strtolower($name); // Outputs the string in lowercase "john doe"
echo PHP_EOL; // Outputs a newline character
echo ucfirst($name); // Outputs the string with the first character in uppercase "John doe"
echo PHP_EOL; // Outputs a newline character
echo ucwords($name); // Outputs the string with the first character of each word in uppercase "John Doe"
echo PHP_EOL; // Outputs a newline character
echo strpos($name, "Doe"); // Outputs the position of the substring "Doe" in the string "John Doe"
echo PHP_EOL; // Outputs a newline character
echo str_replace("John", "Jane", $name); // Outputs the string with "John" replaced by "Jane" "Jane Doe"
echo PHP_EOL; // Outputs a newline character
echo str_repeat($name, 2); // Outputs the string repeated twice "John DoeJohn Doe"
echo PHP_EOL; // Outputs a newline character

$color = "red, green, blue, yellow, orange, purple, pink, brown, black, white";
$colorArray = explode(", ", $color); // Converts the string into an array
print_r($colorArray); // Outputs the array  
echo PHP_EOL; // Outputs a newline character
$colorString = implode(", ", $colorArray); // Converts the array back into a string 
echo $colorString; // Outputs the string "red, green, blue, yellow, orange, purple, pink, brown, black, white"
echo PHP_EOL; // Outputs a newline character