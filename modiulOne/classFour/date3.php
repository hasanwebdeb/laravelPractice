<?php
$tanib = "2022/1/29"; 
$tuba = "2020 /11/10";

$d1 = new DateTime($tanib);
$d2 = new DateTime($tuba);

$dif = $d1 -> diff($d2);

echo $dif->y." years " .$dif->m ." months " .$dif->d ." days ";
