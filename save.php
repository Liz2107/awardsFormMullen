<?php
if(isset($_POST["mytext"]))
{
	$file = "data.txt";
    //changed thing inside post to specific dropdown- if this fails revert to general form name
	$class_name = $_POST["selectClass"];
    $student_name = $_POST["selectStudent"];
    $teacher_name = $_POST["teacherName"];
    $trimester = $_POST["trimester"];
    $text3 = $_POST["text_area"];

    // $split_names = explode($student_name, " ");
    // //these currently show up as blank spaces
    // $last_name = $split_names[1];
    // $first_name = $split_names[0];

    $output_to_write = $class_name . "," . $student_name . "," . $teacher_name . "," . "$trimester";

	// POST field mytext into the text and put a new line on the end.
	// LOCK_EX prevents anyone else from writing to the file 
	file_put_contents($file, $output_to_write . "\r\n", FILE_APPEND);
    file_put_contents($file, $mytext . "\r\n", FILE_APPEND);

    if($class_name != "")
    {
        header("Location:/awardsForm/submissionPage.html");
    }
}
?>