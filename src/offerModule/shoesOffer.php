<?php
namespace App\OfferModule;
use App\ProductModule\Card;
use App\OfferModule\Offer;
use App\ProductModule\Shoes;
//type of offers behaviour
class ShoesOffer implements Offer{
    private $shoes;
    private $salePercentage = 10;
    public function __construct(){
        $this->shoes = new Shoes();
    }
    public function discount(Card $card){
        $value = $this->shoes->getPrice() * ($this->salePercentage/100);
        $card->calculation->discount($value);
    }
}