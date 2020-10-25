<?php
namespace App\OfferModule;
use App\ProductModule\Card;
//strategy class for offers
interface Offer{
    public function discount(Card $card); 
}