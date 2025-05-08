<?php

include('./config.php');

// Corrected INSERT statement: use single quotes ' ' for values, backticks ` ` only for column/table names
$insert = $conn->prepare("INSERT INTO `student` (`id`, `name`, `course`, `batch`,`year`) 
VALUES (NULL, 'ahmad', 'software', 'four', 'six')");

$result = $insert->execute();

if ($result) {
    echo "Data inserted successfully";
} else {
    echo "Failed to insert data";
}

?>
