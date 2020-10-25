<?php
namespace App\ProductModule;
use App\ProductModule\CardBuild;
use App\ProductModule\Product;
// class for protect our logic from hunting
class CardBuilderProxy{
    private $cardBiulder;
    public function __construct(){
        $this->cardBiulder = new CardBuilder();
    }
    public function build($itemsList){
        $products = ["T-shirt","Pant","Shoes","Jacket"];
        foreach($itemsList as $item){
            if(! in_array($item, $products))
                return false;
        }
        return $this->cardBiulder->build($itemsList);
    }

    
}
