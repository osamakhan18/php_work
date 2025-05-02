<?php

$user = ["osama", "ahmad", "khan","ali","aslam"];

for($i = 0;$i<count($user);$i++){
  echo $user[$i];
  echo "</br>";
  

}



?>


<?php

// foreach loop 

$names = ["atif", "aslam",'ali', "aslam"];

foreach ($names as $x) {
  echo $x;
  echo "</br>";

  
}


// second method

foreach($names as $y):
  echo $y;

endforeach



?>

<?php

// assocaitive array :- are those which have the which have the key and values

$userDatails = ["name"=>"osama","age"=>"22","city"=>"peshawar"];

foreach ($userDatails as $key => $data) :
  echo $key ." is ".$data;
  echo "</br>";
endforeach




?>