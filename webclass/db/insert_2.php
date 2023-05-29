<?php
include("connection.php");
$name=$_POST['name'];
$roll=$_POST['roll'];
$email=$_POST['email'];
$salary=$_POST['salary'];
$gender=$_POST['gender'];


echo"hello"."<br>";
$sql="insert into web(name,roll,email,salary,gender) values
('$name',$roll,'$email',$salary,'$gender')";
$result=mysqli_query($connect,$sql);
if(!$result)
{
    die("failed to insert".mysqli_error($result));
    
}
echo" value inserted sucessfully";
?>
