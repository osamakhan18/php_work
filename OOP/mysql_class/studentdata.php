<?php

include('config.php'); // Make sure this defines $conn properly

class Student {
  public $dbconn;

  function __construct($conn) {
    $this->dbconn = $conn;
  }

  function studentDetails() {
    $studentData = $this->dbconn->prepare("SELECT * FROM student");
    $studentData->execute(); // fixed typo
    $result = $studentData->fetchAll();
echo "<pre>";

    print_r($result);
  }
}

// Assuming $conn is defined in config.php
$student = new Student($conn);
$student->studentDetails();

?>
