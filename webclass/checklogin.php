<?php
session_start();
date_default_timezone_set('Asia/Kathmandu');
$serverName="localhost";
$userName="root";
$password="";
$db="web_dbms";
$conn=mysqli_connect($serverName,$userName,$password,$db);
if(!$conn){
	die("connection failed".mysqli_connect_error());
}
$email=$_POST['email'];
$pass=$_POST['mypass'];
$sql="Select * from user where email='$email' and pass='$pass'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)==1){
	$_SESSION['name']=$email;
	$_SESSION['time']=time();
	header('location:home.php');
}
else{
	echo"Invalid credentials";
}
?>