<?php
//write a program in PHP to store "coding in PHP" 
//in a file named "coding.txt".

// $file = fopen('coding.txt','w');

$str = 'Coding in PHP and HTML';

file_put_contents('coding.txt',$str);


?>