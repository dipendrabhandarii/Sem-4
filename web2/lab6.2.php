<?php
$connect=mysqli_connect("localhost","root","","ncc_bim");
if(!$connect)
{
    die("connection failed".mysqli_connect_error().mysqli_connect_errno());
}
$sql="insert into ncc_bim(name,email,address,phone,college_id) values
('Dipendra','dipendra@gmail','lubhu','98043xxxxx',1232)";
$result=mysqli_query($connect,$sql);
if(!$result)
{
    die("failed to insert".mysqli_error($result));
    
}
echo" value inserted sucessfully";

?>