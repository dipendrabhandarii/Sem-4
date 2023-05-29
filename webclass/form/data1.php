<?php
$name=$_POST['name'];
$roll=$_POST['roll'];
$email=$_POST['email'];

if($name==""||$roll==""||$email==""){
echo "All field are required";}

else if(!preg_match("/^[A-Za-z]*$/",$name)){
echo" name  field is not match";}

else if(!preg_match("/^[0-9]*$/",$roll)){
echo" ROll field is not match";}


else if(!filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL)){
echo "Email is not valid";}
else
{
    echo "form is valid";

}

?>
