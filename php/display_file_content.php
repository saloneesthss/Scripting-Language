<?php
$file_name = "display_string.txt";

$string_to_write = "Hello, this is a string written to the file.";
file_put_contents($file_name, $string_to_write);

$content = file_get_contents($file_name);
echo "Content of the file: " . $content;
?>
