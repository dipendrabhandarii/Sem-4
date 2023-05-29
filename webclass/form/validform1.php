 <?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$college=$_POST['college'];
$email=$_POST['email'];
$comment=$_POST['comment'];


if($name==""||$college==""||$phone==""||empty($email)||empty($comment))
{
    echo"All field are required";
}
else if(!preg_match("/^[a-z A-Z]*$/",$name)){
    echo" name field is not match";} 

    else if(!preg_match("/^[9][7-8][0-9]*$/",$phone)){
        echo" Phone field is not match";}
        //phone regular expression [NCC]\w+/i

        else if(strlen($phone)!=10)
        {
        echo"Phone no must be of 10 digits";
        }
        

    else if(!filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL)){
        echo "Email is not valid";}
        //email req expression "/^[a-z]\w+\@[a-z]\w+\.\w+/i";

        else if(empty($_POST['gender']))
        {
            echo"Gender must be selected";
        }
        else if (empty($_POST["football"])&&empty($_POST["movies"])&&empty($_POST["badminton"]))
        {
            echo"one of the checkbox must be selected";
        }
        
         else{
        echo'The form is valid';
    }
?>