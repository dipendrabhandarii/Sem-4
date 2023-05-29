<?php
//set date  as given using setdate()
$date = new DateTime();
$date->setDate(2000, 1, 1);
$date->setTime(8, 0, 10,);
echo $date->format('Y-m-d H:i:s a');
?>