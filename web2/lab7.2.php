<?php
//one hour
setcookie('username', 'Aayusha',time()+3600); 
echo $_COOKIE['username'];
//two days
setcookie('phone','98043xxxxx',time()+172800);
$phone= $_COOKIE['phone'];
echo "<br>".$phone;
?>