<?php
$connect=mysqli_connect("localhost","root","","ncc_bim");
if(!$connect)
{
    die("connection failed".mysqli_connect_error().mysqli_connect_errno());

}
//echo"connected";
?>
<?php

echo"hello"."<br>";
$sql="update ncc_bim set address='Baitadi', phone=9841000000 where id=4 and id=5";
$result=mysqli_query($connect,$sql);
if(!$result)
{
    die("failed to update".mysqli_error($connect));
    
}
echo" value updated sucessfully";
?>