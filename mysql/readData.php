<?php

include('./config.php');

$getstudent = $conn->prepare("SELECT * FROM student");
 $getstudent->execute();
 $result = $getstudent->fetchAll(PDO::FETCH_ASSOC);

print_r($result)


?>