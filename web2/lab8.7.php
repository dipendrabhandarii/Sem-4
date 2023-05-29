<?php
echo "show various characters value in date
/*d: Day of the month, 2 digits with leading zeros (01 - 31)
j: Day of the month without leading zeros (1 - 31)
D: A textual representation of a day, three letters (Mon - Sun)
l: A full textual representation of the day of the week (Sunday - Saturday)
m: Numeric representation of a month, with leading zeros (01 - 12)
M: A short textual representation of a month, three letters (Jan - Dec)
F: A full textual representation of a month, such as January or March
n: Numeric representation of a month, without leading zeros (1 - 12)
Y: A full numeric representation of a year, 4 digits (e.g. 2023)
y: A two-digit representation of a year (e.g. 23 for 2023)
H: 24-hour format of an hour with leading zeros (00 - 23)
h: 12-hour format of an hour with leading zeros (01 - 12)
i: Minutes with leading zeros (00 - 59)
s: Seconds with leading zeros (00 - 59)
a: Lowercase am or pm
A: Uppercase AM or PM*/
";
echo date("d",time())."<br>";
echo date("D",time())."<br>";
echo date("j",time())."<br>";
echo date("N",time())."<br>";
echo date("w",time())."<br>";
echo date("z",time())."<br>";
echo date("F",time())."<br>";
echo date("m",time())."<br>";
echo date("M",time())."<br>";
echo date("n",time())."<br>";
echo date("t",time())."<br>";
echo date("L",time())."<br>";

?>  