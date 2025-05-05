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

<?php

//  multiDimensional Array

// $city = [

//   [1,"peshawar",2500],
//   [2,"islamabad",3000],
//   [3,"Lahore",2000]
// ];

// foreach($city as $cityData){
//  foreach($cityData as $cityDetails){
//   print_r($cityDetails);
//  }

// foreach($cityData as $cityDetails){
//   print_r($cityDetails);
// echo "</br>";

//  }
// echo "</br>";
// }



$city = [

  [1,"peshawar",2500],
  [2,"islamabad",3000],
  [3,"Lahore",2000]
];

for($i=0;$i<count($city);$i++){
  // print_r($city[$i]);
  for($j=0;$j<count($city[$i]);$j++){
    print_r($city[$i][$j]);
    echo "</br>";
  }

}



?>