<?php
// $date = "2002/02/29";
// $m = date("m", strtotime ($date)); 



// if ($m == "02") {
//   echo "Leap Year";
// } else {
//   echo "Not Leap Year";
// }
  
function isLeapYear($year) {
  $date = "$year/02/29";
  $m = date("m", strtotime($date));
  return $m == "02";
};

$year = "2002";

if (isLeapYear($year)) {
  echo "$year was a leap year";
} else {
  echo "$year was not a leap year";
}




