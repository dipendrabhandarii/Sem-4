<?php
function demo()
{
    $number=func_num_args();
    echo "The no. of argument is $number";
    $args=func_get_args();
    for($i=0;$i<$number;$i++)
    {   echo "<br>";
        echo $args[$i]."\n";
    }
}
demo(2,5,7);
?>