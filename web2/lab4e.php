<?php
//use of local and global variable
/*In PHP, a global variable is a variable that can be accessed from anywhere in the code,
 while a local variable is a variable that can only be accessed within a specific function or code block. 
 Here is an example of how global and local variables can be used in a function */
$globalVar = 10; // global variable

function addNumbers($num1, $num2) {
    $localVar = 5; // local variable
    global $globalVar;
    $sum = $num1 + $num2 + $localVar + $GLOBALS['globalVar']; // using both local and global variables
    return $sum;
}
echo addNumbers(2,4)."<br>";
echo "$globalVar is a global variable";
?>