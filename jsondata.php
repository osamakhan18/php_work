<?php

// json is the  text base data through which we pass the data from one server or application to other
// the data is in the object format

// $user = ["name" =>"osama khan", "age" => 22, "email"=>"khan@gmail.com"];
// $jsonUser = json_encode($user);
// print_r($jsonUser);


$user = '{"name":"osama khan","age":22,"email":"khan@gmail.com"}';
$jsonUser= json_decode($user, true);
print_r($jsonUser);


?>