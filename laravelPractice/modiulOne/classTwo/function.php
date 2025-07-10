<?php
declare(strict_types= 1);
/*
function addTwoNumbers($x , $y) {
    $a = $x;
    $b = $y;
    $sum = $a + $b;
    echo $sum;
}

addTwoNumbers(20 , 50); // Outputs 70
// This function adds two numbers and outputs the result
// You can call this function to see the output
echo PHP_EOL;
*/

/*
function multiplyTwoNumbers() {
    $a = 5;
    $b = 10;
    $product = $a * $b;
    echo $product;
}
multiplyTwoNumbers(); // Outputs 50
// This function multiplies two numbers and outputs the result

//defult parameters
*/
/*
function add($a, $b=0, $c=0, $d=0) {
    $sum = $a + $b + $c + $d;
    echo $sum;
} // Outputs the sum of the numbers
add(10);
echo PHP_EOL; // Outputs a newline character
add(4, 5); // default parameters are used if not provided
echo PHP_EOL;
add(1, 2, 3); // Outputs 6
echo PHP_EOL;
add(1, 2, 3, 4); // Outputs 10  
echo PHP_EOL; // Outputs a newline character
*/

//function parameters types


/*
function addNumbers(int $a, int $b) {
    $sum = $a + $b;
} // Outputs the sum of the numbers

addNumbers(10,20);

*/

/*
function addNumbers(int|string|float|bool $a, int|string|float|bool $b) {
     // multiple types of parameters can be passed
        $sum = $a + $b;
}

*/


/*
// nullable parameters
function addName(?string  $name) {
    // nullable parameters can be passed for ? this sign
    echo $name;
    echo PHP_EOL; // Outputs a newline character
    
}

addName(null);

*/


// variadic function parameters
function numbers (...$num) {
    print_r($num);
     // Outputs a newline character
}

numbers(1,2,1,3,4,6); 
numbers("A", "B", "C", "D", "E"); // Outputs an array of the parameters passed
echo PHP_EOL; // Outputs a newline character