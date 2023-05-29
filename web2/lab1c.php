<?php
Print"<b>String manipulation using PHP</b><br>";
//trim fuction
$name= "   Hello   ";
$lname="   Hello";
$rname="Hello  ";
$lcname="hello";
$clz="nepal commerce college";
echo trim($name)."<br>";
//ltrim and rtrim
echo ltrim($lname)."<br>";

echo rtrim($rname)."<br>";

//lcfirst,ucfirst and ucwords function 
echo lcfirst($rname).ucfirst($name).ucwords($name)."<br>";
//compare two strings
 echo strcasecmp("hello","Hello")."<br>";//case-insensative
 echo strcmp("hello","Hello")."<br>";//Case-sensative

//position of a string
echo strpos("dipendra","d")."<br>";//returns the postition of first occurance
echo strripos("dipendra","d")."<br>";//returns the position of last occurance

//changing the case
echo strtoupper($name);
echo strtolower($name);
echo"<br>";

//Reverses a string
echo strrev($name)."<br>";

//Returns a part of a string
echo substr("Nepal",2)."<br>".substr("Nepal",-2)."<br>".substr("Nepal",0,3)."<br>";

//Number formate
echo number_format(222.22222,2)."<br>";

//Replace string
echo str_replace("$clz","campus","college");
echo "<br>".$clz;
?>