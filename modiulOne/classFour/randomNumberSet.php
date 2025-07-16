<?php
$products = [
    ["Orang", 0],
    ["Apple", 0],
    ["Banana", 0],
    ["Mango", 0]
];

//echo rand(1, 10); 

//echo mt_rand(1,50); 

$length = count($products);
/*
for ($i = 0; $i<$length; $i++) {
    $products[$i][1] = mt_rand(40,100);
};

print_r($products);  

*/

/*
foreach ($products as $index => $product) {
    $products[$index][1] = mt_rand(50,80);
};


print_r($products);

*/

$newProducts = array_map(function($product){$product[1] = mt_rand(60,70);
    return $product;
},$products);

print_r($newProducts);