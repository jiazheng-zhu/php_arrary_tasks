<?php
$numbers = array('1' , '2' , '3' , '4' , '5');
array_splice($numbers, 3, 0, "$");
var_dump($numbers);