<?php

$file1 = "orginal.txt";

$str = file_get_contents($file1);
$file2 = "copy.txt";
if(file_put_contents($file2, $str))
{
    echo "Copied sucessful";
}



///---------dipndra-------
// <?php
// $file1=fopen("bim.txt","r");//open file or url
// $data=fread($file1,500);//binary-safe file read
// $file2=fopen("ncc.txt","w");
// $copy=fwrite($file2,$data);//binary safe write file
?>