<?php
include("connection.php");
$name=$_POST['name'];
$roll=$_POST['roll'];
$email=$_POST['email'];


echo"hello"."<br>";
$sql="insert into web(name,roll,email) values
('$name',$roll,'$email')";
$result=mysqli_query($connect,$sql);
if(!$result)
{
    die("failed to insert".mysqli_error($connect));
    
}
echo" value inserted sucessfully";
?>
