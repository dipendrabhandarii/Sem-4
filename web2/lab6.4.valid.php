<?php
echo "value inserted sucessfully";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = isset($_POST['name']); 
    $email = isset($_POST['email']);
    $address = isset($_POST['address']);
    $phone = isset($_POST['phone']);
    $college_id = isset($_POST['college_id']);

if($name==""||$college==""||$phone=="")
{
    echo"All field are required";
}
if(strlen($phone)!=10)
        {
        echo"Phone no must be of 10 digits";
        }
if(!filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL)){
            echo "Email is not valid";}
else{            
            echo"<h1>Form is valid </h1>";
}

    $connect=mysqli_connect("localhost","root","","ncc_bim");
    $sql = "insert into ncc_bim(id,name,email,address,phone,college_id) VALUES
    ('$id','$name','$email', '$address', '$phone', '$college_id')";
    $result= mysqli_query($connect,$sql);
if(!$result)
{
    die("failed to insert".mysqli_error($result));
    
}

echo" value inserted sucessfully";
        }
            
            //close the connection
    
            ?>
