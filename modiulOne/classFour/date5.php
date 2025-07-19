 <?php
//  $date = "2016/02/29";

//  $m = date("m", strtotime($date));

//  if($m == 02){
//     echo "leap year";

//  } ;


 function isLeapYear ($year){
    $date = "years/02/29";
    $m = date("m", strtotime($date));
    return $m == 02;
 };

 $year = "2003" ;

 if(isLeapYear($date)) {
    echo "$year is Leap year";
  } else {
    echo "$year not leap year";
  };

  




