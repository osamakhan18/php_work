<?php

// include :- it inculde the file but it has the chances to repeate the same file 
// inclue_once:- it  check if that the same file cannot repeate more than one time 
//requird :- it show the fatal error of the  file if we give the wrong path 
//required_once :-  it show the fatal error of the  file if we give the wrong path  but for the that the file cannot repeate

$a = include('./array.php');
echo  $a;

for($i=0;$i<5;$i++){
  $b = include_once('./hello.php');
  echo $b;

}


?>