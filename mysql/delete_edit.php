<?php
include('./config.php');

// Fetch data (fixed)
$stmt = $conn->prepare('SELECT * FROM student');
$stmt->execute();
$result = $stmt->fetchAll();

echo "<table border='1'>";
foreach($result as $student) {  // Changed $students to $student (typo fix)
    echo "<tr>
    <td>" . $student['name'] . "</td>
    <td>" . $student['course'] . "</td>
    <td>" . $student['batch'] . "</td>
    <td>" . $student['year'] . "</td>
    <td><form method='post'><button name='delete' value='" . $student['id'] . "'>Delete</button></form></td>
    </tr>";
}
echo "</table>";

if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    $stmt = $conn->prepare('DELETE FROM student WHERE id = ?');  // Fixed SQL (SELECT → DELETE)
    if ($stmt->execute([$id])) {  // Use prepared statement safely
        echo "Record deleted";
    } else {
        echo "Error occurred";
    }
}
?>