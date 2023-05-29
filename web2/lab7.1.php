<?php
//how cookie and session are set and display? show example
setcookie('username', 'Aayusha',time()+3600); 
$hello= $_COOKIE['username'];
echo $hello;
echo "<br>"; 
session_start(); // Start the session
$_SESSION['cart'] = array('Hat', 'Pant', 'Jacket');
echo $_SESSION['cart'][2]; // Outputs 'item1'

?>






