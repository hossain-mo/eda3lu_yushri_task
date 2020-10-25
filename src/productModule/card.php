<?php
namespace App\ProductModule;
use App\ProductModule\Product;
use App\CalculationModule\Calculation;
//class for holding products , simulate card
class Card{
    private $products;
    private $numOfTshirts = 0;
    public $calculation;
    public function __construct(){
        $this->products = array();
        $this->calculation = new Calculation($this);
    }

    public function addProduct(Product $product){
        array_push($this->products,$product);
        if($product->getName()==="T-shirt")
            $this->numOfTshirts++;
    } 

    public function getProducts(){
        return $this->products;
    }

    public function getNumberOfTshirts(){
        return $this->numOfTshirts;
    }

    public function displayResult(){
        return $this->calculation->displayResult();
    }
}
