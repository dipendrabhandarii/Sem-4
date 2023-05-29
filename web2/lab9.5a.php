<?php
$filename = 'bim.txt';

// Open the file for reading
$file = fopen($filename, 'r');
//fwrite($file, "How are you? \n");

// Read Single Character 
$c = fgetc($file);
echo "Read Single Character : $c \n";
// Read Multiple Characters
$c = fgets($file);
echo "Read Multiple Characters : $c \n";
// Close the file
fclose($file);


?>

  




