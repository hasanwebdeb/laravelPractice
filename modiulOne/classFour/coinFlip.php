<?php
 $number = mt_rand(1,2);
// if ("1" == $number){
//     echo "Head";
// }else{
//     echo "Tail";
// };

echo mt_rand(1,2) == 1 ? "Head" : "Tail";