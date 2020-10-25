<?php
namespace App\ProductModule;
use App\ProductModule\Product;
class Pant extends Product{
   
    public function __construct(){
        $this->name = "Pants";
        $this->price = 14.99;
    }

    
}
