<?php 
echo "Hello";
$myfile = fopen("results.txt", "w") or die("Unable to open file!");
$txt = "Hello, world!";
fwrite($myfile, $txt);
fclose($myfile);
?>