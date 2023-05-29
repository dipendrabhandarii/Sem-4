
<form method="post" action="">
dob=<input type="date" name="date">
<br>
<input type="submit" value="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
$dob=$_POST['date'];
$d1=strtotime($dob);
$t=strtotime("today");
//echo $t."<br>";
$diff=$d1-$t;
$days=$diff/86400;
if($days<0)
{
    $days=365+$days;
}
echo ceil($days)."<p>is the no.of days remaining for the next birthday.<p>";
}
?>



