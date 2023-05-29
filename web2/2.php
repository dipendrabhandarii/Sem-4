<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$salary=$_POST['salary'];
$country=$_POST['country'];
if($name==""||$email==""||$phone==""||$salary="")
{
    echo"All field are required";
}
else if(!preg_match("/^[a-zA-Z]*$/",$name)){
    echo" name field is not match";} 
 else if(strlen($name)<6)
        {
        echo"Name must be greater than 6 digits";
        }
    else if(!preg_match("/^[9][7-8][0-9]*$/",$phone)){
        echo" Phone field is not match";}

        else if(strlen($phone)!=10)
        {
        echo"Phone no must be of 10 digits";
        }
     else if(!filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL)){
    echo "Email is not valid";}

else {
        echo "The form is valid";
    }
?>