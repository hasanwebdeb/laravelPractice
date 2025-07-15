<?php 
echo abs(-10.2);
echo PHP_EOL;
echo pow(2,4);
echo PHP_EOL;
echo sqrt(20);

echo PHP_EOL;

$max = max(14, 20, 58, 87, 98, 12, 65, 24,);

echo $max;

$numbers = [
    20, 14, 89, 54, 65, 99, 57
];
$max = 0;
foreach($numbers as $number){
    if($number > $max){
        $max = $number;
    }
};

echo $max;