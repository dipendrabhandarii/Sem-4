<?php
$name=$_POST["name"];
$age=$_POST["age"];
$email=$_POST["email"];
$password=$_POST["password"];
if($name==""||$age==""||$email==""||$password=="")
echo "All field are required";
else if(!preg_match("/^[A-Z a-z]*$/",$name))
echo "name only contains characters";
else if(!preg_match("/^[0-9]*$/",$age))
echo "age only contains numbers";
else if(strlen($password)<5)
echo "password should be greater than 5 characters";
else if(!filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL))
    echo "Email is not valid";
    //email req expression "/^[a-z]\w+\@[a-z]\w+\.\w+/i";
    else 
    echo "form is valid";
    ?>
    