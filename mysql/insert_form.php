<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="name" placeholder="enter the name">
    <br>
    <br>
    <input type="text" name="course" placeholder="enter the course name">
    <br>
    <br>
    
    <input type="text" name="batch" placeholder="batch">
    <br>
    <br>
    
    <input type="text" name="year" placeholder="year">
    <br>
    <br>

    <button type="submit">Insert data</button>
  </form>
</body>
</html>

<?php

if (isset($_POST['name']) && !empty($_POST['name'])) {
  $name = $_POST["name"];
  $course = $_POST["course"];
  $batch = $_POST["batch"];
  $year = $_POST["year"];

  include('./config.php');

  // Use single quotes around values, no backticks
  $insert = $conn->prepare("INSERT INTO `student` (`id`, `name`, `course`, `batch`, `year`) 
  VALUES (NULL, '$name', '$course', '$batch', '$year')");

  $result = $insert->execute();

  if ($result) {
      echo "Data inserted successfully";
  } else {
      echo "Failed to insert data";
  }
}

?>
