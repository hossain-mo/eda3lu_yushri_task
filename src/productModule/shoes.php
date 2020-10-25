<?php
namespace App\ProductModule;
use App\ProductModule\Product;
class Shoes extends Product{
   
   public function __construct(){
       $this->name = "Shoes";
       $this->price = 24.99;
   }

   
}
