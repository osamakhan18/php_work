<?php

function userDetails($a,$b){
  echo $a + $b;
  // return "my name is osama ahmad";  // the difference between the echo and return is that echo only display the 
                                         // the value while the return give the output of the value 

 
}
echo userDetails(2,3);
// echo userDetails()


?>




<?php
//  function with the default parameter 
// if we cannot pass the value  in the parameter it will set the default value of this like the color 

function defaultParameter($name,$color = "black"){
  echo "<h1> this is the example of the default parameter </h1>";
  echo "the name of the laptop is $name and the color is $color";
};

// defaultParameter("hp")
 defaultParameter("hp","silver")





?>
 </br>

<?php
// example of the varaible function and the callback function

function variablefunction(){
  echo "this is the example of the varible fumction ";

}

$test = "variablefunction";
$test()

?>

<?php

// callback function


function first(){
  echo " this is the first function" ;
  echo "</br>";
};

$firstfun = "first";


echo "</br>";
function second($a){
    $a();
  
  echo "this is the function for the callback";
}

second($firstfun)


?>