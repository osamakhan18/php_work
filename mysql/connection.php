<?php
// this is the connection through the mysqli class
$host = "localhost";
$username = "root";
$password = null;
$database = "college";


$conn = new mysqli($host,$username,$password,$database);

if($conn ->connect_error){
  die("cannot connect ".$connect_error);
}

echo "data base connected successfully";
echo "<br/>";

$result = $conn->query("show tables")->fetch_all(); 
print_r($result)

?>