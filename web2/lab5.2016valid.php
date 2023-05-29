<?php
$name=$_POST["name"];
$hob=isset($_POST['hob']);
if($name=="")
echo "name is required";
else if($hob<1)
echo "select atleast one hobbies";
else 
echo "form is valid";
?>