<?php
$file1=fopen("ncc.txt","w+");
$file2=fopen("nccs.txt","a+");
if($file1==true&&$file2==true)
echo "file opened sucessfully";
?>