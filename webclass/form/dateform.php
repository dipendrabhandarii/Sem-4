<form action='' method='post'>
    Date1: <input type="date" name="date1">
    <br>
    Date2: <input type="date" name="date2">
    <br>
    <input type="submit" name="OK">
</form>
<?php
if(!empty($_POST))
{
    $d1=$_POST['date1'];
    $d2=$_POST['date2'];
    $date1=strtotime($d1);
    $date2=strtotime($d2);
    $diff=$date2-$date1;
    $days=$diff/(60*60*24);
    echo "The difference in days is $days";
}


