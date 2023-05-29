
<form method="post" action="">
date=<input type="date" name="date">
<br>
<input type="submit" value="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
$ny=$_POST['date'];
$d1=strtotime($ny);
$t=strtotime("today");
$diff=$d1-$t;
$days=$diff/86400;
if($days<0)
{
    $days=365+$days;
}
echo floor($days);
echo "<p>is the no.of days remaining for the next christmas.<p>";}
?>



