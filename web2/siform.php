<?php
$principle=$_POST['principle'];
$time=$_POST['time'];
$rate=$_POST['rate'];

if($principle==""||$time==""||$rate==""){
echo "All fields are required";
}
else if(!filter_input(INPUT_POST,"principle", FILTER_VALIDATE_FLOAT)){
echo "principle should be number";
}
else if(!filter_input(INPUT_POST,"time", FILTER_VALIDATE_FLOAT)){
echo "time should be number";
}

else if(!filter_input(INPUT_POST,"rate", FILTER_VALIDATE_FLOAT)){
echo "rate should be number";
}
else{
$si=($principle*$time*$rate)/100;
echo "$si is the answer";
}
