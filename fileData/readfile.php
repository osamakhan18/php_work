<!-- <?php

// $file = 'dummyfiledata/data.txt';
// $openfile = fopen($file,'r');
// $fileread = fread($openfile,filesize($file));
// echo $fileread;

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="readfile"  >
    <br>
    <button type="submit" name="submit">readfile</button>
  </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
  if (isset($_FILES['readfile']) && $_FILES['readfile']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['readfile']['tmp_name'];
    $fileopen = fopen($file,'r');
    $fileread = fread($fileopen, filesize($file));
    echo $fileread;
    fclose($fileopen);
  }
}

if(isset($_FILES['readfile'])){
  print_r($_FILES['readfile']);
}
?>
