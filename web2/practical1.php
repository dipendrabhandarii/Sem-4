<?php
$d=[[190,500,88],[700,67,809],[1234,567,4]];

$a=array_merge(...$d);

sort($a);

echo "The highest value of the given array is ";
echo  $a[count($a)-1];
echo "<br>";

echo "The second highest value of the given array is ";
echo $a[count($a)-2];
?>

