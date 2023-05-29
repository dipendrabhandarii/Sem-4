<?php
$connect=mysqli_connect("localhost","root","","web_dbms");
if(!$connect)
{
    die("connection failed".mysqli_connect_error().mysqli_connect_errno());

}
//echo"connected";
?>
