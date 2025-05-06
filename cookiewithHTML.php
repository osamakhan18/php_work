<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<form action="" method="post">
  <input type="text" name="user"  placeholder="enter the name">
  <br>
  <br>
  <button   name="button"  value="set">set</button>
  <br>
  <br>
  <button name="button"  value="display">display</button>
  <br>
  <br>
  <button name="button"  value="delete">delete</button>
</form>
</body>
</html>

<?php

if(isset($_POST["button"])){
  if($_POST["button"] == "set"){
    $value = $_POST["user"];
    setcookie("user",$value);
    echo $value;

  }


  if($_POST['button'] == 'display'){
    $val = $_POST['user'];
    setcookie("user",$val);

    echo $val;
  }

  if($_POST["button"] == 'delete'){
    $dis = $_POST["user"];
    setcookie("user",$dis);

    echo $dis;
  }
}


?>