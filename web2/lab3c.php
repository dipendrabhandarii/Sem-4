<?php
//wap to show array shorting technique with example
$i_array=["Nepal","Algeria","Almania", "Bhutan","India","america"];
$arr=["2"=>"B","1"=>"C","3"=>"A"];
print_r($i_array);
echo"<br>";
echo 'After sort.'."<br>";
sort($i_array);
print_r($i_array);
echo"<br>"."After rsort"."<br>";
rsort($i_array);
print_r($i_array);
echo "<br>"."asort output"."<br>";
asort($arr);
print_r($arr);
echo"<br>ksort output"."<br>";
ksort($arr);
print_r($arr);

?>