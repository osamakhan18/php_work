<?php
 setcookie("name","khan");
//  print_r($_COOKIE["name"]);

 if (isset($_COOKIE["name"])){
  echo "the current cookie is ".$_COOKIE["name"];

 }
 
?>