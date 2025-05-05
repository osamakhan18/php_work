<?php

$city = [

  [1,"peshawar",2500],
  [2,"islamabad",3000],
  [3,"Lahore",2000]
];

echo "<table  border=1>";
   
for($i=0;$i<count($city);$i++)
{
  echo "<tr>";
  for($j=0;$j<count($city[$i]);$j++){
    echo  "<td>";
    print_r($city[$i][$j]);
    echo  "</td>";

  }
  echo "</td>";

}
echo "</table>"

?>