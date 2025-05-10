<!-- <?php

// class demoConstant{

//   const name = "osama ahamd";

//   function constantfun(){
//      echo self::name;
//   }

  


// }

// $s1 = new demoConstant();
// $s1->constantfun();

// echo demoConstant::name

?> -->

<?php

class demoConstant{

  private  const name = "osama ahamd khan";

  function constantfun(){
     echo self::name;
  }

  


}

$s1 = new demoConstant();
$s1->constantfun();


?>