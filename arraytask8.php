<?php

$array_as_value=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); asort($array_as_value);
foreach($array_as_value as $name=>$age)
{
    echo "Age of ".$name." is : ".$age." " . "</br>";
}
$array_as_key=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); ksort($array_as_key);
foreach($array_as_key as $name=>$age)
{
    echo "Age of ".$name." is : ".$age." " . "</br>";
}
$array_des_value=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");arsort($array_des_value);
foreach($array_des_value as $name=>$age)
{
    echo "Age of ".$name." is : ".$age." " . "</br>";
}
$array_des_key=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); krsort($array_des_key);
foreach($array_des_key as $name=>$age)
{
    echo "Age of ".$name." is : ".$age." " . "</br>";
}
