<?php
//multidimentional array is array within the array
//$array=[[]];
$marray=[["ncc","sdc"],["baneshwor","putalisadak"]];
print_r ($marray);

//looping through multidimentional array i.e foreach
foreach($marray as $value)
{
    foreach($value as $val)
    echo "<br>".$val;
}
?>
