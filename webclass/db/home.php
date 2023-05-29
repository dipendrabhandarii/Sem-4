<?php
session_start();
if(isset($_SESSION['name'])){
	$diff=(time()-$_SESSION['time'])/60;
	if($diff<=1){
	echo"Hello, welcome to home ".$_SESSION['name']."<br>";
	echo"<a href='logout.php'>logout</a>";
}
else{
	session_unset();
	session_destroy();
	header('location:login.php');
}
}
else{
	echo"Invalid credentials";
}
?>