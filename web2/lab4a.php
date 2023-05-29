<?php
include("list.php");
echo "<br>";
require("list.php");
//require will produce a fatal error and stop the script execution if the file being
// included cannot be found
// or loaded, whereas include will only produce a warning message and allow the script
// execution to continue.
?>