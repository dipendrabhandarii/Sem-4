<?php
$name=$_POST["name"];
$age=$_POST["age"];
$comments=$_POST["comments"];
$hob= isset($_POST['hobbies']);
//$hob=$_POST['hobbies'];
if($name==""||$age==""||$comments=="")
echo "field is blank";
else if(strlen($name)<2||strlen($name)>10)
echo "name should be between 2 to 10 characters";
else if(!preg_match("/^[a-zA-Z]*$/",$name))
echo "name field only contains aplhabets";
else if(!preg_match("/^[0-9]*$/",$age))
echo "age should be number.";
else if($age<16||$age>55)
echo "Age should be between 16 and 55";

   else if($hob<1)
echo "please select atleast one hobby";

else {
echo "form is valid";}
?>
