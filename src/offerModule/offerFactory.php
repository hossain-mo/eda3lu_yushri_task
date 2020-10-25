<?php
namespace App\OfferModule;
use App\OfferModule\ShoesOffer;
use App\OfferModule\TshirtOffer;
use App\ProductModule\Shoes;
use App\ProductModule\Tshirt;
use App\ProductModule\Card;
//factory of offers behaviours
class OfferFactory{
    private $tShirt;
    private $shoes;
    private $card;
    public function __construct(Card $card){
        $this->tShirt = new Tshirt();
        $this->shoes = new Shoes();
        $this->card = $card;
    }

    public function getOffer(){
        $numberOfTshirts = $this->card->getNumberOfTshirts();
        $numberOfDiscounts = (int) ($numberOfTshirts/2);
        for($i = 0; $i <$numberOfDiscounts; $i++)
            yield new TshirtOffer();

        foreach($this->card->getProducts() as $item){
            if($item->getName() === $this->shoes->getName()){
                yield new ShoesOffer();
            }
        }
        
    }
}