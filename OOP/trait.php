<?php
// A trait is a collection of methods that you can include in multiple classes to avoid code duplication, without using inheritance


trait class1 {
  function class1_fun(){
   echo "this is the trait";
  }
}

class class2{
  use class1;
}

class class3{
  use class1;
}

// $s1 = new class2;
// $s1->class1_fun();

$s2 = new class3;
$s2->class1_fun();







?>