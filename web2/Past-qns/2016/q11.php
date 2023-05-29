<?php
//Write a php program to create a web form that contains a textbox for name and checkboxes for hobbies.
//When a form is submitted, check a name is entered and 
//at least one of the hobbies is selected

print <<<HTML
<form action= "$_SERVER[PHP_SELF]" method="post">
    <label for="name">Name</label>
    <input type="text" name = "name"><br><br>

    <label for="hobbies">Hobbies</label>
    <input type="checkbox" name="hob[]" value="sport">Sport
    <input type="checkbox" name="hob[]" value="coding">Coding
    <input type="checkbox" name="hob[]" value="travel">Travelling
    <input type="checkbox" name="hob[]" value="read">Reading
    <br><br>
    <input type="submit" name="submit">
</form>


HTML;

$err = array();
$hob = array();
if(isset($_POST['submit']))
{
    if(empty($_POST['name']))
    {
        $err[] = "Name is required.";
    }

    if(!isset($_POST['hob']))
    {
        $err[] = "Hobbies should not be empty.";
    }
    else if(count($_POST['hob'])<2)
    {
        $err[] = "Hobbies should more than one";
    }
}

if($err)
{
    print_r($err);
}
else{
    echo count($_POST['hob']);
    echo "Form submitted sucessfully.";
}

?>