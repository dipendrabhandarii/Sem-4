<?php
include("connection.php");
$id=$_GET['id'];
$name=$_POST['name'];
$roll=$_POST['roll'];
$email=$_POST['email'];
$salary=$_POST['salary'];
$gender=$_POST['gender'];


echo"hello"."<br>";
$sql="update web set name='$name', roll='$roll', email='$email', salary='$salary',
 gender='$gender' where id=".$id;
$result=mysqli_query($connect,$sql);
if(!$result)
{
    die("failed to update".mysqli_error($connect));
    
}
echo" value updated sucessfully";
?>

