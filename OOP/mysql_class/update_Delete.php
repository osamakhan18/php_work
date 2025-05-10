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
    print_r($result);
    echo "</pre>";
  }


   // update the student data 



  function update() {
    $sqlQuery = "UPDATE student SET name = 'ali ahmad' WHERE id = 14";
    $updatedData = $this->dbconn->prepare($sqlQuery);

    if ($updatedData->execute()) {
      echo "Data updated successfully.";
    } else {
      echo "Failed to update data.";
    }
  }

 // data delete successfully

 

//   function delete(){
//     $sqlQuery= "delete from student where id = 14";
//     $deleteData = $this->dbconn->prepare($sqlQuery);
//     if ($deleteData->execute()) {
//       echo "Data deleted successfully.";
//     } else {
//       echo "Failed to delete data.";
//     }

//   }
 }

// Create object and call methods
$student = new Student($conn);

// Uncomment to update a record
// $student->update();


// $student->delete();




// Display all students
$student->studentDetails();

?>
