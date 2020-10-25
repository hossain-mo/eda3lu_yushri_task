<?php
namespace App\CalculationModule;
use App\ProductModule\Card;
//this class handle card calculations
class Calculation{
    private $card;
    private $total = 0;
    private $tax = 14;
    private $discounts = 0;
    private $totalTax = 0;

    public function __construct(Card $card){
        $this->card = $card;
    }
    public function getSubTotal(){
        foreach($this->card->getProducts() as $item){
            $this->total += $item->getPrice();
        }
        return $this->total;
    }

    //update discount flage
    public function discount($value){
        $this->discounts += $value;
    }

    public function displayResult(){
        $subtotal= $this->getSubTotal();
        $tax = $this->getTotalTax();
        $discounts = $this->getTotalDiscounts();
        $total = $subtotal + $tax - $discounts;
        return ["Subtotal" => $subtotal, "Tax" => $tax, "Discounts" => $discounts, "Total" => $total];
        echo json_encode ("Subtotal : ".$subtotal."\n");
        echo json_encode("Tax : ".$tax."\n");
        echo json_encode("Discounts : ".$discounts."\n");
        echo json_encode("Total : ".$total."\n");
    }

    public function getTotalDiscounts(){
        return $this->discounts;
    }
    
    public function getTotalTax(){
        $this->totalTax = $this->total * ( $this->tax /100 );
        return $this->totalTax;
    }

}