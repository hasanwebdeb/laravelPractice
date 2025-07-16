<?php
date_default_timezone_set("Asia/Dhaka");
echo date("d/m/y");
echo PHP_EOL;
echo date("D/M/Y");
echo date("d/M/y h:i:s");
echo PHP_EOL;
echo date("l");

$date = "16-10-2025";

echo date("l", strtotime($date));