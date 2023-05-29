<?php
//In PHP, the static keyword is used to declare a static variable inside
// a function or method. A static variable retains its 
//value between function calls, meaning that it is not destroyed when the function
// is finished executing

function countCalls() {
    static $count = 0; // declare static variable
    
    $count++; // increment count on each call
    echo "Function has been called " . $count . " times. <br>";
}

countCalls(); 
countCalls(); 
countCalls(); 
?>