<?php
namespace App\ProductModule;
class Product{
    protected $name;
    protected $price;

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }
    
}