<?php

class authStudent{
  function __construct()
  {
  echo "this is the parent class";

    
  }
}

class student extends authStudent{

  function studentfun(){
    echo " this is the student function";
  }

}


$s1 = new student;
$s1->studentfun();





?>