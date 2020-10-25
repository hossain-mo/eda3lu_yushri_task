<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');


require_once __DIR__ . '/vendor/autoload.php';
use App\ProductModule\CardBuilderProxy;
use App\OfferModule\OfferFactory;


$data = json_decode(file_get_contents("php://input"));

//input
$products = $data->products;

//call api
displayResponse($products);

// simple api
function displayResponse($products){
    $card = new CardBuilderProxy();
    $card = $card->build($products);
    if($card){
        $offers = new OfferFactory($card);
        foreach($offers->getOffer() as $offer){
            $offer->discount($card);
        }
        http_response_code(200);
        echo json_encode ($card->displayResult());
        return;
    }
    http_response_code(503);
    echo json_encode(array("message" => 'The Product Should be compatable with ours ["T-shirt","Pant","Shoes","Jacket"]'));

}
