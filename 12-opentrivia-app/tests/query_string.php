<?php 
require_once "../lib/jsonTools.php";

// $_POST['amount'];
$amount = filter_input(INPUT_POST,'amount',FILTER_VALIDATE_INT,[
    'options' => [
        'min_range' => 5,
        'max_range' => 20
    ]
]);

if(!$amount){
   
    die("non hai messo la quantità");
}

// var_dump($amount);

/**
 * Siamo arrivati a ottenre le domande 
 * dobbiamo fixare la cache (guardare i percorsi)
 * layout domande
 */
# Veriabili Superglobali
// print_r($_POST);

// https://opentdb.com/api.php?category=&difficulty=hard&amount=10
$url = "https://opentdb.com/api.php?". http_build_query($_POST);
// echo $url;die();
$response = getJson($url);
print_r($response);