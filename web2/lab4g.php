<?php
function isPositive($num) {
    if ($num > 0) {
        return true;
    } else {
        return false;
    }
}

if (isPositive(10)) {
    echo "The number is positive";
} else {
    echo "The number is not positive";
}
?>