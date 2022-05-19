<?php
if(isset($_POST["myform"]))
{
	$file = "classList.txt";
    $classes = $_POST["mytext"];
    //file_put_contents($file, "");
    file_put_contents($file, $classes . "\r\n");
    header("Location:/awardsForm/index.html");
}
?>