<?php
function sum( )
{
    $number=func_num_args();
    $sum=0;
    for($i=0;$i<$number;$i++)
    {
        $sum+=func_get_arg( $i );
        }
        return $sum;
        }
        echo sum( 1 );
        echo "<br>";
        echo sum( 2, 3 );
        echo "<br>";
        echo sum( 1,2,3,4,10);
        echo "<br>";
?> 

        