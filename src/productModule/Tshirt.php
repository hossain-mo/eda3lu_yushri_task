<?php
namespace App\ProductModule;
use App\ProductModule\Product;
class Tshirt extends Product{
   
    public function __construct(){
        $this->name = "T-shirt";
        $this->price = 10.99;
    }

    
}
