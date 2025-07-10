<?php 
$height =71; // height in inches
$inche = $height % 12;// get the remainder of inches
$feet = ($height - $inche) / 12; // convert inches to feet
echo "Height: $feet feet $inche inches";
// Output: Height: 5 feet 11 inches

