<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$chunkedArray = array_chunk($numbers, 3);

print_r($chunkedArray);