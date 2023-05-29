<?php
//create date using strtotime
//8:00:00 pm march 09 2023
$d=strtotime("march 9 2023 8pm");
$date= date("r","$d");
echo $date;
//march 9 2023 8pm
?>