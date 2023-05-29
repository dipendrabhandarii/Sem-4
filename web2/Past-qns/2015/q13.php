<?php
//Create two integer arrays of size 5 each with data item.
//Then display sum of all the number of both arrays


$a = array(1,2,3,4,5);
$b = array(1,2,3,4,5);
$sum = 0;
foreach($a as $i)
{
    $sum +=$i;
}
foreach($b as $i)
{
    $sum +=$i;
}

echo "The sum of all element of two array is $sum";


?>