<?php
// final_keyword :-when we write the final keyword with the class it cannot extneds 


 final class demoParent{
  function demofun(){
    echo "this is the example of the final keyword";
  }
}

// class child extends demoParent{ // cannot extends the parent demoParent

// }

// $s1 = new child(); give the error
// $s1->demofun();

$s2 = new demoParent();
$s2->demofun();





?>