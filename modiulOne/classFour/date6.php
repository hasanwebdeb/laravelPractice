<?php
date_default_timezone_set("asia/dhaka");
$date = new DateTime();
$date->modify("100 days");

echo $date->format("Y/m/d h:i:s a");