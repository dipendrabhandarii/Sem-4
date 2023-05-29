<?php
	$f=fopen("data.csv","w");
	
	$arr=array("ram","kathmandu","98989898","male");
	fputcsv($f, $arr);
	fclose($f);
	echo "file created.";

?>