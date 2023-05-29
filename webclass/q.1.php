
<?php
/*WAP a function that takes two argument i.e the first argument is array and the second 
argument is search value The function should return found if the search value is in the 
array else it should return Not found.*/
function hello($a,$b)
{
//in_array(search value, arrayn).if found it return true.it is for value search.
//if(in_array($b,$a))//array_key_exists($search key, $arr)

if(array_key_exists($b,$a))
{
    return true;
}
else
return false;
}
$arr=["a","b","c","d","e"];
$data=hello($arr,"3");
if ($data)
{
    echo "<b>found</b>";
}
else
echo "Not found";
in_array
