<?php
include("connection.php");
$id=$_GET['id'];
$sql="Delete from web where id=".$id;
$res=mysqli_query($connect,$sql);
if(!$res){
die("Failed to delete".mysqli_error($connect));
}
header("location:list2.php")
?>
