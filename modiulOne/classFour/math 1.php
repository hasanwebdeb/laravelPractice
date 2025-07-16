<?php
$pieces = 4;
$guests = 19;
$numberOfPizzas = ceil($guests / $pieces);
echo "Number of pizzas needed: $numberOfPizzas";


$pieces = 4;
$guests = 19;
$numberOfPizza = floor($guests / $pieces);
echo "Number of pizzas needed: $numberOfPizza";
echo PHP_EOL;
$number = round(10.3);

echo $number;