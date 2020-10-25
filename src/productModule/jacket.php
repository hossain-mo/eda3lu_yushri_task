<?php
namespace App\ProductModule;
use App\ProductModule\Product;
class Jacket extends Product{
   
    public function __construct(){
        $this->name = "Jacket";
        $this->price = 19.99;
    }

    
}
