<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">

<?php
	$f=fopen("data1.csv","r");
	while(!(feof($f))){
		echo "<tr>";
		$arr=fgetcsv($f);
		if(!($arr)){
			break;
		}
		foreach ($arr as $value) {

			echo "<td> $value </td>";
		}

		echo "</tr>";

	}
	print_r($arr);
	fclose($f);


?>
</table>
</body>
</html>