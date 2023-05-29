<?php
//mktime(h,m,s,month,day,year) returns unix timestamp
echo mktime(1-28-0-2-14-2023);
echo "<br>";//return unix timestamp for a given date
$a=mktime(07,0,20,11,01,2022);
echo "<br>";
$b=time();//return current unix timestamp
echo $b;
echo "<br>";
echo date('y-m-d h:m:s',$b);
echo "<br>";
echo date('y-m-d h:m:s',$a);//format a locat time/date

//how can you find the total days in a month
//cal_days_in_month(CAL_GREGORIAN,$month,$year);
