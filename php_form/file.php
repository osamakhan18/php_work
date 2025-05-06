<?php


// $filename = $_FILES['uploadfile']['name']; // the uploadfile is the form name not the file name to upaload

// $upload_path = './uploadsFile/'.$filename;



// echo $upload_path;
// move_uploaded_file($_FILES['uploadfile']['tmp_name'],$upload_path)


//D:\php\htdocs\php_work\php_form\file.php



$filename = $_FILES['uploadfile']['name'];

$upload_path = './uploadsFile/'.$filename;

if(move_uploaded_file($_FILES['uploadfile']['tmp_name'],$upload_path)){
   echo "file uploaded successfully";

}else{
  echo "cannot upload ";
}

?>