<?php

$host = "localhost";
$username = "root";
$password = null;

try {
    $conn = new PDO("mysql:host=$host;dbname=college", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connected successfully";
} catch (PDOException $err) {
    echo "Error occurred: " . $err->getMessage();
    exit(); // Stop the script if connection fails
}

echo "<br/>";


$result = $conn->query("SHOW TABLES");
while ($row = $result->fetch(PDO::FETCH_NUM)) {
    print_r($row);
    echo "<br/>";
}

?>
