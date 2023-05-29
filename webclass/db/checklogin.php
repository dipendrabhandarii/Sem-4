<?php
session_start();
date_default_timezone_set('Asia/Kathmandu');
$servername="localhost";
$username="root";
$password="";
$db="web_dbms";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
	die("connection failed".mysqli_connect_error());
}
$email=$_POST['email'];
$pass=$_POST['mypass'];
$sql="Select * from user where email='$email' and password='$pass'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);

if(mysqli_num_rows($res)==1){
	$_SESSION['name']=$email;
	$_SESSION['time']=time();
	$_SESSION['role']=$row['role'];
	header('location:home.php');
}
else{
	echo"Invalid credentials";
}
?>