<?php

// interface:- we define the method in the parent class and then we implement it in the child class

// no need to define the public method the methods are already public 
// we cannot define the properties in the interface
interface productDetails{
  function productsNames();
  function productid();

};

class childProduct implements productDetails{
   function productsNames()
   {
    echo "these are the product details ";
   }

   function productid()
   {
    echo "here we print the product id ";
   }

}

$s1 = new childProduct();
$s1->productid();
echo "<br/>";
$s1->productsNames();



?>