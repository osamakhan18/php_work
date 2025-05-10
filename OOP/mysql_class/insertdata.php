<?php

include('config.php'); // Make sure $conn is set correctly

class Student {
  public $dbconn;

  function __construct($conn) {
    $this->dbconn = $conn;
  }

  function studentDetails() {
    $studentData = $this->dbconn->prepare("SELECT * FROM student");
    $studentData->execute();
    $result = $studentData->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($result); // You had this commented out
    echo "</pre>";
  }

  function insertData() {
    // Removed 'id' column from INSERT statement
    $sqlQuery = "INSERT INTO student (`name`, `course`, `batch`, `year`) 
                 VALUES ('Ahmad Khan', 'Chemistry', 'One', 2010)";
    $insertedData = $this->dbconn->prepare($sqlQuery);
    
    if ($insertedData->execute()) {
      echo "Data inserted successfully.";
    } else {
      echo "Failed to insert data.";
    }
  }

  
}

// Create object and call methods
$student = new Student($conn);

// Call this ONCE to insert data
$student->insertData();

// Then display all students
$student->studentDetails();

?>
