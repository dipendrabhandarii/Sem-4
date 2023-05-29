<?php
$filename = 'bim.txt';

// Open the file for reading
$file = fopen($filename, 'a');
fwrite($file, "How are you? \n");

// Read the file content
$content = file_get_contents($filename);

if ($content !== false) {
    // Output the file content
    echo $content;
}
else {
    echo "Failed to read the file.";
}
?>
