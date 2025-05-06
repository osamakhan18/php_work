<?php

$path = 'dummyfiledata';
$items = scandir($path);
$items = array_diff($items,array('.','..'));
echo '<br/>';
print_r($items);

foreach($items as $items){
  echo $items;
  echo "<br/>";
}

?>