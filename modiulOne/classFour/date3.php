<?php
$tanib = "2019/01/29";
$tuba = "2022/11/10";

$dOne = new DateTime($tanib);
$dTwo = new DateTime($tuba);

$diff = $dOne->diff ($dTwo);

//echo $diff->y ." Years " .$diff->m ." Month " .$diff->d ." Days ";

//echo $diff->format("%y/%m/%d");

//echo $diff->format("%a");
