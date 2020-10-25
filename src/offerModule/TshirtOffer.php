<?php
namespace App\OfferModule;
use App\ProductModule\Card;
use App\ProductModule\Jacket;
//type of offers behaviour
class TshirtOffer implements Offer{
    private $jacket;
    public function __construct(){
        $this->jacket = new Jacket();
    }
    public function discount(Card $card){
        $value = $this->jacket->getPrice() * 0.5;
        $card->calculation->discount($value);
    }
}