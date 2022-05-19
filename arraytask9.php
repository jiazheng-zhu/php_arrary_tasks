<?php
$temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$Average = array_sum($temp) / count($temp);
echo "Average Temperature is : " . $Average . "<br>";

sort($temp);
$low = array_slice($temp, 0, 4);
echo "List of seven lowest temperatures : " . implode(",", $low) . "<br>";

$high = array_slice($temp, -4, 4);
echo "List of seven highest temperatures : " . implode(",", $high);