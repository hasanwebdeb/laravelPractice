<?php 
$numbers = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$countries = [
    'USA' => 'United States of America',
    'UK' => 'United Kingdom',
    'CA' => 'Canada',
    'AU' => 'Australia',
    'IN' => 'India'
];

// Loop through numbers


$numberOfItems = count($numbers);

for ($i = 0; $i < $numberOfItems; $i++) {
    echo "Number: $numbers[$i]";
    echo PHP_EOL;
}



// foreach loop through numbers

foreach ($numbers as $number) {
    echo "Number: $number";
    echo PHP_EOL;
}

// Loop through countries using foreach

foreach ($countries as $code => $country) {
    echo "$code = $country";
    echo PHP_EOL;
}