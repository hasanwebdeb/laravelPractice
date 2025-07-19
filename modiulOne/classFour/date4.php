<?php
$date = "15/07/2025";

$currentDate = new DateTime();
$oldDate = new DateTime($date);

$diff = $currentDate->diff($oldDate);

echo $diff->format("%a");
