<?php
$name=array(
array("Ram","Thapa","Lalitpur"),
array("Ram","Thapa","Lalitpur"),
array("Ram","Thapa","Lalitpur"),
array("Ram","Thapa","Lalitpur"),
array("Will","Smith","NW",));
$file = fopen("dipendra.csv","w");
foreach($name as $nm) 
{fputcsv($file, $nm);}
fclose($file);
?>
