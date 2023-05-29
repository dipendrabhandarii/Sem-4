<?php
//wap to create a file named "bim.txt" in 'w' mode
$f = fopen("bim.txt", "w");
//write hello to the file
fwrite($f, "hello\n");
echo "file created  and content written sucessfully";
?>