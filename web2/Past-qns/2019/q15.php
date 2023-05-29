<?php
if(isset($_POST['submit']))
{
    $err="";
    $hob="";
    $name = $_POST['name'];
    $age = $_POST['pass'];
    $hob = $_POST['hob'];
    $comment = $_POST['comment'];

    // echo "$name";
    // echo "$age";

    // echo "$comment";

    if($name < 2 && $name < 10)
        $err= "Name not valid";
    else{
        if(!preg_match("/^[a-zA-Z-']*$/",$name))
            $err = "Name should be character only.";
    }

    if(!empty($age))
    {
        if(!preg_match("/^[0-9]*$/",$age))
            {
                $err = "Age should be number.";
            }
                if($age>55 || $age < 16)
                    $err =" Age should be in between 16 and 55.";
            
    }
    else{
        $err = "Age is required.";
    }

    if(empty($hob))
    {
        $err = "Hobbies should not be empty.";
    }
    else
    {
        if(count($hob) < 1)
            $err = "Choose more hobbies";
    }

    if(empty($comment))
    {
        $err = "Comment required";
    }

    if(empty($err))
    {
        echo "Sucess";
    }
    else
    {
        print_r($err);
    }
}

?>