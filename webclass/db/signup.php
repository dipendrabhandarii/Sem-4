<?php
$servername="localhost";
$username="root";
$password="";
$db="web_dbms";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
	die("connection failed".mysqli_connect_error());
}
$N=$_POST['myname'];
$E=$_POST['email'];
$P=$_POST['mypass'];
$role=$_POST['role'];
$sql="insert into user(username,email,password,role) values('$N','$E','$P','$role')";
$res=mysqli_query($conn,$sql);
if(!$res){
	die("failed to insert".mysqli_error($conn));
}
echo"value inserted successfully";
header("location:login.php")
?>