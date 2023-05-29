<?php
//let numeric Array of size 7 be
$arr=array(1,2,3,4,5,7,6);
print_r($arr);

sort($arr);
print_r($arr);
echo "<br>"."The largest value is ";
print($arr[sizeof($arr)-1]);
echo "<br>"."The second higest value is ";
print($arr[sizeof($arr)-2]);
?>