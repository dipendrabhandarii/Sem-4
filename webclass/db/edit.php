<?php
include("connection.php");
$id=$_GET['id'];
$sql="select * from web where id=".$id;
$res=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($res);


?>
 <html>
<head>
<body> 
    <form method="post" action="insert_2.php">
        Name:<input type="text" value="" name="name"><br>
        Roll:<input type="text" value="" name="roll"><br>
        Email:<input type="text" value="" name="email"><br>
        Salary:<input type="text" value="" name="salary"><br>
        Gender:<input type="radio" value="M" name="gender">male
        <input type="radio" value="F" name="gender">female
        
        <br>
        <input type="submit" value="ok">
</form>
