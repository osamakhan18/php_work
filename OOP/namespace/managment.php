<?php

use teacher\teacher1;
use student\student1;

include('teacher.php');
include('student.php');

$teacher = new teacher1();
$teacher->teacherName();

echo "<br>";

$student = new student1();
$student->studentName();

?>
