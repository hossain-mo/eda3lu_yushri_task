<?php
namespace App\ProductModule;
use App\ProductModule\Tshirt;
use App\ProductModule\Shoes;
use App\ProductModule\Pant;
use App\ProductModule\Jacket;
use App\ProductModule\Product;
use App\ProductModule\Card;
//build card 
class CardBuilder{

    public function build($itemsList){
        $card = new Card();
        foreach($itemsList as $item){
            $product = sprintf('App\\ProductModule\\%s',ucfirst( str_replace("-", "", $item)));
            $card->addProduct(new $product());
        }
        return $card;
    }

    
}
