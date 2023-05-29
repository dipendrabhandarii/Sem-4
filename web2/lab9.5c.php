<?php
$myfile = fopen("bim.txt","r");
echo fgets($myfile)."<br>";
while(!feof($myfile)) 
{echo fgets($myfile);
}
fclose($myfile);
?>
