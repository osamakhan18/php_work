<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $c = $_POST["post_user"];
  $d = $_POST["post_password"];

  echo "The user name is: " . htmlspecialchars($c) . "<br/>";
  echo "The user password is: " . htmlspecialchars($d);
} else {
  echo "Form not submitted correctly.";
}
?>
