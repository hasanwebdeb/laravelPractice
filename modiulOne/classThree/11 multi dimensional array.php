<?php

$students = [
    [
        'name' => 'John',
        'age' => 20,
        'grade' => 'A',
    ],
    [
        'name' => 'Jane',
        'age' => 22,
        'grade' => 'B',
    ],
    [
        'name' => 'Doe',
        'age' => 21,
        'grade' => 'C',
    ]
];
// Example of accessing multi-dimensional array elements

$students[2] ["grade"]= "D"; // Outputs: D

print_r($students); // Outputs: Array ( [name] => Jane [age] => 22 [grade] => B )