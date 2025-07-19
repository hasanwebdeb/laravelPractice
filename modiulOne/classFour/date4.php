<?php
$date = "2025/06/12";

$currentDate = new DateTime();
$oldDate = new DateTime($date);

$diff = $currentDate->diff($oldDate);

echo $diff->format("%a days ago");
