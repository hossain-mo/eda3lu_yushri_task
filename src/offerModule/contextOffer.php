<?php
namespace App\OfferModule;
use App\OfferModule\Offer;
use App\OfferModule\ShoesOffer;
use App\OfferModule\TshirtOffer;
use App\ProductModule\Shoes;
use App\ProductModule\Tshirt;
//context class for offers
class contextOffer{
    private $offer;
    public function __construct(Offer $offer){
        $this->offer = $offer;
    }

    public function execute(Card $card){
        $this->offer->discount();
    }
}