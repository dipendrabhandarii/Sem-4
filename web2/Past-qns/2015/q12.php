<?php
//Write a program to display first and last character of string 

$str = 'Nepal is my country name.';

$len = strlen($str);

echo "The lenght of string is $len.<br>";

echo "The first character of a string is ";
echo substr($str,2);
echo "<br>The lase character of a string is ";
echo substr($str,-1);

?>

