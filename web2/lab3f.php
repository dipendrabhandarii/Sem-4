<?php
$arr=[0=>2,1=>1,2=>4,3=>3];
print_r($arr);
echo "<br>"."After sorting without using sorting techique "."<br>";
for ($i = 0; $i<count($arr); $i++){
    $index = $i;
    for ( $j = $i ; $j <= count($arr)-1; $j++)
    {
    if ($arr[$j] < $arr[$index])
    {
    $index = $j;
    }
    }
     $temp = $arr[$i];
    $arr[$i] = $arr[$index];
    $arr[$index] = $temp;
    }
print_r($arr);

?>
