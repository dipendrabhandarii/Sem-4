
<?php
//shift and pop..array_shift(arrayname)..$shifted=arrayshift($arr).$poped=array_pop($arr)
//unshift and push..array_unshift(arrayname,value1...)..array_push(arraynane, value1)
//shift remove the the first element
//pop removes the last element
//unshift insert element in first index
//push insert element in the last index
$arr=["argentina","germany","spain","brazil","portugal","england","belgium","saudi"];
print_r($arr);
echo "<br>"."After shifting technique"."<br>";
$a= array_shift($arr);
$s=array_pop($arr);
$g= array_shift($arr);
$b=array_pop($arr);
$e=array_pop($arr);
$p=array_pop($arr);
array_push($arr,$b);
array_unshift($arr,$e);
print_r($arr);

output:
//Array ( [0] => england [1] => spain [2] => brazil [3] => belgium )
?>