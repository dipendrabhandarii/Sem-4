<form action="" method="post">
Cid:<input type="number" name="cid"><br>
cname:<select name="cname">
    <option value=1 >NCC</option>
    <option value=2 >SDC</option>
    <option value=3 >KIST</option>
    <option value=4 >ISM</option>
    <option value=5 >PRIME</option>
    <option value=6 >LIVERPOOL</option>
    <option value=7 >ST.XAVIER</option>
    <option value=8 >PADMAKANYA</option>
    <option value=9 >ISM</option>
    <option value=10 >HERALD</option>
    
</select><BR>
address:<input type="text" name="address"><br>
phone:<input type="number" name="phone"><br>
<input type="submit" name="submit">
</form>
<?php

$connect=mysqli_connect("localhost","root","","ncc_bim");
if(!$connect)
{
    die("not connected").mysqli_error();
}
if(isset($_POST['submit']))
{
    $cid=$_POST['cid'];
    $cname=$_POST['cname'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];


$sql="insert into tbl_college(cid,cname,address,phone) values($cid,'$cname','$address','$phone')";
$result= mysqli_query($connect,$sql);
if(!$result)
{
    die("failed to insert".mysqli_error($result));
    
}

echo" value inserted sucessfully";
}
        ?>


    