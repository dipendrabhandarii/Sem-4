<?php
//1.sort- sort the index array according to the value . the key and value part are interchange.
//2. rsort in descending order according to the value.
//3. asort- sorts the array according to the value . the key and value pair are not interchange.arsort
//4. ksort- sort the array according to the key. the key and value pare arenot interchage.krsort

$i_array=["Nepal","Algeria","Almania", "Bhutan","India","america"];
$arr=["2"=>"B","1"=>"A","3"=>"C"];
print_r($i_array);
echo"<br>";
echo 'After sort.'."<br>";
sort($i_array);
print_r($i_array);
echo"<br>";
sort($i_array);
print_r($i_array);
echo "<br>"."asort output\t";
asort($arr);
print_r($arr);
echo"<br>ksort output\t";
ksort($arr);
print_r($arr);
echo "<br>";
krsort($arr);
print_r($arr);
echo "<br>";
arsort($arr);
print_r($arr);

?>
