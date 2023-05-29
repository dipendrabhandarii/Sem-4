<?php

function interest($p, $r, $t)
{
    return ($p * $t * $r)/100;
}

$p = 100;
$r = 10;
$t = 1;

$i = interest($p, $t, $r);

echo "The interest is : $i"


?>