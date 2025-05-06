<?php

// $file = "dummyfiledata/data.txt";
// $content = "this is dummy file data for the file creation ";

// $openFile = fopen($file,"w");
// fwrite($openFile,$content);
// fclose($openFile);
//?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="" method="post">
  <input type="text" name="filename" placeholder="enter the file name">
  <br>
  <br>
  <textarea name="content" >

  </textarea>

  <br>
  <br>
  <button>create file </button>
</form>
  
</body>
</html>


<?php


if(isset($_POST['filename'])){
  $file = 'dummyfiledata/'.$_POST['filename'];
$content = $_POST['content'];
$fileopen = fopen($file,'w');
$filewrite = fwrite($fileopen,$content);
fclose($fileopen);
echo "file open successfully";
}


?>